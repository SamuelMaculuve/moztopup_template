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
            @foreach ($games as $game)
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('details2', ['id'=>Crypt::encrypt($game->id)])}} ">
                  <div class="item">
                    <img src="{{ asset('storage/images/games/'.$game->image)}}" alt="">
                    <h4>{{ $game->name }}<br><span>{{ $game->produced_by }}</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 4.8</li>

                    </ul>
                  </div>
                </a>
              </div>
            @endforeach
        </div>
        <!-- ***** Most Popular End ***** -->
        <!-- ***** Most Popular Start *****-->
        @if($promotions)
        <div class="most-popular">
          <div class="heading-section">
            <h4><em>RECARGAS EM</em> PROMOCAO</h4>
          </div>
          <div class="row">

            @foreach ($promotions as $game)

            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('details2', ['id'=>Crypt::encrypt($game->game->id)])}}">
                    <div class="item">
                        <img src="{{asset('storage/images/games/'.$game->game->image)}}" alt="">
                        <h4>{{ $game->game->name }}<br><span>{{ $game->game->produced_by }} </span></h4>
                        <ul>
                            <li><span class="badge bg-success text-light">PROMOCAO</span></li>
                            @php
                                $rechargesAvailable = \App\Models\Recharge::where(['user_id' => null, 'game_id' => $game->game_id, 'recharge_type_id'=>$game->id])->count();
                            @endphp

                            @if(!$rechargesAvailable)
                                <span class="badge text-light bg-danger">Esgotada</span>
                            @else
                                <li><span class="badge text-light bg-info">Restam apenas {{ $rechargesAvailable }}</span></li>
                            @endif

                        </ul>
                    </div>
                </a>
            </div>

            @endforeach

            {{-- <div class="col-lg-12">
              <div class="main-button">
                <a href="browse.html">Ver mais recarga para paytion</a>
              </div>
            </div> --}}
          </div>
        </div>
        @endif
        <!-- ***** Most Popular End ***** -->
        <!-- ***** Most Popular Start *****-->
        {{-- <div class="most-popular">
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
        </div> --}}
        <!-- ***** Most Popular End ***** -->

      </div>
    </div>
  </div>
  </div>

  @include('client.layout.footer')
@endsection
