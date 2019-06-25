<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $input = $request->only('name', 'email', 'level');
        $input['password'] = bcrypt($request->password);
        $input['status'] = 1;
        $user = User::create($input);

    	return redirect()->back()->with('notification', 'Create user is success.');
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
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));
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
        $this->validate($request, [
    		'name' => 'min:5'
    	], [
    		'name.min' => 'The name must be at least 5 characters.'
    	]);

        $input = $request->only('name', 'level', 'status');
    	
        if($request->changePassword == "on"){
    		$this->validate($request, [
    			'password' => 'min:8|max:32',
    			'repassword' => 'same:password'
    		]);
    		$input['password'] = bcrypt($request->password);
    	}

        $users = User::findOrFail($id);
    	$users->update($input);

    	return redirect()->back()->with('notification', 'Edit infor user is success.');
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
