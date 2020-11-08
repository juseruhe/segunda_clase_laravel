<html>

<head>


    <title> Productos </title>

</head>

<body>

<h1>Productos</h1>
<a href="{{route('products.create')}}"> Crear Producto</a>
<table>
    <tr>
        <td> ID </td>
        <td>Nombre</td>
        <td> Descripción</td>
        <td>Precio</td>
        <td> Tipo de Producto</td>
        <td>Compañia</td>
        <td> Acción</td>
    </tr>

  @foreach($products as $product)
        <tr>
            <td> {{$product->id}} </td>
            <td> {{$product->name_products}}  </td>
            <td> {{$product->description}}</td>
            <td> {{$product->price}}  </td>
            <td> {{$product->name_product_type}} </td>
            <td> {{$product->name_company}} </td>
            <td>




                    <a href=""> Editar</a>
                    <a href=""> Detalles </a>
                    <button> Eliminar </button>


            </td>

        </tr>

    @endforeach

</table>


</body>




</html>
