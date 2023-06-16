@extends('layouts.app')

@section('css')
<link data-minify="1" rel='stylesheet' id='labb-icomoon-styles-css' href="{{asset('public/assets/wp-content/icomoon.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='slick-css' href="{{asset('public/assets/wp-content/slick.css?ver=1682265287')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='fl-builder-layout-24-css' href="{{asset('public/assets/wp-content/24-layout.css?ver=1682287855')}}" media='all' />

<style id="wp-custom-css">
@font-face {
    font-family: BlissBucket;
    src: url({{asset('public/fonts/Blissbucket.otf')}}) format("opentype");
}    
         .top_layer {
         z-index: 10;
         position: relative;}
         .middle_layer {
         z-index: 5;
         position: relative;}
         .bottom_layer 
         {   z-index: 0;
         position: relative;}
         /*Main Nav*/
         /*.meg-men .sub-menu{
         border-top: solid 13px #fff;
         }*/
         /*ul.fl-menu-horizontal li.mega-menu.engineering.fl-has-submenu:hover > ul.sub-menu, ul.fl-menu-horizontal li.mega-menu.navigation.fl-has-submenu.focus > ul.sub-menu{
         max-width: 750px !important;
         text-align: center;
         } */
         .menu-image-title-below.menu-image-title {
         margin-top: 10px;
         }
         /*.menu-image.menu-image-title-below {
         transition: 0.7s ease;
         }*/
         .menu-image.menu-image-title-below:hover, li.uabb-info-list-item:hover, .custom-menu .uabb-infobox-left-right-wrap:hover {
         transform:scale(0.95);
         transition: 0.7s ease;
         }
         /*ul.fl-menu-horizontal li.mega-menu.navigation.fl-has-submenu:hover > ul.sub-menu, ul.fl-menu-horizontal li.mega-menu.navigation.fl-has-submenu.focus > ul.sub-menu{
         max-width: 1100px;
         text-align: center;
         }*/
         ul.fl-menu-horizontal li.mega-menu > ul.sub-menu {
         top: inherit !important; 
         margin-right:13%;
         margin-left:auto;
         width: 100%;
         padding-left: 20px;
         padding-right: 20px;
         padding-bottom: 10px;
         border-top: solid 2px #6dc6da;
         }
         @media (max-width: 768px){
         ul.fl-menu-horizontal li.mega-menu > ul.sub-menu {
         margin-right:auto;
         }
         }
         /*ul.fl-menu-horizontal li.mega-menu.company.fl-has-submenu:hover > ul.sub-menu, ul.fl-menu-horizontal li.mega-menu.company.fl-has-submenu.focus > ul.sub-menu{
         max-width: 750px !important;
         text-align: center;
         } */
         .mega-menu .navigation ul.sub-menu {
         width: 80% !important;
         margin: 0 auto !important;
         }
         ul.sub-menu {
         width: 60% !important;
         margin: 0 auto !important;
         }
         /*Headlines*/
         h1,h2,h3 {  
         font-family: "BlissBucket";
         font-weight: 500;
         text-transform: uppercase;
         }
         h4 {  
         font-family: 'Jost', sans-serif;
         text-transform: uppercase;
         }
         h5 {  
         font-family: obvia, sans-serif;
         font-weight: 200;
         text-transform: uppercase;
         }
         .border-box h5 {
         font-family: "obvia", sans-serif;
         font-weight: 300;
         font-size: 24px;
         color: #fff;
         }
         @media only screen and (max-width: 978px){.border-box h5 {
         font-family: "obvia", sans-serif;
         font-weight: 500;
         font-size: 20px;
         color: #fff;
         }}
         h6 {  
         font-family: 'EB Garamond', serif;
         }
         p sup {
         top: -.7em;
         font-size: 50%; 
         }
         /*Paragraph*/
         body, p {   
         font-family: 'Jost', sans-serif;
         font-weight: 300;
         }
         /*Custom Font Styles*/
         .obvia, .obvia a {
         font-family: obvia, sans-serif;
         text-transform: uppercase;
         font-size: 16px;
         }
         .custom-menu .uabb-infobox-title {
         font-size: 14px !important;
         font-family: obvia, sans-serif;
         text-transform: capitalize;
         }
         /*.custom-menu .uabb-infobox-left-right-wrap:hover {
         transition: 0.4s ease;
         transform: scale(0.9);
         }*/
         .jost, .jost a {
         font-family: 'Jost', sans-serif;
         }
         .acc-font .pp-accordion-button{
         font-family: obvia, sans-serif;
         font-weight: 300;
         font-size: 16px;
         }
         /*Blog Text Formats*/
         .single-post h2 {
         font-family: 'Jost', sans-serif;
         font-size: 24px;
         text-transform: uppercase;
         font-weight: normal;
         }
         .fl-widget .widget_recent_entries ul li {
         margin-bottom: 25px;
         }
         /* Global Button */
         .fl-button:hover {
         box-shadow: 1px 2px 5px 2px rgba(0,97,172,0.22);
         }
         @media only screen and (max-width: 1125px){
         .fl-button-text, .pp-button-text, .pp-button-2-text, .pp-button-1-text {
         font-size: 14px;
         white-space: nowrap;
         }
         }
         /* Mobile Menu */
         .menu-button span.menu-item-text  {
         background:#808080 !important;
         padding: 5px 15px;
         border-radius: 5px;
         }
         .menu-button span.menu-item-text:hover {
         color: #000 !important;
         }
         .uabb-creative-menu .sub-menu {
         background: #fff;
         }
         .uabb-creative-menu.off-canvas .sub-menu li{
         border-bottom: none !important;
         }
         .uabb-creative-menu .sub-menu .menu-item-text {
         color: #0061ac !important;
         }
         .uabb-creative-menu .sub-menu .menu-item-text:hover {
         color: #808080 !important;
         }
         /*Custom Classes*/
         .left-border {
         border-left: solid #808080 1px;
         }
         .bottom-border {
         border-bottom: solid 1px #808080;
         padding-bottom: 7px;
         background-clip: content-box; 
         background-color: #fff;
         }
         .corners-border {
         font-size: 25px;
         padding: .4em;
         border-style: solid;
         border-width: 0.1em;
         border-image-source: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns=%22http:%2F%2Fwww.w3.org%2F2000%2Fsvg%22 viewBox=%220 0 80 80%22%3E%3Crect x=%222%22 y=%222%22 width=%2276%22 height=%2276%22 fill=%22transparent%22 stroke=%22%23ffa238%22 stroke-width=%224%22 %2F%3E%3C%2Fsvg%3E");
         border-image-slice: 50%;
         border-image-width: 1em;
         }
         .staff-picture {
         transition: transform .5s;
         }
         .staff-picture:hover {
         transform:scale(1.03);
         }
         .hover-scale {transform: scale(1);
         transition:.2s}
         .hover-scale:hover {transform: scale(1.05);}
         .trademark {
         font-size:40%;
         vertical-align: top;
         }
         /* Specialty Slider */
         .home-page-slider {
         position: absolute;
         z-index: 1;
         top: -30px;
         left: 0;
         }
         .home-page-slider .fl-slide-photo-wrap {
         border-bottom: solid 2px #808080;
         padding-bottom: 7px;
         background-clip: content-box; 
         background-color: #fff;
         margin-left: -22%;
         }
         .home-page-slider .bx-controls {
         position: absolute;
         width: 300px;
         left: 55%;
         top: 235px;
         padding-left: 20px;
         }
         .bx-wrapper .bx-pager {
         text-align: left;
         width: 100%;
         margin: 0 auto;
         }
         .home-page-slider .bx-wrapper .bx-pager.bx-default-pager a {
         margin-right: 2vw;
         }
         .home-page-slider .bx-pager-link.active {
         width: 15px !important;
         height: 15px!important;
         border-radius: 10px !important;
         background-color: #045186 !important;
         }
         .home-page-slider .fl-slide-content-wrap {
         position: absolute !important;
         display: block;
         width: 400px !important;
         left: 55%;
         top: 300px;
         padding-left: 15px;
         font-style: italic;
         }
         #example-sl .bx-pager {
         bottom: 480px;
         left: 55%;
         padding-left: 15px;
         }
         #testimony .bx-pager {
         bottom: 70px !important;
         left:43%;
         padding-left: 15px;
         }
         #testimony .bx-pager-link.active {
         width: 15px !important;
         height: 15px!important;
         border-radius: 10px !important;
         background-color: #fff !important;
         }
         .home-page-slider .fl-slide-content-wrap .fl-slide-text p{
         font-family: "obvia", sans-serif;
         }
         .bx-pager-link:hover	{background-color:#52a6dd !important;}
         .bx-pager-link.active {
         background-color:#52a6dd !important;
         }
         .bx-wrapper .bx-pager.bx-default-pager a {
         background: #808080;
         }
         .home-page-slider-info {
         position: relative;
         z-index: 4;
         width:55%;
         float: right;
         }
         .basic-button {
         background: rgb(255, 162, 56);
         color: #fff !important;
         padding: 12px 24px !important;
         font-style: normal;
         border-radius: 4px;
         }
         @media only screen and (max-width: 992px)
         {.home-page-slider {
         position: absolute;
         z-index: 1;
         top: -30px;
         left: 0;
         }
         .home-page-slider .fl-slide-photo-wrap {
         border-bottom: solid 2px #808080;
         padding-bottom: 7px;
         background-clip: content-box; 
         background-color: #fff;
         margin-left: -22%;
         }
         .bx-wrapper {
         margin: 0px !important;
         }
         .home-page-slider .bx-controls {
         position: absolute;
         width: 300px;
         left: 55%;
         top: 230px;
         padding-left: 20px;
         }
         .home-page-slider .fl-slide-content-wrap {
         position: absolute !important;
         display: block;
         width: 300px !important;
         left: 55%;
         bottom: 0px;
         padding-left: 15px;
         font-style: italic;
         }
         #example-sl .bx-pager {
         bottom: 480px;
         left: 55%;
         padding-left: 15px;
         }
         #testimony .bx-pager {
         bottom: 100px !important;
         left:43%;
         padding-left: 15px;
         }
         .bx-pager-link:hover	{background-color:#52a6dd !important;}
         .bx-pager-link.active {
         background-color:#52a6dd !important;
         }
         .bx-wrapper .bx-pager.bx-default-pager a {
         background: #808080;
         }
         .home-page-slider-info {
         position: relative;
         z-index: 4;
         width:55%;
         float: right;
         }
         }
         @media only screen and (max-width: 660px){	
         .home-page-slider {
         z-index: 1;
         top: 0px;
         }
         .bx-viewport {
         overflow:visible !important;
         }
         .home-page-slider .bx-controls .bx-pager {
         position: absolute;
         bottom: 0px;
         margin: 0 auto;
         left:0px;
         right:0px;
         bottom: -60px;
         text-align: center;}
         .home-page-slider .bx-controls {
         position: absolute;
         bottom: -60px;
         margin: 0 auto;
         left:0px;
         right:0px;
         text-align: center;}
         /*.home-page-slider .bx-wrapper .bx-pager.bx-default-pager a {
         margin-right: 2vw;
         }*/
         .home-page-slider .bx-pager-link.active {
         width: 15px !important;
         height: 15px!important;
         border-radius: 10px !important;
         background-color: #045186 !important;
         }
         .home-page-slider .fl-slide-content-wrap {
         position: relative;
         display: inherit;
         width: inherit;
         left: inherit;
         top: 75%;
         padding: 0px;
         font-style: italic;
         z-index: 60 !important;
         }
         }
         /* Slider Dark */
         .test-dark-back .fl-slide-content-wrap .fl-slide-title {
         color: #808080 !important;
         font-family: "Obvia", sans-serif;
         font-weight: 500;
         font-size: 20px;
         padding-bottom: 10px !important;
         border-bottom: solid #00ccff 1px;
         }
         .test-dark-back .fl-slide-content-wrap .fl-slide-text p{
         color: #fff !important;
         }
         .test-dark-back .fl-slide-content-wrap {
         top: 38%;
         }
         .test-dark-back .bx-controls {
         display: none;
         position: relative;
         width: 300px;
         margin-left: -30px;
         margin-top: -680px;
         top: inherit;
         padding-left: 20px;
         }
         .test-dark-back .bx-pager-link.active {
         background-color: #fff !important;
         }
         .test-dark-back {
         text-overflow: visible;
         }
         /* Grayscale To Color */
         .gray-scale-img .fl-photo-content {
         overflow: hidden;
         -webkit-backface-visibility: hidden;
         }
         .gray-scale-img .fl-photo-content .fl-photo-img {
         -webkit-filter: grayscale(100%);
         filter: grayscale(100%);
         -webkit-transition: .3s ease-in-out;
         transition: .3s ease-in-out;
         will-change: filter;
         }
         .gray-scale-img .fl-photo-content .fl-photo-img:hover {
         -webkit-filter: grayscale(0);
         filter: grayscale(0);
         }
         /* Custom Testimony */
         .custom-testimony p{
         font-family: "EB Garamond", serif;
         }
         .custom-testimony .pp-testimonials-title {
         padding-bottom: 15px;
         border-bottom: solid 1px #808080;
         }
         .owl-carousel.owl-loaded {
         display: flex;
         flex-direction: column-reverse;
         }
         .owl-nav {
         display: flex;
         align-items: flex-end;
         flex-direction: column;
         border-top: solid 1px #6dc6da;
         margin-bottom: -30px;
         }
         .pp-testimonial {
         padding-top: 0px;
         }
         .pp-testimonials-content {
         margin-right: 0px;
         }
         .pp-vertical-align {
         margin-top: 60px;
         }
         .owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next {
         width: 40px !important;
         height: 40px !important;
         border-radius: 0;
         margin: 0;
         }
         .owl-carousel .owl-nav button.owl-prev {
         background: #fff !important;
         }
         .owl-carousel .owl-nav button.owl-next {
         background: #52a6dd !important;
         }
         .owl-nav button svg {
         background: none !important;
         height: 40px !important;
         width: 40px !important;
         }
         .owl-carousel .owl-nav button.owl-prev svg {
         color: #045186 !important;
         }
         .fl-slide-content-wrap{width:900px !important}
         .testimony-slider-name img, img.testimony-slider-divider {
         margin-bottom: 10px;
         margin-top: 10px;
         }
         .testimony-slide .bx-pager-link {
         margin-left: 2vw !important;
         margin-right: 2vw!important;
         }
         .owl-dots {
         position: absolute;
         margin: 0 auto;
         left:0;
         right: 0;
         bottom: -20px;
         }
         @media only screen and (max-width: 950px) {.fl-slide-content-wrap{width:600px !important}}
         @media only screen and (max-width: 650px) {.fl-slide-content-wrap{width:300px !important}}
         h2.widgettitle {
         Font-size: 20px;}
         /* Cards */
         .gauss-card {
         margin-top: 50px;
         }
         .gauss-card .uabb-image-content {
         box-shadow: 2px 3px 5px 2px rgba(0,97,172,0.1);
         }
         .gauss-card .uabb-infobox {
         box-shadow: 2px 3px 15px 2px rgba(0,97,172,0.1);
         }
         .gauss-card .uabb-module-content{
         border-radius: 8px !important;
         }
         .gauss-card .uabb-icon-wrap {
         background: rgba(255,255,255,.87);
         border-radius: 100%;
         margin-top: -100px;
         box-shadow: 1px 3px 5px 3px rgba(0,97,172,0.1);
         }
         .gauss-card .uabb-icon { 
         padding: 40px;
         }
         .gauss-card .uabb-icon-wrap:before {
         content:"";
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: #fff;
         filter: blur(5px);
         }
         .gauss-card .uabb-imgicon-wrap .uabb-image{
         margin-top: -100px;
         }
         .icon-shadow i {
         box-shadow: 2px 3px 5px 2px rgba(0,97,172,0.1);
         }
         .gauss-card-v2 .uabb-icon-wrap {
         background: rgba(255,255,255,.87);
         border-radius: 100%;
         margin-top: -100px;
         box-shadow: 1px 3px 5px 3px rgba(0,97,172,0.1);
         }
         .gauss-card-v2 .uabb-icon { 
         padding: 40px;
         }
         .gauss-card-v2 .uabb-icon-wrap:before {
         content:"";
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: #fff;
         filter: blur(5px);
         }
         .gauss-pad .uabb-image-content .uabb-photo-img {
         padding: 15px;
         }
         .gauss-pad .uabb-image-content {
         border-radius: 150px;
         }
         /* Dual Button */
         .pp-dual-button a{ 
         border-radius: 4px;
         font-family: obvia, sans-serif;
         text-transform: uppercase;
         margin-top: 5px;
         }
         /*captcha mobile*/
         @media only screen and (max-width: 500px){.ginput_recaptcha {
         transform:scale(0.77);
         transform-origin:0 0;
         }}
         /* Tooltip container */
         .tooltip {
         position: relative;
         display: inline-block;
         color: #6dc6da;
         background-color: #ffffff;
         border-radius: 100px;
         padding: 0px 0px;
         font-size: 14px;
         line-height: 18px;
         bottom: 10px;
         }
         /* Tooltip text */
         .tooltip .tooltiptext {
         visibility: hidden;
         width: 200px;
         background-color: white;
         color: #000 !important;
         text-align: left;
         padding: 20px 20px;
         border-radius: 6px;
         box-shadow: 1px 3px 5px 3px rgba(0,97,172,0.1);
         /* Position the tooltip text - see examples below! */
         position: absolute;
         bottom:20px;
         right: -50px;
         z-index: 1;
         }
         /* Show the tooltip text when you mouse over the tooltip container */
         .tooltip:hover .tooltiptext {
         visibility: visible;
         }
         /* Timeline Carousel */
         .partners-caro .labb-carousel {
         margin-bottom: -150px;
         }
         .partners-caro .labb-carousel .labb-carousel-item {
         display: flex column;
         margin-top: 50px;
         min-height: 280px; 
         }
         .partners-caro .labb-carousel-item {
         border-top: solid 5px #808080;
         border-radius: 5px;
         box-shadow: 3px 5px 15px 0px rgba(0,97,172,0.22);
         }
         .partners-caro .labb-carousel-item h3 {
         margin-top: -70px;
         margin-bottom: 30px;
         color: #fff;
         }
         .partners-caro .labb-carousel-item img {
         max-width: 200px;
         height: 100px;
         margin: 0 auto;
         }
         .partners-caro .labb-carousel-item p {
         margin-top: 20px;
         }
         .partners-caro .labb-container ul.slick-dots li button {
         background: #808080;
         border: none;
         }
         .partners-caro .labb-container ul.slick-dots li button:hover {
         background: #045186 !important;
         border: none;
         }
         .partners-caro .labb-container ul.slick-dots li.slick-active button {
         background: #045186 !important;
         border: none !important;
         }
         .partners-caro .labb-container ul.slick-dots {
         margin-right: auto !important;
         margin-left: auto !important;
         right: 0;
         left: 0;
         text-align: center;
         }
         .slick-dots li button:before {
         display: none;
         }
         /* Timeline Carousel */
         .plan-caro .labb-carousel {
         margin-bottom: -250px;
         }
         .plan-caro .labb-carousel .labb-carousel-item {
         display: flex column;
         margin-top: 50px;
         min-height: 280px; 
         background: transparent;
         }
         .plan-caro .labb-carousel-item .caro-img {
         margin-right: 30px;
         position: absolute;
         z-index: 1;
         max-height: 280px;
         overflow: hidden;
         }
         .plan-caro .labb-carousel-item .caro-text {
         margin-left: 30px;
         box-shadow: 3px 5px 15px 0px rgba(0,97,172,0.22);
         padding: 20px;
         margin-top: 170px;
         background: #fff;
         color: #000;
         position: relative;
         z-index: 2;
         }
         .plan-caro .labb-container ul.slick-dots li button {
         background: #808080;
         border: none;
         }
         .plan-caro .labb-container ul.slick-dots li button:hover {
         background: #045186 !important;
         border: none;
         }
         .plan-caro .labb-container ul.slick-dots li.slick-active button {
         background: #045186 !important;
         border: none !important;
         }
         .plan-caro .labb-container ul.slick-dots {
         position: absolute;
         margin-right:auto !important;
         margin-left:auto !important;
         right: 0px;
         left: 0px;
         text-align: center;
         bottom: 0px;
         }
         @media only screen and (max-width: 950px) {
         .plan-caro .labb-carousel {
         margin-bottom: 0px;
         }
         .plan-caro .labb-carousel .labb-carousel-item {
         display: flex column;
         margin-top: 50px;
         min-height: 280px; 
         background: transparent;
         }
         .plan-caro .labb-carousel-item .caro-img {
         margin-right: 10px;
         position: absolute;
         z-index: 1;
         max-height: 280px;
         overflow: hidden;
         top: 0px;
         }
         .plan-caro .labb-carousel-item .caro-text {
         margin-left: 10px;
         box-shadow: 3px 5px 15px 0px rgba(0,97,172,0.22);
         padding: 20px;
         margin-top: 180px;
         background: #fff;
         color: #000;
         position: relative;
         z-index: 2;
         }
         .plan-caro .labb-container ul.slick-dots li button {
         background: #808080;
         border: none;
         }
         .plan-caro .labb-container ul.slick-dots li button:hover {
         background: #045186 !important;
         border: none;
         }
         .plan-caro .labb-container ul.slick-dots li.slick-active button {
         background: #045186 !important;
         border: none !important;
         }
         .plan-caro .labb-container ul.slick-dots {
         position: absolute;
         margin-right:auto !important;
         margin-left:auto !important;
         right: 0px;
         left: 0px;
         text-align: center;
         bottom: 50px;
         }
         }
         @media only screen and (max-width: 650px) {
         .plan-caro .labb-carousel {
         margin-bottom: 0px;
         }
         .plan-caro .labb-carousel .labb-carousel-item {
         display: flex column;
         margin-top: 50px;
         min-height: 280px; 
         background: transparent;
         }
         .plan-caro .labb-carousel-item .caro-img {
         margin-right: 10px;
         position: absolute;
         z-index: 1;
         max-height: 280px;
         overflow: hidden;
         top: 0px;
         }
         .plan-caro .labb-carousel-item .caro-text {
         margin-left: 10px;
         box-shadow: 3px 5px 15px 0px rgba(0,97,172,0.22);
         padding: 20px;
         margin-top: 180px;
         background: #fff;
         color: #000;
         position: relative;
         z-index: 2;
         }
         .plan-caro .labb-container ul.slick-dots li button {
         background: #808080;
         border: none;
         }
         .plan-caro .labb-container ul.slick-dots li button:hover {
         background: #045186 !important;
         border: none;
         }
         .plan-caro .labb-container ul.slick-dots li.slick-active button {
         background: #045186 !important;
         border: none !important;
         }
         .plan-caro .labb-container ul.slick-dots {
         position: absolute;
         margin-right:auto !important;
         margin-left:auto !important;
         right: 0px;
         left: 0px;
         text-align: center;
         bottom: 150px;
         }
         }
         .plan-caro .slick-dots li button:before {
         display: none;
         }
         /*How it Works*/
         .how-it-works .labb-carousel {
         margin-bottom: -250px;
         }
         .how-it-works .labb-carousel .labb-carousel-item {
         display: flex column;
         margin-top: 50px;
         min-height: 280px; 
         background: transparent;
         }
         .how-it-works .labb-carousel-item .caro-img {
         margin-right: 30px;
         position: absolute;
         z-index: 1;
         max-height: 300px;
         overflow: hidden;
         }
         .how-it-works .labb-carousel-item .caro-text {
         margin-left: 30px;
         box-shadow: 3px 5px 15px 0px rgba(0,97,172,0.22);
         padding: 20px;
         margin-top: 200px;
         background: #fff;
         color: #000;
         position: relative;
         z-index: 2;
         }
         @media only screen and (max-width: 650px) {.how-it-works .labb-carousel-item .caro-text {
         margin-left: 10px;
         box-shadow: 3px 5px 15px 0px rgba(0,97,172,0.22);
         padding: 10px;
         margin-top: 160px;
         margin-bottom: 50px;
         background: #fff;
         color: #000;
         position: relative;
         z-index: 2;
         }}
         .how-it-works .labb-container ul.slick-dots li button {
         background: #808080;
         border: none;
         margin: 0px 10px
         }
         .how-it-works .labb-container ul.slick-dots li button:hover {
         background: #045186 !important;
         border: none;
         }
         .how-it-works .labb-container ul.slick-dots li.slick-active button {
         background: #045186 !important;
         border: none !important;
         }
         .how-it-works .labb-container ul.slick-dots {
         margin-right:auto;
         margin-left:auto;
         right: 10.5%;
         }
         @media only screen and (max-width: 950px) {.how-it-works .labb-container ul.slick-dots {
         margin-right:auto;
         margin-left:auto;
         right: 0px;
         }}
         @media only screen and (max-width: 650px) {.how-it-works .labb-container ul.slick-dots {
         margin-right:auto;
         margin-left:auto;
         right: 0px;
         }}
         .how-it-works .slick-dots li button:before {
         display: none;
         }
         /* Slide Box */ 
         .team-slide-box .uabb-slide-box-wrap {
         border-radius: 10px !important;
         }
         .team-slide-box .uabb-slide-box-section {
         position: relative;
         z-index: 9;
         background: #ffffff;
         width: 100%;
         /* box-shadow: 3px 5px 15px 2px rgba(0,97,172,0.2); */
         }
         .team-slide-box .uabb-slide-face-text-title {
         bottom: 110px;
         left: 10%;
         text-align: center;
         position: absolute;
         z-index: 5;
         }
         .team-slide-box .uabb-slide-box-section-content h4 {
         position: absolute;
         bottom: 100px;
         font-size: 14px;
         font-family: obvia, sans-serif !important;
         text-align: center;
         font-style: italic;
         color: #6dc6da !important;
         left: 10%
         }
         .team-slide-box .uabb-slide-box-section-content {
         font-family: obvia, sans-serif;
         color: #0061ac;
         font-size: 14px;
         padding-bottom: 10px;
         line-height: 1.2;
         }
         .team-slide-box .uabb-slide-box-section:hover {
         transform: scale(1.03);
         transition: all .5s;
         }
         .team-slide-box .uabb-imgicon-wrap {
         border-bottom: 3px solid #808080;
         }
         @-moz-document url-prefix() {.uabb-slide-box-wrap .open-slidedown .uabb-slide-down {
         top:0%;
         }}
         /*Gradient Overlay*/
         .team-slide-box .uabb-image-content:after   {content:'';
         position:absolute;
         left:0; top:0;
         width:100%; height:100%;
         display:inline-block;background: -moz-linear-gradient(top, rgba(7,90,234,0.7) 5%, rgba(16,62,104,0.7) 100%); /* FF3.6+ */
         background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,rgba(7,90,234,0.7)), color-stop(100%,rgba(16,62,104,0.7))); /* Chrome,Safari4+ */
         background: -webkit-linear-gradient(top, rgba(7,90,234,0.7) 5%,rgba(16,62,104,0.7) 100%); /* Chrome10+,Safari5.1+ */
         background: -o-linear-gradient(top, rgba(7,90,234,0.7) 5%,rgba(16,62,104,0.7) 100%); /* Opera 11.10+ */
         background: -ms-linear-gradient(top, rgba(7,90,234,0.7) 5%,rgba(16,62,104,0.7) 100%); /* IE10+ */
         background: linear-gradient(to bottom, rgba(7,90,234,0.7) 5%,rgba(16,62,104,0.7) 100%); /* W3C */}
         .team-slide-box .uabb-slide-back-text-title {
         display: none;
         }
         .team-slide-box .uabb-slide-down {
         font-size: 14px;
         background: #fff !important;
         padding: 25px !important;	
         border-radius: 10px !important;
         margin-top: 20px;
         }
         .uabb-slide-box-wrap .open-slidedown .uabb-slide-down {
         position:relative;
         z-index: 999;
         }
         /* Square Boxes */
         .set-width .fl-col-content {
         display: flex;
         width: 180px;
         min-width: 180px;
         height: 180px;
         min-height: 18px;
         align-items: center;
         }
         .set-width .fl-col-content .fl-node-content {
         width: 100% !important;
         margin: 0;
         text-align: center !important;
         }
         .set-width .fl-heading {
         min-width: 180px !important;
         }
         /*full-width*/
         .full-width {
         width: 100% !important;
         }
         /* Language Switcher */
         .lang-switch { 
         width: 100px;
         }
         .lang-switch a{ 
         color: #0061ac;
         }
         .lang-switch .wpml-ls-legacy-dropdown {
         max-width:100px;
         }
         .wpml-ls-legacy-dropdown a:hover, .wpml-ls-legacy-dropdown a:focus, .wpml-ls-legacy-dropdown .wpml-ls-current-language:hover>a {
         background: #f8fcff;
         }
         .wpml-ls-legacy-dropdown .wpml-ls-sub-menu {
         border-top: solid 1px #6dc6da;
         }
         .lang-switch .wpml-ls-legacy-dropdown a {
         border: none;
         padding-top: 47px;
         padding-bottom: 47px;
         }
         .lang-switch .wpml-ls-sub-menu a {
         padding-top: 12px;
         padding-bottom: 12px;
         }
         .lang-switch .wpml-ls-legacy-dropdown a:hover {
         background: transparent;
         color: #808080;
         }
         .lang-switch .wpml-ls-legacy-dropdown ul a:hover {
         background: #f8fcff;
         }
         .wpml-ls-sub-menu {
         width: 100px;
         right: 0;
         /*margin-left: -100px !important;*/
         }
         .lang-switch .wpml-ls-legacy-dropdown .wpml-ls-sub-menu li a {
         display: flex;
         flex-flow: row-reverse nowrap;
         justify-content: space-between;
         padding: 10px;
         }
         .wpml-ls-legacy-dropdown .wpml-ls-current-language a {
         display: flex;
         flex-flow: row-reverse;
         justify-content: space-between;
         padding-left: 5px;
         }
         .wpml-ls-legacy-dropdown .wpml-ls-current-language a img {
         margin-top: 3px;
         }
         @media (max-width: 660px) {
         .lang-switch .wpml-ls-legacy-dropdown a {
         padding-top: 10px !important;
         padding-bottom: 10px;
         }
         }
         /*Gravity Forms*/
         .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_first, .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_last, .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_middle {
         padding: 0px;
         margin: 0px;
         }
         .gform_wrapper li.hidden_label input {margin: 0px;}
         .gform_wrapper .ginput_complex select {margin: 0px;}
         .pp-gf-content .gform_wrapper ul li.gfield {
         margin-bottom: 0px !important;
         }
         .gform_wrapper li.hidden_label input {margin-top:0px !important;}
         .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_first, .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_last, .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_middle {padding-top:0px !important;}
         input.gform_button  {
         font-family: "obvia", sans-serif;
         font-size: 16px !important;
         transition: all .3s;
         box-shadow: 0px 3px 6px 0px rgb(20 40 64 / 16%);
         }
         input.gform_button:hover {
         border: solid 1px #0061ac !important;
         }
         /*Product Finder*/
         @media not all and (min-resolution:.001dpcm) {@media{.product-finder-3 {
         margin-top: 200px;
         }
         .product-finder-4 {
         margin-top: 180px;
         }
         @media only screen and (max-width: 992px){
         .product-finder-3 {
         margin-top: -5%;
         }
         .product-finder-4 {
         margin-top: 0%;
         }}
         @media only screen and (max-width: 659px){
         .product-finder-3 {
         margin-top: 5%;
         }
         .product-finder-4 {
         margin-top: 0%;
         }}}}
         _::-webkit-full-page-media, _:future, :root .safari_only { @media {.product-finder-3 {
         margin-top: 200px;
         }
         .product-finder-4 {
         margin-top: 180px;
         }}
         @media only screen and (max-width: 992px){
         .product-finder-3 {
         margin-top: -5%;
         }
         .product-finder-4 {
         margin-top: 0%;
         }}
         @media only screen and (max-width: 659px){
         .product-finder-3 {
         margin-top: 5%;
         }
         .product-finder-4 {
         margin-top: 0%;
         }}}
         /*history Engineering page*/
         .hist-engineer .bx-pager-item {
         display:none;
         }
         @media only screen and (max-width: 992px){.hist-engineer-french .fl-slide-content-wrap{
         position:absolute;
         top:100px !important;
         }}

         .fl-node-5f90a012491d3 > .fl-row-content-wrap {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            max-height: 410px;
            background: url('public/images/about.jpg');
            background-repeat: inherit;
            background-position: center bottom;
            background-attachment: scroll;
            background-size: 100%;
            background-position:0% 40%;
            /* Tambahkan properti lainnya jika diperlukan */
        }

         .container-img {
            position: relative;
            /* Tambahkan properti lainnya jika diperlukan */
            margin-bottom: 385px;
         }
         .container-img img {
            position: relative;
            /* Atur posisi gambar sesuai kebutuhan */
            top: 30px;
            left: 30px;
            /* Tambahkan properti lainnya jika diperlukan */
            width: 231px;
         }
         @media only screen and (max-width: 992px) {
            .fl-node-5f90a012491d3 > .fl-row-content-wrap {
                /* background: url('public/images/about_mobile.jpg'); */
                background-size: cover;
            }
         }
