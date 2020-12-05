<?php

namespace App\Http\Controllers;

use App\User;
use App\Measurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        $actualMeasurement = Measurement::orderby('updated_at', 'desc')->where("userMeasurement",$user->id)->first();

        return view('users.show', compact('user', 'actualMeasurement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'confirmed', 'unique:users,email,'.$user->id],
        ];

        if($request->oldpassword!=null){
            if (Hash::check($request->oldpassword, $user->password)) {
                $rules['password'] = ['required', 'string', 'min:8', 'confirmed'];
            } else {
                return redirect()
                ->route('users.edit',$user)
                ->withErrors(['oldpassword'=>"La contraseña vieja no coincide con la contraseña de tu cuenta."]);
            }
        }

        $request->validate($rules);            
        
        $user->update(['name'=>$request->name],
        ['email'=>$request->email],
        ['dateofbirth'=>$request->dateofbirth],
        ['gender'=>$request->gender],
        ['smoker'=>$request->smoker],
        ['athlete'=>$request->athlete]);

        if($request->oldpassword!=null){
            $user->update(['password'=>Hash::make($request->password)]);
        }

        $user->save();

        return redirect()
        ->route('index')
        ->with('mensaje','Se ha actualizado la información de tu cuenta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user) {

        $user->delete();

        Auth::logout();

        return redirect()
        ->route('index')
        ->with('mensaje',"Tu cuenta se ha eliminado.");
    }
}
