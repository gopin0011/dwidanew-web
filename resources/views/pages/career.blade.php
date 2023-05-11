@extends('layouts.app')

@section('css')
<style>
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://bluebotics.com/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' media='all' />
<style id='wp-block-library-theme-inline-css'>
    .wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:"0 0 1em 0"}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video{margin:0 0 1em}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
</style>
<link rel='stylesheet' id='classic-theme-styles-css' href='https://bluebotics.com/wp-includes/css/classic-themes.min.css?ver=1' media='all' />
<style id='global-styles-inline-css'>
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
    :where(.wp-block-columns.is-layout-flex){gap: 2em;}
    .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link data-minify="1" rel='stylesheet' id='wpml-blocks-css' href='https://bluebotics.com/wp-content/cache/min/1/wp-content/plugins/sitepress-multilingual-cms/dist/css/blocks/styles.css?ver=1682258217' media='all' />
<link data-minify="1" rel='stylesheet' id='labb-frontend-styles-css' href="{{asset('assets/wp-content/cache/labb-frontend.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='labb-icomoon-styles-css' href="{{asset('assets/wp-content/cache/icomoon.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='cookie-law-info-css' href="{{asset('assets/wp-content/plugins/cookie-law-info-public.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='cookie-law-info-gdpr-css' href="{{asset('assets/wp-content/plugins/cookie-law-info-gdpr.css?ver=1682258217')}}" media='all' />
<link rel='stylesheet' id='wpml-legacy-dropdown-0-css' href="{{asset('assets/plugins/sitepress-multilingual-cms/templates/language-switchers/style.min.css?ver=1')}}" media='all' />
<link rel='stylesheet' id='wpml-menu-item-0-css' href="{{asset('assets/plugins/sitepress-multilingual-cms/templates/menu-item/style.min.css?ver=1')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='font-awesome-5-css' href="{{asset('assets/wp-content/plugins/fontawesome/all.min.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='dashicons-css' href="{{asset('assets/wp-content/cache/dashicons.min.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='ultimate-icons-css' href="{{asset('assets/wp-content/cache/ultimate-icons/style.css?ver=1682258217')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='fl-builder-layout-bundle-67c5dade2f7e9c91310c3f808a9e40b1-css' href="{{asset('assets/uploads/bb-plugin/cache/67c5dade2f7e9c91310c3f808a9e40b1-layout-bundle.css?ver=1682623770')}}" media='all' />
<link rel='stylesheet' id='jquery-magnificpopup-css' href="{{asset('assets/wp-content/plugins/jquery.magnificpopup.min.css?ver=2.6.3.3')}}" media='all' />
<link rel='stylesheet' id='base-css' href="{{asset('assets/themes/bb-theme/css/base.min.css?ver=1682614687')}}" media='all' />
<link data-minify="1" rel='stylesheet' id='fl-automator-skin-css' href="{{asset('assets/uploads/bb-theme/skin-6408a59d69038.css?ver=1682258217')}}" media='all' />
<link rel='stylesheet' id='fl-child-theme-css' href='https://bluebotics.com/wp-content/themes/bb-theme-child/style.css?ver=1682614687' media='all' />
<link rel='stylesheet' id='pp-animate-css' href="{{asset('assets/plugins/bbpowerpack/assets/css/animate.min.css?ver=3.5.1')}}" media='all' />
<style>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
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
<div id="fl-main-content" class="fl-page-content" itemprop="mainContentOfPage" role="main">
   <div class="fl-builder-content fl-builder-content-10363 fl-builder-global-templates-locked" data-post-id="10363">
      <div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-602ef686c49f6 fl-row-custom-height fl-row-align-center" data-node="602ef686c49f6">
         <div class="fl-row-content-wrap">
            <div class="uabb-row-separator uabb-top-row-separator" ></div>
            <div class="fl-row-content fl-row-fixed-width fl-node-content">
               <div class="fl-col-group fl-node-602ef686c49f0 fl-col-group-equal-height fl-col-group-align-center" data-node="602ef686c49f0">
                  <div class="fl-col fl-node-602ef686c49f2" data-node="602ef686c49f2">
                     <div class="fl-col-content fl-node-content">
                        <div class="fl-module fl-module-heading fl-node-602ef686c49f3 fl-animation fl-fade-up" data-node="602ef686c49f3" data-animation-delay="0" data-animation-duration="2">
                           <div class="fl-module-content fl-node-content">
                              <h1 class="fl-heading">
                                 <span class="fl-heading-text">News</span>
                              </h1>
                           </div>
                        </div>
                        <div class="fl-module fl-module-separator fl-node-602ef686c49f5" data-node="602ef686c49f5">
                           <div class="fl-module-content fl-node-content">
                              <div class="fl-separator"></div>
                           </div>
                        </div>
                        <div class="fl-module fl-module-heading fl-node-602ef686c49f4" data-node="602ef686c49f4">
                           <div class="fl-module-content fl-node-content">
                              <h4 class="fl-heading">
                                 <span class="fl-heading-text">The latest updates from bluebotics</span>
                              </h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-602ef686c49f9" data-node="602ef686c49f9">
         <div class="fl-row-content-wrap">
            <div class="uabb-row-separator uabb-top-row-separator" ></div>
            <div class="fl-row-content fl-row-full-width fl-node-content">
               <div class="fl-col-group fl-node-602ef686c49f7 fl-col-group-custom-width" data-node="602ef686c49f7">
                  <div class="fl-col fl-node-602ef686c49f8" data-node="602ef686c49f8">
                     <div class="fl-col-content fl-node-content">
                        <div class="fl-module fl-module-post-grid fl-node-602ef686c49fa top_layer" data-node="602ef686c49fa">
                           <div class="fl-module-content fl-node-content">
                              <div class="fl-post-feed" itemscope="itemscope" itemtype="https://schema.org/Blog">
                                 <div class="fl-post-feed-post fl-post-feed-image-above-title fl-post-align-default post-20620 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-featured-post tag-featured-news" itemscope itemtype="https://schema.org/BlogPosting">
                                    <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-prolog-agv-automation/" content="BlueBotics and ProLog Automation Join  Forces to Drive German AGV Adoption" />
                                    <meta itemprop="datePublished" content="2023-04-04" />
                                    <meta itemprop="dateModified" content="2023-04-25" />
                                    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                       <meta itemprop="name" content="BlueBotics">
                                    </div>
                                    <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                       <meta itemprop="url" content="https://bluebotics.com/author/rachelrayner/" />
                                       <meta itemprop="name" content="Rachel Rayner" />
                                    </div>
                                    <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                       <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41.png" />
                                       <meta itemprop="width" content="1600" />
                                       <meta itemprop="height" content="400" />
                                    </div>
                                    <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                       <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                       <meta itemprop="userInteractionCount" content="0" />
                                    </div>
                                    <div class="fl-post-feed-image">
                                       <a href="https://bluebotics.com/bluebotics-prolog-agv-automation/" rel="bookmark" title="BlueBotics and ProLog Automation Join  Forces to Drive German AGV Adoption">
                                          <picture class="attachment-large size-large wp-post-image" decoding="async">
                                             <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1024x256.png.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-300x75.png.webp 300w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-768x192.png.webp 768w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1536x384.png.webp 1536w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41.png.webp 1600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20256&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                             <img width="1024" height="256" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20256&#039;%3E%3C/svg%3E" alt="We&#039;re delighted to partner with ProLog Automation." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1024x256.png 1024w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-300x75.png 300w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-768x192.png 768w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1536x384.png 1536w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41.png 1600w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1024x256.png"/>
                                          </picture>
                                          <noscript>
                                             <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1024x256.png.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-300x75.png.webp 300w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-768x192.png.webp 768w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1536x384.png.webp 1536w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41.png.webp 1600w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                <img width="1024" height="256" src="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1024x256.png" alt="We&#039;re delighted to partner with ProLog Automation." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1024x256.png 1024w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-300x75.png 300w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-768x192.png 768w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41-1536x384.png 1536w, https://bluebotics.com/wp-content/uploads/2023/04/MicrosoftTeams-image-41.png 1600w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                             </picture>
                                          </noscript>
                                       </a>
                                    </div>
                                    <div class="fl-post-feed-text">
                                       <div class="fl-post-feed-header">
                                          <h2 class="fl-post-feed-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-prolog-agv-automation/" rel="bookmark" title="BlueBotics and ProLog Automation Join  Forces to Drive German AGV Adoption">BlueBotics and ProLog Automation Join  Forces to Drive German AGV Adoption</a>
                                          </h2>
                                          <div class="fl-post-feed-meta">
                                             <span class="fl-post-feed-date">
                                             April 4, 2023					</span>
                                          </div>
                                       </div>
                                       <div class="fl-post-feed-content" itemprop="text">
                                          <p>The Swiss vehicle navigation leader has teamed up with the Stuttgart-based AGV consulting and integration experts to bring the benefits of ‘ANT driven’ AGV solutions to organizations across Germany. BlueBotics and ProLog Automation have signed a strategic partnership to help drive the adoption of automated guided vehicles (AGV/FTS) across the German manufacturing and logistics sectors.&hellip;</p>
                                          <a class="fl-post-feed-more" href="https://bluebotics.com/bluebotics-prolog-agv-automation/" title="BlueBotics and ProLog Automation Join  Forces to Drive German AGV Adoption">Read More >></a>
                                       </div>
                                    </div>
                                    <div class="fl-clear"></div>
                                 </div>
                              </div>
                              <div class="fl-clear"></div>
                           </div>
                        </div>
                        <div class="fl-module fl-module-post-grid fl-node-602ef686c49ff top_layer" data-node="602ef686c49ff">
                           <div class="fl-module-content fl-node-content">
                              <div class="fl-post-grid" itemscope="itemscope" itemtype="https://schema.org/Blog">
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-13860 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-business tag-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-events/" content="Meet BlueBotics at These Events" />
                                       <meta itemprop="datePublished" content="2023-04-26" />
                                       <meta itemprop="dateModified" content="2023-04-26" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/rachelrayner/" />
                                          <meta itemprop="name" content="Rachel Rayner" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1.jpg" />
                                          <meta itemprop="width" content="1806" />
                                          <meta itemprop="height" content="1257" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="0" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/bluebotics-events/" rel="bookmark" title="Meet BlueBotics at These Events">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1024x713.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-300x209.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-768x535.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1536x1069.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-50x35.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-100x70.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-150x104.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1.jpg.webp 1806w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20713&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                <img width="1024" height="713" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20713&#039;%3E%3C/svg%3E" alt="BlueBotics Events 2022 team at Modex in Atlanta." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1024x713.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-300x209.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-768x535.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1536x1069.jpg 1536w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-50x35.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-100x70.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-150x104.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1.jpg 1806w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1024x713.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1024x713.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-300x209.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-768x535.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1536x1069.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-50x35.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-100x70.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-150x104.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1.jpg.webp 1806w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                   <img width="1024" height="713" src="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1024x713.jpg" alt="BlueBotics Events 2022 team at Modex in Atlanta." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1024x713.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-300x209.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-768x535.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-1536x1069.jpg 1536w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-50x35.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-100x70.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1-150x104.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/04/BlueBotics_Events_2022_b-1.jpg 1806w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-events/" title="Meet BlueBotics at These Events">Meet BlueBotics at These Events</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             April 26, 2023				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>BlueBotics will be present at the following events. We would be happy to meet you in person and answer any questions you may have.</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/bluebotics-events/" title="Meet BlueBotics at These Events">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-20256 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-mastermover-agv-navigation/" content="BlueBotics Partners with MasterMover for Best-in-Class AGV Navigation" />
                                       <meta itemprop="datePublished" content="2023-03-20" />
                                       <meta itemprop="dateModified" content="2023-04-12" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/rachelrayner/" />
                                          <meta itemprop="name" content="Rachel Rayner" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-scaled.jpg" />
                                          <meta itemprop="width" content="2560" />
                                          <meta itemprop="height" content="1463" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="0" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/bluebotics-mastermover-agv-navigation/" rel="bookmark" title="BlueBotics Partners with MasterMover for Best-in-Class AGV Navigation">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1024x585.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-300x171.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-768x439.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1536x878.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-2048x1170.jpg.webp 2048w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20585&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                <img width="1024" height="585" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20585&#039;%3E%3C/svg%3E" alt="MasterMover has partnered with BlueBotics" decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1024x585.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-300x171.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-768x439.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1536x878.jpg 1536w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-2048x1170.jpg 2048w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1024x585.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1024x585.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-300x171.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-768x439.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1536x878.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-2048x1170.jpg.webp 2048w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                   <img width="1024" height="585" src="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1024x585.jpg" alt="MasterMover has partnered with BlueBotics" decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1024x585.jpg 1024w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-300x171.jpg 300w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-768x439.jpg 768w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-1536x878.jpg 1536w, https://bluebotics.com/wp-content/uploads/2023/03/MicrosoftTeams-image-13-2048x1170.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-mastermover-agv-navigation/" title="BlueBotics Partners with MasterMover for Best-in-Class AGV Navigation">BlueBotics Partners with MasterMover for Best-in-Class AGV Navigation</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             March 20, 2023				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>Vehicle automation leader BlueBotics has partnered with MasterMover, the world’s leading manufacturer of electric tug and tow solutions, to provide best-in-class ANT navigation technologies for MasterMover’s range of Automated Guided Vehicles.</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/bluebotics-mastermover-agv-navigation/" title="BlueBotics Partners with MasterMover for Best-in-Class AGV Navigation">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-17482 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-business" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-launches-antdriven/" content="BlueBotics Launches ANTdriven.com to Help Professionals Start Their AGV Journeys" />
                                       <meta itemprop="datePublished" content="2022-05-31" />
                                       <meta itemprop="dateModified" content="2022-10-13" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/mattwade/" />
                                          <meta itemprop="name" content="Matt Wade" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop.jpg" />
                                          <meta itemprop="width" content="2000" />
                                          <meta itemprop="height" content="1000" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="0" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/bluebotics-launches-antdriven/" rel="bookmark" title="BlueBotics Launches ANTdriven.com to Help Professionals Start Their AGV Journeys">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1024x512.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-300x150.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-768x384.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1536x768.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-50x25.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-100x50.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-150x75.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop.jpg.webp 2000w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20512&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                <img width="1024" height="512" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20512&#039;%3E%3C/svg%3E" alt="ANTdriven allows you to start your AGV journey." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1024x512.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-300x150.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-768x384.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1536x768.jpg 1536w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-50x25.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-100x50.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-150x75.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop.jpg 2000w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1024x512.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1024x512.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-300x150.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-768x384.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1536x768.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-50x25.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-100x50.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-150x75.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop.jpg.webp 2000w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                   <img width="1024" height="512" src="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1024x512.jpg" alt="ANTdriven allows you to start your AGV journey." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1024x512.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-300x150.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-768x384.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-1536x768.jpg 1536w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-50x25.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-100x50.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop-150x75.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/05/white-background-antdriven-laptop.jpg 2000w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-launches-antdriven/" title="BlueBotics Launches ANTdriven.com to Help Professionals Start Their AGV Journeys">BlueBotics Launches ANTdriven.com to Help Professionals Start Their AGV Journeys</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             May 31, 2022				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>BlueBotics has launched ANTdriven.com. This new educational resource enables warehouse, factory, and supply chain decision-makers to learn about and explore a wide range of different automated vehicle technologies from across the ANT navigation ecosystem. In today’s challenging business landscape, staff such as warehouse and factory managers are increasingly turning to automation to ensure the ongoing&hellip;</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/bluebotics-launches-antdriven/" title="BlueBotics Launches ANTdriven.com to Help Professionals Start Their AGV Journeys">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-16821 post type-post status-publish format-standard has-post-thumbnail hentry category-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/oceaneering-chooses-bluebotics-navigation/" content="Oceaneering Chooses BlueBotics Navigation Technology for New Product Lines" />
                                       <meta itemprop="datePublished" content="2022-03-28" />
                                       <meta itemprop="dateModified" content="2022-10-13" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/mattwade/" />
                                          <meta itemprop="name" content="Matt Wade" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png" />
                                          <meta itemprop="width" content="768" />
                                          <meta itemprop="height" content="432" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="6" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/oceaneering-chooses-bluebotics-navigation/" rel="bookmark" title="Oceaneering Chooses BlueBotics Navigation Technology for New Product Lines">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png.webp 768w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-300x169.png.webp 300w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-50x28.png.webp 50w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-100x56.png.webp 100w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-150x84.png.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20768%20432&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 768px) 100vw, 768px"/>
                                                <img width="768" height="432" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20768%20432&#039;%3E%3C/svg%3E" alt="Oceaneering chooses BlueBotics." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png 768w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-300x169.png 300w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-50x28.png 50w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-100x56.png 100w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-150x84.png 150w" data-lazy-sizes="(max-width: 768px) 100vw, 768px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png.webp 768w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-300x169.png.webp 300w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-50x28.png.webp 50w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-100x56.png.webp 100w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-150x84.png.webp 150w" sizes="(max-width: 768px) 100vw, 768px"/>
                                                   <img width="768" height="432" src="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png" alt="Oceaneering chooses BlueBotics." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1.png 768w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-300x169.png 300w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-50x28.png 50w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-100x56.png 100w, https://bluebotics.com/wp-content/uploads/2022/04/CompactMover-FOL-U-1200-220321_CM_FOL_01-edited-position-1-768x432-1-150x84.png 150w" sizes="(max-width: 768px) 100vw, 768px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/oceaneering-chooses-bluebotics-navigation/" title="Oceaneering Chooses BlueBotics Navigation Technology for New Product Lines">Oceaneering Chooses BlueBotics Navigation Technology for New Product Lines</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             March 28, 2022				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>March 28, 2022, Atlanta, Georgia Oceaneering International announced today at MODEX that it has chosen BlueBotics, S.A, to provide navigation technology for its line of industrial autonomous mobile robots. “Our goal is to unlock the full potential of mobile robotics and enable widespread adoption in all industries,” said Henny Bouwmeester, Vice President and General Manager&hellip;</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/oceaneering-chooses-bluebotics-navigation/" title="Oceaneering Chooses BlueBotics Navigation Technology for New Product Lines">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-16755 post type-post status-publish format-standard has-post-thumbnail hentry category-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/online-event-the-future-of-electrification/" content="[Online Event] The Future of Electrification" />
                                       <meta itemprop="datePublished" content="2022-03-07" />
                                       <meta itemprop="dateModified" content="2022-08-17" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/rachelrayner/" />
                                          <meta itemprop="name" content="Rachel Rayner" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter.png" />
                                          <meta itemprop="width" content="1600" />
                                          <meta itemprop="height" content="900" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="10" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/online-event-the-future-of-electrification/" rel="bookmark" title="[Online Event] The Future of Electrification">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1024x576.png.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-300x169.png.webp 300w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-768x432.png.webp 768w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1536x864.png.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-50x28.png.webp 50w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-100x56.png.webp 100w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-150x84.png.webp 150w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter.png.webp 1600w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                <img width="1024" height="576" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20576&#039;%3E%3C/svg%3E" alt="Future of Electrification Virtual conference" decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1024x576.png 1024w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-300x169.png 300w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-768x432.png 768w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1536x864.png 1536w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-50x28.png 50w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-100x56.png 100w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-150x84.png 150w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter.png 1600w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1024x576.png"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1024x576.png.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-300x169.png.webp 300w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-768x432.png.webp 768w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1536x864.png.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-50x28.png.webp 50w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-100x56.png.webp 100w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-150x84.png.webp 150w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter.png.webp 1600w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                   <img width="1024" height="576" src="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1024x576.png" alt="Future of Electrification Virtual conference" decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1024x576.png 1024w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-300x169.png 300w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-768x432.png 768w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-1536x864.png 1536w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-50x28.png 50w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-100x56.png 100w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter-150x84.png 150w, https://bluebotics.com/wp-content/uploads/2022/03/FoE_Twitter.png 1600w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/online-event-the-future-of-electrification/" title="[Online Event] The Future of Electrification">[Online Event] The Future of Electrification</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             March 7, 2022				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>Join influencers and industry experts to discuss trends, best practices, practical challenges and the opportunities of electrification across a variety of industries, including construction, material handling, emobility, and robotics/UAV. </p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/online-event-the-future-of-electrification/" title="[Online Event] The Future of Electrification">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-16715 post type-post status-publish format-standard has-post-thumbnail hentry category-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-fleet-modex-2022/" content="BlueBotics to Showcase ANT Navigation With full AGV Fleet Demo at MODEX 2022" />
                                       <meta itemprop="datePublished" content="2022-03-01" />
                                       <meta itemprop="dateModified" content="2022-10-13" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/rachelrayner/" />
                                          <meta itemprop="name" content="Rachel Rayner" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg" />
                                          <meta itemprop="width" content="800" />
                                          <meta itemprop="height" content="450" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="8" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/bluebotics-fleet-modex-2022/" rel="bookmark" title="BlueBotics to Showcase ANT Navigation With full AGV Fleet Demo at MODEX 2022">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg.webp 800w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-150x84.jpg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20800%20450&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 800px) 100vw, 800px"/>
                                                <img width="800" height="450" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20800%20450&#039;%3E%3C/svg%3E" alt="A fleet of mini lite mobile robots at an automation tradeshow." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg 800w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-150x84.jpg 150w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg.webp 800w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-150x84.jpg.webp 150w" sizes="(max-width: 800px) 100vw, 800px"/>
                                                   <img width="800" height="450" src="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg" alt="A fleet of mini lite mobile robots at an automation tradeshow." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow.jpg 800w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/02/A-fleet-of-mini-lite-mobile-robots-at-an-automation-tradeshow-150x84.jpg 150w" sizes="(max-width: 800px) 100vw, 800px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-fleet-modex-2022/" title="BlueBotics to Showcase ANT Navigation With full AGV Fleet Demo at MODEX 2022">BlueBotics to Showcase ANT Navigation With full AGV Fleet Demo at MODEX 2022</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             March 1, 2022				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>BlueBotics is heading to MODEX 2022 to showcase a unique multi-brand fleet demo of vehicles driven by its ANT technology.<br />
                                                The booth will feature several different brands of AMRs and AGVs from across the ANT navigation ecosystem.
                                             </p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/bluebotics-fleet-modex-2022/" title="BlueBotics to Showcase ANT Navigation With full AGV Fleet Demo at MODEX 2022">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-16419 post type-post status-publish format-standard has-post-thumbnail hentry category-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-acquired-zapi-group/" content="BlueBotics is Acquired by ZAPI GROUP" />
                                       <meta itemprop="datePublished" content="2022-02-02" />
                                       <meta itemprop="dateModified" content="2022-08-17" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/mattwade/" />
                                          <meta itemprop="name" content="Matt Wade" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-scaled-e1643721743879.jpg" />
                                          <meta itemprop="width" content="800" />
                                          <meta itemprop="height" content="533" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="0" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/bluebotics-acquired-zapi-group/" rel="bookmark" title="BlueBotics is Acquired by ZAPI GROUP">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1024x683.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-768x512.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1536x1024.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-2048x1365.jpg.webp 2048w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-50x33.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-100x67.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-150x100.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-scaled-e1643721743879.jpg.webp 800w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                <img width="1024" height="683" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%201024%20683&#039;%3E%3C/svg%3E" alt="ZAPI GROUP acquires BlueBotics." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1024x683.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1536x1024.jpg 1536w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-2048x1365.jpg 2048w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-scaled-e1643721743879.jpg 800w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1024x683.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1024x683.jpg.webp 1024w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-768x512.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1536x1024.jpg.webp 1536w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-2048x1365.jpg.webp 2048w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-50x33.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-100x67.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-150x100.jpg.webp 150w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-scaled-e1643721743879.jpg.webp 800w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                   <img width="1024" height="683" src="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1024x683.jpg" alt="ZAPI GROUP acquires BlueBotics." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1024x683.jpg 1024w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-300x200.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-768x512.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-1536x1024.jpg 1536w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-2048x1365.jpg 2048w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-50x33.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-100x67.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-150x100.jpg 150w, https://bluebotics.com/wp-content/uploads/2022/02/ZAPI-GROUP-acquires-BlueBotics-scaled-e1643721743879.jpg 800w" sizes="(max-width: 1024px) 100vw, 1024px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-acquired-zapi-group/" title="BlueBotics is Acquired by ZAPI GROUP">BlueBotics is Acquired by ZAPI GROUP</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             February 2, 2022				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>We are excited to announce that BlueBotics has been acquired by ZAPI GROUP. </p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/bluebotics-acquired-zapi-group/" title="BlueBotics is Acquired by ZAPI GROUP">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-13883 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/durr-systems-partnership-paint-shop-agv/" content="BlueBotics and Dürr Systems Sign Agreement to Drive Future of Paint Shop AGVs" />
                                       <meta itemprop="datePublished" content="2021-10-29" />
                                       <meta itemprop="dateModified" content="2022-08-17" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/mattwade/" />
                                          <meta itemprop="name" content="Matt Wade" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg" />
                                          <meta itemprop="width" content="800" />
                                          <meta itemprop="height" content="450" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="0" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/durr-systems-partnership-paint-shop-agv/" rel="bookmark" title="BlueBotics and Dürr Systems Sign Agreement to Drive Future of Paint Shop AGVs">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg.webp 800w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-150x84.jpg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20800%20450&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 800px) 100vw, 800px"/>
                                                <img width="800" height="450" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20800%20450&#039;%3E%3C/svg%3E" alt="BlueBotics Durr Paint Shop AGV." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg 800w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-150x84.jpg 150w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg.webp 800w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-150x84.jpg.webp 150w" sizes="(max-width: 800px) 100vw, 800px"/>
                                                   <img width="800" height="450" src="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg" alt="BlueBotics Durr Paint Shop AGV." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat.jpg 800w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2021/09/BlueBotics-Durr-Paint-Shop-AGV-Feat-150x84.jpg 150w" sizes="(max-width: 800px) 100vw, 800px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/durr-systems-partnership-paint-shop-agv/" title="BlueBotics and Dürr Systems Sign Agreement to Drive Future of Paint Shop AGVs">BlueBotics and Dürr Systems Sign Agreement to Drive Future of Paint Shop AGVs</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             October 29, 2021				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>BlueBotics SA has signed an exclusive agreement with Dürr Systems AG to create innovative AGVs that will revolutionize paint shop efficiency.</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/durr-systems-partnership-paint-shop-agv/" title="BlueBotics and Dürr Systems Sign Agreement to Drive Future of Paint Shop AGVs">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-14674 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/bluebotics-ceo-receives-2021-industrie-award/" content="BlueBotics CEO Receives 2021 Industrie 4.0 Award" />
                                       <meta itemprop="datePublished" content="2021-09-11" />
                                       <meta itemprop="dateModified" content="2022-08-17" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/rachelrayner/" />
                                          <meta itemprop="name" content="Rachel Rayner" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2021/10/original-1.webp" />
                                          <meta itemprop="width" content="800" />
                                          <meta itemprop="height" content="534" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="3" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/bluebotics-ceo-receives-2021-industrie-award/" rel="bookmark" title="BlueBotics CEO Receives 2021 Industrie 4.0 Award">
                                             <img width="800" height="534" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20534'%3E%3C/svg%3E" class="attachment-large size-large wp-post-image" alt="BlueBotics CEO Nicola Tomatis was honored in the fourth annual Prix Industrie 4.0 award as one of the “Shapers” of Swiss industry." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2021/10/original-1.webp 800w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-300x200.webp 300w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-768x513.webp 768w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-50x33.webp 50w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-100x67.webp 100w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-150x100.webp 150w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2021/10/original-1.webp" />
                                             <noscript><img width="800" height="534" src="https://bluebotics.com/wp-content/uploads/2021/10/original-1.webp" class="attachment-large size-large wp-post-image" alt="BlueBotics CEO Nicola Tomatis was honored in the fourth annual Prix Industrie 4.0 award as one of the “Shapers” of Swiss industry." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2021/10/original-1.webp 800w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-300x200.webp 300w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-768x513.webp 768w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-50x33.webp 50w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-100x67.webp 100w, https://bluebotics.com/wp-content/uploads/2021/10/original-1-150x100.webp 150w" sizes="(max-width: 800px) 100vw, 800px" /></noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/bluebotics-ceo-receives-2021-industrie-award/" title="BlueBotics CEO Receives 2021 Industrie 4.0 Award">BlueBotics CEO Receives 2021 Industrie 4.0 Award</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             September 11, 2021				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>BlueBotics CEO Nicola Tomatis was honored in the fourth annual Prix Industrie 4.0 award as one of the “Shapers” of Swiss industry. The Industrie 4.0 Award recognizes innovation, and aims to encourage others in the community. Switzerland is a global center of innovation and has been crowned the “most innovative country” by the World Intellectual&hellip;</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/bluebotics-ceo-receives-2021-industrie-award/" title="BlueBotics CEO Receives 2021 Industrie 4.0 Award">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="fl-post-column">
                                    <div class="fl-post-grid-post fl-post-grid-image-above-title fl-post-columns-post fl-post-align-default post-13906 post type-post status-publish format-standard has-post-thumbnail hentry category-news tag-news" itemscope itemtype="https://schema.org/BlogPosting">
                                       <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://bluebotics.com/dolphin-agvs-by-dta/" content="Introducing ANT driven Dolphin AGVs by DTA" />
                                       <meta itemprop="datePublished" content="2021-09-07" />
                                       <meta itemprop="dateModified" content="2022-09-14" />
                                       <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                          <meta itemprop="name" content="BlueBotics">
                                       </div>
                                       <div itemscope itemprop="author" itemtype="https://schema.org/Person">
                                          <meta itemprop="url" content="https://bluebotics.com/author/mattwade/" />
                                          <meta itemprop="name" content="Matt Wade" />
                                       </div>
                                       <div itemscope itemprop="image" itemtype="https://schema.org/ImageObject">
                                          <meta itemprop="url" content="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg" />
                                          <meta itemprop="width" content="800" />
                                          <meta itemprop="height" content="450" />
                                       </div>
                                       <div itemprop="interactionStatistic" itemscope itemtype="https://schema.org/InteractionCounter">
                                          <meta itemprop="interactionType" content="https://schema.org/CommentAction" />
                                          <meta itemprop="userInteractionCount" content="0" />
                                       </div>
                                       <div class="fl-post-grid-image">
                                          <a href="https://bluebotics.com/dolphin-agvs-by-dta/" rel="bookmark" title="Introducing ANT driven Dolphin AGVs by DTA">
                                             <picture class="attachment-large size-large wp-post-image" decoding="async">
                                                <source type="image/webp" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg.webp 800w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-150x84.jpg.webp 150w" srcset="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20800%20450&#039;%3E%3C/svg%3E" data-lazy-sizes="(max-width: 800px) 100vw, 800px"/>
                                                <img width="800" height="450" src="data:image/svg+xml,%3Csvg%20xmlns=&#039;http://www.w3.org/2000/svg&#039;%20viewBox=&#039;0%200%20800%20450&#039;%3E%3C/svg%3E" alt="DTA Dolphin AGV BlueBotics." decoding="async" data-lazy-srcset="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg 800w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-150x84.jpg 150w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-lazy-src="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg"/>
                                             </picture>
                                             <noscript>
                                                <picture class="attachment-large size-large wp-post-image" decoding="async" loading="lazy">
                                                   <source type="image/webp" srcset="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg.webp 800w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-300x169.jpg.webp 300w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-768x432.jpg.webp 768w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-50x28.jpg.webp 50w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-100x56.jpg.webp 100w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-150x84.jpg.webp 150w" sizes="(max-width: 800px) 100vw, 800px"/>
                                                   <img width="800" height="450" src="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg" alt="DTA Dolphin AGV BlueBotics." decoding="async" loading="lazy" srcset="https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat.jpg 800w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-300x169.jpg 300w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-768x432.jpg 768w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-50x28.jpg 50w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-100x56.jpg 100w, https://bluebotics.com/wp-content/uploads/2022/09/DTA-Dolphin-AGV-feat-150x84.jpg 150w" sizes="(max-width: 800px) 100vw, 800px"/>
                                                </picture>
                                             </noscript>
                                          </a>
                                       </div>
                                       <div class="fl-post-grid-text">
                                          <h2 class="fl-post-grid-title" itemprop="headline">
                                             <a href="https://bluebotics.com/dolphin-agvs-by-dta/" title="Introducing ANT driven Dolphin AGVs by DTA">Introducing ANT driven Dolphin AGVs by DTA</a>
                                          </h2>
                                          <div class="fl-post-grid-meta">
                                             <span class="fl-post-grid-date">
                                             September 7, 2021				</span>
                                          </div>
                                          <div class="fl-post-grid-content">
                                             <p>DTA has announced the release of its new heavy transporter Dolphin AGVs, driven by BlueBotics ANT navigation.</p>
                                             <a class="fl-post-grid-more" href="https://bluebotics.com/dolphin-agvs-by-dta/" title="Introducing ANT driven Dolphin AGVs by DTA">Read More >></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="fl-clear"></div>
                              <div class="fl-builder-pagination">
                                 <ul class='page-numbers'>
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="https://bluebotics.com/category/news/paged-2/2/">2</a></li>
                                    <li><a class="page-numbers" href="https://bluebotics.com/category/news/paged-2/3/">3</a></li>
                                    <li><a class="page-numbers" href="https://bluebotics.com/category/news/paged-2/4/">4</a></li>
                                    <li><a class="next page-numbers" href="https://bluebotics.com/category/news/paged-2/2/">Next &raquo;</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="fl-col fl-node-602ef686c49fb fl-col-small" data-node="602ef686c49fb">
                     <div class="fl-col-content fl-node-content">
                        <div class="fl-module fl-module-widget fl-node-602ef686c49fe" data-node="602ef686c49fe">
                           <div class="fl-module-content fl-node-content">
                              <div class="fl-widget">
                                 <div class="widget widget_search">
                                    <form aria-label="Search" method="get" role="search" action="https://bluebotics.com/" title="Type and press Enter to search.">
                                       <input aria-label="Search" type="search" class="fl-search-input form-control" name="s" placeholder="Search"  value="" onfocus="if (this.value === 'Search') { this.value = ''; }" onblur="if (this.value === '') this.value='Search';" />
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="fl-module fl-module-widget fl-node-602ef686c49fc" data-node="602ef686c49fc">
                           <div class="fl-module-content fl-node-content">
                              <div class="fl-widget">
                                 <div class="widget widget_categories">
                                    <h2 class="widgettitle">Categories</h2>
                                    <ul>
                                       <li class="cat-item cat-item-33"><a href="https://bluebotics.com/category/business/">Business</a></li>
                                       <li class="cat-item cat-item-6"><a href="https://bluebotics.com/category/featured-post/">Featured Post</a></li>
                                       <li class="cat-item cat-item-65"><a href="https://bluebotics.com/category/navigation/">Navigation</a></li>
                                       <li class="cat-item cat-item-32 current-cat"><a aria-current="page" href="https://bluebotics.com/category/news/">News</a></li>
                                       <li class="cat-item cat-item-35"><a href="https://bluebotics.com/category/success-stories/">Success stories</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="fl-module fl-module-widget fl-node-602ef686c49fd" data-node="602ef686c49fd">
                           <div class="fl-module-content fl-node-content">
                              <div class="fl-widget">
                                 <div class="widget widget_recent_entries">
                                    <h2 class="widgettitle">Recent Posts</h2>
                                    <ul>
                                       <li>
                                          <a href="https://bluebotics.com/bluebotics-events/">Meet BlueBotics at These Events</a>
                                       </li>
                                       <li>
                                          <a href="https://bluebotics.com/bluebotics-prolog-agv-automation/">BlueBotics and ProLog Automation Join  Forces to Drive German AGV Adoption</a>
                                       </li>
                                       <li>
                                          <a href="https://bluebotics.com/bluebotics-mastermover-agv-navigation/">BlueBotics Partners with MasterMover for Best-in-Class AGV Navigation</a>
                                       </li>
                                       <li>
                                          <a href="https://bluebotics.com/ant-driven-vehicle-installation-commissioning/">How to Install an ANT Driven Vehicle in 5 Steps</a>
                                       </li>
                                       <li>
                                          <a href="https://bluebotics.com/bluebotics-launches-antdriven/">BlueBotics Launches ANTdriven.com to Help Professionals Start Their AGV Journeys</a>
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
      <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-602ef686c49ec" data-node="602ef686c49ec">
         <div class="fl-row-content-wrap">
            <div class="uabb-row-separator uabb-top-row-separator" ></div>
            <div class="fl-row-content fl-row-fixed-width fl-node-content">
            </div>
         </div>
      </div>
   </div>
   <div class="uabb-js-breakpoint" style="display: none;"></div>
</div>
@endsection

@section('js')
      <script id='labb-frontend-scripts-js-extra'>
         var labb_ajax_object = {"ajax_url":"https:\/\/bluebotics.com\/wp-admin\/admin-ajax.php","block_nonce":"27577d1676","gallery_nonce":"6b18eecc67"};
         var labb_settings = {"custom_css":""};
      </script>
      <script src='https://bluebotics.com/wp-content/plugins/addons-for-beaver-builder-premium/assets/js/labb-frontend.min.js?ver=3.1' id='labb-frontend-scripts-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.ba-throttle-debounce.min.js?ver=2.6.3.3' id='jquery-throttle-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.waypoints.min.js?ver=2.6.3.3' id='jquery-waypoints-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/fba37393bfb0a07d25f322e5aebdbc6a-layout-bundle.js?ver=1682271335' id='fl-builder-layout-bundle-fba37393bfb0a07d25f322e5aebdbc6a-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.magnificpopup.min.js?ver=2.6.3.3' id='jquery-magnificpopup-js' defer></script>
      <script src='https://bluebotics.com/wp-content/plugins/bb-plugin/js/jquery.fitvids.min.js?ver=1.2' id='jquery-fitvids-js' defer></script>
      <script id='fl-automator-js-extra'>
         var themeopts = {"medium_breakpoint":"992","mobile_breakpoint":"768","scrollTopPosition":"800"};
      </script>
      <script src='https://bluebotics.com/wp-content/themes/bb-theme/js/theme.min.js?ver=1682614687' id='fl-automator-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/18054-layout-partial.js?ver=1682258218' id='fl-builder-layout-18054-js' defer></script>
      <script data-minify="1" src='https://bluebotics.com/wp-content/cache/min/1/wp-content/uploads/bb-plugin/cache/18057-layout-partial.js?ver=1682258218' id='fl-builder-layout-18057-js' defer></script>
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