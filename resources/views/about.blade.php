<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
				<form method="post" action ="{{URL:: to('/store')}}"<div class="contact-form">
			>
					{{csrf_field()}}
	
				<div class="form-group">
				  <label class="control-label col-sm-2" for="name">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="salary">Salary:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="salary" placeholder="Salary" name="salary">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>

				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>