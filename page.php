<?php get_header();  ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php
                    // Directly start the loop, assuming there are posts
                    while (have_posts()) : the_post();  
                    get_template_part('parts/content', 'page');
                    endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>