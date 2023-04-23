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
                      <!-- <a href="#!" class="text-sm text-muted text-primary-hover font-semibold me-2 d-none d-md-block">
                        <i class="bi bi-question-circle-fill"></i>
                        <span class="d-none d-sm-inline ms-2">Need help?</span>
                      </a> -->
                        <!-- <button type="button" class="btn btn-sm btn-neutral border-base d-none d-md-block">
                          <span>Save and create another</span>
                        </button> -->
                      {{-- <button type="button" class="btn btn-sm btn-primary">
                        <span>Save</span>
                      </button> --}}
                    </div>
                  </div>
                </div>
              </div>
            </header>

            <main class="py-6 bg-admin">
            <form action="{{ route('new.recharge') }}" method="post">
                @csrf
              <div class="container-fluid max-w-screen-md vstack gap-5">
                <div class="row gx-4">
                    <div class="col">
                        <div>
                            <label class="form-label">Selecione o Jogo</label>
                            <select class="form-select" name="game_id">
                              @foreach ($games as $game)
                                  <option value="{{ $game->id }}">{{ $game->name }}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="col">
                        <div>
                            <label class="form-label">Selecione o Tipo de Recarga</label>
                            <select class="form-select" name="recharge_type_id">
                              @foreach ($rechargeTypes as $rechargeType)
                                  <option value="{{ $rechargeType->id }}">{{ $rechargeType->title }}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                  </div>
                <div>
                <div>
                  <label class="form-label">Codigo da Recarga</label>
                  <input type="text" class="form-control" name="code" placeholder="Codigo da recarga">
                  <span class="d-block mt-2 text-sm text-muted">O codigo deve ser unico.</span>
                </div>
                <div>
                  <label class="form-label">Breve descricao (Opcional)</label>
                  <textarea class="form-control" placeholder="Descricao da recarga ..." rows="2"></textarea>
                </div>
                <hr class="my-0">

                <button type="submit" class="btn btn-sm mt-5 btn-primary">
                    <span>Salvar</span>
                </button>

                {{-- <div>
                  <label class="form-label">Select view</label>
                  <div class="hstack gap-3">
                    <div class="form-item-checkable">
                      <input class="form-item-check" type="radio" name="project-view" id="project-view-kanban" checked="checked">
                      <label class="form-item" for="project-view-kanban">
                        <span class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted">
                          <i class="bi bi-kanban" style="font-size:2rem"></i>
                        </span>
                      </label>
                    </div>
                    <div class="form-item-checkable">
                      <input class="form-item-check" type="radio" name="project-view" id="project-view-list">
                      <label class="form-item" for="project-view-list">
                        <span class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted">
                          <i class="bi bi-view-list" style="font-size:2rem"></i>
                        </span>
                      </label>
                    </div>
                    <div class="form-item-checkable">
                      <input class="form-item-check" type="radio" name="project-view" id="project-view-table">
                      <label class="form-item" for="project-view-table">
                        <span class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted">
                          <i class="bi bi-table" style="font-size:2rem"></i>
                        </span>
                      </label>
                    </div>
                  </div>
                </div> --}}
                {{-- <hr class="my-0"> --}}
                {{-- <div class="vstack gap-4">
                  <div class="d-flex gap-3">
                    <input class="form-check-input flex-shrink-0 text-lg" type="radio" name="projecy-privacy" checked="checked">
                    <div class="pt-1 form-checked-content">
                      <h6 class="mb-1 lh-relaxed">Private</h6>
                      <span class="d-block text-muted text-sm">
                        <i class="bi bi-lock-fill me-1"></i> Only you will be able to see this project </span>
                    </div>
                  </div>
                  <div class="d-flex gap-3">
                    <input class="form-check-input flex-shrink-0 text-lg" type="radio" name="projecy-privacy">
                    <div class="pt-1 form-checked-content">
                      <h6 class="mb-1 lh-relaxed">Make it public</h6>
                      <span class="d-block text-muted text-sm">
                        <i class="bi bi-people-fill me-1"></i> Everyone in this workspace will be able to see this project </span>
                    </div>
                  </div>
                </div> --}}
                {{-- <hr class="my-0"> --}}

                {{-- <div class="row gx-4 gy-5">
                  <div class="col-md-6">
                    <div>
                      <label class="form-label">Start date</label>
                      <div class="input-group input-group-inline datepicker">
                        <span class="input-group-text pe-2">
                          <i class="bi bi-calendar"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Select date" data-input>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div>
                      <label class="form-label">Due date</label>
                      <div class="input-group input-group-inline datepicker">
                        <span class="input-group-text pe-2">
                          <i class="bi bi-calendar"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Select date" data-input>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
            </form>
            </main>
          </div>
        </div>

@endsection
