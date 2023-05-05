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
                        </div>

                    </div>
                </div>
            </header>
            <main class="py-6 bg-admin">

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
                                                @if($recharge->user_id != null)
                                                    <td><span class="badge badge-lg badge-dot"><i class="bg-danger"></i>Comprada</span></td>
                                                @else
                                                    <td><span class="badge badge-lg badge-dot"><i class="bg-success"></i>Publicada</span></td>
                                                @endif

                                            <td class="text-end"><a href="{{ route('edit.recharge', ['recharge'=> $recharge->id]) }}" class="btn btn-sm btn-neutral">Ver Detalhes</a></td>
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
