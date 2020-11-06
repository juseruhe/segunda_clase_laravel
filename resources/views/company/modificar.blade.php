
<html>

<head>
    <meta charset="utf-8">
    <title> Modificar Empresa</title>
</head>

<body>



<form method="post" action="{{route('company.put',$company->id)}}">

    @csrf

    @method('PUT')

    <input type="hidden" value="{{$company->id}} ">

    <H1>  Modificar Datos de la Empresa</H1>

    <label> Nombre de la Compañía:    </label>
    <input type="text" value="{{$company->name}}" name="name">

    <label> NIT de la Compañía    </label>
    <input type="text" value="{{$company->NIT}}" name="NIT">

    <label> Dirección de la Compañía    </label>
    <input type="text" value="{{$company->address}}" name="address">


    <label> Fecha de Modificación   </label>
    <input type="datetime-local"  name="created_at" >


  <input type="submit" value="Actualizar Datos de la Empresa">


</form>






</body>
</html>


