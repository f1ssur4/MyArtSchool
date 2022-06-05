<?php

namespace App\Http\Controllers;


class SchoolController extends Controller
{
    public function index()
    {
        $response = $this->client->request('GET', config('api_url.CRM.uri').'/schools');
        return view('schools.index', ['schools' => json_decode($response->getBody()->getContents())->data]);
    }
}
