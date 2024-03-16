<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Models\User;
use App\Models\Role;
class MultiSheet implements WithMultipleSheets
{

    use Exportable;

    public function sheets(): array
    {
        $sheets = [];
        $roles = Role::latest()->get();
        foreach($roles ?? array() as $key =>$value) {
            $getUsers = User::where('RoleId','=',$value->RoleId)->get();


            $sheets[] = new SingleSheet($value->RoleName,$getUsers);

        }

        return $sheets;
    }

}
