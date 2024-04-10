
jQuery( function ($) {

    // Firefox 1.0+
    var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
    // Safari 3.0+
    var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));


    // MunuStart
    $('#MenuStarter').on( 'click', function(event) {
        let i = 0;
        $('.menu-header').each( function() {
            ++i;
                if ( $('.PartA').hasClass('PartAOpen') ) {
                    $( this ).css({ 'animation' : "Menu1Back " + i/2.5 + "s forwards" });
                    $('header nav').removeClass( 'opened' );
                } else {
                    $( this ).css({ 'animation' : "Menu1 " + i/2 + "s forwards" });
                    $('header nav').addClass('opened');
                }
        } );

        $('.PartA').toggleClass('PartAOpen');
        $('.PartB').toggleClass('PartBOpen');
        $('.PartC').toggleClass('PartCOpen');
    });

    // Sub Menu
    $('.menu-item').each(function(){    
        $(this).has('ul').append( '<i class="fas fa-chevron-down menu-toggler"></i>' );
    });
    $('.menu-item .menu-toggler').on('click', function(event) {

        event.preventDefault();
        let i = 0;

        if( $(this).hasClass( 'display-ul' ) ) {
            $( this ).prev().children().each( function () {
                i++;
                $( this ).removeAttr('style');
            });
        } else {
            $( this ).prev().children().each( function () {
                i++;
                if( !isSafari ){
                    $( this ).css({ 'animation': 'Menu1 '+i/2+'s forwards' });
                }

            });
        }
        $( this ).toggleClass('display-ul');
        $( this ).prev().toggleClass( 'show-ul' );

    } );


    // focus
    function start_menu() {

        $('.menu-header').each(function () {

            $(this).css({ animation: "Menu1 1s forwards" });
            $('header nav').addClass('opened');

        });

        $('.PartA').addClass('PartAOpen');
        $('.PartB').addClass('PartBOpen');
        $('.PartC').addClass('PartCOpen');

    }
    function close_menu() {

        if ($('.PartA').hasClass('PartAOpen')) {

            $('header .menu-item a').css({ animation: "Menu1Back 1s forwards" });
            $('header nav').removeClass('opened');

        }

        $('.PartA').removeClass('PartAOpen');
        $('.PartB').removeClass('PartBOpen');
        $('.PartC').removeClass('PartCOpen');

    }

    $('header button').on('focus', start_menu );
    $('header input').on('focus', start_menu );

    $('a').on('focus', function( event ) {
        if ( $( this ).parents().hasClass('focus-l') ) {

            if ( $( this ).parents().hasClass('sub-menu') ){
                $( this ).parents('.sub-menu').addClass( 'show-ul' );
            }

            if ( $( this ).parents().hasClass('menu-header') ) {
                start_menu();
            }

        } else {
            $('.sub-menu').removeClass( 'show-ul' );
            close_menu();
        }
    } );


    $('.menu-item-has-children > a').on( 'focus', function(){
        $( this ).next().addClass( 'show-ul' );
        $('.menu-toggler').removeAttr('style');
    })

    $('.prev-post a').on('focus', function(event){
        $( this ).parent().addClass( 'focus' );
    } );

    $('.prev-post a').on('blur', function(event) {
        $( this ).parent().removeClass( 'focus' );
    } );

    $('.smm a').on('focus', function(event){
        $('.smm a').parent().parent().removeClass( 'focus' ) ;
        $( this ).parent().parent().addClass( 'focus' );
    } );

    $('.mini-gal-item a').on('focus', function(event) {
        $( this ).parent().parent().addClass( 'focus' );
    } );

    $('.mini-gal-item a').on('blur', function(event) {
        $( this ).parent().parent().removeClass('focus');
    } );



    // Link on posts prev
    var Post_Name = document.querySelectorAll('.post-name-prev');
    var Post_Name_length = Post_Name.length;

    for( var i = 0; i < Post_Name_length; i++ ) {

        if ( Post_Name[ i ].innerText.indexOf(" ") != -1 ) {

            var br = Post_Name[ i ].innerText.indexOf(" ");
            var part_1 = Post_Name[ i ].innerText.slice( 0, br );
            var part_2 = Post_Name[ i ].innerText.slice( br );
            Post_Name[ i ].innerHTML = "<span class='left-side-text'>" + part_1 + "</span><span class='right-side-text'>" + part_2 + "</span >";

        } else if ( Post_Name[i].innerText.length > 1 ) {
            
            var br = Math.ceil( Post_Name[ i ].innerText.length / 2 );
            var part_1 = Post_Name[ i ].innerText.slice( 0, br );
            var part_2 = Post_Name[ i ].innerText.slice( br );
            Post_Name[ i ].innerHTML = "<span class='left-side-text'>" + part_1 + "</span><span class='right-side-text'>" + part_2 + "</span >";
        
        }
  
    }

    // sticky sidebar
    $( document ).on('scroll', function(event) {

        if ( $('div').is( '#sticky-sidebar' ) ) {

            if ($('#sticky-sidebar')[0].getBoundingClientRect().top <= 0) {

                $('#sticky-sidebar').css({

                    top: $('header').height() + "px"

                });

            }

        } 

    } );

    //skip link
    $('a.skip-link').on('click', function (event){

        if ( $('section').is('#section-two') ) {

            event.preventDefault();

            // Animate smooth scroll
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - $('header').height()
            }, 900 );

        }

    } );


    $( document ).ready( function() {

        setTimeout( function() {

            $('body').removeClass( 'pre' );

            $('#preload-container').addClass('hide');

            if (isFirefox ) {
                $('body').css({ 'animation': 'body-ff 1s linear' });
            } else {
                $('body').css({ 'animation': 'body 1s linear' });
            }




            if ( window.innerWidth < 768 ) {

                setTimeout( function () {

                    $('#preload-container').remove();

                    if ( $('body').attr('style') ) {

                        $('body').removeAttr( 'style' );

                    }

                }, 1200);


            } else {

                setTimeout( function () {

                    $('#preload-container').remove();

                    if ( $('body').attr('style') ) {

                        $('body').removeAttr('style');

                    }

                }, 1800);

            }

        }, 1200 );

    } );

    // owl-carousel setup 
    if ( $('.owl-carousel') ) {

        var owl = $('.owl-carousel');

        owl.owlCarousel( {
            items: 4,
            margin: 0,
            loop: false,
            dots: false,
            nav: true,
            responsive: {

                "0": { items: "1" },
                "576": { items: "2" },
                "768": { items: "3" },
                "1200": { items: "4" }
            }

        } );

     }


    //Social icons widget style generate
    if ( $('div').is('.smm-animation') ) {

        $( '.smm-animation' ).each(function () {

            var color = $(this).data('color');
            var number = $(this).data('num');

            $('head').append('<style>@keyframes smm-animation-' + number + ' {  50% {  color: ' + color + '; }  100% {  color: black; transform: scale(2);  transform-origin: 50% 50 %; }  } \n.smm .smm-animation-' + number + ':hover i,\n.smm .smm-animation-' + number + '.focus i { \n   animation: smm-animation-' + number + ' .3s forwards; \n } </style>');

            //v2.0 reverse animation on mouseleave
            $( '.smm-animation-' + number ).on( 'mouseleave', function (e) {        
                $(this).find('i').css('animation', 'smm-animation-' + number + ' .3s reverse forwards ');
                let elm = $(this);

                setTimeout(function(){
                    elm.find('i').removeAttr('style');
                },300);
            })

        });


    }


    // comments show
    if ( $('ol').is('.comment-list') ) {

        var comments = document.querySelectorAll( '.comment-list li.comment' );
        var comments_length = comments.length;

        $('.comment-list li.comment').css({ 'left' : "1000px" });

        document.addEventListener('scroll', function(event) {

            if ( comments[0].getBoundingClientRect().top <= window.innerHeight * 0.8 ) {

                for ( let i = 0; i < comments_length; i++) {

                    var timing = ( i == 0 ) ? 100 : i * 200;

                    setTimeout(
                        function () {

                            if (comments[ i ]) {

                                comments[ i ].style.left = '0px';

                            } else {

                                $('.comment-list li.comment').css({ 'left': '0px' });

                            }

                        }, timing
                    );

                }

            }  

        })

    }

} );









      
        










