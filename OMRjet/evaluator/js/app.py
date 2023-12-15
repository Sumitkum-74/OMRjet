from flask import Flask, render_template, request, jsonify
import cv2
import numpy as np
import base64

app = Flask(__name)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/process_image', methods=['POST'])
def process_image():
    # Get the uploaded image file
    uploaded_image = request.files['image']

    if uploaded_image:
        # Read and process the uploaded image
        image_data = uploaded_image.read()
        image_data = np.frombuffer(image_data, dtype=np.uint8)
        image = cv2.imdecode(image_data, cv2.IMREAD_COLOR)

        # Process the image (replace this with your actual image processing)
        processed_image = image

        # Encode the processed image as a base64 string
        _, processed_image_data = cv2.imencode('.png', processed_image)
        processed_image_base64 = base64.b64encode(processed_image_data).decode('utf-8')

        return jsonify({'processed_image': processed_image_base64})

    return jsonify({'error': 'No image uploaded'})

if __name__ == '__main__':
    app.run()
