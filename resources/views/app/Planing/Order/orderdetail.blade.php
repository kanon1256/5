@extends('layouts.AdminLTE')
@section('title')
    Order Detail
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
    .grid {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 20px;
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
                <div class="grid">
                    <div class="grid-content">เลขที่เอกสาร (เลขที่ Order) : <br>
                        <input class="form-control" placeholder="{{ $order->XVOrderDocNo }}" disabled>
                    </div>

                    <div class="grid-content">วันที่สร้างเอกสาร : <br>
                        <input class="form-control" placeholder="{{ $order->XDOrderDocMDate }}" disabled>
                    </div>

                    <div class="grid-content">วันที่อนุมัติ Order : <br>
                        <input class="form-control" placeholder="{{ $order->XDOrderDateApprove }}" disabled>
                    </div>

                    <div class="grid-content"> ผู้อนุมัติ Order : <br>
                        <input class="form-control" placeholder="{{ $order->XIUser_id }}" disabled>
                    </div>

                    <div class="grid-content"> ItemNo : <br>
                        <input class="form-control" placeholder="{{ $order->XVOrderMItemNo }}" disabled>
                    </div>

                    <div class="grid-content">ซีซั่น : <br>
                        <input class="form-control" placeholder="{{ $order->XISeasonName }}" disabled>
                    </div>

                    <div class="grid-content">รหัสซีซั่น : <br>
                        <input class="form-control" placeholder="{{ $order->XISeasonCode }}" disabled>
                    </div>

                    <div class="grid-content">รหัสภายใน : <br>
                        <input class="form-control" placeholder="{{ $order->XVOrderIn }}" disabled>
                    </div>

                    <div class="grid-content">รายละเอียด Order : <br>
                        <input class="form-control" placeholder="{{ $order->XVOrderDetail }}" disabled>
                    </div>

                    <div class="grid-content"> โต๊ะที่ตัด : <br>
                        <input class="form-control" placeholder="{{ $order->XVOrderTableName }}" disabled>
                    </div>

                    <div class="grid-content"> ลูกค้า : <br>
                        <input class="form-control" placeholder="{{ $order->XVGuestName }}" disabled>
                    </div>

                    <div class="grid-content"> แบบสำหรับ : <br>
                        <input class="form-control" placeholder="{{ $order->XVForType }}" disabled>
                    </div>

                    <div class="grid-content"> แบบงาน : <br>
                        <input class="form-control" placeholder="{{ $order->XVGenerateName }}" disabled>
                    </div>

                    <div class="grid-content"> ทรงผ้า : <br>
                        <input class="form-control" placeholder="{{ $order->XVShapeName }}" disabled>
                    </div>

                    <div class="grid-content"> สถานที่เย็บ/หน้าหลัง : <br>
                        <input class="form-control" placeholder="{{ $order->XVSewName }}" disabled>
                    </div>

                    <div class="grid-content"> สถานที่เย็บรวม : <br>
                        <input class="form-control" placeholder="{{ $order->XVTotalSewName }}" disabled>
                    </div>

                    <div class="grid-content"> สถานที่ฟอก : <br>
                        <input class="form-control" placeholder="{{ $order->XVBlenchName }}" disabled>
                    </div>

                    <div class="grid-content"> ราคาค่าฟอกต่อตัว : <br>
                        <input class="form-control" placeholder="{{ $order->XDOrderBPrince }}" disabled>
                    </div>

                    <div class="grid-content"> แบบ Order : <br>
                        <input class="form-control" placeholder="{{ $order->XVOrderTName }}" disabled>
                    </div>

                    <div class="grid-content"> สถานะ : <br>
                        <input class="form-control" placeholder="{{ $order->XCStatus }}" disabled>
                    </div>

                    <div class="grid-content"> คนที่เพิ่ม : <br>
                        <input class="form-control" placeholder="{{ $order->XVWhoCreate }}" disabled>
                    </div>

                    <div class="grid-content"> วันเวลาที่เพิ่ม : <br>
                        <input class="form-control" placeholder="{{ $order->XTWhenCreate }}" disabled>
                    </div>

                    <div class="grid-content"> คนที่แก้ไขล่าสุด : <br>
                        <input class="form-control" placeholder="{{ $order->XVWhoEdit }}" disabled>
                    </div>

                    <div class="grid-content"> วันเวลาที่แก้ไข : <br>
                        <input class="form-control" placeholder="{{ $order->XTWhenEdit }}" disabled>
                    </div>
                </div>
                </div>
            </div>
                <div class="submit-tab col-md-12">
                    <a href="{{url('/order')}}"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a>
                </div>
      </div>
    </div>
</div>
@endsection

@section('script')
@endsection