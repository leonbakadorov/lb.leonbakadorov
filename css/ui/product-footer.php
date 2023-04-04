
<style>
    /* ********************************************************************* Footer Gallery ********************************************** */
    .product-footer {
        width: 100%;
        background: #070707;
        color: #fff;
    }
    .product-gallery__container.footer{
        padding-top: 150px;

    }
    .product-gallery__footer{
        border-top: 1px solid rgba(255,255,255,.2);
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
        font-family: "Pro Text";
        padding-top: 20px;
        padding-bottom: 100px;
    }
    .footer .product-gallery__headline-footer {
        font-size: 52px;
        font-weight: 600;
        margin-bottom: .5em;
    }
    .product-gallery__footer__heading{
        font-family: "Pro Display";
        padding: 13px 0;
        font-size: 22px;
        font-weight: 700;
    }
    .dl-section, .dl-section .product-main__typography, .dl-section .product-main__inline__item{
        font-size: 15px;
        font-weight: 500;
        line-height: 1.6;
    }
    .dd-description{
        color: rgba(255,255,255,.5);
        margin-bottom: 24px;
    }
    .dd-description:last-child{
        margin-bottom: 8px;
    }
    .double-achievement .dd-description:last-child{
        margin-bottom: 24px;
    }
    .dd-description.dd-link{
        color: #2997ff;
    }
    .dd-description.dd-link a:hover{
        text-decoration: underline;
    }

    @media only screen and (max-width: 1599px){
        .product-gallery__container.footer {
            padding-top: 100px;
        }
    }
    
    @media only screen and (max-width: 739px){
        .product-gallery__footer{
            padding-top: 52px;
            padding-bottom: 100px;
            border-top: 1px solid rgba(255,255,255,.2);
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 20px;
        }
        .product-gallery__container.footer{
            padding-top: 50px;

        }
        .footer .product-gallery__headline-footer {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: .5em;
        }
    }

    .product-gallery__footer-flex{

        padding-top: 20px;
        padding-bottom: 100px;
        border-top: 1px solid rgba(255,255,255,.2);
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }
    .product-gallery__footer-flex .flex-column {
        width: 33.33333333333%;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }
    .product-gallery__footer-flex .flex-column:nth-child(2), .product-gallery__footer-flex .flex-column:nth-child(3){
        margin-left: 8.33333333333%;
    }

    @media only screen and (max-width: 739px){
        .product-gallery__footer {
            padding-top: 20px;
        }
        .product-gallery__footer-flex{
            padding-top: 20px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        .product-gallery__footer-flex .flex-column {
            width: 100%;
            margin-bottom: 20px;
        }
        .double-solutions, .double-achievement {
            display: none;
        }

        .product-gallery__footer-flex .flex-column:nth-child(2), .product-gallery__footer-flex .flex-column:nth-child(3){
            margin-left: 0;
        }
    }

</style>
