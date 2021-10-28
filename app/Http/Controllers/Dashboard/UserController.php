<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\HelperFunctions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use mysql_xdevapi\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = User::role('user')->latest()->get();
            return view('dashboard.users.index',compact('users'));
        }catch (\Exception $exception){
            dd($exception->getMessage());
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('users.create');
        }catch (\Exception $exception){

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
//            $all_inputs = $request->except('_token');
//            if ($request->file('image')){
//                $filePath = HelperFunctions::profileImagePath();
//                $all_inputs['image'] = HelperFunctions::saveFile(null,$request->file('image'),$filePath);
//            }
//            User::create($all_inputs);
        }catch (\Exception $exception){

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        try {

        }catch (\Exception $exception){

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        try {
            return view('dashboard.users.edit',compact('user'));
        }catch (\Exception $exception){
            toastError('Something went wrong, try again!');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'status' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
        ]);
        try {
            $all_inputs = $request->except('_token','_method','email');
            if ($request->file('image')){
                $filePath = HelperFunctions::profileImagePath($user);
                $all_inputs['image'] = HelperFunctions::saveFile($user->image,$request->file('image'),$filePath);
            }
            $user->update($all_inputs);
            toastSuccess('Profile Updated Successfully');
            return Redirect::back();
        }catch (\Exception $exception){

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            @unlink($user->image);
            $user->delete();
            toastSuccess('User deleted successfully');
            return Redirect::back();
        }catch (\Exception $exception){
            toastError('Something went wrong, try again!');
            return Redirect::back();
        }
    }
}
