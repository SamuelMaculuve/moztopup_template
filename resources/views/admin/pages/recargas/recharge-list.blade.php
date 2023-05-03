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
                                <h1 class="h2 ls-tight">Recargas</h1>
                            </div>
                            <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                                <div class="hstack gap-2 justify-content-sm-end"><a href="#offcanvasCreate" class="btn btn-sm btn-primary"
                                        data-bs-toggle="offcanvas"><span class="pe-2"><i
                                                class="bi bi-plus-square-dotted"></i> </span><span>Criar nova recarga</span></a>
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
                        <h5 class="offcanvas-title" id="offcanvasCreateLabel">Criar nova recarga</h5><button
                            type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('new.recharge') }}" method="post">
                        @csrf
                    <div class="offcanvas-body vstack gap-5">
                        <div>
                          <label class="form-label">Selecione o Jogo</label>
                          <select class="form-select" name="game_id">
                            @foreach ($games as $game)
                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div>
                          <label class="form-label">Selecione o Tipo de Recarga</label>
                          <select class="form-select" name="recharge_type_id">
                            @foreach ($rechargeTypes as $rechargeType)
                                <option value="{{ $rechargeType->id }}">{{ $rechargeType->title }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div><label class="form-label">Codigo da Recarga</label> <input type="text" name="code" class="form-control"
                                placeholder="Codigo da recarga"> </div>

                        <div><label class="form-label">Breve descricao (Opcional)</label> <textarea name="description" class="form-control"
                                placeholder="descriicao da recarga ..." rows="2"></textarea> </div>

                      {{-- <div><label class="form-label">Capa</label>  <input type="file" class="form-control"
                        placeholder="valor da recarga">  </div> --}}

                    </div>

                    <div class="modal-footer py-2 bg-admin"><button type="button"
                            class="btn btn-sm btn-neutral mx-2" data-bs-dismiss="offcanvas">Fechar</button> <button
                            type="submit" class="btn btn-sm btn-primary mx-2">Salvar</button></div>
                    </form>
                </div>

                <div class="container-fluid">

                    <div class="card bg-light" style="border: none;">
                        <div class="card-header border-bottom">
                            <h5 class="mb-0">Lista de Recargas</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap">
                                <thead class="table-light bg-secondary">
                                    <tr>
                                        <th scope="col">Nome do Jogo</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Tipo de Recarga</th>
                                        <th scope="col">Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recharges as $recharge)

                                        <tr>
                                            <td><img alt="..." src="{{ asset('storage/images/games/'.$recharge->game->image) }}"
                                                class="avatar avatar-sm rounded-circle me-2"> <a
                                                class="text-heading font-semibold" href="#"><span class=" text-dark">{{ $recharge->game->name }}</span></a></td>
                                                <td>{{ $recharge->created_at->format('d/m/Y') }}</td>
                                                <td>{{ $recharge->rechargeType->title }}</td>
                                                <td><span class="badge badge-lg badge-dot"><i class="bg-success"></i>Publicada</span></td>

                                            <td class="text-end"><a href="#" class="btn btn-sm btn-neutral">Ver Detalhes</a></td>
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
