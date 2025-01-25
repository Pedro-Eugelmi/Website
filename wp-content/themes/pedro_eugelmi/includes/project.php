<div class="col-12 col-md-6 px-0 py-2 px-2">
    <a href="<?php the_permalink()?>">
        <div data-content='<?php the_content() ?>' class="page-box-shadow project-item">

            <?php if(has_post_thumbnail()):?>    
                <img class="project-item-img" alt="<?php the_title()?>" src="<?php the_post_thumbnail_url() ?>" />
            <?php endif?>
                
            <div class="project-item-layer">
                <h3 class="text-center project-item-title"><?php the_title() ?></h3>
                <div class="px-4 text-center">
                    <?php the_excerpt() ?>
                </div>
            </div>
        </div>
   </a>
</div>