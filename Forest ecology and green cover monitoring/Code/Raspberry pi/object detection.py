import numpy as np
import urllib
import requests
import threading
import json
import os
import tensorflow as tf
import cv2
import io
import socket
import struct
from PIL import Image
import matplotlib.pyplot as pl
from utils import label_map_util
from utils import visualization_utils as vis_util

# path to the frozen graph:
PATH_TO_FROZEN_GRAPH = 'C:/Users/Sudinakalgal/Downloads/frozen_inference_graph.pb'

# path to the label map
PATH_TO_LABEL_MAP = 'C:/Users/Sudinakalgal/Downloads/label_map.pbtxt'

# number of classes 
NUM_CLASSES = 3


#cap = cv2.VideoCapture(0)
server_socket = socket.socket()
server_socket.bind(('192.168.1.3', 8000))  # ADD IP HERE
server_socket.listen(0)

# Accept a single connection and make a file-like object out of it
connection = server_socket.accept()[0].makefile('rb')



#reads the frozen graph
detection_graph = tf.Graph()
with detection_graph.as_default():
    od_graph_def = tf.GraphDef()
    with tf.gfile.GFile(PATH_TO_FROZEN_GRAPH, 'rb') as fid:
        serialized_graph = fid.read()
        od_graph_def.ParseFromString(serialized_graph)
        tf.import_graph_def(od_graph_def, name='')

label_map = label_map_util.load_labelmap(PATH_TO_LABEL_MAP)
categories = label_map_util.convert_label_map_to_categories(label_map, max_num_classes=NUM_CLASSES, use_display_name=True)
category_index = label_map_util.create_category_index(categories)

# Detection
with detection_graph.as_default():
    with tf.Session(graph=detection_graph) as sess:
        img = None
        while True:
            # Read frame from camera
            #ret, image_np = cap.read()
            #ret1,frame = cap.read()
            image_len = struct.unpack('<L', connection.read(struct.calcsize('<L')))[0]
            if not image_len:
                break
            # Construct a stream to hold the image data and read the image
            # data from the connection
            image_stream = io.BytesIO()
            image_stream.write(connection.read(image_len))
            # Rewind the stream, open it as an image with PIL and do some
            # processing on it
            image_stream.seek(0)
            frame1 = Image.open(image_stream)
            frame=np.array(frame1)
            image_np1 = Image.open(image_stream)
            image_np=np.array(image_np1)
            if img is None:
                img = pl.imshow(frame1)
            else:
                img.set_data(frame1)

    #########################################################################
            hsv = cv2.cvtColor(frame, cv2.COLOR_BGR2HSV)
            # Define 'green for now' range in HSV colorspace
            lower = np.array([25,52,72])
            upper = np.array([102,255,255])
            # Threshold the HSV image to get only blue color
            mask = cv2.inRange(hsv, lower, upper)
            # Bitwise-AND mask and original image
            res = cv2.bitwise_and(frame, frame, mask=mask)
            res = cv2.medianBlur(res, 5)
     ##################################################################################
            # Expand dimensions since the model expects images to have shape: [1, None, None, 3]
            image_np_expanded = np.expand_dims(image_np, axis=0)
            # Extract image tensor
            image_tensor = detection_graph.get_tensor_by_name('image_tensor:0')
            # Extract detection boxes
            boxes = detection_graph.get_tensor_by_name('detection_boxes:0')
            # Extract detection scores
            scores = detection_graph.get_tensor_by_name('detection_scores:0')
            # Extract detection classes
            classes = detection_graph.get_tensor_by_name('detection_classes:0')
            # Extract number of detections
            num_detections = detection_graph.get_tensor_by_name(
                'num_detections:0')
            # Actual detection.
            (boxes, scores, classes, num_detections) = sess.run(
                [boxes, scores, classes, num_detections],
                feed_dict={image_tensor: image_np_expanded})
            # Visualization of the results of a detection.
            vis_util.visualize_boxes_and_labels_on_image_array(
                image_np,
                np.squeeze(boxes),
                np.squeeze(classes).astype(np.int32),
                np.squeeze(scores),
                category_index,
                use_normalized_coordinates=True,
                line_thickness=3,
                )
        
            cv2.imshow('saw Detection', cv2.resize(image_np, (500, 500)))
            def GetClassName(data):
                for cl in data:
                    return cl['id']

            #data processed

            data = [category_index.get(value) for index,value in enumerate(classes[0]) if scores[0,index] > 0.9]
            det=GetClassName(data)
            print(det)
            #print ([category_index.get(value) for index,value in enumerate(classes[0]) if scores[0,index] > 0.5])
            tot_pixel1 = res.size
            green_pixel1 = np.count_nonzero(res)
            percentage1 = round(green_pixel1 * 100 / tot_pixel1, 3)
            print("green pixels: " + str(green_pixel1))
            print("Total pixels: " + str(tot_pixel1))
            print("Percentage of green pixels: " + str(percentage1) + "%")
        
            def thingspeak_post():
                threading.Timer(15,thingspeak_post).start()
                val1=str(green_pixel1)
                val2=str(tot_pixel1)
                val3=str(percentage1)
                val4=det
                URl='https://api.thingspeak.com/update?api_key='
                KEY='WK67CYJRV8UE66F9'
                HEADER='&field3={}&field4={}'.format(val3,val4)
                NEW_URL = URl+KEY+HEADER
                print(NEW_URL)
                data=urllib.request.urlretrieve(NEW_URL)
                print(data)
        
            thingspeak_post()
            
            if cv2.waitKey(50) & 0xFF == ord('q'):
                cv2.destroyAllWindows()
                break










