@extends('client.layout.main')
@section('content')
    @include('layouts.preloader')

    @include('client.layout.navbar')
    <link rel="stylesheet" href="{{ asset('css/custom_payment.css') }}">

    <div class="container d-flex align-items-center" style="margin-top: 150px;">
        <form action="{{ route('payment.request') }}" method="post">
            @csrf
        <div class="col">
            <h1 class="h3 mb-5 text-center">Finalizar Comprar</h1>
             <div class="row d-flex justify-content-center align-items-center">
                 <!-- Left -->
                 <div class="col-lg-6">
                    <div class="row d-none d-lg-flex d-md-flex mb-2 gap-2 mx-1 justify-content-center" style="background-color: white; border-radius: 5px;">
                        <div class="col-lg-3 col-sm-6 p-2">
                            <div class="item">
                                <center>
                                    <img style="width: 90%;" src="{{ asset('storage/images/games/'.$game->image)}}" alt="">
                                    <h6 class="mt-2 text-dark">{{ $game->name }}</h6>
                                </center>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 p-2">
                            <div class="item">
                                <center>
                                    <img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                    <h6 class="mt-2 text-dark">{{ $rechargeType->title }}</h6>
                                    <h5 class="text-dark">{{ number_format($rechargeType->price) }} MZN</h5>
                                </center>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 p-2">
                            <div class="item">
                                <center>
                                    @if($method == 'mpesa')
                                        <img style="width: 90%;" src="{{ asset('images/mpesa.png')}}" alt="M-Pesa Logo">
                                    @endif
                                    @if($method == 'emola')
                                        <img style="width: 90%;" src="{{ asset('images/emola.png')}}" alt="E-Mola Logo">
                                    @endif
                                    <h6 class="mt-2 text-dark">{{ $method }}</h6>
                                </center>
                            </div>
                        </div>
                    </div>
                     <div class="accordion" id="accordionPayment">
                         <!-- Credit card -->
                         <div class="accordion-item mb-3">
                             <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                 <label class="form-check-label pt-1 text-dark" for="">
                                     <small>Metodo: </small> {{ $method == 'mpesa' ? 'M-Pesa' : 'E-Mola' }}
                                 </label>
                             </h2>
                             <div id="collapseCC" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionPayment" style="">
                                 <div class="accordion-body">
                                     <div class="mb-3">
                                         <label class="form-label">N&uacute;mero de telefone</label>
                                         <input type="text" maxlength="9" minlength="9" name="phone" class="form-control">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 {{-- INPUTS --}}
                 <input type="hidden" name="method" value="{{$method}}">
                 <input type="hidden" name="rechargeType" value="{{$rechargeType->id}}">
                 {{-- INPUTS --}}

                 <!-- Right -->
                 <div class="col-lg-3">
                     <div class="card position-sticky top-0">
                         <div class="p-3 bg-light bg-opacity-10">
                             <h6 class="card-title mb-3 text-dark">Informac&otilde;es</h6>
                             <div class="d-flex justify-content-between mb-1 small">
                                 <span>Jogo</span> <span>{{ $game->name }}</span>
                             </div>
                             <div class="d-flex justify-content-between mb-1 small">
                                 <span>Tipo de Recarga:</span> <small>{{ $rechargeType->title }}</small>
                             </div>
                             {{-- <div class="d-flex justify-content-between mb-1 small">
                                 <span>Taxa</span> <span class="text-danger">10.00 MZN</span>
                             </div> --}}
                             <hr>
                             <div class="d-flex justify-content-between mb-4 small">
                                 <span>TOTAL</span> <strong class="text-dark">{{ number_format($rechargeType->price) }} MZN</strong>
                             </div>
                             <div class="form-check mb-1 small">
                                 <input class="form-check-input" type="checkbox" value="" id="tnc">
                                 <label class="form-check-label" for="tnc">
                                     Aceito e concordo com os <a href="#" class="text-info">termos e condic&otilde;es</a>
                                 </label>
                             </div>
                             <div class="form-check mb-3 small">
                                 <input class="form-check-input" type="checkbox" value="" id="subscribe">
                                 <label class="form-check-label" for="subscribe">
                                     Receber promoc&otilde;es por email e SMS. Se mudar de ideia, voc&ecirc; pode remove a
                                     subscricão quando quiser. <a href="#" class="text-info">Politicas de
                                         Privacidade</a>
                                 </label>
                             </div>
                             <button type="submit" class="btn btn-primary w-100 mt-2">Pagar</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
        </form>
     </div>

     @include('client.layout.footer')
 @endsection
