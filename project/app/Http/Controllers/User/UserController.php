<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class UserController extends Controller {
    public function __construct(
        // protected userModel $user;
    ) {
    }

    public function getAll() {
        return Inertia::render('teste');
    }


}
