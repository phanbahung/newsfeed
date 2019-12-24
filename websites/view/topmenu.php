<section id="ccr-nav-main">
		<nav class="main-menu">
			<div class="container">

				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-main">
				            <i class="fa fa-bars"></i>
			          	</button> <!-- /.navbar-toggle -->
				</div> <!-- / .navbar-header -->

				<div class="collapse navbar-collapse ccr-nav-main">
					<ul class="nav navbar-nav">
						<li><a class="active" href="index.html">Trang chủ</a></li>
						
						<?php   for($i=0; $i<count($menu);$i++){
						    
						    $sub= $menu[$i]->child;
						    
						    ?>  
						
    						<li class="dropdown">						
    							<a href="<?=$menu[$i]->link; ?>"><?=$menu[$i]->name; ?></a>
    							<ul class="sub-menu">
    					          	
    					          <?php for($k=0;$k< count($sub); $k++)  {       ?>  
    					          	
    					          		<li><a href="<?=$sub[$k]->link;?>"><?=$sub[$k]->name; ?></a></li>
    					          	
    					          	<?php } ?> 
    					          	
    					        </ul><!-- /.sub-menu -->
    						</li>
						
						
						 <?php } ?> 
						
						
						
						<li><a href="404.html">Liên hệ</a></li>
					</ul> <!-- /  .nav -->
				</div><!-- /  .collapse .navbar-collapse  -->

				<div id="currentTime" class="pull-right current-time">
					<i class="fa fa-clock-o"></i> 12:10 pm


				</div><!-- / #currentTime -->

			</div>	<!-- /.container -->
		</nav> <!-- /.main-menu -->
	</section> <!-- / #ccr-nav-main -->



	<section id="ccr-nav-below-main">
		<nav class="second-menu">
			<div class="container">

				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-below-main">
				            <i class="fa fa-bars"></i>
			          	</button> <!-- /.navbar-toggle -->
				</div> <!-- / .navbar-header -->

				<div class="collapse navbar-collapse ccr-nav-below-main">
					<ul class="nav navbar-nav">
						<li><a href="#">Europe</a></li>
						<li><a href="#">USA</a></li>
						<li><a href="#">Middle East</a></li>
						<li><a href="#">Social and IT</a></li>
						<li><a href="#">Culture</a></li>
					</ul> <!-- /.nav /.navbar-nav -->
				</div>

				
			</div><!-- /.container -->
		</nav><!-- /.second-menu -->
	</section><!-- / #ccr-nav-below-main -->