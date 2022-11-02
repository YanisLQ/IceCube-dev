<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $entreprises = DB::table('entreprises')->where('id', $request->uid)->first();
        return view('auth.register', [
            'entreprises' => $entreprises,
            'table' => $request->table
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);
        if(auth()->user()){
            //@MEMO : c'est ici, on peut gérer le rôle des users créer
            auth()->user()->assignRole('user');
        }
        return view('dashboard', [
            "entp" => $request->id,
            "table" => $request->table
        ]);
    }
}
