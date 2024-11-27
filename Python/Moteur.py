import RPi.GPIO as GPIO
import time
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

## à dé^lacer dans le try catch --- permet d'avoir le relever du capteur
if __name__ == "__main__":
	setup(0x48)
	print ('AIN0 = ', read(0))
	

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
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)

def tourner_RAZ():
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)
 


val = 0
i = 0
while i < 3:
	tourner_A()
	time.sleep(1)

	if __name__ == "__main__":
		setup(0x48)
		relever = read(0)
		print ('AIN0 = ', read(0))

   	#relever = résultat du capteur
	if val < relever:
		val = relever

	i+1

tourner_RAZ()
time.sleep(1)


sql = "INSERT INTO orientationmoteur (position) VALUES (%s)"
myCursor.execute(sql, val)
db.commit()
 
 
pwm.stop()
GPIO.cleanup()
db.close()