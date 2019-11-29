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
                 <div class="row" data-gutter="none" style="padding-top: 10px !important;">
                    <div class="col-md-6 ">
                       <div class="row" data-gutter="none">
                          <div class="col-md-6 ">
                             <div class="theme-search-area-section first theme-search-area-section-curved">
                                <div class="theme-search-area-section-inner">
                                   <i class="theme-search-area-section-icon lin lin-plane"></i>
                                   <select class="theme-search-area-section-input" name="cabin_class">
                                      <option value="" disabled="">Choose...</option>
                                      <option value="First">First class</option>
                                      <option value="Economy">Economy class</option>
                                      <option value="Premium">Premium class</option>
                                      <option value="Business">Business class</option>
                                      <option value="All">All classes</option>
                                   </select>
                                </div>
                                <p class="input-label">Cabin Class</p>
                             </div>
                          </div>
                          <div class="col-md-6 ">
                             <div class="theme-search-area-section theme-search-area-section-curved">
                                <div class="theme-search-area-section-inner">
                                   <i class="theme-search-area-section-icon lin lin-people"></i><input class="theme-search-area-section-input" type="number" placeholder="No. of Adults"  name="adults" >
                                   {{-- 
                                   <p class="info-input">above 12 yrs</p>
                                   --}}
                                </div>
                                {{-- 
                                <p class="input-label">No. of Adults</p>
                                --}}
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6 ">
                       <div class="row" data-gutter="none">
                          <div class="col-md-6">
                             <div class="theme-search-area-section theme-search-area-section-curved">
                                <div class="theme-search-area-section-inner">
                                   <i class="theme-search-area-section-icon lin lin-people">
                                   </i><input class="theme-search-area-section-input" type="number" name="children" placeholder="No. of Children" value="4">
                                   {{-- 
                                   <p class="info-input">2-12 yrs</p>
                                   --}}
                                </div>
                                {{-- 
                                <p class="input-label">No. of Children</p>
                                --}}
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="theme-search-area-section theme-search-area-section-curved">
                                <div class="theme-search-area-section-inner section-inner-last">
                                   <i class="theme-search-area-section-icon lin lin-people"></i>
                                   <input class="theme-search-area-section-input" type="number" name="infants" placeholder="No. of Infants" value="3">
                                   {{-- 
                                   <p class="info-input">0-2 yrs</p>
                                   --}}
                                </div>
                                {{-- 
                                <p class="input-label">No. of Infants</p>
                                --}}
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </form>