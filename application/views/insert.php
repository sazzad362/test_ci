<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bootstrap 4 Stater Template</title>
    <meta name="description" content="Sazzad Hossain">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="">

    <!--
      ==============================
        Load Main Stylesheet File
      ==============================
    -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">    

    <!--
      ==========================
        Load Modernizr File
      ==========================
    -->
    <script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>

  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	
	<!-- ==========================
		 Header Navigation Start
		=========================== -->

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 p-0">
					<div class="main-nav">
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						  <a class="navbar-brand" href="#">Site Logo</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						  	<div class="mr-auto"></div>
						    <ul class="navbar-nav">
						      <li class="nav-item active">
						        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="#">Link</a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Dropdown
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="#">Action</a>
						          <a class="dropdown-item" href="#">Another action</a>
						          <div class="dropdown-divider"></div>
						          <a class="dropdown-item" href="#">Something else here</a>
						        </div>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link disabled" href="#">Disabled</a>
						      </li>
						    </ul>
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- ==========================
		 Header Navigation End
		=========================== -->

	<!-- ==============================
			Form Area Start				
		=============================== -->



		<div class="container mt-5">
			<?php echo validation_errors(); ?>

			<?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-primary" role="alert">
				  <?php echo $_SESSION['message'] ?>
				</div>
			<?php endif ?>
			<?php if (isset($_SESSION['delete'])): ?>
				<div class="alert alert-danger" role="alert">
				  <?php echo $_SESSION['delete'] ?>
				</div>
			<?php endif ?>

			<div class="row">
				<div class="col-md-12 bg-dark p-3">
					<?php echo form_open(uri_string());?>
					  <div class="form-group">
					    <input type="text" name="name" class="form-control" placeholder="Enter Name"  autocomplete="OFF">
					  </div>

					  <div class="form-group">
					    <input type="text" name="email" class="form-control" placeholder="Enter Email" autocomplete="OFF">
					  </div>

					  <div class="form-group">
					    <input type="text" name="phone" class="form-control" placeholder="Enter Phone" autocomplete="OFF">
					  </div>

					 <input type="submit" class="btn btn-primary" value="Save">

					</form>
				</div>
			</div>
		</div> <!-- End form container -->


		<!-- ==============================
			Data table Start			
		=============================== -->

		<div class="container mt-5 text-white">
			<div class="row">
				<div class="col-md-12 bg-dark p-3">
					<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">SL</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Number</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach ($tbs_info as $item) { ?>
					    <tr>
					      <th scope="row">1</th>
					      <td><?php echo $item->name ?></td>
					      <td><?php echo $item->email ?></td>
					      <td><?php echo $item->phone ?></td>
					      <td>
					      	<a class="btn btn-warning m-2" href="<?php echo base_url() ?>insert/action/<?php echo $item->id ?>/edit">Edit</a>
					      	<a class="btn btn-danger m-2" href="<?php echo base_url() ?>insert/action/<?php echo $item->id ?>/delete">Delete</a>
					      </td>
					    </tr>
					<?php } ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>


    <!--
      ==========================
        Load Plugins File
      ==========================
    -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!--
      ===============================
        Active Plugins Main File
      ===============================

  </body>
</html>
