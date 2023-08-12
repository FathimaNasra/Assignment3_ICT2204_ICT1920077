<?php

session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio-Fathima Nasra</title>
    <!--===== Font Awesome =====-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--===== Main CSS =====-->
  <link rel="stylesheet" href="new.css">

 <style>
/*===== Google Fonts =====*/
@import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Preahvihear&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Preahvihear&display=swap');
/*===== Global CSS =====*/
html
{
    scroll-behavior: smooth;
}
:root
{
    --main-color:#00b4d8;
    --shadow-black-100:0 5px 15px rgba(0,0,0,0.2);
    --black-900:#000;
    --black-400:#646f87;
    --black-100:#f7f7f7;
    --white:#fff;
    --black-alpha-100:rgba(0,0,0,.05);
}
body
{
    font-family: "Kaushan Script", cursive;
    font-size: 16px;
    font-weight: normal;
    overflow-x: hidden;
    background-color: var(--white);
}
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
ul
{
    list-style: none;
}
img
{
    vertical-align: middle;
}
.container
{
    max-width: 1140px;
    margin: auto;
}
.row
{
    display: flex;
    flex-wrap: wrap;
}
.justify-content-center
{
    justify-content: center;
}
.justify-content-between
{
    justify-content: space-between;
}
.align-items-center
{
    align-items: center;
}
.btn-1
{
    background-color: var(--main-color);
    padding: 15px 40px;
    border: none;
    color: var(--white);
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 600;
    transition: all 0.3s ease-out;
}

.btn-1:hover
{
    color: var(--white);
    background-color: rgba(0,167,142,0.7);
}

