<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Action;
use App\Role;
use App\Permission;
use App\Http\Requests;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*
            $actions = Action::where('id','>=',1)->paginate(10);
            $permissions = Permission::all();
            $roles = Role::all();
        */

        $actions=DB::table('actions')->orderBy('uri', 'asc')->paginate(10);
        $roles=DB::table('roles')->lists('role','id');
        $actionsIdList=[];
        foreach($actions AS $val){
            $actionsIdList[]=$val->id;
        }
        $permissionList=Permission::whereIn('action_id',$actionsIdList)->get();

        foreach ($actions AS $actionsKeys=>$actionsValues){
            reset($roles);
            while (list($rolesKey,$rolesVal)=each($roles)){
                $found=false;
                foreach($permissionList as $permissionListKey=>$permissionListVal){
                    if($actionsValues->id==$permissionListVal->action_id AND $rolesKey==$permissionListVal->role_id){
                        $found=true;
                    }
                }
                if($found){
                    $activeList[$actionsValues->id.$rolesKey]='checked';
                }else{
                    $activeList[$actionsValues->id.$rolesKey]='';
                }
            }

        }


        //$data = ['roles' => $roles];
        return view('actions.index',compact('roles', 'actions','permissions','activeList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actions.addAction');
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
        $action = [];
        $action['method'] = $request->input('method');
        $action['uri'] = $request->input('uri');
        $action['action'] = $request->input('action');

        Action::create($action);
        return redirect(route('addAction'));
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
