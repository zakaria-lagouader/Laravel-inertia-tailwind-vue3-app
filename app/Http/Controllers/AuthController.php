<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AuthController extends Controller
{


    public function showLoginForm(Request $request)
    {
        if ($request->inertia()) {
            return Inertia::location(url()->current());
    	}
        return view("client.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            $this->username() => "required|string",
            "password" => "required|string",
        ]);

        $account = Client::where($this->username(), $request->email)->first();
        if (is_null($account)) {
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.failed')],
            ]);
        }

        if (Hash::check($request->password, $account->password)) {
            return $this->authenticate($account);
        }

        throw ValidationException::withMessages([
            "password" => [trans('auth.password')],
        ]);
    }

    public function showRegisterForm(Request $request)
    {
        if ($request->inertia()) {
            return Inertia::location(url()->current());
    	}
        return view("client.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            "nom" => "required|string|max:255",
            "prenom" => "required|string|max:255",
            "email" => "required|string|max:255|email|unique:clients",
            "password" => "required|string|min:8|confirmed",
        ]);

        $account = Client::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return $this->authenticate($account);
    }

    public function logout()
    {
        session()->invalidate();
        return redirect()->route("account.login");
    }

    protected function authenticate(Client $account)
    {
        session()->put("account", $account);
        return redirect()->intended(route("reservation.index"));
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }
}
