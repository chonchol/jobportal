<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Http\Requests;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::where('id','>=',1)->paginate(10);
        return view('roles.allRole',['roles'=> $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(route('addRole'));
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
    $role = [];
    $role['role'] = $request->input('role');

    $data= Role::create($role);
/*   
    $id= $data->id;
    DB::table('permissions')->insert([
    'role_id' => $id
    ]);

    $userdata = User::all();
    $user_id = $userdata->first()->id;
    DB::table('user_roles')->insert([
    'roleID' => $id,
    'userID' => $user_id
    ]);
   //return $data;
*/
    return redirect(route('allRole'));
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
        $role = Role::findOrFail($id);
        return view('roles.editRole',['id' => $id, 'role' => $role]);
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
        $this->validate($request,[
            'role' => 'required',
            ]);

        $role = Role::findOrFail($id);
        $role->role = $request->input('role');

        $role->save();
        \Session::flash('flash_message','Skill has been added successfully!');
        return redirect(route('allRole'));
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
        $role = Role::find($id);
        $role->delete();
        return redirect(route('allRole'));
    }
}
