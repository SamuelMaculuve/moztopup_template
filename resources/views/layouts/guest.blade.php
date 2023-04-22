@extends('client.layout.main')
@section('content')

      <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ route('home') }}" class="logo">
              <img src="{{ asset('build/assets/logo/megashop3-removebg-preview.png')}}" alt="" style="width: 85px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Search End ***** -->

            <!-- ***** Search End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><div class="search-input">
                <form id="search" action="#">
                  <input type="text" placeholder="Digite algo..." id='searchText' name="searchKeyword" onkeypress="handle" />
                  <i class="fa fa-search"></i>
                </form>
              </div></li>
              <li><a href="profile.html">Inscreva-se <img src="{{ asset('build/assets/images/profile-header.jpg')}}" alt=""></a></li>
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

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <div class="container">
        {{ $slot }}
    </div>

@endsection
