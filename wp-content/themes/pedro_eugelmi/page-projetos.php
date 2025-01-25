<?php get_header() ?>
    <div class="container page-projetos">
        <h2 class="text-center page-title">Meus <span>Projetos</span></h2>
        <div class="row mt-4">
            <?php $projects = new WP_Query( array( 'post_type' => 'projeto', 'posts_per_page' => 100, 'paged' => get_query_var('paged')));
                if ($projects->have_posts()) {
                    while($projects->have_posts()) {
                        $projects->the_post();
                        include('includes/project.php');

                    }
                    wp_reset_postdata();
                }
            ?>
        </div>
    </div>
    <div class="mt-4"></div>
<?php get_footer() ?>