.btn-2
{
    background-color: var(--white);
    padding: 15px 40px;
    border: none;
    color: var(--main-color);
    border-radius: 5px;
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 600;
    border: 1px solid var(--main-color);
    transition: all 0.3s ease-out;
}
.btn-2:hover
{
    color: var(--white);
    background-color: var(--main-color);
    border: none;
}
.section-padding
{
    padding: 80px 0;
}
.text-align
{
    text-align: center;
}
.section-title
{
    flex: 0 0 100%;
    max-width: 100%;
    margin-bottom: 30px;
}
.section-title .sub-title
{
    font-size: 20px;
    font-weight: 600;
    color: var(--main-color);
}
.section-title .main-title
{
    font-size: 35px;
    font-weight: 600;
    margin-top: 10px;
}
.section-title .line 
{
    padding-top: 0px;
}
.section-title .line li
{
    display: inline-block;
    background-color: var(--main-color);
    border-radius: 50px;
    height: 3px;
}
.section-title .line li:nth-of-type(1)
{
    width: 64px;
}
.section-title .line li:nth-of-type(2)
{
    width: 10px;
}
.section-title .line li:nth-of-type(3)
{
    width: 7px;
}
/*===== Navbar =====*/
.navbar
{
    position: fixed;
    z-index: 999;
    width: 100%;
    padding: 25px;
    transition: all 0.5s ease;
}
.navbar.sticky
{
    padding: 12px 25px;
    background-color: var(--white);
    box-shadow: var(--shadow-black-100);
}
.navbar .logo a
{
    font-size: 24px;
    color: var(--black-900);
    font-weight: 600;
    text-transform: capitalize;
}
.navbar .logo a span
{
    color: header
}
.navbar .menu .nav-item
{
    display: inline-block;
    position: relative;
    margin-left: 36px;
}
.navbar .menu .nav-item .nav-link
{
    color: var(--white);
    font-size: 16px;
    font-weight: 600;
    display: block;
    text-transform: capitalize;
    padding: 10px 0;
}
.navbar.sticky .menu .nav-item .nav-link,
{
    color: var(--main-color);
}
.navbar .nav-item .nav-link span
{
    width: 0;
    height: 2px;
    background-color: var(--white);
    position: absolute;
    left: 0;
    bottom: 0;
    border-radius: 50px;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease-out 0s;
}
.navbar .nav-item .nav-link span::before
{
    position: absolute;
    content: '';
    width: 0;
    height: 2px;
    background-color: var(--white);
    left: 110%;
}
.navbar .nav-item .nav-link span::after
{
    position: absolute;
    content: '';
    width: 0;
    height: 2px;
    background-color: var(--white);
    left: 140%;
}
.navbar.sticky .nav-item a span,.navbar.sticky .nav-item a span::before,.navbar.sticky .nav-item a span::after
{
    background-color: var(--main-color);
}
.navbar .nav-item > .nav-link.active span,.navbar .nav-item:hover > .nav-link span
{
    opacity: 1;
    visibility: visible;
    width: 60%;
}
.navbar .nav-item > .nav-link.active span::before,.navbar .nav-item:hover > .nav-link span::before
{
    width: 20%;
}
.navbar .nav-item > .nav-link.active span::after,.navbar .nav-item:hover > .nav-link span::after
{
    width: 15%;
}
.menu-btn
{
    background-color: var(--main-color);
    height: 34px;
    width: 44px;
    box-shadow: var(--shadow-black-100);
    padding: 0;
    border-radius: 5px;
    line-height: 34px;
    text-align: center;
    color: var(--white);
    font-size: 17px;
    display: none;
}
.navbar.sticky .menu-btn
{
    color: var(--main-color);
    background-color: var(--white);
}
/*===== Home =====*/
.home-section
{
    position: relative;
    background-color: var(--black-100);
    z-index: 1;
    overflow-x: hidden;
    padding-top: 80px;
}
.header-social
{
    position: absolute;
    top: 53%;
    left: 50px;
    transform: translateY(-53%);
    border: 1px solid rgba(0,167,142,0.21);
    border-radius: 50px;
}
.header-social li a 
{
    font-size: 18px;
    display: block;
    text-align: center;
    padding: 20px 15px;
    color: rgba(100,111,135,0.58);
    transition: all 0.3s ease-out 0s;
}
.header-social li a:hover
{
    color: var(--main-color);
}
.home-section .home-text,
.home-section .home-image
{
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 25px;
}
.home-section .home-text h4
{
    font-size: 30px;
    font-weight: 600;
    letter-spacing: 4px;
    color: var(--main-color);
}
.home-section .home-text h1
{
    font-size: 50px;
    font-weight: 700;
    margin-top: 15px;
    color: var(--black-900);
}
.home-section .home-text span
{
    font-size: 18px;
    line-height: 28px;
    color: var(--black-900);
    font-weight: 500;
    display: block;
    margin-top: 15px;
}
.home-section .home-text p
{
    font-size: 16px;
    color: var(--black-400);
    font-weight: 24px;
    margin-top: 15px;
}
.home-section .home-text .bttn 
{
    display: inline-block;
    margin-top: 15px;
}
.home-section .home-image .img-box img
{
    position: relative;
    width: 100%;
    z-index: 789;
}
.header-hero-shape
{
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
}
.header-hero-shape::before
{
    position: absolute;
    content: '';
    width: 1000%;
    height: 100%;
    background-color: var(--main-color);
    transform: skewX(60deg);
    top: 0;
    left: 0;
}
/*===== About =====*/
.about-section .about-image,
.about-section .about-content
{
    flex: 0 0 50%;
    max-width: 50%;
    padding: 20px;
}
.about-section .about-image .img-box
{
    position: relative;
}
.about-section .about-image .img-box img
{
    max-width: 100%;
    width: 100%;
    z-index: 8;
}
.about-section .about-image .img-box .about-shape
{
    width: 404px;
    height: 525px;
    border-left: 15px solid var(--main-color);
    border-bottom: 15px solid var(--main-color);
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: -1;
}
.about-section .about-image .img-box .about-shape::before
{
    position: absolute;
    content: '';
    width: 15px;
    height: 85%;
    background-color: var(--main-color);
    bottom: 0;
    right: 0;
}
.about-section .about-image .img-box .about-shape::after
{
    position: absolute;
    content: '';
    width: 104%;
    height: 15px;
    background-color: var(--main-color);
    top: 36px;
    right: -2px;
    transform: rotate(11deg);
    border-top-left-radius: 20px;
}
.about-section .about-content p
{
    text-align: justify;
}
.skill-item .skill-header
{
    position: relative;
}
.skill-item .skill-header .skill-title
{
    font-size: 14px;
    font-weight: 500;
    margin-top: 15px;
}
.skill-item .skill-header .skill-percentage
{
    position: absolute;
    top: -3px;
    right: 0;
}
.skill-item .skill-header .skill-percentage p
{
    font-size: 14px;
    font-weight: 400;
}
.skill-item .skill-bar
{
    margin-top: 15px;
}
.skill-item .skill-bar .bar-inner
{
    width: 100%;
    height: 9px;
    border-radius: 5px;
    background-color: rgba(33,243,26,0.11);
    position: relative;
}
.skill-item .skill-bar .bar-inner .progress-line
{
    position: absolute;
    top: 0;
    left: 0;
    height: 9px;
    border-radius: 5px;
    background-color: var(--main-color);
    width: 0%;
    transition:all 2s ease-out;
}
.skill-item .skill-bar .bar-inner .progress-line::before
{
    position: absolute;
    content: '';
    width: 7px;
    height: 18px;
    background-color: var(--white);
    border: 2px solid var(--main-color);
    top: -7px;
    right: 0;
}
/*===== Services =====*/
.service-section
{
    min-height: 100vh;
    background-color: var(--black-100);
}
.service-section .service-item
{
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
}
.service-item p, .about-content p, .home-text p{
    /*font-family: 'Edu SA Beginner', cursive; */
    font-family: 'Preahvihear', sans-serif;
}
.service-section .service-item-inner
{
    box-shadow: var(--shadow-black-100);
    padding: 50px 15px;
    border-radius: 10px;
    width: 100%;
    text-align: center;
    transition: all 0.3s ease;
}
.service-section .service-item-inner:hover
{
    background-color: var(--main-color);
}
.service-section .service-item-inner .icon 
{
    height: 60px;
    width: 60px;
    background-color: var(--main-color);
    margin: 0 auto 30px;
    text-align: center;
    font-size: 28px;
    color: var(--white);
    border-radius: 20px;
    border-bottom-right-radius: 0;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}
