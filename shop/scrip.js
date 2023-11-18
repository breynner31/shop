document.addEventListener('DOMContentLoaded', function () {
    const listaCarrito = document.getElementById('lista-carrito');
    const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('agregar-carrito')) {
            const producto = e.target.closest('.ofert-1, .header-content, .product');
            agregarProductoAlCarrito(producto);
        }
    });

    function agregarProductoAlCarrito(producto) {
        const productoInfo = obtenerDatosProducto(producto);

        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${productoInfo.imagen}" width="50"></td>
            <td>${productoInfo.nombre}</td>
            <td>${productoInfo.precio}</td>
            <td><a href="#" class="eliminar-producto" data-id="${productoInfo.id}">X</a></td>
        `;

        listaCarrito.appendChild(row);
    }

    listaCarrito.addEventListener('click', function (e) {
        if (e.target.classList.contains('eliminar-producto')) {
            const productoId = e.target.getAttribute('data-id');
            eliminarProductoDelCarrito(productoId);
        }
    });

    function eliminarProductoDelCarrito(id) {
        const producto = document.querySelector(`[data-id="${id}"]`);
        producto.parentElement.parentElement.remove();
    }

    vaciarCarritoBtn.addEventListener('click', function () {
        // Obtén todas las filas de la tabla
        const filas = listaCarrito.querySelectorAll('tr');
    
        // Verifica si hay más de una fila (ignorando el encabezado)
        if (filas.length > 1) {
            // Si hay más de una fila, elimina todas las filas (excepto el encabezado)
            listaCarrito.innerHTML = '<thead><tr><th>Imagen</th><th>Nombre</th><th>Precio</th><th></th></tr></thead>';
        } else {
            // Si solo hay una fila (encabezado), no la elimines
            listaCarrito.innerHTML = '<thead><tr><th>Imagen</th><th>Nombre</th><th>Precio</th><th></th></tr></thead>';
        }
    });

    function obtenerDatosProducto(producto) {
        let productoInfo;

        if (producto.classList.contains('ofert-1')) {
            productoInfo = {
                id: producto.querySelector('.agregar-carrito').getAttribute('data-id'),
                nombre: producto.querySelector('h3').textContent,
                precio: producto.querySelector('.precio').textContent,
                imagen: producto.querySelector('.ofert-img img').src
            };
        } else if (producto.classList.contains('header-content')) {
            productoInfo = {
                id: producto.querySelector('.agregar-carrito').getAttribute('data-id'),
                nombre: producto.querySelector('h1').textContent,
                precio: producto.querySelector('.precio').textContent,
                imagen: producto.querySelector('.header-img img').src
            };
        } else {
            productoInfo = {
                id: producto.querySelector('.agregar-carrito').getAttribute('data-id'),
                nombre: producto.querySelector('h3').textContent,
                precio: producto.querySelector('.precio').textContent,
                imagen: producto.querySelector('img').src
            };
        }

        return productoInfo;
    }
});
