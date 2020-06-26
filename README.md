# Forest-ecology-and-green-cover-monitoring-system-using-IoT
The System is mainly based on Arduino Uno and Raspberry Pi which works on C++ and python programming respectively. Arduino Uno controls sensors like Temperature and humidity sensor(DHT11), proximity sensor and gas sensor while Raspberry Pi controls IR sensor and Pi camera. When it comes to green level monitoring, Image processing will do its task. For image processing purpose python programming is used. Image processing is coupled with Raspberry pi and forest fire detection is coupled with Arduino. The object detection is used for detecting humans and saw in order to prevent tree theft.The data is transferred through LORa wifi module which is used for long range data transfer in foresst.


The repository is included with source code,Project report,SRS,Power point presentation,and Base reference paper. 

WORKING:

Aurdino Uno -

Connected devices are-
•	Arduino Uno
•	Battery/ solar panel
•	Breadboard
•	LoRaWAN
•	Proximity sensor
•	Gas sensor
•	Temperature and Humidity Sensor
•	IR sensor
•	ESP8266

Necessary Libraries-
Adafruit Circuit Playground
MCCI Arduino LoRaWAN library
TheThingsNetwork
LMIC-Arduino

Working of the module-

DHT11.ino- This code is used to read dht11 sensor data and send it to thingspeak server through LoRA network.WE have to replace THe address part in the code with the actual adress of ones LoRa device.

Raspberry Pi-

Connected devices-
•	Raspberry Pi2 
•	Raspberry Pi Camera Module
•	Micro SDCard.

Necessary Libraries-

python idle-3.6
python - version 3
opencv- version 4.2
tensoflow- version 1.15
traing model-mobilenetssd
object detection tutorials link-https://towardsdatascience.com/custom-object-detection-using-tensorflow-from-scratch-e61da2e10087

working of module-

The raspberry pi is used for object detection and to monitor green cover.The object detection is used to detect saw and person.

objectdetection.py- This code gets live stream video from RPi as input and calculates green pixel count available in a frame and sends it to thinkspeak server.And it uses the frame for object detection where it uses cnn algorithm to detect saw. If saw is detected a variable 2 is pritnted on console which is transferred to the thingspeak where alert is genrated.

client.py- This program is made to run in raspberry pi which sends live stream video from pi to other devices within same network.WE used socket programming to achieve this.

web application-

we have to connect the web application with thingspeak channel by changing iFrame link which is present in respective thingspeak channel.The application can be run using XAMP,WAMP etc.
