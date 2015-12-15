from datetime import datetime

from flask import Flask, redirect, url_for, request, render_template
from flask_wtf import Form
from wtforms import TextField
from pony.orm import *

from settings import *

app = Flask(__name__)
db = Database('sqlite', DATABASE_URL, create_db=True)

class Inbox(db.Entity):
    TextDecoded = Required(str)
    UpdatedInDB = Required(datetime)

db.generate_mapping(create_tables=True)

@app.route('/')
def root():
    with db_session:
        messages = select(p for p in Inbox)
        return render_template('root.html', messages=messages)

@app.route('/', methods=['POST'])
def add_message():
    text = request.form['text']
    with db_session:
        message = Inbox(TextDecoded=text, UpdatedInDB=datetime.now())

    return redirect(url_for('root'))

if __name__ == "__main__":
    app.run(debug=True)
