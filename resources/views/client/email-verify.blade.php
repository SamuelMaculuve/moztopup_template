@extends('client.layout.main')
@section('content')
@include('client.layout.login_css')

  <div>
    <div
      class="px-5 py-5 p-lg-0 min-h-screen d-flex flex-column justify-content-center"
      style="background-color: #1f2122;"
    >
      <div class="d-flex justify-content-center"  style="background-color: #1f2122;">
        <div
          class="col-lg-5 col-xl-4 p-12 p-xl-20 position-fixed start-0 top-0 h-screen overflow-y-hidden bg-light d-none d-lg-flex flex-column"
        >
          <!-- ***** Logo Start ***** -->
        <a class="row" style="display: flex; flex-direction: row; align-items: center;" href="{{ route('home') }}">
            <img src="{{ asset('logo/megashop2.png') }}" style="width: 30% !important; height: 100% !important;">
            <h1 style="width: 70% !important;"><span style="color: #ff66c4;">MOZ</span><span style="color: #5e17eb;">TOPUP</span></h1>
        </a>

          <div class="mt-32 mb-20">
            <h1 class="ls-tight font-bolder display-6 text-white mb-5 text-dark">
              Vamos comprar recargas.
            </h1>
            <p class="text-white text-opacity-80 text-dark">
              Melhore as sua jogabilidade comprando recursos nos seus jogos.
            </p>
          </div>
          <div
            class="w-56 h-56 bg-blue-500 rounded-circle position-absolute bottom-0 end-20 transform translate-y-1/3"
          ></div>
        </div>
        <div
          class="col-12 col-md-9 col-lg-7 offset-lg-5 border-left-lg min-h-screen d-flex flex-column justify-content-center position-relative"
          style="background-color: #1f2122;"
        >
        <a class="row d-sm-block d-lg-none d-lx-none" style="display: flex; flex-direction: row; align-items: center; justify-content: center;" href="{{ route('home') }}">
            <img src="{{ asset('logo/megashop3-removebg-preview.png') }}" style="width: 50% !important; height: 100% !important;">
        </a>
          <div class="py-lg-16 px-lg-20">
            <div class="row">
              <div class="col-lg-10 col-md-9 col-xl-6 mx-auto ms-xl-0">
                @if (Session::get('status'))
                    <div class="alert alert-primary text-center" role="alert">
                        {{ Session::get('status') }} <strong>{{ $email }}</strong>.
                    </div>
                    @php
                        Session::forget('status');
                    @endphp
                @endif
                <div class="mt-10 mt-lg-5 mb-6 d-lg-block">
                  <span class="d-inline-block d-lg-block h1 mb-4 mb-lg-6 me-3"
                    >📧</span
                  >
                  <h1 class="ls-tight font-bolder h2">Verifique o seu email!</h1>
                </div>
                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                  <div class="mb-5">
                    <h6>Verifique a sua caixa postal e clique no link para confirmar o email.</h6>
                </div>
                <p>Nao recebeu o email?</p>
                <div>
                    <button type="submit" class="btn btn-primary w-full">Enviar Novamente</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div
            class="position-lg-absolute bottom-0 end-0 my-8 mx-12 text-center text-lg-end"
          >
            <small>Quer continuar sem validar?</small>
            <a
              href="{{ route('home') }}"
              class="text-warning text-sm font-semibold"
              >Continuar</a>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
