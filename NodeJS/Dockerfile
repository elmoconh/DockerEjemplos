# Usa una imagen oficial de Node.js como base
FROM node:18

# Crea un directorio de trabajo en el contenedor
WORKDIR /app

# Copia los archivos del proyecto al contenedor (si es necesario)
COPY . .

# Instala las dependencias del proyecto con salida detallada
RUN npm install --verbose

# Comando por defecto (puedes cambiarlo según tus necesidades)
CMD ["bash"]