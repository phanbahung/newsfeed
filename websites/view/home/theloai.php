<?php require_once 'system/library/Pagination.php'; ?>

			<div class="current-page">
				<a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> TÊN THỂ LOAI >>  <?php echo $loaiTin->Ten;?> 
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
					</div> <!-- /.blog-text -->					
				</article>

		    		<?php                                             	
                            }
                     ?>				
				
				
				<div class="clearfix"></div>
				
				 <nav class="nav-paging">
					<ul>
                	<?php                   
                        echo $page;
                    ?>                
                	</ul>
				</nav>
				
				
               



			</section> <!-- /#ccr-blog -->