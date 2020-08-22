<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsersResource;
use App\User;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function getUsersForCountry()
    {
        $country = 'Канада';

        $users = User::with('companies', 'companies.country')
            ->whereHas('companies.country', function (Builder $query) use($country) {
                $query->where('country_name', $country);
            })
            ->get();

        return UsersResource::collection($users);
    }

}
