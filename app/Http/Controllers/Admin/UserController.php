<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public $search;
    
    public function index()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')->paginate();
        return view('admin.users.index', compact("users"));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact("user", "roles"));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        
        return redirect()->route('admin.users.edit', $user)->with('info', 'Se asigno los roles correctamente');
    }

}
