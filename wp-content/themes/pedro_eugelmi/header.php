    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <?php wp_head() ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?= get_bloginfo('title') ?> </title>
        <link rel="icon" href="<?= get_site_icon_url() ?>">
        <!--FONTS-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
    <style>
        .banner-container {
            background-image: url(../../images/banner-image.jpg);
        }
        </style>
    <header>
        <div class="container-full header">
            <div class="container">

                <div class="row py-2">

                    <div class="col-4">
                        <div class="header-logo">
                            <?php if(has_custom_logo()):?>
                                <a href="<?= home_url()?>"> 
                                    <?php the_custom_logo() ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <nav class="col-8 header-menu">

                        <ul class='d-none d-xl-flex justify-content-center align-items-center h-100 list-unstyled header-menu-desktop-list'>
    
                            <li class="header-menu-desktop-list-item "><a class="nav-link <?= (is_front_page()) ? 'active' : ''?>" href="<?= home_url()?>/#home">HOME</a></li>
                            <li class="header-menu-desktop-list-item"><a  class="nav-link" href="<?= home_url()?>/#sobre">SOBRE MIM</a></li>
                            <li class="header-menu-desktop-list-item"><a class="nav-link" href="<?= home_url()?>/#tecnologias">TECNOLOGIAS</a></li>
                            <li class="header-menu-desktop-list-item"><a class="nav-link <?php echo (is_page(79) || is_single()) ? 'active' : ''?>" href="<?= home_url()?>/#projetos">PROJETOS</a></li>
                            <li class="header-menu-desktop-list-item"><a class="nav-link" href="<?= home_url()?>/#contato">CONTATO</a></li>
                            
                        </ul>

                        <div class="d-flex justify-content-end align-items-center h-100 d-xl-none header-mobile-bars">
                            <a class="cursor-pointer header-menu-mobile-open">
                                <svg class="header-menu-mobile-open-svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H20" stroke="#FFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                        </div>

                        <div class="header-menu-mobile">
                           <div class="container">
                            <div class="row">

                                <div class="col-12 py-4 justify-content-between d-flex header-menu-mobile-top">

                                    <div class="header-menu-mobile-logo">
                                        <a href="<?= get_home_url() ?>"> <img class="w-100 h-100 object-fit-contain" src="<?= get_template_directory_uri().'/images/logo.png'?>" alt="Pedro Eugelmi"></a>          
                                    </div>

                                    <div class="d-flex align-items-center header-menu-mobile-close-area">
                                       <a class="header-menu-mobile-close">
                                       <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#FFFF"/></svg>
                                       </a>
                                    </div>
                                </div>

                                <nav class="col-12">
                                    <ul class='py-4 list-unstyled header-menu-mobile-list'>
                                        <li class="header-menu-mobile-list-item"><a class="nav-link active" href="#home">HOME</a></li>
                                        <li class="header-menu-mobile-list-item"><a class="nav-link" href="<?= home_url()?>/#sobre">SOBRE MIM</a></li>
                                        <li class="header-menu-mobile-list-item"><a class="nav-link" href="<?= home_url()?>/#tecnologias">TECNOLOGIAS</a></li>
                                        <li class="header-menu-mobile-list-item"><a class="nav-link" href="<?= home_url()?>/#projetos">PROJETOS</a></li>
                                        <li class="header-menu-mobile-list-item"><a class="nav-link" href="<?= home_url()?>/#contato">CONTATO</a></li>
                                    </ul>
                                </nav>

                            </div>
                           </div>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </header>


