import RPi.GPIO as GPIO
import time
#import mysql.connector

#connection à la base de donnée
#db = mysql.connector.connect(
#    host="localhost",
#    user="root",
#    password="",
#    database="stationsolaire"
#)
 
# Configuration des paramètres du GPIO
GPIO.setmode(GPIO.BCM)  # Utilise la numérotation des broches GPIO (BCM)
GPIO.setwarnings(False)
 
# Broche à laquelle le FS90R est connecté
servo_pin = 16 # Assurez-vous que la broche est correcte pour votre configuration
GPIO.setup(servo_pin, GPIO.OUT)
 
# Configuration du PWM sur la broche du servo
pwm = GPIO.PWM(servo_pin, 20)  # Fréquence de 50Hz pour le servo moteur
 
orientation = 0 
pwm.start(0)  # Démarre avec un rapport cyclique de 0 (ne bouge pas le moteur)

# Fonctions pour contrôler le moteur
def tourner_A():
    pwm.ChangeDutyCycle(10)
    time.sleep(1.8)
    pwm.ChangeDutyCycle(0)
    orientation = 1

def tourner_B():
    pwm.ChangeDutyCycle(10)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1.8)
    pwm.ChangeDutyCycle(0)
    orientation = 2

def tourner_C():
    pwm.ChangeDutyCycle(10)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1.8)
    pwm.ChangeDutyCycle(0)
    orientation = 3

def tourner_RAZ():
    pwm.ChangeDutyCycle(2.1)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1.35)
    #time.sleep(0.83)
    pwm.ChangeDutyCycle(0)
    orientation = 0
 

try:
    #tourner_A()
    #time.sleep(1)
    #tourner_B()
    #time.sleep(1)
    #tourner_C()
    #time.sleep(1)
    tourner_RAZ()
    time.sleep(1)
# A TESTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    mycursor = db.cursor()
    sql = "INSERT INTO orientationmoteur ()"



        #with mysql.connector.connect(**connection_params) as db :
        #with db.cursor() as c:
        #c.execute("insert into orientationmoteur (position) \
        #           values ()")
        #db.commit()
 
except KeyboardInterrupt:
    print("Arrêt du programme")
 
finally:
    GPIO.cleanup()
    db.close()