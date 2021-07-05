<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="container">

<h1>CRUD Example</h1>
<a href="/tasks/create" class="btn btn-primary" role="button" aria-pressed="true">Create</a>
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name/Title</th>
        <th scope="col">Description</th>
        <th scope="col">Created Ad</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $task->name }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->created_at }}</td>
        <td>
            <form action="{{ route('task.destroy',$task->id) }}" method="POST">
                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                |
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
