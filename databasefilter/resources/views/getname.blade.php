<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="row ">
		 <div class="col-sm-4">
    	<form action="savedata" method="GET">
    	<h4>To save the Employee details</h4>	
         Enter the Employee name: <br> 
        <input type="text" name="name"   required=""> <br> 
         Enter the age of Employee: <br> 
       <input type="text" name="age" required=""> <br> 

      Enter the position <br> 
      <input type="text" name="position" required=""> <br> <br>

      <button type="submit">Submitt</button> <br> <br>
      </form> 
</div>

     <div class="col-sm-4">
	<form action="hai"  method="get">
	<label>Enter the name to dispaly the age and position</label> <br>

	<input type="text" name="p_name" placeholder="enter the name" class="form-control"><br>
	<button type="submit">Submit</button>    <br><br>

	</form>
  </div>
	 <div class="col-sm-4">
    

    <form action="hell"  method="get">
	<label>Enter the position to dispaly the age and name</label> <br>
     
  <!--   <div class="dropdown"> 
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      enter the position
    </button><br>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#" vaule="p_position">Sales</a></li>
      <li><a class="dropdown-item" href="#" vaule="p_position">Developer</a></li>
      <li><a class="dropdown-item" href="#" vaule="p_position">testing</a></li>
    </ul>
  </div> -->



	<input type="text" name="p_position" placeholder="enter the position"  class="form-control"><br> 
	 <button type="submit">Submit</button> 
	</form> 

    </div>
    </div>
	
	
    

    


</body>
</html>