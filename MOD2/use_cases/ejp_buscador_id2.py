# Ejercicio 2: buscar los clientes por su id,
# especificamente de la tienda 1 y
# mostrar el nombre y el apellido del cliente.


import mysql.connector
print ("what is a client: ")
client = input()


print ("Conexion Sakila")


conexion = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="",
    db="sakila"
)

cursor = conexion.cursor()

cursor.execute(
    "SELECT first_name, last_name from actor INNER JOIN city on city.city_id=actor.actor_id WHERE city_id = '"+1+"'  ")
client = cursor.fetchall()

for client in resultado:
    print (resultado)
