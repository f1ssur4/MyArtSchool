<?php

namespace App\Http\Controllers;

class ArtController extends Controller
{
    public function index()
    {
        $response = $this->client->request('GET', '/api/V1/arts');
        return view('arts.index', ['arts' => json_decode($response->getBody()->getContents())->data]);
    }

}
