const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');
const bodyParser = require('body-parser');

const app = express();
const port = 5000;

app.use(cors());
app.use(bodyParser.json());

const db = mysql.createConnection({
    host: process.env.DB_HOST || 'localhost',
    user: process.env.DB_USER || 'root',
    password: process.env.DB_PASSWORD || 'tu_contraseña',
    database: process.env.DB_NAME || 'mensajes_db',
  });

db.connect(err => {
  if (err) throw err;
  console.log('Conectado a MySQL');
});

app.get('/mensajes', (req, res) => {
  db.query('SELECT * FROM mensajes', (err, results) => {
    if (err) return res.status(500).send(err);
    res.json(results);
  });
});

app.post('/mensajesEnviar', (req, res) => {
    const { contenido } = req.body;
    if (!contenido) return res.status(400).send('El contenido no puede estar vacío');
    db.query('INSERT INTO mensajes (texto) VALUES (?)', [contenido], (err, result) => {
      if (err) return res.status(500).send(err);
      res.json({ id: result.insertId, contenido });
    });
  });

app.listen(port, () => console.log(`Servidor corriendo en http://localhost:${port}`));
