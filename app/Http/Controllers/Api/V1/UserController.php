<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreUserRequest;
use App\Http\Requests\Api\V1\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate());
    }

    public function store(StoreUserRequest $request)
    {
    }

    public function show(User $user)
    {
        return UserResource::make($user);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
    }

    public function destroy(User $user)
    {
    }
}
