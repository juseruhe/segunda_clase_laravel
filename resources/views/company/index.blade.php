<html>

<head>


    <title>  Compañias </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

<h1> Compañias</h1>
<a href="{{route('company.create')}}"> Crear Empresa</a>
<table class="table table-dark">
    <tr>
     <td scope="row"> ID </td>
        <td>Nombre</td>
        <td> NIT</td>
        <td>Dirección</td>
        <td>Fecha de Creación</td>
        <td> Acción</td>
    </tr>

    @foreach($companies as $company)
<tr>
        <td> {{$company->id}} </td>
        <td> {{$company->name_company}} </td>
        <td>{{$company->NIT}} </td>
        <td> {{$company->address}} </td>
        <td> {{$company->created_at}} </td>
    <td>

        <form method="post" action="{{route('company.destroy',$company->id)}}">

            @csrf
            @method('DELETE')
       <a href="{{route('company.edit',$company->id)}}"> Editar</a>
        <a href="{{route('company.show',$company->id)}}"> Detalles </a>
        <button onclick="
        confirm('Desea Eliminar esta Compañia ');">
            Eliminar

        </button>

        </form>

    </td>

</tr>

        @endforeach


</table>


</body>




</html>
