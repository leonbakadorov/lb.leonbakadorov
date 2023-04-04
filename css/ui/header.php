<style>
    .body-section{
        width: 100%;
        overflow: hidden;
        box-sizing: border-box;
    }
    .body-section__container{
        width: 100%;
        max-width: 1600px;
        padding: 0 40px;
        box-sizing: border-box;
        margin: 0 auto;
    }

    .section-intro{
        height: 100vh;
        min-height: 1000px;
        max-height: 1440px;
        overflow: hidden;
        position: relative;
        overflow: hidden;

    }
    .header-text{
        text-align: center;

    }
    .header-text__title{
        font-family: "Pro Display", "-apple-system", BlinkMacSystemFont, "-webkit-system-font", "Malgun Gothic", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        padding-top: 90px;
        font-size: 56px;
        font-weight: 600;
        line-height: 1.3;
        color: #111;
        margin: 0;
    }
    .header-text__subtitle {
        font-family: "Pro Text", "-apple-system", BlinkMacSystemFont, "-webkit-system-font", "Malgun Gothic", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        color: #111;
        margin: 0;
        font-weight: 400;
        font-size: 26px;
        letter-spacing: -.03em;

    }

    .header-image{
        width: 100%;
        height: calc(100% - 240px);
        position: absolute;
        bottom: 0;
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-image: url(/img/header-image.jpg);
        background-position: center center;
    }
    @media only screen and (max-width:739px) {
        .header-image{
            width: 100%;
            height: calc(100% - 240px);
            position: absolute;
            bottom: 0;
            background-size: auto 100%;
            background-repeat: no-repeat;
            background-image: url(/img/header-image-small.jpg);
            background-position: center center;
        }
        .section-intro{
            min-height: 510px;
            max-height: 620px;
        }
        .header-text__title {
            padding: 100px 10px 5px;
            letter-spacing: -.02em;
            font-size: 32px;
            line-height: 1;
        }
        .header-text__subtitle {
            font-size: 17px;
        }
        .header-image {
            width: 100%;
            height: calc(100% - 200px);
        }
    }
</style>
