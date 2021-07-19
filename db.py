import mysql.connector 

db = mysql.connector.connect(
    host='localhost', 
    username='root', 
    password=''
)
cur = db.cursor()

cur.execute("Create Database if not exists phimmoi")

# print(db)
