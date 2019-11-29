@extends('layouts.master')

@section('content')
{{-- @include('flights.header') --}}
<div class="theme-page-section theme-page-section-gray">
        <div class="container">
          <div class="row row-col-static" id="sticky-parent" data-gutter="20">
            <div class="col-md-2-5 ">
              <div class="sticky-col _mob-h">
                <div class="theme-search-results-sidebar">
                  <div class="theme-search-results-sidebar-sections _mb-20 _br-2">
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">nonstop</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$305</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">1 stop</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$349</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">2 stops</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$154</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Economy</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$375</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Business</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$292</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">First</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$332</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                      <div class="theme-search-results-sidebar-section-price">
                        <input id="price-slider" name="price-slider" data-min="100" data-max="500"/>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Morning
                                <span class="icheck-sub-title">05:00am - 11:59am</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$466</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Afternoon
                                <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$256</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Evening
                                <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Morning
                                <span class="icheck-sub-title">05:00am - 11:59am</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$404</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Afternoon
                                <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$216</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Evening
                                <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$286</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Morning
                                <span class="icheck-sub-title">05:00am - 11:59am</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$411</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Afternoon
                                <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$386</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Evening
                                <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$285</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Morning
                                <span class="icheck-sub-title">05:00am - 11:59am</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Afternoon
                                <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$248</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Evening
                                <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                              </span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$190</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">CLY: City</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$336</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">LHR: Heathrow</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$229</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">LCW: Gatwich</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">STN: Stansed</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$405</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">SEN: Southend</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">JFK: John F. Kennedy</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$366</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">LGA: LaGuardia</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$257</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">EWR: Newark Liberty</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$424</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="theme-search-results-sidebar-section">
                      <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                      <div class="theme-search-results-sidebar-section-checkbox-list">
                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">KLM Royal Dutch...</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$127</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">LOT Polish Airlines</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$261</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Wow Airlines</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$423</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Virgin Atlantic...</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$268</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Delta Airlines</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$425</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">SWISS Airlines</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$403</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Lufthansa</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$469</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">American Airlines</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$319</span>
                          </div>
                          <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                            <label class="icheck-label">
                              <input class="icheck" type="checkbox"/>
                              <span class="icheck-title">Fly Emirates</span>
                            </label>
                            <span class="theme-search-results-sidebar-section-checkbox-list-amount">$105</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="theme-ad">
                  <a class="theme-ad-link" href="#"></a>
                  <p class="theme-ad-sign">Advertisement</p>
                  <img class="theme-ad-img" src="./img/300x500.png" alt="Image Alternative text" title="Image Title"/>
                </div>
              </div>
            </div>
            <div class="col-md-7 ">
              <div class="theme-search-results-sort _mob-h clearfix">
                <h5 class="theme-search-results-sort-title">Sort by:</h5>
                <ul class="theme-search-results-sort-list">
                  <li>
                    <a href="#">Price
                      <span>Low &rarr; High</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="#">Duration
                      <span>Long &rarr; Short</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Recommended
                      <span>High &rarr; Low</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Airline Name
                      <span>Name &nbsp; A &rarr; Z</span>
                    </a>
                  </li>
                </ul>
                <div class="dropdown theme-search-results-sort-alt">
                  <a id="dropdownMenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">More
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <li>
                      <a href="#">Departure take-off</a>
                    </li>
                    <li>
                      <a href="#">Departure landing</a>
                    </li>
                    <li>
                      <a href="#">Return take-off</a>
                    </li>
                    <li>
                      <a href="#">Return landing</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="theme-search-results-sort-select _desk-h">
                <select>
                  <option>Price</option>
                  <option>Duration</option>
                  <option>Recommended</option>
                  <option>Airline Name</option>
                  <option>Departure take-off</option>
                  <option>Departure landing</option>
                  <option>Return take-off</option>
                  <option>Return landing</option>
                </select>
              </div>
              
              <div class="theme-search-results">
                {{-- flights --}}
                <div class="theme-search-results-item _mb-10 theme-search-results-item-rounded theme-search-results-item-">
                  <div class="theme-search-results-item-preview">
                    <a class="theme-search-results-item-mask-link" href="#searchResultsItem-8" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-8"></a>
                    <div class="row" data-gutter="20">
                      <div class="col-md-10 ">
                        <div class="theme-search-results-item-flight-sections">
                          <div class="theme-search-results-item-flight-section">
                            <div class="row row-no-gutter row-eq-height">
                              <div class="col-md-2 ">
                                <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                  <img class="theme-search-results-item-flight-section-airline-logo" src="frontend/img/343x257.png" alt="Image Alternative text" title="Image Title"/>
                                </div>
                              </div>
                              <div class="col-md-10 ">
                                <div class="theme-search-results-item-flight-section-item">
                                  <div class="row">
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">06:30
                                          <span>pm</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                      </div>
                                    </div>
                                    <div class="col-md-6 ">
                                      <div class="theme-search-results-item-flight-section-path">
                                        <div class="theme-search-results-item-flight-section-path-fly-time">
                                          <p>22h 10m</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-start">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">LHR</div>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line-middle">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line-end">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">04:40
                                          <span>pm</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <h5 class="theme-search-results-item-flight-section-airline-title">Operated by SWISS Airlines</h5>
                          </div>
                          <div class="theme-search-results-item-flight-section">
                            <div class="row row-no-gutter row-eq-height">
                              <div class="col-md-2 ">
                                <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                  <img class="theme-search-results-item-flight-section-airline-logo" src="frontend/img/310x304.png" alt="Image Alternative text" title="Image Title"/>
                                </div>
                              </div>
                              <div class="col-md-10 ">
                                <div class="theme-search-results-item-flight-section-item">
                                  <div class="row">
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">04:30
                                          <span>am</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">New York</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">May 23, 2018</p>
                                      </div>
                                    </div>
                                    <div class="col-md-6 ">
                                      <div class="theme-search-results-item-flight-section-path">
                                        <div class="theme-search-results-item-flight-section-path-fly-time">
                                          <p>27h 50m</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line"></div>
                                        <div class="theme-search-results-item-flight-section-path-line-start">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">SEN</div>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line-middle">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                        </div>
                                        <div class="theme-search-results-item-flight-section-path-line-end">
                                          <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                          <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                          <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3 ">
                                      <div class="theme-search-results-item-flight-section-meta">
                                        <p class="theme-search-results-item-flight-section-meta-time">08:20
                                          <span>am</span>
                                        </p>
                                        <p class="theme-search-results-item-flight-section-meta-city">London</p>
                                        <p class="theme-search-results-item-flight-section-meta-date">May 24, 2018</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <h5 class="theme-search-results-item-flight-section-airline-title">Operated by American Airlines</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 ">
                        <div class="theme-search-results-item-book">
                          <div class="theme-search-results-item-price">
                            <p class="theme-search-results-item-price-tag">$412</p>
                            <p class="theme-search-results-item-price-sign">economy</p>
                          </div>
                          <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="#">Book Now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-8">
                    <div class="theme-search-results-item-extend">
                      <a class="theme-search-results-item-extend-close" href="#searchResultsItem-8" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-8">&#10005;</a>
                      <div class="theme-search-results-item-extend-inner">
                        <div class="theme-search-results-item-flight-detail-items">
                          <div class="theme-search-results-item-flight-details">
                            <div class="row">
                              <div class="col-md-3 ">
                                <div class="theme-search-results-item-flight-details-info">
                                  <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                  <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                  <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                  <p class="theme-search-results-item-flight-details-info-fly-time">22h 10m</p>
                                  <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                                </div>
                              </div>
                              <div class="col-md-9 ">
                                <div class="theme-search-results-item-flight-details-schedule">
                                  <ul class="theme-search-results-item-flight-details-schedule-list">
                                    <li>
                                      <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">06:30
                                          <span>pm</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">07:60
                                          <span>am</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">13h 30m</p>
                                      <div class="theme-search-results-item-flight-details-schedule-destination">
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>LHR</b>Heathrow
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                          <span>&rarr;</span>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>CDG</b>Charles de Gaulle
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                        </div>
                                      </div>
                                      <ul class="theme-search-results-item-flight-details-schedule-features">
                                        <li>2190 SWISS</li>
                                        <li>Wide-body jet</li>
                                        <li>Boeing 747-400</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">07:60
                                          <span>am</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">10:10
                                          <span>am</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 10m</p>
                                      <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                    </li>
                                    <li>
                                      <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">10:10
                                          <span>am</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">04:40
                                          <span>pm</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">6h 30m</p>
                                      <div class="theme-search-results-item-flight-details-schedule-destination">
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>CDG</b>Charles de Gaulle
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                          <span>&rarr;</span>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>EWR</b>Newark Liberty
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                        </div>
                                      </div>
                                      <ul class="theme-search-results-item-flight-details-schedule-features">
                                        <li>1346 SWISS</li>
                                        <li>Narrow-body jet</li>
                                        <li>Boeing 777-300ER</li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="theme-search-results-item-flight-details">
                            <div class="row">
                              <div class="col-md-3 ">
                                <div class="theme-search-results-item-flight-details-info">
                                  <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                  <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                  <p class="theme-search-results-item-flight-details-info-cities">New York &rarr; London</p>
                                  <p class="theme-search-results-item-flight-details-info-fly-time">27h 50m</p>
                                  <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                                </div>
                              </div>
                              <div class="col-md-9 ">
                                <div class="theme-search-results-item-flight-details-schedule">
                                  <ul class="theme-search-results-item-flight-details-schedule-list">
                                    <li>
                                      <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">04:30
                                          <span>am</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">03:40
                                          <span>pm</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">11h 10m</p>
                                      <div class="theme-search-results-item-flight-details-schedule-destination">
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>SEN</b>Southend
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                          <span>&rarr;</span>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>CDG</b>Charles de Gaulle
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                        </div>
                                      </div>
                                      <ul class="theme-search-results-item-flight-details-schedule-features">
                                        <li>3664 American</li>
                                        <li>Narrow-body jet</li>
                                        <li>Boeing 747-400</li>
                                      </ul>
                                    </li>
                                    <li>
                                      <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">03:40
                                          <span>pm</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                          <span>pm</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 50m</p>
                                      <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                    </li>
                                    <li>
                                      <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                      <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                      <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                      <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                          <span>pm</span>
                                        </span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">08:20
                                          <span>am</span>
                                        </span>
                                      </div>
                                      <p class="theme-search-results-item-flight-details-schedule-fly-time">14h 50m</p>
                                      <div class="theme-search-results-item-flight-details-schedule-destination">
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>CDG</b>Charles de Gaulle
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                          <span>&rarr;</span>
                                        </div>
                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                          <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                            <b>EWR</b>Newark Liberty
                                          </p>
                                          <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                        </div>
                                      </div>
                                      <ul class="theme-search-results-item-flight-details-schedule-features">
                                        <li>5697 American</li>
                                        <li>Wide-body jet</li>
                                        <li>Embraer 175</li>
                                      </ul>
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
               
                {{-- flighs --}}
                
               
              </div>
              <a class="btn _tt-uc _fs-sm btn-dark btn-block btn-lg" href="#">Load More Results</a>
            </div>
            <div class="col-md-2-5 ">
              <div class="sticky-col _mob-h">
                <div class="theme-ad _mb-20">
                  <a class="theme-ad-link" href="#"></a>
                  <p class="theme-ad-sign">Advertisement</p>
                  <img class="theme-ad-img" src="./img/300x800.png" alt="Image Alternative text" title="Image Title"/>
                </div>
                <div class="theme-ad">
                  <a class="theme-ad-link" href="#"></a>
                  <p class="theme-ad-sign">Advertisement</p>
                  <img class="theme-ad-img" src="./img/300x500.png" alt="Image Alternative text" title="Image Title"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection