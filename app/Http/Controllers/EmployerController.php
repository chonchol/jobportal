<?php

namespace App\Http\Controllers;

use \Auth;
use App\Employer;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $employers = Employer::where('id', '>=', 1)->paginate(10);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("employer.addEmployer");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'companySumamry' => 'required',

            ]);

        $employer = new Employer();
        $employer->userID = Auth::user()->id;
        $companies_data = DB::table('employers')
                                ->leftJoin('companies','companies.id', '=', 'employers.companyID')
                                ->first();
        $employer->companyID=$companies_data->id;                        
        $employer["companySumamry"] = $request->input("companySumamry");

        $employer->save();
        \Session::flash('flash_message','Skill has been added successfully!');
        //Employer::create($employer);
        return redirect(route("addEmployer"));
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
