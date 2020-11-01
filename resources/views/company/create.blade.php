<html>

<head>
<title> Crear Compañia</title>
</head>


<body>

<div>

    <form method="post" action="{{route('company.store')}}">
     @csrf
        <label>  Crear una Compañia   </label>

        <label>  Nombre de la Compañia  </label>

        <input type="text" name="name" placeholder="Escribe el Nombre de la Compañia:">

        <label>  NIT de la Compañia  </label>

        <input type="text" name="NIT" placeholder="Escribe el NIT de la Compañia:">

        <label>  Dirección de la Compañia   </label>

        <input type="text" name="address" placeholder="Escribe la dirección de la Compania:">
        <input type="submit" value="Crear Compañia">





    </form>







</div>





</body>
</html>
