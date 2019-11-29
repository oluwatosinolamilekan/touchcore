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
                  <form action="{{route('rrr')}}" method="post">
                        @csrf
                        <div class="tab-content _pt-20">
                            <div class="tab-pane active" id="SearchAreaTabs-3" role="tab-panel">
                              <div class="theme-search-area theme-search-area-stacked">
                                <div class="theme-search-area-form">
                                  <div class="row" data-gutter="none">
                                    <div class="col-md-5 ">
                                      <div class="row" data-gutter="none">
                                        <div class="col-md-6">
                                          <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                            <div class="theme-search-area-section-inner">
                                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                              <input class="theme-search-area-section-input typeahead" type="text" placeholder="Departure" name="departure_city" data-provide="typeahead"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                            <div class="theme-search-area-section-inner">
                                              <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                              <input class="theme-search-area-section-input typeahead" type="text" placeholder="Arrival" name="destination_city" data-provide="typeahead"/>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 ">
                                      <div class="row" data-gutter="none">
                                        <div class="col-md-4 ">
                                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                            <div class="theme-search-area-section-inner">
                                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                              <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in" name="departure_date"/>
                                              <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date" name="calendar"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 ">
                                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                            <div class="theme-search-area-section-inner">
                                              <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                              <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                                              <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4 ">
                                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                            <div class="theme-search-area-section-inner">
                                              {{-- Add input here --}}
                                              <select name="cabin" id="" class="theme-search-area-section-input" required style="padding-left: inherit;">
                                                <option value="">Select Cabin Class</option>
                                                <option value="">First</option>
                                                <option value="">Economy</option>
                                                <option value="">Premium</option>
                                                <option value="">Business</option>
                                                <option value="">All</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>   
                                    <div class="col-md-1">
                                      <button type="submit" class="theme-search-area-submit _mt-0 theme-search-area-submit-no-border theme-search-area-submit-curved">Search</button>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="theme-search-area-options theme-search-area-options-white theme-search-area-options-dot-primary-inverse clearfix">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                            <div class="theme-search-area-section-inner">
                                              <input readonly="" name="infant_flight" id="infant_flight" class="qty input-number infant" value="0" min="0" max="10" type="text">
                                             
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                                              <label class="btn btn-primary active">
                                                <input type="radio" name="flight-options" id="flight-option-1" checked/>Round Trip
                                              </label>
                                              <label class="btn btn-primary">
                                                <input type="radio" name="flight-options" id="flight-option-2"/>One Way
                                              </label>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  {{-- <div class="others ">
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