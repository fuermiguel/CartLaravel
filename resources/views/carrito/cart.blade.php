<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i>Carrito de compras</h1>
    </div>
    <div>
        <p>
            <a href="{{ route('cart-trash') }}" class="btn btn-danger">
                Vaciar carrito <i class="fa fa-trash"></i>
            </a>
        </p>
    
    </div>

     <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Suntotal</th>
                    <th>Quitar</th>
             </tr>
            </thead>
            <tbody>
                @foreach($cart as $item)
                    <tr>
                        <td><img src="{{$item->image}}" alt=""></td>
                        <td>{{$item->name}}</td>
                        <td>{{number_format($item->price,2)}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{number_format($item->price * $item->quantity,2)}}</td>
                        <td>
                        <a href="{{ route('cart-delete',$item->id)}}" class="btn btn-danger">
                            <i class="fa ra-remove"></i>
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>  

    </div>
</body>

</html>