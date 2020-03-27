<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WBS</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/form-elements.css"> -->
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css"> -->

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">WBS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#modal-login">Login</a>
            <!-- <a href="#" class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#modal-item">Login</a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to Scrolling Nav</h1>
      <p class="lead">A landing page template freshly redesigned for Bootstrap 4</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          <ul>
            <li>Clickable nav links that smooth scroll to page sections</li>
            <li>Responsive behavior when clicking nav links perfect for a one page website</li>
            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; ramastudio 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- modal login -->

  
        <!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" 
        aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
            <div class="modal-header bg-warning">
                <h4 class="modal-title"> Silahkan Login </h4>
            </div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="<?=site_url('login/proses')?>" method="post" class="login-form">
	                    	<div class="form-group">
	                    		<label for="form-username">Username</label>
	                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
	                      </div>
	                      <div class="form-group">
	                        	<label for="form-password">Password</label>
	                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
	                      </div>
                        <!-- <button type="submit" class="btn btn-default ">Sign in!</button> -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Login</button>
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                        </div>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>
  <!-- end modal login -->

  <!-- coba modal -->
  <div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> Detil Informasi </h4>
            </div>
            <div class="modal-body">
                <!-- <input type="hidden" > -->
                <div class="form-group">
                    <label for="id">Nomor Perkara </label>
                    <input type="text" class="form-control" id="nomor_perkara">
                </div>
                <div class="form-group">
                    <label for="id">Jenis Perkara </label>
                    <input type="text" class="form-control" id="jenis_perkara">
                </div>
                <div class="form-group">
                    <label for="id">Proses Terakhir </label>
                    <input type="text" class="form-control" id="proses_akhir">
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- coba modal -->


  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?=base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?=base_url()?>assets/js/scrolling-nav.js"></script>

</body>

</html>
