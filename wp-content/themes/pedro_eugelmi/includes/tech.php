<?php if(has_post_thumbnail()):?>

    <article style="<?php if ($tech->current_post === 0) { echo 'box-shadow:  0 0 10px rgb(31, 184, 255)'; } ?>" data-name="<?php the_title() ?>" data-text="<?php the_content() ?>" data-img="<?php the_post_thumbnail_url()?>" class="tech-item">
        <img class="tech-item-img"  <?php if ($tech->current_post === 0) { echo "style = filter:none"; } ?> src="<?= the_post_thumbnail_url()?>">
    </article>

<?php endif ?>