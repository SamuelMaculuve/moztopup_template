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
                          <form id="search" action="#">
                            <input type="text" placeholder="Digite algo..." id='searchText' name="searchKeyword" onkeypress="handle" />
                            <i class="fa fa-search"></i>
                          </form>
                        </div></li>
                        @if($user)
                            <li><a href="{{ route('pofilee') }}">Meu perfil<img src="{{ asset('images/profile-header.jpg')}}" alt=""></a></li>
                        @else
                        <li><a href="{{ route('loginUser') }}">Autentique-se <img src="{{ asset('images/profile-header.jpg')}}" alt=""></a></li>
                        @endif
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
