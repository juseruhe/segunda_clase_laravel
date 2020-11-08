
<html>

<head>
    <meta charset="utf-8">
    <title> Modificar Empresa</title>
</head>

<body>



<form method="post" action="{{route('company.update',$company->id)}}">

    @csrf

    @method('PUT')

    <input type="hidden" value="{{$company->id}} ">

    <H1>  Modificar Datos de la Empresa</H1>

    <label> Nombre de la Compañía:    </label>
    <input type="text" value="{{$company->name_company}}" name="name_company">

    <label> NIT de la Compañía    </label>
    <input type="text" value="{{$company->NIT}}" name="NIT">

    <label> Dirección de la Compañía    </label>
    <input type="text" value="{{$company->address}}" name="address">



  <input type="submit" value="Actualizar Datos de la Empresa">


</form>






</body>
</html>


