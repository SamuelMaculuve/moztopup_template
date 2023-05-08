@extends('admin.layout.header')
@section('content')


<div class="d-flex flex-column flex-lg-row h-lg-full"  style="background-color: #f5f9fc;">

    @include('admin.layout.navbar_sidebar')

    <div class="flex-lg-1 h-screen overflow-y-lg-auto">

        @include('admin.layout.navbar_profile')

      <header>
        <div class="container-fluid">
          <div class="border-bottom pt-6">
            <div class="row align-items-center">
              <div class="col-sm col-12">
                <h1 class="h2 ls-tight text-dark">
                  <span class="d-inline-block me-3">👋</span>Ola, {{ $user->name }}!
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
                      <a href="{{ route('users') }}" class="text-sm font-semibold text-info">Ver todos Usuarios

                      </a>
                    </div>
                  </div>
                  <div class="list-group gap-4">
                    @foreach ($recentUsers as $recent)

                    <div class="list-group-item d-flex align-items-center border rounded">
                      <div class="me-4">
                        <div class="avatar rounded-circle">
                          <img alt="..." src="{{ asset('admin/img/Unknown_person.jpg') }}">
                        </div>
                      </div>
                      <div class="flex-fill">
                        <h2 class="d-block h6 font-semibold mb-1"><span class="text-dark">{{ $recent->name }}</span></h2>
                        <p class="d-block h6 font-semibold mb-1"><small class="text-dark">Email: {{ $recent->email }}</small></p>
                        <p class="d-block h6 font-semibold mb-1"><small class="text-dark">Aderiu aos {{ $recent->created_at->format('d/m/Y') }}</small></p>

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

                    @endforeach
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
