<html>

<head>

   <title> Detalles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

<table class="table table-dark">
    <tr class="text-primary">
        <td> ID </td>
        <td> Nombre </td>
        <td> NIT </td>
        <td>Dirección </td>
        <td> Fecha de Creación </td>
    </tr>



    <tr>
        <td> {{$company->id}}</td>
        <td> {{$company->name_company}}</td>
        <td> {{$company->NIT}}</td>
        <td> {{$company->address}}</td>
        <td> {{$company->created_at}}</td>



    </tr>





</table>





</body>













</html>
