@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @section('content_for_bootstrap')
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-end">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <h3>Welcome to Task Controller </h3>
        </div>

        <a href="/create" class="btn btn-primary mx-auto p-2"> Create a Task</a>
@if (isset($get_task_from_db) && !$get_task_from_db->isEmpty())
<table class="table table-hover mt-3">
    <tr>
        <td>
            Task Name
        </td>
        <td>
            Task Description
        </td>
    </tr>
    @foreach ($get_task_from_db as $item)
<tr>
<td>{{ $item->task_name }}</td>
<td>{{ $item->task_description }}</td>
<td><a href="task/{{$item->id}}/edit" class="btn btn-dark"> Edit</a></td>
<td><form action="task/{{$item->id}}/delete" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </td>
</form>
</tr>

@endforeach
</table>
@else
<p>{{isset($message)?$message:'No task found'}}</p>
@endif



    @endsection
</body>

</html>
