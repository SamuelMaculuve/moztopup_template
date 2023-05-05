 @extends('client.layout.main')
 @section('content')

@include('layouts.preloader')

@include('client.layout.navbar')

<link rel="stylesheet" href="{{ asset('css/custom_detail.css') }}">

  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">

            <!-- ***** Featured Start ***** -->
            <div class="row">
              <div class="col-lg-12">
                <div class="feature-banner header-text">
                  <div class="row">
                    <div class="col-lg-4 text-light">
                      <img src="{{ asset('storage/images/games/'.$game->image) }}" alt="" style="border-radius: 23px;">
                      <h3 class="pt-4">{{ $game->name }}</h3>
                      <p>Recarregue {{ $game->name }}: {{ $game->description }}</p>
                        Pague com comodidade usando M-Pesa, E-Mola. E preciso se regitrar e fazer o login!

                    </div>
                    <div class="col-lg-8">
                    <form action="{{ route('payment') }}" method="post">
                        @csrf
                        <input type="hidden" name="game" value="{{ Crypt::encrypt($game->id) }}">
                      <ul class="timeline">
                        <li>
                          <h3>Insira seu Riot ID</h3>

                          <div class="search-input pt-4">
                            <div class="search1" >
                              <input type="text" placeholder="Insira seu Riot ID" id="searchText" name="riotId" >

                              <br/>
                              <br/>
                              <span style="font-size: 10pt;color: #fff !important;padding-top: 3pt;" class="pt-2">Para encontrar o seu Riot ID, selecione sua página de perfil e copie sua Riot ID + Tag usando o botão ao lado do seu Riot ID. (Exemplo: Westbourne # Sea)
                              </span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <h3>Selecione o Valor da Recarga</h3>
                          <div class="most-popular">

                            <div class="row hiddenradio">
                            @foreach ($rechargeTypes as $recharge)
                                <div class="col-lg-3 col-sm-6">
                                  <label>
                                    <input type="radio" name="rechargeType" value="{{ Crypt::encrypt($recharge->rechargeType->id) }}" {{ $recharge->rechargeType == $recharge->rechargeType->first() ? 'checked' : "" }}>
                                        <div class="item">
                                            <center>
                                                @if(!$recharge->rechargeType->image)
                                                <img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                                @else
                                                <img style="width: 50%;" src="{{ asset('storage/images/games/'.$recharge->rechargeType->image) }}" alt="">
                                                @endif

                                                <h4>{{ $recharge->rechargeType->title }}</h4>
                                                <h4>{{ number_format($recharge->rechargeType->price) }} MZN</h4>
                                            </center>
                                        </div>
                                    </label>
                                </div>
                              @endforeach
                            </div>

                            </div>
                          </div>
                        </li>
                        <li>
                          <h3>Selecione o Pagamento</h3>
                          <!-- ***** Other Start ***** -->
                          <div class="other-games" style="padding: 0 0 0 0 !important;margin-top: 37px;">
                            <div class="row hiddenradiomethod">
                              <div class="col-lg-6">
                                <label style="width: 100%">
                                    <input type="radio" name="method" value="mpesa" checked>
                                    <div class="item" style="border-radius: 20px; padding-top: 20px; padding-left: 20px; padding-right: 20px;">
                                      <img src="{{ asset('images/mpesa-2.png')}}" alt="" class="templatemo-item">
                                      <h4>M-pesa</h4><span>Pague com mpesa</span>
                                    </div>
                                </label>
                              </div>
                              <div class="col-lg-6">
                                <label style="width: 100%">
                                    <input type="radio" name="method" value="emola">
                                    <div class="item" style="border-radius: 20px; padding-top: 20px; padding-left: 20px; padding-right: 20px;">
                                        <img src="{{ asset('images/emola.png')}}" alt="" class="templatemo-item">
                                        <h4>E-mola</h4><span>Pague com emola</span>
                                    </div>
                                </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ***** Other End ***** -->
                        </li>
                        <li>
                          <h3>Compre!</h3>
                          <div class="search-input pt-4">
                            <div class="search1">
                               <span style="font-size: 10pt;color: #fff !important;padding-top: 3pt;" class="pt-2">
                                OPCIONAL: Se você deseja receber a compra por e-mail, insira um endereço de e-mail
                              </span>
                              <br/><br/> <input type="text" placeholder="Endereço de Email" id="searchText" name="searchKeyword" >

                            </div>
                            <br/>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault" style="font-size: 10pt;color: #fff !important;">
                                Sim, desejo receber novidades e promoções via SMS
                              </label>
                            </div>
                          </div>
                        </li>
                        <button type="submit" class="btn btn-primary mt-4 px-5" style="border-radius: 30px;" >Comprar</button>
                      </ul>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Featured End ***** -->

            <!-- ***** Details Start ***** -->
            {{-- <div class="game-details">
              <div class="row">
                <div class="col-lg-12">
                  <h2>{{ $game->name }} Details</h2>
                </div>
                <div class="col-lg-12">
                  <div class="content">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="left-info">
                          <div class="left">
                            <h4>{{ $game->name }}</h4>
                            <span>Garena</span>
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
                      <div class="col-lg-12">
                        <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <!-- ***** Details End ***** -->


          </div>
        </div>
      </div>
    </div>

@include('client.layout.footer')

@endsection
