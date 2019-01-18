<?php  
/*
Breadcrumbs for inner pages
Where is used: category.php, page.php
*/
?>

<div class="bread-cover">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="cover">
					<?php if ( function_exists( 'bcn_display' ) ) bcn_display(); ?>
				</div>
			</div>
		</div>
	</div>
</div>