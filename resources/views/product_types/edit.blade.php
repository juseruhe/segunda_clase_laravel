<html>

<head>
    <meta charset="utf-8">
    <title> Modificar Tipo de Producto</title>
</head>

<body>



<form method="post" action="{{route('product_types.update',$product_type->id)}}">

    @csrf

     @method('PUT')


    <input type="hidden" value="{{$product_type->id}} ">

    <H1>  Modificar Datos del Tipo de Producto</H1>

    <label> Nombre del Tipo de Producto:    </label>
    <input type="text" value="{{$product_type->name_product_type}}" name="name_product_type">




    <input type="submit" value="Actualizar Datos del Tipo de Producto">


</form>






</body>
</html>
