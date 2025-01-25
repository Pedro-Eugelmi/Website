<?php get_header() ?>
<main>
    <?php if(have_posts()) {?>
        <section>
            <div class="container single-projeto-title">
                <div class="col-12">
                    <h1 class="page-title text-center"><?= the_title() ?></h1>
                </div>
            </div>

            <?php if(has_post_thumbnail()):?>
            
                <div class="container"> 
                    <div class="single-projeto-image mt-4">
                        <img class="single-projeto-image-img" src="<?php the_post_thumbnail_url()?>">
                    </div>
                </div>

            <?php endif ?>

            <div class="container">
                <div class="row mt-4">
                    <div class="col-12 d-flex">
                        <div class="single-projeto-content">
                            <?php the_content()?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-4">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a target="_blank" href="<?php the_field('link_para_o_site') ?>" class="page-btn">
                            Ir para o site
                        </a>
                    </div>


                </div>

            </div>
        </section>
    <?php } ?>
            
    <?php $tecnologias = get_field('tecnologias') ?>
    <?php if ($tecnologias): ?>
        <section>
            <div class="container">
                <h2 class="text-center">Tecnologias utilizadas:</h2>

                <div class="py-4 col-12 d-flex justify-content-center single-projeto-tecnologia">
                    <?php foreach ($tecnologias as ["tecnologia" => $tecnologia]): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($tecnologia->ID )?>" alt="<?php echo $tecnologia->post_title?>">
                    <?php endforeach?>

                </div>
            </div>
        </section>
    <?php endif ?>

    <?php $content = get_field("conteudo");
    if ($content){
        foreach ($content as $item) {
            $images = $item["imagens"];
            switch($item["acf_fc_layout"]) {
                case "imagens":
                    include("includes/images.php");
                    break;

            }
        }
    } ?>
</main>
<?php get_footer() ?>