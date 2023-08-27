@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD App Practice</title>
</head>
<body>
@section('content_for_bootstrap')
<form action="/task/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="taskName" class="form-label">Task Name</label>
      <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" name="taskname">
    </div>

    <div class="mb-3">
      <label for="taskDescription" class="form-label">Task Description</label>
      <textarea class="form-control" id="taskDescription" name="taskDescription"></textarea>
    </div>
    <div class="mb-3">
        <label for="upload-file" class="form-label">Upload Image:</label><br>
<input type="file" name="upload-file" id="upload-file">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
</body>
</html>
