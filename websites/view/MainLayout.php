<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="" >
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage - Daily News </title>
	<link rel="stylesheet" type="text/css" href="assets/dailynews/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dailynews/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dailynews/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/dailynews/css/style.css">
	<!--[if lt IE 9]>
		<script src="assets/dailynews/js/html5shiv.js"></script>
	<![endif]-->

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<header id="ccr-header">
	<section id="ccr-nav-top" class="fullwidth">
		<div class="">
			<div class="container">
				<nav class="top-menu">
					<ul class="left-top-menu">
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="#">Site Map</a></li>
						<li><a href="contact.html">Liên hệ</a></li>
					</ul><!-- /.left-top-menu -->

					<ul class="right-top-menu pull-right">
						<li><a href="#">Login</a></li>
						<li><a href="#">Register</a></li>
						<li><a href="#">Subscribe</a></li>
						<li>
							<form class="form-inline" role="form" action="#">
								<input type="search" placeholder="Search here..." required>
								  <button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</li>
					</ul> <!--  /.right-top-menu -->
				</nav> <!-- /.top-menu -->
			</div>
		</div>	
	</section> <!--  /#ccr-nav-top  -->


	
	<section id="ccr-site-title">
		<div class="container">
			<div class="site-logo">
				<a href="index.html" class="navbar-brand">
					<img src="assets/dailynews/img/logo.png" alt="Side Logo" />
						<h1>BÁ <span>HƯNG</span></h1>
						<h3>TẬP HỢP BÀI VIẾT</h3>
				</a>
			</div> <!-- / .navbar-header -->

			<div class="add-space">
				<img src="assets/dailynews/img/BANNER.jpg" alt="Side Logo" />
			</div> <!-- / .adspace -->

		</div>	<!-- /.container -->
	</section> <!-- / #ccr-site-title -->
	
	<!--  Main và submenu  -->

	<?php	    				
	
		require_once 'system/library/ReadURL.php';
		$read = new ReadURL();		
	   echo $read->get_data("http://localhost/newsfeed/index.php?c=home&a=menu");
		
		
		  
						  						
	?>								

    <!-- /// Main và submenu  -->
	

</header> <!-- /#ccr-header -->



<section id="ccr-main-section">
	<div class="container">


		<section id="ccr-left-section" class="col-md-8">
			
	
							<?php
								include("websites/view/$view.php");
							?>	



		</section><!-- /.col-md-8 / #ccr-left-section -->



		<aside id="ccr-right-section" class="col-md-4 ccr-home">
			
			<section id="sidebar-popular-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Phiếu, mẫu biểu gửi Phòng CNTT</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>				
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> Báo hỏng thiết bị CNTT  <i class="fa fa-download"></i></a></li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> Phân quyền TMS  <i class="fa fa-download"></i></a>		</li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> Phân quyền TPR  <i class="fa fa-download"></i></a>			</li>					
					<li><a href="http://thuedientu.gdt.gov.vn"><i class="fa fa-square-o"></i> Phân quyền TTR  <i class="fa fa-download"></i></a>		</li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> Phần quyền iTNK  <i class="fa fa-download"></i></a>		</li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> Hướng dẫn cấu hình sử dụng chữ ký số  <i class="fa fa-download"></i></a></li>					
				</ul>
			</section> <!-- /#sidebar-popular-post -->
			
			<section id="sidebar-popular-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Ứng dụng web ngành</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>				
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-envelope-o"></i> Email ngành Thuế</a>	</li>					
					<li><a href="https://mail.gdt.gov.vn/owa"> <i class="fa fa-square-o"></i> UD phân tích rủi ro - TPR</a>	</li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> UD QLTB nhà đất</a></li>					
					<li><a href="http://thuedientu.gdt.gov.vn"><i class="fa fa-square-o"></i> eTax - phân hệ NNT</a>	</li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> eTax - phân hệ CBT</a></li>					
					<li><a href="https://mail.gdt.gov.vn/owa"><i class="fa fa-square-o"></i> Email ngành Thuế</a></li>					
				</ul>
			</section> <!-- /#sidebar-popular-post -->
			
			

			<section id="sidebar-video-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Video Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->

				<div class="sidebar-video">
				<iframe width="340" height="195" src="https://www.youtube.com/watch?v=6LVW2VCnIR8" frameborder="0" allowfullscreen></iframe>
				Hướng dẫn nộp thuế điện tử
				</div>
				<div class="date-like-comment">
					<a href="#" class="like"><i class="fa fa-thumbs-o-up"></i> 08</a>
					<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>
				</div>
			</section>  <!-- /#sidebar-video-post -->

			


			<section id="sidebar-older-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Older Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
					<li>
						<img src="assets/dailynews/img/sports-thumb-10.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-7.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="assets/dailynews/img/sports-thumb-5.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-2.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-5.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
				</ul>

			</section> <!-- /#sidebar-older-post -->

			<section id="sidebar-entertainment-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Entertainment</strong></p>
				</div> <!-- .ccr-gallery-ttile -->

				<div class="sidebar-entertainment">
					<img src="assets/dailynews/img/entertainment.jpg" alt="entertainment">
					<a href="#">Miss Joly loves you to share her tell. Are you ready?</a>
				</div>
				<div class="date-like-comment">
					<a href="#" class="like"><i class="fa fa-thumbs-o-up"></i> 08</a>
					<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>
				</div>
			</section>  <!-- /#sidebar-entertainment-post -->


			<section id="ccr-sidebar-add-place">
				<div class="sidebar-add-place">
					370x250 px
				</div> 
			</section> <!-- /#ccr-sidebar-add-place -->


			<section id="ccr-sidebar-newslater">
				
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><label for="sb-newslater"><strong>Newslater</strong></label></p>
				</div> <!-- .ccr-gallery-ttile -->
				
				<div class="sidebar-newslater-form">
					<form class="ccr-gallery-ttile" action="#">
						<input type="email" id="sb-newslater" name="sb-newslater" placeholder="Enter your email address" required>
						<button type="submit">Subscribe</button>

					</form>
				</div> <!-- /.sidebar-newslater-form -->
				
			</section> <!-- /#ccr-sidebar-newslater -->

		


		</aside><!-- / .col-md-4  / #ccr-right-section -->


	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->

