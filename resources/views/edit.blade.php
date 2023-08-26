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
<form action="/task/{{$find_in_database->id}}/update" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="taskName" class="form-label">Task Name</label>
      <input type="text" class="form-control" id="taskname" aria-describedby="emailHelp" name="taskname" value={{old('task_name',$find_in_database->task_name)}}>
      <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="Id1" aria-labelledby="Enable both scrolling & backdrop">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="Enable both scrolling & backdrop">Backdrop with scrolling</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
      </div>
    </div>

    <div class="mb-3">
      <label for="taskDescription" class="form-label">Task Description</label>
      <textarea class="form-control" id="taskDescription" name="taskDescription"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
</body>
</html>
