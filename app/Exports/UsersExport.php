<?php

namespace App\Exports;

use App\SocialUser;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SocialUser::all();
    }
}
