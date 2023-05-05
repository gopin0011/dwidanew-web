@extends('layouts.app')

@section('css')
<noscript>
    <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style>
</noscript>
<link data-minify="1" rel='stylesheet' id='fl-builder-layout-28-css' href="{{asset('assets/wp-content/28-layout.css?ver=1682259126')}}" media='all' />
<link data-minify="1" rel="stylesheet" href="https://bluebotics.com/wp-content/cache/min/1/jem7gzh.css?ver=1682258218">
<link data-minify="1" href="https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/omgf/omgf-stylesheet-75/omgf-stylesheet-75.css?ver=1682258218" rel="stylesheet">
<link rel='stylesheet' id='gravity_forms_theme_reset-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-reset.min.css?ver=2.7.4' media='all' />
<link rel='stylesheet' id='gravity_forms_theme_foundation-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-foundation.min.css?ver=2.7.4' media='all' />
<link data-minify="1" rel='stylesheet' id='gravity_forms_theme_framework-css' href='https://bluebotics.com/wp-content/cache/min/1/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-framework.min.css?ver=1682258218' media='all' />
<link rel='stylesheet' id='gravity_forms_orbital_theme-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-orbital-theme.min.css?ver=2.7.4' media='all' />
<link rel='stylesheet' id='gforms_reset_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/formreset.min.css?ver=2.7.4' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/formsmain.min.css?ver=2.7.4' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css' href="{{asset('assets/wp-content/plugins/readyclass.min.css?ver=2.7.4')}}" media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/browsers.min.css?ver=2.7.4' media='all' />
    <style id="wp-custom-css">
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
         font-family: obvia, sans-serif;
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
         background:#ffa238 !important;
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
         color: #ffa238 !important;
         }
         /*Custom Classes*/
         .left-border {
         border-left: solid #ffa238 1px;
         }
         .bottom-border {
         border-bottom: solid 1px #ffa238;
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
         border-bottom: solid 2px #ffa238;
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
         background: #ffa238;
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
         border-bottom: solid 2px #ffa238;
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
         background: #ffa238;
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
         color: #ffa238 !important;
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
         border-bottom: solid 1px #ffa238;
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
         border-top: solid 5px #ffa238;
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
         background: #ffa238;
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
         background: #ffa238;
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
         background: #ffa238;
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
         background: #ffa238;
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
         background: #ffa238;
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
         box-shadow: 3px 5px 15px 2px rgba(0,97,172,0.2);
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
         border-bottom: 3px solid #ffa238;
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
         color: #f3962c;
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
</style>
<style id='fl-builder-layout-18037-inline-css'>
    .fl-node-lpoaj5qvtuif > .fl-row-content-wrap {background-color: #f8fcff;border-style: solid;border-width: 0;background-clip: border-box;border-color: #6dc6da;border-top-width: 4px;box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.08);}.fl-node-lpoaj5qvtuif.fl-row-fixed-width, .fl-node-lpoaj5qvtuif .fl-row-fixed-width {max-width: 1200px;} .fl-node-lpoaj5qvtuif > .fl-row-content-wrap {margin-top:34px;} .fl-node-lpoaj5qvtuif > .fl-row-content-wrap {padding-bottom:20px;}.fl-node-05qtdvejwzp6 {width: 100%;}.fl-node-v5p8dqf37zk9 {width: 14.286%;}.fl-node-8a1m4l6dsfpu {width: 14.286%;}.fl-node-m0voj2a3ric8 {width: 14.286%;}.fl-node-n23v79jl8dae {width: 14.286%;}.fl-node-8y4vm6l0djxi {width: 14.286%;}.fl-node-x8f60b4qhtvs {width: 14.284%;}.fl-node-w3zdy6l0j8mk {width: 14.286%;}.uabb-info-list .uabb-info-list-left,.uabb-info-list .uabb-info-list-right {float: none;}.uabb-info-list .uabb-info-list-wrapper > li {list-style: none;margin: 0;padding: 0;position: relative;}.uabb-module-content .uabb-text-editor :not(a) {color: inherit;}.uabb-module-content .uabb-text-editor :not(i) {font-family: inherit;}.uabb-module-content .uabb-text-editor :not(h1):not(h2):not(h3):not(h4):not(h5):not(h6) {font-size: inherit;line-height: inherit;}.uabb-module-content .uabb-text-editor :not(h1):not(h2):not(h3):not(h4):not(h5):not(h6):not(strong):not(b):not(i) {font-weight: inherit;}.uabb-info-list-content .uabb-info-list-description p:last-of-type {margin-bottom: 0;}.uabb-info-list-connector,.uabb-info-list-connector-top {height: 100%;position: absolute;z-index: 1;border-width: 0 0 0 1px;}.uabb-info-list-connector-top {top: 0;}.uabb-info-list-content-wrapper.uabb-info-list-left .uabb-info-list-icon,.uabb-info-list-content-wrapper.uabb-info-list-right .uabb-info-list-icon {display: inline-block;vertical-align: top;}.uabb-info-list-content-wrapper.uabb-info-list-left .uabb-info-list-icon {margin-right: 20px;}.uabb-info-list-content-wrapper.uabb-info-list-right {text-align: right;direction: rtl;}.uabb-info-list-content-wrapper.uabb-info-list-right * {direction: ltr;}.uabb-info-list-content-wrapper.uabb-info-list-right .uabb-info-list-icon {margin-left: 20px;}.uabb-info-list-wrapper.uabb-info-list-top li .uabb-info-list-icon {float: none;margin: 0 auto;}.uabb-info-list-wrapper.uabb-info-list-top li .uabb-info-list-content {margin: 15px;padding-bottom: 0;text-align: center;}.uabb-info-list-wrapper.uabb-info-list-top li .uabb-info-list-connector {height: 0;left: 50%;margin-left: 0;position: absolute;width: 100%;}.uabb-info-list-content.uabb-info-list-top {margin-right: 1em;padding: 0;}.uabb-info-list-link {position: absolute;width: 100%;height: 100%;left: 0;top: 0;bottom: 0;right: 0;z-index: 9;}.uabb-info-list-item .uabb-info-list-icon .uabb-icon-wrap {vertical-align: middle;}.uabb-info-list-item .uabb-info-list-icon a {box-shadow: none;}.uabb-info-list-wrapper.uabb-info-list-top .uabb-info-list-item {width: 100%;vertical-align: top;}.uabb-imgicon-wrap .uabb-icon i {margin: 0;}.uabb-info-list .uabb-info-list-wrapper,.uabb-info-list-content-wrapper .uabb-info-list-content h2,.uabb-info-list-content-wrapper .uabb-info-list-content h3,.uabb-info-list-content-wrapper .uabb-info-list-content h4,.uabb-info-list-content-wrapper .uabb-info-list-content h5,.uabb-info-list-content-wrapper .uabb-info-list-content h6 {margin: 0;padding: 0;}.uabb-info-list-content-wrapper,.uabb-info-list-icon {position: relative;z-index: 5;}.uabb-info-list-item:first-child .uabb-info-list-connector-top,.uabb-info-list-wrapper li:last-child .uabb-info-list-connector {display: none;}.uabb-info-list-content-wrapper.uabb-info-list-left .uabb-info-list-content,.uabb-info-list-content-wrapper.uabb-info-list-right .uabb-info-list-content,.uabb-info-list-wrapper.uabb-info-list-top li,.uabb-info-list-icon .icon {display: inline-block;}.uabb-info-list-content-wrapper.uabb-info-list-top .uabb-info-list-icon,.uabb-info-list-content-wrapper.uabb-info-list-top .uabb-info-list-content,.uabb-info-list-wrapper.uabb-info-list-top {display: block;}@media only screen and (max-width:767px) {.uabb-info-list-wrapper.uabb-info-list-top .uabb-info-list-item .uabb-info-list-connector {display: none;}}.fl-node-2r7cuo4h3mx6 .uabb-info-list-wrapper .uabb-info-list-item:last-child {padding-bottom: 0;}.fl-node-2r7cuo4h3mx6 .uabb-info-list-wrapper.uabb-info-list-top li .uabb-info-list-connector {left: calc(50% + 75px);width: calc(100% - 150px);top: 75px;}.fl-node-2r7cuo4h3mx6 .uabb-info-list-wrapper .uabb-info-list-item {padding-bottom: 0px;}@media all and (min-width:768px) {.fl-node-2r7cuo4h3mx6 .uabb-info-list-wrapper.uabb-info-list-top li{width: 14.286%;display: inline-block;}.fl-node-2r7cuo4h3mx6 .uabb-info-list-wrapper .uabb-info-list-item {padding-right: 0px;padding-left: 0px;padding-bottom: 0;}}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character0 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic0 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic0 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic0 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic0 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic0 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic0 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character1 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic1 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic1 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic1 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic1 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic1 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic1 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character2 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic2 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic2 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic2 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic2 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic2 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic2 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character3 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic3 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic3 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic3 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic3 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic3 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic3 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character4 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic4 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic4 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic4 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic4 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic4 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic4 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character5 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic5 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic5 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic5 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic5 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic5 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic5 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-info-list .uabb-info-list-icon .custom-character6 {text-align: center;color: ##0061ac;font-size:150px;width:150px;height:150px;line-height:150px;margin: auto;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic6 .uabb-imgicon-wrap {text-align: center;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic6 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic6 .uabb-image .uabb-image-content{}@media ( max-width: 992px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic6 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic6 .uabb-imgicon-wrap {text-align: ;}}.fl-node-2r7cuo4h3mx6 .info-list-icon-dynamic6 .uabb-imgicon-wrap .uabb-photo-img {}.fl-node-2r7cuo4h3mx6 .uabb-icon i {float: none;}.fl-node-2r7cuo4h3mx6 .uabb-icon {display: block;}.fl-node-2r7cuo4h3mx6 .uabb-info-list-content .uabb-info-list-title,.fl-node-2r7cuo4h3mx6 .uabb-info-list-content .uabb-info-list-title * {}.fl-node-2r7cuo4h3mx6 .uabb-info-list-content .uabb-info-list-description {}@media ( max-width: 992px) {}@media ( max-width: 660px ) {}.fl-node-2r7cuo4h3mx6 .uabb-info-list-content .uabb-info-list-title,.fl-node-2r7cuo4h3mx6 .uabb-info-list-content .uabb-info-list-title * {font-weight: 400;font-size: 14px;text-align: center;text-transform: capitalize;}body a.infobox-title-link {text-decoration: none;}body h1.uabb-infobox-title,body h2.uabb-infobox-title,body h3.uabb-infobox-title,body h4.uabb-infobox-title,body h5.uabb-infobox-title,body h6.uabb-infobox-title,.uabb-infobox-content .uabb-infobox-title-prefix {margin: 0;padding: 0;}.uabb-module-content .uabb-text-editor :not(a) {color: inherit;}.uabb-module-content .uabb-text-editor :not(i) {font-family: inherit;}.uabb-module-content .uabb-text-editor :not(h1):not(h2):not(h3):not(h4):not(h5):not(h6) {font-size: inherit;line-height: inherit;}.uabb-module-content .uabb-text-editor :not(h1):not(h2):not(h3):not(h4):not(h5):not(h6):not(strong):not(b):not(i) {font-weight: inherit;}.uabb-infobox-content .uabb-infobox-text p:last-of-type {margin-bottom: 0;}.uabb-infobox-content .uabb-infobox-text p {padding: 0 0 10px;}.fl-builder-content .uabb-infobox-text h1,.fl-builder-content .uabb-infobox-text h2,.fl-builder-content .uabb-infobox-text h3,.fl-builder-content .uabb-infobox-text h4,.fl-builder-content .uabb-infobox-text h5,.fl-builder-content .uabb-infobox-text h6 {margin: 0;}.infobox-icon-above-title .uabb-infobox-left-right-wrap,.infobox-icon-below-title .uabb-infobox-left-right-wrap,.infobox-photo-above-title .uabb-infobox-left-right-wrap,.infobox-photo-below-title .uabb-infobox-left-right-wrap {display: block;min-width: 100%;width: 100%;}.infobox-icon-above-title .uabb-icon,.infobox-icon-below-title .uabb-icon,.infobox-photo-above-title .uabb-imgicon-wrap {display: block;}.infobox-icon-left-title .uabb-infobox-title,.infobox-icon-right-title .uabb-infobox-title,.infobox-icon-left-title .uabb-imgicon-wrap,.infobox-icon-right-title .uabb-imgicon-wrap,.infobox-photo-left-title .uabb-infobox-title,.infobox-photo-right-title .uabb-infobox-title,.infobox-photo-left-title .uabb-imgicon-wrap,.infobox-photo-right-title .uabb-imgicon-wrap {display: inline-block;vertical-align: middle;}.infobox-icon-left-title .left-title-image,.infobox-icon-right-title .right-title-image,.infobox-icon-left .uabb-infobox-left-right-wrap,.infobox-icon-right .uabb-infobox-left-right-wrap,.infobox-photo-left .uabb-infobox-left-right-wrap,.infobox-photo-right .uabb-infobox-left-right-wrap {display: inline-block;width: 100%;}.infobox-icon-left-title .uabb-imgicon-wrap,.infobox-icon-left .uabb-imgicon-wrap,.infobox-photo-left-title .uabb-imgicon-wrap,.infobox-photo-left .uabb-imgicon-wrap {margin-right: 20px;}.infobox-icon-right-title .uabb-imgicon-wrap,.infobox-icon-right .uabb-imgicon-wrap,.infobox-photo-right-title .uabb-imgicon-wrap,.infobox-photo-right .uabb-imgicon-wrap {margin-left: 20px;}.infobox-icon-left .uabb-imgicon-wrap,.infobox-icon-right .uabb-imgicon-wrap,.infobox-icon-left .uabb-infobox-content,.infobox-icon-right .uabb-infobox-content,.infobox-photo-left .uabb-imgicon-wrap,.infobox-photo-right .uabb-imgicon-wrap,.infobox-photo-left .uabb-infobox-content,.infobox-photo-right .uabb-infobox-content {display: inline-block;vertical-align: top;}.infobox-photo-below-title .uabb-imgicon-wrap {display: block;margin: 10px 0 15px;}.infobox-photo-left-title .uabb-infobox-title-wrap,.infobox-icon-left-title .uabb-infobox-title-wrap,.infobox-photo-right-title .uabb-infobox-title-wrap,.infobox-icon-right-title .uabb-infobox-title-wrap {vertical-align: middle;}.fl-module-info-box .fl-module-content {display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;flex-shrink: 1;}.fl-module-info-box .uabb-separator-parent {line-height: 0;}.fl-module-info-box .uabb-infobox-module-link {position: absolute;width: 100%;height: 100%;left: 0;top: 0;bottom: 0;right: 0;z-index: 4;}@media (max-width: 660px) { .infobox-photo-left,.infobox-photo-right {display: block;}.infobox-photo-left .infobox-photo,.infobox-photo-left-text .infobox-photo {display: block;margin-bottom: 15px;padding-left: 0;padding-right: 0;width: auto;}.infobox-photo-right .infobox-photo,.infobox-photo-right-text .infobox-photo {display: block;margin-top: 25px;padding-left: 0;padding-right: 0;width: auto;}.infobox-photo-left .infobox-content,.infobox-photo-left-text .infobox-content,.infobox-photo-right .infobox-content,.infobox-photo-right-text .infobox-content {display: block;width: auto;} }.fl-node-e1wlkj8aymb0 {width: 100%;}.fl-node-e1wlkj8aymb0 .uabb-imgicon-wrap {text-align: ;}.fl-node-e1wlkj8aymb0 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-e1wlkj8aymb0 .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-e1wlkj8aymb0 .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-e1wlkj8aymb0 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-e1wlkj8aymb0 .uabb-imgicon-wrap {text-align: ;}}.fl-node-e1wlkj8aymb0 .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-e1wlkj8aymb0 .uabb-infobox {}.fl-node-e1wlkj8aymb0 .infobox-center,.fl-node-e1wlkj8aymb0 .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-e1wlkj8aymb0 span.uabb-infobox-title,.fl-node-e1wlkj8aymb0 span.uabb-infobox-title span a,.fl-node-e1wlkj8aymb0 span.uabb-infobox-title * {color: #0061ac}.fl-node-e1wlkj8aymb0 span.uabb-infobox-title:hover,.fl-node-e1wlkj8aymb0 span.uabb-infobox-title span a:hover,.fl-node-e1wlkj8aymb0 span.uabb-infobox-title *:hover,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-e1wlkj8aymb0 .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-infobox {position: relative;}.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-e1wlkj8aymb0 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-e1wlkj8aymb0 .uabb-infobox {;}.fl-node-e1wlkj8aymb0 .infobox-responsive- {text-align: ;}}.fl-node-e1wlkj8aymb0 .uabb-infobox-title {font-size: 16px;text-transform: uppercase;}.fl-node-e1wlkj8aymb0 .uabb-infobox-title-prefix {text-transform: uppercase;} .fl-node-e1wlkj8aymb0 > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-node-ndts91hi4ejv {width: 100%;}.fl-node-ndts91hi4ejv .uabb-imgicon-wrap {text-align: ;}.fl-node-ndts91hi4ejv .uabb-image .uabb-photo-img {width: 150px;}.fl-node-ndts91hi4ejv .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-ndts91hi4ejv .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-ndts91hi4ejv .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-ndts91hi4ejv .uabb-imgicon-wrap {text-align: ;}}.fl-node-ndts91hi4ejv .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-ndts91hi4ejv .uabb-infobox {}.fl-node-ndts91hi4ejv .infobox-center,.fl-node-ndts91hi4ejv .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-ndts91hi4ejv .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-ndts91hi4ejv span.uabb-infobox-title,.fl-node-ndts91hi4ejv span.uabb-infobox-title span a,.fl-node-ndts91hi4ejv span.uabb-infobox-title * {color: #0061ac}.fl-node-ndts91hi4ejv span.uabb-infobox-title:hover,.fl-node-ndts91hi4ejv span.uabb-infobox-title span a:hover,.fl-node-ndts91hi4ejv span.uabb-infobox-title *:hover,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-ndts91hi4ejv .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-ndts91hi4ejv .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-ndts91hi4ejv .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-ndts91hi4ejv .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-ndts91hi4ejv .uabb-infobox {position: relative;}.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-ndts91hi4ejv .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-ndts91hi4ejv .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-ndts91hi4ejv .uabb-infobox {;}.fl-node-ndts91hi4ejv .infobox-responsive- {text-align: ;}}.fl-node-ndts91hi4ejv .uabb-infobox-title {font-size: 16px;text-transform: uppercase;} .fl-node-ndts91hi4ejv > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-node-3xhlytkunbr1 {width: 100%;}.fl-node-3xhlytkunbr1 .uabb-imgicon-wrap {text-align: ;}.fl-node-3xhlytkunbr1 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-3xhlytkunbr1 .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-3xhlytkunbr1 .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-3xhlytkunbr1 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-3xhlytkunbr1 .uabb-imgicon-wrap {text-align: ;}}.fl-node-3xhlytkunbr1 .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-3xhlytkunbr1 .uabb-infobox {}.fl-node-3xhlytkunbr1 .infobox-center,.fl-node-3xhlytkunbr1 .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-3xhlytkunbr1 .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-3xhlytkunbr1 span.uabb-infobox-title,.fl-node-3xhlytkunbr1 span.uabb-infobox-title span a,.fl-node-3xhlytkunbr1 span.uabb-infobox-title * {color: #0061ac}.fl-node-3xhlytkunbr1 span.uabb-infobox-title:hover,.fl-node-3xhlytkunbr1 span.uabb-infobox-title span a:hover,.fl-node-3xhlytkunbr1 span.uabb-infobox-title *:hover,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-3xhlytkunbr1 .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-3xhlytkunbr1 .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-3xhlytkunbr1 .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-3xhlytkunbr1 .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-3xhlytkunbr1 .uabb-infobox {position: relative;}.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-3xhlytkunbr1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-3xhlytkunbr1 .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-3xhlytkunbr1 .uabb-infobox {;}.fl-node-3xhlytkunbr1 .infobox-responsive- {text-align: ;}}.fl-node-3xhlytkunbr1 .uabb-infobox-title {font-size: 16px;text-transform: uppercase;} .fl-node-3xhlytkunbr1 > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-node-l4yrhqum2ics {width: 100%;}.fl-node-l4yrhqum2ics .uabb-imgicon-wrap {text-align: ;}.fl-node-l4yrhqum2ics .uabb-image .uabb-photo-img {width: 150px;}.fl-node-l4yrhqum2ics .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-l4yrhqum2ics .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-l4yrhqum2ics .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-l4yrhqum2ics .uabb-imgicon-wrap {text-align: ;}}.fl-node-l4yrhqum2ics .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-l4yrhqum2ics .uabb-infobox {}.fl-node-l4yrhqum2ics .infobox-center,.fl-node-l4yrhqum2ics .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-l4yrhqum2ics .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-l4yrhqum2ics span.uabb-infobox-title,.fl-node-l4yrhqum2ics span.uabb-infobox-title span a,.fl-node-l4yrhqum2ics span.uabb-infobox-title * {color: #0061ac}.fl-node-l4yrhqum2ics span.uabb-infobox-title:hover,.fl-node-l4yrhqum2ics span.uabb-infobox-title span a:hover,.fl-node-l4yrhqum2ics span.uabb-infobox-title *:hover,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-l4yrhqum2ics .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-l4yrhqum2ics .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-l4yrhqum2ics .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-l4yrhqum2ics .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-l4yrhqum2ics .uabb-infobox {position: relative;}.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-l4yrhqum2ics .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-l4yrhqum2ics .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-l4yrhqum2ics .uabb-infobox {;}.fl-node-l4yrhqum2ics .infobox-responsive- {text-align: ;}}.fl-node-l4yrhqum2ics .uabb-infobox-title {font-size: 16px;text-transform: uppercase;} .fl-node-l4yrhqum2ics > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-node-6kh0rsuf1t9y {width: 100%;}.fl-node-6kh0rsuf1t9y .uabb-imgicon-wrap {text-align: ;}.fl-node-6kh0rsuf1t9y .uabb-image .uabb-photo-img {width: 150px;}.fl-node-6kh0rsuf1t9y .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-6kh0rsuf1t9y .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-6kh0rsuf1t9y .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-6kh0rsuf1t9y .uabb-imgicon-wrap {text-align: ;}}.fl-node-6kh0rsuf1t9y .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-6kh0rsuf1t9y .uabb-infobox {}.fl-node-6kh0rsuf1t9y .infobox-center,.fl-node-6kh0rsuf1t9y .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-6kh0rsuf1t9y span.uabb-infobox-title,.fl-node-6kh0rsuf1t9y span.uabb-infobox-title span a,.fl-node-6kh0rsuf1t9y span.uabb-infobox-title * {color: #0061ac}.fl-node-6kh0rsuf1t9y span.uabb-infobox-title:hover,.fl-node-6kh0rsuf1t9y span.uabb-infobox-title span a:hover,.fl-node-6kh0rsuf1t9y span.uabb-infobox-title *:hover,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-6kh0rsuf1t9y .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-infobox {position: relative;}.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-6kh0rsuf1t9y .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-6kh0rsuf1t9y .uabb-infobox {;}.fl-node-6kh0rsuf1t9y .infobox-responsive- {text-align: ;}}.fl-node-6kh0rsuf1t9y .uabb-infobox-title {font-size: 16px;text-transform: uppercase;} .fl-node-6kh0rsuf1t9y > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-node-zugsdmptb0k7 {width: 100%;}.fl-node-zugsdmptb0k7 .uabb-imgicon-wrap {text-align: ;}.fl-node-zugsdmptb0k7 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-zugsdmptb0k7 .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-zugsdmptb0k7 .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-zugsdmptb0k7 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-zugsdmptb0k7 .uabb-imgicon-wrap {text-align: ;}}.fl-node-zugsdmptb0k7 .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-zugsdmptb0k7 .uabb-infobox {}.fl-node-zugsdmptb0k7 .infobox-center,.fl-node-zugsdmptb0k7 .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-zugsdmptb0k7 .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-zugsdmptb0k7 span.uabb-infobox-title,.fl-node-zugsdmptb0k7 span.uabb-infobox-title span a,.fl-node-zugsdmptb0k7 span.uabb-infobox-title * {color: #0061ac}.fl-node-zugsdmptb0k7 span.uabb-infobox-title:hover,.fl-node-zugsdmptb0k7 span.uabb-infobox-title span a:hover,.fl-node-zugsdmptb0k7 span.uabb-infobox-title *:hover,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-zugsdmptb0k7 .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-zugsdmptb0k7 .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-zugsdmptb0k7 .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-zugsdmptb0k7 .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-zugsdmptb0k7 .uabb-infobox {position: relative;}.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-zugsdmptb0k7 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-zugsdmptb0k7 .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-zugsdmptb0k7 .uabb-infobox {;}.fl-node-zugsdmptb0k7 .infobox-responsive- {text-align: ;}}.fl-node-zugsdmptb0k7 .uabb-infobox-title {font-size: 16px;text-transform: uppercase;} .fl-node-zugsdmptb0k7 > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-node-o502cghdkew1 {width: 100%;}.fl-node-o502cghdkew1 .uabb-imgicon-wrap {text-align: ;}.fl-node-o502cghdkew1 .uabb-image .uabb-photo-img {width: 150px;}.fl-node-o502cghdkew1 .uabb-image .uabb-image-content{}@media ( max-width: 660px ) {.fl-node-o502cghdkew1 .uabb-image .uabb-photo-img{width: 80px;}}@media ( max-width: 992px ) {.fl-node-o502cghdkew1 .uabb-imgicon-wrap {text-align: ;}}@media ( max-width: 660px ) {.fl-node-o502cghdkew1 .uabb-imgicon-wrap {text-align: ;}}.fl-node-o502cghdkew1 .uabb-icon-wrap .uabb-icon i {width: auto;}.fl-node-o502cghdkew1 .uabb-infobox {}.fl-node-o502cghdkew1 .infobox-center,.fl-node-o502cghdkew1 .uabb-infobox .uabb-separator {text-align: center;}.fl-builder-content .fl-node-o502cghdkew1 .uabb-infobox-title {margin-top: px;margin-bottom: 10px;}.fl-node-o502cghdkew1 span.uabb-infobox-title,.fl-node-o502cghdkew1 span.uabb-infobox-title span a,.fl-node-o502cghdkew1 span.uabb-infobox-title * {color: #0061ac}.fl-node-o502cghdkew1 span.uabb-infobox-title:hover,.fl-node-o502cghdkew1 span.uabb-infobox-title span a:hover,.fl-node-o502cghdkew1 span.uabb-infobox-title *:hover,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title span a,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content span.uabb-infobox-title * {color: #52a6dd}.fl-builder-content .fl-node-o502cghdkew1 .uabb-infobox-text {margin-top: 0px;margin-bottom: 0px;}.fl-node-o502cghdkew1 .uabb-infobox-text {color:#1e1e1e;}.fl-builder-content .fl-node-o502cghdkew1 .uabb-imgicon-wrap {margin-top: 5px;margin-bottom: 0px;}.fl-builder-content .fl-node-o502cghdkew1 .uabb-infobox-title-prefix {}.fl-builder-content .fl-node-o502cghdkew1 .uabb-infobox {position: relative;}.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i:before,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i:before {color : ;}.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap i,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap i {background-color: ;}.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap img:before,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap img:before {background-color: ;}.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-infobox-content .uabb-imgicon-wrap .uabb-image-content,.fl-node-o502cghdkew1 .uabb-infobox-module-link:hover ~ .uabb-imgicon-wrap .uabb-image-content {}@media (max-width: 992px) { .fl-builder-content .fl-node-o502cghdkew1 .uabb-infobox {;}}@media (max-width: 660px) { .fl-builder-content .fl-node-o502cghdkew1 .uabb-infobox {;}.fl-node-o502cghdkew1 .infobox-responsive- {text-align: ;}}.fl-node-o502cghdkew1 .uabb-infobox-title {font-size: 16px;text-transform: uppercase;} .fl-node-o502cghdkew1 > .fl-module-content {margin-right:0px;margin-left:0px;}.fl-col-group-equal-height.fl-col-group-align-bottom .fl-col-content {-webkit-justify-content: flex-end;justify-content: flex-end;-webkit-box-align: end; -webkit-box-pack: end;-ms-flex-pack: end;}.uabb-module-content h1,.uabb-module-content h2,.uabb-module-content h3,.uabb-module-content h4,.uabb-module-content h5,.uabb-module-content h6 {margin: 0;clear: both;}.fl-module-content a,.fl-module-content a:hover,.fl-module-content a:focus {text-decoration: none;}.uabb-row-separator {position: absolute;width: 100%;left: 0;}.uabb-top-row-separator {top: 0;bottom: auto}.uabb-bottom-row-separator {top: auto;bottom: 0;}.fl-builder-content-editing .fl-visible-medium.uabb-row,.fl-builder-content-editing .fl-visible-medium-mobile.uabb-row,.fl-builder-content-editing .fl-visible-mobile.uabb-row {display: none !important;}@media (max-width: 992px) {.fl-builder-content-editing .fl-visible-desktop.uabb-row,.fl-builder-content-editing .fl-visible-mobile.uabb-row {display: none !important;}.fl-builder-content-editing .fl-visible-desktop-medium.uabb-row,.fl-builder-content-editing .fl-visible-medium.uabb-row,.fl-builder-content-editing .fl-visible-medium-mobile.uabb-row {display: block !important;}}@media (max-width: 768px) {.fl-builder-content-editing .fl-visible-desktop.uabb-row,.fl-builder-content-editing .fl-visible-desktop-medium.uabb-row,.fl-builder-content-editing .fl-visible-medium.uabb-row {display: none !important;}.fl-builder-content-editing .fl-visible-medium-mobile.uabb-row,.fl-builder-content-editing .fl-visible-mobile.uabb-row {display: block !important;}}.fl-responsive-preview-content .fl-builder-content-editing {overflow-x: hidden;overflow-y: visible;}.uabb-row-separator svg {width: 100%;}.uabb-top-row-separator.uabb-has-svg svg {position: absolute;padding: 0;margin: 0;left: 50%;top: -1px;bottom: auto;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);}.uabb-bottom-row-separator.uabb-has-svg svg {position: absolute;padding: 0;margin: 0;left: 50%;bottom: -1px;top: auto;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);}.uabb-bottom-row-separator.uabb-has-svg .uasvg-wave-separator {bottom: 0;}.uabb-top-row-separator.uabb-has-svg .uasvg-wave-separator {top: 0;}.uabb-bottom-row-separator.uabb-svg-triangle svg,.uabb-bottom-row-separator.uabb-xlarge-triangle svg,.uabb-top-row-separator.uabb-xlarge-triangle-left svg,.uabb-bottom-row-separator.uabb-svg-circle svg,.uabb-top-row-separator.uabb-slime-separator svg,.uabb-top-row-separator.uabb-grass-separator svg,.uabb-top-row-separator.uabb-grass-bend-separator svg,.uabb-bottom-row-separator.uabb-mul-triangles-separator svg,.uabb-top-row-separator.uabb-wave-slide-separator svg,.uabb-top-row-separator.uabb-pine-tree-separator svg,.uabb-top-row-separator.uabb-pine-tree-bend-separator svg,.uabb-bottom-row-separator.uabb-stamp-separator svg,.uabb-bottom-row-separator.uabb-xlarge-circle svg,.uabb-top-row-separator.uabb-wave-separator svg{left: 50%;-webkit-transform: translateX(-50%) scaleY(-1); -moz-transform: translateX(-50%) scaleY(-1);-ms-transform: translateX(-50%) scaleY(-1); -o-transform: translateX(-50%) scaleY(-1);transform: translateX(-50%) scaleY(-1);}.uabb-bottom-row-separator.uabb-big-triangle svg {left: 50%;-webkit-transform: scale(1) scaleY(-1) translateX(-50%); -moz-transform: scale(1) scaleY(-1) translateX(-50%);-ms-transform: scale(1) scaleY(-1) translateX(-50%); -o-transform: scale(1) scaleY(-1) translateX(-50%);transform: scale(1) scaleY(-1) translateX(-50%);}.uabb-top-row-separator.uabb-big-triangle svg {left: 50%;-webkit-transform: translateX(-50%) scale(1); -moz-transform: translateX(-50%) scale(1);-ms-transform: translateX(-50%) scale(1); -o-transform: translateX(-50%) scale(1);transform: translateX(-50%) scale(1);}.uabb-top-row-separator.uabb-xlarge-triangle-right svg {left: 50%;-webkit-transform: translateX(-50%) scale(-1); -moz-transform: translateX(-50%) scale(-1);-ms-transform: translateX(-50%) scale(-1); -o-transform: translateX(-50%) scale(-1);transform: translateX(-50%) scale(-1);}.uabb-bottom-row-separator.uabb-xlarge-triangle-right svg {left: 50%;-webkit-transform: translateX(-50%) scaleX(-1); -moz-transform: translateX(-50%) scaleX(-1);-ms-transform: translateX(-50%) scaleX(-1); -o-transform: translateX(-50%) scaleX(-1);transform: translateX(-50%) scaleX(-1);}.uabb-top-row-separator.uabb-curve-up-separator svg {left: 50%; -webkit-transform: translateX(-50%) scaleY(-1); -moz-transform: translateX(-50%) scaleY(-1);-ms-transform: translateX(-50%) scaleY(-1); -o-transform: translateX(-50%) scaleY(-1);transform: translateX(-50%) scaleY(-1);}.uabb-top-row-separator.uabb-curve-down-separator svg {left: 50%;-webkit-transform: translateX(-50%) scale(-1); -moz-transform: translateX(-50%) scale(-1);-ms-transform: translateX(-50%) scale(-1); -o-transform: translateX(-50%) scale(-1);transform: translateX(-50%) scale(-1);}.uabb-bottom-row-separator.uabb-curve-down-separator svg {left: 50%;-webkit-transform: translateX(-50%) scaleX(-1); -moz-transform: translateX(-50%) scaleX(-1);-ms-transform: translateX(-50%) scaleX(-1); -o-transform: translateX(-50%) scaleX(-1);transform: translateX(-50%) scaleX(-1);}.uabb-top-row-separator.uabb-tilt-left-separator svg {left: 50%;-webkit-transform: translateX(-50%) scale(-1); -moz-transform: translateX(-50%) scale(-1);-ms-transform: translateX(-50%) scale(-1); -o-transform: translateX(-50%) scale(-1);transform: translateX(-50%) scale(-1);}.uabb-top-row-separator.uabb-tilt-right-separator svg{left: 50%;-webkit-transform: translateX(-50%) scaleY(-1); -moz-transform: translateX(-50%) scaleY(-1);-ms-transform: translateX(-50%) scaleY(-1); -o-transform: translateX(-50%) scaleY(-1);transform: translateX(-50%) scaleY(-1);}.uabb-bottom-row-separator.uabb-tilt-left-separator svg {left: 50%;-webkit-transform: translateX(-50%); -moz-transform: translateX(-50%);-ms-transform: translateX(-50%); -o-transform: translateX(-50%);transform: translateX(-50%);}.uabb-bottom-row-separator.uabb-tilt-right-separator svg {left: 50%;-webkit-transform: translateX(-50%) scaleX(-1); -moz-transform: translateX(-50%) scaleX(-1);-ms-transform: translateX(-50%) scaleX(-1); -o-transform: translateX(-50%) scaleX(-1);transform: translateX(-50%) scaleX(-1);}.uabb-top-row-separator.uabb-tilt-left-separator,.uabb-top-row-separator.uabb-tilt-right-separator {top: 0;}.uabb-bottom-row-separator.uabb-tilt-left-separator,.uabb-bottom-row-separator.uabb-tilt-right-separator {bottom: 0;}.uabb-top-row-separator.uabb-arrow-outward-separator svg,.uabb-top-row-separator.uabb-arrow-inward-separator svg,.uabb-top-row-separator.uabb-cloud-separator svg,.uabb-top-row-separator.uabb-multi-triangle svg {left: 50%;-webkit-transform: translateX(-50%) scaleY(-1); -moz-transform: translateX(-50%) scaleY(-1);-ms-transform: translateX(-50%) scaleY(-1); -o-transform: translateX(-50%) scaleY(-1);transform: translateX(-50%) scaleY(-1);}.uabb-bottom-row-separator.uabb-multi-triangle svg {bottom: -2px;}.uabb-row-separator.uabb-round-split:after,.uabb-row-separator.uabb-round-split:before {left: 0;width: 50%;background: inherit inherit/inherit inherit inherit inherit;content: '';position: absolute}.uabb-button-wrap a,.uabb-button-wrap a:visited {display: inline-block;font-size: 16px;line-height: 18px;text-decoration: none;text-shadow: none;}.fl-builder-content .uabb-button:hover {text-decoration: none;}.fl-builder-content .uabb-button-width-full .uabb-button {display: block;text-align: center;}.uabb-button-width-custom .uabb-button {display: inline-block;text-align: center;max-width: 100%;}.fl-builder-content .uabb-button-left {text-align: left;}.fl-builder-content .uabb-button-center {text-align: center;}.fl-builder-content .uabb-button-right {text-align: right;}.fl-builder-content .uabb-button i,.fl-builder-content .uabb-button i:before {font-size: 1em;height: 1em;line-height: 1em;width: 1em;}.uabb-button .uabb-button-icon-after {margin-left: 8px;margin-right: 0;}.uabb-button .uabb-button-icon-before {margin-left: 0;margin-right: 8px;}.uabb-button .uabb-button-icon-no-text {margin: 0;}.uabb-button-has-icon .uabb-button-text {vertical-align: middle;}.uabb-icon-wrap {display: inline-block;}.uabb-icon a {text-decoration: none;}.uabb-icon i {display: block;}.uabb-icon i:before {border: none !important;background: none !important;}.uabb-icon-text {display: table-cell;text-align: left;padding-left: 15px;vertical-align: middle;}.uabb-icon-text *:last-child {margin: 0 !important;padding: 0 !important;}.uabb-icon-text a {text-decoration: none;}.uabb-photo {line-height: 0;position: relative;z-index: 2;}.uabb-photo-align-left {text-align: left;}.uabb-photo-align-center {text-align: center;}.uabb-photo-align-right {text-align: right;}.uabb-photo-content {border-radius: 0;display: inline-block;line-height: 0;position: relative;max-width: 100%;overflow: hidden;}.uabb-photo-content img {border-radius: inherit;display: inline;height: auto;max-width: 100%;width: auto;}.fl-builder-content .uabb-photo-crop-circle img {-webkit-border-radius: 100%;-moz-border-radius: 100%;border-radius: 100%;}.fl-builder-content .uabb-photo-crop-square img {-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;}.uabb-photo-caption {font-size: 13px;line-height: 18px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}.uabb-photo-caption-below {padding-bottom: 20px;padding-top: 10px;}.uabb-photo-caption-hover {background: rgba(0,0,0,0.7);bottom: 0;color: #fff;left: 0;opacity: 0;visibility: hidden;filter: alpha(opacity = 0);padding: 10px 15px;position: absolute;right: 0;-webkit-transition:visibility 200ms linear;-moz-transition:visibility 200ms linear;transition:visibility 200ms linear;}.uabb-photo-content:hover .uabb-photo-caption-hover {opacity: 100;visibility: visible;}.uabb-active-btn {background: #1e8cbe;border-color: #0074a2;-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,.6);box-shadow: inset 0 1px 0 rgba(120,200,230,.6);color: white;}.fl-builder-bar .fl-builder-add-content-button {display: block !important;opacity: 1 !important;}.uabb-imgicon-wrap .uabb-icon {display: block;}.uabb-imgicon-wrap .uabb-icon i{float: none;}.uabb-imgicon-wrap .uabb-image {line-height: 0;position: relative;}.uabb-imgicon-wrap .uabb-image-align-left {text-align: left;}.uabb-imgicon-wrap .uabb-image-align-center {text-align: center;}.uabb-imgicon-wrap .uabb-image-align-right {text-align: right;}.uabb-imgicon-wrap .uabb-image-content {display: inline-block;border-radius: 0;line-height: 0;position: relative;max-width: 100%;}.uabb-imgicon-wrap .uabb-image-content img {display: inline;height: auto !important;max-width: 100%;width: auto;border-radius: inherit;box-shadow: none;box-sizing: content-box;}.fl-builder-content .uabb-imgicon-wrap .uabb-image-crop-circle img {-webkit-border-radius: 100%;-moz-border-radius: 100%;border-radius: 100%;}.fl-builder-content .uabb-imgicon-wrap .uabb-image-crop-square img {-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;}.uabb-creative-button-wrap a,.uabb-creative-button-wrap a:visited {background: #fafafa;border: 1px solid #ccc;color: #333;display: inline-block;vertical-align: middle;text-align: center;overflow: hidden;text-decoration: none;text-shadow: none;box-shadow: none;position: relative;-webkit-transition: all 200ms linear; -moz-transition: all 200ms linear;-ms-transition: all 200ms linear; -o-transition: all 200ms linear;transition: all 200ms linear;}.uabb-creative-button-wrap a:focus {text-decoration: none;text-shadow: none;box-shadow: none;}.uabb-creative-button-wrap a .uabb-creative-button-text,.uabb-creative-button-wrap a .uabb-creative-button-icon,.uabb-creative-button-wrap a:visited .uabb-creative-button-text,.uabb-creative-button-wrap a:visited .uabb-creative-button-icon {-webkit-transition: all 200ms linear; -moz-transition: all 200ms linear;-ms-transition: all 200ms linear; -o-transition: all 200ms linear;transition: all 200ms linear;}.uabb-creative-button-wrap a:hover {text-decoration: none;}.uabb-creative-button-wrap .uabb-creative-button-width-full .uabb-creative-button {display: block;text-align: center;}.uabb-creative-button-wrap .uabb-creative-button-width-custom .uabb-creative-button {display: inline-block;text-align: center;max-width: 100%;}.uabb-creative-button-wrap .uabb-creative-button-left {text-align: left;}.uabb-creative-button-wrap .uabb-creative-button-center {text-align: center;}.uabb-creative-button-wrap .uabb-creative-button-right {text-align: right;}.uabb-creative-button-wrap .uabb-creative-button i {font-size: 1.3em;height: auto;vertical-align: middle;width: auto;}.uabb-creative-button-wrap .uabb-creative-button .uabb-creative-button-icon-after {margin-left: 8px;margin-right: 0;}.uabb-creative-button-wrap .uabb-creative-button .uabb-creative-button-icon-before {margin-right: 8px;margin-left: 0;}.uabb-creative-button-wrap.uabb-creative-button-icon-no-text .uabb-creative-button i {margin: 0;}.uabb-creative-button-wrap .uabb-creative-button-has-icon .uabb-creative-button-text {vertical-align: middle;}.uabb-creative-button-wrap a,.uabb-creative-button-wrap a:visited {padding: 12px 24px;}.uabb-creative-button.uabb-creative-transparent-btn {background: transparent;}.uabb-creative-button.uabb-creative-transparent-btn:after {content: '';position: absolute;z-index: 1;-webkit-transition: all 200ms linear; -moz-transition: all 200ms linear;-ms-transition: all 200ms linear; -o-transition: all 200ms linear;transition: all 200ms linear;}.uabb-transparent-fill-top-btn:after,.uabb-transparent-fill-bottom-btn:after {width: 100%;height: 0;left: 0;}.uabb-transparent-fill-top-btn:after {top: 0;}.uabb-transparent-fill-bottom-btn:after {bottom: 0;}.uabb-transparent-fill-left-btn:after,.uabb-transparent-fill-right-btn:after {width: 0;height: 100%;top: 0;}.uabb-transparent-fill-left-btn:after {left: 0;}.uabb-transparent-fill-right-btn:after {right: 0;}.uabb-transparent-fill-center-btn:after{width: 0;height: 100%;top: 50%;left: 50%;-webkit-transform: translateX(-50%) translateY(-50%); -moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%); -o-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);}.uabb-transparent-fill-diagonal-btn:after,.uabb-transparent-fill-horizontal-btn:after {width: 100%;height: 0;top: 50%;left: 50%;}.uabb-transparent-fill-diagonal-btn{overflow: hidden;}.uabb-transparent-fill-diagonal-btn:after{-webkit-transform: translateX(-50%) translateY(-50%) rotate( 45deg ); -moz-transform: translateX(-50%) translateY(-50%) rotate( 45deg );-ms-transform: translateX(-50%) translateY(-50%) rotate( 45deg ); -o-transform: translateX(-50%) translateY(-50%) rotate( 45deg );transform: translateX(-50%) translateY(-50%) rotate( 45deg );}.uabb-transparent-fill-horizontal-btn:after{-webkit-transform: translateX(-50%) translateY(-50%); -moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%); -o-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);}.uabb-creative-button-wrap .uabb-creative-threed-btn.uabb-threed_down-btn,.uabb-creative-button-wrap .uabb-creative-threed-btn.uabb-threed_up-btn,.uabb-creative-button-wrap .uabb-creative-threed-btn.uabb-threed_left-btn,.uabb-creative-button-wrap .uabb-creative-threed-btn.uabb-threed_right-btn {-webkit-transition: none; -moz-transition: none;-ms-transition: none; -o-transition: none;transition: none;}.perspective {-webkit-perspective: 800px; -moz-perspective: 800px;perspective: 800px;margin: 0;}.uabb-creative-button.uabb-creative-threed-btn:after {content: '';position: absolute;z-index: -1;-webkit-transition: all 200ms linear; -moz-transition: all 200ms linear;transition: all 200ms linear;}.uabb-creative-button.uabb-creative-threed-btn {outline: 1px solid transparent;-webkit-transform-style: preserve-3d; -moz-transform-style: preserve-3d;transform-style: preserve-3d;}.uabb-creative-threed-btn.uabb-animate_top-btn:after {height: 40%;left: 0;top: -40%;width: 100%;-webkit-transform-origin: 0% 100%; -moz-transform-origin: 0% 100%;transform-origin: 0% 100%;-webkit-transform: rotateX(90deg); -moz-transform: rotateX(90deg);transform: rotateX(90deg);}.uabb-creative-threed-btn.uabb-animate_bottom-btn:after {width: 100%;height: 40%;left: 0;top: 100%;-webkit-transform-origin: 0% 0%; -moz-transform-origin: 0% 0%;-ms-transform-origin: 0% 0%;transform-origin: 0% 0%;-webkit-transform: rotateX(-90deg); -moz-transform: rotateX(-90deg);-ms-transform: rotateX(-90deg);transform: rotateX(-90deg);}.uabb-creative-threed-btn.uabb-animate_left-btn:after {width: 20%;height: 100%;left: -20%;top: 0;-webkit-transform-origin: 100% 0%; -moz-transform-origin: 100% 0%;-ms-transform-origin: 100% 0%;transform-origin: 100% 0%;-webkit-transform: rotateY(-60deg); -moz-transform: rotateY(-60deg);-ms-transform: rotateY(-60deg);transform: rotateY(-60deg);}.uabb-creative-threed-btn.uabb-animate_right-btn:after {width: 20%;height: 100%;left: 104%;top: 0;-webkit-transform-origin: 0% 0%; -moz-transform-origin: 0% 0%;-ms-transform-origin: 0% 0%;transform-origin: 0% 0%;-webkit-transform: rotateY(120deg); -moz-transform: rotateY(120deg);-ms-transform: rotateY(120deg);transform: rotateY(120deg);}.uabb-animate_top-btn:hover{-webkit-transform: rotateX(-15deg); -moz-transform: rotateX(-15deg);-ms-transform: rotateX(-15deg); -o-transform: rotateX(-15deg);transform: rotateX(-15deg);}.uabb-animate_bottom-btn:hover{-webkit-transform: rotateX(15deg); -moz-transform: rotateX(15deg);-ms-transform: rotateX(15deg); -o-transform: rotateX(15deg);transform: rotateX(15deg);}.uabb-animate_left-btn:hover{-webkit-transform: rotateY(6deg); -moz-transform: rotateY(6deg);-ms-transform: rotateY(6deg); -o-transform: rotateY(6deg);transform: rotateY(6deg);}.uabb-animate_right-btn:hover{-webkit-transform: rotateY(-6deg); -moz-transform: rotateY(-6deg);-ms-transform: rotateY(-6deg); -o-transform: rotateY(-6deg);transform: rotateY(-6deg);}.uabb-creative-flat-btn.uabb-animate_to_right-btn,.uabb-creative-flat-btn.uabb-animate_to_left-btn,.uabb-creative-flat-btn.uabb-animate_from_top-btn,.uabb-creative-flat-btn.uabb-animate_from_bottom-btn {overflow: hidden;position: relative;}.uabb-creative-flat-btn.uabb-animate_to_right-btn i,.uabb-creative-flat-btn.uabb-animate_to_left-btn i,.uabb-creative-flat-btn.uabb-animate_from_top-btn i,.uabb-creative-flat-btn.uabb-animate_from_bottom-btn i {bottom: 0;height: 100%;margin: 0;opacity: 1;position: absolute;right: 0;width: 100%;-webkit-transition: all 200ms linear; -moz-transition: all 200ms linear;transition: all 200ms linear;-webkit-transform: translateY(0); -moz-transform: translateY(0); -o-transform: translateY(0);-ms-transform: translateY(0);transform: translateY(0);}.uabb-creative-flat-btn.uabb-animate_to_right-btn .uabb-button-text,.uabb-creative-flat-btn.uabb-animate_to_left-btn .uabb-button-text,.uabb-creative-flat-btn.uabb-animate_from_top-btn .uabb-button-text,.uabb-creative-flat-btn.uabb-animate_from_bottom-btn .uabb-button-text {display: inline-block;width: 100%;height: 100%;-webkit-transition: all 200ms linear; -moz-transition: all 200ms linear;-ms-transition: all 200ms linear; -o-transition: all 200ms linear;transition: all 200ms linear;-webkit-backface-visibility: hidden; -moz-backface-visibility: hidden;backface-visibility: hidden;}.uabb-creative-flat-btn.uabb-animate_to_right-btn i:before,.uabb-creative-flat-btn.uabb-animate_to_left-btn i:before,.uabb-creative-flat-btn.uabb-animate_from_top-btn i:before,.uabb-creative-flat-btn.uabb-animate_from_bottom-btn i:before {position: absolute;top: 50%;left: 50%;-webkit-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%) translateY(-50%);-o-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%);transform: translateX(-50%) translateY(-50%);}.uabb-creative-flat-btn.uabb-animate_to_right-btn:hover i,.uabb-creative-flat-btn.uabb-animate_to_left-btn:hover i {left: 0;}.uabb-creative-flat-btn.uabb-animate_from_top-btn:hover i,.uabb-creative-flat-btn.uabb-animate_from_bottom-btn:hover i {top: 0;}.uabb-creative-flat-btn.uabb-animate_to_right-btn i {top: 0;left: -100%;}.uabb-creative-flat-btn.uabb-animate_to_right-btn:hover .uabb-button-text {-webkit-transform: translateX(200%); -moz-transform: translateX(200%);-ms-transform: translateX(200%); -o-transform: translateX(200%);transform: translateX(200%);}.uabb-creative-flat-btn.uabb-animate_to_left-btn i {top: 0;left: 100%;}.uabb-creative-flat-btn.uabb-animate_to_left-btn:hover .uabb-button-text {-webkit-transform: translateX(-200%); -moz-transform: translateX(-200%);-ms-transform: translateX(-200%); -o-transform: translateX(-200%);transform: translateX(-200%);}.uabb-creative-flat-btn.uabb-animate_from_top-btn i {top: -100%;left: 0;}.uabb-creative-flat-btn.uabb-animate_from_top-btn:hover .uabb-button-text {-webkit-transform: translateY(400px); -moz-transform: translateY(400px);-ms-transform: translateY(400px); -o-transform: translateY(400px);transform: translateY(400px);}.uabb-creative-flat-btn.uabb-animate_from_bottom-btn i {top: 100%;left: 0;}.uabb-creative-flat-btn.uabb-animate_from_bottom-btn:hover .uabb-button-text {-webkit-transform: translateY(-400px); -moz-transform: translateY(-400px);-ms-transform: translateY(-400px); -o-transform: translateY(-400px);transform: translateY(-400px);}.uabb-tab-acc-content .wp-video, .uabb-tab-acc-content video.wp-video-shortcode, .uabb-tab-acc-content .mejs-container:not(.mejs-audio), .uabb-tab-acc-content .mejs-overlay.load,.uabb-adv-accordion-content .wp-video, .uabb-adv-accordion-content video.wp-video-shortcode, .uabb-adv-accordion-content .mejs-container:not(.mejs-audio), .uabb-adv-accordion-content .mejs-overlay.load {width: 100% !important;height: 100% !important;}.uabb-tab-acc-content .mejs-container:not(.mejs-audio),.uabb-adv-accordion-content .mejs-container:not(.mejs-audio) {padding-top: 56.25%;}.uabb-tab-acc-content .wp-video, .uabb-tab-acc-content video.wp-video-shortcode,.uabb-adv-accordion-content .wp-video, .uabb-adv-accordion-content video.wp-video-shortcode {max-width: 100% !important;}.uabb-tab-acc-content video.wp-video-shortcode,.uabb-adv-accordion-content video.wp-video-shortcode {position: relative;}.uabb-tab-acc-content .mejs-container:not(.mejs-audio) .mejs-mediaelement,.uabb-adv-accordion-content .mejs-container:not(.mejs-audio) .mejs-mediaelement {position: absolute;top: 0;right: 0;bottom: 0;left: 0;}.uabb-tab-acc-content .mejs-overlay-play,.uabb-adv-accordion-content .mejs-overlay-play {top: 0;right: 0;bottom: 0;left: 0;width: auto !important;height: auto !important;}.fl-row-content-wrap .uabb-row-particles-background,.uabb-col-particles-background {width:100%;height:100%;position:absolute;left:0;top:0;}.uabb-creative-button-wrap a,.uabb-creative-button-wrap a:visited {}.uabb-dual-button .uabb-btn,.uabb-dual-button .uabb-btn:visited {}.uabb-js-breakpoint {content:"default";display:none;}@media screen and (max-width: 992px) {.uabb-js-breakpoint {content:"992";}}@media screen and (max-width: 660px) {.uabb-js-breakpoint {content:"660";}}.fl-builder-row-settings #fl-field-separator_position {display: none !important;}.fl-node-lpoaj5qvtuif .fl-row-content {min-width: 0px;}
</style>
@endsection


@section('contents')
<div class="uabb-js-breakpoint" style="display: none;"></div>
<div id="fl-main-content" class="fl-page-content" itemprop="mainContentOfPage" role="main">
   <div class="fl-content-full container">
      <div class="row">
         <div class="fl-content col-md-12">
            <article class="fl-post post-28 page type-page status-publish hentry" id="fl-post-28" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
               <div class="fl-post-content clearfix" itemprop="text">
                  <div class="fl-builder-content fl-builder-content-28 fl-builder-content-primary fl-builder-global-templates-locked" data-post-id="28">
                     <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5f918afab1adb fl-row-custom-height fl-row-align-center fl-row-bg-overlay" data-node="5f918afab1adb">
                        <div class="fl-row-content-wrap">
                           <div class="uabb-row-separator uabb-top-row-separator" ></div>
                           <div class="fl-row-content fl-row-fixed-width fl-node-content">
                              <div class="fl-col-group fl-node-5f918afab1ad6 fl-col-group-equal-height fl-col-group-align-center" data-node="5f918afab1ad6">
                                 <div class="fl-col fl-node-5f918afab1ad7" data-node="5f918afab1ad7">
                                    <div class="fl-col-content fl-node-content">
                                       <div class="fl-module fl-module-heading fl-node-5f918afab1ad8 fl-animation fl-fade-left" data-node="5f918afab1ad8" data-animation-delay="0" data-animation-duration="1">
                                          <div class="fl-module-content fl-node-content">
                                             <h1 class="fl-heading">
                                                <span class="fl-heading-text">Get in touch</span>
                                             </h1>
                                          </div>
                                       </div>
                                       <div class="fl-module fl-module-separator fl-node-5f918afab1ada" data-node="5f918afab1ada">
                                          <div class="fl-module-content fl-node-content">
                                             <div class="fl-separator"></div>
                                          </div>
                                       </div>
                                       <div class="fl-module fl-module-heading fl-node-5f918afab1ad9 fl-animation fl-fade-left" data-node="5f918afab1ad9" data-animation-delay="0.25" data-animation-duration="2">
                                          <div class="fl-module-content fl-node-content">
                                             <h4 class="fl-heading">
                                                <span class="fl-heading-text">Do you have a product question or require a quote? Just call us on the number below or fill out the form and we will get back to you a.s.a.p.</span>
                                             </h4>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f918afab1ae6" data-node="5f918afab1ae6">
                        <div class="fl-row-content-wrap">
                           <div class="uabb-row-separator uabb-top-row-separator" ></div>
                           <div class="fl-row-content fl-row-full-width fl-node-content">
                              <div class="fl-col-group fl-node-5f918afab1adc fl-col-group-custom-width" data-node="5f918afab1adc">
                                 <div class="fl-col fl-node-5f918afab1add fl-col-small fl-col-has-cols top_layer set-width" data-node="5f918afab1add">
                                    <div class="fl-col-content fl-node-content">
                                       <div class="fl-col-group fl-node-5f918afab1adf fl-col-group-nested" data-node="5f918afab1adf">
                                          <div class="fl-col fl-node-5f918afab1ae0" data-node="5f918afab1ae0">
                                             <div class="fl-col-content fl-node-content">
                                                <div class="fl-module fl-module-heading fl-node-5f918afab1ae1" data-node="5f918afab1ae1">
                                                   <div class="fl-module-content fl-node-content">
                                                      <h3 class="fl-heading">
                                                         <span class="fl-heading-text">Our <br> contact<br>details</span>
                                                      </h3>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-col fl-node-5f918afab1ae4 fl-col-has-cols" data-node="5f918afab1ae4">
                                    <div class="fl-col-content fl-node-content">
                                       <div class="fl-col-group fl-node-5f918b5d1fab7 fl-col-group-nested fl-col-group-custom-width" data-node="5f918b5d1fab7">
                                          <div class="fl-col fl-node-5f918b5d1fd08 fl-col-small" data-node="5f918b5d1fd08">
                                             <div class="fl-col-content fl-node-content">
                                                <div class="fl-module fl-module-info-list fl-node-5fc91ecb919c4 obvia" data-node="5fc91ecb919c4">
                                                   <div class="fl-module-content fl-node-content">
                                                      <div class="uabb-module-content uabb-info-list">
                                                         <ul class="uabb-info-list-wrapper uabb-info-list-left">
                                                            <li class="uabb-info-list-item info-list-item-dynamic0">
                                                               <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-left">
                                                                  <div class="uabb-info-list-icon info-list-icon-dynamic0">
                                                                     <div class="uabb-module-content uabb-imgicon-wrap">
                                                                        <div class="uabb-image
                                                                           uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                           <div class="uabb-image-content">
                                                                              <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10793 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="BlueBotics Contact Address." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Contact-Address.svg"/>
                                                                              <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10793 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Contact-Address.svg" alt="BlueBotics Contact Address." title="" itemprop="image"/></noscript>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="uabb-info-list-content uabb-info-list-left info-list-content-dynamic0">
                                                                     <h5 class="uabb-info-list-title">PT Dwida Jaya Tama</h5 >
                                                                     <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic0">
                                                                        <p>Jl. Raya Pemuda No.4 <br>Kel. Padurenan Kec. Gn. Sindur <br>Kab. Bogor 16340 Indonesia</p>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="uabb-info-list-connector-top uabb-info-list-left"></div>
                                                               <div class="uabb-info-list-connector uabb-info-list-left"></div>
                                                            </li>
                                                            <li class="uabb-info-list-item info-list-item-dynamic1">
                                                               <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-left">
                                                                  <div class="uabb-info-list-icon info-list-icon-dynamic1">
                                                                     <div class="uabb-module-content uabb-imgicon-wrap">
                                                                        <div class="uabb-image
                                                                           uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                           <div class="uabb-image-content">
                                                                              <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10798 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="BlueBotics Contact Phone." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Contact-Phone.svg"/>
                                                                              <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10798 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Contact-Phone.svg" alt="BlueBotics Contact Phone." title="" itemprop="image"/></noscript>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="uabb-info-list-content uabb-info-list-left info-list-content-dynamic1">
                                                                     <h5 class="uabb-info-list-title"></h5 >
                                                                     <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic1">
                                                                        <p><a href="#">(0251) 861 8889</a></p>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="uabb-info-list-connector-top uabb-info-list-left"></div>
                                                               <div class="uabb-info-list-connector uabb-info-list-left"></div>
                                                            </li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="fl-col fl-node-5f918b5d1fd0f" data-node="5f918b5d1fd0f">
                                             <div class="fl-col-content fl-node-content">
                                                <div class="fl-module fl-module-info-list fl-node-5fc91deb1fd35 obvia" data-node="5fc91deb1fd35">
                                                   <div class="fl-module-content fl-node-content">
                                                      <div class="uabb-module-content uabb-info-list">
                                                         <ul class="uabb-info-list-wrapper uabb-info-list-left">
                                                            <li class="uabb-info-list-item info-list-item-dynamic0">
                                                               <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-left">
                                                                  <div class="uabb-info-list-icon info-list-icon-dynamic0">
                                                                     <div class="uabb-module-content uabb-imgicon-wrap">
                                                                        <div class="uabb-image
                                                                           uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                           <div class="uabb-image-content">
                                                                              <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10803 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="BlueBotics Contact Opening Hours." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Contact-Opening-Hours.svg"/>
                                                                              <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10803 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Contact-Opening-Hours.svg" alt="BlueBotics Contact Opening Hours." title="" itemprop="image"/></noscript>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="uabb-info-list-content uabb-info-list-left info-list-content-dynamic0">
                                                                     <h5 class="uabb-info-list-title">Opening hours</h5 >
                                                                     <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic0">
                                                                        <p>Monday - Friday<br />08:00 - 17:00</p>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="uabb-info-list-connector-top uabb-info-list-left"></div>
                                                               <div class="uabb-info-list-connector uabb-info-list-left"></div>
                                                            </li>
                                                         </ul>
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
                     <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f918afab1aa3" data-node="5f918afab1aa3">
                        <div class="fl-row-content-wrap">
                           <div class="uabb-row-separator uabb-top-row-separator" ></div>
                           <div class="fl-row-content fl-row-fixed-width fl-node-content">
                              <div class="fl-col-group fl-node-5f918afab1aa4 fl-col-group-custom-width fl-col-group-responsive-reversed" data-node="5f918afab1aa4">
                                 <div class="fl-col fl-node-5fc9554c3b54d top_layer" data-node="5fc9554c3b54d">
                                    <div class="fl-col-content fl-node-content">
                                       <div class="fl-module fl-module-heading fl-node-5fc9554c3b6a1" data-node="5fc9554c3b6a1">
                                          <div class="fl-module-content fl-node-content">
                                             <h3 class="fl-heading">
                                                <span class="fl-heading-text">Send an Enquiry</span>
                                             </h3>
                                          </div>
                                       </div>
                                       <div class="fl-module fl-module-separator fl-node-5fc9554c3b6a4" data-node="5fc9554c3b6a4">
                                          <div class="fl-module-content fl-node-content">
                                             <div class="fl-separator"></div>
                                          </div>
                                       </div>
                                       <div class="fl-module fl-module-pp-gravity-form fl-node-5fc9554c3b6a5 obvia" data-node="5fc9554c3b6a5">
                                          <div class="fl-module-content fl-node-content">
                                             <div class="pp-gf-content">
                                                <div class="pp-gf-inner">
                                                   <div class='gf_browser_chrome gform_wrapper gform_legacy_markup_wrapper gform-theme--no-framework jost_wrapper' data-form-theme='legacy' data-form-index='0' id='gform_wrapper_1' >
                                                      <div id='gf_1' class='gform_anchor' tabindex='-1'></div>
                                                      <div class='gform_heading'>
                                                         <p class='gform_description'></p>
                                                      </div>
                                                      <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_1' id='gform_1' class='jost' action='/contact/#gf_1' data-formid='1' >
                                                         <div class='gform-body gform_body'>
                                                            <ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'>
                                                               <li id="field_1_1"  class="gfield gfield--type-name gf_left_half gfield_contains_required field_sublabel_hidden_label gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_1">
                                                                  <label class='gfield_label gform-field-label gfield_label_before_complex'  >Name<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                  <div class='ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name no_last_name no_suffix gf_name_has_1 ginput_container_name gform-grid-row' id='input_1_1'>
                                                                     <span id='input_1_1_3_container' class='name_first gform-grid-col gform-grid-col--size-auto' >
                                                                     <input type='text' name='input_1.3' id='input_1_1_3' value='' tabindex='101'  aria-required='true'   placeholder='Your name*'  />
                                                                     <label for='input_1_1_3' class='gform-field-label gform-field-label--type-sub hidden_sub_label screen-reader-text'>First</label>
                                                                     </span>
                                                                  </div>
                                                               </li>
                                                               <li id="field_1_7"  class="gfield gfield--type-text gf_right_half gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_7">
                                                                  <label class='gfield_label gform-field-label' for='input_1_7' >Country<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                  <div class='ginput_container ginput_container_text'><input name='input_7' id='input_1_7' type='text' value='' class='large'   tabindex='105' placeholder='Country*' aria-required="true" aria-invalid="false"   /> </div>
                                                               </li>
                                                               <li id="field_1_2"  class="gfield gfield--type-email gf_left_half gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_2">
                                                                  <label class='gfield_label gform-field-label' for='input_1_2' >Email<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                  <div class='ginput_container ginput_container_email'>
                                                                     <input name='input_2' id='input_1_2' type='text' value='' class='large' tabindex='106'  placeholder='Your Email*' aria-required="true" aria-invalid="false"  />
                                                                  </div>
                                                               </li>
                                                               <li id="field_1_8"  class="gfield gfield--type-text gf_right_half gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_8">
                                                                  <label class='gfield_label gform-field-label' for='input_1_8' >Company<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                  <div class='ginput_container ginput_container_text'><input name='input_8' id='input_1_8' type='text' value='' class='large'   tabindex='107' placeholder='Company*' aria-required="true" aria-invalid="false"   /> </div>
                                                               </li>
                                                               <li id="field_1_9"  class="gfield gfield--type-select field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_9">
                                                                  <label class='gfield_label gform-field-label' for='input_1_9' >Select a subject</label>
                                                                  <div class='ginput_container ginput_container_select'>
                                                                     <select name='input_9' id='input_1_9' class='large gfield_select' tabindex='108'    aria-invalid="false" >
                                                                        <option value='' selected='selected' class='gf_placeholder'>Select a subject</option>
                                                                        <option value='ANT navigation' >ANT navigation</option>
                                                                        <option value='Engineering services' >Engineering services</option>
                                                                        <option value='Other' >Other</option>
                                                                     </select>
                                                                  </div>
                                                               </li>
                                                               <li id="field_1_4"  class="gfield gfield--type-textarea gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_4">
                                                                  <label class='gfield_label gform-field-label' for='input_1_4' >Your Message<span class="gfield_required"><span class="gfield_required gfield_required_asterisk">*</span></span></label>
                                                                  <div class='ginput_container ginput_container_textarea'><textarea name='input_4' id='input_1_4' class='textarea medium' tabindex='109'   placeholder='Your message*' aria-required="true" aria-invalid="false"   rows='10' cols='50'></textarea></div>
                                                               </li>
                                                               <li id="field_1_13"  class="gfield gfield--type-html gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_1_13">
                                                                  </ br><br />
                                                                  <h4>GET OUR NEWSLETTER</h4>
                                                                  <p>Keep your knowledge of natural feature navigation and BlueBotics up-to-date by subscribing to our monthly newsletter. You can unsubscribe at any time.</p>
                                                               </li>
                                                               <li id="field_1_11"  class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent jost field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"  data-js-reload="field_1_11">
                                                                  <label class='gfield_label gform-field-label gfield_label_before_complex'  >Email consent</label>
                                                                  <div class='ginput_container ginput_container_consent'><input name='input_11.1' id='input_1_11_1' type='checkbox' value='1' tabindex='110'   aria-invalid="false"   /> <label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for='input_1_11_1' >Sign me up!</label><input type='hidden' name='input_11.2' value='Sign me up!' class='gform_hidden' /><input type='hidden' name='input_11.3' value='23' class='gform_hidden' /></div>
                                                               </li>
                                                               <li id="field_1_14"  class="gfield gfield--type-html gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_1_14"><br /></li>
                                                               <li id="field_1_6"  class="gfield gfield--type-captcha field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_1_6">
                                                                  <label class='gfield_label gform-field-label screen-reader-text' for='input_1_6' ></label>
                                                                  <div id='input_1_6' class='ginput_container ginput_recaptcha' data-sitekey='6LdMyCgaAAAAAHn2AtyfglNx7An-z0idwS27_FYv'  data-theme='light' data-tabindex='111'  data-badge=''></div>
                                                               </li>
                                                               <li id="field_1_15"  class="gfield gfield--type-html gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"  data-js-reload="field_1_15"><br /></li>
                                                               <li id="field_1_16"  class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below gfield_visibility_visible"  data-js-reload="field_1_16">
                                                                  <label class='gfield_label gform-field-label' for='input_1_16' >Comments</label>
                                                                  <div class='ginput_container'><input name='input_16' id='input_1_16' type='text' value='' /></div>
                                                                  <div class='gfield_description' id='gfield_description_1_16'>This field is for validation purposes and should be left unchanged.</div>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                         <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_1' class='gform_button button' value='SUBMIT' tabindex='112' onclick='if(window["gf_submitting_1"]){return false;}  window["gf_submitting_1"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_1"]){return false;} window["gf_submitting_1"]=true;  jQuery("#gform_1").trigger("submit",[true]); }' /> <input type='hidden' name='gform_ajax' value='form_id=1&amp;title=&amp;description=1&amp;tabindex=100' />
                                                            <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' />
                                                            <input type='hidden' class='gform_hidden' name='gform_submit' value='1' />
                                                            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                                            <input type='hidden' class='gform_hidden' name='state_1' value='WyJ7XCIxMS4xXCI6XCI1MDA2MjI0ZDk5YmUwOTEyZDcyMjc1ZGNlZTM3NDhkZlwiLFwiMTEuMlwiOlwiOWU1MTIwM2MwYTdkOWJkNDJmZTk2ZTkxOTM5NDFlMDdcIixcIjExLjNcIjpcIjYzOWViYTZlZmRiNTAzMWYwMWEwZjJhMjYxNjVjMjE3XCJ9IiwiZDdiMGE2Y2YxNWQ4NzQ3ZWI0YWY3MzQ0YzA5M2E4YTMiXQ==' />
                                                            <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' />
                                                            <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' />
                                                            <input type='hidden' name='gform_field_values' value='' />
                                                         </div>
                                                      </form>
                                                   </div>
                                                   <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_1' id='gform_ajax_frame_1' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
                                                   <script>window.addEventListener('DOMContentLoaded', function() {
                                                      gform.initializeOnLoaded( function() {gformInitSpinner( 1, 'https://bluebotics.com/wp-content/plugins/gravityforms/images/spinner.svg', true );jQuery('#gform_ajax_frame_1').on('load',function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_1').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());if(form_content.hasClass('gform_validation_error')){jQuery('#gform_wrapper_1').addClass('gform_validation_error');} else {jQuery('#gform_wrapper_1').removeClass('gform_validation_error');}setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top - mt); }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner( 1, 'https://bluebotics.com/wp-content/plugins/gravityforms/images/spinner.svg', true );jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting_1'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith(confirmation_content);jQuery(document).scrollTop(jQuery('#gf_1').offset().top - mt);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting_1'] = false;wp.a11y.speak(jQuery('#gform_confirmation_message_1').text());}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );
                                                      });
                                                   </script>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="fl-module fl-module-rich-text fl-node-6013c1d750ba5" data-node="6013c1d750ba5">
                                          <div class="fl-module-content fl-node-content">
                                             <div class="fl-rich-text">
                                                <p style="text-align: center;"><em>By clicking "Submit", you agree that BlueBotics SA can use your data to answer your request. You also confirm that you agree to <a href="https://bluebotics.com/privacy-policy/">BlueBotics' Privacy Policy.</a></em></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f918afab1aff" data-node="5f918afab1aff">
                        <div class="fl-row-content-wrap">
                           <div class="uabb-row-separator uabb-top-row-separator" ></div>
                           <div class="fl-row-content fl-row-full-width fl-node-content">
                              <div class="fl-col-group fl-node-5f918afab1af8 fl-col-group-responsive-reversed fl-col-group-equal-height fl-col-group-align-center" data-node="5f918afab1af8">
                                 <div class="fl-col fl-node-5f918afab1afa fl-visible-desktop-medium" data-node="5f918afab1afa">
                                    <div class="fl-col-content fl-node-content"></div>
                                 </div>
                                 <div class="fl-col fl-node-5f918afab1af9 fl-col-small fl-col-has-cols top_layer set-width" data-node="5f918afab1af9">
                                    <div class="fl-col-content fl-node-content">
                                       <div class="fl-col-group fl-node-5f918afab1afb fl-col-group-nested" data-node="5f918afab1afb">
                                          <div class="fl-col fl-node-5f918afab1afc top_layer" data-node="5f918afab1afc">
                                             <div class="fl-col-content fl-node-content">
                                                <div class="fl-module fl-module-heading fl-node-5f918afab1afd" data-node="5f918afab1afd">
                                                   <div class="fl-module-content fl-node-content">
                                                      <h3 class="fl-heading">
                                                         <span class="fl-heading-text">Find us</span>
                                                      </h3>
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
                     <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f918afab1b00" data-node="5f918afab1b00">
                        <div class="fl-row-content-wrap">
                           <div class="uabb-row-separator uabb-top-row-separator" ></div>
                           <div class="fl-row-content fl-row-full-width fl-node-content">
                              <div class="fl-col-group fl-node-5f918afab1b01" data-node="5f918afab1b01">
                                 <div class="fl-col fl-node-5f918afab1b02" data-node="5f918afab1b02">
                                    <div class="fl-col-content fl-node-content">
                                       <div class="fl-module fl-module-html fl-node-5f9199b7b336d" data-node="5f9199b7b336d">
                                          <div class="fl-module-content fl-node-content">
                                             <div class="fl-html">
                                                <iframe loading="lazy" src="about:blank" width="1300" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.032635901109!2d106.711999!3d-6.392948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e60a55555555%3A0x22428ae9359ba897!2sPT.%20Dwida%20Jaya%20Tama!5e0!3m2!1sen!2sus!4v1683260378751!5m2!1sen!2sus"></iframe>
                                                <noscript><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.032635901109!2d106.711999!3d-6.392948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e60a55555555%3A0x22428ae9359ba897!2sPT.%20Dwida%20Jaya%20Tama!5e0!3m2!1sen!2sus!4v1683260378751!5m2!1sen!2sus" width="1300" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></noscript>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f918afab1acd" data-node="5f918afab1acd">
                        <div class="fl-row-content-wrap">
                           <div class="uabb-row-separator uabb-top-row-separator" ></div>
                           <div class="fl-row-content fl-row-fixed-width fl-node-content">
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
         var labb_ajax_object = {"ajax_url":"https:\/\/bluebotics.com\/wp-admin\/admin-ajax.php","block_nonce":"27577d1676","gallery_nonce":"6b18eecc67"};
         var labb_settings = {"custom_css":""};
      </script>
      <script src='https://bluebotics.com/wp-content/plugins/addons-for-beaver-builder-premium/assets/js/labb-frontend.min.js?ver=3.1' id='labb-frontend-scripts-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.waypoints.min.js?ver=2.6.3.3' id='jquery-waypoints-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/28-layout.js?ver=1682259126' id='fl-builder-layout-28-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.ba-throttle-debounce.min.js?ver=2.6.3.3' id='jquery-throttle-js' defer></script>
      <!-- <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/8542c1b1b48ebc97585d92b9186f469f-layout-bundle.js?ver=1682258218' id='fl-builder-layout-bundle-8542c1b1b48ebc97585d92b9186f469f-js' defer></script> -->
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.magnificpopup.min.js?ver=2.6.3.3' id='jquery-magnificpopup-js' defer></script>
      <script id='fl-automator-js-extra'>
         var themeopts = {"medium_breakpoint":"992","mobile_breakpoint":"768","scrollTopPosition":"800"};
      </script>
      <script src='https://bluebotics.com/wp-content/themes/bb-theme/js/theme.min.js?ver=1682614687' id='fl-automator-js' defer></script>
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
         var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2,"code":"USD"},"base_url":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms\/images\/spinner.svg","version_hash":"669a140de0ea8af6b0e28af143bedc1d","strings":{"newRowAdded":"New row added.","rowRemoved":"Row removed","formSaved":"The form has been saved.  The content contains the link to return and complete the form."}};
      </script>
      <script id='gform_gravityforms-js-before'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.7.4' id='gform_gravityforms-js'></script>
      <script defer='defer' src='https://www.google.com/recaptcha/api.js?hl=en&#038;ver=6.1.1#038;render=explicit' id='gform_recaptcha-js'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/js/placeholders.jquery.min.js?ver=2.7.4' id='gform_placeholder-js'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/assets/js/dist/utils.min.js?ver=e53fa1c181b98fcc24f245ddeff3f288' id='gform_gravityforms_utils-js'></script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.min.js?ver=8d27ab6b5f180424b8c35a8bd6cf265b' id='gform_gravityforms_theme_vendors-js'></script>
      <script id='gform_gravityforms_theme-js-extra'>
         var gform_theme_config = {"common":{"form":{"honeypot":{"version_hash":"669a140de0ea8af6b0e28af143bedc1d"}}},"hmr_dev":"","public_path":"https:\/\/bluebotics.com\/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/"};
      </script>
      <script defer='defer' src='https://bluebotics.com/wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.min.js?ver=9c9598c0c1b63e5624987254d79ea8ef' id='gform_gravityforms_theme-js'></script>
      <script>window.addEventListener('DOMContentLoaded', function() {
         gform.initializeOnLoaded( function() { jQuery(document).on('gform_post_render', function(event, formId, currentPage){if(formId == 1) {if(typeof Placeholders != 'undefined'){
                                 Placeholders.enable();
                             }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} ) } );
         });
      </script>
      <script>window.addEventListener('DOMContentLoaded', function() {
         gform.initializeOnLoaded( function() { jQuery(document).trigger('gform_post_render', [1, 1]) } );
         });
      </script>
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
      </script><script data-no-minify="1" async src="https://bluebotics.com/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script>window.addEventListener('DOMContentLoaded', function() {!function(name,definition){if(typeof module!='undefined'&&module.exports)module.exports=definition()
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