.service-section .service-item-inner:hover .icon
{
    background-color: var(--white);
    color: var(--main-color);
    font-size: 24px;
}
.service-section .service-item-inner .icon i
{
    line-height: 60px;
}
.service-section .service-item-inner h3
{
    font-size: 20px;
    font-weight: 600;
    color: var(--black-900);
    margin: 0 0 10px;
    text-transform: capitalize;
    transition: all 0.3s ease;
}
.service-section .service-item-inner:hover h3
{
    color: var(--white);
}
.service-section .service-item-inner p
{
    font-size: 16px;
    color: var(--black-400);
    margin: 0;
    line-height: 26px;
    transition: all 0.3s ease;
}
.service-section .service-item-inner:hover p
{
    color: var(--black-100);
}
/*===== portfolio =====*/
.portfolio .portfolio-filter
{
    flex: 0 0 100%;
    max-width: 100%;
    padding: 20px;
    text-align: center;
}
.portfolio .portfolio-filter button
{
    text-transform: uppercase;
    margin-top: -20px;
    outline: none;
    border: 1px solid;
    border-color: var(--main-color);
    padding: 8px;
    font-weight: 600;
    border-radius: 5px;
    background-color: var(--white);
    margin-right: 20px;
    color: var(--main-color);
    margin-bottom: 20px;
    transition: all 0.3s ease;
}
.portfolio .portfolio-filter button:last-child
{
    margin-right: 0;
}
.portfolio .portfolio-filter button:hover,
.portfolio .portfolio-filter button.active 
{
    color: var(--white);
    background-color: var(--main-color);
}
.portfolio .portfolio-item
{
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
}
.portfolio .portfolio-item.hide 
{
    display: none;
}
.portfolio .portfolio-item.show
{
    display: block;
    animation:  showItem 0.5s ease;
}
@keyframes showItem
{
    0%
    {
        transform: scale(0.8);
        opacity: 0;
    }
    100%
    {
        transform: scale(1);
        opacity: 1;
    }
}
.portfolio .portfolio-item-inner
{
    width: 100%;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: var(--shadow-black-100);
    cursor: pointer;
    position: relative;
}
.portfolio .portfolio-item-inner .portfolio-img img
{
    width: 100%;
    display: block;
}
.portfolio .portfolio-item .portfolio-info
{
    position: absolute;
    left: 0;
    top: 0;
    background-color: rgba(0,0,0,0.8);
    z-index: 1;
    height: 100%;
    width: 100%;
    padding: 30px;
    opacity: 0;
    transition: all 0.3s ease;
}
.portfolio .portfolio-item:hover .portfolio-info
{
    opacity: 1;
}
.portfolio .portfolio-item .portfolio-info h4
{
    font-size: 18px;
    font-weight: 700;
    color: var(--main-color);
    text-transform: capitalize;
    transform: translateX(-20px);
    transition: all 0.3s ease;
    opacity: 0;
}
.portfolio .portfolio-item:hover .portfolio-info h4
{
    transform: translateX(0px);
    opacity: 1;
}
.portfolio .portfolio-item .portfolio-info .icon
{
    height: 40px;
    width: 40px;
    color: var(--white);
    background-color: var(--main-color);
    text-align: center;
    border-radius: 50%;
    position: absolute;
    right: 30px;
    bottom: 30px;
    transform: translateX(20px);
    transition: all 0.3s ease;
    opacity: 0;
}
.portfolio .portfolio-item:hover .portfolio-info .icon
{
    transform: translateX(0px);
    opacity: 1;
}
.portfolio .portfolio-item .portfolio-info .icon .fa 
{
    line-height: 40px;
}
/*===== Lightbox =====*/
.lightbox
{
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
    z-index: 1000;
    display: none;
    justify-content: center;
    align-items: center;
    cursor: zoom-out;
    padding: 30px;
}
.lightbox.open 
{
    display: flex;
}
.lightbox .lightbox-content img
{
    height: auto;
    width: auto;
    max-width: 100%;
    max-height: 500px;
    cursor: pointer;
    display: block;
    padding: 40px 0 30px;
}
.lightbox .lightbox-content
{
    position: relative;
}
.lightbox.open .lightbox-content
{
    animation:  lightboxImage .5s ease;
}
@keyframes lightboxImage
{
    0%
    {
        transform: scale(0.8);
    }
    100%
    {
        transform: scale(1);
    }
}
.lightbox .lightbox-content .lightbox-close
{
    position: absolute;
    height: 40px;
    width: 40px;
    top: 0;
    right: 0;
    font-size: 32px;
    color: var(--white);
    line-height: 40px;
    text-align: right;
}
.lightbox .lightbox-content .lightbox-caption
{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    font-size: 16px;
    color: var(--white);
    font-weight: 400;
    z-index: -1;
}
.lightbox .lightbox-controls .prev-item,
.lightbox .lightbox-controls .next-item
{
    position: absolute;
    height: 40px;
    width: 40px;
    background-color: var(--white);
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
    top: 50%;
    margin-top: -20px;
    z-index: 110;
    transition: all 0.3s ease;
}

.lightbox .lightbox-controls .next-item:hover,
.lightbox .lightbox-controls .prev-item:hover
{
    transform: scale(1.1);
}
.lightbox .lightbox-controls .next-item:active,
.lightbox .lightbox-controls .prev-item:active
{
    transform: scale(1);
}
.lightbox .lightbox-controls .prev-item
{
    left: 30px;
}
.lightbox .lightbox-controls .next-item
{
    right: 30px;
}
.lightbox .lightbox-controls .next-item .fa,
.lightbox .lightbox-controls .prev-item .fa
{
    font-size: 32px;
    line-height: 40px;
}
/*===== pricing =====*/
.pricing-item
{
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
}
.pricing-plan
{
    box-shadow: var(--shadow-black-100);
    border-radius: 10px;
    overflow: hidden;
    width: 100%;
}
.pricing-plan .pricing-header
{
    padding: 20px 30px;
    border-bottom: 1px solid var(--black-100);
    position: relative;
}
.pricing-plan .pricing-header h3
{
    font-size: 30px;
    color: var(--black-900);
    font-weight: 500;
    text-transform: capitalize;
    margin: 0;
}

