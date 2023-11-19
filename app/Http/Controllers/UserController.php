<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Isset_;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    //Metodo para registrar un nuevo usuario
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'unique:users', 'max:100'],
            'password' => ['required', 'min:3', 'max:12']
        ]);

        User::create([
            'name' => $request->name,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;

        if (isset($request->password)){

            $user->password = $request->password;
        }


        $user->update();

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('eliminar', 'El usuario ha sido eliminado.');
    }

}
