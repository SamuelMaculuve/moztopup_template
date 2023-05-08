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
                      <h1 class="h4 ls-tight text-dark">Tipo Recarga</h1>
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
                {{-- <img src="{{ asset('storage/images/games/'.$recharge->game->image)}}" width="250px" height="250px" alt="" srcset=""> --}}

                <form action="{{ route('edit.recharge.type', ['rechargeType'=> $rechargeType->id]) }}" enctype="multipart/form-data" method="POST">


              <div class="container-fluid max-w-screen-md vstack gap-5">
                <div class="row gx-4">
                    <div class="col">
                      <div>
                        <label class="form-label">Selecione o Jogo</label>
                        <select class="form-select" name="game_id">
                          @foreach ($games as $game)
                            @if ($game->id == $rechargeType->game_id)
                                <option value="{{ $game->id }}" selected>{{ $game->name }}</option>
                            @else
                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                <div>
                <div>
                  <label class="form-label">Titulo do Tipo de Recarga</label>
                  <input type="text" name="title" class="form-control" placeholder="Titulo do tipo de recarga" value="{{ $rechargeType->title }}">
                  <span class="d-block mt-2 text-sm text-muted">O codigo deve ser unico.</span>
                </div>
                <div>
                    <label class="form-label">Breve descricao (Opcional)</label>

                    <textarea class="form-control" name="description" value="{{ $rechargeType->description }}"  placeholder="Project description ..." rows="2"></textarea>

                </div>
                <hr class="my-0">

                <div>
                    <label class="form-label">Preco das Recargas</label>

                    <input type="number" name="price" class="form-control"  value="{{ $rechargeType->price }}" placeholder="Preco das recargas">

                </div>

                <div>
                    <label class="form-label">Imagem to tipo da recarga</label>
                    <input type="file" name="image" accept="image/*" class="form-control" required>
                </div>

                <hr class="my-2">
                <div class="vstack gap-4">
                  <div class="d-flex gap-3">
                    <input class="form-check-input flex-shrink-0 text-lg" type="radio" name="promotion" value="false" checked="checked">
                    <div class="pt-1 form-checked-content">
                      <h6 class="mb-1 lh-relaxed">Normal</h6>
                      <span class="d-block text-muted text-sm">
                        <i class="bi bi-lock-fill me-1"></i> A Recarga sera anunciada a preco normal </span>
                    </div>
                  </div>
                  <div class="d-flex gap-3">
                    <input class="form-check-input flex-shrink-0 text-lg" type="radio" value="true" name="promotion">
                    <div class="pt-1 form-checked-content">
                      <h6 class="mb-1 lh-relaxed">Promocao</h6>
                      <span class="d-block text-muted text-sm">
                        <i class="bi bi-people-fill me-1"></i> A Recarga sera anunciada em promocao </span>
                    </div>
                  </div>
                </div>

                <hr class="my-0">

                <div class="row gx-4 gy-5">
                  <div class="col-md-6">
                    <div>
                      <label class="form-label">Inicio da Promocao</label>
                      <div class="input-group input-group-inline datepicker">
                        <span class="input-group-text pe-2">
                          <i class="bi bi-calendar"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Selecione a data de inicio" name="start_date" data-input>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div>
                      <label class="form-label">Fim da Promocao</label>
                      <div class="input-group input-group-inline datepicker">
                        <span class="input-group-text pe-2">
                          <i class="bi bi-calendar"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Selecione a data de termino" name="end_date" data-input>
                      </div>
                    </div>
                  </div>
                </div>


                <button type="submit" class="btn btn-sm mt-5 btn-primary">
                    <span>Salvar</span>
                </button>

              </div>
            </form>
            </main>
          </div>
        </div>

@endsection