.pricing-plan .pricing-price
{
    padding: 40px 30px;
    display: flex;
    line-height: 0.7;
}
.pricing-plan .pricing-price .currency
{
    font-size: 16px;
    font-weight: 300;
    color: var(--black-400);
    margin-right: 5px;
    align-self: flex-start;
}
.pricing-plan .pricing-price .price 
{
    font-size: 80px;
    font-weight: 700;
    color: var(--main-color);
}
.pricing-plan .pricing-price .period
{
    font-size: 14px;
    font-weight: 300;
    color: var(--black-400);
    margin-right: 5px;
    align-self: flex-end;
    text-transform: uppercase;
}
.pricing-plan .pricing-body
{
    padding: 0 30px;
}
.pricing-plan .pricing-body ul li
{
    font-size: 16px;
    font-weight: 300;
    color: var(--black-400);
    padding: 10px 0 10px 30px;
    border-bottom: 1px solid var(--black-alpha-100);
    line-height: 26px;
    position: relative;
}
.pricing-plan .pricing-body ul li:last-child
{
    border-bottom: none;
}
.pricing-plan .pricing-body ul li i
{
    color: var(--main-color);
    position: absolute;
    left: 0;
    top: 12px;
}
.pricing-plan .pricing-footer
{
    padding: 40px;
    text-align: center;
}
/*===== contact =====*/
.contact-section
{
    min-height: 100vh;
    background-color: var(--black-100);
}
.contact-section .contact-item
{
    flex: 0 0 33.33%;
    max-width: 33.33%;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
}
.contact-section .contact-item-inner
{
    padding: 30px 15px;
    text-align: center;
    box-shadow: var(--shadow-black-100);
    border-radius: 5px;
    width: 100%;
}
.contact-section .contact-item-inner i
{
    font-size: 25px;
    color: var(--main-color);
}
.contact-section .contact-item-inner span
{
    display: block;
    font-size: 16px;
    font-weight: 600;
    color: var(--black-900);
    margin: 15px 0 10px;
    text-transform: capitalize;
}
.contact-section .contact-item-inner p
{
    font-size: 16px;
    color: var(--black-400);
    line-height: 26px;
    margin: 0;
}
.contact-section .contact-form
{
    flex: 0 0 100%;
    max-width: 100%;
    margin-top: 50px;
}

.contact-section .w-50
{
    padding: 0 15px;
    flex: 0 0 50%;
    max-width: 50%;
}
.contact-section .input-group
{
    margin: 0 0 25px;
    border-radius: 30px;
    background-color: var(--black-100);
    box-shadow: var(--shadow-black-100);
}
.contact-section .input-group .input-control
{
    height: 45px;
    display: block;
    width: 100%;
    border-radius: 30px;
    border: none;
    outline: none;
    background-color: transparent;
    font-size: 16px;
    padding: 0 15px;
    transition: all 0.3s ease;
    color: var(--black-400);
}
.contact-section .input-group textarea.input-control
{
    height: 180px;
    padding-top: 15px;
    resize: none;
}
.contact-section .input-group .input-control:focus
{
    border: 1px solid var(--main-color);
}
.contact-section .submit-btn
{
    flex: 0 0 100%;
    max-width: 100%;
    text-align: right;
    padding: 0 15px;
}
/*footer*/
footer
{
    background-color: var(--main-color);
 
}
footer .copyright-text
{
    padding: 10px 0;
    font-size: 18px;
    color: var(--black-100);
    font-weight: 300;
    margin: 10px 0 0;
}

.footico{
    padding-top: 20px;
    text-align:center;
  
}
.footico ul li{
    padding: 20px;
    display: inline;
  
}
/*Responsive*/
@media  (min-width:1300px) and (max-width:1399px)
{
    .header-social
    {
        left: 10px;
    }
}
@media  (max-width:1300px)
{
    .header-social
    {
        display: none;
    }
}
@media(max-width: 991px)
{
    .navbar .menu
    {
        position: fixed;
        left: -100%;
        top: 80px;
        flex-direction: column;
        background-color: var(--main-color);
        width: 100%;
        text-align: center;
        transition: all 0.5s ease;
        box-shadow: 0 10px 27px rgba(0,0,0,.05);
    }
    .navbar .menu.active 
    {
        left: 0;
    }
    .navbar.sticky .menu
    {
        background-color: var(--white);
        top: 65px;
    }
    .navbar .menu .nav-item
    {
        display: block;
        margin: 6px 0;
    }
    .navbar.sticky .menu .nav-item .nav-link
    {
        color: var(--main-color);
    }
    .navbar .nav-item .nav-link span 
    {
        display: none;
    }
    .navbar .menu-btn
    {
        display: block;
        z-index: 999;
    }
    .header-social
    {
        display: block;
        left: 90%;
    }
    .header-hero-shape
    {
        display: none;
    }
    .home-section .home-image,
    .home-section .home-text
    {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .home-section .home-image
    {
        display: flex;
        justify-content: center;
    }
    .home-image .img-box
    {
        margin-top: 30px;
    }
    .about-section .about-image
    {
        display: none;
    }
    .about-section .about-content
    {
        flex: 0 0 75%;
        max-width: 75%;
    }
    .about-section .about-content .section-title
    {
        text-align: center;
    }
    .pricing .pricing-item,
    .portfolio .portfolio-item,
    .service-section .service-item
    {
        flex: 0 0 50%;
        max-width: 50%;
    }
}
@media(max-width: 767px)
{
    .header-social
    {
        left: 85%;
    }
    .service-section .service-item,
    .portfolio .portfolio-item,
    .pricing .pricing-item,
    .contact-section .contact-item,
    .contact-section .w-50,
    .about-section .about-content
    {
        flex: 0 0 100%;
        max-width: 100%;
    }
}
.sub-title, .links .menu li {
    font-family: 'Preahvihear', sans-serif;
}
.pricing-body img{
    padding-right: 10px;
}
.btns{
    background-color:var(--main-color);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family: 'Preahvihear', sans-serif;
}

.MainContainer {
  width: 100%;
  height: 1000px;

 
}



.btn{
border:0px;
background-color:transparent;
font-size:17px;
color:#fff;
}



/* Overlay */

.Modal {
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 9999;
  width: 100%;
  height: 100%;
  padding-top: 100px;
  background-color: black;
  background-color: rgba(0, 0, 0, 0.4);
  -webkit-transition: 0.5s;
  overflow: auto;
  transition: all 0.3s linear;
}

.Modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border-radius: 4px;
  max-width: 600px;
  height: 840px;
}

