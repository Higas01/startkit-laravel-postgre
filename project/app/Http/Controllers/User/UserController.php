<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function __construct(
        // protected userModel $user;
    ) {
    }

    public function register() {
        return response()->json([
            message => 'Usuário cadastrado com sucesso'
        ]);
    }


}
