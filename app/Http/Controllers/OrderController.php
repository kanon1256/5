<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index() {
          $orders = DB::table('torder_hd')
                       ->join('tmcustomer','torder_hd.XIGuestCode','=','tmcustomer.XIGuestCode')
                       ->join('tmseason','torder_hd.XISeasonCode','=','tmseason.XISeasonCode')
                       ->join('tmordertable','torder_hd.XIOrderTableCode','=','tmordertable.XIOrderTableCode')
                       ->join('tmforuse','torder_hd.XIForCode','=','tmforuse.XIForCode')
                       ->join('tmshape','torder_hd.XIShapeCode','=','tmshape.XIShapeCode')
                       ->join('tmgenerate','torder_hd.XIGenerateCode','=','tmgenerate.XIGenerateCode')
                       ->join('tmsew','torder_hd.XISewCode','=','tmsew.XISewCode')
                       ->join('tmtotalsew','torder_hd.XITotalSewCode','=','tmtotalsew.XITotalSewCode')
                       ->join('tmblench','torder_hd.XVWhoCreate','=','tmblench.XVWhoCreate')
                       ->join('tmordertype','torder_hd.XIOrderTCode','=','tmordertype.XIOrderTCode')
                       ->groupBy('torder_hd.XVOrderDocNo')
                       ->havingRaw('COUNT(*) > 1')
                       ->get();

            return view('app.Planing.Order.order',['orders'=>$orders]);
 }

    public function edit($id) {
            $orders = DB::table('torder_hd')
                  ->where('XVOrderDocNo',$id)
                  ->join('tmcustomer','torder_hd.XIGuestCode','=','tmcustomer.XIGuestCode')
                  ->join('tmseason','torder_hd.XISeasonCode','=','tmseason.XISeasonCode')
                  ->join('tmordertable','torder_hd.XIOrderTableCode','=','tmordertable.XIOrderTableCode')
                  ->join('tmforuse','torder_hd.XIForCode','=','tmforuse.XIForCode')
                  ->join('tmshape','torder_hd.XIShapeCode','=','tmshape.XIShapeCode')
                  ->join('tmgenerate','torder_hd.XIGenerateCode','=','tmgenerate.XIGenerateCode')
                  ->join('tmsew','torder_hd.XISewCode','=','tmsew.XISewCode')
                  ->join('tmtotalsew','torder_hd.XITotalSewCode','=','tmtotalsew.XITotalSewCode')
                  ->join('tmblench','torder_hd.XVWhoCreate','=','tmblench.XVWhoCreate')
                  ->join('tmordertype','torder_hd.XIOrderTCode','=','tmordertype.XIOrderTCode')
                  ->groupBy('torder_hd.XVOrderDocNo')
                  ->first();
            return view('app.Planing.Order.orderdetail',['order'=>$orders]);
    }
}
