

<h3>
	<?php echo 'Search result for "' . '<span>' . get_search_query() . '</span>'.'"'; ?> 
</h3>
<ul class='ul_news'>
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<li>
			<div class="date_news">
				<?php echo get_the_date('j.m.Y'); ?>
			</div>
			<div class="link_news">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?> </a> 
			</div>
			<p>
				<?php echo get_the_excerpt(); ?>
			</p>
		</li>

	<?php 
		endwhile;
		else :
        echo "Nothing found";
   		endif; 
    ?>
</ul>