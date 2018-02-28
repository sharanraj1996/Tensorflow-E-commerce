#!/bin/sh


cd /home/cse/tensorflow


sudo bazel-bin/tensorflow/examples/label_image/label_image --graph=/home/cse/Desktop/output_graph.pb --labels=/home/cse/Desktop/output_labels.txt --output_layer=final_result --image=/var/www/html/$1 --input_layer=Mul 2> /home/cse/r.txt 



