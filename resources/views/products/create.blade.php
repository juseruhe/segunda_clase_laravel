<html>

<head>
    <title> Crear Producto</title>
</head>


<body>

<div>

    <form method="post" action="{{route('products.store')}}">

   @csrf

        <label>  Crear Producto   </label>

        <label>  Nombre del  Producto  </label>

        <input type="text" name="name_products" placeholder="Escribe el Tipo de Producto:">

        <label>  Descripción del Producto  </label>

        <input type="text" name="description" placeholder="Escribe el Tipo de Producto:">

        <label>  Precio del Producto  </label>

        <input type="number" name="price" placeholder="Escribe el Tipo de Producto:">

        <label>  Selecciona Compañía del Producto  </label>

       <select name="company_id">

         <option>  Selecciona ....</option>

        @foreach($companies as $company)

            <option value="{{$company->id}}"> {{$company->name_company}}</option>



           @endforeach
       </select>


        <label>  Selecciona Tipo del Producto  </label>
        <select name="product_type_id">

            <option>  Selecciona ....</option>

            @foreach($product_types as $product_type)

                <option value="{{$product_type->id}}"> {{$product_type->name_product_type}}</option>

            @endforeach

        </select>




        <input type="submit" value="Crear Producto">




    </form>







</div>





</body>
</html>
