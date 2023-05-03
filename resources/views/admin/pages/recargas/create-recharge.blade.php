@extends('admin.layout.header')
@section('content')

        <div class="d-flex flex-column flex-lg-row h-lg-full bg-admin">
          @include('admin.layout.navbar_sidebar')

          <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
              <div class="container-fluid py-4 bg-light">
                <div class="row align-items-center">
                  <div class="col">
                    <div class="d-flex align-items-center gap-4">
                      <div class="vr opacity-20 my-1"></div>
                      <h1 class="h4 ls-tight text-dark">Criar Nova Recarga</h1>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="hstack gap-2 justify-content-end">
                    </div>
                  </div>
                </div>
              </div>
            </header>

            <main class="py-6 bg-admin">
                @livewire('create-recharge')
            </main>
          </div>
        </div>

@endsection
