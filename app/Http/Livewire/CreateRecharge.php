<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\RechargeType;
use Livewire\Component;

class CreateRecharge extends Component
{
    public $type;
    protected $queryString = ['type'];

    public function render()
    {

        return view('livewire.create-recharge',
            [
               'rechargeTypess' => RechargeType::where(['game_id' => $this->type])->get(),
               'games' => Game::all()
            ]);
    }
}
