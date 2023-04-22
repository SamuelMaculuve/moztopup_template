@extends('admin.layout.header')
@section('content')

<style>
    h1, h2, h3, h4, h5, h6{
        color: black;
    }
    a{
        color: black;
    }
    a:hover{
        background-color: gray !important;
    }
</style>

<div class="d-flex flex-column flex-lg-row h-lg-full"  style="background-color: #f5f9fc;">
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar" id="sidebar">
      <div class="container-fluid">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="row" style="display: flex; flex-direction: row; align-items: center;" href="index.html">
            <img src="{{ asset('logo/megashop2.png') }}" style="width: 30% !important; height: 30% !important;">
            <h3 style="width: 70% !important;"><span style="color: #ff66c4;">MOZ</span><span style="color: #5e17eb;">TOPUP</span></h3>
        </a>
        <div class="navbar-user d-lg-none">
          <div class="dropdown">
            <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar-parent-child">
                <img alt="..." src="{{ asset('admin/img/Unknown_person.jpg') }}" class="avatar avatar- rounded-circle">
                <span class="avatar-child avatar-badge bg-success"></span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
              <a href="#" class="dropdown-item text-dark">Profile</a>
              <a href="#" class="dropdown-item text-dark">Settings</a>
              <a href="#" class="dropdown-item text-dark">Billing</a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-dark">Logout</a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark" href="#sidebar-recargas" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-recargas">
                <i class="bi bi-briefcase"></i> Recargas </a>
              <div class="collapse" id="sidebar-recargas">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="pages/recargas/Lista.html" class="nav-link">Lista</a>
                  </li>

                  <li class="nav-item">
                    <a href="pages/recargas/create-recarga.html" class="nav-link  text-dark">Criar Recarga</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link  text-dark" href="#sidebar-tasks" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-tasks">
                <i class="bi bi-kanban"></i> Jogos </a>
              <div class="collapse" id="sidebar-tasks">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="pages/tasks/Lista.html" class="nav-link  text-dark">Lista</a>
                  </li>

                  <li class="nav-item">
                    <a href="pages/tasks/create-task.html" class="nav-link text-dark">Criar Jogo</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link text-dark" href="#sidebar-user" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-user">
                <i class="bi bi-people"></i> Usuarios
               </a>
              <div class="collapse" id="sidebar-user">
                <ul class="nav nav-sm flex-column">

                  <li class="nav-item">
                    <a href="pages/user/permissions.html" class="nav-link text-dark">Lista</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="pages/settings/general.html" class="nav-link text-dark">
                <i class="bi bi-gear"></i> Conta </a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
    <div class="flex-lg-1 h-screen overflow-y-lg-auto">
      <nav class="navbar navbar-light position-lg-sticky top-lg-0 d-none d-lg-block overlap-10 flex-none bg-white border-bottom px-0 py-3" id="topbar">
        <div class="container-fluid">
          <div class="hstack gap-2">

          </div>
          <form class="form-inline ms-auto me-4 d-none d-md-flex">
            <div class="input-group input-group-inline shadow-none">
              <span class="input-group-text border-0 shadow-none ps-0 pe-3">
                <i class="bi bi-search"></i>
              </span>
              <input type="text" class="form-control form-control-flush" placeholder="Search" aria-label="Search">
            </div>
          </form>
          <div class="navbar-user d-none d-sm-block">
            <div class="hstack gap-3 ms-4">
              <div class="dropdown">
                <a href="#" class="nav-link px-3 text-base text-muted text-opacity-70 text-opacity-100-hover" id="dropdown-notifications" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-bell-fill"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end px-2" aria-labelledby="dropdown-notifications">
                  <div class="dropdown-item d-flex align-items-center">
                    <h6 class="dropdown-header p-0 m-0 font-semibold">Notifications</h6>
                    <a href="#" class="text-sm font-semibold ms-auto">Clear all</a>
                  </div>
                  <div class="dropdown-item py-3 d-flex">
                    <div>
                      <div class="avatar bg-tertiary text-white rounded-circle">RF</div>
                    </div>
                    <div class="flex-fill ms-3">
                      <div class="text-sm lg-snug w-64 text-wrap">
                        <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                      </div>
                      <span class="text-muted text-xs">30 mins ago</span>
                    </div>
                  </div>
                  <div class="dropdown-item py-3 d-flex">
                    <div>
                      <img alt="..." src="img/people/img-1.jpg" class="avatar rounded-circle">
                    </div>
                    <div class="flex-fill ms-3">
                      <div class="text-sm lg-snug w-64 text-wrap">
                        <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                      </div>
                      <span class="text-muted text-xs">30 mins ago</span>
                    </div>
                  </div>
                  <div class="dropdown-item py-3 d-flex">
                    <div>
                      <img alt="..." src="{{ asset('admin/img/people/img-2.jpg') }}" class="avatar rounded-circle">
                    </div>
                    <div class="flex-fill ms-3">
                      <div class="text-sm lg-snug w-64 text-wrap">
                        <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                      </div>
                      <span class="text-muted text-xs">30 mins ago</span>
                    </div>
                  </div>
                  <div class="dropdown-item py-3 d-flex">
                    <div>
                      <div class="avatar bg-success text-white rounded-circle">KW</div>
                    </div>
                    <div class="flex-fill ms-3">
                      <div class="text-sm lg-snug w-64 text-wrap">
                        <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                      </div>
                      <span class="text-muted text-xs text-dark">30 mins ago</span>
                    </div>
                  </div>
                  <div class="dropdown-item py-3 d-flex">
                    <div>
                      <img alt="..." src="{{ asset('admin/img/people/img-4.jpg') }}" class="avatar rounded-circle">
                    </div>
                    <div class="flex-fill ms-3">
                      <div class="text-sm lg-snug w-64 text-wrap">
                        <a href="#" class="font-semibold text-heading text-primary-hover">Robert</a> sent a message to <a href="#" class="font-semibold text-heading text-primary-hover">Webpixels</a>
                      </div>
                      <span class="text-muted text-xs text-dark">30 mins ago</span>
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-item py-2 text-center">
                    <a href="#" class="font-semibold text-muted text-primary-hover">View all</a>
                  </div>
                </div>
              </div>
              <div class="dropdown">
                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                  <div>
                    <div class="avatar avatar-sm bg-warning rounded-circle text-white">
                      <img alt="..." src="{{ asset('admin/img/Unknown_person.jpg') }}">
                    </div>
                  </div>
                  <div class="d-none d-sm-block ms-3">
                    <span class="h6 text-dark">Kelvin</span>
                  </div>
                  <div class="d-none d-md-block ms-md-2">
                    <i class="bi bi-chevron-down text-muted text-xs"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <div class="dropdown-header">
                    <span class="d-block text-sm text-muted mb-1 text-dark">Signed in as</span>
                    <span class="d-block text-heading font-semibold text-dark">Kelvin</span>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-house me-3"></i>Home </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-pencil me-3"></i>Edit profile </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-gear me-3"></i>Settings </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-image me-3"></i>Media </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-box-arrow-up me-3"></i>Share </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="bi bi-person me-3"></i>Login </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <header>
        <div class="container-fluid">
          <div class="border-bottom pt-6">
            <div class="row align-items-center">
              <div class="col-sm col-12">
                <h1 class="h2 ls-tight text-dark">
                  <span class="d-inline-block me-3">👋</span>Ola, Kelvin!
                </h1>
              </div>

            </div>
            <ul class="nav nav-tabs overflow-x border-0">
              <li class="nav-item">
                {{-- <a href="#" class="nav-link active">View all</a> --}}
              </li>

            </ul>
          </div>
        </div>
      </header>
      <main class="py-6" style="background-color: #f5f9fc;">
        <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
          <div class="offcanvas-header border-bottom py-5 bg-surface-secondary">
            <h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new project</h5>
            <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body vstack gap-5">
            <div>
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="Project name">
              <span class="d-block mt-2 text-sm text-muted">Make it unique.</span>
            </div>
            <div>
              <label class="form-label">Description</label>
              <textarea class="form-control" placeholder="Project description ..." rows="2"></textarea>
              <span class="d-block mt-2 text-sm text-muted">Make it unique.</span>
            </div>
            <hr class="my-0">
            <div>
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
            </div>
            <hr class="my-0">
            <div class="vstack gap-4">
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
            </div>
            <hr class="my-0">
            <div class="row gx-4">
              <div class="col-md">
                <div>
                  <label class="form-label">Client</label>
                  <select class="form-select">
                    <option>Webpixels</option>
                    <option>Apple</option>
                    <option>Elrond</option>
                  </select>
                </div>
              </div>
              <div class="col-auto align-self-end">
                <span class="d-inline-block py-3 font-semibold text-muted">or</span>
              </div>
              <div class="col-md-auto align-self-end">
                <button type="button" class="btn btn-neutral">
                  <i class="bi bi-plus-lg me-2"></i>New client </button>
              </div>
            </div>
            <div class="row gx-4">
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
            </div>
          </div>
          <div class="modal-footer py-2 bg-surface-secondary">
            <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button>
            <button type="button" class="btn btn-sm btn-primary">Save</button>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row g-6 mb-6">
            <div class="col-xl-8">
              <div class="card bg-light" style="border: none;">
                <div class="card-header d-flex align-items-center">
                  <h5 class="mb-0">Compra de Recargas</h5>
                </div>
                <div class="px-4">
                  <div id="chart-line" data-height="300"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card h-full bg-light" style="border: gray !important;">
                <div class="card-body">
                  <div class="card-title d-flex align-items-center">
                    <h5 class="mb-0">Usuarios Activos</h5>
                    <div class="ms-auto text-end">
                      <a href="#" class="text-sm font-semibold">Ver todos Usuarios

                      </a>
                    </div>
                  </div>
                  <div class="list-group gap-4">
                    <div class="list-group-item d-flex align-items-center border rounded">
                      <div class="me-4">
                        <div class="avatar rounded-circle">
                          <img alt="..." src="{{ asset('admin/img/people/img-1.jpg') }}">
                        </div>
                      </div>
                      <div class="flex-fill">
                        <a href="#" class="d-block h6 font-semibold mb-1"><span class="text-dark">Norman Mohrbacher</span></a>

                      </div>
                      <div class="ms-auto text-end">
                        <div class="dropdown">
                          <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a href="#!" class="dropdown-item">Action </a>
                            <a href="#!" class="dropdown-item">Another action </a>
                            <a href="#!" class="dropdown-item">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border rounded">
                      <div class="me-4">
                        <div class="avatar rounded-circle">
                          <img alt="..." src="{{ asset('admin/img/people/img-2.jpg') }}">
                        </div>
                      </div>
                      <div class="flex-fill">
                        <a href="#" class="d-block h6 font-semibold mb-1"><span class="text-dark">Leeann Monnet</span></a>

                      </div>
                      <div class="ms-auto text-end">
                        <div class="dropdown">
                          <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a href="#!" class="dropdown-item">Action </a>
                            <a href="#!" class="dropdown-item">Another action </a>
                            <a href="#!" class="dropdown-item">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item d-flex align-items-center border rounded">
                      <div class="me-4">
                        <div class="avatar rounded-circle">
                          <img alt="..." src="{{ asset('admin/img/people/img-3.jpg') }}">
                        </div>
                      </div>
                      <div class="flex-fill">
                        <a href="#" class="d-block h6 font-semibold mb-1"><span class="text-dark">Kathe Rahimi</span></a>

                      </div>
                      <div class="ms-auto text-end">
                        <div class="dropdown">
                          <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                          </a>
                          <div class="dropdown-menu">
                            <a href="#!" class="dropdown-item">Action </a>
                            <a href="#!" class="dropdown-item">Another action </a>
                            <a href="#!" class="dropdown-item">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
    </div>
  </div>

  @endsection
