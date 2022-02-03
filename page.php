<?php get_header(); ?>

	<div class="container">
    <div class="row">
        <div class="content px-3 py-5 p-md-5 w-75 p-3">
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post();
							get_template_part('template-parts/content', 'page');
						}
					}
				?>
          
        </div>
        <div class="w-25 p-2 mt-5 mb-5 border"> <?php dynamic_sidebar('footer-1'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>