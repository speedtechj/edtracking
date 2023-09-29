<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Trackdata;
use App\Models\Trackdetail;
use App\Models\Trackstatedetail;
use App\Models\Invoicestatus;
use App\Models\Trackstatus;

use DB;

class HomeController extends Controller
{
    public function index(){
     
      return view('welcome');

    }
    
    public function show(Request $request){
      
      $invoice1 = $request->input('invoice'); 

     
      $cms4Invoice = DB::connection('cms4')
      ->table('invoicestatuses')
      ->join('trackstatuses', 'invoicestatuses.trackstatus_id', '=', 'trackstatuses.id')
      ->join('provincephils', 'invoicestatuses.provincephil_id', '=', 'provincephils.id')
      ->join('cityphils', 'invoicestatuses.cityphil_id', '=', 'cityphils.id')
      ->where('invoicestatuses.generated_invoice', $invoice1)
      ->get();  
    
      if($cms4Invoice->count()>0){
         
        return view('result2', ['invoice' => $cms4Invoice, 'invoice1'=>$invoice1 ]);

      }  
        $batch = TrackStatus::select('trackstatuses.description', 'trackstatuses.date', 'trackstatuses.location')
        ->join('trackstatedetails', 'trackstatuses.batch', '=', 'trackstatedetails.batch' )
        ->where('trackstatedetails.reference', '=', $invoice1)
        ->get();

       $invoiceDetails = Trackstatedetail::with('trackstatus')
          ->where('reference', $invoice1)
          ->get();

      if($batch->count() >0){
        return view('result', ['invoice' => $invoiceDetails, 'invoice1'=>$invoice1, 'batch'=>$batch]);  

      }else{
        return view('invoice_not_found',['invoice1'=>$invoice1]);
      }
   
      }

        
    
}
