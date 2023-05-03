@extends('admin.layout.header')
@section('content')

    <div class="d-flex flex-column flex-lg-row h-lg-full bg-admin">

        @include('admin.layout.navbar_sidebar')

        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            @include('admin.layout.navbar_profile')

            <header>
                <div class="container-fluid">
                    <div class="border-bottom pt-6">
                        <div class="row align-items-center">
                            <div class="col-sm col-12">
                                <h1 class="h2 ls-tight">Jogos</h1>
                            </div>
                            <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                                <div class="hstack gap-2 justify-content-sm-end"><a href="#offcanvasCreate" class="btn btn-sm btn-primary"
                                        data-bs-toggle="offcanvas"><span class="pe-2"><i
                                                class="bi bi-plus-square-dotted"></i> </span><span>Adicionar Novo Jogo</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <main class="py-6 bg-admin">
                <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true"
                    tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
                    <div class="offcanvas-header border-bottom py-5 bg-admin">
                        <h5 class="offcanvas-title" id="offcanvasCreateLabel">Adicionar novo Jogo</h5><button
                            type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('new.game') }}" enctype="multipart/form-data" method="post">
                    <div class="offcanvas-body vstack gap-5">

                        <div><label class="form-label">Nome do Jogo</label> <input type="text" name="name" class="form-control"
                                placeholder="Nome do Jogo"> </div>

                        <div><label class="form-label">Breve descricao (Opcional)</label> <textarea name="description" class="form-control"
                                placeholder="descricao do jogo ..." rows="2"></textarea> </div>

                      <div><label class="form-label">Capa</label>  <input type="file" name="image" class="form-control"></div>

                    </div>

                    <div class="modal-footer py-2 bg-admin"><button type="button"
                            class="btn btn-sm btn-neutral mx-2" data-bs-dismiss="offcanvas">Fechar</button> <button
                            type="button" class="btn btn-sm btn-primary mx-2">Salvar</button></div>
                    </form>
                </div>

                <div class="container-fluid">

                    <div class="card bg-light" style="border: none;">
                        <div class="card-header border-bottom">
                            <h5 class="mb-0">Lista de Jogos</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="table-light bg-secondary">
                                    <tr>
                                        <th scope="col">Nome do jogo</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Recargas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($games as $game)

                                        <tr>
                                            <td><img alt="{{ $game->name }}" src="{{ asset('storage/images/games/'.$game->image) }}"
                                                class="avatar avatar-sm rounded-circle me-2"> <a
                                                class="text-heading font-semibold" href="#"><span class=" text-dark">{{ $game->name }}</span></a></td>
                                                <td>{{ $game->created_at->format('d/m/Y') }}</td>
                                                <td><span class="badge badge-lg badge-dot"><i class="bg-success"></i>120</span></td>
                                                <td class="text-end"><a href="{{ route('edit.game', ['game'=> $game->id]) }}" class="btn btn-sm btn-neutral">Ver Detalhes</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
