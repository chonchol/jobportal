<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Permission;
use App\Http\Requests;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $input){
        $routeList=trim($input->routeList,',');
        $routeListArr=explode(',',$routeList);
        $roles = DB::table('roles')->lists('role','id');

        while (list($key,$val)=each($routeListArr)){
            reset($roles);
            while (list($roleKey,$roleVal)=each($roles)){
                $roleName='role'.$val.$roleKey;
                $stored=Permission::where('action_id','=',$val)
                                    ->where('role_id','=',$roleKey)
                                    ->get();
                $storedRow=$stored->count();
                if($input->$roleName=='on'){
                    if($storedRow==0){
                        $insert=new Permission();
                        $insert->action_id=$val;
                        $insert->role_id=$roleKey;
                        $insert->save();
                    }
                }else{
                    if($storedRow){
                        $data=Permission::where('action_id','=',$val)
                                        ->where('role_id','=',$roleKey)
                                        ->delete();
                    }
                }

            }
        }
        return redirect()->back();
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
