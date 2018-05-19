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
    <a href="http://localhost/wordpress/"><div class="home-logo"></div></a>
	<!-- <?php
	wp_nav_menu( array(
		'theme_location' => 'my-custom-menu',
		'container_class' => 'menu align-center'
	));
	?> -->
	<div class="hero-image">
	<?php
	$bg = array('colin-1.jpg', 'Fiona-Gray-Flight-of-Light-Promo-Image-1024x714.jpg', 'coffee-perhaps.jpg', 'act-of-passage.jpg', 'Chora-Carleton-watercolour-1024x576.jpg', 'taniwha.jpg', 'Laura-Papple.jpg' ); // array of filenames
	$i = rand(0, count($bg)-1);
	$selectedBg = "$bg[$i]";
	?>
	<style type="text/css">
	.home-logo{
				background: url('http://localhost/wordpress/wp-content/uploads/2018/05/headText.gif') no-repeat;
				width: 175px;
				height: 110px;
				margin: 0 auto;
				margin-top: 20px;
				margin-bottom: 20px;
			}
			@media only screen and (max-width: 1280px){
				.home-logo{
					margin-top:0;
				}
				.cta-container{
					margin-top: 10px;
				}
			}
			@media only screen and (max-width: 786px){
				.home-logo{
				display: none;
				}
			}
	.hero-image{
			background: url(http://localhost/wordpress/wp-content/uploads/2018/05/<?php echo $selectedBg; ?>) no-repeat;
			background-size: cover;
			width: 80vw;
			height: 60vh;
			margin: 0 auto;
			}
			@media only screen and (max-width: 1280px){
				.hero-image{
				height: 50vh;
				}
			}
			@media only screen and (max-width: 768px){
				.hero-image{
				height: 40vh;
				/* margin-bottom: 50px; */
				}
			}
			}

	</style>
	<div class="marketing">
		<div class="tagline">
		<?php 
		$txt = array("Colin McCahon | Kitchener St", "Fiona Gray | Flight of Light", "Erica Van Zon | Coffee Perhaps", "Acts of Passage | Te Tuhi Offsite", "Chora Luz Carleton | Gloaming", "Owen Mapp | Dragons & Taniwha", "Kirsty Lillico |Happy Together" ); // array of filenames
		$i = rand(0, count($txt)-1); 
		$selectedTxt = "$txt[$i]";
		?>
			<h1><?php echo $selectedTxt; ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
		</div>

		<div class="watch">
			
		</div>
	</div>
			</div>
			<div class="cta-container">
				<div class="callout">
					<!-- <h5>Welcome to Artists Alliance</h5> -->
					<p>View Upcoming Exhibitions and Opportunities</p>
					<!-- <div class="cta-btn-cnr"> -->
					<!-- <div class="cta-btn-a"> -->
					<a href="#0" class="button">Exhibitions</a>
					<!-- </div> -->
					<!-- <div class="cta-btn-b" -->
					<a href="#0" class="button">Opportunities</a>
					<!-- </div> -->
					<!-- </div>  -->
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
			</main>
		<?php get_sidebar(); ?>
	</div>
	</div>
</div>
<!-- <?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p> -->
			<!-- </footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>


<section class="benefits">
	<header>
		<h2>Build Foundation based sites, powered by WordPress</h2>
		<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
	</header>

	<div class="semantic">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/semantic.svg" alt="semantic">
		<h3>Semantic</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
	</div>

	<div class="responsive">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/responsive.svg" alt="responsive">
		<h3>Responsive</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

	</div>

	<div class="customizable">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/customizable.svg" alt="customizable">
		<h3>Customizable</h3>
		<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

	</div>

	<div class="professional">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/professional.svg" alt="professional">
		<h3>Professional</h3>
		<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
	</div>

	<div class="why-foundation">
		<a href="/kitchen-sink">See what's in Foundation out of the box →</a>
	</div>

</section> -->

<?php get_footer();
