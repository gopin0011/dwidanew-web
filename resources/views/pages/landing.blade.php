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

#faq {
  max-width: 100vw;
  margin: auto;
  padding: 0 15px;
  text-align: center;
}

section.faq {
  padding-top: 2em;
  padding-bottom: 3em;
}

#faq ul {
  text-align: left;
}
.transition, div, p, ul li i:before, ul li i:after {
  transition: all 0.3s;
}

#faq .no-select, #faq h3 {
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none;
  user-select: none;
}

#faq h3 {
    color: #000;
    font-family: 'BlissBucket';
    line-height: 34px;
    text-align: left;
    padding: 15px 15px 0;
    text-transform: none;
    font-weight: 300;
    letter-spacing: 1px;
    display: block;
    margin: 0;
    cursor: pointer;
    transition: .2s;
    text-transform: uppercase;
}

/* #faq h2 {
  color: #cc071e;
  font-family: 'hm_light', sans-serif;
  font-size: 20px;
  line-height: 34px;
  text-align: left;
  padding: 15px 15px 0;
  text-transform: none;
  font-weight: 300;
  letter-spacing: 1px;
  display: block;
  margin: 0;
  cursor: pointer;
  transition: .2s;
} */

#faq li p {
  color: #333;
  text-align: left;
  font-family: 'hm_light', sans-serif;
  font-size: 14px;
  line-height: 1.45;
  position: relative;
  overflow: hidden;
  max-height: 250px;
  will-change: max-height;
  contain: layout;
  display: inline-block;
  opacity: 1;
  transform: translate(0, 0);
  /* margin-top: 5px; */
  /* margin-bottom: 15px; */
  padding: 15px 15px 0 15px;
  transition: .3s opacity, .6s max-height;
  hyphens: auto;
  z-index: 2;
  display: flex;
  align-items: flex-start;
}

#faq ul {
  list-style: none;
  perspective: 900;
  padding: 0;
  margin: 0;
}
#faq ul li {
  position: relative;
  overflow: hidden;
  padding: 0;
  margin: 0;
  /*padding-bottom: 4px;*/
  /*padding-top: 18px;*/
  background: #fff;
  /* box-shadow: 0 3px 10px -2px rgba(0,0,0,0.1); */
  -webkit-tap-highlight-color: transparent;
  border-bottom: 1px solid #333333;
}
#faq ul li + li {
  margin-top: 15px;
}
#faq ul li:last-of-type {
  padding-bottom: 0;
}
#faq ul li i {
  position: absolute;
  /* transform: translate(-6px, 0); */
  margin-top: 20px;
  right: 15px;
  /* content: '+'; */
}


#faq ul li i:before, ul li i:after {
  /* transform: translate(-2px, 0) rotate(45deg); */
}
#faq ul li i:before {
  content: "+";
  /* position: absolute; */
  /* background-color: #000; */
  width: 3px;
  height: 9px;
  font-style: normal;
  transform: translateY(-50%);
  font-size: 1.5em;
}

#faq ul li i.active:before {
  content: "-";
}
#faq ul li input[type=checkbox] {
  position: absolute;
  cursor: pointer;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  touch-action: manipulation;
}
#faq ul li input[type=checkbox]:checked ~ h3 {
  color: #000;
}
#faq ul li input[type=checkbox]:checked ~ p {
  /*margin-top: 0;*/
  max-height: 0;
  transition: .3s;
  opacity: 0;
  /*transform: translate(0, 50%);*/
}
#faq ul li input[type=checkbox]:checked ~ i:before {
  /* transform: translate(2px, 0) rotate(45deg); */
}
#faq ul li input[type=checkbox]:checked ~ i:after {
  /* transform: translate(-2px, 0) rotate(-45deg); */
}
#faq li img {
  width: 568px;
  /* height: 300px; */
  filter: grayscale(100%);
  order: 1;
  margin-left: 10px;
}

#faq li p {
  order: 2;
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
            <img src="{{asset('public/images/image1.jpg')}}" style="height:295px;filter: grayscale(100%); margin-top:130px;">
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
    <div id="faq">
  <ul>
    <li>
      <input type="checkbox" checked>
      <i></i>
      <h3>Vision</h3>
      <p>In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays. 
      <img src="{{asset('public/images/02_.jpg')}}">
      </p>

    </li>
    <li>
      <input type="checkbox" checked>
      <i></i>
      <h3>Mission</h3>
      <p>“Give the best services” by giving guarantee that the customer will receive our maximum service, for instance in quality product, easiness, along with competitive expense
      <img src="{{asset('public/images/04_.jpg')}}">
      </p>
    </li>
  </ul>
</div>
    </div>
</div>


<div class="row" style="margin-top: 130px; z-index: -100;">
    <div class="col-md-12" style="height: 410px; background:linear-gradient(rgba(26, 26, 26, 0) 0, #000 100%), url('public/images/baner1.jpg'); background-repeat: no-repeat; background-size: 100vw 410px; background-position: 30% center; filter: grayscale(1);">
        &nbsp;
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="row align-items-center d-flex">
            <div class="col-lg-12" style="margin-top: -155px; background-color: #fff;box-shadow: -25px 25px 0 -24px #000;">
                <div class="container" style="margin-top: 20px;">
                    <div class="row">
                      <img src="{{asset('public/images/djt_all_logo-02.png')}}" alt="" style="padding-bottom: 50px;">
<!-- 
                        <div class="col-md-6 single_client_logo">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/Vasiki_.png')}}" alt="">
                        </div>
                        <div class="col-md-3 single_client_logo">
                            <img src="{{asset('public/images/logo/Hond_.png')}}" alt="">
                        </div> -->
                    </div>
                    <!--<div class="row">
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
                    </div> -->
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
                    <img src="{{asset('public/images/work1.jpg')}}" style="height:300px;border: 1px solid #000;background:linear-gradient(rgba(26, 26, 26, 0) 0, #1a1a1a 100%)">
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
                    <img src="{{asset('public/images/work2.jpg')}}" style="height:300px;border: 1px solid #000;background:linear-gradient(rgba(26, 26, 26, 0) 0, #1a1a1a 100%)">
                    <div class="bottom-right">See Our Product And Projects</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="lastSection">

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

        $('input[type="checkbox"]').click(function(){
            var i = $(this).next('i');
            i.toggleClass('active');
            console.log('a');

            // var body = $('.Main-container'),
            // height = body.height(),
            // newHeight = height + 1000;

            // $(".Main-container").html(body);
            // $('<div>',{ 'class' : 'scrollable-content'}).appendTo($('#lastSection'));
        });

      });
      
      

      </script>
@endsection