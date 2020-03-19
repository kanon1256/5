<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index() {
        $query = DB::table('tmgenerate')->get();
        return view('app.Planing.Form.form',['query'=>$query]);
    }

    public function create() {

        return view('app.Planing.Form.formcreate');
    }

    public function edit($id) {
        $q= DB::table('tmgenerate')
                    ->where('XIGenerateCode',$id)
                    ->first();
        return view('app.Planing.Form.formdetail',['q'=>$q]);
    }

    public function insertData(Request $request) {
        // dd($request->all());
        DB::table('tmgenerate')
                    ->insertGetId([
                    'XVGenerateName'=>$request->get('XVGenerateName'),
                    ]);
        return redirect('form');
    }

    public function delete($id) {
        DB::table('tmgenerate')
                  ->where('XIGenerateCode',$id)
                  ->delete();
        return redirect('form');
    }

    public function UpdateData(Request $request){
        //dd($request->all());
        $update = DB::table('tmgenerate')
                        ->where('XIGenerateCode',$request->get('XIGenerateCode'))
                        ->update([
                        'XVGenerateName'=>$request->get('XVGenerateName'),
                        // 'XVWhoCreate'=>$request->get('XVWhoCreate'),
                        // 'XTWhenCreate'=>$request->get('XTWhenCreate'),
                        // 'XVWhoEdit'=>$request->get('XVWhoEdit'),
                        // 'XTWhenEdit'=>$request->get('XTWhenEdit')
                        ]);
        return redirect('form');
    }
}
