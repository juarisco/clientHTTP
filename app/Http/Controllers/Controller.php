<?php

namespace ClienteHTTP\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function realizarPeticion($metodo, $url, $parametros = [])
    {
        $cliente = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem')]]);

        $respuesta = $cliente->request($metodo, $url, $parametros);

        return $respuesta->getBody()->getContents();

    }

    public function obtenerAccessToken()
    {
        $clientId = config('api.client_id');
        $clientSecret = config('api.client_secret');
        $grantType = config('api.grant_type');

        $respuesta = json_decode($this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/oauth/access_token', ['form_params' => ['grant_type' => $grantType, 'client_id' => $clientId, 'client_secret' => $clientSecret]]));

        $accessToken = $respuesta->access_token;

        return $accessToken;
    }
}
