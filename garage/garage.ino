void setup() {
  // put your setup code here, to run once:
  pinMode(12, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
        if (Serial.available() > 0) {
            byte incomingByte = Serial.read();
            Serial.print("GO");
            digitalWrite(12, LOW);   // turn the LED on (HIGH is the voltage level)
            delay(100);              // wait for a second
            digitalWrite(12, HIGH);
        } 
}
