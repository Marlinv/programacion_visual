#Ejercicio 3: buscar las ciudades por su nombre, y mostrar la ciudad, 
# y el nombre del pais.


print ("Cual es la ciudadnombre: ")
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
