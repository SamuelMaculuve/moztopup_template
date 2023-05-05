<?php

namespace App\Http\Livewire;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class BuyRecharge extends Component
{
    public $game;
    public $rechargeType;
    public $method;
    public $user;
    public $data = "Teste";

    public function mount($game, $rechargeType, $method, $user)
    {
        $this->game = $game;
        $this->rechargeType = $rechargeType;
        $this->method = $method;
        $this->user = $user;
    }

    public function makePaymentRequest()
    {
        $this->data =' $res->getBody()';
        
        $client = new Client();
        $headers = [
          'Content-Type' => 'application/json'
        ];
        $body = '{
          "grant_type": "client_credentials",
          "client_id": "984f673f-a3a2-4182-8700-00005f993de1",
          "client_secret": "NxCPOG4LpaKIDAO1ni1PKK8TGcoVPP8QGYI0uetL"
        }';
        $request = new Request('POST', 'https://e2payments.explicador.co.mz/oauth/token', $headers, $body);
        $res = $client->sendAsync($request)->wait();

    }

    public function render()
    {
        return view('livewire.buy-recharge', ['game'=>$this->game, 'rechargeType'=> $this->rechargeType, 'method'=> $this->method, 'user'=>$this->user]);
    }

}
