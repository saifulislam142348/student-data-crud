<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> show data</title>
  </head>
  <body>
    <div class="container"> 
        <a class="btn btn-success" href="{{url('/add')}}">add data</a>
        <form action="{{url('/show')}}" method="post">
    @csrf
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    
      <td>@mdo</td>
      <td>
        <a href="" class="btn btn-primary">edit</a>
        <a href="" class="btn btn-danger">delete</a>
      </td>
    </tr>
   
    
  </tbody>
</table>
</form></div>
   
  </body>
</html>