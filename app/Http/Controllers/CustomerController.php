<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index() {
        $q = DB::table('tmcustomer')
                       ->groupBy('tmcustomer.XIGuestCode')
                       ->get();
        return view('app.Planing.Customer.customer',['qs'=>$q]);
    }

    public function create() {

        return view('app.Planing.Customer.customercreate');
    }

    public function edit($id) {
        $q= DB::table('tmcustomer')
                    ->where('XIGuestCode',$id)
                    ->first();
        return view('app.Planing.Customer.customerdetail',['q'=>$q]);
    }

    public function insertData(Request $request) {
        // dd($request->all());
        DB::table('tmcustomer')
                    ->insertGetId([
                    'XVGuestName'=>$request->get('XVGuestName'),
                    'XVGuestAddress'=>$request->get('XVGuestAddress'),
                    'XVGuestTel'=>$request->get('XVGuestTel'),
                    'XVNameContact'=>$request->get('XVNameContact')
                    ]);
        return redirect('customer');
    }

    public function delete($id) {
        DB::table('tmcustomer')
                  ->where('XIGuestCode',$id)
                  ->delete();
        return redirect('customer');
    }

    public function UpdateData(Request $request){
        dd($request->all());
        $update = DB::table('tmcustomer')
                        ->where('XIGuestCode',$request->get('XIGuestCode'))
                        ->update([
                        'XVGuestName'=>$request->get('XVGuestName'),
                        'XVGuestAddress'=>$request->get('XVGuestAddress'),
                        'XVGuestTel'=>$request->get('XVGuestTel'),
                        'XVNameContact'=>$request->get('XVNameContact')
                        ]);
        return redirect('customer');
    }
}