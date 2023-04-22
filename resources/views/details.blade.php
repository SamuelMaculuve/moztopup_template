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

  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">

            <!-- ***** Featured Start ***** -->
            <div class="row">
              <div class="col-lg-12">
                <div class="feature-banner header-text">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="{{ asset('build/assets/images/feature-left.jpg')}}" alt="" style="border-radius: 23px;">
                      <h3 class="pt-4">Fortnite</h3>
                      <p>Recarregue League of Legends: Wild Rift Wild Cores em segundos! Basta digitar seu ID de usuário League of Legends: Wild Rift, selecionar o valor de Wild Cores que deseja adquirir, completar o pagamento, e a Wild Cores será adicionada imediatamente à sua conta League of Legends: Wild Rift.

                        Pague com comodidade usando PIX, Mercado Pago, PicPay, ou Transferência Bancária. Não há necessidade de registro ou login!

                    </div>
                    <div class="col-lg-8">
                      <ul class="timeline">
                        <li>
                          <h3>Insira seu Riot ID</h3>

                          <div class="search-input pt-4">
                            <form class="search1" action="#">
                              <input type="text" placeholder="Insira seu Riot ID" id="searchText" name="searchKeyword" >

                              <br/>
                              <br/>
                              <span style="font-size: 10pt;color: #fff !important;padding-top: 3pt;" class="pt-2">Para encontrar o seu Riot ID, selecione sua página de perfil e copie sua Riot ID + Tag usando o botão ao lado do seu Riot ID. (Exemplo: Westbourne # Sea)
                              </span>
                            </form>
                          </div>
                        </li>
                        <li>
                          <h3>Selecione o Valor da Recarga</h3>
                          <div class="most-popular">

                            <div class="row">
                              <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                 <center>
                                   <img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                   <h4>275 Wild Cores</h4>
                                 </center>

                                </div>
                              </div>
                              <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                  <center>
                                    <img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                    <h4>1075 Wild Cores</h4>
                                  </center>

                                </div>
                              </div>
                              <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                  <center>
                                    <img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                    <h4>2050 Wild Cores</h4>
                                  </center>

                                </div>
                              </div>
                              <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                  <center><img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                    <h4>3675 Wild Cores</h4></center>

                                </div>
                              </div>

                            </div>
                          </div>
                        </li>
                        <li>
                          <h3>Selecione o Pagamento</h3>
                          <!-- ***** Other Start ***** -->
                          <div class="other-games" style="padding: 0 0 0 0 !important;margin-top: 37px;">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="item">
                                  <img src="{{ asset('build/assets/images/mpesa.png')}}" alt="" class="templatemo-item">
                                  <h4>Mpesa</h4><span>Pague com mpesa</span>
                                  <ul>
                                    <li><i class="fa fa-star"></i> 500 MT
                                      -8%</li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="item">
                                  <img src="{{ asset('build/assets/images/emola.png')}}" alt="" class="templatemo-item">
                                  <h4>Emola</h4><span>Pague com emola</span>
                                  <ul>
                                    <li><i class="fa fa-money"></i> 900 MT
                                      -8%</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ***** Other End ***** -->
                        </li>
                        <li>
                          <h3>Compre!</h3>
                          <div class="search-input pt-4">
                            <form class="search1" action="#">
                               <span style="font-size: 10pt;color: #fff !important;padding-top: 3pt;" class="pt-2">
                                OPCIONAL: Se você deseja receber a compra por e-mail, insira um endereço de e-mail
                              </span>
                              <br/><br/> <input type="text" placeholder="Endereço de Email" id="searchText" name="searchKeyword" >

                            </form>
                            <br/>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault" style="font-size: 10pt;color: #fff !important;">
                                Sim, cadastre-me para receber novidades e promoções exclusivas da Codashop!
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault" style="font-size: 10pt;color: #fff !important;">
                                Sim, desejo receber novidades e promoções via SMS
                              </label>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Featured End ***** -->

            <!-- ***** Details Start ***** -->
            <div class="game-details">
              <div class="row">
                <div class="col-lg-12">
                  <h2>Fortnite Details</h2>
                </div>
                <div class="col-lg-12">
                  <div class="content">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="left-info">
                          <div class="left">
                            <h4>Fortnite</h4>
                            <span>Sandbox</span>
                          </div>
                          <ul>
                            <li><i class="fa fa-star"></i> 4.8</li>
                            <li><i class="fa fa-download"></i> 2.3M</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="right-info">
                          <ul>
                            <li><i class="fa fa-star"></i> 4.8</li>
                            <li><i class="fa fa-download"></i> 2.3M</li>
                            <li><i class="fa fa-server"></i> 36GB</li>
                            <li><i class="fa fa-gamepad"></i> Action</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <img src="{{ asset('build/assets/images/details-01.jpg')}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                      </div>
                      <div class="col-lg-4">
                        <img src="{{ asset('build/assets/images/details-02.jpg')}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                      </div>
                      <div class="col-lg-4">
                        <img src="{{ asset('build/assets/images/details-03.jpg')}}" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                      </div>
                      <div class="col-lg-12">
                        <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Details End ***** -->


          </div>
        </div>
      </div>
    </div>



@endsection
