@extends('admin.layout.header')
@section('content')

    <div class="d-flex flex-column flex-lg-row h-lg-full bg-admin">
        @include('admin.layout.navbar_sidebar')

        <div class="flex-lg-1 h-screen overflow-y-lg-auto bg-light">
            <header>
                <div class="container-fluid">
                    <div class="border-bottom py-6 bg-light">
                        <div class="row align-items-center">
                            <div class="col-sm col-12">
                                <h1 class="h2 ls-tight text-dark">Usuarios</h1>
                            </div>
                            {{-- <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                                <div class="hstack gap-2 justify-content-sm-end">
                                    <a href="#offcanvasCreate" class="btn btn-sm btn-primary"
                                        data-bs-toggle="offcanvas"><span class="pe-2"><i
                                                class="bi bi-plus-square-dotted"></i> </span><span>Criar</span></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </header>
            <main class="py-6 bg-admin">

                @include('admin.pages.user.create-user')

                <div class="container-fluid">
                    <div class="vstack gap-6">
                        {{-- <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="me-auto">Resumo dos Usuarios</h5>
                                    <div class="dropdown"><a class="text-muted" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="bi bi-three-dots-vertical"></i></a>
                                        <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a
                                                href="#!" class="dropdown-item">Another action </a><a href="#!"
                                                class="dropdown-item">Something else here</a></div>
                                    </div>
                                </div>
                                <p class="text-sm text-muted mt-1"></p>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border border-primary-hover">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-auto"><span
                                                            class="text-sm text-muted text-primary-hover d-block font-semibold">5
                                                            Members</span></div>
                                                    <div class="avatar-group"><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-1.jpg') }}"> </span><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-2.jpg') }}"> </span><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-3.jpg') }}"></span></div>
                                                    <a href="#"
                                                        class="avatar avatar-sm border-2 border-card rounded-circle bg-secondary text-light text-xs">+3</a>
                                                </div>
                                                <h6 class="h4 font-semibold mt-5 mb-2 text-dark">Admin</h6><a
                                                    href="#modalAddUsers"
                                                    class="d-inline-block text-sm font-semibold stretched-link"
                                                    data-bs-toggle="modal">Ver membros -></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border border-primary-hover">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-auto"><span
                                                            class="text-sm text-muted text-primary-hover d-block font-semibold">15
                                                            Members</span></div>
                                                    <div class="avatar-group"><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-1.jpg') }}"> </span><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-2.jpg') }}"> </span><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-3.jpg') }}"></span></div>
                                                    <a href="#"
                                                        class="avatar avatar-sm border-2 border-card rounded-circle bg-secondary text-light text-xs">+3</a>
                                                </div>
                                                <h6 class="h4 font-semibold mt-5 mb-2 text-dark">Editor</h6><a
                                                    href="#modalAddUsers"
                                                    class="d-inline-block text-sm font-semibold stretched-link"
                                                    data-bs-toggle="modal">Ver membros -></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border border-primary-hover">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-auto"><span
                                                            class="text-sm text-muted text-primary-hover d-block font-semibold">3
                                                            Members</span></div>
                                                    <div class="avatar-group"><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-1.jpg') }}"> </span><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-2.jpg') }}"> </span><span
                                                            class="avatar avatar-sm rounded-circle text-white border border-1 border-solid border-card"><img
                                                                alt="..." src="{{ asset('admin/img/people/img-3.jpg') }}"></span></div>
                                                    <a href="#"
                                                        class="avatar avatar-sm border-2 border-card rounded-circle bg-secondary text-muted text-xs ">+3</a>
                                                </div>
                                                <h6 class="h4 font-semibold mt-5 mb-2">Visitantes</h6><a
                                                    href="#modalAddUsers"
                                                    class="d-inline-block text-sm font-semibold stretched-link"
                                                    data-bs-toggle="modal">Editar membros -></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                        <div class="card" style="border: none;">
                            <div class="card-header d-flex align-items-center bg-light">
                                <h5 class="me-auto">Todos Usuarios</h5>
                                <div class="dropdown"><a class="text-muted" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="bi bi-three-dots-vertical"></i></a>
                                    <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action </a><a
                                            href="#!" class="dropdown-item">Another action </a><a href="#!"
                                            class="dropdown-item">Something else here</a></div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap bg-light">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Data de Criacao</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td><img alt="..." src="{{ asset('admin/img/Unknown_person.jpg') }}"
                                                    class="avatar avatar-sm rounded-circle me-2"> <a
                                                    class="text-heading text-primary-hover font-semibold"
                                                    href="#"><span class=" text-dark">{{ $user->name }}</span></a></td>
                                            <td>{{ $user->email }}</td>
                                            <td><span
                                                    class="badge text-uppercase
                                                    @php
                                                    if(explode(",",$user->permissions)[0]== "CLIENT")'bg-soft-primary';
                                                    if($user->permissions== "ADMIN") 'bg-warning';
                                                    if($user->permissions== "EDITOR") 'bg-info';
                                                    if($user->permissions== "BLOCKED") 'bg-danger';

                                                    @endphp
                                                    text-primary rounded-pill">
                                                    {{ $user->permissions }}
                                                </span>
                                            </td>
                                            <td><span
                                                    class="text-uppercase text-primary rounded-pill">
                                                   <span> {{ $user->created_at->format('d/m/Y') }} </span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown"><button href="#"
                                                        class="font-semibold text-heading text-primary-hover badge bg-info text-dark"
                                                        role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">Editar Permissoes<i
                                                            class="bi bi-chevron-down ms-2 text-xs"></i></button>
                                                    <ul class="dropdown-menu">
                                                        <form action="{{ route('user.changepermission') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="permission" value="client">
                                                            <input type="hidden" name="user" value="{{$user->id}}">
                                                            <li><button class="dropdown-item" type="submit">Remover Permissoes da Equipe</button></li>
                                                        </form>
                                                        <form action="{{ route('user.changepermission') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="permission" value="editor">
                                                            <input type="hidden" name="user" value="{{$user->id}}">
                                                            <li><button type="submit" class="dropdown-item">Editor</button></li>
                                                        </form>
                                                        <form action="{{ route('user.changepermission') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="permission" value="admin">
                                                            <input type="hidden" name="user" value="{{$user->id}}">
                                                            <li><button class="dropdown-item" type="submit">Administrador</button></li>
                                                        </form>
                                                        <form action="{{ route('user.changepermission') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="permission" value="blocked">
                                                            <input type="hidden" name="user" value="{{$user->id}}">
                                                            <li><button class="dropdown-item" type="submit">Restringir Acesso</button></li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </td>
                                            {{-- <td class="text-end"><a href="#"
                                                    class="btn btn-sm btn-square btn-neutral me-1"><i
                                                        class="bi bi-pencil"></i> </a><button type="button"
                                                    class="btn btn-sm btn-square btn-neutral text-danger-hover"><i
                                                        class="bi bi-trash"></i></button></td>
                                            </tr> --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- <div class="card-footer border-0 py-5"><span class="text-muted text-sm">Showing 10 items out
                                    of 250 results found</span></div> --}}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    @endsection
