<?php
/*
Template Name: Home
*/
?>
<header class="front-hero" role="banner">
	<?php get_header(); 
$home_statement_text = get_theme_mod('artista_home_statement_text');
$home_about_text = get_theme_mod('artista_home_about_text');
$home_donate_text = get_theme_mod('artista_home_donate_text')
?>
	<div class="hero-image">
		<?php
		$args = array(
		$loop = new WP_Query(array(
		'post_type' => 'artista_exhibition',
		'posts_per_page' => 1,
		'orderby'=>'rand'
		)
		));
		?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php the_post_thumbnail('featured-large' ); ?>
		<div class="marketing">
		<div class="tagline">
		<h1><?php the_title(); ?></h1>
		<?php endwhile; ?>
		</div>
		</div>
	</div>
		<div class="cta-container">
			<div class="callout">
				<p>View Upcoming Exhibitions and Opportunities</p>
					<!-- <a href="http://localhost/wordpress/exhibitions/" class="button">Exhibitions</a>
					<a href="http://localhost/wordpress/opportunities/" class="button">Opportunities</a> -->
					<a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/exhibitions/" class="button">Exhibitions</a>
					<a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/opportunities/" class="button">Opportunities</a>
			</div>
		</div>
</header>
<div class="main-container">
	<div class="container-wrapper">
	<div class="main-grid sidebar-right">
		<main class="main-content">
			<h3>
			<?php if($home_statement_header || is_customize_preview()):
					echo($home_statement_header);
			endif; ?>
			</h3>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php comments_template(); ?>
				<?php endwhile; ?>
				<h3 class="home-statement-header">Welcome to Artists Alliance</h3>
				<?php if($home_statement_text || is_customize_preview()):
					echo wpautop($home_statement_text);
				endif; ?>
				<h3 class="home-statement-header">What We Do</h3>
				<?php if($home_about_text || is_customize_preview()):
					echo wpautop($home_about_text);
				endif; ?>
				<h3 class="home-statement-header">Donate to Artists Alliance</h3>
				<?php if($home_donate_text || is_customize_preview()):
					echo wpautop($home_donate_text);
				endif; ?>
				<div class="donate-btn-container">
				<!-- <a href="http://localhost/wordpress/join/" button type="button" class="donate-btn">Donate</button></a> -->
				<a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/join/" button type="button" class="donate-btn">Donate</button></a>
				</div>
		<section>
			
		</section>
		</main>
		
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>
	

