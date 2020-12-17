window.onload = function(){

    var botones = document.querySelectorAll('button');

    botones.forEach(function(btn,indice){
        btn.addEventListener('click',function(){
          
            var identificador = btn.parentElement.getAttribute('data-id'); // Tomo el valor del atributo data-id
            var precio = btn.parentElement.querySelector('span').innerText; // Guardo el precio del producto
            categoria.total += parseInt(precio.replace("$",""));
            categoria.productos.push(identificador);
            var categoriaVisual = document.querySelector('ul.categoria'); // Capturo los ul con class="carrito"
            var nuevoProducto = document.createElement('li'); // Crea el li para el ul
            nuevoProducto.innerHTML = "Producto "+identificador+" - "+precio+" <a onclick='borrarProducto("+identificador+")' style='color:red;cursor:pointer'>X</a>";
            categoriaVisual.append(nuevoProducto);
            var total = document.querySelector('span.total');
            total.innerHTML = categoria.productos.length;
            var totalprecio = document.querySelector('span.totalprecio');
            totalprecio.innerHTML = categoria.total;
        });
    })


}

var categoria = {
    productos : [],
    total :  0,
    usuario : "Brian",
}

var borrarProducto = function(producto){
    var posicion = categoria.productos.indexOf(producto.toString());
    categoria.productos.splice(posicion,1);
    console.log(categoria.productos);
    categoria.productos.forEach(function(producto,indice){
        var categoria = document.querySelector('ul.categoria');

    });
}

var borrarProducto = function(producto){
    var posicion = categoria.productos.indexOf(producto.toString());
    categoria.productos.splice(posicion,1);
    console.log(categoria.productos);
    categoria.productos.forEach(function(producto,indice){
        var categoria = document.querySelector('ul.categoria');

    });
}
