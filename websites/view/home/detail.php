<div class="current-page">
				<a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="blog.html">Blog <i class="fa fa-angle-double-right"></i></a> Single
			</div> <!-- / .current-page -->

			<article id="ccr-article">
				<h1><?= $baiviet->TieuDe;?></h1>

				<div class="article-like-comment-date">	
					Posted by <a href="#author">Author</a> on <time datetime="2014-02-17">2014-02-17</time> in <a href="#category"><?= $baiviet->idLoaiTin;?></a>

					<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
					<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
										
				</div> <!-- /.article-like-comment-date -->
				<p>				
					<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$baiviet->Hinh?>" alt="">
				</p>
				<div class="clearfix"></div>
				<p>
					<?= $baiviet->NoiDung;?>
				</p>
				<div class="article-tags">
					Tag: <a href="#tag1">Entertainment</a>, <a href="#tag2">Holiwood</a>, <a href="#tag3">Movie</a>
				</div>

			</article> <!-- /#ccr-single-post -->




			<section id="ccr-article-related-post">
				<div class="ccr-gallery-ttile">
						<span class="bottom"></span>
						<p>Related Post</p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
					<?php for($i=1; $i<count($related_post);$i++){ ?> 
                    <li>						
						<div class="ccr-thumbnail">
							<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$related_post[$i]->Hinh?>" alt="">
							<p><a href="#postlink">Read More</a></p>
						</div>
						<h5><a href="index.php?c=home&a=detail&id=<?=$related_post[$i]->idTin?>"><?= $related_post[$i]->TieuDe;?></a></h5>
					</li>
					 <?php                                             	
                        }
                     ?>
				</ul>


			</section> <!-- /#ccr-article-related-post -->

			<section class="bottom-border"></section> <!-- /#bottom-border -->

			



			

			