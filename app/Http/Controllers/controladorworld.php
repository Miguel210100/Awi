<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Exports\CityExport;
use Maatwebsite\Excel\Facades\Excel;

class controladorworld extends Controller
{
    public function mostrar (Request $req)
    {
        $crit = $req['criterio'];
            $cids = DB::SELECT("Select * FROM city WHERE Name LIKE '%$crit%' OR District LIKE '%$crit%'" );
            return view('vista_city', ['cids' => $cids, 'crit' => $crit]);
        
    }

    public function ver(){
        $cids = city::All();

        return view('vista_city',['cids' => $cids, 'crit' => '']);
    }

    public function download(Request $req)
    {
       $crit = $req['crit'];
       $cids = DB::SELECT("Select * FROM city WHERE Name LIKE '%$crit%' OR District LIKE '%$crit%'" );
        $pdf=PDF::loadView('vista_cityPDF', ['cids' => $cids])
        ->save(storage_path('app/public/') .'archivo.pdf');
        return $pdf->download('archivo.pdf'); 
    }

    public function export(Request $req) 
    {
        return Excel::download(new CityExport($req->crit), 'cities.xlsx');
    }

    public function store(Request $req)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        
        $crit = $req['crit'];
        $cids = DB::SELECT("Select * FROM city WHERE Name LIKE '%$crit%' OR District LIKE '%$crit%'" );

        $text = $section->addTExt("ID | NOMBRE | DISTRITO | PAIS | POBLACION");

        foreach ($cids as $cd){
            $text = $section->addTExt($cd->ID. "|". $cd->Name."|". $cd->District."|". $cd->CountryCode."|". $cd->Population);
        }
        
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('midoc.docx');
        return response()->download(public_path('midoc.docx'));
    }

    //--------EXAMEN----------\\

    public function mostrarc(Request $req)
    {
        
            $crit = $req['criterio'];
            $cty = DB::SELECT("Select * FROM Country WHERE Name LIKE '%$crit%' OR Continent LIKE '%$crit%'" );
            return view('vista_country', ['cty' => $cty, 'crit' => $crit]);
            
    }

    public function verc(){

        $cty = Country::All();
        return view('vista_country',['cty' => $cty, 'crit' => '']);
    }

    public function downloadc(Request $req)
    {
        $crit = $req['crit'];
        $cty = DB::SELECT("Select * FROM Country WHERE Name LIKE '%$crit%' OR Continent LIKE '%$crit%'");
        $pdf=PDF::loadView('vista_countryPDF', ['cty' => $cty])
        ->save(storage_path('app/public/') .'archivo.pdf');
        return $pdf->download('archivo.pdf'); 
    }

    //---PEDIDOS---\\

    public function mostrarpedidos(Request $req)
    {
        $crit = $req['criterio'];
        $pds = DB::SELECT("Select * FROM Pedidos WHERE id LIKE '%$crit%'");
       return view('layouts.pdfdetallepedido', ['pds' => $pds, 'crit' => $crit]);
    }
    
    public function verd(){
        $pds = Pedidos::All();

        return view('layouts.pdfdetallepedido',['pds' => $pds, 'crit' => '']);
    }
    //---pedirPDF---\\
    public function downloadd(Request $req)
    {
        $crit = $req['crit'];
        $pds = DB::SELECT("Select * FROM pedidos WHERE id LIKE '%$crit%' OR user_id LIKE '%$crit%'");
        $pdf=PDF::loadView('layouts.dpdfdetallepedido', ['pds' => $pds])
        ->save(storage_path('app/public/') .'archivo.pdf');
        return $pdf->download('detalle pedido.pdf'); 
    }


    
}
