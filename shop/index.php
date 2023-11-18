<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header" id="header">
        <div class="menu container">
            <a href="#" class="logo">OFERTAZO X</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                   
                    <li><a href="#header">inicio</a> </li>
                    <li><a href="#productos">Productos</a> </li>
                    <li><a href="#blog">Ofertas Especiales - Domicilio gratis</a> </li>
                        
                   
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="images/car.svg"id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-content container">
    <div class="header-img">
    <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados para el ID 1";
}

// Cerrar la conexión
$conn->close();
?>
    </div>
    <div class="header-txt">
        <h1>Ofertas Especiales</h1>
        <p>Aprovecha y llevate este buso con el 50%</p>
        <p class="precio">$200</p>
        <a href="#" class=" agregar-carrito  btn-2" data-id="7">Agregar al Carrito</a>
    </div>
</div>

        
    </header>

    <section class="ofert container" id="productos">
        <div class="ofert-1">
            <div class="ofert-img">
            <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados para el ID 2";
}

// Cerrar la conexión
$conn->close();
?>
            </div>
            <div class="ofert-txt">
                <h3>Camisas</h3>
                <p class="precio">$200</p>
        <a href="#" class=" agregar-carrito  btn-2" data-id="8">Agregar al Carrito</a>
            </div>
        </div>


        <div class="ofert-1">
            <div class="ofert-img">
            <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            </div>
            <div class="ofert-txt">
                <h3>Pantalon</h3>
                <p class="precio">$500</p>
        <a href="#" class=" agregar-carrito  btn-2" data-id="9">Agregar al Carrito</a>
            </div>
        </div>

        <div class="ofert-1">
            <div class="ofert-img">
            <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            </div>
            <div class="ofert-txt">
                <h3>Producto3</h3>
                <p class="precio">$200</p>
        <a href="#" class=" agregar-carrito  btn-2" data-id="10">Agregar al Carrito</a>
            </div>
        </div>

    </section>
    
    <main class="products container " id="lista-1">

        <h2>Productos</h2>
        <div class="product-content">

        <div class="product">
        <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            <div class="product-txt">
                <h3>Buso</h3>
                <p>Calidad Premium</p>
                <p class="precio">$700</p>
                <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar al Carrito</a>
            </div>
        </div>

        <div class="product">
        <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            <div class="product-txt">
                <h3>Camisas</h3>
                <p>Calidad Premium</p>
                <p class="precio">$300</p>
                <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar al Carrito</a>
            </div>
        </div>

        <div class="product">
        <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 7";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            <div class="product-txt">
                <h3>Gorras</h3>
                <p>Calidad Premium</p>
                <p class="precio">$500</p>
                <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al Carrito</a>
            </div>
        </div>

        <div class="product">
        <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 8";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            <div class="product-txt">
                <h3>Pantalon</h3>
                <p>Calidad Premium</p>
                <p class="precio">$550</p>
                <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar al Carrito</a>
            </div>
        </div>

        <div class="product">
        <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 9";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            <div class="product-txt">
                <h3>Medias</h3>
                <p>Calidad Premium</p>
                <p class="precio">$120</p>
                <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar al Carrito</a>
            </div>
        </div>

        <div class="product">
        <?php

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectoFinal";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener la imagen con imagen_id igual a 1
$sql = "SELECT imagen FROM imagen WHERE imagen_id = 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar la imagen si se encontró el registro
    $row = $result->fetch_assoc();
    
    // Obtener los datos binarios de la imagen
    $imagen_binaria = $row["imagen"];

    // Obtener el tipo de contenido
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $tipo_imagen = $finfo->buffer($imagen_binaria);

    // Codificar los datos binarios en base64
    $imagen_base64 = base64_encode($imagen_binaria);

    // Mostrar la imagen usando la etiqueta img de HTML
    echo "<img src='data:$tipo_imagen;base64,$imagen_base64' alt='Imagen'>";
} else {
    echo "No se encontraron resultados ";
}

// Cerrar la conexión
$conn->close();
?>
            <div class="product-txt">
                <h3>Gorra</h3>
                <p>Calidad Premium</p>
                <p class="precio">$100</p>
                <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar al Carrito</a>
            </div>
        </div>
    </div>
    </main>

    <section class="icons container" >
    <div class="icon-1">
        <div class="icon-img">
            <img src="images/i1.svg" alt="">
        </div>
        <div class="icon-txt">
            <h3>Ganchos</h3>
            <p>asdadasdadsadaddasdas</p>
        </div>
    </div>

    <div class="icon-1">
        <div class="icon-img">
            <img src="images/i2.svg" alt="">
        </div>
        <div class="icon-txt">
            <h3>asdahdbusdhaudhsiuadh</h3>
            <p>dkjashdksndkjdnajdnasjd</p>
        </div>
    </div>

    
    <div class="icon-1">
        <div class="icon-img">
            <img src="images/i3.svg" alt="">
        </div>
        <div class="icon-txt">
            <h3>asdahdbusdhaudhsiuad</h3>
            <p>dkjashdksndkjdnajdnasjd</p>
        </div>
    </div>

    </section>

    <section class="blog container" id="blog">
        <div class="blog-1" >
            <img src="images/b1.jpg" alt="">
            <h3>¿Quienes somos?</h3>
            <p>
            En el vibrante corazón de Colombia, en la ciudad de Medellín, un grupo visionario de emprendedores decidieron unir fuerzas para dar vida a una marca de ropa que reflejara la rica diversidad cultural y la creatividad innata de su amado país. Estos fundadores, apasionados por la moda y comprometidos con el impulso de la economía local, se propusieron no solo diseñar prendas de alta calidad, sino también construir un legado que honrara la artesanía colombiana.
            </p>
        </div>

        <div class="blog-1" >
            <img src="images/b2.jpg" alt="">
            <h3>Ofertas Especiales</h3>
            <p>Cada semana, durante todo el mes, lanzaremos descuentos irresistibles en una amplia selección de prendas de moda. Desde elegantes conjuntos para ocasiones especiales hasta cómodas prendas para tu día a día, tendrás la oportunidad de disfrutar de descuentos que harán que renovar tu guardarropa sea una experiencia emocionante y asequible.
                <br> <br>
                Tenemos domicilios gratis desde $100.000 pesos para q vengan y aprovechen 

                
            </p>
        </div>

        <div class="blog-1" >
            <img src="images/b3.jpg" alt="">
            <h3> Logros y Reconocimiento</h3>
            <p>Galardón a la Innovación Textil en Cúcuta:

Nuestra marca ha sido honrada con el "Galardón a la Innovación Textil en Cúcuta" por destacarnos en la escena local con diseños que fusionan la rica herencia cultural de la región con elementos de vanguardia. <br> <br>
Reconocimiento por Sostenibilidad Ambiental en Norte de Santander:



                
            </p>
        </div>

    </section>

    <footer class="footer">
        <div class="footer-content container"></div>

    </footer>

    
    <script src="scrip.js"></script>
</body>
</html>