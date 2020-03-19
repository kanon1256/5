@extends('layouts.AdminLTE')

@section('title')
    Scan QR Code
@endsection

@section('style')
    <style>
        .container-fluid{
            padding: 0px 25px;
        }

        .card-header {
            background-color: black;
            color: white;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Scan QR Code</h3>
    </div>
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="form-group col-lg-6">
                        <div class="row" style="margin-top:20px">
                            <div class="col">จำนวนที่ Scan: <span id="count_all"></span></div>
                            <div class="col text-right">วันที่: 10/03/2020</div>
                       </div>
                       <div class="row ">
                        <img width="100%" src="http://apiinnovation.dyndns.org/vk_demo/public/img/barcode.jpg" alt="">
                    </div>
                    <div class="row ">
                        
                        <input type="text" style="margin-top:10px;" name="XVOrderBCode" id="XVOrderBCode" class="form-control text-center" placeholder="แสกนบาร์โค้ด" autofocus>
                        
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="col">Order NO: <span id="order_no"></span></div>
                       <div class="col text-right">Size: <span id="size"></span></div>
                   </div>
                    </div>
                    
                </div> 
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <a href="{{ url('/') }}" class="btn btn-dark col-lg-2 active" role="button" aria-pressed="true">กลับ</a>
                    </div>

                </div>
                </div>
  </div>
</div>

@endsection

{{-- <div class="row"> <div class="col"><p>จำนวนที่ Scan :</p></div><div class="col text-right"><p>วันที่ : </p></div></div>
                <img src="{{ asset('img/Barcode.jpg') }}" alt="Barcode" width="600px" vertical-align="middle">
                <input type="text" style="margin-top:10px;" placeholder="สแกนคิวอาร์โค้ด" class="form-control text-center"> --}}