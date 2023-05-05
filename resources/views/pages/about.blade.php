@extends('layouts.app')

@section('css')
<link data-minify="1" rel='stylesheet' id='labb-icomoon-styles-css' href="{{asset('assets/wp-content/icomoon.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='slick-css' href="{{asset('assets/wp-content/slick.css?ver=1682265287')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='fl-builder-layout-24-css' href="{{asset('assets/wp-content/24-layout.css?ver=1682287855')}}" media='all' />

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
                                                    <span class="fl-heading-text">MEET BLUEBOTICS</span>
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
                                                    <span class="fl-heading-text">At BlueBotics we help companies meet the challenge of vehicle automation. We provide the navigation technology and expert support they need to bring their AGV, automated forklift or mobile robot successfully to market.</span>
                                                </h4>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
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
                                                            <span class="fl-heading-text">The reference in autonomous navigation</span>
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
                                                            <p>Established in Switzerland in 2001, we have spent twenty years refining our <a href="https://bluebotics.com/autonomous-navigation-technology/">natural feature navigation technology</a> (ANT) in order to make AGVs easier to install and operate. Over this period, we have helped companies to develop dozens of ANT driven AGVs, automated forklifts and mobile robots.</p>
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
                        <div class="fl-row fl-row-fixed-width fl-row-bg-photo fl-node-5f90a0b225f10 top-layer" data-node="5f90a0b225f10">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90a0b225f07" data-node="5f90a0b225f07">
                                    <div class="fl-col fl-node-5f90a0b225f0a fl-col-has-cols" data-node="5f90a0b225f0a">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f90a0b225f0b fl-col-group-nested" data-node="5f90a0b225f0b">
                                            <div class="fl-col fl-node-5f90a0b225f0c" data-node="5f90a0b225f0c">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-info-list fl-node-5f90a0b225f0d border-box obvia" data-node="5f90a0b225f0d">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-info-list">
                                                            <ul class="uabb-info-list-wrapper uabb-info-list-top">
                                                                <li class="uabb-info-list-item info-list-item-dynamic0">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic0">
                                                                        <h3 class="uabb-info-list-title">20 YRS</h3 >
                                                                        <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic0">
                                                                            <p>
                                                                            <h5 style="text-align: center;">
                                                                            <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" alt="" width="101" height="5" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" data-lazy-sizes="(max-width: 101px) 100vw, 101px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png"/>
                                                                            </picture>
                                                                            <noscript>
                                                                                <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png" alt="" width="101" height="5" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                </picture>
                                                                            </noscript>
                                                                            Of Natural<br />Feature<br />Navigation
                                                                            </h5>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li class="uabb-info-list-item info-list-item-dynamic1">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic1">
                                                                        <h3 class="uabb-info-list-title">4,000+</h3 >
                                                                        <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic1">
                                                                            <p>
                                                                            <h5 style="text-align: center;">
                                                                            <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" alt="" width="101" height="5" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" data-lazy-sizes="(max-width: 101px) 100vw, 101px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png"/>
                                                                            </picture>
                                                                            <noscript>
                                                                                <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png" alt="" width="101" height="5" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                </picture>
                                                                            </noscript>
                                                                            ANT driven<br />VEHICLES IN<br />OPERATION
                                                                            </h5>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li class="uabb-info-list-item info-list-item-dynamic2">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic2">
                                                                        <h3 class="uabb-info-list-title">1,000+</h3 >
                                                                        <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic2">
                                                                            <p>
                                                                            <h5 style="text-align: center;">
                                                                            <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" alt="" width="101" height="5" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" data-lazy-sizes="(max-width: 101px) 100vw, 101px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png"/>
                                                                            </picture>
                                                                            <noscript>
                                                                                <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png" alt="" width="101" height="5" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                </picture>
                                                                            </noscript>
                                                                            END-USER <br />INSTALLATIONS
                                                                            </h5>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li class="uabb-info-list-item info-list-item-dynamic3">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic3">
                                                                        <h3 class="uabb-info-list-title">10+</h3 >
                                                                        <div class="uabb-info-list-description uabb-text-editor info-list-description-dynamic3">
                                                                            <p>
                                                                            <h5 style="text-align: center;">
                                                                            <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20101%205&#039;%3E%3C/svg%3E" alt="" width="101" height="5" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" data-lazy-sizes="(max-width: 101px) 100vw, 101px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png"/>
                                                                            </picture>
                                                                            <noscript>
                                                                                <picture decoding="async" class="size-full wp-image-639 aligncenter" style="margin-top: 10px; margin-bottom: 20px;">
                                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png.webp 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png.webp 50w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png" alt="" width="101" height="5" srcset="https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2.png 101w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-24x1.png 24w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-50x2.png 50w, https://bluebotics.com/wp-content/uploads/2020/08/Yellow-Line2-75x4.png 75w" sizes="(max-width: 101px) 100vw, 101px"/>
                                                                                </picture>
                                                                            </noscript>
                                                                            MILLION KM<br />DRIVEN BY ANT
                                                                            </h5>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                    <p>At BlueBotics everything we do is driven by our three core values.</p>
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
                                                            <span class="fl-heading-text">Swiss<br>made</span>
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
                                                    <p>Our products are not only engineered in Switzerland, they are also produced here. Together with our network of suppliers, we deliver precise Swiss Made solutions, which guarantee your vehicles perform perfectly, both now and in the future.</p>
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
                                                            <span class="fl-heading-text">Swiss Made</span>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f90a73915c94" data-node="5f90a73915c94">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90a73915c89 fl-col-group-responsive-reversed fl-col-group-equal-height fl-col-group-align-center" data-node="5f90a73915c89">
                                    <div class="fl-col fl-node-5f90a73915c8f" data-node="5f90a73915c8f">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5f90a73915c93" data-node="5f90a73915c93">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>See how we evolved from EPFL start-up to the world's leading provider of natural feature navigation.</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f90a73915c8d fl-col-small fl-col-has-cols top_layer set-width" data-node="5f90a73915c8d">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f90a73915c90 fl-col-group-nested" data-node="5f90a73915c90">
                                            <div class="fl-col fl-node-5f90a73915c91" data-node="5f90a73915c91">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f90a73915c92" data-node="5f90a73915c92">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Our<br>story</span>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5fcd9dc44a8ff" data-node="5fcd9dc44a8ff">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5fcd9dc44a8fa fl-col-group-equal-height fl-col-group-align-bottom" data-node="5fcd9dc44a8fa">
                                    <div class="fl-col fl-node-5fcd9dc44a8fd" data-node="5fcd9dc44a8fd">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-labb-carousel fl-node-5fcd9dc44a8fe plan-caro" data-node="5fcd9dc44a8fe">
                                            <div class="fl-module-content fl-node-content">
                                                <div id="labb-carousel-5fcd9dc44a8fe" class="labb-carousel labb-container" data-settings='{"arrows":false,"dots":true,"autoplay":true,"autoplay_speed":5000,"animation_speed":600,"pause_on_hover":true,"display_columns":"4","scroll_columns":"1","gutter":"10","tablet_width":"800","tablet_display_columns":"2","tablet_scroll_columns":"2","tablet_gutter":"5","mobile_width":"480","mobile_display_columns":"1","mobile_scroll_columns":"1","mobile_gutter":"10"}'>
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone wp-image-948 size-medium">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/Capture-décran-2020-08-04-à-18.14.05@2x-300x212-1.jpg')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-srcset="{{asset('images/Capture-décran-2020-08-04-à-18.14.05@2x-300x212-1.jpg')}}" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/Capture-décran-2020-08-04-à-18.14.05@2x-300x212-1.jpg')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone wp-image-948 size-medium">
                                                                <source type="image/webp" srcset="{{asset('images/Capture-décran-2020-08-04-à-18.14.05@2x-300x212-1.jpg')}}" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/Capture-décran-2020-08-04-à-18.14.05@2x-300x212-1.jpg')}}" alt="" width="300" height="212" srcset="{{asset('images/Capture-décran-2020-08-04-à-18.14.05@2x-300x212-1.jpg')}}" sizes="(max-width: 300px) 100vw, 300px"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2001<br /></span>BlueBotics is founded as a spin-off of EPFL, the Swiss Federal Institute of Technology in Lausanne.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-2015">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2002-BlueBotics_autonomous_navigation_BlueBoticsAttendSwissNationalExhibition.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2002-BlueBotics_autonomous_navigation_BlueBoticsAttendSwissNationalExhibition.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-2015">
                                                                <source type="image/webp" srcset="{{asset('images/2002-BlueBotics_autonomous_navigation_BlueBoticsAttendSwissNationalExhibition.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2002-BlueBotics_autonomous_navigation_BlueBoticsAttendSwissNationalExhibition.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2002</span></p>
                                                        <p>BlueBotics participates in the Swiss National Exhibition, installing 11 RoboX robot guides that run for six months.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-2016">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2006-BlueBotics_autonomous_navigation_-FirstAGVpilotproject-Esatroll.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2006-BlueBotics_autonomous_navigation_-FirstAGVpilotproject-Esatroll.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-2016">
                                                                <source type="image/webp" srcset="{{asset('images/2006-BlueBotics_autonomous_navigation_-FirstAGVpilotproject-Esatroll.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2006-BlueBotics_autonomous_navigation_-FirstAGVpilotproject-Esatroll.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2006</span></p>
                                                        <p>First AGV pilot project signed with Esatroll.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-2017">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2007-BlueBotics_autonomous_navigation_-BlueBotics-designs-and-manufacturers-an-robotic-mobile-coffee-machine-for-Nespresso.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2007-BlueBotics_autonomous_navigation_-BlueBotics-designs-and-manufacturers-an-robotic-mobile-coffee-machine-for-Nespresso.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-2017">
                                                                <source type="image/webp" srcset="{{asset('images/2007-BlueBotics_autonomous_navigation_-BlueBotics-designs-and-manufacturers-an-robotic-mobile-coffee-machine-for-Nespresso.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2007-BlueBotics_autonomous_navigation_-BlueBotics-designs-and-manufacturers-an-robotic-mobile-coffee-machine-for-Nespresso.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2007</span></p>
                                                        <p>BlueBotics designs &amp; manufactures a robotic mobile coffee machine for Nespresso.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2009-BlueBotics_autonomous_navigation_BlueBotics_autonomous_navigation_-First-ANT®driven-AGVEsatroll-Paquito-goes-into-operation.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2009-BlueBotics_autonomous_navigation_BlueBotics_autonomous_navigation_-First-ANT®driven-AGVEsatroll-Paquito-goes-into-operation.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="{{asset('images/2009-BlueBotics_autonomous_navigation_BlueBotics_autonomous_navigation_-First-ANT®driven-AGVEsatroll-Paquito-goes-into-operation.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2009-BlueBotics_autonomous_navigation_BlueBotics_autonomous_navigation_-First-ANT®driven-AGVEsatroll-Paquito-goes-into-operation.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2009</span></p>
                                                        <p>First ANT driven AGV (Esatroll Paquito) goes into operation 24/7 in the food production industry.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2012-BlueBotics_autonomous_navigation_-ANT®-localization-launched-for-AGV-suppliers.jpg')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2012-BlueBotics_autonomous_navigation_-ANT®-localization-launched-for-AGV-suppliers.jpg')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="{{asset('images/2012-BlueBotics_autonomous_navigation_-ANT®-localization-launched-for-AGV-suppliers.jpg')}}"/>
                                                                <img decoding="async" src="{{asset('images/2012-BlueBotics_autonomous_navigation_-ANT®-localization-launched-for-AGV-suppliers.jpg')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2012</span></p>
                                                        <p>ANT localization launched for AGV suppliers who use their own vehicle control system.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2013-BlueBotics_autonomous_navigation_ANT®lite-launched-new.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2013-BlueBotics_autonomous_navigation_ANT®lite-launched-new.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="{{asset('images/2013-BlueBotics_autonomous_navigation_ANT®lite-launched-new.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2013-BlueBotics_autonomous_navigation_ANT®lite-launched-new.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2013</span></p>
                                                        <p>ANT lite is launched as a compact and simple navigation solution for service robotics.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2014-BlueBotics_autonomous_navigation_-ANT®server-fleet-management-software-launched.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2014-BlueBotics_autonomous_navigation_-ANT®server-fleet-management-software-launched.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="{{asset('images/2014-BlueBotics_autonomous_navigation_-ANT®server-fleet-management-software-launched.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2014-BlueBotics_autonomous_navigation_-ANT®server-fleet-management-software-launched.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2014</span></p>
                                                        <ul>
                                                            <li>- 100th ANT system delivered.</li>
                                                            <li>- ANT lite<sup>+</sup> launched to automate forklifts and AGVs.</li>
                                                            <li>- ANT server fleet management software launched.</li>
                                                            <li>- Oppent launches the EVOcart™ AGV for hospital logistics.</li>
                                                            <li>- Cleanfix launches the RA660 Navi commercial cleaning robot.</li>
                                                            <li>- Stöcklin launches the EagleANT automated forklift.</li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('images/2016-BlueBotics_autonomous_navigation_ANT®localizationlaunched.jpg.webp')}}" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="{{asset('images/2016-BlueBotics_autonomous_navigation_ANT®localizationlaunched.jpg.webp')}}"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="{{asset('images/2016-BlueBotics_autonomous_navigation_ANT®localizationlaunched.jpg.webp')}}"/>
                                                                <img decoding="async" src="{{asset('images/2016-BlueBotics_autonomous_navigation_ANT®localizationlaunched.jpg.webp')}}" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2016</span></p>
                                                        <p>ANT localization<sup>+</sup> launched, enabling customers to upgrade line-following AGVs to ANT.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="/wp-content/uploads/2020/12/2017-BlueBotics_autonomous_navigation_-500th-ANT®-system-delivered.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="/wp-content/uploads/2020/12/2017-BlueBotics_autonomous_navigation_-500th-ANT®-system-delivered.jpg"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="/wp-content/uploads/2020/12/2017-BlueBotics_autonomous_navigation_-500th-ANT®-system-delivered.jpg.webp"/>
                                                                <img decoding="async" src="/wp-content/uploads/2020/12/2017-BlueBotics_autonomous_navigation_-500th-ANT®-system-delivered.jpg" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2017</span></p>
                                                        <p>500th ANT system delivered.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="/wp-content/uploads/2020/12/2018-BlueBotics_autonomous_navigation_1000th-ANT®-system-delivered.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="/wp-content/uploads/2020/12/2018-BlueBotics_autonomous_navigation_1000th-ANT®-system-delivered.jpg"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="/wp-content/uploads/2020/12/2018-BlueBotics_autonomous_navigation_1000th-ANT®-system-delivered.jpg.webp"/>
                                                                <img decoding="async" src="/wp-content/uploads/2020/12/2018-BlueBotics_autonomous_navigation_1000th-ANT®-system-delivered.jpg" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2018</span></p>
                                                        <ul>
                                                            <li>- 1,000th ANT system delivered.</li>
                                                            <li>- BlueBotics signs distribution deal with Shanghai TONGPU Electronics Co. Ltd. to meet growing demand in China.</li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="/wp-content/uploads/2020/12/2019-BlueBotics_autonomous_navigation_-BlueBotics-signs-distribution-deals-with-ALTECH-Co.Ltd_.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="/wp-content/uploads/2020/12/2019-BlueBotics_autonomous_navigation_-BlueBotics-signs-distribution-deals-with-ALTECH-Co.Ltd_.jpg"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="/wp-content/uploads/2020/12/2019-BlueBotics_autonomous_navigation_-BlueBotics-signs-distribution-deals-with-ALTECH-Co.Ltd_.jpg.webp"/>
                                                                <img decoding="async" src="/wp-content/uploads/2020/12/2019-BlueBotics_autonomous_navigation_-BlueBotics-signs-distribution-deals-with-ALTECH-Co.Ltd_.jpg" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2019</span></p>
                                                        <p>BlueBotics signs distribution deals with ALTECH Co. Ltd. in Japan and Alumotion Srl in Italy.</p>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="/wp-content/uploads/2020/12/2020-BlueBotics_autonomous_navigation_-2000th-ANT®-driven-vehicle-goes-into-operation.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="" width="300" height="212" data-lazy-src="/wp-content/uploads/2020/12/2020-BlueBotics_autonomous_navigation_-2000th-ANT®-driven-vehicle-goes-into-operation.jpg"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="/wp-content/uploads/2020/12/2020-BlueBotics_autonomous_navigation_-2000th-ANT®-driven-vehicle-goes-into-operation.jpg.webp"/>
                                                                <img decoding="async" src="/wp-content/uploads/2020/12/2020-BlueBotics_autonomous_navigation_-2000th-ANT®-driven-vehicle-goes-into-operation.jpg" alt="" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2020</span></p>
                                                        <ul>
                                                            <li>- 2,000th ANT system delivered.</li>
                                                            <li>- BlueBotics signs distribution deal with MacPion Co. Ltd. to meet growing demand in South Korea.</li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                            <source type="image/webp" data-lazy-srcset="/wp-content/uploads/2021/02/10-Milions-Kilometers-2021-noANTRboxes-BLOGheader.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20212&#039;%3E%3C/svg%3E" alt="BlueBotics celebrates 2021" width="300" height="212" data-lazy-src="/wp-content/uploads/2021/02/10-Milions-Kilometers-2021-noANTRboxes-BLOGheader.jpg"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-948">
                                                                <source type="image/webp" srcset="/wp-content/uploads/2021/02/10-Milions-Kilometers-2021-noANTRboxes-BLOGheader.jpg.webp"/>
                                                                <img decoding="async" src="/wp-content/uploads/2021/02/10-Milions-Kilometers-2021-noANTRboxes-BLOGheader.jpg" alt="BlueBotics celebrates 2021" width="300" height="212"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2021</span></p>
                                                        <ul>
                                                            <li>- BlueBotics celebrates 20th anniversary.</li>
                                                            <li>- 3,000th ANT system delivered.</li>
                                                            <li>- ANT driven vehicles driven over 10 million km.</li>
                                                            <li>- BlueBotics named top 3 market leader.</li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <div class="caro-img">
                                                        <picture decoding="async" class="alignnone size-medium wp-image-16446">
                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20200&#039;%3E%3C/svg%3E"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20200&#039;%3E%3C/svg%3E" alt="ZAPI GROUP acquires BlueBotics." width="300" height="200" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="alignnone size-medium wp-image-16446">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg.webp"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg" alt="ZAPI GROUP acquires BlueBotics." width="300" height="200"/>
                                                            </picture>
                                                        </noscript>
                                                    </div>
                                                    <div class="caro-text">
                                                        <p><span style="color: #0061ac; font-size: 20px; font-family: 'obvia', san-serif; font-weight: 500;">2022</span></p>
                                                        <ul>
                                                            <li>- BlueBotics acquired by Zapi Group</li>
                                                            <li>- 4,000+ vehicles ANT driven vehicles in operation</li>
                                                            <li>- Launched ANTdriven.com</li>
                                                            <li>- Opened offices in China and United States</li>
                                                        </ul>
                                                    </div>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                </div>
                                                <!-- .labb-carousel -->	
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="meet-our-experts" class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f90a7c87f86e" data-node="5f90a7c87f86e">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f90a7c87f852" data-node="5f90a7c87f852">
                                    <div class="fl-col fl-node-5f90a7c87f869" data-node="5f90a7c87f869">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5f90a7c87f86a obvia" data-node="5f90a7c87f86a">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <h3>Meet Our Experts</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f90a7c87f86b" data-node="5f90a7c87f86b">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5fedfe53384ad" data-node="5fedfe53384ad">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5fedfe5338730 fl-col-group-equal-height fl-col-group-align-center fl-col-group-responsive-reversed" data-node="5fedfe5338730">
                                    <div class="fl-col fl-node-5fedfe5338735 fl-col-small fl-col-has-cols top_layer set-width" data-node="5fedfe5338735">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5fedfe8297a04 fl-col-group-nested" data-node="5fedfe8297a04">
                                            <div class="fl-col fl-node-5fedfe5338737" data-node="5fedfe5338737">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5fedfe5338738" data-node="5fedfe5338738">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Management</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fedfe5338733" data-node="5fedfe5338733">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fedfac69145d" data-node="5fedfac69145d">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fedfac6c0831 fl-col-group-custom-width" data-node="5fedfac6c0831">
                                    <div class="fl-col fl-node-5fcd97945e56b fl-col-small" data-node="5fcd97945e56b">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fcd97945e56c team-slide-box" data-node="5fcd97945e56c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fcd97945e56c" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2423 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="CEO Nicola Tomatis BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2423 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-1024x1024.jpg" alt="CEO Nicola Tomatis BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/CEO_NicolaTomatis_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Dr. Nicola TOMATIS</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>CEO</h4>
                                                                    <p>Languages:<br />EN, FR, IT, DE</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Nicola has been the CEO of BlueBotics since 2003 and joined its Board of Directors in 2015. He holds an M.Sc. in Computer Science from ETH Zurich and a PhD in Robotics from the EPFL in Lausanne. He received the IEEE Early Career Award in Robotics and Automation in 2008 and has twice been included in Bilan’s 300 Most Influential People in Switzerland.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/nicolatomatis/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-5fcd8f1e61080 fl-col-small" data-node="5fcd8f1e61080">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee0900aa06a team-slide-box" data-node="5fee0900aa06a">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee0900aa06a" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2445 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="VP Operation Patrick Balmer BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2445 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-1024x1024.jpg" alt="VP Operation Patrick Balmer BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Operation_PatrickBalmer_Cravate_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Patrick BALMER</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>VP Operations</h4>
                                                                    <p>Languages:<br />EN, FR, DE</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Patrick has worked with BlueBotics for more than a decade, first as a project manager before moving into the role of VP of Operations. After gaining his diploma of Engineering from the EPFL in Lausanne, Patrick worked with companies focused on med-tech and lasers.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/patrick-balmer/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-5fedff12227f1 fl-col-small" data-node="5fedff12227f1">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fcd8f3a18d22 team-slide-box" data-node="5fcd8f3a18d22">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fcd8f3a18d22" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20189 size-full" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px.jpg.webp 1200w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-768x768.jpg.webp 768w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%201200&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                                            <img decoding="async" width="1200" height="1200" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%201200&#039;%3E%3C/svg%3E" alt="Jacques Flamant - VP Sales - BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px.jpg 1200w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-768x768.jpg 768w" data-lazy-sizes="(max-width: 1200px) 100vw, 1200px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20189 size-full" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px.jpg.webp 1200w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-768x768.jpg.webp 768w" sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                                                <img decoding="async" width="1200" height="1200" src="https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px.jpg" alt="Jacques Flamant - VP Sales - BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px.jpg 1200w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/03/VP_Sales_JacquesFlamant_Cravate_1200x1200px-768x768.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Jacques FLAMANT</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>VP Sales</h4>
                                                                    <p>Languages:<br />EN, FR, ES</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p><span class="ui-provider yi b c d e f g h i j k l m n o p q r s t u v w x y z ab ac ae af ag ah ai aj ak" dir="ltr">Jacques leads BlueBotics’ global sales team, bringing a wealth of skills from his background in the automotive industry. Before joining BlueBotics, he led commercial sales teams with companies including NNG, Honeywell and Delphi Systems. When not at work, Jacques enjoys golfing, football and looking after his tropical fish aquarium. </span></p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://ch.linkedin.com/in/jacques-flamant-04633268" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-before uabb-creative-button-icon-before fab fa-linkedin"></i>
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                </a>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-u21ktpc507w8" data-node="u21ktpc507w8">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-r2u1l7ztjykv fl-col-group-custom-width" data-node="r2u1l7ztjykv">
                                    <div class="fl-col fl-node-qdf1y352pmob fl-col-small" data-node="qdf1y352pmob">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-ak1us5g2yr70 team-slide-box" data-node="ak1us5g2yr70">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-ak1us5g2yr70" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2446 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="VP Research Pierre Lamon BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2446 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-1024x1024.jpg" alt="VP Research Pierre Lamon BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Research_PierreLamon_Cravate_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Dr. Pierre LAMON</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>VP Research</h4>
                                                                    <p>Languages:<br />EN, FR, DE, IT</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Pierre leads BlueBotics' R&amp;D group and the software development team. He brings to the team technical skills in software and algorithms, including mapping, localization, calibration and outdoor robotics. While working towards his postdoc at the EPFL in Lausanne, Pierre led a project developing an autonomous smart car.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/pierrelamon/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-before uabb-creative-button-icon-before fab fa-linkedin"></i>
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                </a>
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
                                    <div class="fl-col fl-node-gy750u8439pd fl-col-small" data-node="gy750u8439pd">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fedff1222966 team-slide-box" data-node="5fedff1222966">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fedff1222966" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2447 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="VP Systems Gregoire Terrien BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2447 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-1024x1024.jpg" alt="VP Systems Gregoire Terrien BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/VP_Systems_GregoireTerrien_Cravate_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Grégoire TERRIEN</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>VP Development</h4>
                                                                    <p>Languages:<br />EN, FR, DE, IT</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Grégoire has been with BlueBotics since the company was founded in 2001, having gained a Master’s degree in Microengineering from the EPFL in Lausanne. As the VP of Development, he oversees the team responsible for technical customer partnerships as well as mechatronics development.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/gr%C3%A9goire-terrien/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-u67n45agsfvi fl-col-small" data-node="u67n45agsfvi">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee089ce31d0 team-slide-box" data-node="5fee089ce31d0">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee089ce31d0" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2424 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Head of Marketing Matt Wade BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2424 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-1024x1024.jpg" alt="Head of Marketing Matt Wade BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/HeadofMarketing_MattWade_Cravate_HD_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Matt WADE</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>VP Marketing</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Matt joined BlueBotics in 2019 to head up the firm's growing marketing function. A well-travelled ex-journalist, he has a wealth of experience working with cutting-edge technology companies across the globe.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/matt-wade-switzerland/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fee08f9a6597" data-node="5fee08f9a6597">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fee08fa0948d fl-col-group-custom-width" data-node="5fee08fa0948d">
                                    <div class="fl-col fl-node-5fedff1c87aa1 fl-col-small fl-visible-desktop-medium" data-node="5fedff1c87aa1">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-5fee0902a787a fl-col-small" data-node="5fee0902a787a">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-5fee0900a9f1e fl-col-small" data-node="5fee0900a9f1e">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-5fee09b52f001 fl-col-small fl-visible-desktop-medium" data-node="5fee09b52f001">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fedfe389f09e" data-node="5fedfe389f09e">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fedfe38d578b" data-node="5fedfe38d578b">
                                    <div class="fl-col fl-node-5fedfe38d59ff" data-node="5fedfe38d59ff">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5f90a80e9ac84" data-node="5f90a80e9ac84">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p style="text-align: center;">If you partner with BlueBotics, these are<br />
                                                    the staff you’ll work with the most.
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fee07bfdce81" data-node="5fee07bfdce81">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fee07c03e82d fl-col-group-custom-width" data-node="5fee07c03e82d">
                                    <div class="fl-col fl-node-5f90a9a4a5e24 fl-visible-desktop-medium" data-node="5f90a9a4a5e24">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-5f90a98797670 fl-col-small fl-col-has-cols top_layer set-width" data-node="5f90a98797670">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5fee07a00ed88 fl-col-group-nested" data-node="5fee07a00ed88">
                                            <div class="fl-col fl-node-5f90a98797674" data-node="5f90a98797674">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f90a98797675" data-node="5f90a98797675">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Systems <br>Engineering</span>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-5f90a826851bd top-layer" data-node="5f90a826851bd">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fcd8f1e60d91 fl-col-group-custom-width" data-node="5fcd8f1e60d91">
                                    <div class="fl-col fl-node-5fcd97945e565 fl-col-small" data-node="5fcd97945e565">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fcd97945e566 team-slide-box" data-node="5fcd97945e566">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fcd97945e566" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19429 size-full" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px.jpg.webp 900w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-100x100.jpg.webp 100w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20900%20900&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 900px) 100vw, 900px"/>
                                                                            <img decoding="async" width="900" height="900" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20900%20900&#039;%3E%3C/svg%3E" alt="Head of Systems - Mathias Perollaz" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px.jpg 900w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-100x100.jpg 100w" data-lazy-sizes="(max-width: 900px) 100vw, 900px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19429 size-full" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px.jpg.webp 900w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-100x100.jpg.webp 100w" sizes="(max-width: 900px) 100vw, 900px"/>
                                                                                <img decoding="async" width="900" height="900" src="https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px.jpg" alt="Head of Systems - Mathias Perollaz" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px.jpg 900w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/HeadofSystems_NEW_MathiasPerollaz_900x900px-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Dr. Mathias PERROLLAZ</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Head of Systems</h4>
                                                                    <p>Languages:<br />EN, FR, IT</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Mathias gained an engineering degree from Grenoble INPG and a PhD in computer vision from UPMC in Paris, before working in academic research with a focus on robotics and intelligent vehicle applications. He joined BlueBotics as a support engineer in 2015, and has led the Systems Engineering team since 2019.</p>
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
                                    <div class="fl-col fl-node-5fcd8f1e61075 fl-col-small" data-node="5fcd8f1e61075">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-qsrj2fvbazmg team-slide-box" data-node="qsrj2fvbazmg">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-qsrj2fvbazmg" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-18927 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Amjad Al Aufi." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-18927 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-1024x1024.jpg" alt="Systems Engineer Amjad Al Aufi." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_AmjadAl-Aufi_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Amjad AL AUFI</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, AR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Amjad studied mechanical Engineering at North Carolina State University in Raleigh before joining the BlueBotics team in Garner, USA. When not supporting clients with their vehicle automation projects, Amjad enjoys hiking through the beautiful North Carolina mountains.</p>
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
                                    <div class="fl-col fl-node-5fcd8f1e6107c fl-col-small" data-node="5fcd8f1e6107c">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fcd90e2bb9ea team-slide-box" data-node="5fcd90e2bb9ea">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fcd90e2bb9ea" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2433 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Antoine Aupee BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2433 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-1024x1024.jpg" alt="Systems Engineer Antoine Aupee BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_AntoineAupee_1200x1200px-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Antoine AUPEE</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Lead Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Antoine joined BlueBotics after working on a robotic exoskeleton for his Master’s thesis at ETH Zurich. At BlueBotics, Antoine works with customers on their vehicle installations, and as part of the R&amp;D team he also helps to develop projects such as the mini™ UVC.</p>
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
                                    <div class="fl-col fl-node-5fcd8f1e6107f fl-col-small" data-node="5fcd8f1e6107f">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-60464b393ffe7 team-slide-box" data-node="60464b393ffe7">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-60464b393ffe7" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13437 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Jean-Francois Burnier." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13437 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-1024x1024.jpg" alt="Jean-Francois Burnier." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_JeanFrancoisBurnier_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Jean Francois BURNIER</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, DE, ES</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Jean-François (‘JF’) Burnier gained his Master’s of Science in Microengineering from the EPFL in Lausanne. He also interned at NASA before joining the BlueBotics support team and works in four different languages (and in as many time zones) to ensure the best possible outcomes for our customers.</p>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-5fcd97945dfe0 top_layer" data-node="5fcd97945dfe0">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fcd97945e564 fl-col-group-custom-width" data-node="5fcd97945e564">
                                    <div class="fl-col fl-node-5fee05e8e35f4 fl-col-small" data-node="5fee05e8e35f4">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-48bsjrktv729 team-slide-box" data-node="48bsjrktv729">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-48bsjrktv729" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19770 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Iven Dong Systems Engineer BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19770 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-1024x1024.jpg" alt="Iven Dong Systems Engineer BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/01/Systems_IvanDong_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Iven DONG</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, CN</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Iven gained his bachelor’s degree at Shanghai University and then Master’s degrees at the University of Edinburgh and University College London. He speaks English, Mandarin, Japanese and a little Urdu. When not at work in BlueBotics’ Shanghai office, Iven enjoys learning  languages.</p>
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
                                    <div class="fl-col fl-node-5fcd97945e567 fl-col-small" data-node="5fcd97945e567">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee05e8e35f9 team-slide-box" data-node="5fee05e8e35f9">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee05e8e35f9" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-15671" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Guillaume Dupré la Tour" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="http://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-15671" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="http://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-1024x1024.jpg" alt="Guillaume Dupré la Tour" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/11/Systems_GuillaumeDupreLaTour_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Guillaume DUPRÉ LA TOUR</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Guillaume joined the BlueBotics team after studying aerospace engineering at Ecole Centrale de Lyon in France and working with both drones and industrial robotics. Outside of work, Guillaume enjoys mountain biking and ski touring through the Alps.</p>
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
                                    <div class="fl-col fl-node-5fcd97945e569 fl-col-small" data-node="5fcd97945e569">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee069049fb6 team-slide-box" data-node="5fee069049fb6">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee069049fb6" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13442 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Armand Lamouille." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13442 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-1024x1024.jpg" alt="Armand Lamouille." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/07/Systems_ArmandLamouille_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Armand LAMOUILLE</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Senior Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, ES</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Armand gained his Master’s degree in Microengineering from the EPFL in Lausanne, gathering user requirements for an intelligent mobile packaging cobot for his final project. Today Armand still works closely with customers to create the best possible designs, and is part of the team behind the mini™ UVC.</p>
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
                                    <div class="fl-col fl-node-5fee05e8e35f6 fl-col-small" data-node="5fee05e8e35f6">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-60538ae3b6cae team-slide-box" data-node="60538ae3b6cae">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-60538ae3b6cae" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2435 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Baptiste Mottet BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2435 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-1024x1024.jpg" alt="Systems Engineer Baptiste Mottet BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_BaptisteMottet_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Baptiste MOTTET</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, DE</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Baptiste gained his Master’s degree in Electrical Engineering and I.T. from the ETH in Zurich, where he worked on projects such as asteroid mapping and a juggling machine. As a BlueBotics systems engineer, Baptiste puts his skills to work solving problems both big and small for customers around the globe.</p>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-605387c465e9a top_layer" data-node="605387c465e9a">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-605387c466534 fl-col-group-custom-width" data-node="605387c466534">
                                    <div class="fl-col fl-node-605387c466538 fl-col-small" data-node="605387c466538">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-611fb5903c9dc team-slide-box" data-node="611fb5903c9dc">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-611fb5903c9dc" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13784 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Benoît Pasquier." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13784 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-1024x1024.jpg" alt="Benoît Pasquier." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/08/Systems_BenoîtPasquier_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Benoît PASQUIER</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p><span lang="en-CH">Benoît joined BlueBotics after completing his Master’s thesis at the </span><span lang="EN-US">Harvard </span><span lang="en-CH">M</span><span lang="EN-US">icrorobotics </span><span lang="en-CH">Lab where he worked on the analytical simulation of jumping micro-robots. He has previously worked with the Swiss </span><span lang="EN-US">meteorological </span><span lang="en-CH">service to improve the prediction of lightning strikes. In his spare time, Benoît enjoys ski touring and is learning to paraglide.</span></p>
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
                                    <div class="fl-col fl-node-605387c46653a fl-col-small" data-node="605387c46653a">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fcd97945e568 team-slide-box" data-node="5fcd97945e568">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fcd97945e568" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2443 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Yannick Poffet BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2443 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-1024x1024.jpg" alt="Systems Engineer Yannick Poffet BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_YannickPoffet_1200x1200px-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Yannick POFFET</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Expert Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Yannick joined the R&amp;D team as a Systems Engineer after gaining his Master of Engineering in Mechanics, Robotics and Control Theory from the EPFL in Lausanne. At BlueBotics, Yannick develops AGV functionalities and ensures compatibility with new components. In his free time, Yannick is a climber, kitesurfer, and Rubik’s Cube collector.</p>
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
                                    <div class="fl-col fl-node-605387c46653c fl-col-small" data-node="605387c46653c">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fcd97945e56a team-slide-box" data-node="5fcd97945e56a">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fcd97945e56a" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2438 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Guillaume Rossa BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2438 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-1024x1024.jpg" alt="Systems Engineer Guillaume Rossa BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_GuillaumeRossa_1200x1200px-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Guillaume ROSA-SERRANO</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Senior Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, ES</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Guillaume works on every aspect of AGVs, from design and testing to commissioning and support. He gained a Master’s degree in Computer Science from the UQAC in Quebec after studying Numerical Systems at ENSEM in Nancy, France. Guillaume is a keen pilot so when not at work he can often be found in the clouds.</p>
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
                                    <div class="fl-col fl-node-605387c46653e fl-col-small" data-node="605387c46653e">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee0751bdb8a team-slide-box" data-node="5fee0751bdb8a">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee0751bdb8a" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-8464 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Adrien Salgado - Systems Engineer at BlueBotics." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-8464 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-1024x1024.jpg" alt="Adrien Salgado - Systems Engineer at BlueBotics." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_AdrienSalgado_1200x1200px-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Adrien SALGADO</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Senior Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Adrien joined BlueBotics’ Systems team in 2018. He works closely with customers around the world at every stage of the AGV lifecycle, from concept to installation and support. Adrien gained his BASc in Industrial Automation from the HEIG in Vaud and has several years of hands-on experience in commercial robotics systems.</p>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-6053889d5c03a top_layer" data-node="6053889d5c03a">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-6053889d5c47b fl-col-group-custom-width" data-node="6053889d5c47b">
                                    <div class="fl-col fl-node-6053889d5c47e fl-col-small" data-node="6053889d5c47e">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee05e8e35f5 team-slide-box" data-node="5fee05e8e35f5">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee05e8e35f5" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-8445 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Victor Twardowski - Systems Engineer at BlueBotics." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-8445 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-1024x1024.jpg" alt="Victor Twardowski - Systems Engineer at BlueBotics." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/02/Systems_VictorTwardowski_1200x1200px-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Victor TWARDOWSKI</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, IT</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Victor joined BlueBotics as a Systems Engineer after gaining a Master of Engineering in Mechatronics from Politecnico di Torino in Italy and interning as a project manager leading a mechatronics R&amp;D project. At BlueBotics, Victor supports commissioning and project installations, both in-person and remotely.</p>
                                                                </div>
                                                                <a href="" target="_self"  class="uabb-callout-cta-link"></a>				
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-6053889d5c480 fl-col-small" data-node="6053889d5c480">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee069049fb2 team-slide-box" data-node="5fee069049fb2">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee069049fb2" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2439 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Hugo Viard BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2439 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-1024x1024.jpg" alt="Systems Engineer Hugo Viard BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Systems_HugoViard_1200x1200px-1.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Hugo VIARD</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Hugo holds Master’s degrees in Microengineering (from the EPFL in Lausanne), and in Mechatronics, Robotics and Automation Engineering (from the University of California, Berkeley). Hugo works in BlueBotics’ R&amp;D and Engineering teams and helped create the Cleanfix autonomous cleaning machine.</p>
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
                                    <div class="fl-col fl-node-6053889d5c482 fl-col-small" data-node="6053889d5c482">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee05e8e35f7 team-slide-box" data-node="5fee05e8e35f7">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee05e8e35f7" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-12769 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Systems Engineer Tao Wu." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-12769 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-1024x1024.jpg" alt="Systems Engineer Tao Wu." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/06/Systems_TaoWu_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Tao WU</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, CN</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Tao is an expert roboticist with experience in China, France and Switzerland. He holds a Master’s degree in mechatronics from the University of Montpellier, with a focus on robotics and automation. At BlueBotics Tao focuses on process improvements to help clients get the best results.</p>
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
                                    <div class="fl-col fl-node-6053889d5c484 fl-col-small" data-node="6053889d5c484">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-p2539dtk1bgf team-slide-box" data-node="p2539dtk1bgf">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-p2539dtk1bgf" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19434 size-full" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px.jpg.webp 900w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-100x100.jpg.webp 100w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20900%20900&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 900px) 100vw, 900px"/>
                                                                            <img decoding="async" width="900" height="900" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20900%20900&#039;%3E%3C/svg%3E" alt="Enginneer Systems - Thomas Wurtz" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px.jpg 900w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-100x100.jpg 100w" data-lazy-sizes="(max-width: 900px) 100vw, 900px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19434 size-full" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px.jpg.webp 900w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-100x100.jpg.webp 100w" sizes="(max-width: 900px) 100vw, 900px"/>
                                                                                <img decoding="async" width="900" height="900" src="https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px.jpg" alt="Enginneer Systems - Thomas Wurtz" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px.jpg 900w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/Systems_ThomasWurtz-900x900px-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Thomas WURTZ</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Systems Engineer</h4>
                                                                    <p>Languages:<br />EN, FR, DE</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Thomas joined the BlueBotics team after studying embedded systems engineering at Polytech Montpellier, with a focus on robotic controls, computer vision and electronic design. When not working on automated vehicles, Thomas enjoys go-karting and working on cars. If no vehicles are available, Thomas will take a hike through the beautiful Swiss countryside.</p>
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
                                                            <span class="fl-heading-text">Operations</span>
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
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-11316 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="BlueBotics Project Manager Samuel Chevalley." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-11316 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-1024x1024.jpg" alt="BlueBotics Project Manager Samuel Chevalley." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/03/BlueBotics-Project-Manager-Samuel-Chevalley.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Samuel CHEVALLEY</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Project Manager</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Samuel studied Microtechnics Engineering at the HEIG in Vaud, Switzerland and worked in mechanical designing and engineering before joining BlueBotics as a Project Manager. When not at work, Samuel plays drums in two bands and designs and 3D prints bespoke creations.</p>
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
                                    <div class="fl-col fl-node-5fee0357517b9 fl-col-small" data-node="5fee0357517b9">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-yr1f3cguwaxi team-slide-box" data-node="yr1f3cguwaxi">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-yr1f3cguwaxi" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20178 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Richard Revangue Project Manager BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20178 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-1024x1024.jpg" alt="Richard Revangue Project Manager BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_RichardRevangue_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Richard REVANGUE</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Project Manager</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Richard was born and raised in Paris before moving to Switzerland to work with BlueBotics. Before joining the team, he studied aeronautical engineering at IPSA in Paris, and worked as a Services Sales Expert at Dassault Systems. Outside of work, Richard enjoys travelling, music and playing football.</p>
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
                                    <div class="fl-col fl-node-5fee0357517bb fl-col-small" data-node="5fee0357517bb">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-6046534544976 team-slide-box" data-node="6046534544976">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-6046534544976" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20184 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Alexandra Zehr - Project Manager - BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-20184 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-1024x1024.jpg" alt="Alexandra Zehr - Project Manager - BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/03/Operation_AlexandraZehr_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Alexandra ZEHR</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Project Manager</h4>
                                                                    <p>Languages:<br />EN, FR, ES</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p><span class="ui-provider yi b c d e f g h i j k l m n o p q r s t u v w x y z ab ac ae af ag ah ai aj ak" dir="ltr">Alexandra has a wealth of experience, having worked within sectors ranging from ecommerce to the Swiss watch industry, with roles including customer experience, product and project management. Alexandra grew up in Spain, gained her MA in the USA, and has since returned to her mother country, Switzerland. A self-described epicurean, Alexandra enjoys food and wine, as well as travelling.</span></p>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fee0866c42a8" data-node="5fee0866c42a8">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fee0867440c5 fl-col-group-custom-width" data-node="5fee0867440c5">
                                    <div class="fl-col fl-node-5fee039d5e890 fl-visible-desktop-medium" data-node="5fee039d5e890">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-5fee039d5e891 fl-col-small fl-col-has-cols top_layer set-width" data-node="5fee039d5e891">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5fee039d5e892 fl-col-group-nested" data-node="5fee039d5e892">
                                            <div class="fl-col fl-node-5fee039d5e893" data-node="5fee039d5e893">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5fee039d5e894" data-node="5fee039d5e894">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Sales &<br>Marketing</span>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-60464aa75d8e7 top-layer" data-node="60464aa75d8e7">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-60464aa770e83 fl-col-group-custom-width" data-node="60464aa770e83">
                                    <div class="fl-col fl-node-60464aa770e87 fl-col-small" data-node="60464aa770e87">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-60464aa770e8a team-slide-box" data-node="60464aa770e8a">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-60464aa770e8a" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2429 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Area Sales Manager David Beguin BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2429 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-1024x1024.jpg" alt="Area Sales Manager David Beguin BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_DavidBeguin_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">David BEGUIN</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Senior Sales Manager, N. Am</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>David is based in BlueBotics’ Swiss HQ, but works most closely with our North American customer base. With a background split between portfolio management and marketing, David generates new customer partnerships before helping these companies move from concept to creation to market launch and beyond.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/david-beguin/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-60464aa770e89 fl-col-small" data-node="60464aa770e89">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-wtznuia97bom team-slide-box" data-node="wtznuia97bom">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-wtznuia97bom" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19263 size-full" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/kap-4.jpg.webp 1200w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-100x100.jpg.webp 100w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%201200&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                                            <img decoding="async" width="1200" height="1200" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201200%201200&#039;%3E%3C/svg%3E" alt="Sales Manager Kap Choi." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/10/kap-4.jpg 1200w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-100x100.jpg 100w" data-lazy-sizes="(max-width: 1200px) 100vw, 1200px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/10/kap-4.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19263 size-full" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/10/kap-4.jpg.webp 1200w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-100x100.jpg.webp 100w" sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                                                <img decoding="async" width="1200" height="1200" src="https://bluebotics.com/wp-content/uploads/2022/10/kap-4.jpg" alt="Sales Manager Kap Choi." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2022/10/kap-4.jpg 1200w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/10/kap-4-100x100.jpg 100w" sizes="(max-width: 1200px) 100vw, 1200px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Kap CHOI</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Sales Manager USA</h4>
                                                                    <p>Languages:<br />EN</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p><span lang="EN-US">Kap gained a BS in Welding Engineering from Ohio State before completing his MBA at Xavier University. </span><span lang="EN-US">Prior to joining BlueBotics</span><span lang="EN-GB">’</span><span lang="EN-US"> team in the USA, he worked for major robotics companies (such as FANUC Robotics, Kawasaki Robotics) and systems integrators (such as Eclipse Automation). When not at work, Kap enjoys </span><span lang="EN-GB">playing </span><span lang="EN-US">tennis, softball and pickleball.</span></p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/kap-choi-39a57355/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-60464aa770e8b fl-col-small" data-node="60464aa770e8b">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-60464aa770e8c team-slide-box" data-node="60464aa770e8c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-60464aa770e8c" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2431 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Area Sales Manager Sander Burghardt BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-2431 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-1024x1024.jpg" alt="Area Sales Manager Sander Burghardt BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/Sales_SanderBurghardt_Cravate_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Sander BURGHARDT</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Sales Manager, Europe</h4>
                                                                    <p>Languages:<br />EN, FR, DE, IT, TR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>The most multilingual team member at BlueBotics, Sander puts his five perfectly-spoken languages to work driving the company's commercial growth across Europe. A highly experienced sales professional, he holds a Masters in International Business from Sorbonne University in Paris.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/sander-burghardt/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-60e42bd0b9257 top-layer" data-node="60e42bd0b9257">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-60e42bd0b9476 fl-col-group-custom-width" data-node="60e42bd0b9476">
                                    <div class="fl-col fl-node-60e42bd0b9479 fl-col-small" data-node="60e42bd0b9479">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-60e42bd0b947c team-slide-box" data-node="60e42bd0b947c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-60e42bd0b947c" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13424 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Fanny Dorta." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-13424 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-1024x1024.jpg" alt="Fanny Dorta." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/07/Sales_FannyDorta_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Fanny DORTA</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Sales Manager, APAC</h4>
                                                                    <p>Languages:<br />EN, FR</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Fanny holds Master’s degrees in Materials Science, and in Management of Technology &amp; Entrepreneurship from EPFL in Lausanne. Before joining BlueBotics, she worked in Sales &amp; Business Development for high-tech SMEs in Switzerland and Shanghai. When not working, Fanny enjoys travelling and hiking in Switzerland and around the world.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/fanny-dorta-ecarla-050934a/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-60e42bd0b947b fl-col-small" data-node="60e42bd0b947b">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-0jpo34ltkv2n team-slide-box" data-node="0jpo34ltkv2n">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-0jpo34ltkv2n" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19775 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Martin Hu Area Sales Manager BlueBotics" itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-19775 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-1024x1024.jpg" alt="Martin Hu Area Sales Manager BlueBotics" itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/01/Sales_MartinHu_1200x1200px.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Martin HU</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Sales Manager, China</h4>
                                                                    <p>Languages:<br />EN, CN</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Martin studied  at Shandong University of Technology  and worked in Nigeria and Italy before joining the BlueBotics team in Shanghai . Martin speaks English and Chinese, and when not in the office he enjoys running.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/martin-hu-b86253176/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                                    <div class="fl-col fl-node-60e42bd0b947d fl-col-small" data-node="60e42bd0b947d">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-slide-box fl-node-5fee08565780d team-slide-box" data-node="5fee08565780d">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-slide-box-wrap">
                                                    <div class="uabb-slide-type uabb-style2" data-style="style2">
                                                    <div id="uabb-slide-box-wrap-5fee08565780d" class="uabb-slide-box">
                                                        <div class="uabb-slide-face uabb-slide-front uabb-slide-photo-above-title">
                                                            <div class="uabb-slide-box-section ">
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-above-img">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-12050 size-large" title="" itemprop="image">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales.jpg.webp 1200w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            <img decoding="async" width="1024" height="1024" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%201024&#039;%3E%3C/svg%3E" alt="Jinglei Gruel." itemprop="image" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales.jpg 1200w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-1024x1024.jpg"/>
                                                                            </picture>
                                                                            <noscript>
                                                                            <picture decoding="async" class="uabb-photo-img wp-image-12050 size-large" title="" itemprop="image">
                                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-1024x1024.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-300x300.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-150x150.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-768x768.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-50x50.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-100x100.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales.jpg.webp 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                                <img decoding="async" width="1024" height="1024" src="https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-1024x1024.jpg" alt="Jinglei Gruel." itemprop="image" srcset="https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-1024x1024.jpg 1024w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-300x300.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-150x150.jpg 150w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-768x768.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-50x50.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales-100x100.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/04/Jinglei-Gruel-BlueBotics-Sales.jpg 1200w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                            </picture>
                                                                            </noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-front-right-text">
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <h3 class="uabb-slide-face-text-title">Jinglei ZHU</h3>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                <div class="uabb-slide-box-section-content uabb-text-editor">
                                                                    <h4>Sales manager, China</h4>
                                                                    <p>Languages:<br />EN, CN, DE</p>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                    -->
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                                <div class="uabb-slide-dropdown"><span class="uabb-icon-wrap">
                                                                <span class="uabb-icon">
                                                                <i class="fas fa-angle-down"></i>
                                                                </span>
                                                                </span>
                                                                </div>
                                                                <!-- Inline Block Space Fix
                                                                -->
                                                            </div>
                                                            <!-- Overlay for Style 1 -->
                                                        </div>
                                                        <!-- END .front -->
                                                        <div class="uabb-slide-face uabb-slide-down">
                                                            <div class="uabb-slide-box-section- ">
                                                                <h3 class="uabb-slide-back-text-title">Slide Box Back</h3>
                                                                <div class="uabb-slide-down-box-section-content uabb-text-editor">
                                                                <p>Jinglei is an experienced international business manager, responsible for BlueBotics’ commercial activities in China, with a focus on increasing productivity. As well as a law degree from Tongji University in Shanghai, she holds an MBA from Kedge Business School.</p>
                                                                </div>
                                                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-center uabb-creative-button-center uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon uabb-creative-button-icon-no-text">
                                                                <a href="https://www.linkedin.com/in/jingleizhu/" target="_blank" rel="noopener" class="uabb-button ast-button uabb-creative-button uabb-creative-default-btn   "  role="button" aria-label="">
                                                                <span class="uabb-button-text uabb-creative-button-text"></span>
                                                                <i class="uabb-button-icon uabb-creative-button-icon uabb-button-icon-after uabb-creative-button-icon-after fab fa-linkedin"></i>
                                                                </a>
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
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-gradient fl-node-60538ed0db549 top_layer" data-node="60538ed0db549">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-60538ed0db8bf fl-col-group-custom-width" data-node="60538ed0db8bf">
                                    <div class="fl-col fl-node-60538ed0db8c2 fl-col-small fl-visible-desktop-medium" data-node="60538ed0db8c2">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-60538ed0db8c4 fl-col-small" data-node="60538ed0db8c4">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-60538ed0db8c5 fl-col-small" data-node="60538ed0db8c5">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-60538ed0db8c6 fl-col-small fl-visible-desktop-medium" data-node="60538ed0db8c6">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fc9451662c12" data-node="5fc9451662c12">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fb57baa76e91 fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5fb57baa76e91">
                                    <div class="fl-col fl-node-5fb57baa76e98 fl-col-small" data-node="5fb57baa76e98">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76e9c" data-node="5fb57baa76e9c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1290 size-medium" itemprop="image" title="Logo-ABB">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/arcwood_.png')}} 300w, {{asset('images/logo/arcwood_.png')}} 50w, {{asset('images/logo/arcwood_.png')}} 100w, {{asset('images/logo/arcwood_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-ABB" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/arcwood_.png')}} 300w, {{asset('images/logo/arcwood_.png')}} 24w, {{asset('images/logo/arcwood_.png')}} 50w, {{asset('images/logo/arcwood_.png')}} 100w, {{asset('images/logo/arcwood_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/arcwood_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1290 size-medium" itemprop="image" title="Logo-ABB">
                                                                <source type="image/webp" srcset="{{asset('images/logo/arcwood_.png')}} 300w, {{asset('images/logo/arcwood_.png')}} 50w, {{asset('images/logo/arcwood_.png')}} 100w, {{asset('images/logo/arcwood_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/arcwood_.png')}}" alt="Logo-ABB" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/arcwood_.png')}} 300w, {{asset('images/logo/arcwood_.png')}} 24w, {{asset('images/logo/arcwood_.png')}} 50w, {{asset('images/logo/arcwood_.png')}} 100w, {{asset('images/logo/arcwood_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76e99 fl-col-small" data-node="5fb57baa76e99">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76e9d" data-node="5fb57baa76e9d">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1293 size-medium" itemprop="image" title="Logo-ASTI">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/djt_.png')}} 300w, {{asset('images/logo/djt_.png')}} 50w, {{asset('images/logo/djt_.png')}} 100w, {{asset('images/logo/djt_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-ASTI" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/djt_.png')}} 300w, {{asset('images/logo/djt_.png')}} 24w, {{asset('images/logo/djt_.png')}} 50w, {{asset('images/logo/djt_.png')}} 100w, {{asset('images/logo/djt_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/djt_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1293 size-medium" itemprop="image" title="Logo-ASTI">
                                                                <source type="image/webp" srcset="{{asset('images/logo/djt_.png')}} 300w, {{asset('images/logo/djt_.png')}} 50w, {{asset('images/logo/djt_.png')}} 100w, {{asset('images/logo/djt_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/djt_.png')}}" alt="Logo-ASTI" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/djt_.png')}} 300w, {{asset('images/logo/djt_.png')}} 24w, {{asset('images/logo/djt_.png')}} 50w, {{asset('images/logo/djt_.png')}} 100w, {{asset('images/logo/djt_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76e9a fl-col-small" data-node="5fb57baa76e9a">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76e9e" data-node="5fb57baa76e9e">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1321 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/Hond_.png')}} 300w, {{asset('images/logo/Hond_.png')}} 50w, {{asset('images/logo/Hond_.png')}} 100w, {{asset('images/logo/Hond_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Stocklin" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/Hond_.png')}} 300w, {{asset('images/logo/Hond_.png')}} 24w, {{asset('images/logo/Hond_.png')}} 50w, {{asset('images/logo/Hond_.png')}} 100w, {{asset('images/logo/Hond_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/Hond_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1321 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('images/logo/Hond_.png')}} 300w, {{asset('images/logo/Hond_.png')}} 50w, {{asset('images/logo/Hond_.png')}} 100w, {{asset('images/logo/Hond_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/Hond_.png')}}" alt="Stocklin" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/Hond_.png')}} 300w, {{asset('images/logo/Hond_.png')}} 24w, {{asset('images/logo/Hond_.png')}} 50w, {{asset('images/logo/Hond_.png')}} 100w, {{asset('images/logo/Hond_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76e9b fl-col-small" data-node="5fb57baa76e9b">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76e9f" data-node="5fb57baa76e9f">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1324 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/jualankita.png')}} 300w, {{asset('images/logo/jualankita.png')}} 50w, {{asset('images/logo/jualankita.png')}} 100w, {{asset('images/logo/jualankita.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo Toyota Advanced Logistics" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/jualankita.png')}} 300w, {{asset('images/logo/jualankita.png')}} 24w, {{asset('images/logo/jualankita.png')}} 50w, {{asset('images/logo/jualankita.png')}} 100w, {{asset('images/logo/jualankita.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/jualankita.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1324 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('images/logo/jualankita.png')}} 300w, {{asset('images/logo/jualankita.png')}} 50w, {{asset('images/logo/jualankita.png')}} 100w, {{asset('images/logo/jualankita.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/jualankita.png')}}" alt="Logo Toyota Advanced Logistics" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/jualankita.png')}} 300w, {{asset('images/logo/jualankita.png')}} 24w, {{asset('images/logo/jualankita.png')}} 50w, {{asset('images/logo/jualankita.png')}} 100w, {{asset('images/logo/jualankita.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5fb57baa76e95 fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5fb57baa76e95">
                                    <div class="fl-col fl-node-5fb57baa76ea0 fl-col-small fl-visible-desktop-medium" data-node="5fb57baa76ea0">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea5" data-node="5fb57baa76ea5">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1295 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/legano.png')}} 300w, {{asset('images/logo/legano.png')}} 50w, {{asset('images/logo/legano.png')}} 100w, {{asset('images/logo/legano.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo Cimcorp" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/legano.png')}} 300w, {{asset('images/logo/legano.png')}} 24w, {{asset('images/logo/legano.png')}} 50w, {{asset('images/logo/legano.png')}} 100w, {{asset('images/logo/legano.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/legano.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1295 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('images/logo/legano.png')}} 300w, {{asset('images/logo/legano.png')}} 50w, {{asset('images/logo/legano.png')}} 100w, {{asset('images/logo/legano.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/legano.png')}}" alt="Logo Cimcorp" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/legano.png')}} 300w, {{asset('images/logo/legano.png')}} 24w, {{asset('images/logo/legano.png')}} 50w, {{asset('images/logo/legano.png')}} 100w, {{asset('images/logo/legano.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea3" data-node="5fb57baa76ea3">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1313 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/talisma.png')}} 300w, {{asset('images/logo/talisma.png')}} 50w, {{asset('images/logo/talisma.png')}} 100w, {{asset('images/logo/talisma.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-Oppent" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/talisma.png')}} 300w, {{asset('images/logo/talisma.png')}} 24w, {{asset('images/logo/talisma.png')}} 50w, {{asset('images/logo/talisma.png')}} 100w, {{asset('images/logo/talisma.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/talisma.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1313 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('images/logo/talisma.png')}} 300w, {{asset('images/logo/talisma.png')}} 50w, {{asset('images/logo/talisma.png')}} 100w, {{asset('images/logo/talisma.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/talisma.png')}}" alt="Logo-Oppent" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/talisma.png')}} 300w, {{asset('images/logo/talisma.png')}} 24w, {{asset('images/logo/talisma.png')}} 50w, {{asset('images/logo/talisma.png')}} 100w, {{asset('images/logo/talisma.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea4" data-node="5fb57baa76ea4">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1325 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung.png.webp 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo Yeefung" itemprop="image" height="150" width="300" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung.png 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-300x150.png"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1325 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung.png.webp 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-300x150.png" alt="Logo Yeefung" itemprop="image" height="150" width="300" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Yeefung.png 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76ea2 fl-col-small top_layer" data-node="5fb57baa76ea2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5fb57baa76ea9 obvia" data-node="5fb57baa76ea9">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <h3>Trusted by companies around the world</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5fb57baa76eac" data-node="5fb57baa76eac">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5fb57baa76eaa" data-node="5fb57baa76eaa">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>Just a few of the organizations we have helped.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-button fl-node-5ffccde1d4cc4 fl-animation fl-fade-in obvia" data-node="5ffccde1d4cc4" data-animation-delay="0" data-animation-duration="1">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-button-wrap fl-button-width-auto fl-button-center fl-button-has-icon">
                                                    <a href="https://bluebotics.com/references/" target="_self" class="fl-button" role="button">
                                                    <i class="fl-button-icon fl-button-icon-before ua-icon ua-icon-minus2" aria-hidden="true"></i>
                                                    <span class="fl-button-text">See More</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76ea1 fl-col-small fl-visible-desktop-medium" data-node="5fb57baa76ea1">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea8" data-node="5fb57baa76ea8">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1296 size-medium" itemprop="image" title="Logo-Cleanfix">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/noutek_.png')}} 300w, {{asset('images/logo/noutek_.png')}} 50w, {{asset('images/logo/noutek_.png')}} 100w, {{asset('images/logo/noutek_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-Cleanfix" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/noutek_.png')}} 300w, {{asset('images/logo/noutek_.png')}} 24w, {{asset('images/logo/noutek_.png')}} 50w, {{asset('images/logo/noutek_.png')}} 100w, {{asset('images/logo/noutek_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/noutek_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1296 size-medium" itemprop="image" title="Logo-Cleanfix">
                                                                <source type="image/webp" srcset="{{asset('images/logo/noutek_.png')}} 300w, {{asset('images/logo/noutek_.png')}} 50w, {{asset('images/logo/noutek_.png')}} 100w, {{asset('images/logo/noutek_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/noutek_.png')}}" alt="Logo-Cleanfix" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/noutek_.png')}} 300w, {{asset('images/logo/noutek_.png')}} 24w, {{asset('images/logo/noutek_.png')}} 50w, {{asset('images/logo/noutek_.png')}} 100w, {{asset('images/logo/noutek_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea6" data-node="5fb57baa76ea6">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1310 size-medium" itemprop="image" title="Logo-Nespresso">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('images/logo/Vasiki_.png')}} 300w, {{asset('images/logo/Vasiki_.png')}} 50w, {{asset('images/logo/Vasiki_.png')}} 100w, {{asset('images/logo/Vasiki_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-Nespresso" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('images/logo/Vasiki_.png')}} 300w, {{asset('images/logo/Vasiki_.png')}} 24w, {{asset('images/logo/Vasiki_.png')}} 50w, {{asset('images/logo/Vasiki_.png')}} 100w, {{asset('images/logo/Vasiki_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('images/logo/Vasiki_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1310 size-medium" itemprop="image" title="Logo-Nespresso">
                                                                <source type="image/webp" srcset="{{asset('images/logo/Vasiki_.png')}} 300w, {{asset('images/logo/Vasiki_.png')}} 50w, {{asset('images/logo/Vasiki_.png')}} 100w, {{asset('images/logo/Vasiki_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('images/logo/Vasiki_.png')}}" alt="Logo-Nespresso" itemprop="image" height="150" width="300" srcset="{{asset('images/logo/Vasiki_.png')}} 300w, {{asset('images/logo/Vasiki_.png')}} 24w, {{asset('images/logo/Vasiki_.png')}} 50w, {{asset('images/logo/Vasiki_.png')}} 100w, {{asset('images/logo/Vasiki_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea7" data-node="5fb57baa76ea7">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1320 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA.png.webp 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo SITA" itemprop="image" height="150" width="300" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA.png 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-300x150.png"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1320 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA.png.webp 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-300x150.png" alt="Logo SITA" itemprop="image" height="150" width="300" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SITA.png 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5fb57baa76e97 fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5fb57baa76e97">
                                    <div class="fl-col fl-node-5fb57baa76ead fl-col-small" data-node="5fb57baa76ead">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76eb1" data-node="5fb57baa76eb1">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1291 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS.png.webp 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo AGVS" itemprop="image" height="150" width="300" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS.png 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-300x150.png"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1291 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS.png.webp 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-300x150.png" alt="Logo AGVS" itemprop="image" height="150" width="300" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-AGVS.png 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76eae fl-col-small" data-node="5fb57baa76eae">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76eb2" data-node="5fb57baa76eb2">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1305 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon.png.webp 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo Kivnon" itemprop="image" height="150" width="300" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon.png 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-300x150.png"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1305 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon.png.webp 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-300x150.png" alt="Logo Kivnon" itemprop="image" height="150" width="300" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-Kivnon.png 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76eaf fl-col-small" data-node="5fb57baa76eaf">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76eb3" data-node="5fb57baa76eb3">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1312 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC.png.webp 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo NKC" itemprop="image" height="150" width="300" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC.png 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-300x150.png"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1312 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC.png.webp 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-300x150.png" alt="Logo NKC" itemprop="image" height="150" width="300" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-NKC.png 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76eb0 fl-col-small" data-node="5fb57baa76eb0">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76eb4" data-node="5fb57baa76eb4">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1319 size-medium" itemprop="image">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE.png.webp 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo SEW EURODRIVE" itemprop="image" height="150" width="300" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE.png 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-300x150.png"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1319 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-300x150.png.webp 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-50x25.png.webp 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-100x50.png.webp 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE.png.webp 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-300x150.png" alt="Logo SEW EURODRIVE" itemprop="image" height="150" width="300" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-300x150.png 300w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-24x12.png 24w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-50x25.png 50w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE-100x50.png 100w, https://bluebotics.com/wp-content/uploads/2020/11/Logo-SEWEURODRIVE.png 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f909fa889a4c" data-node="5f909fa889a4c">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f909fa889a4d" data-node="5f909fa889a4d">
                                    <div class="fl-col fl-node-5f909fa889a4e" data-node="5f909fa889a4e">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f90ae1bb1a92" data-node="5f90ae1bb1a92">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Distributors</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f90ae34b33e9" data-node="5f90ae34b33e9">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5f909fa889a51" data-node="5f909fa889a51">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>Feel free to contact our distribution partners in the following countries:</p>
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
                                        <div class="fl-module fl-module-labb-carousel fl-node-6026b1f999b7c partners-caro" data-node="6026b1f999b7c">
                                            <div class="fl-module-content fl-node-content">
                                                <div id="labb-carousel-6026b1f999b7c" class="labb-carousel labb-container" data-settings='{"arrows":false,"dots":true,"autoplay":true,"autoplay_speed":6000,"animation_speed":600,"pause_on_hover":true,"display_columns":"3","scroll_columns":"1","gutter":"10","tablet_width":"800","tablet_display_columns":"2","tablet_scroll_columns":"2","tablet_gutter":"10","mobile_width":"480","mobile_display_columns":"1","mobile_scroll_columns":"1","mobile_gutter":"10"}'>
                                                    <div class="labb-carousel-item">
                                                    <h3 style="text-align: center;">China</h3>
                                                    <p>
                                                        <a href="https://www.shtongpu.com/" target="_blank" rel="noopener">
                                                            <picture decoding="async" class="size-medium wp-image-1027 aligncenter">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Tongpu-logo-black.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20180&#039;%3E%3C/svg%3E"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20180&#039;%3E%3C/svg%3E" alt="" width="300" height="180" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Tongpu-logo-black.png"/>
                                                            </picture>
                                                    <noscript><picture decoding="async" class="size-medium wp-image-1027 aligncenter">
                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Tongpu-logo-black.png.webp"/>
                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/12/Tongpu-logo-black.png" alt="" width="300" height="180"/>
                                                    </picture>
                                                    </noscript></a></p>
                                                    <p><a href="http://www.shtongpu.com/" target="_blank" rel="noopener">shtongpu.com</a></p>
                                                    <p>+86 021 55095871<br />University Science Park, Shanghai<br />Yiwu City, Zhejiang</p>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <h3 style="text-align: center;">Japan</h3>
                                                    <p>
                                                        <a href="https://altech.co.jp/eng" target="_blank" rel="noopener">
                                                            <picture decoding="async" class="aligncenter wp-image-1060">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/Altech-logo.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20150%2090&#039;%3E%3C/svg%3E"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20150%2090&#039;%3E%3C/svg%3E" alt="" width="150" height="90" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/Altech-logo.png"/>
                                                            </picture>
                                                    <noscript><picture decoding="async" class="aligncenter wp-image-1060">
                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/Altech-logo.png.webp"/>
                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/12/Altech-logo.png" alt="" width="150" height="90"/>
                                                    </picture>
                                                    </noscript></a></p>
                                                    <p><a href="https://smart-logistics.altech.jp/amr-dev/" target="_blank" rel="noopener">https://smart-logistics.altech.jp/amr-dev/</a></p>
                                                    <p>+81 03 5542 6760<br />Sumitomo Irifune Bldg. 2F, 1-1<br />Irifune 2 Chome,<br />Chuo-Ku, Tokyo 104-0042</p>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <h3 style="text-align: center;">Korea</h3>
                                                    <p>
                                                        <a href="http://macpion.co.kr" target="_blank" rel="noopener">
                                                            <picture decoding="async" class="size-medium wp-image-1026 aligncenter">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/MacPion-logo.jpg.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20300&#039;%3E%3C/svg%3E"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20300&#039;%3E%3C/svg%3E" alt="" width="300" height="300" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/MacPion-logo.jpg"/>
                                                            </picture>
                                                    <noscript><picture decoding="async" class="size-medium wp-image-1026 aligncenter">
                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/12/MacPion-logo.jpg.webp"/>
                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/12/MacPion-logo.jpg" alt="" width="300" height="300"/>
                                                    </picture>
                                                    </noscript></a></p>
                                                    <p><a href="https://macpion.co.kr/" target="_blank" rel="noopener">macpion.co.kr</a></p>
                                                    <p>+82 032 623 78303<br />Rm A-302A Bupyeong-daero,<br />Bupyeong-gu,<br />Incheon 21315</p>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                    <div class="labb-carousel-item">
                                                    <h3 style="text-align: center;">Thailand</h3>
                                                    <p>
                                                        <a href="https://www.planet.co.th/th/home/" target="_blank" rel="noopener">
                                                            <picture decoding="async" class="aligncenter wp-image-1026 size-medium">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Planet.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20300&#039;%3E%3C/svg%3E"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20300&#039;%3E%3C/svg%3E" alt="" width="300" height="300" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Planet.png"/>
                                                            </picture>
                                                    <noscript><picture decoding="async" class="aligncenter wp-image-1026 size-medium">
                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Planet.png.webp"/>
                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/11/Logo-Planet.png" alt="" width="300" height="300"/>
                                                    </picture>
                                                    </noscript></a></p>
                                                    <p><a href="https://www.planet.co.th/th/home/" target="_blank" rel="noopener">planet.co.th</a></p>
                                                    <p>+66(2) 300 5323 4<br />
                                                        Planet T&amp;S Co., Ltd.<br />
                                                        42/1 Rama 9 Soi 43, Seree 4 Road,<br />
                                                        Suanluang, Bangkok, 10250
                                                    </p>
                                                    </div>
                                                    <!-- .labb-carousel-item -->
                                                </div>
                                                <!-- .labb-carousel -->	
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
                                    <div class="fl-col fl-node-5fa44923a2fe1" data-node="5fa44923a2fe1">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5fa44923a31a2" data-node="5fa44923a31a2">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>For all other countries, contact us direct.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-button fl-node-5fa44923a31a5 obvia" data-node="5fa44923a31a5">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                    <a href="/contact" target="_self" class="fl-button" role="button">
                                                    <span class="fl-button-text">Get in Touch</span>
                                                    </a>
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