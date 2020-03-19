@extends('layouts.AdminLTE')
@section('title')
    Customer Detail
@endsection

@section('style')
<style>
    .container-fluid{
            padding: 0px 25px;
        }
    .container-98 {
        padding-bottom: 25px;
    }

        .card-header {
            background-color: black;
            color: white;
        }

    .submit-tab {
        color: black;
        padding : 12px 30px;
        height: 60px;
        box-shadow: rgba(0, 0, 0, 1);
        background-color: rgba(170,170,170,0.5);
    }

    .grid-content {
        padding: 10px;
        width: 100%;
    }

    .card {
        margin-bottom: 0;
    }
</style>
@endsection

@section('content')
<div class="col-xl">
    <div class="container-fluid container-98">
    <div class="card">
              <div class="card-header">ตารางข้อมูล</div>
              <div class="card-body col-md-12">
                <form method="POST" action="{{url('customer/UpdateData')}}">
                    {{ csrf_field() }}
                <div class="grid">
                    <div class="grid-content"> รหัสลูกค้า : <br>
                        <input class="form-control" readonly id="XIGuestCode" name="XIGuestCode" value="{{  $q->XIGuestCode  }}">
                    </div>
                    <div class="grid-content">ชื่อลูกค้า : <br>
                        <input class="form-control" value="{{ $q->XVGuestName }}" id="XVGuestName" name="XVGuestName">
                    </div>

                    <div class="grid-content">ชื่อผู้ติดต่อ : <br>
                        <input class="form-control" value="{{ $q->XVNameContact }}" id="XVNameContact" name="XVNameContact" >
                    </div>

                    <div class="grid-content"> เบอร์โทรศัพท์ : <br>
                        <input class="form-control" value="{{ $q->XVGuestTel }}" id="XVGuestTel" name="XVGuestTel">
                    </div>

                    <div class="grid-content"> ที่อยู่ : <br>
                        <textarea class="form-control" value="{{ $q->XVGuestAddress }}" id="XVGuestAddress" name="XVGuestAddress"></textarea>
                    </div>
                </div>
                </div>
                <div class="row submit-tab col-md-12" style="margin:0px">
                    <div class="col">
                        <a href="{{url('/customer')}}"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a>
                    </div>
      
                    <div class="col text-right">
                      <input class="btn btn-success active" type="submit" value="บันทึก">
                    </div>
                </div>
            </form>
            </div>
      </div>
    </div>
</div>
@endsection

@section('script')
@endsection