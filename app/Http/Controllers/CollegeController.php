<?php

namespace App\Http\Controllers;

use App\Models\college;
use Illuminate\Http\Request;

/**
 * @method validate(Request $request, string[] $array)
 */
class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Request|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $colleges = College::all();
        return view('pages.colleges.index', compact('colleges', 'colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('pages.colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'id' => 'required',
                'type-opleiding' => 'required',
                'timestamps' => 'required',
            ]
        );
        $input = $request->all();
        College::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $college = College::findOrFail($id);
        return view('pages.colleges.show', compact('college', 'college'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $college = College::find($id);
        return view('pages.colleges.edit', compact('college', 'college'));
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
        $college = College::findOrfail($id);
        $this->validate(
            $request,
            [
                'id' => 'required',
                'type-opleiding' => 'required',
                'timestamps' => 'required',
            ]
        );
        $input = $request->all();
        $college->fill($input)->save();

        return redirect()->route('college.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $college = College::findOrFail($id);

        $college->delete();
        return redirect()->route('college.index');
    }
}
