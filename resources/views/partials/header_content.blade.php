<div class="theme-hero-area theme-hero-area-primary">
    <div class="theme-hero-area-bg-wrap">
       <div class="theme-hero-area-bg ws-action" style="background-image:url(/frontend/img/1500x800.png);" data-parallax="true"></div>
       <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
       <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
    </div>
    <div class="theme-hero-area-body">
       <div class="_pt-250 _pb-200 _pv-mob-50">
          <div class="container">
             <div class="theme-search-area-tabs">
                <div class="theme-search-area-tabs-header _c-w _ta-mob-c">
                   <h1 class="theme-search-area-tabs-title">Start Your Jorney</h1>
                   <p class="theme-search-area-tabs-subtitle">Compare hundreds travel websites at once</p>
                </div>
                <div class="tabbable">
                   <ul class="nav nav-tabs nav-line nav-white nav-lg nav-mob-inline" role="tablist">
                      <li class="active" role="presentation">
                         <a aria-controls="SearchAreaTabs-3" role="tab" data-toggle="tab" href="#SearchAreaTabs-3">Flights</a>
                      </li>
                   </ul>
                 @include('flights.form')
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 {{-- 
 <div class="others ">
    <div class="">
       <input readonly="" name="infant_flight" id="infant_flight" class="qty input-number infant" value="0" min="0" max="10" type="text">
       <span>Infant <em>(0-2 years years)</em></span>
       <span class="">
       <button type="button" class="btn btn-default btn-number btn-plus" data-type="plus" data-field="quant[1]">
       <span>+</span>
       </button>
       </span>
       <span class="">
       <button type="button" class="btn btn-default btn-number btn-minus" data-type="minus" data-field="quant[1]">
       <span>-</span>
       </button>
       </span>
    </div>
 </div>
 <div class="flig-btn" style="">
    <a class="flight_type_btn" onclick="count_guests();">Submit</a>
 </div>
 </div> --}}