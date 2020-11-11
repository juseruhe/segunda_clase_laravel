<html>

<head>
    <meta charset="utf-8">
    <title> Modificar  Producto</title>
</head>

<body>

@foreach($products as $product)

<form method="post" action="{{route('products.update',$product->id)}}">

  @csrf
    @method('PUT')


    <input type="hidden" value="{{$product->id}} ">

    <h1>  Modificar Producto   </h1>

    <label>  Nombre del  Producto  </label>

    <input type="text" name="name_products" value="{{$product->name_products}}">

    <label>  Descripción del Producto  </label>

    <input type="text" name="description" value="{{$product->description}}">

    <label>  Precio  del Producto  </label>

    <input type="number" name="price" value="{{$product->price}}">

    <label>  Compañía del Producto  </label>

    <select name="company_id">

        <option value="{{$product->company_id}}">{{$product->name_company}} </option>

@foreach($companies as $company)

    <option value="{{$company->id}}">{{$company->name_company}} </option>

        @endforeach

    </select>


    <label>   Tipo del Producto  </label>
    <select name="product_type_id">

        <option value="{{$product->product_type_id}}"> {{$product->name_product_type}}  </option>

        @foreach($product_types as $product_type)

            <option value="{{$product_type->id}}"> {{$product_type->name_product_type}}</option>

        @endforeach

    </select>




    <input type="submit" value="Actualizar Datos del  Producto">


</form>


@endforeach



</body>
</html>
