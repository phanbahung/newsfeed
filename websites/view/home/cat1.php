
					
					
						
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Chủ đề <?=$baiviet[0]->Ten?></h4>
								
								 <!-- Start latest-post  -->
                                <?php
                                for($i=0; $i<count($baiviet);$i++){
                                    ?>
								
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="public/image/tintuc/<?=$baiviet[$i]->Hinh?>" alt="">
										</div>
										<ul class="tags">
											<li><a href="#"><?=$baiviet[0]->Ten?></a></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="image-post.html">
											<h4> <?=$baiviet[$i]->TieuDe?></h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
										</ul>
										<p>
											<?=$baiviet[$i]->TomTat?>
										</p>
									</div>
								</div>
								
                                 <?php   	
                                  }
                                ?> 
                                <!-- End latest-post  -->
                                
								
								<div class="load-more">
									<a href="#" class="primary-btn">Load More Posts</a>
								</div>
								
							</div>
							<!-- End latest-post Area -->
						
						
						
						