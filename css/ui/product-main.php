<style>
    [data-light-gray]{
        background: #F0F0F3;
    }
    [data-module-white]{
        background: #fff;
        border-radius: 12px;
        padding: 32px;
        box-sizing: border-box;
        margin-right: 32px;
    }
    .hyphens{
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
    }
    .product-main{
        padding-bottom: 50px;
    }
    .product-main__space{
        width: 100%;
        height: 160px;
    }
    .product-main__space-plus{
        width: 100%;
        height: 160px;
    }
    .product-main__headline{
        position: relative;
        font-size: 74px;
        font-weight: 700;
        padding: 0 0 50px;
        max-width: 1200px;
        line-height: 1.1;
    }
    .product-main__description{
        width: 83.33333333333%;
    }
    .product-main__caption{
        font-size: 13px;
        font-family: "Pro Text";
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .product-main__typography{
        font-size: 22px;
        letter-spacing: .007em;
        font-weight: 500;
        color: #888;
        line-height: 1.42115;
    }
    .product-main__typography__plus{
        font-size: 34px;
        font-weight: 600;
        color: #000;
        line-height: 1.23;
    }
    .product-main__typography__review{
        font-size: 28px;
        font-weight: 600;
        color: #000;
        line-height: 1.36;
    }
    .product-main__list__item:before{
        content: '—';
        position: absolute;
        margin-left: -32px;
    }
    .product-main__list__item{
        margin-bottom: 32px;

        padding-left: 32px;
        /*background: rgba(255,255,255,1);*/
        /*border-radius: 8px;*/


    }
    .product-main__list__item:last-child {
        margin-bottom: 0;
    }
    .product-main__inline__item{
        display: inline-block;
        font-size: 19px;
    }
    .product-main__inline__item:after{
        content: ' · ';
        margin: 0 3px;
    }
    .product-main__inline__item:last-child:after{
        content: '';
    }
    .product-main__grid{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .product-main__grid__module{
        width: 83.333333333333333%;
    }
    [data-part] {
        padding-bottom: 80px;
    }

    .product-main__review{
        width: 66.66666666666%;
    }
    .product-main__typography__author{
        margin-top: 40px;
        padding-bottom: 100px;
        font-size: 19px;
        font-weight: 500;
        color: #777;
        line-height: 1.6;
    }
    .product-main__typography__author-name{
        font-weight: 700;
        color: #000;
    }



    @media only screen and (max-width: 739px){
        .product-main {
            padding-bottom: 0;
        }

        .product-main__space{
            height: 80px;
        }
        .product-main__space-plus{
            height: 100px;
        }

        .body-section__container {
            position: relative;
            width: 100%;
            max-width: calc(414px + (6.25% * 2));
            padding: 0 6.25%;
        }
        .product-main__description {
            width: 100%;
        }
        .product-main__grid {
            display: block;
            width: 100%;
        }
        .product-main__grid__module {
            width: 100%;
            margin-bottom: 52px;
        }
        .product-main__grid__module:last-child{
            margin-bottom: 0;
        }
        .product-main__review {
            width: 100%;
        }
        [data-part] {
            padding-bottom: 52px;
        }


        .product-main__headline {
            font-size: 34px;
            padding: 0 0 40px;
            line-height: 1.1;
        }

        .product-main__typography {
            font-size: 17px;
            font-family: "Pro Text";
            letter-spacing: -.022em;
            line-height: 1.47059;
        }
        .product-main__typography__plus {
            font-size: 24px;
            letter-spacing: .007em;
        }
        .product-main__inline__item {
            font-size: 15px;
        }
        .product-main__typography__review {
            font-size: 22px;
        }
        .product-main__typography__author {
            margin-top: 32px;
            font-size: 17px;
        }
    }
</style>