<section>   
    <div class="container single-projeto-gallery">
    <div class="row">
            <?php foreach($images as $image): ?>
                <div class="col-6 p-3 relative single-projeto-gallery-area">
                    <img src="<?= $image["imagem"]["url"] ?>" alt="<?= $image["imagem"]["alt"] ?>"/>
                </div>
            <?php endforeach ?>
    </div>
    </div>
</section>