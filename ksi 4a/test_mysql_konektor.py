import mysql.connector

'''mydb = mysql.connector.connect(
    host="localhost",
    user="prity",
    password="prity123"
)
print(mydb)'''

'''mydb = mysql.connector.connect(
    host="localhost",
    user="prity",
    password="prity123"
)'''
'''mycursor = mydb.cursor()
mycursor.execute("CREATE DATABASE ksi_4a")'''

mydb = mysql.connector.connect(
    host="localhost",
    user="prity",
    password="prity123",
    database="ksi_4a"
)
'''mycursor = mydb.cursor()
mycursor.execute("SHOW DATABASES")
for x in mycursor:
    print(x)'''

'''mycursor=mydb.cursor()
mycursor.execute("CREATE TABLE kelas (name VARCHAR(255),alamat VARCHAR(255))")'''

mycursor=mydb.cursor()
mycursor.execute("SHOW TABLES")
for x in mycursor:
    print(x)

mycursor = mydb.cursor()
sql = "INSERT INTO kelas (nama, alamat) VALUES (%s, %s)" val = ("Nurmi", "Penebal")
mycursor.execute(sql, val)
mydb.commit()
print(mycursor.rowcount, "Data Pelanggan Berhasil Dimasukkan.")

