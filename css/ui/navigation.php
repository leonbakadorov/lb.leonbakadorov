<style>
    .global-nav{
        z-index: 999;
        top: 0;
        left: 0;
        position: fixed;
        width: 100%;
        min-width: 320px;
        height: 52px;
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        backdrop-filter: blur(20px) saturate(180%);
        background: rgba(0,0,0,.9);
        box-shadow: 0px 0.5px 0px rgba(235,235,245,.19);
        color: #fff;
        transition: background 500ms ease;
    }

    .nav-container{
        position: relative;
        padding: 0 22px;
        max-width: 1564px;
        margin: 0 auto;
    }

    .leonbakadorov{
        position: absolute;
        top: 0;
        left: 22px;
        width: 200px;
        height: 52px;
        background-size: 200px 52px;
        background-repeat: no-repeat;
        background-image: url(/global-nav/leonbakadorov.svg);
        background-position: center center;
    }
    .lb{
        position: absolute;
        top: 0;
        right: 21px;
        width: 27px;
        height: 52px;
        background-size: 27px 52px;
        background-repeat: no-repeat;
        background-image: url(/global-nav/lb.svg);
        background-position: center center;
    }


    .nav-items{
        float: right;
        position: relative;
        right: 52px;
        font-size: 14px;
        font-family: "Pro Text";
        width: auto;
    }
    .nav-items__item{
        display: inline-block;
        padding: 0 16px;
        line-height: 52px;
        position: relative;
    }
    .nav-items__item.ux{
        opacity: .6;
    }
    .nav-link{
        opacity: 1;
        transition: opacity 0.3s cubic-bezier(0.25, 0.1, 0.25, 1);
    }
    .nav-link:hover{
        opacity: .8;
    }

    @media only screen and (max-width:1000px) {
        .nav-items{
            right: 40px;
        }
        .nav-items__item {
            padding: 0 8px;
        }
    }

    @media only screen and (max-width:850px) {
        .nav-items__item.ux {
            display: none;
        }
        .nav-items__item {
            padding: 0 10px;
        }
    }
    @media only screen and (max-width:739px) {
        .global-nav{
            height: 64px;
        }
        .nav-container{
            padding: 0 15px;
        }
        .nav-items{
            float: left;
            right: 0;
            width: 100%;
            top: 21px;
            font-size: 12px;
            opacity: .88;
        }

        .nav-items__item{
            padding: 0;
        }
        .nav-items__item.phone {
            margin-left: -1px;
        }
        .nav-items__item.email{

            float: right;
        }
        .leonbakadorov{
            position: absolute;
            left: 16px;
            width: 217px;
            height: 44px;
            background-size: 217px 44px;
            background-repeat: no-repeat;
            background-image: url(/global-nav/leonbakadorov-small.svg);
            background-position: center center;
        }
        .lb{
            position: absolute;
            right: 14px;
            width: 27px;
            height: 44px;
            background-size: 27px 44px;
            background-repeat: no-repeat;
            background-image: url(/global-nav/lb-small.svg);
            background-position: center center;
        }

    }

</style>