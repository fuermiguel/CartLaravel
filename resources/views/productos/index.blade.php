<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <br>
        <br>

        <div class="row">
            @foreach($productos as $producto )
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$producto->image}}" class="card-img-top " alt="Imagen producto " width="200 " height="200 ">
                    <div class="card-body ">
                        <h5 class="card-title ">Producto {{ $producto->name }}</h5>
                        <p class="card-text ">
                            <ul>
                                <li>Fabricante: </li>
                                <li>Modelo: </li>
                            </ul>
                        </p>

                        <a href="#" class="btn btn-success btn-block">{{$producto->price}}€</a>
                        <br>
                        <a href=" {{ $producto->id }}" class="btn btn-warning">Lo quiero</a>
                        <a href=" {{ $producto->id }}" class="btn btn-primary">Detalles</a>

                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>