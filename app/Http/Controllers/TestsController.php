<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        dump('TestsController / index()'); // HACK: trace

        $message = session()->has('message')
            ? session()->get('message')
            : 'index() method was visited!';

        session()->flash('message', $message);

        return view('welcome');
    }

    public function numbers()
    {
        dump('TestsController / numbers()'); // HACK: trace


        return redirect('/')->with('message', 'numbers() method was visited!');
    }

    public function numbers2()
    {
        dump('TestsController / numbers()'); // HACK: trace
        // session()->flash('message', 'numbers() method was visited!');

        return view('welcome')->with('message', 'numbers() method was visited!');
    }
}
