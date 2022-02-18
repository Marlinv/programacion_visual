#Hacer programa en Python que me permita...
#Ejercicio 1: buscar las categorias por nombre.

print ("Cual es la categoria: ")
nombre_pais = input()


print ("Conexion Sakila")

import mysql.connector

conexion = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    db = "sakila"
)

cursor = conexion.cursor()

cursor.execute("SELECT*FROM country WHERE country LIKE '%"+nombre_pais+"%' ")

resultado = cursor.fetchall()

for registros in resultado:
    print (resultado)


