

<style>


    .swiper-container {
        margin-left: auto;
        margin-right: auto;
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1;
    }
    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        box-sizing: content-box;
        transition-timing-function: cubic-bezier(0.77, 0, 0.175, 1);
    }
    .swiper-slide {
        flex-shrink: 0;
        width: 100%;
        height: 100%;
        position: relative;
        transition-property: transform;
    }
    .swiper-pagination-clickable .swiper-pagination-bullet {
        cursor: pointer;
    }

    .product-gallery__image {
        width: 100%;
        display: block;
    }





    .product-gallery__navigations{
        position: absolute;
        bottom: 64px;
        right: 40px;
        z-index: 2;
        height: 44px;
    }
    .product-gallery__pagination{
        position: relative;
        top: 14px;
        display: inline-block;
        height: 16px;
        float: left;
        margin-right: 20px;
    }
    .swiper-pagination-bullet {
        position: relative;
        top: 0;
        width: 16px;
        height: 16px;
        margin: 0 4px;
        padding: 0;
        display: block;
        float: left;
        opacity: 0.2;
        transition: 150ms opacity linear;
    }
    .swiper-pagination-bullet:hover {
        opacity: 0.4;
    }
    .swiper-pagination-bullet:after{
        content: '';
        display: block;
        position: absolute;
        top: 4px;
        left: 4px;
        width: 8px;
        height: 8px;
        border-radius: 100%;
        background: #fff;
    }
    .swiper-pagination-bullet.swiper-pagination-bullet-active {
        opacity: 1;
    }
    .product-gallery__buttons{
        display: inline-block;
    }
    .product-gallery__button{
        display: inline-block;
        transition: 250ms opacity linear, 250ms width linear;
        cursor: pointer;
    }
    .product-gallery__button:hover{
        opacity: .6;
    }
    .product-gallery__button.swiper-button-disabled{
        /*width: 0;*/
        opacity: 0.2;
        cursor: default;
    }
    .product-gallery__previous{
        width: 44px;
        height: 44px;
        background-size: 44px 44px;
        background-repeat: no-repeat;
        /*background-image: url(data:image/svg+xml;base64,<? include $_SERVER['DOCUMENT_ROOT'].'/css/gallery-previous.svg';?>);*/
        background-image: url('/css/gallery-previous.svg');
        background-position: center center;
    }
    .product-gallery__next{
        width: 44px;
        height: 44px;
        background-size: 44px 44px;
        background-repeat: no-repeat;
        /*background-image: url(data:image/svg+xml;base64,<? include $_SERVER['DOCUMENT_ROOT'].'/css/gallery-next.svg';?>);*/
        background-image: url('/css/gallery-next.svg');
        background-position: center center;
    }


    @media only screen and (max-width: 739px){
        
        .product-gallery__navigations {
            position: absolute;
            bottom: 55px;
            right: 50%;
            transform: translateX(50%);
        }
        .product-gallery__buttons{
            display: none;
        }
        .product-gallery__pagination {
            margin-right: 0;
        }
    }


    .product-gallery{
        width: 100%;
        background: #070707;
        color: #fff;
    }
    .product-gallery__container{
        margin: 0 auto;
        width: 100%;
        max-width: 1600px;
        padding: 0 40px;
        box-sizing: border-box;
    }

    .product-gallery__review{
        height: calc(100vh - 250px);
        max-height: 800px;
        min-height: 700px;
        text-align: center;
        padding-top: 110px;
    }

    .product-gallery__review-container{
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }
    /*.product-gallery__review-container:before{
        content: 'Отзыв';
        position: absolute;
        display: block;
        text-transform: uppercase;
        font-size: 22px;
        font-weight: 700;
        left: 50%;
        transform: translateX(-50%);
        margin-top: -30px;
        text-align: center;
        letter-spacing: 10px;

    }*/

    /*.product-gallery__review{
        padding: 210px 0 130px;
    }
    .product-gallery__project-name{
        display: none;
    }*/

    .product-gallery__headline{
        font-size: 74px;
        font-weight: 600;
        margin-bottom: 32px;
        line-height: 1.1;
    }


    .product-gallery__author, .product-gallery__author-post{
        font-size: 22px;
        display: inline;

    }
    .product-gallery__author{
        font-weight: 700;
    }
    .product-gallery__author-post{
        font-weight: 500;
        opacity: .6;
    }
    .product-gallery__headline:before, .product-gallery__headline:after{

    }
    .product-gallery__headline:before{
        content: open-quote;
    }
    .product-gallery__headline:after{
        content: close-quote;
    }
    .footer .product-gallery__headline{
        font-size: 52px;
        font-weight: 600;
        margin-bottom: .5em;
    }
    .product-gallery__project-name_caption{
        display: inline-block;
        font-size: 14px;
        font-family: "Pro Text";
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 5px;
        opacity: .6;
    }
    .product-gallery__project-name__headline{
        font-size: 34px;
        font-weight: 600;
        margin-bottom: 50px;
    }
    .product-gallery__space{
        width: 100%;
        height: 50px;
    }
    .product-gallery__space-plus{
        width: 100%;
        height: 130px;
    }


    .product-gallery__slide-section{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
    }
    .product-gallery__slide-section__container{
        position: relative;
        margin: 0 auto;
        width: 100%;
        height: 100%;
        max-width: 1600px;
        box-sizing: border-box;
        z-index: 3;
    }
    .product-gallery__slide-description{
        position: absolute;
        bottom: 84px;
        left: 40px;
        max-width: calc(100% - 350px);
        line-height: 1.3;
        font-size: 17px;
        font-family: "Pro Text";
        font-weight: 500;
        color: rgba(255,255,255, .9);
    }

    .product-gallery__slide-shadow{
        width: 100%;
        height: 300px;
        position: absolute;
        left: 0;
        bottom: 0;
        background: linear-gradient(0deg, rgba(0,0,0,.7) 0%, rgba(0,0,0,0) 100%);;
    }


    @media only screen and (max-width: 739px){
        .product-gallery__container {
            margin: 0 auto;
            width: 100%;
            max-width: calc(414px + (6.25% * 2));
            padding: 0 6.25%;
        }

        .product-gallery__review {
            height: calc(100vh - 400px);
            min-height: 350px;
            text-align: center;
        }

        .product-gallery__headline {
            font-size: 36px;
            line-height: 1.1;
            margin-bottom: 20px;
        }
        .product-gallery__author, .product-gallery__author-post{
            font-size: 17px;
            letter-spacing: .02em;
        }
        .product-gallery__project-name__headline {
            font-size: 26px;
            line-height: 1.25;
        }
        .product-gallery__space-plus {
            height: 80px;
        }
        .product-gallery__slide-description {
            position: absolute;
            width: 100%;
            padding: 0 6.25%;
            max-width: calc(414px + (6.25% * 2));
            box-sizing: border-box;
            bottom: auto;
            left: 50%;
            top: 100%;
            transform: translateY(-64px)  translateX(-50%);
            text-align: center;
            font-size: 14px;
        }
    }


