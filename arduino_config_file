#include <LiquidCrystal.h>
#include<Servo.h>

LiquidCrystal lcd(12,11,5,4,3,2);
int counter = 0;

Servo ser;
int a=4;
int b=13;
int Available;
int ir = 9;
int car_arrived = HIGH; 

long duration1, duration2, duration3, duration4;
int distance1, distance2, distance3,distance4;
int trigPin1=6;
int echoPin1=A0;

int trigPin2=7;
int echoPin2=A1;

int trigPin3=13;
int echoPin3=A2;

int trigPin4=8;
int echoPin4=A3;

void distance01()
{
digitalWrite(trigPin1, LOW);   // Clears the trigPin
delayMicroseconds(2);
digitalWrite(trigPin1, HIGH);  // Sets the trigPin on HIGH state for 10 micro seconds
delayMicroseconds(10);
digitalWrite(trigPin1, LOW);
duration1 = pulseIn(echoPin1, HIGH);    // Reads the echoPin, returns the sound wave travel time in microseconds
distance1= duration1*0.0172;
Serial.print("Distance 1: ");
Serial.println(distance1);
}

void distance02()
{
digitalWrite(trigPin2, LOW);   // Clears the trigPin
delayMicroseconds(2);
digitalWrite(trigPin2, HIGH);  // Sets the trigPin on HIGH state for 10 micro seconds
delayMicroseconds(10);
digitalWrite(trigPin2, LOW);
duration2 = pulseIn(echoPin2, HIGH);    // Reads the echoPin, returns the sound wave travel time in microseconds
distance2= duration2*0.0172;
Serial.print("Distance 2: ");
Serial.println(distance2);
}

void distance03()
{
digitalWrite(trigPin3, LOW);   // Clears the trigPin
delayMicroseconds(2);
digitalWrite(trigPin3, HIGH);  // Sets the trigPin on HIGH state for 10 micro seconds
delayMicroseconds(10);
digitalWrite(trigPin3, LOW);
duration3 = pulseIn(echoPin3, HIGH);    // Reads the echoPin, returns the sound wave travel time in microseconds
distance3= duration3*0.0172;
Serial.print("Distance 3: ");
Serial.println(distance3);

}

void distance04()
{
digitalWrite(trigPin4, LOW);   // Clears the trigPin
delayMicroseconds(2);
digitalWrite(trigPin4, HIGH);  // Sets the trigPin on HIGH state for 10 micro seconds
delayMicroseconds(10);
digitalWrite(trigPin4, LOW);
duration4 = pulseIn(echoPin4, HIGH);    // Reads the echoPin, returns the sound wave travel time in microseconds
distance4= duration4*0.0172;
Serial.print("Distance 4: ");
Serial.println(distance4);
}

void setup()
{
 lcd.begin (16,2);

 pinMode(8, INPUT);

 ser.attach(10);

 pinMode(trigPin1, OUTPUT);
 pinMode(echoPin1, INPUT);

 pinMode(trigPin2, OUTPUT);
 pinMode(echoPin2, INPUT);

 pinMode(trigPin3, OUTPUT);
 pinMode(echoPin3, INPUT);

 pinMode(trigPin4, OUTPUT);
 pinMode(echoPin4, INPUT);

 lcd.print("Total slots:4 ");
 Serial.begin(9600); // Starts the serial communication
}

void slots()
{
 if(counter>4){
   Available = 0;
 } else {
  if(distance1<=b)
  {
    counter+=1;
  } else {
   counter = counter;
  }
  if(distance2<=b)
  {
    counter+=1;
  } else {
   counter = counter;
  }
  if(distance3<=b)
  {
    counter+=1;
  } else {
   counter = counter;
  }
  if(distance4<=b)
  {
    counter+=1;
  } else {
   counter = counter;
  }

 Available = 4 - counter; 
 }
 counter = 0;
}

void loop()
{
distance01();
distance02();
distance03();
distance04();
slots();
lcd.display();
delay(500);
lcd.setCursor(0,1);
lcd.print("Avail = ");
lcd.print(Available);
car_arrived = digitalRead(ir);
if(car_arrived == LOW and Available == 0)
{
  lcd.clear();
  lcd.print("NO SPACE");
  lcd.clear();
}
if(car_arrived == LOW and Available >0)
{
    lcd.clear();   
    lcd.print("Welcome");
    lcd.setCursor(0,1);
    lcd.print("Avail :");
    lcd.print(Available);
    ser.write(10);
    delay(2000),
    ser.write(110); 
    delay(3000);
    ser.write(10);
} 
 lcd.clear();
 lcd.print("Total Slot: 4");
 lcd.setCursor(0,1);
 slots();
 lcd.print("Avail :");
 lcd.print(Available);
 delay(2000);
}
