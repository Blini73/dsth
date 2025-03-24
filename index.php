<?php get_header();  ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header() -> height; ?>" width="<?php echo get_custom_header() -> width; ?>" alt=""/>

<!---->

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                Services
            </section>
            <section class="home-blog">
                <div id="container">
                    <div class="blog-item">
                         <?php
                         if(have_posts() ) :
                         while(have_posts() )  :  the_post();
                                ?>
                                <article>
                                    <h2><?php the_title();  ?></h2>
                                    <?php the_post_thumbnail(array(275, 275));   ?>
                                    <div class="meta-info">
                                    
                                    <p>Posted in by <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories:</p>
                                    <p>Tags:</p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                                <?php
                                endwhile;
                            else: ?>
                            <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>