</style>







<style>
    /* ********************************************************************* Layers Gallery ********************************************** */
    .layers-image{
        position: relative;
        width: 100%;
        padding-top: calc(100% / 1.7777777777);
    }
    .gallery-layers{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    .product-gallery__image__bg{
        z-index: 1;
        filter: saturate(180%);
    }
    .product-gallery__image__bg__black{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,.2);
        z-index: 2;
    }
    .product-gallery__image__macbook{
        z-index: 2;
    }
    .product-gallery__image__screen{
        -webkit-mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDgwIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cmVjdCB4PSI1NjUiIHk9IjI2OCIgd2lkdGg9Ijc5MCIgaGVpZ2h0PSI0OTQiIGZpbGw9ImJsYWNrIi8+Cjwvc3ZnPgo=) center/100% 100% no-repeat;
        mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDgwIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cmVjdCB4PSI1NjUiIHk9IjI2OCIgd2lkdGg9Ijc5MCIgaGVpZ2h0PSI0OTQiIGZpbGw9ImJsYWNrIi8+Cjwvc3ZnPgo=) center/100% 100% no-repeat;
        z-index: 3;
        filter: saturate(138%);
    }
    @media only screen and (max-width: 739px){
        .product-gallery__image__screen{
            -webkit-mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSIxOTIwIiB2aWV3Qm94PSIwIDAgMTA4MCAxOTIwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHJlY3QgeD0iMTQ1IiB5PSI2ODgiIHdpZHRoPSI3OTAiIGhlaWdodD0iNDk0IiBmaWxsPSJibGFjayIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwIj4KPHJlY3QgeD0iMTA4MCIgd2lkdGg9IjE5MjAiIGhlaWdodD0iMTA4MCIgdHJhbnNmb3JtPSJyb3RhdGUoOTAgMTA4MCAwKSIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K) center/100% 100% no-repeat;
            mask: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSIxOTIwIiB2aWV3Qm94PSIwIDAgMTA4MCAxOTIwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8ZyBjbGlwLXBhdGg9InVybCgjY2xpcDApIj4KPHJlY3QgeD0iMTQ1IiB5PSI2ODgiIHdpZHRoPSI3OTAiIGhlaWdodD0iNDk0IiBmaWxsPSJibGFjayIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwIj4KPHJlY3QgeD0iMTA4MCIgd2lkdGg9IjE5MjAiIGhlaWdodD0iMTA4MCIgdHJhbnNmb3JtPSJyb3RhdGUoOTAgMTA4MCAwKSIgZmlsbD0id2hpdGUiLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K) center/100% 100% no-repeat;
        }
        .layers-image{
            position: relative;
            width: 100%;
            padding-top: calc(100% * 1.7777777777);
        }
    }


</style>



