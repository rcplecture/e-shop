
<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="container">

<h1>Food Create</h1>
{{--<a href="/tasks" class="btn btn-primary" role="button" aria-pressed="true">View All</a>--}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<form method="post" action="{{ route('admin.food.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="name" class="form-control" placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="text" name="price" class="form-control" placeholder="Enter price">
    </div>
    <div class="form-group">
        <label for="">Discount %</label>
        <input type="text" name="is_discount" class="form-control" placeholder="Enter Discount in %">
    </div>
    <div class="form-group">
        <label for="">Rating</label>
        <input type="number" name="rating" class="form-control" min="1" max="5" value="4">
    </div>
    <div class="form-group">
        <label for="">Quantity Stock</label>
        <input type="number" name="quantity" class="form-control" min="1" max="100" value="5">
    </div>
    <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" name="image_path" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Select Type</label>
        <select name="type" id="" class="form-control">
            <option value="1">Special</option>
            <option value="2">Menu</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
