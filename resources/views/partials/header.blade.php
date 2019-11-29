<nav class="navbar navbar-default navbar-inverse navbar-theme" {{ Request::path() === ''  ? 'navbar-theme-abs navbar-theme-transparent navbar-theme-border' : '' }} id="main-nav">
    <div class="container">
      <div class="navbar-inner nav">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button" area-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <img src="{{asset('frontend/img/logo.png')}}" alt="Image Alternative text" title="Image Title"/>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-main">
       
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="_desk-h">Currency</span>
                <b>USD</b>
              </a>
              <div class="dropdown-menu dropdown-menu-xxl">
                <h5 class="dropdown-meganav-select-list-title">Popular Currencies</h5>
                <div class="row" data-gutter="10">
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>€</span>Euro
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>£</span>Pound sterling
                        </a>
                      </li>
                      <li class="active">
                        <a href="#">
                          <span>US$</span>U.S. dollar
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>CAD</span>Canadian dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>AUD</span>Australian dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>RUB</span>Russian Ruble
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>S$</span>Singapore dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>CNY</span>Chinese yuan
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>¥</span>Japanese yen
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr/>
                <h5 class="dropdown-meganav-select-list-title">All Currencies</h5>
                <div class="row" data-gutter="10">
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>AR$</span>Argentine peso
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>AUD</span>Australian dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>AZN</span>Azerbaijan, New Ma...
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>BHD</span>Bahrain dinar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>BRL</span>Brazilian real
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>BGN</span>Bulgarian lev
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>CAD</span>Canadian dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>XOF</span>CFA Franc BCEAO
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>CL$</span>Chilean peso
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>CNY</span>Chinese yuan
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>COP</span>Colombian peso
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>Kč</span>Czech koruna
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>DKK</span>Danish krone
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>EGP</span>Egyptian pound
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>€</span>Euro
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>FJD</span>Fijian dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>GEL</span>Georgian lari
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>HK$</span>Hong Kong Dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>HUF</span>Hungarian forint
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>Rs.</span>Indian rupee
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>Rp</span>Indonesian rupiah
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>₪</span>Israeli new sheqel
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>¥</span>Japanese yen
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>JOD</span>Jordanian dinar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>KZT</span>Kazakhstani tenge
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>KRW</span>Korean won
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>KWD</span>Kuwaiti dinar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>MYR</span>Malaysian ringgit
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>MXN</span>Mexican peso
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>MDL</span>Moldovan leu
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>NAD</span>Namibian Dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>TWD</span>New Taiwan Dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>NZD</span>New Zealand dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>NOK</span>Norwegian krone
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>OMR</span>Omani rial
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>zł</span>Polish zloty
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>£</span>Pound sterling
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>QAR</span>Qatar riyal
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>lei</span>Romanian new leu
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="dropdown-meganav-select-list-currency">
                      <li>
                        <a href="#">
                          <span>RUB</span>Russian Ruble
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>SAR</span>Saudi Arabian riyal
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>S$</span>Singapore dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>ZAR</span>South African rand
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>SEK</span>Swedish krona
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>CHF</span>Swiss franc
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>THB</span>Thai baht
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>TL</span>Turkish lira
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>AED</span>U.A.E. dirham
                        </a>
                      </li>
                      <li class="active">
                        <a href="#">
                          <span>US$</span>U.S. dollar
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>UAH</span>Ukraine Hryvnia
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span>UZS</span>Uzbekistan, Sums
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="navbar-nav-item-user dropdown">
              <a  href="{{route('login')}}"role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>My Account
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
