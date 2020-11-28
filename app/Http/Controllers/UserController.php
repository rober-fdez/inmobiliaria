<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUser;
use App\Http\Requests\UserStore;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cell_phone = $request->cell_phone;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('user')->with('status_success', "El usuario se creo correctamente");
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
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, User $user)
    {
        $user = User::find($user->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->cell_phone = $request->cell_phone;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('user')->with('status_success', "El usuario se actualizo correctamente");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->setUserEmailAsDeleted($id);
        User::destroy($id);
        return redirect('user')->with('status_success', "El usuario se elimino correctamente");
    }
    public function setInactiveUser($id){
        $user = User::find($id);
        $user->status = 0 ;
        $user->save();
        return redirect('user')->with('status_success', "El usuario se deshablito correctamente");
    }
    public function setActiveUser($id){
        $user = User::find($id);
        $user->status = 1 ;
        $user->save();
        return redirect('user')->with('status_success', "El usuario se habilito correctamente");
    }
    public function setUserEmailAsDeleted($id){
        $user = User::find($id);
        $user->email = 'deleted_'.Str::random(5).'_'.$user->email;
        $user->save();
    }
}
