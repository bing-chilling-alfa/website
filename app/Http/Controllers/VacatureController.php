<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use App\Models\Vacature;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class VacatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacatures = Vacature::all();
        return view('$vacatures.index', compact('vacatures', 'vacatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('vacatures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate( $request,
        [
            'id' => 'required',
            'business_id'=>'required|numeric',
            'type-opleiding'=>'required',
            'start-datum' => 'required',
            'eind-datum' => 'required',
            'timestamps' => 'required',
        ]);
        $input = $request->all();
        Vacature::create($input);

        return redirect()->route('vacatures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $vacature = Vacature::findOrFail($id);
        return view('vacatures.show', compact('vacature','vacature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $vacature = Vacature::find($id);
        return view('vacatures.edit',compact('vacature','vacature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $vacature = Vacature::findOrFail($id);
        $this->validate( $request,
            [
                'id' => 'required',
                'business_id'=>'required|numeric',
                'type-opleiding'=>'required',
                'start-datum' => 'required',
                'eind-datum' => 'required',
                'timestamps' => 'required',
            ]);
        $input = $request->all();
        $vacature->fill($input)->save();

        return redirect()->route('vacatures.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $vacature = Vacature::findOrFail($id);

        $vacature-> delete();
        return redirect()->route('vacatures.index');

    }
}
