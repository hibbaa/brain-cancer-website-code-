<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;


class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function register()
    {

        $users=User::all();
        return view('admin.register')->with('users',$users);
        

    }
    public function index()
    
    {

    }

    public function deleteregister($id)
    {
       $users = User::findOrFail($id);
       $users->delete();
       return redirect('/role-register')->with('status','تم حذف المستخدم');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard');
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
        
    }


    public function editregister(Request $request ,$id)
    {   {
          $users= User::find($id);
            return view('admin.edit-register')->with('users',$users);
          }
    }

    
    public function updateregister(Request $request ,$id)
    {
        {
            $users= User::find($id);
            $users->name =$request->input('name');
            $users->usertype =$request->input('usertype');
            $users->update();

            return redirect('admin.register')->with('status','تم تحديث البيانات');


        }

        
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