<aside id="ccr-footer-sidebar">
	<div class="container">

		<ul>
			<li class="col-md-3">
				<h5>About Us</h5>
				<div class="about-us">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias Ab veniam atque eius...
				</div>
				<div class="site-logo">
					<a href="index.html"><img src="assets/dailynews/img/logo.png" alt="Side Logo" /><h1>Daily <span>News</span></h1><h3>The Daily News Source</h3></a>
				</div> <!-- / .navbar-header -->
				
			</li>
			<li class="col-md-3">
				<h5>UD web ngành</h5>
				<ul>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-1.jpg" alt="Avatar">
						<a href="#">Ứng dụng TPR (Phân tích rủi ro)</a>
					</li>
					<li>
						<img src="assets/dailynews/img/sports-thumb-4.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-3.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-5.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
				</ul>
				
			</li>
			<li class="col-md-3">
				<h5>Recent Post</h5>
				<ul>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-8.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
					<li>
						<img src="assets/dailynews/img/sports-thumb-6.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-7.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
					<li>
						<img src="assets/dailynews/img/thumbnail-small-6.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
				</ul>
				
			</li>
			<li class="col-md-3">
				<h5>Tags</h5>
				<div class="tagcloud">
					<a href="#">Football</a>
					<a href="#">Games</a>
					<a href="#">World News</a>
					<a href="#">USA</a>
					<a href="#">Salman</a>
					<a href="#">Masrafi</a>
					<a href="#">Afgan</a>
					<a href="#">Obama</a>
					<a href="#">t20</a>
					<a href="#">Business</a>
					<a href="#">Education</a>
					<a href="#">Lorem</a>
					<a href="#">Dhaka</a>
					<a href="#">BBC</a>
					<a href="#">Poland</a>
					<a href="#">Technology</a>
				</div>
				
			</li>
		</ul>
	</div>
	
</aside> <!-- /#ccr-footer-sidebar -->


<footer id="ccr-footer">
	<div class="container">
	 	<div class="copyright">
	 		&copy; 2014, Copyrights <a href="http://codexcoder.com">CodexCoder</a> Theme. All Rights Reserved
	 	</div> <!-- /.copyright -->

	 	<div class="footer-social-icons">
	 		<ul>
	 			<li>
	 				<a href="#"  class="google-plus"><i class="fa fa-google-plus"></i></a>
	 			</li>
	 			<li >
	 				<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
	 			</li>
	 			<li >
	 				<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
	 			</li>
	 			<li >
	 				<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
	 			</li>
	 		</ul>
	 		
	 	</div><!--  /.cocial-icons -->

	</div> <!-- /.container -->
</footer>  <!-- /#ccr-footer -->


	<script src="assets/dailynews/js/jquery-1.9.1.min.js"></script>
	<script src="assets/dailynews/js/bootstrap.min.js"></script>
	<script src="assets/dailynews/js/custom.js"></script>

</body>
</html>