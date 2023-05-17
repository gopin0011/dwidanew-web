<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
   <head>
   <link href="{{ asset('public/css/bxslider.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/ultimateicons.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/legacydropdown.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/layout-bundle.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/base-min.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/skin.css') }}" rel="stylesheet">
   @yield('css')
   </head>
    <body>
        <div class="source1">
            <div class="home page-template-default page page-id-22 fl-builder fl-theme-builder-header fl-theme-builder-header-home-header fl-theme-builder-footer fl-theme-builder-footer-footer fl-framework-base fl-preset-default fl-full-width fl-search-active fl-builder-breakpoint-default">
                @yield('contents')
            </div>
        </div>
    </body>
</html>