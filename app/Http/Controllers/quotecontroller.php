<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class quotecontroller extends Controller
{

   public function Qindex()
        {
          $clients = DB::table('clients')->get(); 

          $quotes = DB::table('quotes')
            ->join('clients', 'quotes.client_id', '=', 'clients.id')
            ->get();
          /* dd($clients,$quotes);*/
         return view('admin.VQoute',compact('quotes'));


        }


    public function store(Request $request)
    {
       $Quotename = $request -> input('Quotename');
       $amount = $request -> input('amount');
       $note = $request -> input('note');
       $status = $request -> input('status');
       $client_id = $request -> input('client_id');
       $Vdate = $request -> input('Vdate');  

       $QuoteNumber = $request -> input('QuoteNumber');  
       $client_id = $request -> input('client_id');     
    DB::table('quotes')->insert([
    			'Quotename'=>$Quotename,
                'amount'=>$amount,
   		    	'note'=>$note,
    			'client_id'=>$client_id,
    			'status'=>$status,
    			'Vdate'=>$Vdate,
    			'QuoteNumber'=>$QuoteNumber,
    			'note'=>$note,
    				]);
    	       	  return redirect()->back();
         
    }
  }