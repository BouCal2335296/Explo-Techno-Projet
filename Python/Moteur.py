import RPi.GPIO as GPIO
import time
import datetime
import mysql.connector
import smbus

bus = smbus.SMBus(1)

#check your PCF8591 address by type in 'sudo i2cdetect -y -1' in terminal.
def setup(Addr):
	global address
	address = Addr
     
def read(chn): #channel
	try:
		if chn == 0:
			bus.write_byte(address,0x40)
		if chn == 1:
			bus.write_byte(address,0x41)
		if chn == 2:
			bus.write_byte(address,0x42)
		if chn == 3:
			bus.write_byte(address,0x43)
		bus.read_byte(address) # dummy read to start conversion
	except Exception as e:
		print ("Address: %s" % address)
		print (e)
	return bus.read_byte(address)	

#######################################################################################################################

# Connection à la base de donnée
db = mysql.connector.connect(
    host="localhost",
    user="cegep",
    password="cegep",
    database="stationsolaire"
)
myCursor = db.cursor()

 
# Configuration des paramètres du GPIO
GPIO.setmode(GPIO.BCM)  # Utilise la numérotation des broches GPIO (BCM)
GPIO.setwarnings(False)
 
# Broche à laquelle le FS90R est connecté
servo_pin = 16 # Assurez-vous que la broche est correcte pour votre configuration
GPIO.setup(servo_pin, GPIO.OUT)
 
# Configuration du PWM sur la broche du servo
pwm = GPIO.PWM(servo_pin, 20)  # Fréquence de 50Hz pour le servo moteur
pwm.start(0)  # Démarre avec un rapport cyclique de 0 (ne bouge pas le moteur)
 
def tourner_A():
    pwm.ChangeDutyCycle(3.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(0.4)
    pwm.ChangeDutyCycle(0)  # Ajustez la valeur pour la rotation à droite


def tourner_RAZ():
    pwm.ChangeDutyCycle(0.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(0.75)
    pwm.ChangeDutyCycle(0)  # Ajustez la valeur pour la rotation à droite

 


val = 9999
tour = 0
position = 0
i = 0
while i < 3:
	setup(0x48)
	relever = read(0)
	print ('Relevé = ', read(0))
	time.sleep(2)
	tour += 1

   	#relever = résultat du capteur
	if relever < val:
		val = relever
		position = tour

	tourner_A()
	i += 1

tourner_RAZ()
time.sleep(1)
date = datetime.datetime.now()

sql = "DELETE FROM orientationMoteur WHERE noPosition=1"
myCursor.execute(sql)
sql1 = "ALTER TABLE orientationMoteur AUTO_INCREMENT = 0"
myCursor.execute(sql1)
sql2 = "INSERT INTO orientationMoteur (position, relever) VALUES (%s, %s)"
myCursor.execute(sql2, (position, val,))
sql3 = "INSERT INTO historiqueRelever (noPosition, date) VALUES (%s, %s)"
myCursor.execute(sql3, (position, date))


db.commit()
 
pwm.stop()
GPIO.cleanup()
db.close()