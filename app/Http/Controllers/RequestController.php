<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request(Request $request)
    {
        return $this->checkMethod($request) ? $this->sendRequest($request) : $this->showForm();
    }

    private function checkMethod(Request $request)
    {
        if ($request->method() === 'GET') {
            return false;
        }
        return true;
    }

    private function showForm()
    {
        return view('form');
    }

    private function sendRequest(Request $request)
    {

        $this->client->request('POST', config('api_url.CRM.uri').'/requests', [
            'json' => [
                'name' => $request->post('name'),
                'surname' => $request->post('surname'),
                'phone' => $request->post('phone'),
                'info' => $request->post('info'),
            ],
        ]);
        return back()->withErrors([
            'send_request_success' => 'You have successfully submitted a request'
        ]);
    }

}
