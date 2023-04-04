
<style>


    .animateOpacity{
        opacity: 0;
        transition: opacity 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    .animateOpacity.active{
        opacity: 1;
    }



    .sliderNav {
        z-index: 10;
    }
    @media only screen and (max-width: 739px){
        .animateOpacity {
            transition: opacity 1s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
    }



</style>



<script>



    var sliderNav = document.querySelectorAll('.product-gallery__navigations');
    for (var i = 0; i < sliderNav.length; i++){
        sliderNav[i].parentNode.parentNode.classList.add('sliderNav');

    }






    function objectVisible(e) {
        var coords = e.getBoundingClientRect();
        var windowHeight = document.documentElement.clientHeight;

        var offset = 0;
        var topVisible = coords.top > offset && coords.top < windowHeight - offset;
        var bottomVisible = coords.bottom < windowHeight - offset && coords.bottom > offset;

        //console.log('wh'+ windowHeight + ', c bottom: '+ coords.bottom + ', c top: '+ coords.top);
        return topVisible || bottomVisible;
    }

    function objectPreVisible(e) {
        var coords = e.getBoundingClientRect();
        var windowHeight = document.documentElement.clientHeight;

        var offset = 0;
        var pre = 3;
        var topVisible = coords.top > offset && coords.top < (windowHeight * pre);
        var bottomVisible = coords.bottom < (windowHeight * pre) && coords.bottom > offset;

        //console.log('wh'+ windowHeight + ', c bottom: '+ coords.bottom + ', c top: '+ coords.top);
        return topVisible || bottomVisible;
    }

    var select = document.getElementById('projects-select');

    function selectProject(s){
        var project = document.querySelectorAll('[data-project]');

        for(var i = 0; i < project.length; i++){
            if(project[i].getAttribute('data-project') != s){
                project[i].classList.add('hide-project');
            } else {
                project[i].classList.remove('hide-project');
            }

            if(s == 'all'){
                project[i].classList.remove('hide-project');
            }

        }
    }




    function ProLoad(select, data_attr, src) {
        var objects = document.querySelectorAll(select);

        for (var i = 0; i < objects.length; i++) {
            var object = objects[i];

            var attr = object.getAttribute(data_attr);

            if (attr) {


                //console.log(top);



                if (objectPreVisible(object)) {

                    object.setAttribute(src, attr);
                    object.removeAttribute(data_attr);


                }

            }


        }
    }

    function ProLoads(){
        ProLoad('img[data-src]', 'data-src', 'src');
        ProLoad('source[data-srcset]', 'data-srcset', 'srcset');
    }

    ProLoads();
    window.addEventListener('scroll',ProLoads);



document.addEventListener("DOMContentLoaded", function() {

    function arterFont(){
        window.addEventListener('load', function(){
            var link  = document.createElement('link');
            link.rel  = 'stylesheet';
            link.type = 'text/css';
            link.href = '/css/font/font-after.css';
            document.getElementsByTagName('head')[0].appendChild(link);
        });
    }
    arterFont();













    function aX() {
        var divs = document.querySelectorAll('.product-offers__item, ' +

            '.product-about__info__intro, .product-about__info__large, .product-about__brands__item, ' +
            '.ux-section__image, ' +
            '.jobs-section__caption, .jobs-section__typography, .jobs-section__column, ' +
            '.product-projects__subheadline, .product-projects__headline, .product-projects__dropdown, ' +
            '.product-main__headline, .product-main__typography__plus, ' +
            //'.product-main__inline__item, ' +
            '.product-gallery__review-container');


        var q = 0;
        while (q < divs.length) {
            //console.log(q);
            var div = divs[q];

            if (!div.classList.contains('swiper-wrapper') && !div.classList.contains('product-gallery__button')) {
                div.classList.add('animateOpacity');
            }
            q++;
        }
    }

    aX();

        function addAnimates(){
            var divs = document.querySelectorAll('.animateOpacity');



            var q = 0;
            while(q < divs.length){
                //console.log(q);
                var div = divs[q];


                if(objectVisible(div)){
                    div.classList.add('active');
                }

                q++;
            }


        }

        addAnimates();
        window.addEventListener('scroll', addAnimates);










    function HyperImages(select, data_srcset, srcset) {

        var objects = document.querySelectorAll(select);
        //console.log(objects.length);


        var i = 0;


        function f() {
            if(!objects[i]) return;



            var object = objects[i];
            var attr = object.getAttribute(data_srcset);


            if(attr) {

                var image = new Image();
                image.src = attr;
                i++;
                image.onload = function() {
                    if (image.complete) { 
                        object.setAttribute(srcset, image.src);
                        object.removeAttribute(data_srcset);
                        f()

                    }
                };

                if(i < objects.length){
                    //console.log('Функция выполняется');
                } else {
                    //console.log('Функция закончилась');
                    document.body.setAttribute('data-first-images','loaded');
                }
            } else {
                i++;
            }




        }
        f();
    }


    function FirstImagesDisplay(){
        var width = document.documentElement.clientWidth;
        if(width < 740){
            HyperImages('.swiper-container .swiper-slide:first-child img[data-src]','data-src','src');

        } else {
            HyperImages('.swiper-container .swiper-slide:first-child source[data-srcset]','data-srcset','srcset');
        }
    }


    window.addEventListener('load', function (){
        setTimeout(FirstImagesDisplay, 500);
    })






    function OtherImagesDisplay(){
        var width = document.documentElement.clientWidth;
        if(width < 740){
            //console.log('Начинаем загружать остальные изображения');
            HyperImages('img[data-src]','data-src','src');

        } else {
            HyperImages('source[data-srcset]','data-srcset','srcset');
        }
    }

    var callback = function(mutationsList, observer){
        for(var mutation of mutationsList){
            if(mutation.type === 'attributes'){
                //console.log('The ' + mutation.attributeName + ' attribute was modified.');


                OtherImagesDisplay();
                observer.disconnect();
            }
        }
    };

    var observer = new MutationObserver(callback);
    observer.observe(document.body, {attributes: true});




















    var nav = document.querySelector('.navigation');


    const navHeight = nav.offsetHeight;
    const boxs = Array.from(document.querySelectorAll('.swiper-container'));
    const navAddCls = () => {
        const add = boxs.some(box => {
            const rect = box.getBoundingClientRect();
            const y = rect.bottom / (navHeight + rect.bottom - rect.top);
            return y > 0 && y < 1;
        });
        nav.classList.toggle('gallery', add)
    }
    window.addEventListener('scroll', navAddCls);
    navAddCls();




    function afterSlider() {
        window.addEventListener('load', function() {
            var script = document.createElement('script');
            script.src = '/js/swiper.js';
            document.getElementsByTagName('head')[0].appendChild(script);

            script.onload = function () {
                var mySwiper = new Swiper('.swiper-container', {
                    speed: 1000,
                    spaceBetween: 52,
                    keyboard: {
                        enabled: true,
                        onlyInViewport: true,
                    },
                    //cssMode: 'cubic-bezier(0.77, 0, 0.175, 1)',
                    //loop: true,
                    //preventClicksPropagation: false,
                    //clickable: true,
                    pagination: {
                        el: '.product-gallery__pagination',
                        clickable: true,
                        /*renderBullet: function (index, className) {
                            return '<span class="' + className + '">' + (index + 1) + '</span>';
                        },*/
                    },
                    navigation: {
                        prevEl: '.product-gallery__previous',
                        nextEl: '.product-gallery__next',
                    },/*
                    lazy: {
                        loadPrevNext: false,
                    },
                    preloadImages: false,*/

                    /*
                    nested: true,
                    mousewheel: true,
                    releaseOnEdges: true,
                    forceToAxis: true,*/
                });
            }
        });

    }
    afterSlider();




});

</script>

 
