<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
 
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>age</th>
        <th>position</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($member2 as $member2)
      <tr>
      <td>{{ $member2->name}}</td>
      <td>{{ $member2->age }}</td>
      <td>{{ $member2->position }}</td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>