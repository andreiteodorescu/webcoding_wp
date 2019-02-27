<?php

get_header(); ?>

    <main role="main">
        <article>
            <header class="intro">
                <div class="container">
                    <h1 itemprop="name" class="intro-title"><?php the_title(); ?></h1>
                    <h2 itemprop="description" class="intro-undertitle"><?php the_excerpt(); ?></h2>
                </div>
            </header>
            <div class="content">
                <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                    <?php the_content(); ?> <!-- Page Content -->
                <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
                ?>
                <div class="enquire-form">
                    <?php echo do_shortcode('[contact-form-7 id="165" title="work with me"]'); ?>
                </div>
            </div>
        </article>
    </main>
    
<?php get_footer(); ?>