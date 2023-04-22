@extends('client.layout.main')
@section('content')
@include('client.layout.login_css')

  <div>
    <div
      class="px-5 py-5 p-lg-0 min-h-screen bg-surface-secondary d-flex flex-column justify-content-center"
    >
      <div class="d-flex justify-content-center"  style="background-color: #1f2122;">
        <div
          class="col-lg-5 col-xl-4 p-12 p-xl-20 position-fixed start-0 top-0 h-screen overflow-y-hidden bg-light d-none d-lg-flex flex-column"
        >
          <!-- ***** Logo Start ***** -->
          <a class="row" style="display: flex; flex-direction: row; align-items: center;" href="index.html">
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
          <div class="py-lg-16 px-lg-20">
            <div class="row">
              <div class="col-lg-10 col-md-9 col-xl-6 mx-auto ms-xl-0">
                <div class="mt-10 mt-lg-5 mb-6 d-lg-block">
                  <span class="d-inline-block d-lg-block h1 mb-4 mb-lg-6 me-3"
                    >👋</span
                  >
                  <h1 class="ls-tight font-bolder h2">Seja bem vindo!</h1>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                  <div class="mb-5">
                    <label class="form-label  text-white" for="name"
                      >Nome</label
                    >
                    <input type="text" class="form-control" id="name" name="name" />
                  </div>
                  <div class="mb-5">
                    <label class="form-label  text-white" for="email"
                      >Email</label
                    >
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" />
                    @if(isset($messages))
                        <ul class="text-danger">
                            @foreach ((array) $messages as $message)
                            <li> {{ $message }} </li>
                            @endforeach
                        </ul>
                    @endif
                  </div>
                  <div class="mb-5">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <label class="form-label  text-white" for="password"
                          >Password</label
                        >
                      </div>
                    </div>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      autocomplete="current-password"
                    />
                  </div>
                  <div class="mb-5">
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div>
                        <label class="form-label  text-white" for="password_confirmation"
                          >Confirmar Password</label
                        >
                      </div>
                    </div>
                    <input
                      type="password_confirmation"
                      class="form-control"
                      id="password_confirmation"
                      name="password_confirmation"
                      autocomplete="current-password"
                    />
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary w-full">Registar</button>
                  </div>
                </form>
                {{-- <div class="py-5 text-center">
                  <span class="text-xs text-uppercase font-semibold">or</span>
                </div> --}}
                {{-- <div class="hstack gap-4 justify-content-center">
                  <a href="#" class="btn btn-lg btn-square btn-neutral"
                    ><span class="icon icon-sm"
                      ><img
                        alt="..."
                        src="{{ asset('admin/img/social/github.svg') }}"
                      /> </span></a
                  ><a href="#" class="btn btn-lg btn-square btn-neutral"
                    ><span class="icon icon-sm"
                      ><img
                        alt="..."
                        src="{{ asset('admin/img/social/google.svg') }}" /></span
                  ></a>
                </div> --}}
              </div>
            </div>
          </div>
          <div
            class="position-lg-absolute bottom-0 end-0 my-8 mx-12 text-center text-lg-end"
          >
            <small>Ja tem uma conta?</small>
            <a
              href="{{ route('loginUser') }}"
              class="text-warning text-sm font-semibold"
              >Entrar</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
