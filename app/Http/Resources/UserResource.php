<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\User */
class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'type' => 'user',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
                $this->mergeWhen($request->routeIs('users.*'), [
                    'email_verified_at' => $this->email_verified_at,
                    'updated_at' => $this->updated_at,
                    'created_at' => $this->created_at,
                ]),
            ],
        ];
    }
}
