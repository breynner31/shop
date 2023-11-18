const express = require('express');
const bodyParser = require('body-parser');
const session = require('express-session');
const mysql = require('mysql');
const ejs = require('ejs');

const app = express();
const port = 3001;

app.set('view engine', 'ejs');
app.use(express.static('public'));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(session({ secret: 'mysecretkey', resave: true, saveUninitialized: true }));

// Db

const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'proyectoFinal',
});

db.connect((err) => {
  if (err) throw err;
  console.log('Conexion exitosa a la base de datos');
});

app.get('/', (req, res) => {
  db.query('SELECT * FROM imagen', (err, results) => {
    if (err) throw err;
    res.render('index', { productos: results });
  });
});

app.post('/agregar-al-carrito/:id', (req, res) => {
  const productId = req.params.id;
  const sessionCart = req.session.cart || [];
  sessionCart.push(productId);
  req.session.cart = sessionCart;
  res.redirect('/');
});
app.get('/ver-carrito', (req, res) => {
    const sessionCart = req.session.cart || [];
  
    if (sessionCart.length === 0) {
      // Si el carrito está vacío, renderiza una vista que indique que no hay productos en el carrito
      res.render('cart-vacio');
    } else {
      // Si hay productos en el carrito, realiza la consulta a la base de datos
      db.query('SELECT * FROM imagen WHERE imagen_id IN (?)', [sessionCart], (err, results) => {
        if (err) throw err;
        res.render('cart', { productos: results });
      });
    }
  });


app.listen(port, () => {
  console.log(`Servidor http://localhost:${port}`);
});
