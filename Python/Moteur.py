import RPi.GPIO as GPIO
import time
 
# Configuration des paramètres du GPIO
GPIO.setmode(GPIO.BCM)  # Utilise la numérotation des broches GPIO (BCM)
GPIO.setwarnings(False)
 
# Broche à laquelle le FS90R est connecté
servo_pin = 16 # Assurez-vous que la broche est correcte pour votre configuration
GPIO.setup(servo_pin, GPIO.OUT)
 
# Configuration du PWM sur la broche du servo
pwm = GPIO.PWM(servo_pin, 20)  # Fréquence de 50Hz pour le servo moteur
pwm.start(0)  # Démarre avec un rapport cyclique de 0 (ne bouge pas le moteur)
 
# Fonctions pour contrôler le moteur
def tourner_A():
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)

def tourner_B():

    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)

def tourner_C():
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)

def tourner_D():
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)

def tourner_RAZ():
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)
 

try:
    while True:
        tourner_A()
        time.sleep(1)

        tourner_B()
        time.sleep(1)

        tourner_C()
        time.sleep(1)

        tourner_D()
        time.sleep(1)

        tourner_RAZ()
        time.sleep(1)
 
except KeyboardInterrupt:
    print("Arrêt du programme")
 
finally:
    pwm.stop()
    GPIO.cleanup()