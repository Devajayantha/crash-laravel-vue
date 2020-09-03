<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{--  <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>  --}}
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            @foreach ($pages as $item)
                <li class="nav-item active">
                    <a class="nav-link" href="/page/{{$item->id}}">{{$item -> name}}<span class="sr-only">(current)</span></a>
                </li>   
            @endforeach
                <li class="nav-item active">
                    <a class="nav-link" href="/contact">Contact<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/special">Add/Edit/Remove Specials<span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>
    <div>

        <div class="row">
            @foreach ($special as $item)
            <div class="col-md-5">              
                <div style="text-align: center;">
                    <h4>{{ $item -> name}}</h4>
                    <p>Was : ${{$item -> was_price}}</p>
                    <p>Current : ${{$item -> current_price}}</p>
                    <a href="/special/{{$item -> id}}">Click here to view special</a>
                </div>
            </div>
            @endforeach
        </div>

        {{ $pageSelect -> description}}
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>