</style>
<noscript>
    <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style>
</noscript>
<link data-minify="1" rel="stylesheet" href="https://bluebotics.com/wp-content/cache/min/1/jem7gzh.css?ver=1682258218">
<link data-minify="1" href="https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/omgf/omgf-stylesheet-75/omgf-stylesheet-75.css?ver=1682258218" rel="stylesheet">
@endsection


@section('contents')

<div class="uabb-js-breakpoint" style="display: none;"></div>
<div class="uabb-js-breakpoint" style="display: none;"></div>

<div id="fl-main-content" class="fl-page-content" itemprop="mainContentOfPage" role="main">
    <div class="fl-content-full container">
        <div class="row">
            <div class="fl-content col-md-12">
                <article class="fl-post post-24 page type-page status-publish hentry" id="fl-post-24" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                <div class="fl-post-content clearfix" itemprop="text">
                    <div class="fl-builder-content fl-builder-content-24 fl-builder-content-primary fl-builder-global-templates-locked" data-post-id="24">
                    <div class="container-img">
                        <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5f90a012491d3 fl-row-custom-height fl-row-align-center fl-row-bg-overlay" data-node="5f90a012491d3">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90a012491c9 fl-col-group-equal-height fl-col-group-align-center" data-node="5f90a012491c9">
                                    <div class="fl-col fl-node-5f90a012491cc" data-node="5f90a012491cc">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f90a012491cd fl-animation fl-fade-left" data-node="5f90a012491cd" data-animation-delay="0" data-animation-duration="1">
                                            <div class="fl-module-content fl-node-content">
                                                <h1 class="fl-heading">
                                                    <span class="fl-heading-text">MISSION STATEMENT</span>
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f90a012491cf" data-node="5f90a012491cf">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-heading fl-node-5f90a012491ce fl-animation fl-fade-left" data-node="5f90a012491ce" data-animation-delay="0.25" data-animation-duration="2">
                                            <div class="fl-module-content fl-node-content">
                                                <h4 class="fl-heading">
                                                    <span class="fl-heading-text">We are committed to our customers success by providing high quality, value-added products, services and solutions and with integrity.</span>
                                                </h4>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- <a href="{{route('app.home')}}">
                        <img src="{{asset('public/images/logo/djt_pt_putih.png')}}"></a> -->
                    </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f90a02030ffe" data-node="5f90a02030ffe">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90a02030ff0 fl-col-group-custom-width" data-node="5f90a02030ff0">
                                    <div class="fl-col fl-node-5f90a02030ff2 fl-col-small fl-col-has-cols top_layer set-width" data-node="5f90a02030ff2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f90a02030ff8 fl-col-group-nested" data-node="5f90a02030ff8">
                                            <div class="fl-col fl-node-5f90a02030ff9" data-node="5f90a02030ff9">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f90a02030ffa" data-node="5f90a02030ffa">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text" style="color: #000;">About Us</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f90a02030ff7 fl-col-has-cols" data-node="5f90a02030ff7">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f90a02030ffb fl-col-group-nested" data-node="5f90a02030ffb">
                                            <div class="fl-col fl-node-5f90a02030ffc" data-node="5f90a02030ffc">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f90a02030ffd" data-node="5f90a02030ffd">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>PT Dwida Jaya Tama is a private company founded in 2006. Initially, our business was more focused on distributing educational aids. After seeing the market growth in Indonesia, we decided to expand our business by creating our own educational aids. Over time, we have been successful in producing aids for primary and secondary education, and now we are able to produce equipment for all levels of education.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5f909fa8899d2 fl-row-bg-overlay" data-node="5f909fa8899d2">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f909fa8899d3 fl-col-group-equal-height fl-col-group-align-center" data-node="5f909fa8899d3">
                                    <div class="fl-col fl-node-5f909fa8899d4" data-node="5f909fa8899d4">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f909fa8899d5" data-node="5f909fa8899d5">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Our values</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f909fa8899e3" data-node="5f909fa8899e3">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5f909fa8899d7" data-node="5f909fa8899d7">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>At Dwida Jaya Tama everything we do is driven by our three core.</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f909fa8899e7" data-node="5f909fa8899e7">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f909fa8899e8 fl-col-group-responsive-reversed" data-node="5f909fa8899e8">
                                    <div class="fl-col fl-node-5f909fa8899d6 fl-col-has-cols" data-node="5f909fa8899d6">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f909fa889b00 fl-col-group-nested" data-node="5f909fa889b00">
                                            <div class="fl-col fl-node-5f909fa889a9e fl-col-small" data-node="5f909fa889a9e">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f909fa8899e0" data-node="5f909fa8899e0">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h5 class="fl-heading">
                                                            <span class="fl-heading-text">COMMUNICATION</span>
                                                        </h5>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-rich-text fl-node-5f909fa8899dd" data-node="5f909fa8899dd">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>We value effective communication. Listening and understanding is key, then our goal is to always convey clear and constructive messages, with customers, partners and each other.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f909fa889afe fl-col-small" data-node="5f909fa889afe">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f909fa8899e1" data-node="5f909fa8899e1">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h5 class="fl-heading">
                                                            <span class="fl-heading-text">INNOVATION</span>
                                                        </h5>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-rich-text fl-node-5f909fa8899de" data-node="5f909fa8899de">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>We are committed to continuous innovation that brings real-world value to our customers.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f909fa889aff fl-col-small" data-node="5f909fa889aff">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f909fa8899dc" data-node="5f909fa8899dc">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h5 class="fl-heading">
                                                            <span class="fl-heading-text">SIMPLICITY</span>
                                                        </h5>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-rich-text fl-node-5f909fa8899df" data-node="5f909fa8899df">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Pioneering technology is only useful if it is simple to use. We strive to make our products (and team) as easy to work with as possible.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f90a4220107d" data-node="5f90a4220107d">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5fa42d7ed4514" data-node="5fa42d7ed4514">
                                    <div class="fl-col fl-node-5fa42d6fcf913 fl-col-has-cols fl-visible-mobile top_layer set-width" data-node="5fa42d6fcf913">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5fa42d6fcfaff fl-col-group-nested" data-node="5fa42d6fcfaff">
                                            <div class="fl-col fl-node-5fa42d6fcfb00" data-node="5fa42d6fcfb00">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5fa42d6fcfb01" data-node="5fa42d6fcfb01">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Made In<br>Indonesia</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5f90a42201246 fl-col-group-equal-height fl-col-group-align-center" data-node="5f90a42201246">
                                    <div class="fl-col fl-node-5f90a42201248 middle_layer" data-node="5f90a42201248">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5f90a4220124b" data-node="5f90a4220124b">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>Our products engineered and produced in Jakarta, together with our network of suppliers, we deliver precise Indonesia Made Solutions, which guarantee your vehicles perform perfectly, both now and in the future.</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5f90a4b47e45d fl-row-custom-height fl-row-align-top" data-node="5f90a4b47e45d">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90a4b4db10a fl-col-group-custom-width" data-node="5f90a4b4db10a">
                                    <div class="fl-col fl-node-5fcdad1921d25 fl-col-has-cols fl-visible-desktop-medium top_layer set-width" data-node="5fcdad1921d25">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5fcdad1921d26 fl-col-group-nested" data-node="5fcdad1921d26">
                                            <div class="fl-col fl-node-5fcdad1921d27" data-node="5fcdad1921d27">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5fcdad1921d28" data-node="5fcdad1921d28">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text" style="color: #000;">Made In <br>Indonesia</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f90a4b4db3a6 fl-col-small" data-node="5f90a4b4db3a6">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5fee035751275 top-layer" data-node="5fee035751275">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fee0357517ae fl-col-group-custom-width" data-node="5fee0357517ae">
                                    <div class="fl-col fl-node-5fee0357517b2 fl-col-small fl-col-has-cols top_layer set-width" data-node="5fee0357517b2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5fee0357517b3 fl-col-group-nested" data-node="5fee0357517b3">
                                            <div class="fl-col fl-node-5fee0357517b4" data-node="5fee0357517b4">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5fee0357517b5" data-node="5fee0357517b5">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text" style="color: #000;">ISO</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fee0357517b1 fl-col-small fl-visible-desktop-medium" data-node="5fee0357517b1">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5fee0357517b6 fl-col-group-custom-width" data-node="5fee0357517b6">
                                    <div class="fl-col fl-node-5fee0357517b7 fl-col-small" data-node="5fee0357517b7">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee0357517bc team-slide-box" data-node="5fee0357517bc">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee0357517bc" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content-1">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-11316 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="{{asset('public/images/iso1.jpeg')}} 1024w, {{asset('public/images/iso1.jpeg')}} 300w, {{asset('public/images/iso1.jpeg')}} 150w, {{asset('public/images/iso1.jpeg')}} 768w, {{asset('public/images/iso1.jpeg')}} 50w, {{asset('public/images/iso1.jpeg')}} 100w, {{asset('public/images/iso1.jpeg')}} 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="BlueBotics Project Manager Samuel Chevalley." itemprop="image" data-lazy-srcset="{{asset('public/images/iso1.jpeg')}} 1024w, {{asset('public/images/iso1.jpeg')}} 300w, {{asset('public/images/iso1.jpeg')}} 150w, {{asset('public/images/iso1.jpeg')}} 768w, {{asset('public/images/iso1.jpeg')}} 50w, {{asset('public/images/iso1.jpeg')}} 100w, {{asset('public/images/iso1.jpeg')}} 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/iso1.jpeg')}}"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-11316 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="{{asset('public/images/iso1.jpeg')}} 1024w, {{asset('public/images/iso1.jpeg')}} 300w, {{asset('public/images/iso1.jpeg')}} 150w, {{asset('public/images/iso1.jpeg')}} 768w, {{asset('public/images/iso1.jpeg')}} 50w, {{asset('public/images/iso1.jpeg')}} 100w, {{asset('public/images/iso1.jpeg')}} 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="{{asset('public/images/iso1.jpeg')}}" alt="BlueBotics Project Manager Samuel Chevalley." itemprop="image" srcset="{{asset('public/images/iso1.jpeg')}} 1024w, {{asset('public/images/iso1.jpeg')}} 300w, {{asset('public/images/iso1.jpeg')}} 150w, {{asset('public/images/iso1.jpeg')}} 768w, {{asset('public/images/iso1.jpeg')}} 50w, {{asset('public/images/iso1.jpeg')}} 100w, {{asset('public/images/iso1.jpeg')}} 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="uabb-slide-front-right-text">
                                                                
                                                                <!-- <h3 class="uabb-slide-face-text-title">Samuel CHEVALLEY</h3> -->
                                                                
                                                                <!-- <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Project Manager</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div> -->
                                                                
                                                                </div>
                                                                
                                                                <!-- <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div> -->
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <!-- <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Samuel studied Microtechnics Engineering at the HEIG in Vaud, Switzerland and worked in mechanical designing and engineering before joining BlueBotics as a Project Manager. When not at work, Samuel plays drums in two bands and designs and 3D prints bespoke creations.</p>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fee0357517b9 fl-col-small" data-node="5fee0357517b9">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-yr1f3cguwaxi team-slide-box" data-node="yr1f3cguwaxi">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-yr1f3cguwaxi" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content-1">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20178 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="{{asset('public/images/iso2.jpeg')}} 1024w, {{asset('public/images/iso2.jpeg')}} 300w, {{asset('public/images/iso2.jpeg')}} 150w, {{asset('public/images/iso2.jpeg')}} 768w, {{asset('public/images/iso2.jpeg')}} 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Richard Revangue Project Manager BlueBotics" itemprop="image" data-lazy-srcset="{{asset('public/images/iso2.jpeg')}} 1024w, {{asset('public/images/iso2.jpeg')}} 300w, {{asset('public/images/iso2.jpeg')}} 150w, {{asset('public/images/iso2.jpeg')}} 768w, {{asset('public/images/iso2.jpeg')}} 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/iso2.jpeg')}}"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20178 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="{{asset('public/images/iso2.jpeg')}} 1024w, {{asset('public/images/iso2.jpeg')}} 300w, {{asset('public/images/iso2.jpeg')}} 150w, {{asset('public/images/iso2.jpeg')}} 768w, {{asset('public/images/iso2.jpeg')}} 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="{{asset('public/images/iso2.jpeg')}}" alt="Richard Revangue Project Manager BlueBotics" itemprop="image" srcset="{{asset('public/images/iso2.jpeg')}} 1024w, {{asset('public/images/iso2.jpeg')}} 300w, {{asset('public/images/iso2.jpeg')}} 150w, {{asset('public/images/iso2.jpeg')}} 768w, {{asset('public/images/iso2.jpeg')}} 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="uabb-slide-front-right-text">
                                                                
                                                                <!-- <h3 class="uabb-slide-face-text-title">Richard REVANGUE</h3> -->
                                                                
                                                                <!-- <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Project Manager</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div> -->
                                                                
                                                                </div>
                                                                
                                                                <!-- <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div> -->
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <!-- <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Richard was born and raised in Paris before moving to Switzerland to work with BlueBotics. Before joining the team, he studied aeronautical engineering at IPSA in Paris, and worked as a Services Sales Expert at Dassault Systems. Outside of work, Richard enjoys travelling, music and playing football.</p>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fee0357517bb fl-col-small" data-node="5fee0357517bb">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-6046534544976 team-slide-box" data-node="6046534544976">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-6046534544976" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content-1">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20184 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="{{asset('public/images/iso3.jpeg')}} 1024w, {{asset('public/images/iso3.jpeg')}} 300w, {{asset('public/images/iso3.jpeg')}} 150w, {{asset('public/images/iso3.jpeg')}} 768w, {{asset('public/images/iso3.jpeg')}} 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Alexandra Zehr - Project Manager - BlueBotics" itemprop="image" data-lazy-srcset="{{asset('public/images/iso3.jpeg')}} 1024w, {{asset('public/images/iso3.jpeg')}} 300w, {{asset('public/images/iso3.jpeg')}} 150w, {{asset('public/images/iso3.jpeg')}} 768w, {{asset('public/images/iso3.jpeg')}} 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/iso3.jpeg')}}"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20184 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="{{asset('public/images/iso3.jpeg')}} 1024w, {{asset('public/images/iso3.jpeg')}} 300w, {{asset('public/images/iso3.jpeg')}} 150w, {{asset('public/images/iso3.jpeg')}} 768w, {{asset('public/images/iso3.jpeg')}} 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="{{asset('public/images/iso3.jpeg')}}" alt="Alexandra Zehr - Project Manager - BlueBotics" itemprop="image" srcset="{{asset('public/images/iso3.jpeg')}} 1024w, {{asset('public/images/iso3.jpeg')}} 300w, {{asset('public/images/iso3.jpeg')}} 150w, {{asset('public/images/iso3.jpeg')}} 768w, {{asset('public/images/iso3.jpeg')}} 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                
                                                                <div class="uabb-slide-front-right-text">
                                                                
                                                                <!-- <h3 class="uabb-slide-face-text-title">Alexandra ZEHR</h3> -->
                                                                
                                                                <!-- <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Project Manager</h4>
                                                                    <p>Languages:<br />EN, FR, ES</p>
                                                                </div> -->
                                                                
                                                                </div>
                                                                
                                                                <!-- <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div> -->
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <!-- <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p><span class="ui-provider yi b c d e f g h i j k l m n o p q r s t u v w x y z ab ac ae af ag ah ai aj ak" dir="ltr">Alexandra has a wealth of experience, having worked within sectors ranging from ecommerce to the Swiss watch industry, with roles including customer experience, product and project management. Alexandra grew up in Spain, gained her MA in the USA, and has since returned to her mother country, Switzerland. A self-described epicurean, Alexandra enjoys food and wine, as well as travelling.</span></p>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        


                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f909fa889a01" data-node="5f909fa889a01">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f909fa889a03 fl-col-group-equal-height fl-col-group-align-bottom" data-node="5f909fa889a03">
                                    <div class="fl-col fl-node-5f909fa889a96 fl-col-bg-overlay" data-node="5f909fa889a96">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5e1e2df5c9342" data-node="5e1e2df5c9342">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">CREATING & MAKING<br>BEST QUALITY OF PRODUCTS</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3d8c3e62b9f" data-node="5f3d8c3e62b9f">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5e1e2ed4ca37d" data-node="5e1e2ed4ca37d">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>Easy to use and simple to be conducted during learning process
