from flask import Flask, render_template, request, jsonify  

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('page.html')

@app.route('/update', methods=['POST'])
def update_content():
    if request.method == 'POST':
        new_content = request.form.get('new_content')
        return jsonify({'new_content': new_content}) 

if __name__ == '__main__':
    app.run(debug=True)
