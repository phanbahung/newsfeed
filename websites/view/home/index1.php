<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Bài viết mới nhất </h4>
										
							<?php
                                  for($i=0; $i<count($latest_news);$i++){ ?>
                                        <div class="single-latest-post row align-items-center">
                                            <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="public/image/tintuc/<?=$latest_news[$i]->Hinh?>" alt="">
                                            </div>
                                            <ul class="tags"><li><a href="index.php?c=home&a=cat&id_loai=<?=$latest_news[$i]->idLoaiTin?>"><?=$latest_news[$i]->TenLoaiTin?></a></li></ul>
                                            
                                            
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="index.php?c=home&a=detail&id=<?=$latest_news[$i]->id?>">
                                            <h4><?=$latest_news[$i]->TieuDe?></h4>
                                            </a>
                                            <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Bá Hưng</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                            </ul>
                                            	<p> <?=$latest_news[$i]->TomTat?> </p>
                                            </div>
                                        </div>
                                   <?php     
                                       	
                                      }
                                    ?> 	        
    
										
							
							</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="assets/frontend/img/banner-ad.jpg" alt="">
							</div>
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<div class="popular-post-wrap">
								<h4 class="title">Popular Posts</h4>
								<div class="feature-post relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="assets/frontend/img/f1.jpg" alt="">
									</div>
									<div class="details">
										<ul class="tags">
											<li><a href="#">Food Habit</a></li>
										</ul>
										<a href="image-post.html">
											<h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
										</ul>
									</div>
								</div>
								<div class="row mt-20 medium-gutters">
									<div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="assets/frontend/img/f2.jpg" alt="">
											</div>
											<ul class="tags">
												<li><a href="#">Travel</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="image-post.html">
												<h4>A Discount Toner Cartridge Is Better Than Ever.</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
											</ul>
											<p class="excert">
												Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
											</p>
										</div>
									</div>
									<div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="assets/frontend/img/f3.jpg" alt="">
											</div>
											<ul class="tags">
												<li><a href="#">Travel</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="image-post.html">
												<h4>A Discount Toner Cartridge Is
												Better Than Ever.</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
											</ul>
											<p class="excert">
												Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							<div class="relavent-story-post-wrap mt-30">
								<h4 class="title">Hệ thống</h4>
								<div class="relavent-story-list-wrap">
								
								 <!-- Start relavent-story-list-wrap  Bottom_News-->	
								<?php
								for($i=0; $i<count($bottom_news);$i++){ ?>
                                  
									<div class="single-relavent-post row align-items-center">
										<div class="col-lg-5 post-left">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="public/image/tintuc/<?=$bottom_news[$i]->Hinh?>" alt="">
											</div>
											<ul class="tags">
												<li><a href="index.php?c=home&a=cat&id_loai=<?=$bottom_news[$i]->idLoaiTin?>"><?=$bottom_news[$i]->Ten?></a></li>
											</ul>
										</div>
										<div class="col-lg-7 post-right">
											<a href="image-post.html">
												<h4><?=$bottom_news[$i]->TieuDe?></h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
											</ul>
											<p class="excert">
												<?=$bottom_news[$i]->TomTat?>
											</p>
										</div>
									</div>
									<?php } 
									?>
									
								</div>
									 <!-- End relavent-story-list-wrap  Bottom_News-->
									  
							</div>
							<!-- End relavent-story-post Area -->