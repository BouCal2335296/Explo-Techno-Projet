import RPi.GPIO as GPIO
import time
import mysql.connector

# Connection à la base de donnée
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
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
 

try:
    val = 0
    for(i=0 ; i==3; i++):
    
        tourner_A()
        time.sleep(1)
        #relever = résultat du capteur

        if (val < relever):
            val = relever
    

    tourner_RAZ()
    time.sleep(1)


    sql = "INSERT INTO orientationmoteur (position) VALUES (%s)"
    myCursor.execute(sql, val)
    db.commit()
 
except KeyboardInterrupt:
    print("Arrêt du programme")
 
finally:
    pwm.stop()
    GPIO.cleanup()
    db.close()