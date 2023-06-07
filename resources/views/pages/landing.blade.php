@extends('layouts.default')

@section('css')
<link href="{{ asset('public/css/22-layout.css') }}" rel="stylesheet">
<link href="{{ asset('public/css/home.css') }}" rel="stylesheet">
<style>

.source1 .single_client_logo:nth-child(5n+1) {
    border-left: 0px solid transparent;
}

.source1 .single_client_logo {
    height: 135px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    /* border-left: 1px solid #edeff2; */
    /* width: 25%; */
    float: left;
    /* border-bottom: 1px solid #edeff2; */
}

.source1 .single_client_logo img {
    filter: grayscale(1);
    -webkit-transition: 0.5s;
    transition: 0.5s;
    max-width: 55%;
}
.source1 .single_client_logo img:hover {
  filter: grayscale(0);
}


/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 30px;
  color: #fff;
}
.bottom-right a {
    color: #fff;
}

.source1 .show-bg-2 {
    position: relative;
    overflow: hidden;
}

.source1 .show-bg-2 img {
    width: 100%;
    transition: .3s;
}

.source1 .show-bg-2:hover img {
    transform: scale(1.1);
}

.source1 #footer-secondary-menus{
    /* height: 400px; */
}


</style>
@endsection

@section('contents')

<div class="uabb-js-breakpoint" style="display: none;"></div>
<div class="uabb-js-breakpoint" style="display: none;"></div>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-6">
            <h3 style="color: #000; margin-bottom: 35px;font-family: 'BlissBucket';">OUR <br>COMPANY</h3>
        <p style="font-size: 15.06px;">In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.</p>
        <p style="font-size: 15.06px;">In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.</p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('public/images/about_oke.jpg')}}" style="height:295px;filter: grayscale(100%); margin-top:130px;">
        </div>
    </div>
</div>
<div class="row" style="margin-top: 130px;">
    <div class="col-md-12" style="height: 410px; background-image: url('public/images/DJI_edit.jpg'); background-size: 100vw 410px; background-repeat: no-repeat; background-position: 30% center; filter: grayscale(100%);">
        &nbsp;
    </div>
</div>

<div class="row" style="margin-top: 130px;">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 25px 0 -24px #000;">
                <div class="col-md-6">
                    <h3 style="color: #000;font-family: 'BlissBucket';">VISION</h3>
                </div>
                <div class="col-md-6 text-right">
                <h3 style="color: #000;cursor: pointer; width: 20px; float: right;" id="vision"><a href="#" onclick="window.location.href='{{route('app.home')}}#vision';">+</a></h3>
                </div>
            </div>
        </div>
        <div class="row target" style="margin-top: 20px; position: relative;" id="div_vision">
        <div class="col-md-12">
            <div class="col-md-6">
                <p>In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/images/02_.jpg')}}" style="height:300px;filter: grayscale(100%);">
            </div>
        </div>
        </div>
        
    </div>
</div>

<div class="row" style="margin-top: 50px;">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-12" style="box-shadow: 0px 25px 0 -24px #000;">
                <div class="col-md-6">
                    <h3 style="color: #000;font-family: 'BlissBucket';"">MISSION</h3>
                </div>
                <div class="col-md-6 text-right">
                <h3 style="color: #000;cursor: pointer; width: 20px; float: right;" id="mission"><a href="#" onclick="window.location.href='{{route('app.home')}}#mission';">+</a></h3>
                </div>
            </div>
        </div>
        <div class="row target" style="margin-top: 20px; position: relative;" id="div_mission">
        <div class="col-md-12">
            <div class="col-md-6">
                <p>“Give the best services” by giving guarantee that the customer will receive our maximum service, for instance in quality product, easiness, along with competitive expense</p>
            </div>
            <div class="col-md-6">
                <img src="{{asset('public/images/04_.jpg')}}" style="height:300px;filter: grayscale(100%);">
            </div></div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 130px; z-index: -100;">
    <div class="col-md-12" style="height: 310px; background:linear-gradient(rgba(26, 26, 26, 0) 0, #000 100%), url('public/images/Gedung_dwida_oke.jpg'); background-repeat: no-repeat; background-size: 100vw 410px; background-position: 30% center; filter: grayscale(1);">
        &nbsp;
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="row align-items-center d-flex">
            <div class="col-lg-12" style="margin-top: -155px; background-color: #fff;box-shadow: -25px 25px 0 -24px #000;">
                <div class="container" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col-md-6 single_client_logo">
                            <img src="{{asset('public/images/logo/djt_.png')}}" alt="">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/Vasiki_.png')}}" alt="">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/Hond_.png')}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/legano.png')}}" alt="">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/arcwood_.png')}}" alt="">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/talisma.png')}}" alt="">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/noutek_.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 75px;">
    <div class="col-md-10 col-md-offset-1">
        <h3 style="color: #000;font-family: 'BlissBucket';"">OUR WORKS</h3>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4" style="border: 1px solid #000;">
                <h3 style="color: #000; text-align: center; padding: 90px 0;font-family: 'BlissBucket';"">FURNITURE AND <br>INTERIOR</h3>
            </div>
            <div class="col-md-8">
                <div class="show-bg-2" style="height:300px;"><a href="#" onclick="window.location.href='{{route('app.work', ['type'=>1, 'brand'=>5])}}';">
                    <img src="{{asset('public/images/IM2_SHOWROOM_CLASSIC3_LEGANO.jpg')}}" style="height:300px;border: 1px solid #000;background:linear-gradient(rgba(26, 26, 26, 0) 0, #1a1a1a 100%)">
                    <div class="bottom-right">See Our Product And Projects</div></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4" style="border: 1px solid #000;">
                <h3 style="color: #000; text-align: center; padding: 110px 0;font-family: 'BlissBucket';"">EQUIPMENT</h3>
            </div>
            <div class="col-md-8">
                <div class="show-bg-2" style="height:300px;"><a href="#" onclick="window.location.href='{{route('app.work', ['type'=>2, 'brand'=>3])}}';">
                    <img src="{{asset('public/images/fc2.jpg')}}" style="height:300px;border: 1px solid #000;background:linear-gradient(rgba(26, 26, 26, 0) 0, #1a1a1a 100%)">
                    <div class="bottom-right">See Our Product And Projects</div></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
<script>
    window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
    if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
    images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
    if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)
</script>
<script>
      $(document).ready(function() {
         if (window.location.hash === '#mission') {
            $('#mission a').text('-');
         } else {
            $('#div_mission').hide();
         }

         if (window.location.hash === '#vision') {
            $('#vision a').text('-');
         } else {
            $('#div_vision').hide();
         }


      var scrollableElement = document.getElementById('main');
        var previousScrollLeft = scrollableElement.scrollLeft;

        scrollableElement.addEventListener('scroll', function() {
        var currentScrollLeft = scrollableElement.scrollLeft;

        if (currentScrollLeft > previousScrollLeft) {
            console.log('Scrolling to the right');
            scrollableElement.style.removeProperty('overflow-y');
        } else if (currentScrollLeft < previousScrollLeft) {
            console.log('Scrolling to the left');
            scrollableElement.style.removeProperty('overflow-y');
        }

        previousScrollLeft = currentScrollLeft;
        });



      });
      
      

      </script>
@endsection