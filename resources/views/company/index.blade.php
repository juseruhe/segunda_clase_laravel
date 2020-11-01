<html>

<head>

    <title>  Compañia </title>

</head>

<body>

<a href="{{route('company.create')}}"> Nueva Empresa</a>

<table>

 <tr>
     <td> Nombre </td>
     <td> NIT</td>
     <td> Dirección</td>
     <td> Fecha de Creación</td>
     <td>  Acción</td>
 </tr>
@foreach($companies as $company)

<td> {{$company->name}}</td>
        <td> {{$company->NIT}}</td>
        <td> {{$company->address}}</td>
        <td> {{$company->created_at}}</td>
    <td>
        <form method="post" action="{{route('company.destroy',$company->id)}}">
            @csrf
            @method('DELETE')
        <a href> Modificar </a>
        <button>  Eliminar</button>
        <a href> Detalles</a>
        </form>
    </td>

</tr>
@endforeach
</table>






</body>




</html>
