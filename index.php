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
                                ?>
                        <div class="wpdevs-pagination">
                             <div class="pasges new">
                                   <?php previous_posts_link("<< Newer posts");      ?>
                                 </div>
                                 <div class="pages old">
                                  <?php next_posts_link("Older posts >>");   ?>
                             </div>
                         </div>
                         <?php
                            else: ?>
                            <p>Nothing yet to be displayed!</p>
                            <?php endif; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>
