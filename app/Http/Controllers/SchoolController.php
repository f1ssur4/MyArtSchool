<?php

namespace App\Http\Controllers;


class SchoolController extends Controller
{
    public function index()
    {
        $response = $this->client->request('GET', '/api/V1/schools');
        return view('schools.index', ['schools' => json_decode($response->getBody()->getContents())->data]);
    }
}
