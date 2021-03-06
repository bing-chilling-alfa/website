<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

/**
 * @method validate(Request $request, string[] $array)
 */
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        // $data = Company::all();
        // return view('companies', ['companies' => $data]);

        $companies = Company::all();
        return view('pages.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'id' => 'required',
                'naam' => 'required',
                'telefoonnummer' => 'required|numeric',
                'email' => 'required',
                'website' => 'required',
                'postcode' => 'required',
                'rememberToken' => 'required',
                'timestamps' => 'required',
            ]
        );
        $input = $request->all();
        Company::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $companies = Company::findOrFail($id);
        return view('pages.companies.show', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $companies = Company::find($id);
        return view('pages.companies.edit', compact('company', 'company'));
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
        $companies = Company::findOrfail($id);
        $this->validate(
            $request,
            [
                'id' => 'required',
                'naam' => 'required',
                'telefoonnummer' => 'required|numeric',
                'email' => 'required',
                'website' => 'required',
                'postcode' => 'required',
                'rememberToken' => 'required',
                'timestamps' => 'required',
            ]
        );
        $input = $request->all();
        $companies->fill($input)->save();

        return redirect()->route('companies.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $companies = Company::findOrFail($id);

        $company->delete();
        return redirect()->route('companies.index');
    }
}
