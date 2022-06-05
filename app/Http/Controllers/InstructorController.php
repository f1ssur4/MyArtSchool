<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
       $response = $this->client->request('GET', config('api_url.CRM.uri').'/instructors');
        return view('instructors.index', ['instructors' => json_decode($response->getBody()->getContents())->data]);
    }
}
