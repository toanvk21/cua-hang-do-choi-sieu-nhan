<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="mycontroller">
  <head>
    <title>category</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/animate.css">
    
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/user/css/magnific-popup.css">

    <link rel="stylesheet" href="/user/css/aos.css">

    <link rel="stylesheet" href="/user/css/ionicons.min.css">

    <link rel="stylesheet" href="/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/user/css/flaticon.css">
    <link rel="stylesheet" href="/user/css/icomoon.css">
    <link rel="stylesheet" href="/user/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 0356964919</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">nhunaoker1@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free Returns</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">Đồ chơi siêu nhân</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="/shop">Shop</a>
              	<a class="dropdown-item" href="/gao">Gao</a>
                <a class="dropdown-item" href="/cuongphong">Cuồng phong</a>
              </div>
            </li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
			  <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('/upload/sanpham/panner6.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category" >
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="/gao" >Siêu nhân gao</a></li>
    					<li><a href="/cuongphong">Siêu nhân cuồng phong</a></li>
    				</ul>
    			</div>
    		</div>
            <div class="row"> 
    			<div class="col-lg-3 col-md-12 col-sm-12 " dir-paginate = "sp in sanpham | filter:q | itemsPerPage: pageSize" current-page="currentPage">
				<div class="product" >
    					<a href="\product-single/id?={{sp.id}}" class="img-prod"><img width=500px; class="img-fluid" src="/upload/sanpham/{{sp.image}}" style="width:100%;height:290px" alt="Colorlib Template">
    						
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{sp.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>{{sp.unit_price}}</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<dir-pagination-controls id ="abuttonv" max-size='5' on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/user/js/jquery.min.js"></script>
  <script src="/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/user/js/popper.min.js"></script>
  <script src="/user/js/bootstrap.min.js"></script>
  <script src="/user/js/jquery.easing.1.3.js"></script>
  <script src="/user/js/jquery.waypoints.min.js"></script>
  <script src="/user/js/jquery.stellar.min.js"></script>
  <script src="/user/js/owl.carousel.min.js"></script>
  <script src="/user/js/jquery.magnific-popup.min.js"></script>
  <script src="/user/js/aos.js"></script>
  <script src="/user/js/jquery.animateNumber.min.js"></script>
  <script src="/user/js/bootstrap-datepicker.js"></script>
  <script src="/user/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/user/js/google-map.js"></script>
  <script src="/user/js/main.js"></script>
  <script src="/js/angular.min.js"></script> 
  <script src="/js/sanphamHome.js"></script>
  <script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
  </body>
</html>