
print("Digina el nombre del idioma")
idioma = input()

import mysql.connector

print ("Conexion Sakila")

conexion = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    db = "sakila"
)

#representar la terminal de sql
Cursor = conexion.cursor()

#ejecutar el query
query = 'INSERT INTO language(name) VALUES (%s)'
Cursor.execute(query, [idioma])

conexion.commit()

print ("cantidad insertada", Cursor.rowcount)