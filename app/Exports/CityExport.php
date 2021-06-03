<?php

namespace App\Exports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\FromCollection;

class CityExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $crit;
    
    function __construct($crit){
        $this->crit = $crit;
    }

    public function collection()
    {
        return City::where('Name', 'Like', "%$this->crit%")->orwhere('District', 'Like', "%$this->crit%")->get();;
    }
}
