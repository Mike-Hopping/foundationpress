<?php
/*
Template Name: Join
*/
?>
<?php
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
    <?php get_header(); ?>
    <a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance"><div class="home-logo"></div></a>
</header>
<?php endif;

$join_text = get_theme_mod('artista_join_text');
?>
<div class="main-container">
    <main class="main-content">
        <div class="join-container">
            <div class="join-custom">
            <div class="join-text">
                <h3>Join Us</h3>
            <?php if($join_text || is_customize_preview()):
                echo wpautop($join_text);
                endif; ?>
            </div>
            <a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/join/" class="button">Subscribe Now</a>
            </div>
            <div class="signup-container">
                <h5>Login</h5>
                <div class="grid-x grid-margin-x">
                    <div class="cell">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                    </div>
                    </div>
                </div>
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                    <label>Username or Email
                        <input type="text" placeholder="1234" aria-describedby="exampleHelpText" required pattern="number">
                        <span class="form-error">
                        Yo, you had better fill this out, it's required.
                        </span>
                    </label>
                    </div>
                    <div class="cell small-12">
                    <label>Password
                        <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="exampleHelpText" required >
                        <span class="form-error">
                        I'm required!
                        </span>
                    </label>
                    <input id="checkbox1" type="checkbox"><label for="checkbox1">Remember Me</label>
                    <fieldset class="cell medium-6">
                        <button class="button" type="submit" value="Submit">Login</button>
                    </fieldset>
                    <fieldset class="cell medium-6">
                    <a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/join/">Join Us</a>
                    </fieldset>
                    <div>
                    <div class="join-link">
                    <a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/join/">Forgot Password?</a>
                    </div>
                    </div>
                    <div class="join-donate-btn">
                        <a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/join/" button type="button" class="donate-btn">Donate</button></a>
                    </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>