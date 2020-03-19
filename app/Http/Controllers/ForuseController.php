<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ForuseController extends Controller
{
    //
    public function index() {
        $q = DB::table('tmforuse')
                    ->get();
        return view('app.Planing.Foruse.foruse',['qs'=>$q]);
    }

    public function create() {

        return view('app.Planing.Foruse.forusecreate');
    }

    public function edit($id) {
        $q= DB::table('tmforuse')
                    ->where('XIForCode',$id)
                    ->first();
        return view('app.Planing.Foruse.forusedetail',['q'=>$q]);
    }

    public function insertData(Request $request) {
        // dd($request->all());
        DB::table('tmforuse')
                    ->insertGetId([
                    'XVForType'=>$request->get('XVForType'),
                    ]);
        return redirect('foruse');
    }

    public function delete($id) {
        DB::table('tmforuse')
                  ->where('XIForCode',$id)
                  ->delete();
        return redirect('foruse');
    }

    public function UpdateData(Request $request){
        //dd($request->all());
        $update = DB::table('tmforuse')
                        ->where('XIForCode',$request->get('XIForCode'))
                        ->update([
                        'XVForType'=>$request->get('XVForType'),
                        // 'XVWhoCreate'=>$request->get('XVWhoCreate'),
                        // 'XTWhenCreate'=>$request->get('XTWhenCreate'),
                        // 'XVWhoEdit'=>$request->get('XVWhoEdit'),
                        // 'XTWhenEdit'=>$request->get('XTWhenEdit')
                        ]);
        return redirect('foruse');
    }
}
