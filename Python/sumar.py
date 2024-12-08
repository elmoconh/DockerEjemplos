# sumar.py
import sys

# Capturar argumentos de la línea de comandos
try:
    num1 = int(sys.argv[1])
    num2 = int(sys.argv[2])
    print(f"La suma de {num1} y {num2} es {num1 + num2}")
except (IndexError, ValueError):
    print("Por favor, proporciona dos números como argumentos.")

#docker run --rm -v "$(pwd):/app" -w /app python:3.11 python sumar.py 5 7