</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f909fa889a7e" data-node="5f909fa889a7e">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f90adf4109de" data-node="5f90adf4109de">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90adf410c6b fl-col-group-custom-width" data-node="5f90adf410c6b">
                                    <!-- <div class="fl-col fl-node-5fa44923a2fe1" data-node="5fa44923a2fe1">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5fa44923a31a2" data-node="5fa44923a31a2">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-button fl-node-5fa44923a31a5 obvia" data-node="5fa44923a31a5">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="uabb-js-breakpoint" style="display: none;"></div>
                </div>
                <!-- .fl-post-content -->
                </article>
                <!-- .fl-post -->
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
      <script id='labb-frontend-scripts-js-extra'>
         var labb_ajax_object = {"ajax_url":"https:\/\/bluebotics.com\/wp-admin\/admin-ajax.php","block_nonce":"63d093ad02","gallery_nonce":"5a418ea309"};
         var labb_settings = {"custom_css":""};
      </script>
      <script src='https://bluebotics.com/wp-content/plugins/addons-for-beaver-builder-premium/assets/js/labb-frontend.min.js?ver=3.1' id='labb-frontend-scripts-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.waypoints.min.js?ver=2.6.3.3' id='jquery-waypoints-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/addons-for-beaver-builder-premium/assets/js/slick.min.js?ver=3.1' id='slick-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/24-layout.js?ver=1682287855' id='fl-builder-layout-24-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.ba-throttle-debounce.min.js?ver=2.6.3.3' id='jquery-throttle-js' defer></script>
      <!-- <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/8542c1b1b48ebc97585d92b9186f469f-layout-bundle.js?ver=1682258218' id='fl-builder-layout-bundle-8542c1b1b48ebc97585d92b9186f469f-js' defer></script> -->
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.magnificpopup.min.js?ver=2.6.3.3' id='jquery-magnificpopup-js' defer></script>
      <script id='fl-automator-js-extra'>
         var themeopts = {"medium_breakpoint":"992","mobile_breakpoint":"768","scrollTopPosition":"800"};
      </script>
      <script src='https://bluebotics.com/wp-content/themes/bb-theme/js/theme.min.js?ver=1682523585' id='fl-automator-js' defer></script>
      <!-- <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/18054-layout-partial.js?ver=1682258218' id='fl-builder-layout-18054-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/18057-layout-partial.js?ver=1682258218' id='fl-builder-layout-18057-js' defer></script> -->
      <script src='https://bluebotics.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js' defer></script>
      <script src='https://bluebotics.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
      <script src='https://bluebotics.com/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca' id='wp-dom-ready-js' defer></script>
      <script src='https://bluebotics.com/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
      <script src='https://bluebotics.com/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
      <script id='wp-i18n-js-after'>
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script>
      <script src='https://bluebotics.com/wp-includes/js/dist/a11y.min.js?ver=ecce20f002eda4c19664' id='wp-a11y-js' defer></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.7.4' id='gform_json-js'></script>
      <script id='gform_gravityforms-js-extra'>
         var gform_i18n = {"datepicker":{"days":{"monday":"Mo","tuesday":"Tu","wednesday":"We","thursday":"Th","friday":"Fr","saturday":"Sa","sunday":"Su"},"months":{"january":"January","february":"February","march":"March","april":"April","may":"May","june":"June","july":"July","august":"August","september":"September","october":"October","november":"November","december":"December"},"firstDay":1,"iconText":"Select date"}};
         var gf_legacy_multi = [];
         var gform_gravityforms = {"strings":{"invalid_file_extension":"This type of file is not allowed. Must be one of the following:","delete_file":"Delete this file","in_progress":"in progress","file_exceeds_limit":"File exceeds size limit","illegal_extension":"This type of file is not allowed.","max_reached":"Maximum number of files reached","unknown_error":"There was a problem while saving the file on the server","currently_uploading":"Please wait for the uploading to complete","cancel":"Cancel","cancel_upload":"Cancel this upload","cancelled":"Cancelled"},"vars":{"images_url":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms\/images"}};
         var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2,"code":"USD"},"base_url":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg","version_hash":"669a140de0ea8af6b0e28af143bedc1d","strings":{"newRowAdded":"New row added.","rowRemoved":"Row removed","formSaved":"The form has been saved.  The content contains the link to return and complete the form."}};
      </script>
      <script id='gform_gravityforms-js-before'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.7.4' id='gform_gravityforms-js'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/js/placeholders.jquery.min.js?ver=2.7.4' id='gform_placeholder-js'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js?ver=e53fa1c181b98fcc24f245ddeff3f288' id='gform_gravityforms_utils-js'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js?ver=8d27ab6b5f180424b8c35a8bd6cf265b' id='gform_gravityforms_theme_vendors-js'></script>
      <script id='gform_gravityforms_theme-js-extra'>
         var gform_theme_config = {"common":{"form":{"honeypot":{"version_hash":"669a140de0ea8af6b0e28af143bedc1d"}}},"hmr_dev":"","public_path":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"};
      </script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js?ver=9c9598c0c1b63e5624987254d79ea8ef' id='gform_gravityforms_theme-js'></script>
      <script>window.addEventListener('DOMContentLoaded', function() {
         gform.initializeOnLoaded( function() { jQuery(document).on('gform_post_render', function(event, formId, currentPage){if(formId == 31) {if(typeof Placeholders != 'undefined'){
                                 Placeholders.enable();
                             }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} ) } );
         });
      </script>
      <script>window.addEventListener('DOMContentLoaded', function() {
         gform.initializeOnLoaded( function() { jQuery(document).trigger('gform_post_render', [31, 1]) } );
         });
      </script>
      <script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
         if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
         images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
         if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)
      </script>
      <script data-no-minify="1" async src="https://bluebotics.com/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script>window.addEventListener('DOMContentLoaded', function() {!function(name,definition){if(typeof module!='undefined'&&module.exports)module.exports=definition()
         else if(typeof define=='function'&&define.amd)define(name,definition)
         else this[name]=definition()}('bowser',function(){var t=true
         function detect(ua){function getFirstMatch(regex){var match=ua.match(regex);return(match&&match.length>1&&match[1])||'';}
         function getSecondMatch(regex){var match=ua.match(regex);return(match&&match.length>1&&match[2])||'';}
         var iosdevice=getFirstMatch(/(ipod|iphone|ipad)/i).toLowerCase(),likeAndroid=/like android/i.test(ua),android=!likeAndroid&&/android/i.test(ua),nexusMobile=/nexus\s*[0-6]\s*/i.test(ua),nexusTablet=!nexusMobile&&/nexus\s*[0-9]+/i.test(ua),chromeos=/CrOS/.test(ua),silk=/silk/i.test(ua),sailfish=/sailfish/i.test(ua),tizen=/tizen/i.test(ua),webos=/(web|hpw)os/i.test(ua),windowsphone=/windows phone/i.test(ua),windows=!windowsphone&&/windows/i.test(ua),mac=!iosdevice&&!silk&&/macintosh/i.test(ua),linux=!android&&!sailfish&&!tizen&&!webos&&/linux/i.test(ua),edgeVersion=getFirstMatch(/edge\/(\d+(\.\d+)?)/i),versionIdentifier=getFirstMatch(/version\/(\d+(\.\d+)?)/i),tablet=/tablet/i.test(ua),mobile=!tablet&&/[^-]mobi/i.test(ua),xbox=/xbox/i.test(ua),result
         if(/opera|opr|opios/i.test(ua)){result={name:'Opera',opera:t,version:versionIdentifier||getFirstMatch(/(?:opera|opr|opios)[\s\/](\d+(\.\d+)?)/i)}}
         else if(/coast/i.test(ua)){result={name:'Opera Coast',coast:t,version:versionIdentifier||getFirstMatch(/(?:coast)[\s\/](\d+(\.\d+)?)/i)}}
         else if(/yabrowser/i.test(ua)){result={name:'Yandex Browser',yandexbrowser:t,version:versionIdentifier||getFirstMatch(/(?:yabrowser)[\s\/](\d+(\.\d+)?)/i)}}
         else if(/ucbrowser/i.test(ua)){result={name:'UC Browser',ucbrowser:t,version:getFirstMatch(/(?:ucbrowser)[\s\/](\d+(?:\.\d+)+)/i)}}
         else if(/mxios/i.test(ua)){result={name:'Maxthon',maxthon:t,version:getFirstMatch(/(?:mxios)[\s\/](\d+(?:\.\d+)+)/i)}}
         else if(/epiphany/i.test(ua)){result={name:'Epiphany',epiphany:t,version:getFirstMatch(/(?:epiphany)[\s\/](\d+(?:\.\d+)+)/i)}}
         else if(/puffin/i.test(ua)){result={name:'Puffin',puffin:t,version:getFirstMatch(/(?:puffin)[\s\/](\d+(?:\.\d+)?)/i)}}
         else if(/sleipnir/i.test(ua)){result={name:'Sleipnir',sleipnir:t,version:getFirstMatch(/(?:sleipnir)[\s\/](\d+(?:\.\d+)+)/i)}}
         else if(/k-meleon/i.test(ua)){result={name:'K-Meleon',kMeleon:t,version:getFirstMatch(/(?:k-meleon)[\s\/](\d+(?:\.\d+)+)/i)}}
         else if(windowsphone){result={name:'Windows Phone',windowsphone:t}
         if(edgeVersion){result.msedge=t
         result.version=edgeVersion}
         else{result.msie=t
         result.version=getFirstMatch(/iemobile\/(\d+(\.\d+)?)/i)}}
         else if(/msie|trident/i.test(ua)){result={name:'Internet Explorer',msie:t,version:getFirstMatch(/(?:msie |rv:)(\d+(\.\d+)?)/i)}}else if(chromeos){result={name:'Chrome',chromeos:t,chromeBook:t,chrome:t,version:getFirstMatch(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)}}else if(/chrome.+? edge/i.test(ua)){result={name:'Microsoft Edge',msedge:t,version:edgeVersion}}
         else if(/vivaldi/i.test(ua)){result={name:'Vivaldi',vivaldi:t,version:getFirstMatch(/vivaldi\/(\d+(\.\d+)?)/i)||versionIdentifier}}
         else if(sailfish){result={name:'Sailfish',sailfish:t,version:getFirstMatch(/sailfish\s?browser\/(\d+(\.\d+)?)/i)}}
         else if(/seamonkey\//i.test(ua)){result={name:'SeaMonkey',seamonkey:t,version:getFirstMatch(/seamonkey\/(\d+(\.\d+)?)/i)}}
         else if(/firefox|iceweasel|fxios/i.test(ua)){result={name:'Firefox',firefox:t,version:getFirstMatch(/(?:firefox|iceweasel|fxios)[ \/](\d+(\.\d+)?)/i)}
         if(/\((mobile|tablet);[^\)]*rv:[\d\.]+\)/i.test(ua)){result.firefoxos=t}}
         else if(silk){result={name:'Amazon Silk',silk:t,version:getFirstMatch(/silk\/(\d+(\.\d+)?)/i)}}
         else if(/phantom/i.test(ua)){result={name:'PhantomJS',phantom:t,version:getFirstMatch(/phantomjs\/(\d+(\.\d+)?)/i)}}
         else if(/slimerjs/i.test(ua)){result={name:'SlimerJS',slimer:t,version:getFirstMatch(/slimerjs\/(\d+(\.\d+)?)/i)}}
         else if(/blackberry|\bbb\d+/i.test(ua)||/rim\stablet/i.test(ua)){result={name:'BlackBerry',blackberry:t,version:versionIdentifier||getFirstMatch(/blackberry[\d]+\/(\d+(\.\d+)?)/i)}}
         else if(webos){result={name:'WebOS',webos:t,version:versionIdentifier||getFirstMatch(/w(?:eb)?osbrowser\/(\d+(\.\d+)?)/i)};if(/touchpad\//i.test(ua)){result.touchpad=t;}}
         else if(/bada/i.test(ua)){result={name:'Bada',bada:t,version:getFirstMatch(/dolfin\/(\d+(\.\d+)?)/i)};}
         else if(tizen){result={name:'Tizen',tizen:t,version:getFirstMatch(/(?:tizen\s?)?browser\/(\d+(\.\d+)?)/i)||versionIdentifier};}
         else if(/qupzilla/i.test(ua)){result={name:'QupZilla',qupzilla:t,version:getFirstMatch(/(?:qupzilla)[\s\/](\d+(?:\.\d+)+)/i)||versionIdentifier}}
         else if(/chromium/i.test(ua)){result={name:'Chromium',chromium:t,version:getFirstMatch(/(?:chromium)[\s\/](\d+(?:\.\d+)?)/i)||versionIdentifier}}
         else if(/chrome|crios|crmo/i.test(ua)){result={name:'Chrome',chrome:t,version:getFirstMatch(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)}}
         else if(android){result={name:'Android',version:versionIdentifier}}
         else if(/safari|applewebkit/i.test(ua)){result={name:'Safari',safari:t}
         if(versionIdentifier){result.version=versionIdentifier}}
         else if(iosdevice){result={name:iosdevice=='iphone'?'iPhone':iosdevice=='ipad'?'iPad':'iPod'}
         if(versionIdentifier){result.version=versionIdentifier}}
         else if(/googlebot/i.test(ua)){result={name:'Googlebot',googlebot:t,version:getFirstMatch(/googlebot\/(\d+(\.\d+))/i)||versionIdentifier}}
         else{result={name:getFirstMatch(/^(.*)\/(.*) /),version:getSecondMatch(/^(.*)\/(.*) /)};}
         if(!result.msedge&&/(apple)?webkit/i.test(ua)){if(/(apple)?webkit\/537\.36/i.test(ua)){result.name=result.name||"Blink"
         result.blink=t}else{result.name=result.name||"Webkit"
         result.webkit=t}
         if(!result.version&&versionIdentifier){result.version=versionIdentifier}}else if(!result.opera&&/gecko\//i.test(ua)){result.name=result.name||"Gecko"
         result.gecko=t
         result.version=result.version||getFirstMatch(/gecko\/(\d+(\.\d+)?)/i)}
         if(!result.msedge&&(android||result.silk)){result.android=t}else if(iosdevice){result[iosdevice]=t
         result.ios=t}else if(mac){result.mac=t}else if(xbox){result.xbox=t}else if(windows){result.windows=t}else if(linux){result.linux=t}
         var osVersion='';if(result.windowsphone){osVersion=getFirstMatch(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i);}else if(iosdevice){osVersion=getFirstMatch(/os (\d+([_\s]\d+)*) like mac os x/i);osVersion=osVersion.replace(/[_\s]/g,'.');}else if(android){osVersion=getFirstMatch(/android[ \/-](\d+(\.\d+)*)/i);}else if(result.webos){osVersion=getFirstMatch(/(?:web|hpw)os\/(\d+(\.\d+)*)/i);}else if(result.blackberry){osVersion=getFirstMatch(/rim\stablet\sos\s(\d+(\.\d+)*)/i);}else if(result.bada){osVersion=getFirstMatch(/bada\/(\d+(\.\d+)*)/i);}else if(result.tizen){osVersion=getFirstMatch(/tizen[\/\s](\d+(\.\d+)*)/i);}
         if(osVersion){result.osversion=osVersion;}
         var osMajorVersion=osVersion.split('.')[0];if(tablet||nexusTablet||iosdevice=='ipad'||(android&&(osMajorVersion==3||(osMajorVersion>=4&&!mobile)))||result.silk){result.tablet=t}else if(mobile||iosdevice=='iphone'||iosdevice=='ipod'||android||nexusMobile||result.blackberry||result.webos||result.bada){result.mobile=t}
         if(result.msedge||(result.msie&&result.version>=10)||(result.yandexbrowser&&result.version>=15)||(result.vivaldi&&result.version>=1.0)||(result.chrome&&result.version>=20)||(result.firefox&&result.version>=20.0)||(result.safari&&result.version>=6)||(result.opera&&result.version>=10.0)||(result.ios&&result.osversion&&result.osversion.split(".")[0]>=6)||(result.blackberry&&result.version>=10.1)||(result.chromium&&result.version>=20)){result.a=t;}
         else if((result.msie&&result.version<10)||(result.chrome&&result.version<20)||(result.firefox&&result.version<20.0)||(result.safari&&result.version<6)||(result.opera&&result.version<10.0)||(result.ios&&result.osversion&&result.osversion.split(".")[0]<6)||(result.chromium&&result.version<20)){result.c=t}else result.x=t
         return result}
         var bowser=detect(typeof navigator!=='undefined'?navigator.userAgent:'')
         bowser.test=function(browserList){for(var i=0;i<browserList.length;++i){var browserItem=browserList[i];if(typeof browserItem==='string'){if(browserItem in bowser){return true;}}}
         return false;}
         function getVersionPrecision(version){return version.split(".").length;}
         function map(arr,iterator){var result=[],i;if(Array.prototype.map){return Array.prototype.map.call(arr,iterator);}
         for(i=0;i<arr.length;i++){result.push(iterator(arr[i]));}
         return result;}
         function compareVersions(versions){var precision=Math.max(getVersionPrecision(versions[0]),getVersionPrecision(versions[1]));var chunks=map(versions,function(version){var delta=precision-getVersionPrecision(version);version=version+new Array(delta+1).join(".0");return map(version.split("."),function(chunk){return new Array(20-chunk.length).join("0")+chunk;}).reverse();});while(--precision>=0){if(chunks[0][precision]>chunks[1][precision]){return 1;}
         else if(chunks[0][precision]===chunks[1][precision]){if(precision===0){return 0;}}
         else{return-1;}}}
         function isUnsupportedBrowser(minVersions,strictMode,ua){var _bowser=bowser;if(typeof strictMode==='string'){ua=strictMode;strictMode=void(0);}
         if(strictMode===void(0)){strictMode=false;}
         if(ua){_bowser=detect(ua);}
         var version=""+_bowser.version;for(var browser in minVersions){if(minVersions.hasOwnProperty(browser)){if(_bowser[browser]){return compareVersions([version,minVersions[browser]])<0;}}}
         return strictMode;}
         function check(minVersions,strictMode,ua){return!isUnsupportedBrowser(minVersions,strictMode,ua);}
         bowser.isUnsupportedBrowser=isUnsupportedBrowser;bowser.compareVersions=compareVersions;bowser.check=check;bowser._detect=detect;return bowser});(function($){UABBTrigger={triggerHook:function(hook,args)
         {$('body').trigger('uabb-trigger.'+hook,args);},addHook:function(hook,callback)
         {$('body').on('uabb-trigger.'+hook,callback);},removeHook:function(hook,callback)
         {$('body').off('uabb-trigger.'+hook,callback);},};})(jQuery);jQuery(document).ready(function($){if(typeof bowser!=='undefined'&&bowser!==null){var uabb_browser=bowser.name,uabb_browser_v=bowser.version,uabb_browser_class=uabb_browser.replace(/\s+/g,'-').toLowerCase(),uabb_browser_v_class=uabb_browser_class+parseInt(uabb_browser_v);$('html').addClass(uabb_browser_class).addClass(uabb_browser_v_class);}
         $('.uabb-row-separator').parents('html').css('overflow-x','hidden');});(function($){jQuery(document).ready(function(){if(typeof jQuery.fn.waypoint!=='undefined'){$('.fl-node-2r7cuo4h3mx6 .uabb-info-list-icon').waypoint({offset:'90%',handler:function(e){jQuery(this.element).addClass('pulse animated');}});}});})(jQuery);});
      </script>
@endsection