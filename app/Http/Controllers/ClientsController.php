<?php

namespace App\Http\Controllers;

use App\Client;

class ClientsController extends Controller
{

    public function view($id)
    {
        $client = Client::findOrFail($id);

        $this->authorize('view', $client);

        return view('clients.view', compact('client'));
    }
}
