<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ders;
class DersController extends Controller
{
    public function index()
    {
        $ders = Ders::all();
        //dd(Ders::all());
        return view('ders.index', ['ders' => $ders]);
    }

    public function create()
    {
        return view('ders.create');
    }

    public function store()
    {
        request()->validate([
            'CODE' => 'required',
            'NAME' => 'required',
            'ISMANDATORY' => 'required',
            'DAY' => 'required',
            'HOUR' => 'required',
        ]);

        Ders::create([
            'CODE' => request('CODE'),
            'NAME' => request('NAME'),
            'ISMANDATORY' => request('ISMANDATORY'),
            'DAY' => request('DAY'),
            'HOUR' => request('HOUR'),
        ]);

        return redirect('/ders');
    }

    public function edit(Ders $ders)
    {
        return view('ders.edit', ['ders' => $ders]);
    }

    public function update(Ders $ders)
    {
        request()->validate([
            'CODE' => 'required',
            'NAME' => 'NAME',
            'ISMANDATORY' => 'ISMANDATORY',
            'DAY' => 'DAY',
            'HOUR' => 'HOUR',
        ]);

        $ders->update([
            'CODE' => request('CODE'),
            'NAME' => request('NAME'),
            'ISMANDATORY' => request('ISMANDATORY'),
            'DAY' => request('DAY'),
            'HOUR' => request('HOUR'),
        ]);

        return redirect('/ders');
    }

    public function destroy(Ders $ders)
    {
        $ders->delete();

        return redirect('/ders');
    }
}
