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
                    <div class="offcanvas-body vstack gap-5">
                        <div>
                          <label class="form-label">Selecione o Jogo</label>
                          <select class="form-select">
                            <option>Free Fire</option>
                            <option>Apple</option>
                            <option>Elrond</option>
                          </select>
                        </div>

                        <div>
                          <label class="form-label">Selecione o Tipo de Recarga</label>
                          <select class="form-select">
                            <option>100 Diamantes</option>
                            <option>200 Diamantes</option>
                            <option>300 Diamantes</option>
                          </select>
                        </div>

                        <div><label class="form-label">Codigo da Recarga</label> <input type="text" class="form-control"
                                placeholder="Codigo da recarga"> </div>

                        <div><label class="form-label">Breve descricao (Opcional)</label> <textarea class="form-control"
                                placeholder="descriicao da recarga ..." rows="2"></textarea> </div>

                      {{-- <div><label class="form-label">Capa</label>  <input type="file" class="form-control"
                        placeholder="valor da recarga">  </div> --}}

                    </div>

                    <div class="modal-footer py-2 bg-admin"><button type="button"
                            class="btn btn-sm btn-neutral mx-2" data-bs-dismiss="offcanvas">Fechar</button> <button
                            type="button" class="btn btn-sm btn-primary mx-2">Salvar</button></div>
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
                                        <th scope="col">Nome</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img alt="..." src="{{ asset('images/freefire.jpg') }}"
                                                class="avatar avatar-sm rounded-circle me-2"> <a
                                                class="text-heading font-semibold" href="#"><span class=" text-dark">Free Fire</span></a></td>
                                        <td>23-01-2022</td>
                                        <td><span class="badge badge-lg badge-dot"><i class="bg-success"></i>Publicada</span></td>

                                        <td class="text-end"><a href="#" class="btn btn-sm btn-neutral">Ver Detalhes</a></td>
                                    </tr>

                                    <tr>
                                        <td><img alt="..." src="{{ asset('images/fifa.jfif') }}"
                                                class="avatar avatar-sm rounded-circle me-2"> <a
                                                class="text-heading font-semibold" href="#"><span class=" text-dark">Fifa 2023</span></a></td>
                                        <td>23-01-2022</td>
                                        <td><span class="badge badge-lg badge-dot"><i class="bg-warning"></i>Em progresso</span></td>

                                        <td class="text-end"><a href="#" class="btn btn-sm btn-neutral">Ver Detalhes</a></td>
                                    </tr>
                                    <tr>
                                        <td><img alt="..." src="{{ asset('images/pubg2.jfif') }}"
                                                class="avatar avatar-sm rounded-circle me-2"> <a
                                                class="text-heading font-semibold" href="#"><span class=" text-dark">PubG</span></a>
                                        </td>
                                        <td>23-01-2022</td>
                                        <td><span class="badge badge-lg badge-dot"><i class="bg-danger"></i>Vendida</span></td>


                                        <td class="text-end"><a href="#" class="btn btn-sm btn-neutral">Ver detalhes</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
