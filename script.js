// Ejemplo con JavaScript puro
document.getElementById('agregar-carrito-btn').addEventListener('click', function() {
    // Realiza la solicitud para agregar al carrito
    // ...
  
    // Maneja la respuesta del servidor
    // Por ejemplo, puedes utilizar fetch o una librería como axios
    fetch('/agregar-al-carrito/123', { method: 'POST' })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Actualiza la interfaz de usuario según sea necesario, por ejemplo, mostrar un mensaje de éxito
          alert('Producto agregado al carrito con éxito');
        } else {
          // Maneja el caso de error si es necesario
          console.error('Error al agregar al carrito');
        }
      })
      .catch(error => console.error('Error de red:', error));
  });
  