import RPi.GPIO as GPIO
import time
 
# Configuration des paramètres du GPIO
GPIO.setmode(GPIO.BCM)  # Utilise la numérotation des broches GPIO (BCM)
GPIO.setwarnings(False)
 
# Broche à laquelle le FS90R est connecté
servo_pin = 18  # Assurez-vous que la broche est correcte pour votre configuration
GPIO.setup(servo_pin, GPIO.OUT)
 
# Configuration du PWM sur la broche du servo
pwm = GPIO.PWM(servo_pin, 50)  # Fréquence de 50Hz pour le servo moteur
pwm.start(0)  # Démarre avec un rapport cyclique de 0 (ne bouge pas le moteur)
 
# Fonctions pour contrôler le moteur
def tourner_droite():
    pwm.ChangeDutyCycle(7.5)  # Ajustez la valeur pour la rotation à droite
    time.sleep(1)
 
def tourner_gauche():
    pwm.ChangeDutyCycle(2.5)  # Ajustez la valeur pour la rotation à gauche
    time.sleep(1)
 
def arret():
    pwm.ChangeDutyCycle(0)  # Arrête le moteur
    time.sleep(1)
 
# Exemple d'utilisation
try:
    while True:
        tourner_droite()
        time.sleep(1)
        tourner_gauche()
        time.sleep(1)
        arret()
        time.sleep(1)
 
except KeyboardInterrupt:
    print("Arrêt du programme")
 
finally:
    pwm.stop()
    GPIO.cleanup()