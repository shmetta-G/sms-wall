from __future__ import unicode_literals

from flask import Flask
from sqlalchemy import create_engine
from sqlalchemy.orm import Session
from sqlalchemy.ext.automap import automap_base
app = Flask(__name__)

import sys
sys.setdefaultencoding('utf-8')

Base = automap_base()
engine = create_engine('sqlite:///../db/db.sqlite')
# Reflect the tables
Base.prepare(engine, reflect=True)

Inbox = Base.classes.inbox

session = Session(engine)

@app.route('/')
def root():
    l = len(session.query(Inbox).all())
    return "Hello World" + str(l)

if __name__ == "__main__":
    app.run(debug=True)
