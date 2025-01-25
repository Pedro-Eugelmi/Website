$(document).ready(function(){
    
    //Open close menu
    $('.header-menu-mobile-open').on('click', function() {
        $('.header-menu-mobile').css('opacity', "100");
        $('.header-menu-mobile').css('transform', "translateX(0)");
    });

    $('.header-menu-mobile-close').on('click', function (){
        $('.header-menu-mobile').css('transform', "translateX(100%)");
        $('.header-menu-mobile').css('opacity', "0");
    })

    $('.header-menu-mobile-list-item').on('click', function (){
        $('.header-menu-mobile').css('transform', "translateX(100%)");
        $('.header-menu-mobile').css('opacity', "0");
    })

    //Scroll reveal

    ScrollReveal({ reset: true ,   
        distance:'80px',
        delay:200,
        duration:2000});
        
        ScrollReveal().reveal('section', { origin:'top' });
        ScrollReveal().reveal('main', { origin:'top' });


    /* Technologies */

    $('.tech-item').click(function() {
        $('.tech-item').find('img').css('filter', 'grayscale(100%)');
        $('.tech-item').css('box-shadow', 'none');

        let name = $(this).data('name');
        let text = $(this).data('text');
        let img = $(this).data('img');

        $('.tech-img-image').attr('src', img);
        $('.tech-name').text(name);
        $('.tech-text').html(text);

        $(this).find('img').css('filter','none' );
        $(this).css('box-shadow', '0 0 10px rgb(31, 184, 255)');
    })

    /* Projects */

    $('.project-item').click(function(){
        $('.project-modal').css('display', 'block');
        $('section, header, main ,footer').css('pointer-events', 'none');

        let title = $(this).find('.project-item-title').text();
        let desc = $(this).data('content');
        let thumb = $(this).find('.project-item-img').attr('src');

        $('.project-modal-title').text(title);
        $('.project-modal-image img').attr('src', thumb);
        $('.project-modal-desc').html(desc);

    });

    $('.close-modal').click(function(){
        $('.project-modal').css('display', 'none');
        $('section, header, main ,footer').css('pointer-events', 'all');
    })

    // Menu

    let sections = document.querySelectorAll(".section");
    let navLinks = document.querySelectorAll(".nav-link");

    window.onscroll = () => 
    {   sections.forEach(sec => { 
            let top = window.scrollY;
            let offset = sec.offsetTop - 150;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id')

            if(top >= offset && top < offset + height){
                navLinks.forEach(links => 
                    { links.classList.remove('active')
                    document.querySelector(`.nav-link[href*= ${id}]`).classList.add('active')
                    })
            }
        })
    }
})