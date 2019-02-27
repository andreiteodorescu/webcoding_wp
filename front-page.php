<?php get_header(); ?>

<main class="main">

    <div class="staging d-flex align-items-center">
        <div class="container">
            <p class="entrance-1">Hello world :)</p>
            <h1 itemprop="name" class="intro-undertitle">
                <span class="intro-title">My name is Andrei Teodorescu.</span>
                <br>
                I am a Front-End Developer from Bucharest. <br>
                The words that best describe me when it comes to work are: quality, details, speed, performance, accessibility, optimization, resourceful.
            </h1>
            <p class="scroll-down">View portfolio <span></span></p>
        </div>
    </div>

    <ul class="portfolio">
        <?php
            $portfolio = new WP_Query();
            $portfolio->query('cat=2&order=ASC');
        ?>
        <?php $count = 0; ?>
        <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
            <li class="portfolio-item">

                <a class="portfolio-image-wrap" id="demo<?php echo $count ?>" href="#project<?php echo $count ?>" rel="nofollow">
                    <?php if ( get_post_meta( get_the_ID(), 'logo', true ) ) : ?>
                        <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'logo', true ) ); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </a>

                <h2 class="portfolio-item-title"><?php the_title(); ?></h2>

                <div class="project-detail" id="project<?php echo $count ?>">
                    <div class="btn-close-modal close-project<?php echo $count ?>">
                        <img class="closebt" src="<?php bloginfo('template_directory'); ?>/images/closebt.svg" alt="Close">
                    </div>
                    <div class="modal-content">
                        <img class="preview-image" src="<?php bloginfo('template_directory'); ?>/images/trans.gif" data-src="<?php the_post_thumbnail_url('preview_size'); ?>" alt="<?php the_title(); ?>">
                        <div class="modal-content-text">
                            <h3 class="portfolio-item-detailtitle"><?php the_title(); ?></h3>

                            <ul class="project-details-list">
                                <li><span>Project name:</span> <?php the_title(); ?></li>
                                <?php if ( get_post_meta( $post->ID, 'project_part', true ) ) : ?>
                                    <li><span>Project part:</span> <?php echo get_post_meta( $post->ID, 'project_part', true); ?></li>
                                <?php endif; ?>
                                <?php if ( get_post_meta( $post->ID, 'year', true ) ) : ?>
                                    <li><span>Project year:</span> <?php echo get_post_meta( $post->ID, 'year', true); ?></li>
                                <?php endif; ?>
                                <?php if ( get_post_meta( $post->ID, 'url', true ) ) : ?>
                                    <li><span>Project URL:</span> <a href="<?php echo get_post_meta( $post->ID, 'url', true); ?>" class="portfolio-item-url" target="_blank"><?php echo get_post_meta( $post->ID, 'url', true); ?></a></li>
                                <?php endif; ?>
                                <li class="pdl-tags"><span>Technologies used:</span> <?php the_tags('', ', ', ''); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </li>
            <?php $count++; ?>
        <?php endwhile; ?>
    </ul>
</main>

<?php get_footer(); ?>