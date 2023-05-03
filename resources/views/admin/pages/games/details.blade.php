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
                <h1 class="h4 ls-tight text-dark">Editar Jogo</h1>
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

        <img src="{{ asset('storage/images/games/'.$game->image)}}" width="250px" height="250px" alt="" srcset="">
        <a href="{{ route('delete.game', ['id'=> Crypt::encrypt($game->id)]) }}" class="btn btn-sm mt-5 btn-danger">
            <span>Remover</span>
        </a>

        <form action="{{ route('update.game') }}" class="col-12" enctype="multipart/form-data" method="post">
            @csrf
          <div class="container-fluid max-w-screen-md vstack gap-5">
            <input type="hidden" name="game" value="{{ $game->id }}">

            <div>
              <label class="form-label">Nome do Jogo</label>
              <input type="text" class="form-control" name="name" placeholder="Nome do Jogo" required value="{{ $game->name }}">
              <span class="d-block mt-2 text-sm text-muted">Deve ser unico.</span>
            </div>

            <div>
              <label class="form-label">Criadora</label>
              <input type="text" class="form-control" name="produced_by" placeholder="Criadora do Jogo" required value="{{ $game->produced_by }}">
            </div>

            <div>
                <label class="form-label">Breve descricao (Opcional)</label>
                <textarea class="form-control" name="description" placeholder="Descricao do jogo ..." rows="2">{{ $game->description }}</textarea>
            </div>

            <div>
              <label class="form-label">Capa do Jogo</label>
              <input type="file" name="image" accept="image/*" class="form-control">
            </div>

            <button type="submit" class="btn btn-sm mt-5 btn-primary">
                <span>Atualizar</span>
            </button>
         </div>
        </form>

      </main>
    </div>
</div>

@endsection
