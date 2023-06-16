@extends('layouts.app')

@section('css')
<link data-minify="1" rel='stylesheet' id='fl-builder-layout-22-css' href="{{asset('public/assets/uploads/bb-plugin/cache/22-layout.css?ver=1681229321')}}" media='all' />
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
      </style>
      <noscript>
         <style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style>
      </noscript>
      <link data-minify="1" rel="stylesheet" href="https://bluebotics.com/wp-content/cache/min/1/jem7gzh.css?ver=1681229321">
      <link data-minify="1" href="https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/omgf/omgf-stylesheet-75/omgf-stylesheet-75.css?ver=1681229321" rel="stylesheet">
@endsection


@section('contents')

<div class="uabb-js-breakpoint" style="display: none;"></div>
<div class="uabb-js-breakpoint" style="display: none;"></div>

<div id="fl-main-content" class="fl-page-content" itemprop="mainContentOfPage" role="main">
    <div class="fl-content-full container">
        <div class="row">
            <div class="fl-content col-md-12">
                <article class="fl-post post-22 page type-page status-publish hentry" id="fl-post-22" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                <div class="fl-post-content clearfix" itemprop="text">
                    <div class="fl-builder-content fl-builder-content-22 fl-builder-content-primary fl-builder-global-templates-locked" data-post-id="22">
                        <div class="fl-row fl-row-full-width fl-row-bg-video fl-node-5d5ac65fa4dbf fl-row-custom-height fl-row-align-center fl-row-bg-overlay" data-node="5d5ac65fa4dbf">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-bg-video" data-video-mobile="no" data-width="1920" data-height="1080"  data-mp4="{{asset('public/images/djt_pro.mp4')}}" data-mp4-type="video/mp4"  data-webm-type="video/webm" >
                            </div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5d5ac65fa67f4 fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5d5ac65fa67f4">
                                    <div class="fl-col fl-node-5e1e2aca4e527 fl-col-small fl-visible-desktop" data-node="5e1e2aca4e527">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                    <div class="fl-col fl-node-5d5ac65fa69e2 fl-col-small fl-col-has-cols top-layer" data-node="5d5ac65fa69e2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-separator fl-node-5f7ddc075a4d2 top_layer" data-node="5f7ddc075a4d2">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-heading fl-node-5d5ac73f2b13b" data-node="5d5ac73f2b13b">
                                            <div class="fl-module-content fl-node-content">
                                                <h1 class="fl-heading">
                                                    <span class="fl-heading-text">Solution Of Improvement</span>
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5daf2fcb2d68b" data-node="5daf2fcb2d68b">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <!-- <div class="fl-module fl-module-heading fl-node-5daf2d4c1bcdd" data-node="5daf2d4c1bcdd">
                                            <div class="fl-module-content fl-node-content">
                                                <h4 class="fl-heading">
                                                    <span class="fl-heading-text"><strong>SPECIALIZING IN IMPROVEMENT</strong></span>
                                                </h4>
                                            </div>
                                        </div> -->
                                        <div class="fl-col-group fl-node-5e1e2b123c1d5 fl-col-group-nested" data-node="5e1e2b123c1d5">
                                            <div class="fl-col fl-node-5e1e2b123c36f fl-col-small" data-node="5e1e2b123c36f">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-button fl-node-5f3de20530558 fl-animation fl-fade-in obvia" data-node="5f3de20530558" data-animation-delay="0" data-animation-duration="2">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-button-wrap fl-button-width-full fl-button-center">
                                                            <a href="{{route('app.contact')}}" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">Get in Touch</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5e1e2b123c3b0 fl-col-small" data-node="5e1e2b123c3b0">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-button fl-node-5e1e2ef944080 fl-animation fl-fade-in obvia" data-node="5e1e2ef944080" data-animation-delay="0" data-animation-duration="2">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-button-wrap fl-button-width-full fl-button-center">
                                                            <!-- <a href="https://bluebotics.com/ebook/" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">GUIDE NOW</span>
                                                            </a> -->
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f7dd9cbb75eb" data-node="5f7dd9cbb75eb">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7dd9cc29904" data-node="5f7dd9cc29904">
                                    <div class="fl-col fl-node-5f7dd9cc29b3c fl-col-has-cols" data-node="5f7dd9cc29b3c">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f7dda30ec4c6 fl-col-group-nested" data-node="5f7dda30ec4c6">
                                            <div class="fl-col fl-node-5f3db01152e64 fl-col-small top-layer" data-node="5f3db01152e64">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-info-box fl-node-5f3db1bd6bf28 obvia" data-node="5f3db1bd6bf28">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-infobox infobox-center infobox-has-photo infobox-photo-above-title ">
                                                            <div class="uabb-infobox-left-right-wrap">
                                                                <div class="uabb-infobox-content">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10534 size-thumbnail" src="{{asset('public/images/equipment_blue.png')}}" alt="Develop your ANT driven vehicle." title="" itemprop="image" data-lazy-src="{{asset('public/images/equipment_blue.png')}}"/>
                                                                            <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10534 size-thumbnail" src="{{asset('public/images/equipment_blue.png')}}" alt="Develop your ANT driven vehicle." title="" itemprop="image"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='uabb-infobox-title-wrap'>
                                                                    <h3 class="uabb-infobox-title">Equipment</h3>
                                                                </div>
                                                                <!-- <div class="uabb-infobox-text-wrap">
                                                                    <div class="uabb-infobox-text uabb-text-editor">
                                                                        <p>Your<br />Vehicle</p>
                                                                    </div>
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7dd8fe83359 fl-col-small top-layer" data-node="5f7dd8fe83359">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-info-box fl-node-5f3db1c248821 obvia" data-node="5f3db1c248821">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-infobox infobox-center infobox-has-photo infobox-photo-above-title ">
                                                            <div class="uabb-infobox-left-right-wrap">
                                                                <div class="uabb-infobox-content">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10539 size-thumbnail" src="{{asset('public/images/app_blue.png')}}" alt="Reduce installation time and cost with autonomous navigation." title="" itemprop="image" data-lazy-src="{{asset('public/images/app_blue.png')}}"/>
                                                                            <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10539 size-thumbnail" src="{{asset('public/images/app_blue.png')}}" alt="Reduce installation time and cost with autonomous navigation." title="" itemprop="image"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='uabb-infobox-title-wrap'>
                                                                    <h3 class="uabb-infobox-title">Apps</h3>
                                                                </div>
                                                                <!-- <div class="uabb-infobox-text-wrap">
                                                                    <div class="uabb-infobox-text uabb-text-editor">
                                                                        <p>Installation <br />time &amp; cost</p>
                                                                    </div>
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7dd8faa4260 fl-col-small top-layer" data-node="5f7dd8faa4260">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-info-box fl-node-5f3db02457758 obvia" data-node="5f3db02457758">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-infobox infobox-center infobox-has-photo infobox-photo-above-title ">
                                                            <div class="uabb-infobox-left-right-wrap">
                                                                <div class="uabb-infobox-content">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-simple		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10544 size-thumbnail" src="{{asset('public/images/furniture_blue.png')}}" alt="Grow your business with autonomous navigation." title="" itemprop="image" data-lazy-src="{{asset('public/images/furniture_blue.png')}}"/>
                                                                            <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10544 size-thumbnail" src="{{asset('public/images/furniture_blue.png')}}" alt="Grow your business with autonomous navigation." title="" itemprop="image"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='uabb-infobox-title-wrap'>
                                                                    <h3 class="uabb-infobox-title">Furniture & Interior</h3>
                                                                </div>
                                                                <!-- <div class="uabb-infobox-text-wrap">
                                                                    <div class="uabb-infobox-text uabb-text-editor">
                                                                        <p>Your<br />Business</p>
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
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5e1e2d71edf56 fl-row-bg-overlay" data-node="5e1e2d71edf56">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5e1e2d7200b85 fl-col-group-equal-height fl-col-group-align-center" data-node="5e1e2d7200b85">
                                    <div class="fl-col fl-node-5e1e2d7200d81" data-node="5e1e2d7200d81">
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f3d8e536101f" data-node="5f3d8e536101f">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3d9070a92a2 fl-col-group-responsive-reversed" data-node="5f3d9070a92a2">
                                    <div class="fl-col fl-node-5e1e2e495ee26 fl-col-has-cols" data-node="5e1e2e495ee26">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f89c157f1c1d fl-col-group-nested" data-node="5f89c157f1c1d">
                                            <div class="fl-col fl-node-5f7e336095fcb fl-col-small" data-node="5f7e336095fcb">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f3d882ec83cc" data-node="5f3d882ec83cc">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h5 class="fl-heading">
                                                            <span class="fl-heading-text">VISION</span>
                                                        </h5>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-rich-text fl-node-5f3d8814e0bff" data-node="5f3d8814e0bff">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Become the best Education Equipment Producer in order to help government educating the nation</p>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f7e027ea8390" data-node="5f7e027ea8390">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7e027ef419c fl-col-group-responsive-reversed" data-node="5f7e027ef419c">
                                    <div class="fl-col fl-node-5f3d8d604ee7b top_layer" data-node="5f3d8d604ee7b">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f3d8be4c1cd7 fl-animation fl-fade-up" data-node="5f3d8be4c1cd7" data-animation-delay="0" data-animation-duration="2">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">MISSION</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3d84ee30555" data-node="5f3d84ee30555">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5f3d8c6b23a7c" data-node="5f3d8c6b23a7c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p><b>“Give the best services”</b><br>
                                                    by giving guarantee that the customer will receive our maximum service, for instance in quality product, easiness, along with competitive expense</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f3d8d604eb94 fl-row-custom-height fl-row-align-center" data-node="5f3d8d604eb94">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3da2c571869" data-node="5f3da2c571869">
                                    <div class="fl-col fl-node-5f3da2c571c02 home-page-slider" data-node="5f3da2c571c02">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5f99c37f0da50 fl-col-group-custom-width" data-node="5f99c37f0da50">
                                    <div class="fl-col fl-node-5f99c37f0d8b3 home-page-slider" data-node="5f99c37f0d8b3">
                                        <div class="fl-col-content fl-node-content">
                                        <div id="history" class="fl-module fl-module-content-slider fl-node-5f99c37f0d8b0 obvia" data-node="5f99c37f0d8b0">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-content-slider">
                                                    <div class="fl-content-slider-wrapper">
                                                    <div class="fl-slide fl-slide-0 fl-slide-text-right">
                                                        <div class="fl-slide-mobile-photo">
                                                            <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2262">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg.webp 150w, {{asset('public/images/02_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="576" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="BlueBotics - Meet Your Autonomous Navigation Partner" data-lazy-srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/02_.jpg')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2262">
                                                                <source type="image/webp" srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg.webp 150w, {{asset('public/images/02_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="576" loading="false" src="{{asset('public/images/02_.jpg')}}" alt="BlueBotics - Meet Your Autonomous Navigation Partner" srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                </picture>
                                                            </noscript>
                                                        </div>
                                                        <div class="fl-slide-foreground clearfix">
                                                            <div class="fl-slide-content-wrap">
                                                                <div class="fl-slide-content">
                                                                <!-- <div class="fl-slide-text">
                                                                    <p>Focus on education requirement that always developing time by time</p>
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="fl-slide-photo-wrap">
                                                                <div class="fl-slide-photo">
                                                                <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2262">
                                                                    <source type="image/webp" data-lazy-srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg.webp 150w, {{asset('public/images/02_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    <img decoding="async" width="1024" height="576" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="BlueBotics - Meet Your Autonomous Navigation Partner" data-lazy-srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/02_.jpg')}}"/>
                                                                </picture>
                                                                <noscript>
                                                                    <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2262">
                                                                        <source type="image/webp" srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg.webp 150w, {{asset('public/images/02_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                        <img decoding="async" width="1024" height="576" loading="false" src="{{asset('public/images/02_.jpg')}}" alt="BlueBotics - Meet Your Autonomous Navigation Partner" srcset="{{asset('public/images/02_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/1-BlueBotics_autonomous_navigation_MeetYourAutonomousNavigationPartner.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    </picture>
                                                                </noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fl-slide fl-slide-1 fl-slide-text-right">
                                                        <div class="fl-slide-mobile-photo">
                                                            <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2263">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/03_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg.webp 150w, {{asset('public/images/03_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="576" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives Esatroll AGVs" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2263">
                                                                <source type="image/webp" srcset="{{asset('public/images/03_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg.webp 150w, {{asset('public/images/03_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="576" loading="false" src="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg" alt="BlueBotics Autonomous Navigation drives Esatroll AGVs" srcset="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                </picture>
                                                            </noscript>
                                                        </div>
                                                        <div class="fl-slide-foreground clearfix">
                                                            <div class="fl-slide-content-wrap">
                                                                <div class="fl-slide-content">
                                                                <!-- <div class="fl-slide-text">
                                                                    <p>Good quality and reasonable expanse to fulfill its consumer’s satisfaction
</p>
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="fl-slide-photo-wrap">
                                                                <div class="fl-slide-photo">
                                                                <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2263">
                                                                    <source type="image/webp" data-lazy-srcset="{{asset('public/images/03_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg.webp 150w, {{asset('public/images/03_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    <img decoding="async" width="1024" height="576" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives Esatroll AGVs" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg"/>
                                                                </picture>
                                                                <noscript>
                                                                    <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2263">
                                                                        <source type="image/webp" srcset="{{asset('public/images/03_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg.webp 150w, {{asset('public/images/03_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                        <img decoding="async" width="1024" height="576" loading="false" src="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg" alt="BlueBotics Autonomous Navigation drives Esatroll AGVs" srcset="https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/2-BlueBotics_autonomous_navigation_Duka_Esatroll-Fleet.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    </picture>
                                                                </noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="fl-slide fl-slide-2 fl-slide-text-right">
                                                        <div class="fl-slide-mobile-photo">
                                                            <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2264">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/04_.jpg')}} 1024w, {{asset('public/images/04_.jpg')}} 300w, {{asset('public/images/04_.jpg')}} 768w, {{asset('public/images/04_.jpg')}} 1536w, {{asset('public/images/04_.jpg')}} 50w, {{asset('public/images/04_.jpg')}} 100w, {{asset('public/images/04_.jpg')}} 150w, {{asset('public/images/04_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="683" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives the F3 Nipper AGV" data-lazy-srcset="{{asset('public/images/04_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-1536x1024.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/04_.jpg')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2264">
                                                                <source type="image/webp" srcset="{{asset('public/images/04_.jpg')}} 1024w, {{asset('public/images/04_.jpg')}} 300w, {{asset('public/images/04_.jpg')}} 768w, {{asset('public/images/04_.jpg')}} 1536w, {{asset('public/images/04_.jpg')}} 50w, {{asset('public/images/04_.jpg')}} 100w, {{asset('public/images/04_.jpg')}} 150w, {{asset('public/images/04_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="683" loading="false" src="{{asset('public/images/04_.jpg')}}" alt="BlueBotics Autonomous Navigation drives the F3 Nipper AGV" srcset="{{asset('public/images/04_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-1536x1024.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                </picture>
                                                            </noscript>
                                                        </div>
                                                        <div class="fl-slide-foreground clearfix">
                                                            <div class="fl-slide-content-wrap">
                                                                <div class="fl-slide-content">
                                                                <!-- <div class="fl-slide-text">
                                                                    <p>Supported with high quality technologies hoped to be able to complete in all education aspects
</p>
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                            <div class="fl-slide-photo-wrap">
                                                                <div class="fl-slide-photo">
                                                                <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2264">
                                                                    <source type="image/webp" data-lazy-srcset="{{asset('public/images/04_.jpg')}} 1024w, {{asset('public/images/04_.jpg')}} 300w, {{asset('public/images/04_.jpg')}} 768w, {{asset('public/images/04_.jpg')}} 1536w, {{asset('public/images/04_.jpg')}} 50w, {{asset('public/images/04_.jpg')}} 100w, {{asset('public/images/04_.jpg')}} 150w, {{asset('public/images/04_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    <img decoding="async" width="1024" height="683" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives the F3 Nipper AGV" data-lazy-srcset="{{asset('public/images/04_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-1536x1024.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/04_.jpg')}}"/>
                                                                </picture>
                                                                <noscript>
                                                                    <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2264">
                                                                        <source type="image/webp" srcset="{{asset('public/images/04_.jpg')}} 1024w, {{asset('public/images/04_.jpg')}} 300w, {{asset('public/images/04_.jpg')}} 768w, {{asset('public/images/04_.jpg')}} 1536w, {{asset('public/images/04_.jpg')}} 50w, {{asset('public/images/04_.jpg')}} 100w, {{asset('public/images/04_.jpg')}} 150w, {{asset('public/images/04_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                        <img decoding="async" width="1024" height="683" loading="false" src="{{asset('public/images/04_.jpg')}}" alt="BlueBotics Autonomous Navigation drives the F3 Nipper AGV" srcset="{{asset('public/images/04_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-1536x1024.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/3-BlueBotics_autonomous_navigation_2019-F3-Design-3x-Nipper.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    </picture>
                                                                </noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="fl-slide fl-slide-3 fl-slide-text-right">
                                                        <div class="fl-slide-mobile-photo">
                                                            <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2265">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/05_.jpg')}} 1024w, {{asset('public/images/05_.jpg')}} 300w, {{asset('public/images/05_.jpg')}} 768w, {{asset('public/images/05_.jpg')}} 1536w, {{asset('public/images/05_.jpg')}} 50w, {{asset('public/images/05_.jpg')}} 100w, {{asset('public/images/05_.jpg')}} 150w, {{asset('public/images/05_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20682&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="682" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20682&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives ABB&#039;s mini mobile robots" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-768x511.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1536x1022.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2265">
                                                                <source type="image/webp" srcset="{{asset('public/images/05_.jpg')}} 1024w, {{asset('public/images/05_.jpg')}} 300w, {{asset('public/images/05_.jpg')}} 768w, {{asset('public/images/05_.jpg')}} 1536w, {{asset('public/images/05_.jpg')}} 50w, {{asset('public/images/05_.jpg')}} 100w, {{asset('public/images/05_.jpg')}} 150w, {{asset('public/images/05_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="682" loading="false" src="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg" alt="BlueBotics Autonomous Navigation drives ABB&#039;s mini mobile robots" srcset="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-768x511.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1536x1022.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                </picture>
                                                            </noscript>
                                                        </div>
                                                        <div class="fl-slide-foreground clearfix">
                                                            <div class="fl-slide-content-wrap">
                                                                <div class="fl-slide-content">
                                                                <div class="fl-slide-text">
                                                                    <p>We helped ABB's team to automate semi-conductor production in Lenzburg, Switzerland.</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="fl-slide-photo-wrap">
                                                                <div class="fl-slide-photo">
                                                                <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2265">
                                                                    <source type="image/webp" data-lazy-srcset="{{asset('public/images/05_.jpg')}} 1024w, {{asset('public/images/05_.jpg')}} 300w, {{asset('public/images/05_.jpg')}} 768w, {{asset('public/images/05_.jpg')}} 1536w, {{asset('public/images/05_.jpg')}} 50w, {{asset('public/images/05_.jpg')}} 100w, {{asset('public/images/05_.jpg')}} 150w, {{asset('public/images/05_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20682&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    <img decoding="async" width="1024" height="682" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20682&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives ABB&#039;s mini mobile robots" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-768x511.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1536x1022.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg"/>
                                                                </picture>
                                                                <noscript>
                                                                    <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2265">
                                                                        <source type="image/webp" srcset="{{asset('public/images/05_.jpg')}} 1024w, {{asset('public/images/05_.jpg')}} 300w, {{asset('public/images/05_.jpg')}} 768w, {{asset('public/images/05_.jpg')}} 1536w, {{asset('public/images/05_.jpg')}} 50w, {{asset('public/images/05_.jpg')}} 100w, {{asset('public/images/05_.jpg')}} 150w, {{asset('public/images/05_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                        <img decoding="async" width="1024" height="682" loading="false" src="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg" alt="BlueBotics Autonomous Navigation drives ABB&#039;s mini mobile robots" srcset="https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1024x682.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-768x511.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-1536x1022.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/4-BlueBotics_autonomous_navigation_2020-ABB-@-Lenzburg-1.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    </picture>
                                                                </noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="fl-slide fl-slide-4 fl-slide-text-right">
                                                        <div class="fl-slide-mobile-photo">
                                                            <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2266">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/06_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg.webp 150w, {{asset('public/images/06_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="576" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives ASTI&#039;s Tribot AGV" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" loading="false" class="fl-slide-mobile-photo-img wp-image-2266">
                                                                <source type="image/webp" srcset="{{asset('public/images/06_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg.webp 150w, {{asset('public/images/06_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" width="1024" height="576" loading="false" src="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg" alt="BlueBotics Autonomous Navigation drives ASTI&#039;s Tribot AGV" srcset="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                </picture>
                                                            </noscript>
                                                        </div>
                                                        <div class="fl-slide-foreground clearfix">
                                                            <div class="fl-slide-content-wrap">
                                                                <div class="fl-slide-content">
                                                                <div class="fl-slide-text">
                                                                    <p>And we helped ASTI Mobile Robotics to install its ANT driven Tribot towing AGVs at SEAT in Spain.</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="fl-slide-photo-wrap">
                                                                <div class="fl-slide-photo">
                                                                <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2266">
                                                                    <source type="image/webp" data-lazy-srcset="{{asset('public/images/06_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg.webp 150w, {{asset('public/images/06_.jpg')}} 1920w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    <img decoding="async" width="1024" height="576" loading="false" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="BlueBotics Autonomous Navigation drives ASTI&#039;s Tribot AGV" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02.jpg 1920w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg"/>
                                                                </picture>
                                                                <noscript>
                                                                    <picture decoding="async" loading="false" class="fl-slide-photo-img wp-image-2266">
                                                                        <source type="image/webp" srcset="{{asset('public/images/06_.jpg')}} 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg.webp 150w, {{asset('public/images/06_.jpg')}} 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                        <img decoding="async" width="1024" height="576" loading="false" src="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg" alt="BlueBotics Autonomous Navigation drives ASTI&#039;s Tribot AGV" srcset="https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1024x576.jpg 1024w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-1536x864.jpg 1536w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02-150x84.jpg 150w, https://bluebotics.com/wp-content/uploads/2020/12/5-BlueBotics_autonomous_navigation_ASTI-Tribot-Schlepper-FTS_02.jpg 1920w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                    </picture>
                                                                </noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    </div>
                                                    <div class="fl-clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-fixed-width fl-row-bg-none fl-node-5f3db28e4fc33 fl-row-custom-height fl-row-align-center top-layer" data-node="5f3db28e4fc33">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3db28e6a712" data-node="5f3db28e6a712">
                                    <div class="fl-col fl-node-5f3db28e6a8ad fl-col-has-cols top_layer" data-node="5f3db28e6a8ad">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f3db3e889c9f fl-col-group-nested fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5f3db3e889c9f">
                                            <div class="fl-col fl-node-5f3db3e889db6" data-node="5f3db3e889db6">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-photo fl-node-5fc8530d9c998" data-node="5fc8530d9c998">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="fl-photo-content fl-photo-img-png">
                                                                <picture decoding="async" class="fl-photo-img wp-image-1782 size-full" itemprop="image" title="20-yrs-of">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/15-yrs-of.png')}} 300w, {{asset('public/images/15-yrs-of.png')}} 50w, {{asset('public/images/15-yrs-of.png')}} 100w, {{asset('public/images/15-yrs-of.png')}} 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20113&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20113&#039;%3E%3C/svg%3E" alt="20-yrs-of" itemprop="image" height="113" width="300" data-lazy-srcset="{{asset('public/images/15-yrs-of.png')}} 300w, {{asset('public/images/15-yrs-of.png')}} 50w, {{asset('public/images/15-yrs-of.png')}} 100w, {{asset('public/images/15-yrs-of.png')}} 150w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/15-yrs-of.png')}}"/>
                                                                </picture>
                                                                <noscript>
                                                                <picture decoding="async" class="fl-photo-img wp-image-1782 size-full" itemprop="image" title="20-yrs-of">
                                                                    <source type="image/webp" srcset="{{asset('public/images/15-yrs-of.png')}} 300w, {{asset('public/images/15-yrs-of.png')}} 50w, {{asset('public/images/15-yrs-of.png')}} 100w, {{asset('public/images/15-yrs-of.png')}} 150w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                    <img decoding="async" src="{{asset('public/images/15-yrs-of.png')}}" alt="20-yrs-of" itemprop="image" height="113" width="300" srcset="{{asset('public/images/15-yrs-of.png')}} 300w, {{asset('public/images/15-yrs-of.png')}} 50w, {{asset('public/images/15-yrs-of.png')}} 100w, {{asset('public/images/15-yrs-of.png')}} 150w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3dbc89b657d" data-node="5f3dbc89b657d">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5f3dbc9d7bf3c obvia" data-node="5f3dbc9d7bf3c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <h5>SPECIALIZING IN <br />
                                                    MANUFACTURING<br />
                                                    EDUCATION<br>
                                                    EQUIPMENT
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f3db2996a799" data-node="5f3db2996a799">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3db29986e14 fl-col-group-equal-height fl-col-group-align-bottom" data-node="5f3db29986e14">
                                    <div class="fl-col fl-node-5f3db299870d9 fl-col-small" data-node="5f3db299870d9">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5f3db2a1e2955" data-node="5f3db2a1e2955">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>In 2007, PT. DWIDA JAYA TAMA coming as a company <span style="color: #0000ff;">specialized in manufacturing education equipment.</span> It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.
</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f3db299870df fl-col-small" data-node="5f3db299870df">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-separator fl-node-5f7f5a7dc5049" data-node="5f7f5a7dc5049">
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
                        <div class="fl-row fl-row-fixed-width fl-row-bg-photo fl-node-5f7de8770b3cd top-layer" data-node="5f7de8770b3cd">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7de8770b52d" data-node="5f7de8770b52d">
                                    <div class="fl-col fl-node-5f7de8770b52f fl-col-has-cols" data-node="5f7de8770b52f">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f7de8770b530 fl-col-group-nested" data-node="5f7de8770b530">
                                            <div class="fl-col fl-node-5f7de8770b531" data-node="5f7de8770b531">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-info-list fl-node-5f7de8770b532 border-box obvia" data-node="5f7de8770b532">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-info-list">
                                                            <ul class="uabb-info-list-wrapper uabb-info-list-top">
                                                                <li class="uabb-info-list-item info-list-item-dynamic0">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic0">
                                                                        <h3 class="uabb-info-list-title">1,000+</h3 >
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
                                                                            EQUIPMENTS
                                                                            </h5>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li class="uabb-info-list-item info-list-item-dynamic1">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic1">
                                                                        <h3 class="uabb-info-list-title">20+</h3 >
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
                                                                            PROVINCE FOR<br>DISTRIBUTION
                                                                            </h5>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                                <li class="uabb-info-list-item info-list-item-dynamic2">
                                                                <div class="uabb-info-list-content-wrapper fl-clearfix uabb-info-list-top">
                                                                    <div class="uabb-info-list-content uabb-info-list-top info-list-content-dynamic2">
                                                                        <h3 class="uabb-info-list-title">50+</h3 >
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
                                                                            END-USER<br />INSTANCE
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
                                <div class="fl-col-group fl-node-5f7de8770b533" data-node="5f7de8770b533">
                                    <div class="fl-col fl-node-5f7de8770b534" data-node="5f7de8770b534">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-button fl-node-5f7de8770b535 fl-animation fl-fade-in obvia" data-node="5f7de8770b535" data-animation-delay="0" data-animation-duration="1">
                                            <div class="fl-module-content fl-node-content">
                                                <!-- <div class="fl-button-wrap fl-button-width-auto fl-button-center fl-button-has-icon">
                                                    <a href="https://bluebotics.com/about/" target="_self" class="fl-button" role="button">
                                                    <i class="fl-button-icon fl-button-icon-before ua-icon ua-icon-minus2" aria-hidden="true"></i>
                                                    <span class="fl-button-text">LEARN MORE</span>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f7dea5a793c2" data-node="5f7dea5a793c2">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7dea5ab29c3" data-node="5f7dea5ab29c3">
                                    <div class="fl-col fl-node-5f7dea5ab2c07" data-node="5f7dea5ab2c07">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5f3dca8437152 obvia" data-node="5f3dca8437152">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <h5 style="margin-left: -100px;">Multimedia Microscope
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3dce3f1c84b" data-node="5f3dce3f1c84b">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator" style="margin-left: -100px;"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f7deb0bd9e60" data-node="5f7deb0bd9e60">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7deb0c33fd1 fl-col-group-equal-height fl-col-group-align-center" data-node="5f7deb0c33fd1">
                                    <div class="fl-col fl-node-5f3dca951e622 top_layer" data-node="5f3dca951e622">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-list-icon fl-node-5f47397f4a2c2" data-node="5f47397f4a2c2">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content uabb-list-icon">
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Consists of camera in ocular tube</p>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Connected with computer (Completed by specific software, able to capture picture and video)</p>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Light source from halogen lamp/led with intensity well regulated</p>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- Inline Block Space Fix
                                                        -->
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Objectives present 4x, 10x, 40x, 60x magnification</p>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Stage with stage clip</p>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Its base made of metalic</p>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-list-icon-wrap">
                                                    <div class="uabb-callout-outter">
                                                        <div class="uabb-module-content uabb-imgicon-wrap">				<span class="uabb-icon-wrap">
                                                            <span class="uabb-icon">
                                                            <i class="ua-icon ua-icon-checkmark-circle"></i>
                                                            </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="uabb-list-icon-text">
                                                        <p class="uabb-list-icon-text-heading">Completed by coarse focus and fine focus</p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-button fl-node-5f7def2424ab5 fl-animation fl-fade-in obvia" data-node="5f7def2424ab5" data-animation-delay="0" data-animation-duration="1">
                                            <div class="fl-module-content fl-node-content">
                                                <!-- <div class="fl-button-wrap fl-button-width-auto fl-button-center fl-button-has-icon">
                                                    <a href="https://bluebotics.com/autonomous-navigation-technology/" target="_self" class="fl-button" role="button">
                                                    <i class="fl-button-icon fl-button-icon-before ua-icon ua-icon-minus2" aria-hidden="true"></i>
                                                    <span class="fl-button-text">Explore ANT</span>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f3dca6252886" data-node="5f3dca6252886">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3dca951e489 fl-col-group-equal-height fl-col-group-align-bottom" data-node="5f3dca951e489">
                                    <div class="fl-col fl-node-5f3dca951e629 fl-col-small fl-visible-desktop-medium" data-node="5f3dca951e629">
                                        <div class="fl-col-content fl-node-content" style="margin-top: -210px;"></div>
                                    </div>
                                    <div class="fl-col fl-node-5f7deb72d9ecb fl-col-small fl-col-bg-overlay" data-node="5f7deb72d9ecb">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-separator fl-node-5f7f5a4f32f89" data-node="5f7f5a4f32f89">
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
                        
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5fb57baab5545" data-node="5fb57baab5545">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fb57baa76e91 fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5fb57baa76e91">
                                    <div class="fl-col fl-node-5fb57baa76e99 fl-col-small" data-node="5fb57baa76e99">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76e9d" data-node="5fb57baa76e9d">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1293 size-medium" itemprop="image" title="Logo-ASTI">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/djt_.png')}} 300w, {{asset('public/images/logo/djt_.png')}} 50w, {{asset('public/images/logo/djt_.png')}} 100w, {{asset('public/images/logo/djt_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-ASTI" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/djt_.png')}} 300w, {{asset('public/images/logo/djt_.png')}} 24w, {{asset('public/images/logo/djt_.png')}} 50w, {{asset('public/images/logo/djt_.png')}} 100w, {{asset('public/images/logo/djt_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/djt_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1293 size-medium" itemprop="image" title="Logo-ASTI">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/djt_.png')}} 300w, {{asset('public/images/logo/djt_.png')}} 50w, {{asset('public/images/logo/djt_.png')}} 100w, {{asset('public/images/logo/djt_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/djt_.png')}}" alt="Logo-ASTI" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/djt_.png')}} 300w, {{asset('public/images/logo/djt_.png')}} 24w, {{asset('public/images/logo/djt_.png')}} 50w, {{asset('public/images/logo/djt_.png')}} 100w, {{asset('public/images/logo/djt_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
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
                                    <div class="fl-col fl-node-5fb57baa76e98 fl-col-small" data-node="5fb57baa76e98">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-image fl-node-5fb57baa76e9c" data-node="5fb57baa76e9c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-photo-container">
                                                    <div class="pp-photo pp-photo-align-center pp-photo-align-responsive-default" itemscope itemtype="http://schema.org/ImageObject">
                                                    <div class="pp-photo-content">
                                                        <div class="pp-photo-content-inner">
                                                            <picture decoding="async" class="pp-photo-img wp-image-1290 size-medium" itemprop="image" title="Logo-ABB">
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/arcwood_.png')}} 300w, {{asset('public/images/logo/arcwood_.png')}} 50w, {{asset('public/images/logo/arcwood_.png')}} 100w, {{asset('public/images/logo/arcwood_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-ABB" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/arcwood_.png')}} 300w, {{asset('public/images/logo/arcwood_.png')}} 24w, {{asset('public/images/logo/arcwood_.png')}} 50w, {{asset('public/images/logo/arcwood_.png')}} 100w, {{asset('public/images/logo/arcwood_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/arcwood_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1290 size-medium" itemprop="image" title="Logo-ABB">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/arcwood_.png')}} 300w, {{asset('public/images/logo/arcwood_.png')}} 50w, {{asset('public/images/logo/arcwood_.png')}} 100w, {{asset('public/images/logo/arcwood_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/arcwood_.png')}}" alt="Logo-ABB" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/arcwood_.png')}} 300w, {{asset('public/images/logo/arcwood_.png')}} 24w, {{asset('public/images/logo/arcwood_.png')}} 50w, {{asset('public/images/logo/arcwood_.png')}} 100w, {{asset('public/images/logo/arcwood_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
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
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/Hond_.png')}} 300w, {{asset('public/images/logo/Hond_.png')}} 50w, {{asset('public/images/logo/Hond_.png')}} 100w, {{asset('public/images/logo/Hond_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Stocklin" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/Hond_.png')}} 300w, {{asset('public/images/logo/Hond_.png')}} 24w, {{asset('public/images/logo/Hond_.png')}} 50w, {{asset('public/images/logo/Hond_.png')}} 100w, {{asset('public/images/logo/Hond_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/Hond_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1321 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/Hond_.png')}} 300w, {{asset('public/images/logo/Hond_.png')}} 50w, {{asset('public/images/logo/Hond_.png')}} 100w, {{asset('public/images/logo/Hond_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/Hond_.png')}}" alt="Stocklin" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/Hond_.png')}} 300w, {{asset('public/images/logo/Hond_.png')}} 24w, {{asset('public/images/logo/Hond_.png')}} 50w, {{asset('public/images/logo/Hond_.png')}} 100w, {{asset('public/images/logo/Hond_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
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
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/jualankita.png')}} 300w, {{asset('public/images/logo/jualankita.png')}} 50w, {{asset('public/images/logo/jualankita.png')}} 100w, {{asset('public/images/logo/jualankita.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo Toyota Advanced Logistics" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/jualankita.png')}} 300w, {{asset('public/images/logo/jualankita.png')}} 24w, {{asset('public/images/logo/jualankita.png')}} 50w, {{asset('public/images/logo/jualankita.png')}} 100w, {{asset('public/images/logo/jualankita.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/jualankita.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1324 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/jualankita.png')}} 300w, {{asset('public/images/logo/jualankita.png')}} 50w, {{asset('public/images/logo/jualankita.png')}} 100w, {{asset('public/images/logo/jualankita.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/jualankita.png')}}" alt="Logo Toyota Advanced Logistics" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/jualankita.png')}} 300w, {{asset('public/images/logo/jualankita.png')}} 24w, {{asset('public/images/logo/jualankita.png')}} 50w, {{asset('public/images/logo/jualankita.png')}} 100w, {{asset('public/images/logo/jualankita.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
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
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/legano.png')}} 300w, {{asset('public/images/logo/legano.png')}} 50w, {{asset('public/images/logo/legano.png')}} 100w, {{asset('public/images/logo/legano.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo Cimcorp" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/legano.png')}} 300w, {{asset('public/images/logo/legano.png')}} 24w, {{asset('public/images/logo/legano.png')}} 50w, {{asset('public/images/logo/legano.png')}} 100w, {{asset('public/images/logo/legano.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/legano.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1295 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/legano.png')}} 300w, {{asset('public/images/logo/legano.png')}} 50w, {{asset('public/images/logo/legano.png')}} 100w, {{asset('public/images/logo/legano.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/legano.png')}}" alt="Logo Cimcorp" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/legano.png')}} 300w, {{asset('public/images/logo/legano.png')}} 24w, {{asset('public/images/logo/legano.png')}} 50w, {{asset('public/images/logo/legano.png')}} 100w, {{asset('public/images/logo/legano.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
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
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/talisma.png')}} 300w, {{asset('public/images/logo/talisma.png')}} 50w, {{asset('public/images/logo/talisma.png')}} 100w, {{asset('public/images/logo/talisma.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-Oppent" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/talisma.png')}} 300w, {{asset('public/images/logo/talisma.png')}} 24w, {{asset('public/images/logo/talisma.png')}} 50w, {{asset('public/images/logo/talisma.png')}} 100w, {{asset('public/images/logo/talisma.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/talisma.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1313 size-medium" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/talisma.png')}} 300w, {{asset('public/images/logo/talisma.png')}} 50w, {{asset('public/images/logo/talisma.png')}} 100w, {{asset('public/images/logo/talisma.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/talisma.png')}}" alt="Logo-Oppent" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/talisma.png')}} 300w, {{asset('public/images/logo/talisma.png')}} 24w, {{asset('public/images/logo/talisma.png')}} 50w, {{asset('public/images/logo/talisma.png')}} 100w, {{asset('public/images/logo/talisma.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea4" data-node="5fb57baa76ea4">
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
                                        </div> -->
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5fb57baa76ea2 fl-col-small top_layer" data-node="5fb57baa76ea2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-rich-text fl-node-5fb57baa76ea9 obvia" data-node="5fb57baa76ea9">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <h3>Our Brands</h3>
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
                                                    <!-- <p>Just a few of the organizations we have helped.</p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-button fl-node-5ffccde1d4cc4 fl-animation fl-fade-in obvia" data-node="5ffccde1d4cc4" data-animation-delay="0" data-animation-duration="1">
                                            <div class="fl-module-content fl-node-content">
                                                <!-- <div class="fl-button-wrap fl-button-width-auto fl-button-center fl-button-has-icon">
                                                    <a href="{{route('app.factory')}}" target="_self" class="fl-button" role="button">
                                                    <i class="fl-button-icon fl-button-icon-before ua-icon ua-icon-minus2" aria-hidden="true"></i>
                                                    <span class="fl-button-text">See More</span>
                                                    </a>
                                                </div> -->
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
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/noutek_.png')}} 300w, {{asset('public/images/logo/noutek_.png')}} 50w, {{asset('public/images/logo/noutek_.png')}} 100w, {{asset('public/images/logo/noutek_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-Cleanfix" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/noutek_.png')}} 300w, {{asset('public/images/logo/noutek_.png')}} 24w, {{asset('public/images/logo/noutek_.png')}} 50w, {{asset('public/images/logo/noutek_.png')}} 100w, {{asset('public/images/logo/noutek_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/noutek_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1296 size-medium" itemprop="image" title="Logo-Cleanfix">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/noutek_.png')}} 300w, {{asset('public/images/logo/noutek_.png')}} 50w, {{asset('public/images/logo/noutek_.png')}} 100w, {{asset('public/images/logo/noutek_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/noutek_.png')}}" alt="Logo-Cleanfix" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/noutek_.png')}} 300w, {{asset('public/images/logo/noutek_.png')}} 24w, {{asset('public/images/logo/noutek_.png')}} 50w, {{asset('public/images/logo/noutek_.png')}} 100w, {{asset('public/images/logo/noutek_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
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
                                                                <source type="image/webp" data-lazy-srcset="{{asset('public/images/logo/Vasiki_.png')}} 300w, {{asset('public/images/logo/Vasiki_.png')}} 50w, {{asset('public/images/logo/Vasiki_.png')}} 100w, {{asset('public/images/logo/Vasiki_.png')}} 600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20300%20150&#039;%3E%3C/svg%3E" alt="Logo-Nespresso" itemprop="image" height="150" width="300" data-lazy-srcset="{{asset('public/images/logo/Vasiki_.png')}} 300w, {{asset('public/images/logo/Vasiki_.png')}} 24w, {{asset('public/images/logo/Vasiki_.png')}} 50w, {{asset('public/images/logo/Vasiki_.png')}} 100w, {{asset('public/images/logo/Vasiki_.png')}} 600w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="{{asset('public/images/logo/Vasiki_.png')}}"/>
                                                            </picture>
                                                            <noscript>
                                                                <picture decoding="async" class="pp-photo-img wp-image-1310 size-medium" itemprop="image" title="Logo-Nespresso">
                                                                <source type="image/webp" srcset="{{asset('public/images/logo/Vasiki_.png')}} 300w, {{asset('public/images/logo/Vasiki_.png')}} 50w, {{asset('public/images/logo/Vasiki_.png')}} 100w, {{asset('public/images/logo/Vasiki_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                <img decoding="async" src="{{asset('public/images/logo/Vasiki_.png')}}" alt="Logo-Nespresso" itemprop="image" height="150" width="300" srcset="{{asset('public/images/logo/Vasiki_.png')}} 300w, {{asset('public/images/logo/Vasiki_.png')}} 24w, {{asset('public/images/logo/Vasiki_.png')}} 50w, {{asset('public/images/logo/Vasiki_.png')}} 100w, {{asset('public/images/logo/Vasiki_.png')}} 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                                                                </picture>
                                                            </noscript>
                                                            <div class="pp-overlay-bg"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="fl-module fl-module-pp-image fl-node-5fb57baa76ea7" data-node="5fb57baa76ea7">
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
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="fl-col-group fl-node-5fb57baa76e97 fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5fb57baa76e97">
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
                                </div> -->
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f4548a373375" data-node="5f4548a373375">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                            </div>
                            </div>
                        </div>
                        <!-- <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5fee41413293e fl-row-bg-overlay" data-node="5fee41413293e">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5fee4141869cd" data-node="5fee4141869cd">
                                    <div class="fl-col fl-node-5fee414186cbf" data-node="5fee414186cbf">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-testimonials fl-node-5fee43f7527bc" data-node="5fee43f7527bc">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-testimonials-wrap pp-testimonials-no-heading pp-testimonials-slider">
                                                    <div class="pp-testimonials">
                                                    <div class="owl-carousel owl-theme" tabindex="0">
                                                        <div class="pp-testimonial layout-1">
                                                            <div class="pp-content-wrapper">
                                                                <div class="pp-testimonials-content">
                                                                <p style="text-align: left;"><span style="font-size: 32px;">“Since we adopted ANT, we moved from a typical installation of two to four weeks, to only a few days!”</span></p>
                                                                <div class="testimony-atr;" style="float: right;">
                                                                    <p style="text-align: left;">
                                                                        <span style="color: #6dc6da;"><strong>Giuliano Bavaj<br /></strong></span>
                                                                        <picture decoding="async" class="testimony-slider-divider" style="width: 100px;">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E"/>
                                                                            <img width="100" height="2" decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E" alt="Yellow Line" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png"/>
                                                                        </picture>
                                                                    <noscript>
                                                                        <picture decoding="async" class="testimony-slider-divider" style="width: 100px;">
                                                                            <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp"/>
                                                                            <img width="100" height="2" decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png" alt="Yellow Line"/>
                                                                        </picture>
                                                                    </noscript>
                                                                    Managing Director at Esatroll</p>
                                                                </div>
                                                                <p>
                                                                </p>
                                                                <p>
                                                                </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pp-testimonial layout-1">
                                                            <div class="pp-content-wrapper">
                                                                <div class="pp-testimonials-content">
                                                                <p style="text-align: left;"><span style="font-size: 32px;">“The ANT product allowed Stöcklin to enter the AGV market with a competitive, flexible vehicle, which is installed in days.”</span></p>
                                                                <p> </p>
                                                                <div class="testimony-atr;" style="float: right;">
                                                                    <p class="testimony-slider-name" style="text-align: left;">
                                                                        <span style="color: #6dc6da;"><strong>Valentin Adelfio<br /></strong></span>
                                                                        <picture decoding="async" style="width: 100px;">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E"/>
                                                                            <img width="100" height="2" decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E" alt="Yellow Line" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png"/>
                                                                        </picture>
                                                                    <noscript>
                                                                        <picture decoding="async" style="width: 100px;">
                                                                            <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp"/>
                                                                            <img width="100" height="2" decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png" alt="Yellow Line"/>
                                                                        </picture>
                                                                    </noscript>
                                                                    Director Lift Trucks at Stöcklin</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pp-testimonial layout-1">
                                                            <div class="pp-content-wrapper">
                                                                <div class="pp-testimonials-content">
                                                                <p style="text-align: left;"><span style="font-size: 32px;">“BlueBotics’ ANT technology is very sound. Its ability to follow a path and follow it precisely was a game changer for us. And with the continuous improvements the team is making, the company has great potential. The way we're working together, it's effortless."</span></p>
                                                                <div class="testimony-atr;" style="float: right;">
                                                                    <p class="testimony-slider-name" style="text-align: left;">
                                                                        <span style="color: #6dc6da;"><strong>Michael Marcum<br /></strong></span>
                                                                        <picture decoding="async" style="width: 100px;">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E"/>
                                                                            <img width="100" height="2" decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E" alt="Yellow Line" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png"/>
                                                                        </picture>
                                                                    <noscript>
                                                                        <picture decoding="async" style="width: 100px;">
                                                                            <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp"/>
                                                                            <img width="100" height="2" decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png" alt="Yellow Line"/>
                                                                        </picture>
                                                                    </noscript>
                                                                    General Manager, Autonomous Vehicles,<br />Bastian Solutions (a Toyota Advanced Logistics company)</p>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pp-testimonial layout-1">
                                                            <div class="pp-content-wrapper">
                                                                <div class="pp-testimonials-content">
                                                                <p style="text-align: left;"><span style="font-size: 32px;">“By working with BlueBotics and using its ANT technology in our EcoProFleet AGVs, we gain a reliable navigation solution and our team can focus on our key business. The whole BlueBotics team has a great spirit and a great mindset, with a strong focus on common progress."</span></p>
                                                                <div class="testimony-atr;" style="float: right;">
                                                                    <p class="testimony-slider-name" style="text-align: left;">
                                                                        <span style="color: #6dc6da;"><strong>Stefano Bell<br /></strong></span>
                                                                        <picture decoding="async" style="width: 100px;">
                                                                            <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E"/>
                                                                            <img width="100" height="2" decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20100%202&#039;%3E%3C/svg%3E" alt="Yellow Line" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png"/>
                                                                        </picture>
                                                                    <noscript>
                                                                        <picture decoding="async" style="width: 100px;">
                                                                            <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png.webp"/>
                                                                            <img width="100" height="2" decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Yellow-Line.png" alt="Yellow Line"/>
                                                                        </picture>
                                                                    </noscript>
                                                                    Product Manager, Dürr AG</p>
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
                        </div> -->
                        <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5f3ddb38164a9 fl-row-custom-height fl-row-align-center" data-node="5f3ddb38164a9" style="margin-top: 50px;">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f4548bbc97bb" data-node="5f4548bbc97bb">
                                    <div class="fl-col fl-node-5f3ddbb667434" data-node="5f3ddbb667434">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-pp-video fl-node-5feb9d1f6d042" data-node="5feb9d1f6d042">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="pp-video-wrapper pp-video-source-hosted pp-aspect-ratio-169">
                                                    <div class="pp-fit-aspect-ratio">
                                                    <video class="pp-video-player" src="{{asset('public/images/compro_djt.mp4')}}" controls=""></video>
                                                    <div data-bg="{{asset('public/images/tumnel_1.jpg')}}" class="pp-video-image-overlay rocket-lazyload" style="">
                                                        <div class="pp-video-play-icon" role="button" tabindex="0">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                viewBox="0 0 415.346 415.346" xml:space="preserve" aria-hidden="true">
                                                                <g>
                                                                <g>
                                                                <path d="M41.712,415.346c-11.763,0-21.3-9.537-21.3-21.3V21.299C20.412,9.536,29.949,0,41.712,0l346.122,191.697
                                                                    c0,0,15.975,15.975,0,31.951C371.859,239.622,41.712,415.346,41.712,415.346z"/>
                                                                </g>
                                                            </svg>
                                                            <span class="pp-screen-only">Play Video</span>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5f3ddc915c54c" data-node="5f3ddc915c54c">
                                    <div class="fl-col fl-node-5f3ddc915c729" data-node="5f3ddc915c729">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f3dde9399068" data-node="5f3dde9399068">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Company Profile</span>
                                                </h3>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f3dde8f90021" data-node="5f3dde8f90021">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3dde8fb8af4" data-node="5f3dde8fb8af4">
                                    <div class="fl-col fl-node-5f3dde8fb8d1b" data-node="5f3dde8fb8d1b">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f3deb8ec8bc2" data-node="5f3deb8ec8bc2">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">How we can help</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3deb994cef4" data-node="5f3deb994cef4">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5f3dded6c8693" data-node="5f3dded6c8693">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>Our proven collaboration process is flexible enough to suit every project’s needs.<br />
                                                    Put simply, it breaks down into three key phases. 
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f7f5d8bb4b77 fl-visible-desktop-medium" data-node="5f7f5d8bb4b77">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7f5e19e1cae" data-node="5f7f5e19e1cae">
                                    <div class="fl-col fl-node-5f7f5e19e2370 fl-col-has-cols" data-node="5f7f5e19e2370">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f7f5e23be426 fl-col-group-nested" data-node="5f7f5e23be426">
                                            <div class="fl-col fl-node-5f7f5d8c094d8 fl-col-small" data-node="5f7f5d8c094d8">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f3ddf4b0e9f4" data-node="5f3ddf4b0e9f4">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">1</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-photo fl-node-5f7f5f0070090 top_layer" data-node="5f7f5f0070090">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="fl-photo-content fl-photo-img-png">
                                                                <picture decoding="async" class="fl-photo-img wp-image-789 size-full" itemprop="image" title="Ellipse 40@2x">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png.webp 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%2060%2060&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 60px) 100vw, 60px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%2060%2060&#039;%3E%3C/svg%3E" alt="Ellipse 40@2x" itemprop="image" height="60" width="60" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-24x24.png 24w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png 50w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-36x36.png 36w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-48x48.png 48w" data-lazy-sizes="(max-width: 60px) 100vw, 60px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png"/>
                                                                </picture>
                                                                <noscript>
                                                                <picture decoding="async" class="fl-photo-img wp-image-789 size-full" itemprop="image" title="Ellipse 40@2x">
                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png.webp 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png.webp 50w" sizes="(max-width: 60px) 100vw, 60px"/>
                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png" alt="Ellipse 40@2x" itemprop="image" height="60" width="60" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-24x24.png 24w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png 50w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-36x36.png 36w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-48x48.png 48w" sizes="(max-width: 60px) 100vw, 60px"/>
                                                                </picture>
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f5d8c094df fl-col-small" data-node="5f7f5d8c094df">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f3defb75ea23" data-node="5f3defb75ea23">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">2</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-photo fl-node-5f7f5edd46e40 top_layer" data-node="5f7f5edd46e40">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="fl-photo-content fl-photo-img-png">
                                                                <picture decoding="async" class="fl-photo-img wp-image-789 size-full" itemprop="image" title="Ellipse 40@2x">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png.webp 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%2060%2060&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 60px) 100vw, 60px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%2060%2060&#039;%3E%3C/svg%3E" alt="Ellipse 40@2x" itemprop="image" height="60" width="60" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-24x24.png 24w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png 50w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-36x36.png 36w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-48x48.png 48w" data-lazy-sizes="(max-width: 60px) 100vw, 60px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png"/>
                                                                </picture>
                                                                <noscript>
                                                                <picture decoding="async" class="fl-photo-img wp-image-789 size-full" itemprop="image" title="Ellipse 40@2x">
                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png.webp 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png.webp 50w" sizes="(max-width: 60px) 100vw, 60px"/>
                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png" alt="Ellipse 40@2x" itemprop="image" height="60" width="60" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-24x24.png 24w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png 50w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-36x36.png 36w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-48x48.png 48w" sizes="(max-width: 60px) 100vw, 60px"/>
                                                                </picture>
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f5d8c094e2 fl-col-small" data-node="5f7f5d8c094e2">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f3ddf29b2944" data-node="5f3ddf29b2944">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">3</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-photo fl-node-5f7f5f01d4bc1 top_layer" data-node="5f7f5f01d4bc1">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="fl-photo-content fl-photo-img-png">
                                                                <picture decoding="async" class="fl-photo-img wp-image-789 size-full" itemprop="image" title="Ellipse 40@2x">
                                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png.webp 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png.webp 50w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%2060%2060&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 60px) 100vw, 60px"/>
                                                                <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%2060%2060&#039;%3E%3C/svg%3E" alt="Ellipse 40@2x" itemprop="image" height="60" width="60" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-24x24.png 24w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png 50w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-36x36.png 36w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-48x48.png 48w" data-lazy-sizes="(max-width: 60px) 100vw, 60px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png"/>
                                                                </picture>
                                                                <noscript>
                                                                <picture decoding="async" class="fl-photo-img wp-image-789 size-full" itemprop="image" title="Ellipse 40@2x">
                                                                    <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png.webp 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png.webp 50w" sizes="(max-width: 60px) 100vw, 60px"/>
                                                                    <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png" alt="Ellipse 40@2x" itemprop="image" height="60" width="60" srcset="https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x.png 60w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-24x24.png 24w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-50x50.png 50w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-36x36.png 36w, https://bluebotics.com/wp-content/uploads/2020/10/Ellipse-40@2x-48x48.png 48w" sizes="(max-width: 60px) 100vw, 60px"/>
                                                                </picture>
                                                                </noscript>
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
                        <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5f3dddf89a3ce fl-row-custom-height fl-row-align-center fl-row-bg-overlay fl-row-bg-fixed" data-node="5f3dddf89a3ce">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-full-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7f5cfb511e2" data-node="5f7f5cfb511e2">
                                    <div class="fl-col fl-node-5f7f5cfb513b1" data-node="5f7f5cfb513b1">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-separator fl-node-5f7f5f14a5374 fl-visible-desktop-medium" data-node="5f7f5f14a5374">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5f3dddf89a6cf" data-node="5f3dddf89a6cf">
                                    <div class="fl-col fl-node-5f3dddf89a6d2 fl-col-has-cols" data-node="5f3dddf89a6d2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-col-group fl-node-5f3dde882c11d fl-col-group-nested" data-node="5f3dde882c11d">
                                            <div class="fl-col fl-node-5f3dde882c223 fl-col-small top_layer" data-node="5f3dde882c223">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f3de08f7357d" data-node="5f3de08f7357d">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Integrity</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-info-box fl-node-5f3deac90595e" data-node="5f3deac90595e">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-infobox infobox-center infobox-has-photo infobox-photo-above-title ">
                                                            <div class="uabb-infobox-left-right-wrap">
                                                                <div class="uabb-infobox-content">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10549 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="BlueBotics ANT navigation technology brings value to your vehicle." title="" itemprop="image" data-lazy-src="{{asset('public/images/discovery.png')}}"/>
                                                                            <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10549 size-thumbnail" src="{{asset('public/images/discovery.png')}}" alt="BlueBotics ANT navigation technology brings value to your vehicle." title="" itemprop="image"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='uabb-infobox-title-wrap'></div>
                                                                <div class="uabb-infobox-text-wrap">
                                                                    <div class="uabb-infobox-text uabb-text-editor">
                                                                        <p>Having integrity and high commitment, can be relied upon every company activity.</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-button fl-node-5f7f6198c2118 obvia" data-node="5f7f6198c2118">
                                                    <div class="fl-module-content fl-node-content">
                                                        <!-- <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                            <a href="/contact" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">Get in Touch</span>
                                                            </a>
                                                        </div> -->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f3defb75e881 fl-col-small top_layer" data-node="5f3defb75e881">
                                                <div class="fl-col-content fl-node-content">
                                                    <div id="project-phases-guide" class="fl-module fl-module-heading fl-node-5f3defb75ea26" data-node="5f3defb75ea26">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Innovative</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-info-box fl-node-5f3defb75ea27" data-node="5f3defb75ea27">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-infobox infobox-center infobox-has-photo infobox-photo-above-title ">
                                                            <div class="uabb-infobox-left-right-wrap">
                                                                <div class="uabb-infobox-content">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10554 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="ANT driven vehicles include on-site support." title="" itemprop="image" data-lazy-src="{{asset('public/images/integration.png')}}"/>
                                                                            <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10554 size-thumbnail" src="{{asset('public/images/integration.png')}}" alt="ANT driven vehicles include on-site support." title="" itemprop="image"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='uabb-infobox-title-wrap'></div>
                                                                <div class="uabb-infobox-text-wrap">
                                                                    <div class="uabb-infobox-text uabb-text-editor">
                                                                        <p>The passion to create and innovate continuously on products based on expertise, good materials, design and determination in producing the best solutions for consumers.<span id="plan"></span></p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-pp-file-download fl-node-5fa1796be44ac obvia" data-node="5fa1796be44ac">
                                                    <div class="fl-module-content fl-node-content">
                                                        <!-- <div class="pp-button-wrap pp-button-width-auto">
                                                            <a href="https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_Project_Phases.pdf" target="_self" class="pp-button" role="button" download="BlueBotics_Project_Phases.pdf" aria-label="detailed guide">
                                                            <span class="pp-button-text">detailed guide</span>
                                                            </a>
                                                        </div> -->
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f3dde882c229 fl-col-small top_layer" data-node="5f3dde882c229">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-heading fl-node-5f3de061bdb1d" data-node="5f3de061bdb1d">
                                                    <div class="fl-module-content fl-node-content">
                                                        <h3 class="fl-heading">
                                                            <span class="fl-heading-text">Synergy</span>
                                                        </h3>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-info-box fl-node-5f3de13e7f3f1" data-node="5f3de13e7f3f1">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="uabb-module-content uabb-infobox infobox-center infobox-has-photo infobox-photo-above-title ">
                                                            <div class="uabb-infobox-left-right-wrap">
                                                                <div class="uabb-infobox-content">
                                                                <div class="uabb-module-content uabb-imgicon-wrap">
                                                                    <div class="uabb-image
                                                                        uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                                        <div class="uabb-image-content">
                                                                            <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10559 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="BlueBotics ANT offers on-site support." title="" itemprop="image" data-lazy-src="{{asset('public/images/launch.png')}}"/>
                                                                            <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10559 size-thumbnail" src="{{asset('public/images/launch.png')}}" alt="BlueBotics ANT offers on-site support." title="" itemprop="image"/></noscript>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class='uabb-infobox-title-wrap'></div>
                                                                <div class="uabb-infobox-text-wrap">
                                                                    <div class="uabb-infobox-text uabb-text-editor">
                                                                        <p>Be proactive in cooperating with customers, business partners, communities, employees and company organizations.</p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="fl-module fl-module-button fl-node-5f7f619f22b00 obvia" data-node="5f7f619f22b00">
                                                    <div class="fl-module-content fl-node-content">
                                                        <!-- <div class="fl-button-wrap fl-button-width-auto fl-button-center">
                                                            <a href="/#example-products" target="_self" class="fl-button" role="button">
                                                            <span class="fl-button-text">View example projects</span>
                                                            </a>
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
                        <div id="example-products" class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f3ded625d550" data-node="5f3ded625d550">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3ded628e2c3" data-node="5f3ded628e2c3">
                                    <div class="fl-col fl-node-5f3ded628e504" data-node="5f3ded628e504">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f3ddb38165ce" data-node="5f3ddb38165ce">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Factory & Warehouse</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3df4ad435db" data-node="5f3df4ad435db">
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
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f3defd5c6a56 top_layer" data-node="5f3defd5c6a56">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f7f6ce6bb626 fl-col-group-equal-height fl-col-group-align-top" data-node="5f7f6ce6bb626">
                                    <div class="fl-col fl-node-5f3defd607646 fl-col-small fl-col-has-cols hover-scale" data-node="5f3defd607646">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-photo fl-node-5f3df02116603" data-node="5f3df02116603">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                    <div class="fl-photo-content fl-photo-img-jpg">
                                                    <picture decoding="async" class="fl-photo-img wp-image-801 size-full" itemprop="image">
                                                        <source type="image/webp" data-lazy-srcset="{{asset('public/images/12_.jpg')}} 886w, {{asset('public/images/12_.jpg')}} 300w, {{asset('public/images/12_.jpg')}} 768w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-50x33.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-100x67.jpg.webp 100w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20886%20591&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 886px) 100vw, 886px"/>
                                                        <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20886%20591&#039;%3E%3C/svg%3E" alt="Stöcklin AGV - Autonomous Navigation Technology" itemprop="image" height="591" width="886" data-lazy-srcset="{{asset('public/images/12_.jpg')}} 886w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-24x16.jpg 24w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-75x50.jpg 75w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-36x24.jpg 36w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-48x32.jpg 48w" data-lazy-sizes="(max-width: 886px) 100vw, 886px" data-lazy-src="{{asset('public/images/12_.jpg')}}"/>
                                                    </picture>
                                                    <noscript>
                                                        <picture decoding="async" class="fl-photo-img wp-image-801 size-full" itemprop="image">
                                                            <source type="image/webp" srcset="{{asset('public/images/12_.jpg')}} 886w, {{asset('public/images/12_.jpg')}} 300w, {{asset('public/images/12_.jpg')}} 768w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-50x33.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-100x67.jpg.webp 100w" sizes="(max-width: 886px) 100vw, 886px"/>
                                                            <img decoding="async" src="{{asset('public/images/12_.jpg')}}" alt="Stöcklin AGV - Autonomous Navigation Technology" itemprop="image" height="591" width="886" srcset="{{asset('public/images/12_.jpg')}} 886w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-24x16.jpg 24w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-75x50.jpg 75w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-36x24.jpg 36w, https://bluebotics.com/wp-content/uploads/2020/10/11_Emmi_Ostermundingen-48x32.jpg 48w" sizes="(max-width: 886px) 100vw, 886px"/>
                                                        </picture>
                                                    </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-heading fl-node-5f3df04c63dea" data-node="5f3df04c63dea">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Finished Goods Warehouse</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- <div class="fl-module fl-module-separator fl-node-5f3df0d872481" data-node="5f3df0d872481">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-modal-popup fl-node-602e6ffddfb85" data-node="602e6ffddfb85">
                                            <div class="fl-module-content fl-node-content">
                                                <div  class="uabb-modal-parent-wrapper uabb-module-content uamodal-602e6ffddfb85 ">
                                                    <div class="uabb-modal uabb-drag-fix uabb-center-modal uabb-modal-youtube uabb-modal-custom uabb-effect-1 uabb-aspect-ratio-16_9" id="modal-602e6ffddfb85" data-content="youtube">
                                                    <div class="uabb-content ">
                                                        <span class="uabb-modal-close uabb-close-custom-popup-edge-top-right" >
                                                        <i class="uabb-close-icon fas fa-times"></i>			</span>
                                                        <div class="uabb-modal-text uabb-modal-content-data  fl-clearfix">
                                                            <div class="uabb-video-wrap">
                                                                <div class="uabb-modal-iframe uabb-video-player" data-src="youtube" data-id="nOaliAQXmcU" data-append="?version=3&enablejsapi=1" data-thumb="https://i.ytimg.com/vi/nOaliAQXmcU/hqdefault.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="uabb-overlay"></div>
                                                </div>
                                                <div class="uabb-modal-action-wrap">
                                                    <div class="uabb-modal-action uabb-trigger uabb-modal-photo-wrap" data-modal="602e6ffddfb85">
                                                    <img width="500" height="500" decoding="async" class="uabb-modal-photo" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Play video." data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Play-video.svg">
                                                    <noscript><img width="500" height="500" decoding="async" class="uabb-modal-photo" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Play-video.svg" alt="Button Play video."></noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6acb8f4d0 fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6acb8f4d0">
                                            <div class="fl-col fl-node-5f7f6acb8f6e5 fl-col-small" data-node="5f7f6acb8f6e5">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f3df09205aa3" data-node="5f3df09205aa3">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Client:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6acb8f6ea" data-node="5f7f6acb8f6ea">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6ad274fe7" data-node="5f7f6ad274fe7">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Stöcklin Logistick AG (Switzerland)</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6b27d6e9b fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6b27d6e9b">
                                            <div class="fl-col fl-node-5f7f6b27d7150 fl-col-small" data-node="5f7f6b27d7150">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6b459be8c" data-node="5f7f6b459be8c">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Vehicle:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6b27d7158" data-node="5f7f6b27d7158">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6b4dec2b9" data-node="5f7f6b4dec2b9">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Eagle-Ant 1 forklift</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6b2f02131 fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6b2f02131">
                                            <div class="fl-col fl-node-5f7f6b2f022e0 fl-col-small" data-node="5f7f6b2f022e0">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6b4414f43" data-node="5f7f6b4414f43">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Navigation:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6b2f022e4" data-node="5f7f6b2f022e4">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6b4c506ba" data-node="5f7f6b4c506ba">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>ANT lite<sup>+</sup></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="fl-module fl-module-advanced-icon fl-node-5ffcd248ed7c5 fl-visible-mobile" data-node="5ffcd248ed7c5">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content adv-icon-wrap adv-icon-horizontal adv-icon-right">
                                                    <a class="adv-icon-link adv-icon-1" href="https://www.stoecklin.com/en/floor-handling-equipment/automated-guided-vehicles/eagle-ant-1" target="_blank" rel="noopener" aria-label="Go to https://www.stoecklin.com/en/floor-handling-equipment/automated-guided-vehicles/eagle-ant-1">
                                                    <div class="uabb-module-content uabb-imgicon-wrap">
                                                        <div class="uabb-image
                                                            uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="uabb-image-content">
                                                                <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Exernal link." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg"/>
                                                                <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg" alt="Button Exernal link." title="" itemprop="image"/></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f7f6c4b7ea66 fl-col-small fl-col-has-cols hover-scale" data-node="5f7f6c4b7ea66">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-photo fl-node-5f7f6c4b7f463" data-node="5f7f6c4b7f463">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                    <div class="fl-photo-content fl-photo-img-jpg">
                                                    <picture decoding="async" class="fl-photo-img wp-image-798 size-large" itemprop="image">
                                                        <source type="image/webp" data-lazy-srcset="{{asset('public/images/13_.jpg')}} 1024w, {{asset('public/images/13_.jpg')}} 300w, {{asset('public/images/13_.jpg')}} 768w, {{asset('public/images/13_.jpg')}} 1536w, {{asset('public/images/13_.jpg')}} 2048w, {{asset('public/images/13_.jpg')}} 50w, {{asset('public/images/13_.jpg')}} 100w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                        <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" alt="Toyota Forklift AGV - Autonomous Navigation Technology" itemprop="image" height="683" width="1024" data-lazy-srcset="{{asset('public/images/13_.jpg')}} 1024w, {{asset('public/images/13_.jpg')}} 300w, {{asset('public/images/13_.jpg')}} 768w, {{asset('public/images/13_.jpg')}} 1536w, {{asset('public/images/13_.jpg')}} 2048w, {{asset('public/images/13_.jpg')}} 24w, {{asset('public/images/13_.jpg')}} 50w, {{asset('public/images/13_.jpg')}} 100w, {{asset('public/images/13_.jpg')}} 75w, {{asset('public/images/13_.jpg')}} 36w, {{asset('public/images/13_.jpg')}} 48w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="{{asset('public/images/13_.jpg')}}"/>
                                                    </picture>
                                                    <noscript>
                                                        <picture decoding="async" class="fl-photo-img wp-image-798 size-large" itemprop="image">
                                                            <source type="image/webp" srcset="{{asset('public/images/13_.jpg')}} 1024w, {{asset('public/images/13_.jpg')}} 300w, {{asset('public/images/13_.jpg')}} 768w, {{asset('public/images/13_.jpg')}} 1536w, {{asset('public/images/13_.jpg')}} 2048w, {{asset('public/images/13_.jpg')}} 50w, {{asset('public/images/13_.jpg')}} 100w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                            <img decoding="async" src="{{asset('public/images/13_.jpg')}}" alt="Toyota Forklift AGV - Autonomous Navigation Technology" itemprop="image" height="683" width="1024" srcset="{{asset('public/images/13_.jpg')}} 1024w, {{asset('public/images/13_.jpg')}} 300w, {{asset('public/images/13_.jpg')}} 768w, {{asset('public/images/13_.jpg')}} 1536w, {{asset('public/images/13_.jpg')}} 2048w, {{asset('public/images/13_.jpg')}} 24w, {{asset('public/images/13_.jpg')}} 50w, {{asset('public/images/13_.jpg')}} 100w, {{asset('public/images/13_.jpg')}} 75w, {{asset('public/images/13_.jpg')}} 36w, {{asset('public/images/13_.jpg')}} 48w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                        </picture>
                                                    </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-heading fl-node-5f7f6c4b7f466" data-node="5f7f6c4b7f466">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Distribution Warehouse</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- <div class="fl-module fl-module-separator fl-node-5f7f6c4b7f467" data-node="5f7f6c4b7f467">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6c4b7f468 fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6c4b7f468">
                                            <div class="fl-col fl-node-5f7f6c4b7f469 fl-col-small" data-node="5f7f6c4b7f469">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4b7f46a" data-node="5f7f6c4b7f46a">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Client:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6c4b7f46b" data-node="5f7f6c4b7f46b">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4b7f46c" data-node="5f7f6c4b7f46c">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Toyota Advanced Logistics (Bastian Solutions)</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6c4b7f46d fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6c4b7f46d">
                                            <div class="fl-col fl-node-5f7f6c4b7f46e fl-col-small" data-node="5f7f6c4b7f46e">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4b7f46f" data-node="5f7f6c4b7f46f">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Vehicle:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6c4b7f470" data-node="5f7f6c4b7f470">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4b7f471" data-node="5f7f6c4b7f471">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Core Tow Tractor<br />
                                                                (Cart Tugger)
                                                            </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6c4b7f472 fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6c4b7f472">
                                            <div class="fl-col fl-node-5f7f6c4b7f473 fl-col-small" data-node="5f7f6c4b7f473">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4b7f474" data-node="5f7f6c4b7f474">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Navigation:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6c4b7f475" data-node="5f7f6c4b7f475">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4b7f476" data-node="5f7f6c4b7f476">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>ANT lite<sup>+</sup></p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="fl-module fl-module-advanced-icon fl-node-5f8a0ae969271 fl-visible-mobile" data-node="5f8a0ae969271">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content adv-icon-wrap adv-icon-horizontal adv-icon-right">
                                                    <a class="adv-icon-link adv-icon-1" href="https://www.toyotaforklift.com/lifts/automated-guided-vehicles/core-tow-tractor-automated-forklift" target="_blank" rel="noopener" aria-label="Go to https://www.toyotaforklift.com/lifts/automated-guided-vehicles/core-tow-tractor-automated-forklift">
                                                    <div class="uabb-module-content uabb-imgicon-wrap">
                                                        <div class="uabb-image
                                                            uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="uabb-image-content">
                                                                <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Exernal link." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg"/>
                                                                <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg" alt="Button Exernal link." title="" itemprop="image"/></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f7f6c49837b7 fl-col-small fl-col-has-cols hover-scale" data-node="5f7f6c49837b7">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-photo fl-node-5f7f6c4983d81" data-node="5f7f6c4983d81">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                    <div class="fl-photo-content fl-photo-img-jpg">
                                                    <picture decoding="async" class="fl-photo-img wp-image-2959 size-full" itemprop="image">
                                                        <source type="image/webp" data-lazy-srcset="{{asset('public/images/14_.jpg')}} 850w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-300x194.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-768x497.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-50x32.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-100x65.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-150x97.jpg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20850%20550&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 850px) 100vw, 850px"/>
                                                        <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20850%20550&#039;%3E%3C/svg%3E" alt="BlueBotics autonomous navigation inside YeeFung Thomas AGV" itemprop="image" height="550" width="850" data-lazy-srcset="{{asset('public/images/14_.jpg')}} 850w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-300x194.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-768x497.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-50x32.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-100x65.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-150x97.jpg 150w" data-lazy-sizes="(max-width: 850px) 100vw, 850px" data-lazy-src="{{asset('public/images/14_.jpg')}}"/>
                                                    </picture>
                                                    <noscript>
                                                        <picture decoding="async" class="fl-photo-img wp-image-2959 size-full" itemprop="image">
                                                            <source type="image/webp" srcset="{{asset('public/images/14_.jpg')}} 850w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-300x194.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-768x497.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-50x32.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-100x65.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-150x97.jpg.webp 150w" sizes="(max-width: 850px) 100vw, 850px"/>
                                                            <img decoding="async" src="{{asset('public/images/14_.jpg')}}" alt="BlueBotics autonomous navigation inside YeeFung Thomas AGV" itemprop="image" height="550" width="850" srcset="{{asset('public/images/14_.jpg')}} 850w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-300x194.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-768x497.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-50x32.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-100x65.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/01/BlueBotics_autonomous_navigation_Shenzhen-Yee-Fung-Automation-Technology-Co_ANTRloc_ThomasGETA-LQQS32-150x97.jpg 150w" sizes="(max-width: 850px) 100vw, 850px"/>
                                                        </picture>
                                                    </noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-heading fl-node-5f7f6c4983d83" data-node="5f7f6c4983d83">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Raw Material Warehouse</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- <div class="fl-module fl-module-separator fl-node-5f7f6c4983d84" data-node="5f7f6c4983d84">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6c4983d85 fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6c4983d85">
                                            <div class="fl-col fl-node-5f7f6c4983d86 fl-col-small" data-node="5f7f6c4983d86">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4983d87" data-node="5f7f6c4983d87">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Client:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6c4983d88" data-node="5f7f6c4983d88">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4983d89" data-node="5f7f6c4983d89">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Shenzhen Yee Fung Automation Technology Co.</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6c4983d8a fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6c4983d8a">
                                            <div class="fl-col fl-node-5f7f6c4983d8b fl-col-small" data-node="5f7f6c4983d8b">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4983d8c" data-node="5f7f6c4983d8c">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Vehicle:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6c4983d8d" data-node="5f7f6c4983d8d">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4983d8e" data-node="5f7f6c4983d8e">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>Thomas<br />
                                                                (GETA LQQS32)
                                                            </p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-col-group fl-node-5f7f6c4983d8f fl-col-group-nested fl-col-group-custom-width" data-node="5f7f6c4983d8f">
                                            <div class="fl-col fl-node-5f7f6c4983d90 fl-col-small" data-node="5f7f6c4983d90">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4983d91" data-node="5f7f6c4983d91">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p style="text-align: right;">Navigation:</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fl-col fl-node-5f7f6c4983d92" data-node="5f7f6c4983d92">
                                                <div class="fl-col-content fl-node-content">
                                                    <div class="fl-module fl-module-rich-text fl-node-5f7f6c4983d93" data-node="5f7f6c4983d93">
                                                    <div class="fl-module-content fl-node-content">
                                                        <div class="fl-rich-text">
                                                            <p>ANT localization</p>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="fl-module fl-module-advanced-icon fl-node-5f8a0de0d691b fl-visible-mobile" data-node="5f8a0de0d691b">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="uabb-module-content adv-icon-wrap adv-icon-horizontal adv-icon-right">
                                                    <a class="adv-icon-link adv-icon-1" href="http://en.yfrobot.net/product/13.html" target="_blank" rel="noopener" aria-label="Go to http://en.yfrobot.net/product/13.html">
                                                    <div class="uabb-module-content uabb-imgicon-wrap">
                                                        <div class="uabb-image
                                                            uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="uabb-image-content">
                                                                <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Exernal link." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg"/>
                                                                <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg" alt="Button Exernal link." title="" itemprop="image"/></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-col-group fl-node-5f7f6cded4488" data-node="5f7f6cded4488">
                                    <div class="fl-col fl-node-5f7f6cded46d2 fl-col-small" data-node="5f7f6cded46d2">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-advanced-icon fl-node-5f8a0a9fe4a2d fl-visible-desktop-medium" data-node="5f8a0a9fe4a2d">
                                            <div class="fl-module-content fl-node-content">
                                                <!-- <div class="uabb-module-content adv-icon-wrap adv-icon-horizontal adv-icon-right">
                                                    <a class="adv-icon-link adv-icon-1" href="https://www.stoecklin.com/en/floor-handling-equipment/automated-guided-vehicles/eagle-ant-1" target="_blank" rel="noopener" aria-label="Go to https://www.stoecklin.com/en/floor-handling-equipment/automated-guided-vehicles/eagle-ant-1">
                                                    <div class="uabb-module-content uabb-imgicon-wrap">
                                                        <div class="uabb-image
                                                            uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="uabb-image-content">
                                                                <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Exernal link." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg"/>
                                                                <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg" alt="Button Exernal link." title="" itemprop="image"/></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f7f6cded46d6 fl-col-small" data-node="5f7f6cded46d6">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-advanced-icon fl-node-5f7f6eb643533 fl-visible-desktop-medium" data-node="5f7f6eb643533">
                                            <div class="fl-module-content fl-node-content">
                                                <!-- <div class="uabb-module-content adv-icon-wrap adv-icon-horizontal adv-icon-right">
                                                    <a class="adv-icon-link adv-icon-1" href="https://www.toyotaforklift.com/lifts/automated-guided-vehicles/core-tow-tractor-automated-forklift" target="_blank" rel="noopener" aria-label="Go to https://www.toyotaforklift.com/lifts/automated-guided-vehicles/core-tow-tractor-automated-forklift">
                                                    <div class="uabb-module-content uabb-imgicon-wrap">
                                                        <div class="uabb-image
                                                            uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="uabb-image-content">
                                                                <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Exernal link." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg"/>
                                                                <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg" alt="Button Exernal link." title="" itemprop="image"/></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f7f6cded46d8 fl-col-small" data-node="5f7f6cded46d8">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-advanced-icon fl-node-5f7f6da4a4f4a fl-visible-desktop-medium" data-node="5f7f6da4a4f4a">
                                            <div class="fl-module-content fl-node-content">
                                                <!-- <div class="uabb-module-content adv-icon-wrap adv-icon-horizontal adv-icon-right">
                                                    <a class="adv-icon-link adv-icon-1" href="http://en.yfrobot.net/product/13.html" target="_blank" rel="noopener" aria-label="Go to http://en.yfrobot.net/product/13.html">
                                                    <div class="uabb-module-content uabb-imgicon-wrap">
                                                        <div class="uabb-image
                                                            uabb-image-crop-custom		" itemscope itemtype="https://schema.org/ImageObject">
                                                            <div class="uabb-image-content">
                                                                <img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20500%20500'%3E%3C/svg%3E" alt="Button Exernal link." title="" itemprop="image" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg"/>
                                                                <noscript><img width="500" height="500" decoding="async"  class="uabb-photo-img wp-image-10898 size-thumbnail" src="https://bluebotics.com/wp-content/uploads/2021/02/Button-Exernal-link.svg" alt="Button Exernal link." title="" itemprop="image"/></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f3df2b387774 fl-row-custom-height fl-row-align-center" data-node="5f3df2b387774">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3df2b3be4e1" data-node="5f3df2b3be4e1">
                                    <div class="fl-col fl-node-5f3df2b3be730" data-node="5f3df2b3be730">
                                        <div class="fl-col-content fl-node-content"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5f3deb89bf0cb" data-node="5f3deb89bf0cb">
                            <div class="fl-row-content-wrap">
                            <div class="uabb-row-separator uabb-top-row-separator" ></div>
                            <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                <div class="fl-col-group fl-node-5f3deb8a0b6de fl-col-group-equal-height fl-col-group-align-center fl-col-group-custom-width" data-node="5f3deb8a0b6de">
                                    <div class="fl-col fl-node-5f3deb8a0ba39 fl-col-small" data-node="5f3deb8a0ba39">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-photo fl-node-5f3dec0e4119c" data-node="5f3dec0e4119c">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-photo fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
                                                    <div class="fl-photo-content fl-photo-img-png">
                                                    <a href="https://bluebotics.com/contact/" target="_self" itemprop="url">
                                                        <picture decoding="async" class="fl-photo-img wp-image-16911 size-large" itemprop="image">
                                                            <source type="image/webp" data-lazy-srcset="{{asset('public/images/15_.png')}} 1024w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-300x108.png.webp 300w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-768x278.png.webp 768w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-50x18.png.webp 50w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-100x36.png.webp 100w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-150x54.png.webp 150w, {{asset('public/images/15_.png')}} 1475w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20370&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                            <img decoding="async" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20370&#039;%3E%3C/svg%3E" alt="BlueBotics has ANT loc, ANT loc+ and ANT lite+." itemprop="image" height="370" width="1024" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-1024x370.png 1024w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-300x108.png 300w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-768x278.png 768w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-50x18.png 50w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-100x36.png 100w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-150x54.png 150w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter.png 1475w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-1024x370.png"/>
                                                        </picture>
                                                        <noscript>
                                                            <picture decoding="async" class="fl-photo-img wp-image-16911 size-large" itemprop="image">
                                                                <source type="image/webp" srcset="{{asset('public/images/15_.png')}} 1024w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-300x108.png.webp 300w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-768x278.png.webp 768w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-50x18.png.webp 50w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-100x36.png.webp 100w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-150x54.png.webp 150w, {{asset('public/images/15_.png')}} 1475w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                                <img decoding="async" src="https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-1024x370.png" alt="BlueBotics has ANT loc, ANT loc+ and ANT lite+." itemprop="image" height="370" width="1024" srcset="https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-1024x370.png 1024w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-300x108.png 300w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-768x278.png 768w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-50x18.png 50w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-100x36.png 100w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter-150x54.png 150w, https://bluebotics.com/wp-content/uploads/2022/03/All_New_3_ANT-Boxes_2022-Shorter.png 1475w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                            </picture>
                                                        </noscript>
                                                    </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="fl-col fl-node-5f3deb8a0ba40 fl-col-small" data-node="5f3deb8a0ba40">
                                        <div class="fl-col-content fl-node-content">
                                        <div class="fl-module fl-module-heading fl-node-5f3df3b764b21" data-node="5f3df3b764b21">
                                            <div class="fl-module-content fl-node-content">
                                                <h3 class="fl-heading">
                                                    <span class="fl-heading-text">Let's get started</span>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-separator fl-node-5f3ded6bbfaca" data-node="5f3ded6bbfaca">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-separator"></div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-rich-text fl-node-5f3debd5a42f6" data-node="5f3debd5a42f6">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-rich-text">
                                                    <p>Take the first step to automating your vehicle.<br />
                                                    Schedule a call with our expert team today.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-module fl-module-button fl-node-5f3df4beb9560 obvia" data-node="5f3df4beb9560">
                                            <div class="fl-module-content fl-node-content">
                                                <div class="fl-button-wrap fl-button-width-auto fl-button-left">
                                                    <a href="{{route('app.contact')}}" target="_self" class="fl-button" role="button">
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
      <link rel='stylesheet' id='gravity_forms_theme_reset-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-reset.min.css?ver=2.7.4' media='all' />
      <link rel='stylesheet' id='gravity_forms_theme_foundation-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-foundation.min.css?ver=2.7.4' media='all' />
      <link data-minify="1" rel='stylesheet' id='gravity_forms_theme_framework-css' href='https://bluebotics.com/wp-content/cache/min/1/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-theme-framework.min.css?ver=1681229321' media='all' />
      <link rel='stylesheet' id='gravity_forms_orbital_theme-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/assets/css/dist/gravity-forms-orbital-theme.min.css?ver=2.7.4' media='all' />
      <link rel='stylesheet' id='gforms_reset_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/formreset.min.css?ver=2.7.4' media='all' />
      <link rel='stylesheet' id='gforms_formsmain_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/formsmain.min.css?ver=2.7.4' media='all' />
      <link rel='stylesheet' id='gforms_ready_class_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/readyclass.min.css?ver=2.7.4' media='all' />
      <link rel='stylesheet' id='gforms_browsers_css-css' href='https://bluebotics.com/wp-content/plugins/gravityforms/legacy/css/browsers.min.css?ver=2.7.4' media='all' />
      <script id='labb-frontend-scripts-js-extra'>
         var labb_ajax_object = {"ajax_url":"https:\/\/bluebotics.com\/wp-admin\/admin-ajax.php","block_nonce":"6ae54de05f","gallery_nonce":"3970c1d6d4"};
         var labb_settings = {"custom_css":""};
      </script>
      <script src='https://bluebotics.com/wp-content/plugins/addons-for-beaver-builder-premium/assets/js/labb-frontend.min.js?ver=3.1' id='labb-frontend-scripts-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.waypoints.min.js?ver=2.6.3.2' id='jquery-waypoints-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.easing.min.js?ver=1.4' id='jquery-easing-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.fitvids.min.js?ver=1.2' id='jquery-fitvids-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.bxslider.min.js?ver=2.6.3.2' id='jquery-bxslider-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bbpowerpack/assets/js/owl.carousel.min.js?ver=2.30.0' id='pp-owl-carousel-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/plugins/bb-ultimate-addon/modules/modal-popup/js/js_cookie.js?ver=1681229321' id='uabbpopup-cookies-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/22-layout.js?ver=1681229321' id='fl-builder-layout-22-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.ba-throttle-debounce.min.js?ver=2.6.3.2' id='jquery-throttle-js' defer></script>
      <!-- <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/aaf90966d04a02c0d21d7b4cd687fd39-layout-bundle.js?ver=1681229322' id='fl-builder-layout-bundle-aaf90966d04a02c0d21d7b4cd687fd39-js' defer></script> -->
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.magnificpopup.min.js?ver=2.6.3.2' id='jquery-magnificpopup-js' defer></script>
      <script id='fl-automator-js-extra'>
         var themeopts = {"medium_breakpoint":"992","mobile_breakpoint":"768","scrollTopPosition":"800"};
      </script>
      <script src='https://bluebotics.com/wp-content/themes/bb-theme/js/theme.min.js?ver=1681736396' id='fl-automator-js' defer></script>
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