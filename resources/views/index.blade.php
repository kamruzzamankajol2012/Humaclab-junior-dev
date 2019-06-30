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
			<h2>Rod</h2>
			
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Color</th>
        <th>Size</th>
         <th>Price</th>
         
      </tr>
    </thead>
    <tbody>
      @foreach($rods as $rod)
      

     
      <tr>
        <td>{{ $rod->product_id }}</td>
        <td>{{ $rod->color }}</td>
        <td>{{ $rod->size }}</td>
        <td>{{ $rod->prices}}</td>
       
      </tr>
      @endforeach
    </tbody>
  </table>

		</div>
      <div class="col-md-2">
			



		</div>
		
	</div><br/>
	<div class="row">

		<div class="col-md-2">
			
		</div>
        <div class="col-md-8">
			<h2>Pant</h2>
			

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Color</th>
        <th>Set</th>
        <th>Type</th>
        <th>Size</th>
        <th>Price</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach ($pants as $pant) 
  
      <tr>
        <td> {{ $pant->product_id }}</td>
        <td> {{ $pant->color }}</td>
        <td> {{ $pant->set }}</td>
        <td> {{ $pant->type }}</td>
        <td> {{ $pant->size }}</td>
        <td> {{ $pant->price }}</td>
       
      </tr>
      @endforeach
    </tbody>
  </table>

		</div>
      <div class="col-md-2">
			
		</div>
		
	</div>
  </div>
    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>