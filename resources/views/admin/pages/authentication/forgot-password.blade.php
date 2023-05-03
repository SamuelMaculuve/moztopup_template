@extends('admin.layout.header')
@section('content')

        <div>
            <div
                class="px-5 py-5 p-lg-0 h-screen bg-admin d-flex flex-column justify-content-center"
            >
                <div class="d-flex justify-content-center">
                    <div
                        class="col-12 col-md-9 col-lg-6 min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative"
                    >
                        <div class="row">
                            <div class="col-lg-10 col-md-9 col-xl-7 mx-auto">
                                <div class="text-center mb-12">
                                    <h3 class="display-5"><img src="{{ asset('logo/megashop3-removebg-preview.png') }}" width="150px" height="150px" alt="moztopup brand"></h3>
                                    <h1 class="ls-tight font-bolder mt-6">
                                        Bem vindo de volta!
                                    </h1>
                                    <p class="mt-2">
                                        Vamos vender essas recargas...
                                    </p>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-5">
                                        <label class="form-label" for="email"
                                            >Email</label
                                        >
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            placeholder="Seu endereco de email"
                                        />
                                    </div>
                                    <div class="mb-5">
                                        <div
                                            class="d-flex align-items-center justify-content-between"
                                        >
                                            <div>
                                                <label
                                                    class="form-label"
                                                    for="password"
                                                    >Password</label
                                                >
                                            </div>
                                            <div class="mb-2">
                                                <a
                                                    href="basic-recover.html"
                                                    class="text-sm text-muted text-primary-hover text-underline"
                                                    ><span class="text-primary">Esqueci a Password?</span></a
                                                >
                                            </div>
                                        </div>
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="password"
                                            placeholder="Password"
                                            name="password"
                                            autocomplete="current-password"
                                        />
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                name="rememberme"
                                                id="check-remind-me"
                                            />
                                            <label
                                                class="form-check-label"
                                                for="check-remind-me"
                                                >Mater-me autenticado</label
                                            >
                                        </div>
                                    </div>
                                    <div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary w-full"
                                            >Entrar</button
                                        >
                                    </div>
                                </form>
                                {{-- <div class="py-5 text-center">
                                    <span
                                        class="text-xs text-uppercase font-semibold"
                                        >or</span
                                    >
                                </div> --}}
                                {{-- <div class="row g-3">
                                    <div class="col-sm-6">
                                        <a
                                            href="#"
                                            class="btn btn-neutral w-full"
                                            ><span class="icon icon-sm pe-2"
                                                ><img
                                                    alt="..."
                                                    src="../../img/social/github.svg"
                                                /> </span
                                            ><span>Github</span></a
                                        >
                                    </div>
                                    <div class="col-sm-6">
                                        <a
                                            href="#"
                                            class="btn btn-neutral w-full"
                                            ><span class="icon icon-sm pe-2"
                                                ><img
                                                    alt="..."
                                                    src="../../img/social/google.svg"
                                                /> </span
                                            ><span>Google</span></a
                                        >
                                    </div>
                                </div> --}}
                                {{-- <div class="my-6">
                                    <small>Don't have an account?</small>
                                    <a
                                        href="basic-register.html"
                                        class="text-warning text-sm font-semibold"
                                        >Sign up</a
                                    >
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
