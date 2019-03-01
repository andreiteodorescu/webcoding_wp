<?php get_header(); ?>

<main class="main">

    <div class="staging d-flex align-items-center white-cut-bottom">
        <div class="container">
            <div class="staging-text">
                <h1 itemprop="name" class="staging-text-undertitle">
                    Hello world :)
                    <br>
                    My name is Andrei Teodorescu
                    <br>
                    I am a Front-End Developer from Bucharest. <br>
                    The words that best describe me when it comes to work are: quality, details, speed, performance, accessibility, optimization, resourceful.
                </h1>
            </div>
        </div>
        <span class="dive-down"></span>
    </div>


    <div class="content">
        <div class="component-about">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-6 text-center">
                        <img class="img-fluid img-shadow" src="<?php bloginfo('template_directory'); ?>/images/me.jpg" alt="Andrei Teodorescu" width="500" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" data-aos-once="true">
                    </div>

                    <div class="col-6 component-about-info">
                        <h2 class="general-title component-about-info-title" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="300" data-aos-once="true">10 Years experience</h2>
                        <p class="component-about-info-undertitle" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300" data-aos-once="true">
                            My name is Andrei Teodorescu, I'm a Front-End Developer from Romania. I love to create and build websites which are fully responsive, minimal, SEO friendly and at the same time attractive and user-friendly for individuals, startups, businesses etc. I built my portfolio site from the grounds up by using all the skills that I know. I also have some fairly basic knowledge of Web/Graphic Design. I'm always motivated and have the desire to learn more.
                            <br>
                            While I'm not debugging some code or trying to position elements right, I love to hang out with my friends, travel, play video games, listen to music etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator component-margin" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="300" data-aos-once="true"></div>

        <div class="component-portfolio component-margin">
            <div class="container">
                <h4 class="general-title text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-offset="300" data-aos-once="true">Clients</h4>
                <div class="row">
                    <?php
                    $portfolio = new WP_Query();
                    $portfolio->query('cat=2&order=ASC');
                    ?>
                    <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
                        <div class="col-6 component-portfolio-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="300" data-aos-once="true">
                            <div class="component-portfolio-inner d-flex flex-column justify-content-center">
                                <?php if ( get_post_meta( $post->ID, 'year', true ) ) : ?>
                                    <span class="project-year"> <?php echo get_post_meta( $post->ID, 'year', true); ?> </span>
                                <?php endif; ?>
                                <h4 class="component-portfolio-inner-title"><?php the_title(); ?></h4>
                                <span class="project-tech"><?php the_tags('', '', ''); ?></span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

        <div class="separator component-margin" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="300" data-aos-once="true"></div>

        <div class="component-contact white-cut-top white-cut-bottom component-margin">
            <div class="container">
                <?php echo do_shortcode('[contact-form-7 id="165" title="work with me"]'); ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>