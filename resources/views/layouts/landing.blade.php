@extends('layouts.default')

@section('css')
<link href="{{ asset('public/css/22-layout.css') }}" rel="stylesheet">
<link data-minify="1" rel='stylesheet' id='fl-builder-layout-24-css' href="{{asset('public/assets/wp-content/24-layout.css?ver=1682287855')}}" media='all' />
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
    margin: 0 0 20px 0;
    cursor: pointer;
    transition: .2s;
    text-transform: uppercase;
}


#faq li .content-wrapper {
  color: #333;
  text-align: left;
  font-family: 'hm_light', sans-serif;
  font-size: 14px;
  line-height: 1.45;
  position: relative;
  overflow: hidden;
  /* max-height: 250px; */
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
  padding-bottom: 15px;
}


.content-wrapper {
  /* display: flex; */
  align-items: center;
  gap: 20px;
  align-items: flex-start;
  display: none;
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
#faq li .content-wrapper img {
  /* width: 568px; */
  /* height: 300px; */
  max-width: 768px;
  filter: grayscale(100%);
  order: 2;
  margin-left: 10px;
}

#faq li .content-wrapper p {
  order: 1;
  font-size: 19px;
}

.our-company {
  margin-top: 130px;
  width: 75%;
  float: right;
}
.djt-building {
  height: 410px; 
  background-image: url('public/images/DJI_edit.jpg'); 
  background-size: 100vw 410px; 
  background-repeat: no-repeat; 
  background-position: 30% center; 
  filter: grayscale(100%); 
  margin-top: 50px;
  /* position: block; */
}

.our-work {
  border: 1px solid #000;
  height: 300px;
  padding: 110px 0;
}

.show-bg-2 img {
  border: 1px solid #000;
  /* height: 300px; */
}

.our-brands {
  margin-top: -155px; 
  background-color: #fff;
  box-shadow: -25px 25px 0 -24px #000;
}

.equipment-work {
  padding-top: 50px;
}

.logo-all-brand {
  padding-bottom: 50px;
}



@media only screen and (max-width: 768px) {
  .our-company {
    margin-top: 0px;
    width: 100%;
  }
  .djt-building {
    height: 200px;
  }
  .content-wrapper {
    flex-direction: column;
    align-items: flex-start;
  }
  .content-wrapper img {
    margin-left: 0px !important;
  }
  .our-work {
    border: none;
    height: 130px;
    vertical-align: top;
    padding: 10px 0 0 0;
  }

  .show-bg-2 img {
    padding: 0 0;
    border: none;
    /* height: 350px; */
  }

  .our-brands {
    margin-top: -155px; 
    background-color: #fff;
    box-shadow: none;
    border: none;
  }

  .equipment-work {
    padding-top: 0;
  }

  .logo-all-brand {
    padding-bottom: 15px;
  }

  #faq li .content-wrapper img {
    /* width: 568px; */
    /* height: 300px; */
    max-width: 768px;
    filter: grayscale(100%);
    order: 2;
    margin-left: 10px;
    text-align: center;
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
    text-align-last: center;
  }
  #faq li .content-wrapper p {
  font-size: 15px;
}
}

@media only screen and (max-width: 844px) {
  .our-company {
    margin-top: 0px;
    width: 100%;
  }
  .our-work {
    border: none;
    height: 130px;
    vertical-align: top;
    padding: 10px 0 0 0;
  }
  .content-wrapper {
    flex-direction: column;
    align-items: flex-start;
  }
  .content-wrapper img {
    margin-left: 0px !important;
  }
}

@media (min-width: 1200px) {
    .our-company {
    /* Tambahkan properti lainnya jika diperlukan */
        /* margin-bottom: 475px; */
        width: 100%;
    }
    .show-bg-2 {
      /* height:300px; */
    }
} 

</style>
@endsection

@section('contents')

<div class="uabb-js-breakpoint" style="display: none;"></div>
<div class="uabb-js-breakpoint" style="display: none;"></div>

<div class="container-fluid">
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-6">
            <h3 style="color: #000; margin-bottom: 35px;font-family: 'BlissBucket';">OUR <br>COMPANY</h3>
        <p style="font-size: 15.06px;">In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.</p>
        <p style="font-size: 15.06px;">In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.</p>
        </div>
        <div class="col-md-6">
            <img class="our-company" src="{{asset('public/images/image1.jpg')}}">
        </div>
    </div>
</div>

<!-- <div class="djt-building">
  &nbsp;
  <div style="clear: both;"></div>
</div> -->
<div style="margin-top: 75px;"></div>
<div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5f909fa889a01" data-node="5f909fa889a01">
    <div class="fl-row-content-wrap">
    <div class="uabb-row-separator uabb-top-row-separator" ></div>
    <div class="fl-row-content fl-row-full-width fl-node-content">
        <div class="fl-col-group fl-node-5f909fa889a03 fl-col-group-equal-height fl-col-group-align-bottom" data-node="5f909fa889a03">
            <div class="fl-col fl-node-5f909fa882315 fl-col-bg-overlay" data-node="5f909fa882315">
                <div class="fl-col-content fl-node-content">
                <div class="fl-module fl-module-heading fl-node-5e1e2df5c9342" data-node="5e1e2df5c9342">
                    <div class="fl-module-content fl-node-content">
                        <h3 class="fl-heading">
                            <!-- <span class="fl-heading-text">CREATING & MAKING<br>BEST QUALITY OF PRODUCTS</span> -->
                        </h3>
                    </div>
                </div>
                <div class="fl-module fl-module-separator fl-node-5f3d8c3e62b9f" data-node="5f3d8c3e62b9f">
                    <div class="fl-module-content fl-node-content">
                        <!-- <div class="fl-separator"></div> -->
                    </div>
                </div>
                <div class="fl-module fl-module-rich-text fl-node-5e1e2ed4ca37d" data-node="5e1e2ed4ca37d">
                    <div class="fl-module-content fl-node-content">
                        <div class="fl-rich-text">
                            <!-- <p>Easy to use and simple to be conducted during learning process -->
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

