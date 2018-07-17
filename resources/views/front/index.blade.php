<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Ngân-Linh</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('theme/front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('theme/front/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('theme/front/css/my.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel Tin Tức</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="#">Đăng ký</a>
                    </li>
                    <li>
                        <a href="#">Đăng nhập</a>
                    </li>
                    <li>
                    	<a>
                    		<span class ="glyphicon glyphicon-user"></span>
                    		Bùi Đức Phú
                    	</a>
                    </li>

                    <li>
                    	<a href="#">Đăng xuất</a>
                    </li>
                    
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	Menu
                    </li>

                    <li href="#" class="list-group-item menu1">
                    	Level 1
                    </li>
                    <ul>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                    	<a href="#">Level 1</a>
                    </li>
                    <ul>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                    </ul>


                    <li href="#" class="list-group-item menu1">
                    	<a href="#">Level 1</a>
                    </li>

                    <ul>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                    </ul>


                    <li href="#" class="list-group-item menu1">
                    	<a href="#">Level 1</a>
                    </li>
                    <ul>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                		<li class="list-group-item">
                			<a href="#">Level2</a>
                		</li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                    	<a href="#">Level 1</a>
                    </li>
                    <li href="#" class="list-group-item menu1">
                    	<a href="#">Level 1</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
		                		<a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							
							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3><a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>
			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							


							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3><a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>
			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							


							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3><a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>
			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							


							<div class="break"></div>
		                </div>
		                <!-- end item -->

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="{{asset('theme/front/js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('theme/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/front/js/my.js')}}"></script>

</body>

</html>
