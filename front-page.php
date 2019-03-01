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
    </div>


        <div class="content">
            <div class="component-about">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-6 text-center">
                            <img class="img-fluid img-shadow" src="<?php bloginfo('template_directory'); ?>/images/me.jpg" alt="Andrei Teodorescu" width="500">
                        </div>

                        <div class="col-6 component-about-info">
                            <h2 class="general-title component-about-info-title">10 Years experience</h2>
                            <p class="component-about-info-undertitle">
                                Lorem ipsum dolor sit
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator component-margin"></div>

            <div class="component-portfolio component-margin">
                <div class="container">
                    <h4 class="general-title text-center">Clients</h4>

                    <div class="row">
                        <?php
                        $portfolio = new WP_Query();
                        $portfolio->query('cat=2&order=ASC');
                        ?>
                        <?php while ($portfolio->have_posts()) : $portfolio->the_post(); ?>
                            <div class="col-6 component-portfolio-item">
                                <div class="component-portfolio-inner d-flex flex-column justify-content-center">
                                    <?php if ( get_post_meta( $post->ID, 'year', true ) ) : ?>
                                        <span class="project-year"> <?php echo get_post_meta( $post->ID, 'year', true); ?> </span>
                                    <?php endif; ?>

                                    <h4 class="component-portfolio-inner-title"><?php the_title(); ?></h4>



                                    <span class="project-tech"><?php the_tags('', '', ''); ?></span>

                                </div>
                            </div>
                        <?php endwhile; ?>





                        <div class="col-6">
                            asdasd
                        </div>
                    </div>

                <!--<ul class="list-unstyled">
                    <?php
/*                    $portfolio = new WP_Query();
                    $portfolio->query('cat=2&order=ASC');
                    */?>
                    <?php /*$count = 0; */?>
                    <?php /*while ($portfolio->have_posts()) : $portfolio->the_post(); */?>
                        <li class="portfolio-item">

                            <a class="portfolio-image-wrap" id="demo<?php /*echo $count */?>" href="#project<?php /*echo $count */?>" rel="nofollow">
                                <?php /*if ( get_post_meta( get_the_ID(), 'logo', true ) ) : */?>
                                    <img src="<?php /*echo esc_url( get_post_meta( get_the_ID(), 'logo', true ) ); */?>" alt="<?php /*the_title(); */?>">
                                <?php /*endif; */?>
                            </a>

                            <h2 class="portfolio-item-title"><?php /*the_title(); */?></h2>

                            <div class="project-detail" id="project<?php /*echo $count */?>">
                                <div class="btn-close-modal close-project<?php /*echo $count */?>">
                                    <img class="closebt" src="<?php /*bloginfo('template_directory'); */?>/images/closebt.svg" alt="Close">
                                </div>
                                <div class="modal-content">
                                    <img class="preview-image" src="<?php /*bloginfo('template_directory'); */?>/images/trans.gif" data-src="<?php /*the_post_thumbnail_url('preview_size'); */?>" alt="<?php /*the_title(); */?>">
                                    <div class="modal-content-text">
                                        <h3 class="portfolio-item-detailtitle"><?php /*the_title(); */?></h3>

                                        <ul class="project-details-list">
                                            <li><span>Project name:</span> <?php /*the_title(); */?></li>
                                            <?php /*if ( get_post_meta( $post->ID, 'project_part', true ) ) : */?>
                                                <li><span>Project part:</span> <?php /*echo get_post_meta( $post->ID, 'project_part', true); */?></li>
                                            <?php /*endif; */?>
                                            <?php /*if ( get_post_meta( $post->ID, 'year', true ) ) : */?>
                                                <li><span>Project year:</span> <?php /*echo get_post_meta( $post->ID, 'year', true); */?></li>
                                            <?php /*endif; */?>
                                            <?php /*if ( get_post_meta( $post->ID, 'url', true ) ) : */?>
                                                <li><span>Project URL:</span> <a href="<?php /*echo get_post_meta( $post->ID, 'url', true); */?>" class="portfolio-item-url" target="_blank"><?php /*echo get_post_meta( $post->ID, 'url', true); */?></a></li>
                                            <?php /*endif; */?>
                                            <li class="pdl-tags"><span>Technologies used:</span> <?php /*the_tags('', ', ', ''); */?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <?php /*$count++; */?>
                    <?php /*endwhile; */?>
                </ul>-->
                </div>
            </div>

            <div class="separator component-margin"></div>

            <div class="component-contact white-cut-top white-cut-bottom component-margin">
                <div class="container">
                    <?php echo do_shortcode('[contact-form-7 id="165" title="work with me"]'); ?>
                </div>
            </div>




        </div>


    <span class="dive-down"></span>
</main>

<?php get_footer(); ?>