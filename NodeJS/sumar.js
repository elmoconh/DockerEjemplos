const readline = require('readline');

// Crear interfaz para leer entrada del usuario
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

// Preguntar por el primer número
rl.question('Ingresa el primer número: ', (num1) => {
  // Preguntar por el segundo número
  rl.question('Ingresa el segundo número: ', (num2) => {
    // Intentar convertir las entradas a números y sumar
    const suma = parseFloat(num1) + parseFloat(num2);

    if (isNaN(suma)) {
      console.log('Por favor, ingresa valores numéricos válidos.');
    } else {
      console.log(`La suma de ${num1} y ${num2} es ${suma}`);
    }

    // Cerrar la interfaz
    rl.close();
  });
});

//docker run -it --rm -v "$(pwd):/app" -w /app node-dev bash
