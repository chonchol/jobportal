<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institutes = Institute::where('id','>=',1)->paginate(10);
        //return view('institute.allCompany',['companies'=>$companies]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('institute.addInstitute');
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
    $this->validate($request, [
        'instituteName' => 'required|max:255',
        'city' => 'required|max:255',
        'address' => 'required|max:255',
        'phone' => 'required',
        'email' => 'required|email',
        'website' => 'required|max:255',
        'logo' => 'required|max:255',
    ]);

        $institute = [];
        $institute['instituteName'] = $request->input('instituteName');
        $institute['city'] = $request->input('city');
        $institute['district'] = $request->input('district');
        $institute['postcode'] = $request->input('postcode');
        $institute['address'] = $request->input('address');
        $institute['phone'] = $request->input('phone');
        $institute['email'] = $request->input('email');
        $institute['website'] = $request->input('website');
        $institute['logo'] = $request->input('logo');

        Institute::create($institute);
        \Session::flash('flash_message','Skill has been added successfully!');
        return redirect(route('addInstitute'));
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
        $institute = Institute::findOrfail($id);
        return view('institute.editInstitute',['id'=>$id,'institute'=>$institute]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=0)
    {
        //

        $id = $request->input('id');
        $institute = Institute::findOrfail($id);
        $institute->instituteName = $request->input('instituteName');
        $institute->city = $request->input('city');
        $institute->district = $request->input('district');
        $institute->postcode = $request->input('postcode');
        $institute->address = $request->input('address');
        $institute->phone = $request->input('phone');
        $institute->email = $request->input('email');
        $institute->website = $request->input('website');
        $institute->logo = $request->input('logo');

        $institute->save();
        return redirect(route('allInstitute'));

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
