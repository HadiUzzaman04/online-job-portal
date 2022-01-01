<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddCompany;
use Illuminate\Support\Facades\Schema;

class ManageCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search !=""){
                $companies=AddCompany::where('company_name','LIKE',"%$search%")->get();
        }else{
            $companies = AddCompany::all();
        }            
        return view ('admin.table.companies',[
            'companies'=>$companies,
            'search'=>$search
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.button.add_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AddCompany::create([
            
            'company_id'=>$request->input('company_id'),
            'company_name'=>$request->input('company_name'),
            'company_type'=>$request->input('company_type'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
        return redirect('/admin/table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
