<nav style="overflow-x: hidden;" class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg scrollbar" id="sidebar">
    <div class="container-fluid">
      <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="row" style="display: flex; flex-direction: row; align-items: center;" href="{{ route('admin') }}">
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
                @if (in_array('viewer', explode(",",$user->permissions)) || in_array('admin', explode(",",$user->permissions)))
                    <li class="nav-item">
                        <a href="{{ route('listRecharge') }}" class="nav-link">Lista</a>
                    </li>
                @endif

                @if (in_array('viewer', explode(",",$user->permissions)) || in_array('admin', explode(",",$user->permissions)))
                    <li class="nav-item">
                      <a href="{{ route('recharge') }}" class="nav-link  text-dark">Criar Recarga</a>
                    </li>
                @endif

                @if (in_array('viewer', explode(",",$user->permissions)) || in_array('admin', explode(",",$user->permissions)))
                    <li class="nav-item">
                      <a href="{{ route('rechargeTypes') }}" class="nav-link  text-dark">Tipos de Recarga</a>
                    </li>
                @endif
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="#sidebar-tasks" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-tasks">
              <i class="bi bi-kanban"></i> Jogos </a>
            <div class="collapse" id="sidebar-tasks">
              <ul class="nav nav-sm flex-column">
                @if (in_array('viewer', explode(",",$user->permissions)) || in_array('admin', explode(",",$user->permissions)))
                <li class="nav-item">
                  <a href="{{ route('listGames') }}" class="nav-link  text-dark">Lista</a>
                </li>
                @endif

                @if (in_array('viewer', explode(",",$user->permissions)) || in_array('admin', explode(",",$user->permissions)))
                <li class="nav-item">
                  <a href="{{ route('createGame') }}" class="nav-link text-dark">Criar Jogo</a>
                </li>
                @endif

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
                  <a href="{{ route('users') }}" class="nav-link text-dark">Lista</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.profile') }}" class="nav-link text-dark">
              <i class="bi bi-gear"></i> Conta </a>
          </li>

        </ul>

      </div>
    </div>
  </nav>
