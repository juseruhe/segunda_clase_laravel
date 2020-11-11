<html>

<head>

    <title> Detalles</title>

</head>

<body>

<table>
    <tr>
        <td> ID </td>
        <td> Nombre </td>
        <td> Descripción </td>
        <td> Precio </td>
        <td> Tipo de Producto </td>
        <td> Compañia </td>


    </tr>

@foreach($products as $product)

    <tr>
        <td>{{$product->id}} </td>
        <td>{{$product->name_products}} </td>
        <td>{{$product->description}} </td>
        <td>{{$product->price}} </td>
        <td>{{$product->name_product_type}} </td>
        <td>{{$product->name_company}} </td>




    </tr>


    @endforeach


</table>





</body>













</html>