.Modal-content2 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border-radius: 4px;
  max-width: 400px;
  height: 450px;
}


.ModalOpen { overflow: hidden; }

.is-hidden { display: none; }

.is-visuallyHidden { opacity: 0; }

/* The Close Button */

.Close {
  color: #aaaaaa;
  float: right;
  font-size: 16px;
}

.Close:hover, .Close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}



button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container1 {
  padding: 16px;
height:780px;
}

.container2 {
  padding: 16px;
height:380px;
}
/* Modal Content/Box */
.modalcontent {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


  .cancelbtn, .signupbtn {
     width: 100%;
 
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  }

.signupbtn {
background:rgb(0,100,0);
}


.container1 h1,.container2 h1{
text-align:center;

}



</style>  


 </head>  
<body>
<main id="myContainer" class="MainContainer">    
 <!--===== Navbar Start =====-->
      <nav class="navbar">
          <div class="container">
              <div class="row justify-content-between">
                  <div class="logo"><a href="1.php">Port<span>folio</span></a></div>
                  <div class="links">
                  <ul class="menu">
                      <li class="nav-item"><a href="#home" class="nav-link ">Home <span></span></a></li>
                    
                      <li class="nav-item"><a href="#about" class="nav-link">About <span></span></a></li>
                      <li class="nav-item"><a href="#services" class="nav-link">Services <span></span></a></li>
                      <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio <span></span></a></li>
                      <li class="nav-item"><a href="#pricing" class="nav-link">Projects <span></span></a></li>
                      <li class="nav-item"><a href="#contact" class="nav-link">Contact <span></span></a></li>
                      <li class="nav-item"><button type="button" class="btn nav-link ma" id="buttonsign" onclick="document.getElementById('id01').style.display='block'"  >Sign Up </button><span></span></li>
                      <li class="nav-item"><button type="button" id="myBtn2" class="btn nav-link ma">Log In</button></li>
                  </ul>
                  </div>
                  <div class="menu-btn">
                      <i class="fas fa-bars"></i>
                  </div>
              </div>
          </div>
      </nav>
      <!--===== Navbar End =====-->
      <!--===== password validation start=====-->
      <script>
function validateForm() {

  var p = document.forms["myForm"]["psw"].value;
  var rp = document.forms["myForm"]["psw_repeat"].value;

  if (p != rp) {
    alert("Check your password again");
    return false;
  }

}


function myFunction() {
  document.getElementById("myForm").reset();
}

function myFunction2() {
  document.getElementById("myForm2").reset();
}
</script>
<!--===== password validation end=====-->
            <!--===== Home Section Start =====-->
     <section class="home-section" id="home">
       
          <div class="container">
              <div class="row align-items-center">
                  <div class="home-text">
                      <h4>Hi I'm</h4>
                      <h1>-Fathima Nasra</h1>
                      <span>Professional Web Designer<br>Photographer<br>Event Manager</span>
                      <p>2+ years of experience in designing and developing websites,capturing memorable events and managing and making the events memorable</p>
                           <a href="#" class="bttn btn-1">Hire Me</a>
                  </div>
                  <div class="home-image">
                      <div class="img-box">
                          <img src="images/hero.png" alt="">
                      </div>
                  </div>
              </div>
          </div>
          <div class="header-hero-shape"></div><!-- ===== Hero Shape =====-->
      </section>
      <!--===== Home Section End =====-->
  <!--===== About Section Start =====-->
      <section class="about-section section-padding" id="about">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                  <div class="about-image">
                      <div class="img-box">
                          <img src="images/about_hero.png" alt="">
                          <div class="about-shape"></div>
                      </div>
                  </div>
                  <div class="about-content">
                      <div class="section-title">
                          <h5 class="sub-title">About</h5>
                          <h3 class="main-title">Why You Hire Me?</h3>
                          <ul class="line">
                              <li></li>
                              <li></li>
                              <li></li>
                          </ul>
                      </div> <!--===== Section Title =====-->
                      <p> I am an undergraduate of Rajarata University of Sri Lanka who is pursuing an BSc.IT degree. I am from Polgahawela. 
                    I am currently working as a junior web developer, a Photographer and a event manager who managed many events. 
                        As my goal is to be a web engineer I am working hard to achieve it.</p>
                          <div class="about-skills">
                              <div class="skill-item">
                                  <div class="skill-header">
                                      <h6 class="skill-title">PHP</h6>
                                      <div class="skill-percentage">
                                          <p><span class="counter">90</span>%</p>
                                      </div>
                                  </div>
                                  <div class="skill-bar">
                                      <div class="bar-inner">
                                          <div class="bar progress-line" data-progress="90%"></div>
                                      </div>
                                  </div>
                              </div> <!--===== Skill Item =====-->
                              <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Light Adjustment</h6>
                                    <div class="skill-percentage">
                                        <p><span class="counter">85</span>%</p>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-progress="85%"></div>
                                    </div>
                                </div>
                                <!--===== Skill Item =====-->
                              <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Web Design</h6>
                                    <div class="skill-percentage">
                                        <p><span class="counter">95</span>%</p>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-progress="95%"></div>
                                    </div>
                                </div>
                            </div> <!--===== Skill Item =====-->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">HTML/CSS</h6>
                                    <div class="skill-percentage">
                                        <p><span class="counter">84</span>%</p>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-progress="84%"></div>
                                    </div>
                                </div>
                            </div> <!--===== Skill Item =====-->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Image Editing</h6>
                                    <div class="skill-percentage">
                                        <p><span class="counter">96</span>%</p>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-progress="96%"></div>
                                    </div>
                                </div>
                                <!--===== Skill Item =====-->
                              <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Time Management</h6>
                                    <div class="skill-percentage">
                                        <p><span class="counter">98</span>%</p>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-progress="98%"></div>
                                    </div>
                                </div>
                            </div> <!--===== Skill Item =====-->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <h6 class="skill-title">Javascript</h6>
                                    <div class="skill-percentage">
                                        <p><span class="counter">87</span>%</p>
                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-progress="87%"></div>
                                    </div>
                                </div>
                            </div> <!--===== Skill Item =====-->
                          </div>
                  </div>
              </div>
          </div>
      </section>
      <!--===== About Section End =====--> 
   <!--===== Services Section Start =====-->
      <section class="service-section section-padding" id="services">
          <div class="container">
              <div class="row">
                <div class="section-title text-align">
                    <h5 class="sub-title">Services</h5>
                    <h3 class="main-title">Services I Provide</h3>
                    <ul class="line">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> <!--===== Section Title =====-->
              </div>
              <div class="row">
                   <!--===== Service Item Start =====-->
                  <div class="service-item">
                      <div class="service-item-inner">
                          <div class="icon">
                              <i class="fas fa-mobile-alt"></i>
                          </div>
                          <h3>Responsive Design</h3>
                          <p>Your website will work perfectly on any platform, mobile or desktop.</p>
                      </div>
                  </div>
                  <!--===== Service Item End =====-->
                  <!--===== Service Item Start =====-->
                   <div class="service-item">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Web Design</h3>
                        <p>Designing the websites with creative and modern web trends to provide best, clean and intuitive user experience </p>
                    </div>
                </div>
                <!--===== Service Item End =====-->
                <!--===== Service Item Start =====-->
                 <div class="service-item">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class='fas fa-calendar-day'></i>
                        </div>
                        <h3>Event Managing</h3>
                        <p>Providing a memorable experience to you by allowing you to be a guest at your own event and make your day as unique as you.</p>
                    </div>
                </div>
                <!--===== Service Item End =====-->
                <!--===== Service Item Start =====-->
                <div class="service-item">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class='fas fa-photo-video'></i>
                        </div>
                        <h3>Photography</h3>
                        <p>Introduce the world to your business with authentic, high-resolution photos of your team, locations, products, customers and events.</p>
                    </div>
                </div>
                <!--===== Service Item End =====-->
                <!--===== Service Item Start =====-->
                 <div class="service-item">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Clean Code</h3>
                        <p>fewer loading errors for your website and in some cases, we provide you better rankings in Google and other search engines.</p>
                    </div>
                </div>
                <!--===== Service Item End =====-->
                <!--===== Service Item Start =====-->
                 <div class="service-item">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Seo Marketing</h3>
                        <p>Your target audience will find your site and services on Google.</p>
                    </div>
                </div>
                <!--===== Service Item End =====-->
                <!--===== Service Item Start =====-->
                 <div class="service-item">
                    <div class="service-item-inner">
                        <div class="icon">
                            <i class='fas fa-star'></i>
                        </div>
                        <h3>High Performance</h3>
                        <p>Designed and optimized to load your site faster, providing excellent user experience.</p>
                    </div>
                </div>
                <!--===== Service Item End =====-->
              </div>
          </div>
      </section>
      <!--===== Services Section End =====-->
     <!--===== Portfolio Section Start =====-->
      <section class="portfolio section-padding" id="portfolio">
          <div class="container">
            <div class="row">
                <div class="section-title text-align">
                    <h5 class="sub-title">Portfolio</h5>
                    <h3 class="main-title">My Latest Work</h3>
                    <ul class="line">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> <!--===== Section Title =====-->
              </div>
              <div class="row">
                  <div class="portfolio-filter">
                      <button type="button" class="active" data-filter="all">All</button>
                      <button type="button" data-filter="Web-design">Web design</button>
                      <button type="button" data-filter="Photography">Photography</button>
                      <button type="button" data-filter="Event Management">Event Management</button>
                  </div>
              </div>
              <div class="row">
                  <!--===== portfolio-item start =====-->
                  <div class="portfolio-item" data-category="Web-design">
                      <div class="portfolio-item-inner">
                          <div class="portfolio-img">
                              <img src="images/portfolio/portfolio-1.png" alt="">
                          </div>
                          <div class="portfolio-info">
                              <h4>Web design for a photographical site</h4>
                              <div class="icon">
                                  <i class="fa fa-search"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                   <!--===== portfolio-item end =====-->
                   <!--===== portfolio-item start =====-->
                  <div class="portfolio-item" data-category="Event Management">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-2.jpg" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Event Management for a get-together</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
                 <!--===== portfolio-item start =====-->
                   <div class="portfolio-item" data-category="Photography">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-3.jpg" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Portrait Photography</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
                 <!--===== portfolio-item start =====-->
                   <div class="portfolio-item" data-category="Web-design">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-4.png" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Web-design for a virtual reality site</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
                 <!--===== portfolio-item start =====-->
                   <div class="portfolio-item" data-category="Event Management">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-5.jpg" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Event Management for an Engagement</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
                 <!--===== portfolio-item start =====-->
                   <div class="portfolio-item" data-category="Event Management">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-6.jpg" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Event Management for a Bride-to-be Event</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
                  <!--===== portfolio-item start =====-->
                  <div class="portfolio-item" data-category="Photography">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-7.png" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Product Photography</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
                  <!--===== portfolio-item start =====-->
                  <div class="portfolio-item" data-category="Photography">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-img">
                            <img src="images/portfolio/portfolio-8.jpeg" alt="">
                        </div>
                        <div class="portfolio-info">
                            <h4>Location photography</h4>
                            <div class="icon">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--===== portfolio-item end =====-->
              </div>
          </div>
      </section>
      <!--===== Portfolio Section End =====-->
  <!--===== Pricing Section Start =====-->
      <section class="pricing section-padding" id="pricing">
          <div class="container">
            <div class="row">
                <div class="section-title text-align">
                    <h5 class="sub-title">My Projects</h5>
                    <h3 class="main-title">Project Details</h3>
                    <ul class="line">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> <!--===== Section Title =====-->
              </div>
              <?php
	$user='root';
	$pass='';
	$db='portfolio';

	$db= new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
	
	$sql = "SELECT Category, Price, Per, Imageurl, Feature1, Feature2, Feature3, Feature4 from project2";
	$result = $db->query($sql);
	
				if($result-> num_rows > 0){
			 while($row = $result->fetch_assoc()){
?>
              <div class="row justify-content-center">
                  <div class="pricing-item">
                      <div class="pricing-plan">
                          <div class="pricing-header">
                              <h3><?php echo $row["Category"];?></h3>
                          </div>
                          <div class="pricing-price">
                              <span class="currency">$</span>
                              <span class="price"><?php echo $row["Price"];?></span>
                              <span class="period">/<?php echo $row["Per"];?></span>
                          </div>
                          <div class="pricing-body">
                          <center> <img src="<?php echo $row["Imageurl"];?>" width="80%" height="50%"></center> 
                              <ul>
                                  <li><i class="fa fa-check"></i> <?php echo $row["Feature1"];?> </li>
                                  <li><i class="fa fa-check"></i> <?php echo $row["Feature2"];?>  </li>
                                  <li><i class="fa fa-check"></i> <?php echo $row["Feature3"];?>  </li>
                                  <li><i class="fa fa-check"></i><?php echo $row["Feature4"];?> </li>
                                 
                              </ul>
                          </div>
                          <div class="pricing-footer">
                              <a href="#" class="btn-2">get started</a>
                          </div>
                      </div>
                  </div>
              </div>
              <?php
				}
				
			   }
			else{
				echo "0 result";
			    }
			
			
				
?>  
          </div>
      </section>
      <!--===== Pricing Section End =====-->
 <!--===== Contact Section Start =====-->
       <section class="contact-section section-padding" id="contact">
           <div class="container">
            <div class="row">
                <div class="section-title text-align">
                    <h5 class="sub-title">Contact Me....</h5>
                    <h3 class="main-title">Get In Touch</h3>
                    <ul class="line">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div> <!--===== Section Title =====-->
              </div>
              <div class="row">
                  <!--===== contact item start =====-->
                  <div class="contact-item">
                      <div class="contact-item-inner">
                          <i class="fas fa-phone"></i>
                          <span>Phone</span>
                          <p>0112243465</p>
                      </div>
                  </div>
                  <!--===== contact item end =====-->
                  <!--===== contact item start =====-->
                   <div class="contact-item">
                    <div class="contact-item-inner">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                        <p>nasraikran@gmail.com</p>
                    </div>
                </div>
                 <!--===== contact item end =====-->
                 <!--===== contact item start =====-->
                 <div class="contact-item">
                    <div class="contact-item-inner">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Address</span>
                        <p>No:37/3,<br>Marine Drive,<br>Colombo-03</p>
                    </div>
                </div>
                 <!--===== contact item end =====-->
              </div>
                 <!--===== Contact Form =====-->
              <div class="row">
                  <div class="contact-form">
                      <form action="contact.php" method="post">
                          <div class="row">
                              <div class="w-50">
                                  <div class="input-group">
                                      <input name="name" type="text" placeholder="Name" class="input-control">
                                  </div>
                                  <div class="input-group">
                                    <input name="email" type="email" placeholder="Email" class="input-control">
                                </div>
                                <div class="input-group">
                                    <input  name="subject" type="text" placeholder="Subject" class="input-control">
                                </div>
                              </div>
                              <div class="w-50">
                                  <div class="input-group">
                                      <textarea name="message" class="input-control" placeholder="Message" id="" cols="30" rows="10"></textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="submit-btn">
                                  <button type="submit" class="btn-1">Send Message</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
           </div>
       </section>
       <!--===== Contact Section End =====-->
     <!--===== Footer Section Start =====-->
       <footer class="footer">
        <div class="footico">
        <ul class="headsocial"> <!--===== Footer Social =====-->
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f fa-2x"></i></a></li>
            <li><a href="https://web.whatsapp.com/"><i class="fab fa-twitter fa-2x"></i></a></li>
            <li><a href="https://instagram.com/cake_t_h_e_great?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram fa-2x"></i></a></li>
            <li><a href="https://lk.linkedin.com/"><i class="fab fa-linkedin fa-2x"></i></a></li>
        </ul>
    </div>
           <div class="container">
               <div class="row justify-content-center">
              
                   <p class="copyright-text">Created by <span>Fathima Nasra </span>| &copy; 2023 All rights reserved</p>
               </div>
           </div>
       </footer>
       <!--===== Footer Section End =====-->
       <!--===== Lightbox Start =====-->
      <div class="lightbox">
          <div class="lightbox-content">
              <div class="lightbox-close">&times;</div>
              <img src="images/portfolio/portfolio-2.jpg" onclick="nextItem()" class="lightbox-img" alt="">
              <div class="lightbox-caption">
                  <div class="caption-text"></div>
                  <div class="caption-counter"></div>
              </div>
          </div>
          <div class="lightbox-controls">
              <div class="prev-item" onclick="prevItem()"><i class="fa fa-angle-left"></i></div>
              <div class="next-item" onclick="nextItem()"><i class="fa fa-angle-right"></i></div>
          </div>
      </div>
      <!--===== Lightbox End =====-->

 

<!-- Open The Modal -->
            <!--Open Modal -->
        </main>
<div id="signupform" class="Modal is-hidden is-visuallyHidden">
           
            <div class="Modal-content">
                <span id="closeModal" class="Close">&times;</span>

<!--=====log in submission=====-->
<?php
$db=new mysqli("localhost","root","","portfolio");




?>

<?php
 $mysqli = new mysqli("localhost", "root", "", "portfolio");
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if(isset($_POST["submit"])){
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['fname']);
$last_name = $mysqli->real_escape_string($_REQUEST['lname']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$psw = $mysqli->real_escape_string($_REQUEST['psw']);
$pswr = $mysqli->real_escape_string($_REQUEST['psw_repeat']);
$_SESSION['email']=$email;
$_SESSION['psw']=$psw;
$_SESSION['fname']=$first_name;
$_SESSION['lname']=$last_name;

if(isset($_POST["email"])){
$sql1="SELECT * from users WHERE Email='{$_POST["email"]}'";
$res=$mysqli->query($sql1);
// Attempt insert query execution
if($res->num_rows>0){
echo "<script>alert('invalid Email ');</script>";
echo "<script>window.open('1.php','_self');</script>";
}
else{

$sql = "INSERT INTO users (Email,First_Name, Last_Name, Password) VALUES ('$email','$first_name', '$last_name', '$psw')";
if($mysqli->query($sql) === true ){
    echo '<script>alert("successfully Registered")</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 

}


}

}
?>
        <!--===== log in submission  end =====-->

<form id="myForm" name="myForm" class="modalcontent" action="" method="post" onsubmit="return validateForm()">
    <div class="container1">
     <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
	 <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>

	 <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="lname" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <input type="button" onclick="myFunction()" class="cancelbtn" value="Clear"></button>
        <button type="submit" class="signupbtn" name="submit">Sign Up</button>
      </div>
    </div>
  </form>

            </div>
        </div>



<div id="myModal2" class="Modal is-hidden is-visuallyHidden">
            <!-- Modal content -->
            <div class="Modal-content2">
                <span id="closeModal2" class="Close">&times;</span>

                <?php
if(isset($_POST["submit2"])){
$emaill=$_POST['emaill'];
$pswl=$_POST['pswl'];
$sql="SELECT * from users WHERE Email='{$_POST["emaill"]}' AND Password='{$_POST["pswl"]}'";
$res=$db->query($sql);



if($res->num_rows>0){
/*$ro=$res->fetch_assoc();*/
$_SESSION['emaill']=$emaill;
$_SESSION['pswl']=$pswl;

if($emaill=='567' && $pswl=='2'){
echo "<script>window.open('rateman.php','_self');</script>";
}
else{
echo "<script>window.open('1.php','_self');</script>";
}
}
else{
echo "<script>alert('invalid Email or Password');</script>";
echo "<script>window.open('1.php','_self');</script>";
}
}
?>

              
 <form id="myForm2"  class="modalcontent"  method="POST" name="myForm2">
<div class="container2">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="emaill" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pswl" required>

    <div class="clearfix">
        <button type="button" onclick="myFunction2()" class="cancelbtn" value="Clear">Clear</button>
        <button type="submit2" class="signupbtn" name="submit2">Log in</button>
      </div></div>
  </form>
 </div>               
  </div>
       

 


<!--===== Main JS =====-->
<script>
            var modal=document.getElementById("signupform");
body=document.getElementsByTagName("body");
container=document.getElementById("myContainer");
btnOpen=document.getElementById("buttonsign");
btnClose=document.getElementById("closeModal");


btnOpen.onclick=function(){
modal.className="Modal is-visuallyHidden",
setTimeout(function(){container.className="MainContainer is-blurred",modal.className="Modal"},100),
container.parentElement.className="ModalOpen"},
btnClose.onclick=function(){
modal.className="Modal is-hidden is-visuallyHidden",
body.className="",
container.className="MainContainer",
container.parentElement.className=""},
window.onclick=function(e){
e.target==modal&&(modal.className="Modal is-hidden",body.className="",container.className="MainContainer",container.parentElement.className="")
};

var modal2=document.getElementById("myModal2");
body2=document.getElementsByTagName("body");
container2=document.getElementById("myContainer");
btnOpen2=document.getElementById("myBtn2");
btnClose2=document.getElementById("closeModal2");


btnOpen2.onclick=function(){
modal2.className="Modal is-visuallyHidden",
setTimeout(function(){container2.className="MainContainer is-blurred",modal2.className="Modal"},100),
container2.parentElement.className="ModalOpen"},
btnClose2.onclick=function(){
modal2.className="Modal is-hidden is-visuallyHidden",
body2.className="",
container2.className="MainContainer",
container2.parentElement.className=""},
window.onclick=function(e){
e.target==modal2&&(modal2.className="Modal is-hidden",body2.className="",container2.className="MainContainer",container.parentElement.className="")
};    


        </script>   
<script src="gallery.js"></script>
   
<script src="g2.js"></script>
   
</body>
</html>    
