
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/website.css">
    
    <title>Create New Item</title>
    <div id="app">
        
        <div class="container">
            <form action="/admin/special" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" >Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Description</label>
                    <textarea type="text" class="form-control" name="description" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Brand</label>
                    <input type="text" class="form-control" name="brand" placeholder="Enter brand">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Was Price</label>
                    <input type="number" step="0.01" class="form-control" name="was_price" placeholder="Enter Was Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Current Price</label>
                    <input type="number" step="0.01" class="form-control" name="current_price" placeholder="Enter Current Price">
                </div>
                <a href="/admin/special" class="btn btn-info">Back</a>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </form>
        </div>

    </div>

    <script src="/js/website.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>