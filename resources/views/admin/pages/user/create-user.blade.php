<div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true"
                    tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
                    <div class="offcanvas-header border-bottom py-5 bg-admin">
                        <h5 class="offcanvas-title" id="offcanvasCreateLabel">Adicionar novo usuario</h5><button type="button"
                            class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body vstack gap-5" style="overflow-x: hidden;">
                        <form action="#" method="post"></form>
                        <div class="row g-5">
                            <div class="col-md-12">
                                <div><label class="form-label">Nome</label> <input type="text" class="form-control"
                                        placeholder="Nome"></div>
                            </div>
                            <div class="col-md-12">
                                <div><label class="form-label">Email</label> <input type="text" class="form-control"
                                        placeholder="Email"></div>
                            </div>
                        </div>
                        <div><label class="form-label">Selecione as permissoes</label>
                            <div class="list-group list-group-flush gap-3">
                                <div class="list-group-item p-6 bg-light border-0 rounded-2">
                                    <div class="d-flex">
                                        <div class="w-10"><i class="bi bi-folder-plus text-lg text-muted"></i></div>
                                        <div class="flex-1 me-10"><a href="#" class="d-block h5">Permissoes</a>
                                            <p class="mt-1 text-sm text-muted">Select the permissions you want to add to
                                                all the projects in this account.</p>
                                        </div>
                                    </div>
                                    <div class="vstack gap-3 mt-4 ms-10">
                                        <div class="d-flex align-items-center">
                                            <h6 class="text-sm font-semibold">Administrador</h6>
                                            <div class="form-check form-switch ms-auto"><input
                                                    class="form-check-input me-n2" type="checkbox" name="admin" value="admin"
                                                    id="switchView1"></div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex align-items-center">
                                            <h6 class="font-semibold">Editor</h6>
                                            <div class="form-check form-switch ms-auto"><input
                                                    class="form-check-input me-n2" type="checkbox" name="editor" value="editor"
                                                    id="switchEdit2"></div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="d-flex align-items-center">
                                            <h6 class="font-semibold">Visualizador</h6>
                                            <div class="form-check form-switch ms-auto"><input
                                                    class="form-check-input me-n2" type="checkbox" name="viewer" value="viewer"
                                                    id="switchPublish3"></div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="font-semibold">Pode Apagar</h6>
                                            <div class="form-check form-switch ms-auto"><input
                                                    class="form-check-input me-n2" type="checkbox" name="deletor" value="deletor"
                                                    id="switchPublish4"></div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="font-semibold">Pode Cadastrar</h6>
                                            <div class="form-check form-switch ms-auto"><input
                                                    class="form-check-input me-n2" type="checkbox" name="creator" value="creator"
                                                    id="switchPublish5"></div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6 class="font-semibold">Cliente</h6>
                                            <div class="form-check form-switch ms-auto"><input
                                                    class="form-check-input me-n2" type="checkbox" name="client" value="client"
                                                    id="switchPublish6"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-2 bg-admin"><button type="button"
                            class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close</button> <button
                            type="button" class="btn btn-sm btn-primary">Save</button></div>
                </div>
