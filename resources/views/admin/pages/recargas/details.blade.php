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
                <h1 class="h4 ls-tight text-dark">Editar Recarga</h1>
              </div>
            </div>
            <div class="col-auto">
              <div class="hstack gap-2 justify-content-end">
              </div>
            </div>
          </div>
        </div>
      </header>

      <main class="py-6 bg-admin d-flex flex-column align-items-center justify-content-center">

        <img src="{{ asset('storage/images/games/'.$recharge->game->image)}}" width="250px" height="250px" alt="" srcset="">
        <a href="{{ route('delete.recharge', ['recharge'=> $recharge->id]) }}" class="btn btn-sm mt-5 btn-danger">
            <span>Remover</span>
        </a>

        <form action="{{ route('update.game') }}" class="col-12" enctype="multipart/form-data" method="post">
            @csrf
          <div class="container-fluid max-w-screen-md vstack gap-5">
            <input type="hidden" name="recharge" value="{{ $recharge->id }}">

            <div>
              <label class="form-label">Tipo de Recarga</label>
              <input type="text" class="form-control" placeholder="Nome do Jogo" required value="{{ $recharge->rechargeType->title }}" dissabled>
            </div>

            <div>
              <label class="form-label">Codigo da Recarga</label>
              @if (in_array('admin', explode(",",$user->permissions)))
              <input type="text" class="form-control" placeholder="Nome do Jogo" required value="{{ $recharge->game->name }}">
              @else
                <h2>So o administrador tem a permissao de editar o codigo da recarga</h2>
                @endif
            </div>

            @if (in_array('admin', explode(",",$user->permissions)))
            <button type="submit" class="btn btn-sm mt-5 btn-primary">
                <span>Atualizar codigo</span>
            </button>
            @endif

         </div>
        </form>

      </main>
    </div>
</div>

@endsection
