<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">status</th>

            <th scope="col">actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
          <tr>

            <td>{{$d->id}}</td>
            <td>{{$d->title}}</td>
            <td>{{$d->status}}</td>

            <td><a href="{{route('category.edit',$d->id)}}"><button class="btn-warning rounded">edit</button></a>
          <a href="{{route('category.delete',$d->id)}}"><button class="btn-danger rounded">delete</button></a></td>

          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
