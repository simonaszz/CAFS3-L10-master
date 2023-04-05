<?php

namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;

use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(\App\Http\Requests\RegisterRequest $request)
    {
        User::create($request->getData());
    }
}
