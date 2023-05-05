@extends('client.layout.main')
@section('content')
    @include('layouts.preloader')

    @include('client.layout.navbar')
    <link rel="stylesheet" href="{{ asset('css/custom_payment.css') }}">

    <div class="container d-flex align-items-center  justify-content-center" style="margin-top: 150px;">
        <form action="{{ route('payment.request') }}" method="post">
            @csrf
        <div class="col-12">
            <h1 class="h3 mb-5 text-center">Recarga Comprada</h1>
             <div class="row d-flex justify-content-center align-items-center">
                 <!-- Left -->
                 <div class="col-12">
                    <div class="row d-none d-lg-flex d-md-flex mb-2 gap-2 mx-1 justify-content-center" style="background-color: white; border-radius: 5px;">
                        <div class="col-lg-12 col-sm-6 p-2">
                            <div class="item">
                                <center>
                                    <img style="width: 90%;" src="{{ asset('storage/images/games/'.$recharge->game->image)}}" alt="">
                                    <h6 class="mt-2 text-dark">{{ $recharge->game->name }}</h6>
                                </center>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 p-2">
                            <div class="item">
                                <center>
                                    <img style="width: 50%;" src="https://cdn1.codashop.com/S/content/common/images/denom-image/LOLWR/50x50/3_LOLWR_WildCore.png" alt="">
                                    <h6 class="mt-2 text-dark">{{ $recharge->rechargeType->title }}</h6>
                                    <h5 class="text-dark">{{ number_format($recharge->rechargeType->price) }} MZN</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                     <div class="accordion" id="accordionPayment">
                         <!-- Credit card -->
                         <div class="accordion-item mb-3">
                             <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                                 <label class="form-check-label pt-1 text-dark" for="">
                                     <small>Comprada
                                 </label>
                             </h2>
                             <div id="collapseCC" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionPayment" style="">
                                 <div class="accordion-body">
                                     <div class="mb-3">
                                         <label class="form-label">N&uacute;mero de telefone</label>
                                         <input type="tel" value="{{ $recharge->code }}" class="form-control" disabled>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     @include('client.layout.footer')
 @endsection
