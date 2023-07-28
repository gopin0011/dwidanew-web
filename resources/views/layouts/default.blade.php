<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
   <head>
   <link rel='stylesheet' id='wpml-legacy-dropdown-0-css' href="{{asset('public/assets/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/style.min.css?ver=1')}}" media='all' />
   <link href="{{asset('public/css/22-layout.css?ver=1681229321')}}" rel="stylesheet" />
   <link href="{{ asset('public/css/bxslider.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/ultimateicons.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/legacydropdown.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/layout-bundle.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/base-min.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/skin.css') }}" rel="stylesheet">
   @yield('css')

   <style>
    #language {
        position: fixed;
        top: 0px;
        right: 0px;
        /* padding: 0.5em 0.7em; */
        /* background: #ccc; */
        display: block;
        width: 40px;
        height: auto;
        z-index: 10;
    }
   </style>
   </head>
    <body>
    <!-- <div id="language">
        <a href="javascript: void(0);" onclick="javascript: setLang('in');" title="Indonesia"><img src="{{asset('public/images/in.png')}}" alt="Indonesia" /></a>
        <a href="javascript: void(0);" onclick="javascript: setLang('en');" title="English"><img src="{{asset('public/images/en.png')}}" alt="English" /></a>
    </div> -->
        <div class="source1">
            <div class="home page-template-default page page-id-22 fl-builder fl-theme-builder-header fl-theme-builder-header-home-header fl-theme-builder-footer fl-theme-builder-footer-footer fl-framework-base fl-preset-default fl-full-width fl-search-active fl-builder-breakpoint-default">
                @yield('contents')
            </div>
        </div>
    
    </body>
</html>