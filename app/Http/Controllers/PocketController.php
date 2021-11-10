<?php

namespace App\Http\Controllers;
use App\Http\Requests\PocketRequest;
use Illuminate\Http\Request;

class PocketController extends Controller
{

    public function index()
    {
        return view('pages/pocket/index');
    }

    public function detail($id)
    {
        return view('pages/pocket/detail');
    }

    public function store(PocketRequest $request)
    {
        
    }

    public function update($id)
    {
        
    }

    public function delete($id)
    {

    }

}
