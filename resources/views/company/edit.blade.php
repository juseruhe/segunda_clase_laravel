
<html>

<head>
    <meta charset="utf-8">
    <title> Modificar Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>



<form method="post" action="{{route('company.update',$company->id)}}">

    @csrf

    @method('PUT')
   <div class="form-group  bg-dark text-primary">
    <input type="hidden" value="{{$company->id}} ">

    <H1 class="text-primary">  Modificar Datos de la Empresa</H1>

    <label> Nombre de la Compañía:    </label>
    <input type="text" value="{{$company->name_company}}" name="name_company">

    <label> NIT de la Compañía    </label>
    <input type="text" value="{{$company->NIT}}" name="NIT">

    <label> Dirección de la Compañía    </label>
    <input type="text" value="{{$company->address}}" name="address">



  <input type="submit" value="Actualizar Datos de la Empresa">

   </div>
</form>






</body>
</html>


