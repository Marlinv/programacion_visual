# Hacer un prog. que me pida mi edad 
# no permitir que no se menor de edad
# al final imprimir Bienvenido

print ("dime tu edad")
edad = int(input()) 

while edad < 18:
  print ("Digite su edad nuevamente")
  edad = input()

print ("edad aceptada")

if edad >= 18:
  print ("a que bar te gustaria ir?")
  bar = input()

else:
  print ("no puedes entrar")

print ("bienvenido")

