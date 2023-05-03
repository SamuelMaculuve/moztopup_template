
            <form action="{{ route('new.recharge') }}" method="post">
                @csrf
              <div class="container-fluid max-w-screen-md vstack gap-5">
                <div class="row gx-4">
                    <div class="col">
                        <div>
                            <label class="form-label">Selecione o Jogo</label>
                            <select class="form-select" name="game_id"  wire:model="type">
                                <option selected></option>
                              @foreach ($games as $game)
                                  <option value="{{ $game->id }}">{{ $game->name }}</option>
                              @endforeach

                            </select>
                          </div>
                    </div>
                    <div class="col">
                        <div>
                            <label class="form-label">Selecione o Tipo de Recarga</label>
                            <select class="form-select" name="recharge_type_id">
                              @foreach ($rechargeTypess as $rechargeType)
                                  <option value="{{ $rechargeType->id }}" {{ $rechargeType->first() ? 'selected' : '' }}>{{ $rechargeType->title }}</option>
                              @endforeach
                            </select>
                          </div>
                    </div>
                  </div>
                <div>
                <div>
                  <label class="form-label">Codigo da Recarga</label>
                  <input type="text" class="form-control" name="code" placeholder="Codigo da recarga">
                  <span class="d-block mt-2 text-sm text-muted">O codigo deve ser unico.</span>
                </div>
                <div>
                  <label class="form-label">Breve descricao (Opcional)</label>
                  <textarea class="form-control" placeholder="Descricao da recarga ..." rows="2"></textarea>
                </div>
                <hr class="my-0">

                <button type="submit" class="btn btn-sm mt-5 btn-primary">
                    <span>Salvar</span>
                </button>
              </div>
            </form>
