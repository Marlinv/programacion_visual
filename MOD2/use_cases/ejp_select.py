
print ("Conexion Sakila")

#importar la libreria de mysql para poder conectarnos
import mysql.connector

#establecemos la conexion con masql
import mysql.connector.connect (
    host = "localhost",
    user = "root",
    passwd = "",
    db = "sakila"
)

#el cursor representa la terminal de mysql
Cursor = conexion.cursor()

#ejecutar un query (sentence sql)
Cursor execute.cursor("SELECT*FROM actor LIMIT 10")

#guardar en una variable todos los resultados del query
For registros in cursor.fechall():
    print (registros)

print (resultado)

#recorrer lo que hay en resultado
For registros in cursor.fechall():
    print (registros)

#cerramos la conexion
conexion.close()
