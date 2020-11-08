<html>

<head>
    <title> Crear Tipo de Producto</title>
</head>


<body>

<div>

    <form method="post" action="{{route('product_types.store')}}">

        @csrf


        <label>  Crear Tipo de Producto   </label>

        <label>  Nombre del Tipo de Producto  </label>

        <input type="text" name="name_product_type" placeholder="Escribe el Tipo de Producto:">

    <input type="submit" value="Crear Tipo de Producto">




    </form>







</div>





</body>
</html>
