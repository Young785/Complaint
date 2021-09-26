<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasued E-map System</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css"/>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body data-spy="scroll">

  <!--  BEGIN HEADER  -->
    <header id="header">

      <!-- BEGIN MAIN SLIDER -->
        <section id="home" class="home">
          <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators d-flex align-items-center">
              <li data-target="#carouselExampleFade" data-slide-to="0" class="border-0 rounded-circle carousel-style active"></li>
              <li data-target="#carouselExampleFade" data-slide-to="1" class="border-0 rounded-circle carousel-style"></li>
              <li data-target="#carouselExampleFade" data-slide-to="2" class="border-0 rounded-circle carousel-style"></li>
            </ul>
              <!-- END SLIDE CHANGE -->
          </div>
        </section>
      <!-- END MAIN SLIDER -->

      <!-- BEGIN TASUED-MAP SECTION -->
      <section id="map" class="world-map-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <div class="content-main text-center mt-0">
                <div class="content-bottom content-bottom-width">
                  <section class="col-md-12 main-section">
                    <div class="col-md-7 seach-mdiv">
                      <div class="seach-div">
                        <span class="padding: 7px 10px 10px 10px;font-size: 12px;">
                          <i class="fa fa-search"></i>
                        </span>
                        <input type="text" class="area-input" placeholder="Type a Tasued location name to search...">
                        <li class="search-li">
                          <i class="fa fa-times"></i>
                        </li>
                      </div>  
                    </div>
                    <div class="col-md-4 folder-mdiv">
                      <div class="folder-div">             
                        <span class="folder-mspan">
                          <i class="fa fa-file"></i>
                        </span>
                        <span class="folder-span"><i class="fa fa-arrow-circle-o-down"></i></span>
                      </div>
                      <div class="fol-mdiv">             
                        <span class="fol-mspan">
                          <i class="fa fa-file" style="color: #76e2e2;"></i>
                          <b class="fol-day">Today</b>
                        </span>
                        <span class="fol-span">
                          <i class="fa fa-arrow-circle-o-down"></i>
                        </span>
                      </div>
                    </div>
                    <div class="col-md-1 cancel-mdiv">
                      <span class="cancel-span"><i class="fa fa-times"></i></span>
                    </div>
                  </section>
                  <section class="col-md-12" style="padding-top: 30px;">
                    <div class="col-md-4 cl-mdiv">
                      <div class="cl-sdiv"> 
                        <span class="cl-mspan">Map
                          <b class="cl-mb"> View</b>
                        </span>
                        <span class="cls-span">
                          <i class="fa fa-circle cl-i"></i>
                        </span>
                      </div>
                      <div class="cl-tdiv"> 
                        <span class="cl-span">Category</span> </div>
                          <div class="cl-tdiv">
                            <div class="btn-group cl-div">
                              <button data-toggle="dropdown" class="btn btn-default places-button" type="button" aria-expanded="false">
                                <i class="fa fa-caret-down places-i"></i> Places</button>
                                  <ul role="menu" class="dropdown-menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                                <button type="button" class="btn btn-round btn-default cl-button">Restuarant</button>
                              </div>
                              <div class="cat-mdiv">
                                <ul class="cat+-ul">
                                  <h3 class="cat-h3">COSIT</h3>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">Computer Science</h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input" checked>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">Biology</h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </ul>
                              </div>
                              
                              <div class="cat-mdiv">
                                <ul class="cat+-ul">
                                  <h3 class="cat-h3">COSMAS</h3>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">Economics</h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input" checked>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">Pol Science </h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </ul>
                                

                              <div class="cat-mdiv">
                                <ul class="cat+-ul">
                                  <h3 class="cat-h3">COHUM</h3>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">Yoruba</h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input" checked>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">English </h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </ul>
                              </div>
                              <div class="cat-mdiv">
                                <ul class="cat+-ul">
                                  <h3 class="cat-h3">COVTED</h3>
                                    <div class="cat-div">
                                      <h4 class="cat-sub">Agric</h4>
                                      <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input" checked>
                                        </form>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="cat-div">
                                      <h4 class="cat-sub">Bs. Edu </h4>
                                      <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input">
                                        </form>
                                      </div>
                                    </div>
                                    </div>
                                </ul>
                              </div>
                              <div class="cat-mdiv">
                                <ul class="cat+-ul">
                                  <h3 class="cat-h3">COSPED</h3>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">GCP</h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input" checked>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cat-div">
                                    <h4 class="cat-sub">Adult</h4>
                                    <div class="square single-row">
                                      <div class="checkbox">
                                        <form action="/po">
                                          <input type="checkbox" name="search_input">
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </ul>
                              </div>
                              <div class="rating-mdiv">
                                <div class="rating-sdiv"> 
                                  <span class="rating-mspan">Start
                                    <b class="rating-mb"> Rating</b>
                                    </span>
                                </div>
                                <div class="rating-div">
                                  <span class="rating-span">
                                  <b class="rating-b"> 1-2</b>
                                  </span>
                                  <span class="rating-span">
                                    <b class="rating-b"> 3</b>
                                  </span>
                                  <span class="rating-span">
                                    <b class="rating-b"> 4</b>
                                  </span>
                                  <span class="rating-span5">
                                    <i class="fa fa-star rating-i"></i> 
                                    <b class="rating-b5">
                                      
                                    5</b>
                                  </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5" style="float: left;">
                              <img src="/images/map.png" alt="" class="map-image" usemap="#mapLocator">
                              <div class="col-md-5 mlrc ml-mdiv1" id="ml-1">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Libary Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science, Biology, Mathematics</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv2" id="ml-2">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv3" id="ml-3">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv4" id="ml-4">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv5" id="ml-5">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv6" id="ml-6">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv7" id="ml-7">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv8" id="ml-8">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv9" id="ml-9">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <div class="col-md-5 mlrc ml-mdiv10" id="ml-10">
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="ml-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Cosit Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="ml-p">Computer Science</p>
                                  </div>
                                  <button class="ml-button">See Details</button>
                                </div>
                              </div>
                              <map name="mapLocator">
                                <area shape="circle" class="map-area" coords="85, 220, 20" data-id="1" alt="">
                                <area shape="circle" class="map-area" coords="150, 360, 20" data-id="2" alt="">
                                <area shape="circle" class="map-area" coords="310, 250, 20" data-id="3" alt="">
                                <area shape="circle" class="map-area" coords="135, 500, 20" data-id="4" alt="">
                                <area shape="circle" class="map-area" coords="245, 550, 25" data-id="5" alt="">
                                <area shape="circle" class="map-area" coords="160, 75, 20" data-id="6" alt="">
                                <area shape="circle" class="map-area" coords="330, 116, 23" data-id="7" alt="">
                                <area shape="circle" class="map-area" coords="470, 267, 22" data-id="8" alt="">
                                <area shape="circle" class="map-area" coords="446, 460, 24" data-id="9" alt="">
                                <area shape="circle" class="map-area" coords="430, 600, 21" data-id="10" alt="">
                              </map>  
                            </div>
                            <div class="col-md-3 col-right">
                              <div class="rating-sdiv"> 
                                <span class="rating-mspan">30
                                  <b class="rating-mb">Result</b>
                                </span>
                                <span>
                                  popular first
                                </span>
                              </div>
                              <div class="cr-mdiv">
                                <a href="/locate">
                                  <img src="/images/1.jpeg" class="cr-img">
                                </a>
                                <div class="cr-div">
                                  <div class="cr-div">
                                    <h3 class="cr-h3">ICT Building</h3>
                                    <span style="float: right;">
                                      <i class="fa fa-file" style="color: #76e2e2;"></i>
                                      <b style="font-size: 11px;">50</b>
                                    </span>
                                  </div>
                                  <p class="cr-p">5-10 mins</p>
                                </div>
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/2.png" class="cr-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">Libary Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="cr-p">5-10 mins</p>
                                  </div>
                                </div>
                                </div>
                                <div class="cr-mdiv">
                                  <a href="/locate">
                                    <img src="/images/3.jpg" class="cr-img">
                                  </a>
                                  <div class="cr-div">
                                    <div class="cr-div">
                                      <h3 class="cr-h3">ICT Building</h3>
                                      <span style="float: right;">
                                        <i class="fa fa-file" style="color: #76e2e2;"></i>
                                        <b style="font-size: 11px;">50</b>
                                      </span>
                                    </div>
                                    <p class="cr-p">5-10 mins</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- end section #world-map -->
      <!-- END TASUED-MAP SECTION -->

    </header>
  <!--  END HEADER  -->

  <!-- Javascript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="/js/icheck-init.js"></script>
  <script src="/js/jquery.icheck.js"></script>
  <script>
    $('.map-area').on('click', function() {
      var id =  $(this).data('id');
      if ($('#ml-'+id).hasClass('active')) {
        $('#ml-'+id).removeClass('active');
      } else {
        $('.mlrc').removeClass('active');
        $('#ml-'+id).addClass('active')
      }
    });
  </script>
</body>
</html>