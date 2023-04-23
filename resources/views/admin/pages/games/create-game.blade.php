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
                      <h1 class="h4 ls-tight text-dark">Adicionar Novo Jogo</h1>
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
            <form action="" method="post">
              <div class="container-fluid max-w-screen-md vstack gap-5">
                <div>
                <div>
                  <label class="form-label">Nome do Jogo</label>
                  <input type="text" class="form-control" name="name" placeholder="Nome do Jogo" required>
                  <span class="d-block mt-2 text-sm text-muted">Deve ser unico.</span>
                </div>
                <div>
                    <label class="form-label">Breve descricao (Opcional)</label>
                    <textarea class="form-control" name="description" placeholder="Descricao do jogo ..." rows="2"></textarea>
                </div>

                <div>
                  <label class="form-label">Capa do Jogo</label>
                  <input type="file" name="image" accept="png/jpg/jpeg" class="form-control" required>
                </div>

                <button type="button" class="btn btn-sm mt-5 btn-primary">
                    <span>Salvar</span>
                  </button
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
