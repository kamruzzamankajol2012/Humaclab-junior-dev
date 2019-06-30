<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link href="{{ asset('css/bootstarp.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="{{ route('index') }}">Ecommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
          <a class="dropdown-item" href="{{ route('create') }}">Rod</a>
          <a class="dropdown-item" href="{{ route('create1') }}">Pant</a>
        
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">

		<div class="col-md-2">
			
		</div>
        <div class="col-md-8">
          <h2 class="display-4 text-center">Pant</h2>
			<form action="{{ route('store1') }}" method="post">
        {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Product Id</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product_Id" name="product_id">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Color</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Color" name="color">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Set</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Set" name="set">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type" name="type">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Size</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Size" name="size">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" name="price">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

		</div>
      <div class="col-md-2">
			



		</div>
		
	</div>
	
  </div>
    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>