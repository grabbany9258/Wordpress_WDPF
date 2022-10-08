<?php get_header();?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();
                 ?>
					<article>
						<img src="<?php echo get_template_directory_uri() ?>/images/img1.png"/>
						<h2><a href="#">Dreaming With Us All Night</a></h2>
						<div class="info">[By Admin on December 01, 2012 with <a href="#">01 Commnets</a>]</div>
						<p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam...</p>
					</article>
					
                    <?php 
                        endwhile;
                    endif;
                 ?>
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
            <?php get_sidebar();?>
			
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>
