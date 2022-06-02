<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
       $response = $this->client->request('GET', '/api/V1/instructors');
        return view('instructors.index', ['instructors' => json_decode($response->getBody()->getContents())->data]);
    }
}
