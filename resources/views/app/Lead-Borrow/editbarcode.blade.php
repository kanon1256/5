@extends('layouts.AdminLTE')
@section('title')
    Edit Barcode
@endsection
@section('style')
<style>.card-header {
    background-color: black;
    color: white;
}</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">แก้ไขBarcodeที่ติดผิด</h3></div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="text">เลขที่ Barcode :</label>
                            
                            <input type="text" class="form-control" id="XVOrderBCode" placeholder="แสกนบาร์โค้ด">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="text">Size เก่า :</label>
                            <input type="text" name="" class="form-control" value="" id="size" readonly="">
                        </div>
                        <div class="col" style="margin-top:30px">
                            
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="text">Size ใหม่ :</label>
                            
                            <select id="XVOrderBSizeNew" class="col-sm-12 form-control font-size" type="text" required="required" style="font-size: 16px;" disabled="disabled">
                                <option disabled="" selected="" value=""> -- select--</option>
                                                             <option value="21">21</option>
                                                             <option value="22">22</option>
                                                             <option value="23">23</option>
                                                             <option value="24">24</option>
                                                             <option value="25">25</option>
                                                             <option value="26">26</option>
                                                             <option value="27">27 / S</option>
                                                             <option value="28">28 / M</option>
                                                             <option value="29">29 / L</option>
                                                             <option value="30">30 / XL</option>
                                                             <option value="32">32</option>
                                                             <option value="34">34</option>
                                                             <option value="36">36</option>
                                                             <option value="38">38</option>
                                                             <option value="40">40</option>
                                                             <option value="42">42</option>
                                                             <option value="44">44</option>
                                                             <option value="46">46</option>
                                                             <option value="48">48</option>
                                                             <option value="0L">L</option>
                                                             <option value="0M">M</option>
                                                             <option value="0S">S</option>
                                                             <option value="XL">XL</option>
                                                    </select>
                        </div>
                        <div class="col" style="margin-top:30px">
                            <a href="#" class="btn btn-success active ml-1 col-1" role="button" id="btnSave">บันทึก</a>
                            <a href="{{ url('/') }}" class="btn btn-danger active ml-1 col-1" role="button" id="btnCancel">ยกเลิก</a>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
    </div>
</section>

@endsection

@section('script')

@endsection