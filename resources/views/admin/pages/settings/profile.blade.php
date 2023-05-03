@extends('admin.layout.header')
@section('content')

    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        @include('admin.layout.navbar_sidebar')
        <div class="flex-lg-1 h-screen overflow-y-lg-auto">
            <header>
                <div class="container-fluid">
                    <div class="border-bottom pt-6">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12">
                                <h1 class="h2 ls-tight">Conta</h1>
                            </div>
                            <div class="col-sm-6 col-12"></div>
                        </div>

                    </div>
                </div>
            </header>
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid max-w-screen-md vstack gap-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="d-flex align-items-center"><a href="#"
                                            class="avatar avatar-lg bg-warning rounded-circle text-white"><img alt="..."
                                                src="../../img/Unknown_person.jpg"></a>
                                        <div class="ms-4"><span class="h4 d-block mb-0">Kelvin</span> </div>
                                    </div>
                                </div>
                                <div class="ms-auto"><button type="button"
                                        class="btn btn-sm btn-neutral">Upload</button></div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <form>
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div><label class="form-label">Primeiro nome</label> <input type="text"
                                            class="form-control" id="first_name"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Ultimo nome</label> <input type="text"
                                            class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label" for="email">Email</label> <input type="email"
                                            class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Numero de celular</label> <input type="tel"
                                            class="form-control"></div>
                                </div>
                                <div class="col-12">
                                    <div><label class="form-label">Endereco</label> <input type="text"
                                            class="form-control"></div>
                                </div>
                                <div class="col-md-6">
                                    <div><label class="form-label">Cidade</label> <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div><label class="form-label">Pais</label> <select class="form-select"
                                            aria-label="Default select example">
                                            <option value="1">Moz</option>

                                        </select></div>
                                </div>

                                </div>
                                <div class="col-12 text-end"><button type="button"
                                        class="btn btn-sm btn-neutral me-2">Cancelar</button> <button type="submit"
                                        class="btn btn-sm btn-primary">Salvar</button></div>
                            </div>
                        </form>
                        <hr class="my-6">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-danger mb-2">Desativar</h4>
                                    <p class="text-sm text-muted mb-4">Permanently remove your account and all of its
                                        contents. This action is not reversible – please be certain.</p><button
                                        type="button" class="btn btn-sm btn-danger">Apagar conta</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </main>
        </div>
    </div>

@endsection
