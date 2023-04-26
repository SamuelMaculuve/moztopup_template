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

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('logo/megashop3-removebg-preview.png')}}" alt="" style="width: 85px;">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Search End ***** -->

          <!-- ***** Search End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li><div class="search-input">
              {{-- <form id="search" action="#">
                <input type="text" placeholder="Digite algo..." id='searchText' name="searchKeyword" onkeypress="handle" />
                <i class="fa fa-search"></i>
              </form> --}}
            </div></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="background-color: transparent; border: none;" type="submit">
                        <a type="submit">Logout <img src="{{ asset('images/profile-header.jpg')}}" alt=""></a>
                    </button>
                </form>
            </li>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="{{ asset('images/profile.jpg')}}"alt="" style="border-radius: 23px;">
                  </div>
                  <div class="col-lg-4 align-self-center">

                    @if (Session::get('status'))
                        <div class="alert alert-primary text-center" role="alert">
                            {{ Session::get('status') }} <strong>{{ $user->email }}</strong>.
                        </div>
                        @php
                            Session::forget('status');
                        @endphp
                    @endif

                    <div class="main-info header-text">
                      <span>Online</span>
                      <h4>{{ $user->name }}</h4>
                      @if(!$user->hasVerifiedEmail())
                        <small class="badge bg-danger">Email nao verificado</small>
                      @endif

                      <p class="mb-2 {{ $user->hasVerifiedEmail() ? 'text-info' : 'text-danger' }}">{{ $user->email }}</p>

                      @if(!$user->hasVerifiedEmail())
                        <form action="{{ route('verification.send') }}" method="POST">
                            @csrf
                            <div>
                                <button type="submit" class="btn btn-primary w-full">Validar email</button>
                            </div>
                        </form>
                      @endif

                    </div>
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <ul>
                      <li>Recargas adquiridas <span>3</span></li>
                      <li>Jogos baixados <span>16</span></li>

                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clips">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="heading-section">
                            <h4><em>Jogos </em> comprados</h4>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="{{ asset('images/clip-01.jpg')}}" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>First Clip</h4>
                              <span><i class="fa fa-eye"></i> 250</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="{{ asset('images/clip-02.jpg')}}" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Second Clip</h4>
                              <span><i class="fa fa-eye"></i> 183</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="{{ asset('images/clip-03.jpg')}}" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Third Clip</h4>
                              <span><i class="fa fa-eye"></i> 141</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                          <div class="item">
                            <div class="thumb">
                              <img src="{{ asset('images/clip-04.jpg')}}" alt="" style="border-radius: 23px;">
                              <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="down-content">
                              <h4>Fourth Clip</h4>
                              <span><i class="fa fa-eye"></i> 91</span>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

        </div>
      </div>
    </div>
  </div>

  @include('client.layout.footer')
  @endsection
