<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ShapeController extends Controller
{
    public function index() {
        $query = DB::table('tmshape')->get();
        return view('app.Planing.Shape.shape',['query'=>$query]);
    }

    public function create() {

        return view('app.Planing.Shape.shapecreate');
    }

    public function edit($id) {
        $q= DB::table('tmshape')
                    ->where('XIShapeCode',$id)
                    ->first();
        return view('app.Planing.Shape.shapedetail',['q'=>$q]);
    }

    public function insertData(Request $request) {
        // dd($request->all());
        DB::table('tmshape')
                    ->insertGetId([
                    'XVShapeName'=>$request->get('XVShapeName'),
                    ]);
        return redirect('shape');
    }

    public function delete($id) {
        DB::table('tmshape')
                  ->where('XIShapeCode',$id)
                  ->delete();
        return redirect('shape');
    }

    public function UpdateData(Request $request){
        //dd($request->all());
        $update = DB::table('tmshape')
                        ->where('XIShapeCode',$request->get('XIShapeCode'))
                        ->update([
                        'XVShapeName'=>$request->get('XVShapeName'),
                        // 'XVWhoCreate'=>$request->get('XVWhoCreate'),
                        // 'XTWhenCreate'=>$request->get('XTWhenCreate'),
                        // 'XVWhoEdit'=>$request->get('XVWhoEdit'),
                        // 'XTWhenEdit'=>$request->get('XTWhenEdit')
                        ]);
        return redirect('shape');
    }
}
