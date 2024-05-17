from flask import Flask, render_template, request, jsonify
import time

app = Flask(__name__)

current_content = "This is some initial content."

@app.route('/')
def index():
    return render_template('page.html', initial_content=current_content)

@app.route('/update', methods=['POST'])
def update_content():
    global current_content
    if request.method == 'POST':
        new_content = request.form.get('new_content')
        current_content = new_content
        return "Content updated successfully"

@app.route('/get_content')
def get_content():
    global current_content
    while True:
        if current_content != request.args.get('last_content'):
            return jsonify({'new_content': current_content})
        time.sleep(1)

if __name__ == '__main__':
    app.run(debug=True)
