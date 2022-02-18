print ("Digite el nombre del pais que desea buscar: ")
nombre_pais = input()


print ("Conexion Sakila")

#CONEXION CON LA BASE DE DATOS

#importar la libreria de msql para poder connectarnos
import mysql.connector

#establecemos la conexion con mysql
import mysql.connector.connect (
    host = "localhost",
    user = "root",
    passwd = "",
    db = "sakila"
)

#el cursor representa la terminal de mysql
Cursor = conexion.cursor()

#ejecutar el query
Cursor execute.cursor("SELECT*FROM country WHERE country LIKE '%"nombre_pais+"%' ")

#guardar en una variable todos los resultados del query
resultado = cursor.fetchall()

for registros in resultado:
    print (resultado)