import mysql.connector
mydb = mysql.connector.connect(
    host="localhost",
    user="Novi",
    password="novi123",
    database="pegawai"
)
mycursor= mydb.cursor()
mycursor.execute("SELECT Nip FROM tbl_pekerjaan")
myresult = mycursor.fetchall()
for x in myresult:
    print(x) 

'''mycursor= mydb.cursor()
sql = "SELECT * FROM tbl_pekerjaan WHERE Nama_pekerjaan = 'dokter'"
mycursor.execute(sql)
myresult = mycursor.fetchall()
for x in myresult:
    print(x)

sql = "SELECT * FROM tbl_pengguna WHERE Nama= %a"
Nama= ("aldi", )
mycursor.execute(sql,Nama)

sql ="SELECT * FROM tbl_pengguna ORDER BY nama " 

mycursor= mydb.cursor()
sql = "DELETE FROM tbl_pengguna WHERE Nama = 'aldi'"
mycursor.execute(sql)
mydb.commit()
print(mycursor.rowcount, "Data Berhasil Dihapus.")

sql = "UPDATE tbl_pengguna SET nama = 'aldi' WHERE"
nama = 'angga'
mycursor.execute(sql)
mydb.commit()
print(mycursor.rowcount, "Data Berhasil Dirubah.")

mycursor.execute("SELECT * FROM pelanggan LIMIT 5")
myresult = mycursor.fetchall()
for x in myresult:
    print(x)'''

