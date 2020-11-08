<html>

<head>


    <title> Tipos de Productos </title>

</head>

<body>

<h1> Tipos de Productos</h1>
<a href="{{route('product_types.create')}}"> Crear Tipo de Productos</a>
<table>
    <tr>
        <td> ID </td>
        <td>Nombre</td>
        <td> Acción</td>
    </tr>
@foreach($product_types as $product_type)
        <tr>
            <td> {{$product_type->id}}  </td>
            <td> {{$product_type->name_product_type}}  </td>
            <td>

                <form method="post" action="{{route('product_types.destroy',$product_type->id)}}">

                    @csrf
                    @method('DELETE')

                    <a href="{{route('product_types.edit',$product_type->id)}}"> Editar</a>
                    <a href="{{route('product_types.show',$product_type->id)}}"> Detalles </a>
                    <button> Eliminar</button>

                </form>

            </td>

        </tr>

    @endforeach


</table>


</body>




</html>
