<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LeadBorrowController extends Controller
{
    //
    public function viewedit() {

        return view('app.Lead-Borrow.editbarcode');
    }

    public function viewbarcode() {

        return view('app.Lead-Borrow.ExportBarcode');
    }
}

