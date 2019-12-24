

			<div class="current-page">
				<a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <?=$baiviet[0]->Ten?>
			</div> <!-- / .current-page -->

			<section id="ccr-blog">
			
			<?php
             for($i=1; $i<count($baiviet);$i++){ ?>      

				<article>
					<figure class="blog-thumbnails">
					<img src="<?=UPLOAD_DIR.DIR_SEPARATOR.$baiviet[$i]->Hinh?>" alt=""> 
					</figure> <!-- /.blog-thumbnails -->
					<div class="blog-text">
						<h1><a href="index.php?c=home&a=detail&id=<?=$baiviet[$i]->idTin?>"><?=$baiviet[$i]->TieuDe?></a></h1>
						<p>
							<?=$baiviet[$i]->TomTat?> 
						</p>


						<div class="meta-data">			
							<a href="#" class="like"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>		
							
						</div>
					</div> <!-- /.blog-text -->
					
				</article>

		    <?php                                             	
                            }
                         ?>
				
				
				
				<div class="clearfix"></div>
				
				<nav class="nav-paging">
					<ul>
						<li><a href="#pre"><i class="fa fa-chevron-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><span class="current">3</span></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#next"><i class="fa fa-chevron-right"></i></a></li>
					</ul>
				</nav>



			</section> <!-- /#ccr-blog -->