<div class="container-fluid" style="margin-top: 50px;">
  <div class="col-md-10 col-md-offset-1">
    <div id="faq">
      <ul>
        <li>
          <input type="checkbox" checked>
          <i></i>
          <h3>Vision</h3>
          <div class="content-wrapper" style="display: none;">
            <p>In 2007, PT. DWIDA JAYA TAMA coming as a company specialized in manufacturing education equipment. It started from education equipment for elementary to junior high school. Since then, we are also thriving to the higher level, for senior high school to the university. Starting as an education equipment provider for majors such as math and science also for software which becoming a trend nowadays.</p>
            <img src="{{asset('public/images/02_.jpg')}}">
          </div>
        </li>
        <li>
          <input type="checkbox" checked>
          <i></i>
          <h3>Mission</h3>
          <div class="content-wrapper" style="display: none;">
            <p>“Give the best services” by giving guarantee that the customer will receive our maximum service, for instance in quality product, easiness, along with competitive expense</p>
            <img src="{{asset('public/images/04_.jpg')}}">
          </div>
        </li>
      </ul>
    </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: 130px; z-index: -100;">
  <div class="row">
    <div class="col-md-12" style="min-height: 410px; background-image:url('public/images/baner1.jpg');background-repeat: no-repeat;background-position: center center;background-attachment: scroll;background-size: cover;">
        &nbsp;
    </div>
    <div class="col-md-10 col-md-offset-1">
        <div class="">
            <div class="our-brands">
                <div class="container" style="margin-top: 20px;">
                    <div class="">
                      <img src="{{asset('public/images/djt_all_logo-02.png')}}" alt="" class="logo-all-brand">

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


<div class="container-fluid" style="margin-top: 75px;">
    <div class="col-md-10 col-md-offset-1">
        <h3 style="color: #000;font-family: 'BlissBucket';">OUR WORKS</h3>
        <!-- <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 our-work" style="height: 100%;">
                <h3 style="color: #000; text-align: center; font-family: 'BlissBucket';"">FURNITURE AND <br>INTERIOR</h3>
            </div>
            <div class="col-md-8" style="height: 100%;">
                <div class="show-bg-2"><a href="#" onclick="window.location.href='{{route('app.work', ['type'=>1, 'brand'=>5])}}';">
                    <img src="{{asset('public/images/work1.jpg')}}">
                    <div class="bottom-right">See Our Product And Projects</div></a>
                </div>
            </div>
        </div> -->
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 our-work" id="column1a" style="display: flex; align-items: center; justify-content: center;">
            <h3 style="color: #000; text-align: center; font-family: 'BlissBucket';">FURNITURE AND <br>INTERIOR</h3>
          </div>
          <div class="col-md-8" id="column2a">
            <div class="show-bg-2">
              <a href="#" onclick="window.location.href='{{route('app.work', ['type'=>1, 'brand'=>5])}}';">
                <img id="image1" src="{{asset('public/images/work1.jpg')}}" onload="setColumnHeight()">
                <div class="bottom-right">See Our Product And Projects</div>
              </a>
            </div>
          </div>
        </div>
        <!-- <div class="row equipment-work" style="margin-top: 30px;">
            <div class="col-md-4 our-work" style="height: 100%;">
                <h3 style="color: #000; text-align: center; font-family: 'BlissBucket';">EQUIPMENT</h3>
            </div>
            <div class="col-md-8" style="height: 100%;">
                <div class="show-bg-2"><a href="#" onclick="window.location.href='{{route('app.work', ['type'=>2, 'brand'=>3])}}';">
                    <img src="{{asset('public/images/work2.jpg')}}">
                    <div class="bottom-right">See Our Product And Projects</div></a>
                </div>
            </div>
        </div> -->
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 our-work" id="column1b" style="display: flex; align-items: center; justify-content: center;">
            <h3 style="color: #000; text-align: center; font-family: 'BlissBucket';">EQUIPMENT</h3>
          </div>
          <div class="col-md-8" id="column2b">
            <div class="show-bg-2">
              <a href="#" onclick="window.location.href='{{route('app.work', ['type'=>2, 'brand'=>3])}}';">
                <img id="image2" src="{{asset('public/images/work2.jpg')}}" onload="setColumnHeight()">
                <div class="bottom-right">See Our Product And Projects</div>
              </a>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
    // window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
    // if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
    // images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
    // if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)
</script>
<script>
      function setColumnHeight() {
          var image1 = document.getElementById('image1');
          var column1a = document.getElementById('column1a');
          column1a.style.height = image1.offsetHeight + 'px';
          column1a.style.padding = (image1.offsetHeight / 2.777) + 'px 0';

          var image2 = document.getElementById('image2');
          var column1b = document.getElementById('column1b');
          column1b.style.height = image2.offsetHeight + 'px';
          column1b.style.padding = (image2.offsetHeight / 2.5) + 'px 0';
      }

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
          var input = $(this);
          var divElement = input.siblings('div.content-wrapper');

            var li = input.closest('li'),
                i = input.next('i');

            i.toggleClass('active');

            divElement.slideToggle();
        });

      });
      
      
      window.addEventListener('resize', function() {
        setColumnHeight();
      });
      </script>
@endsection