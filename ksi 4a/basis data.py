import mysql.connector
mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    password=""
)
mycursor = mydb.cursor()
mycursor.execute("CREATE DATABASE apotek")
mycursor.execute("SHOW DATABASEs")
for x in mycursor:
    print(x)