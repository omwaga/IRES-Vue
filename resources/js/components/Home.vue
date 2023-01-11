<template>
  <div>
    <section class="box-slider-search">
      <div class="container">
        <h1 class="nocontent outline">--- Search form  ---</h1>
        <div class="row">
          <div class="col-md-8">
            <div style="background: url(img/slides/home3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible "></div><!-- PARALLAX BACKGROUND IMAGE --> 
            <div class="vehiculs-text-bar pt-4">
              <h3>Sell or Rent  <span> vehiculs </span>Quickly ! </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
              <a href="#" title="" class="flat-btn">Joing us</a>

            </div>
          </div>

          <div class="col-md-4">
            <div class="horizontal-search v-f-p"> 
              <div class="search-form"> 
                <h1 class="fsearch-title">
                  <i class="fa fa-search"></i><span>SEARCH FOR vehicul</span>
                </h1>

                <form action="vehiculs.html"  method="get" class="form-inline">   
                  <div class="search-form-content">
                    <div class="search-form-field">  
                      <div class="form-group col-md-12">
                        <div class="label-select">
                          <select class="form-control" name="s_location">
                            <option>Any Manufacturer</option>
                            <option>Audi</option>
                            <option>Mercedes-Benz</option>
                            <option>BMW</option>
                            <option>Lexus</option>
                            <option>Lincoln</option>
                            <option>Ford</option>
                            <option>Fiat</option>
                            <option>Dodge</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-md-12">
                        <div class="label-select">  
                          <select class="form-control" name="anymodule">
                            <option>Any Model </option>
                            <option value="1">R8</option>
                            <option value="2">S500</option>
                            <option value="3">540i</option>
                            <option value="4">RX300</option>
                            <option value="5">Navigator</option>
                            <option value="6">Taurus</option>
                            <option value="7">Doblo</option>
                            <option value="8">Viper</option>
                          </select>
                        </div>
                      </div>  

                      <div class="form-group col-md-12">
                        <div class="label-select">
                          <select class="form-control" name="s_location"> 
                            <option>Any locations</option>
                            <option>Central New York</option>
                            <option>GreenVille</option>
                            <option>Long Island</option>
                            <option>New York City</option>
                            <option>West Side</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-md-12">
                        <div class="label-select"> 
                          <select class="form-control" name="s_statu">
                            <option>Any Status </option>
                            <option value="damaged">Damaged</option>
                            <option value="new">New</option>
                            <option value="semi-new">Semi-New</option>
                            <option value="used">Used</option>
                          </select>
                        </div>
                      </div> 

                      <div class="form-group col-md-12">
                        <span class="gprice-label">Price Range</span>
                        <input type="text" class="span2" value="" data-slider-min="0" 
                        data-slider-max="60000" data-slider-step="5" 
                        data-slider-value="[0,60000]" id="price-range" >
                      </div>
                      <div class="form-group col-md-12">
                        <span class="garea-label">Mileage Range</span> 
                        <input type="text" class="span2" value="" data-slider-min="0" 
                        data-slider-max="60000" data-slider-step="5" 
                        data-slider-value="[50,60000]" id="vehicul-geo" >
                      </div>                                            
                    </div> 
                  </div>
                  <div class="search-form-submit">
                    <button type="submit" class="btn-search">Search</button>
                  </div>
                </form>
              </div><!-- Services Sec -->

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="block">
      <div style="background: url(img/call-to-action-bg.jpg) repeat scroll 50% 422.28px transparent; background-attachment: fixed;" class="parallax scrolly-invisible  blackish"></div><!-- PARALLAX BACKGROUND IMAGE --> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="vehiculs-text-bar">
              <h3>Sell or Rent  <span> vehiculs </span>Quickly ! </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare porttitor diam<br/> a accumsan justo laoreet suscipit. Maecenas at bibendum nunc</p>
              <a href="#" title="" class="flat-btn">Joing us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="block">
      <div class="container">
        <div class="heading4">
          <h2>FEATURED VEHICULS</h2>
          <span>Lorem ipsum dolor consectetu</span>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="vehiculs-sec">
              <div class="row">                                
                <div class="col-md-4">
                  <div class="vehiculs-box">
                    <div class="vehiculs-thumb">
                      <img src="img/demo/vehicul4.jpg" alt="" />
                      <span class="spn-status"> Semi-New </span>
                      <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                      <div class="user-preview">
                        <a class="col" href="agent.html">
                          <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                        </a> 
                      </div> 
                      <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                      <p class="car-info-smal">
                        Registration 2010<br>
                        3.0 Diesel<br>
                        230 HP<br>
                        Body Coupe<br>
                        80 000 Miles
                      </p>
                    </div>
                    <h3><a href="vehicul.html" title="">Mercedes-Benz</a></h3>
                    <span class="price">$444000</span>
                    <span class="rate-it">
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i> 
                    </span>
                  </div><!-- prop Box -->
                </div>                                
                <div class="col-md-4">
                  <div class="vehiculs-box">
                    <div class="vehiculs-thumb">
                      <img src="img/demo/vehicul3.jpg" alt="" />
                      <span class="spn-status"> Damaged </span>
                      <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                      <div class="user-preview">
                        <a class="col" href="agent.html">
                          <img alt="Camilė" class="avatar avatar-small" src="img/1.png" title="Camilė">
                        </a> 
                      </div> 
                      <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                      <p class="car-info-smal">
                        Registration 2010<br>
                        3.0 Diesel<br>
                        230 HP<br>
                        Body Coupe<br>
                        80 000 Miles
                      </p>
                    </div>
                    <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                    <span class="price">$789000</span>
                    <span class="rate-it">
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i> 
                    </span>
                  </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                  <div class="vehiculs-box">
                    <div class="vehiculs-thumb">
                      <img src="img/demo/vehicul2.jpg" alt="" />
                      <span class="spn-status"> Semi-New </span>
                      <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                      <div class="user-preview">
                        <a class="col" href="agent.html">
                          <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                        </a> 
                      </div> 
                      <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                      <p class="car-info-smal">
                        Registration 2010<br>
                        3.0 Diesel<br>
                        230 HP<br>
                        Body Coupe<br>
                        80 000 Miles
                      </p>
                    </div>
                    <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                    <span class="price">$380000</span>
                    <span class="rate-it">
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i> 
                    </span>
                  </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                  <div class="vehiculs-box">
                    <div class="vehiculs-thumb">
                      <img src="img/demo/vehicul4.jpg" alt="" />
                      <span class="spn-status"> Damaged </span>
                      <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                      <div class="user-preview">
                        <a class="col" href="agent.html">
                          <img alt="Camilė" class="avatar avatar-small" src="img/4.png" title="Camilė">
                        </a> 
                      </div> 
                      <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                      <p class="car-info-smal">
                        Registration 2010<br>
                        3.0 Diesel<br>
                        230 HP<br>
                        Body Coupe<br>
                        80 000 Miles
                      </p>
                    </div>
                    <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                    <span class="price">$1000000</span>
                    <span class="rate-it">
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i> 
                    </span>
                  </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                  <div class="vehiculs-box">
                    <div class="vehiculs-thumb">
                      <img src="img/demo/vehicul5.jpg" alt="" />
                      <span class="spn-status"> Used </span>
                      <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                      <div class="user-preview">
                        <a class="col" href="agent.html">
                          <img alt="Camilė" class="avatar avatar-small" src="img/3.png" title="Camilė">
                        </a> 
                      </div> 
                      <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                      <p class="car-info-smal">
                        Registration 2010<br>
                        3.0 Diesel<br>
                        230 HP<br>
                        Body Coupe<br>
                        80 000 Miles
                      </p>
                    </div>
                    <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                    <span class="price">$500000</span>
                    <span class="rate-it">
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i> 
                    </span>
                  </div><!-- prop Box -->
                </div>
                <div class="col-md-4">
                  <div class="vehiculs-box">
                    <div class="vehiculs-thumb">
                      <img src="img/demo/vehicul3.jpg" alt="" />
                      <span class="spn-status"> Damaged</span>
                      <span class="spn-save"> <i class="ti ti-heart"></i> </span>

                      <div class="user-preview">
                        <a class="col" href="agent.html">
                          <img alt="Camilė" class="avatar avatar-small" src="img/2.png" title="Camilė">
                        </a> 
                      </div> 
                      <a class="proeprty-sh-more" href="vehicul.html"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                      <p class="car-info-smal">
                        Registration 2010<br>
                        3.0 Diesel<br>
                        230 HP<br>
                        Body Coupe<br>
                        80 000 Miles
                      </p>
                    </div>
                    <h3><a href="vehicul.html" title="Mercedes-Benz">Mercedes-Benz</a></h3>
                    <span class="price">$340000</span>
                    <span class="rate-it">
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star  star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star star-on-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i>&nbsp;
                      <i title="nice" class="ti ti-star off star-off-png"></i> 
                    </span>
                  </div><!-- prop Box -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
</template>

<script>
import Login from './Auth/Login';

export default {  
  components: {
    'login': Login
  }
}
</script>
