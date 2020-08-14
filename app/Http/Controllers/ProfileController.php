<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user){
        return view("profiles.show",[
            'user'=>$user,
            'tweets'=>$user->tweets()->withLikes()->paginate(3)]);
    }

    public function edit(User $user){
        $this->authorize('edit',$user);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){
        $attr=request()->validate([
            'name'=>['required','string'],
            'username'=>['required','string',Rule::unique('users')->ignore($user),'alpha_dash'],
            'avatar'=>['file'],
            'email'=>['required','string','email'],
            'password'=>['string','required','confirmed']
        ]);
        if(\request('avatar')){
            $attr['avatar']=\request('avatar')->store('avatars');
        }

        $user->update($attr);
        return redirect("/profiles/$user->username");
    }
}
