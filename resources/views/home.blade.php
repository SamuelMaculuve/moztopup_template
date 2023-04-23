@extends('client.layout.main')
@section('content')

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  @include('client.layout.navbar')

  <div class="container">
    <div class="row">
      <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Bem vindo Moztopup</h6>
                  <h4><em>compre</em> recarga em jogos e aplicativos</h4>
                  <div class="main-button">
                    <a href="browse.html">Ver todos disponiveis</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->



        <!-- ***** Most Popular Start *****-->
        <div class="most-popular">
          <div class="heading-section">
            <h4><em>JOGOS MAIS</em> POPULARES</h4>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <a href="{{ route('details')}} ">
                <div class="item">
                  <img src="{{ asset('images/fortnite.jfif')}}" alt="">
                  <h4>Fortnite<br><span>Sandbox</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/freefire.jpg')}}" alt="">
                <h4>Free Fire<br><span>Steam-X</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/fifa.jfif')}}" alt="">
                <h4>Fifa 2023<br><span>Battle S</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/pubg2.jfif')}}" alt="">
                <h4>PubG <br><span>Legendary</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div></a>
            </div>
            <div class="col-lg-6">

              <div class="item">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <a href="more_details.html">
                    <div class="item inner-item">
                      <img src="{{ asset('images/forza.jfif')}}" alt="">
                      <h4>Forza Horizon 5<br><span>Legendary</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>

                      </ul>
                    </div>
                    </a>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <a href="more_details.html">
                    <div class="item">
                      <img src="{{ asset('images/pubg.jfif')}}" alt="">
                      <h4>PubG<br><span>Matrix Games</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>

                      </ul>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/playstation.jfif')}}" alt="">
                <h4>Warface<br><span>Max 3D</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/cod.jfif')}}" alt="">
                <h4>COD-Cold War<br><span>Legend</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div></a>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="browse.html">Ver mais jogos pupulares</a>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Most Popular End ***** -->
        <!-- ***** Most Popular Start *****-->
        <div class="most-popular">
          <div class="heading-section">
            <h4><em>JOGOS COM</em> RECARGA PARA PAYTION</h4>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
                <div class="item">
                  <img src="{{ asset('images/popular-02.jpg')}}" alt="">
                  <h4>Fortnite<br><span>Sandbox</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
                <div class="item">
                  <img src="{{ asset('images/popular-01.jpg')}}" alt="">
                  <h4>PubG<br><span>Battle S</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
                <div class="item">
                  <img src="{{ asset('images/popular-05.jpg')}}" alt="">
                  <h4>Dota2<br><span>Steam-X</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
                <div class="item">
                  <img src="{{ asset('images/popular-03.jpg')}}" alt="">
                  <h4>CS-GO<br><span>Legendary</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div></a>
            </div>
            <div class="col-lg-6">

              <div class="item">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <a href="more_details.html">
                      <div class="item inner-item">
                        <img src="{{ asset('images/popular-08.jpg')}}" alt="">
                        <h4>Mini Craft<br><span>Legendary</span></h4>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>

                        </ul>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <a href="more_details.html">
                      <div class="item">
                        <img src="{{ asset('images/popular-07.jpg')}}" alt="">
                        <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>

                        </ul>
                      </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
                <div class="item">
                  <img src="{{ asset('images/popular-06.jpg')}}" alt="">
                  <h4>Warface<br><span>Max 3D</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
                <div class="item">
                  <img src="{{ asset('images/popular-08.jpg')}}" alt="">
                  <h4>Warcraft<br><span>Legend</span></h4>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>

                  </ul>
                </div></a>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="browse.html">Ver mais recarga para paytion</a>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Most Popular End ***** -->
        <!-- ***** Most Popular Start *****-->
        <div class="most-popular">
          <div class="heading-section">
            <h4><em>JOGOS COM</em> RECARGA DIRETA</h4>
          </div>
          <div class="row">

            <div class="col-lg-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <a href="more_details.html">
                      <div class="item inner-item">
                        <img src="{{ asset('images/popular-05.jpg')}}" alt="">
                        <h4>Mini Craft<br><span>Legendary</span></h4>
                        <ul>
                          <li><i class="fa fa-star"></i> 4.8</li>

                        </ul>
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <a href="more_details.html">
                    <div class="item">
                      <img src="{{ asset('images/popular-06.jpg')}}" alt="">
                      <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                      <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>

                      </ul>
                    </div></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/popular-07.jpg')}}" alt="">
                <h4>Warface<br><span>Max 3D</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div></a>
            </div>
            <div class="col-lg-3 col-sm-6">
              <a href="more_details.html">
              <div class="item">
                <img src="{{ asset('images/popular-08.jpg')}}" alt="">
                <h4>Warcraft<br><span>Legend</span></h4>
                <ul>
                  <li><i class="fa fa-star"></i> 4.8</li>

                </ul>
              </div></a>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="browse.html">Ver jogos com recarga directa</a>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Most Popular End ***** -->

      </div>
    </div>
  </div>

  @include('client.layout.footer')
@endsection
