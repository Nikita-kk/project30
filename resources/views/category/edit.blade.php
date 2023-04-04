<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<form action="{{route('category.update',$data->id)}}" method="post">
@csrf
    <div class="container">
        <h3> Category Title</h3>
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
        <label for="title">status:</label>
          <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">
        </div>

    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>
</div>
</body>
</html>
