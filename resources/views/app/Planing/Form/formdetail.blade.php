@extends('layouts.AdminLTE')
@section('title')
    แก้ไขแบบการผลิต
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
              <form method="GET" action="{{route('formUpdate')}}">
                {{ csrf_field() }}
              <div class="card-body col-md-12">
                    <div class="grid">
                        <div class="grid-content">ชื่อแบบ : <br>
                            <input type="hidden" value="{{$q->XIGenerateCode}}" name="XIGenerateCode" id="XIGenerateCode">
                            <input class="form-control" value="{{ $q->XVGenerateName }}" id="XVGenerateName" name="XVGenerateName">
                        </div>

                    </div>
                </div>
                    <div class="row submit-tab col-md-12" style="margin:0px">
                        <div class="col">
                            <a href="{{route('formIndex')}}"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a>
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