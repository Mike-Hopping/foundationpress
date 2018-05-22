<?php
/*
Template Name: Home
*/
?>
<header class="front-hero" role="banner">
	<?php get_header(); 
$home_statement_text = get_theme_mod('artista_home_statement_text');
$home_image_one = get_theme_mod('artista_home_statement_image_one');
$home_image_two = get_theme_mod('artista_home_statement_image_two');
$home_about_text = get_theme_mod('artista_home_about_text');
$home_donate_text = get_theme_mod('artista_home_donate_text')
?>
	<div class="hero-image">
		<?php
		$bg = array('colin-1.jpg', 'Fiona-Gray-Flight-of-Light-Promo-Image-1024x714.jpg', 'coffee-perhaps.jpg', 'act-of-passage.jpg', 'Chora-Carleton-watercolour-1024x576.jpg', 'taniwha.jpg', 'Laura-Papple.jpg' ); // array of filenames
		$i = rand(0, count($bg)-1);
		$selectedBg = "$bg[$i]";
		?>
		
		<style>
		.hero-image{
			background: url(http://localhost/wordpress/wp-content/uploads/2018/05/<?php echo $selectedBg; ?>)  no-repeat;
			background-size: cover;
			width: 80vw;
			height: 60vh;
			margin: 0 auto;
			margin-top: 130px;
			}
			@media only screen and (max-width: 1280px){
			.hero-image{
			height: 50vh;
			}
			}
			@media only screen and (max-width: 768px){
			.hero-image{
			height: 40vh;
			}
			}
		</style>
		
		<div class="marketing">
		<div class="tagline">
		<!-- <?php 
		$txt = array("Colin McCahon | Kitchener St", "Fiona Gray | Flight of Light", "Erica Van Zon | Coffee Perhaps", "Acts of Passage | Te Tuhi Offsite", "Chora Luz Carleton | Gloaming", "Owen Mapp | Dragons & Taniwha", "Kirsty Lillico |Happy Together" ); // array of filenames
		$i = rand(0, count($txt)-1); 
		$selectedTxt = "$txt[$i]";
		?> -->
			<!-- <h1><?php echo $selectedTxt; ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4> -->
		</div>
		</div>
	</div>
		<div class="cta-container">
			<div class="callout">
				<p>View Upcoming Exhibitions and Opportunities</p>
					<a href="http://localhost/wordpress/exhibitions/" class="button">Exhibitions</a>
					<a href="http://localhost/wordpress/opportunities/" class="button">Opportunities</a>
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
				<button type="button" class="donate-btn">Donate</button>
				</div>
		<section>
			<?php
			$args = array(
				'post_type' => 'artista_exhibition', // Your custom post type
				'posts_per_page' => '4', // Change the number to whatever you wish
				'order_by' => 'date', // Some optional sorting
				'order' => 'ASC', 
				);
				$new_query = new WP_Query ($args);
				if ($new_query->have_posts()) {
					while($new_query->have_posts()){
						$new_query->the_post();
						the_title();
						the_post_thumbnail('thumbnail');
						// Get a list of post's categories
						$categories = get_the_category($post->ID);
						foreach ($categories as $category) {
							echo $category->name;
						}
					}
				}
				wp_reset_postdata();
			?>
		</section>
		</main>
		
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>
	

