@extends('layouts.AdminLTE')

@section('title')
    ลงทะเบียนผู้ใช้งาน
@endsection
@section('style')
<style>
    .submit-tab {
        color: black;
        padding : 12px 15px;
        height: 100%;
        width: 80%
        box-shadow: rgba(0, 0, 0, 1);
        background-color: rgba(170,170,170,0.5);
        margin : 0;
    }
</style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">เพิ่มรายชื่อพนักงานใหม่</div>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="card" style="width:60%;">
                        <div class="card-header">
                            <div class="card-title">เพิ่มรายชื่อพนักงานใหม่</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="XVEmpCode">รหัสพนักงาน</label>
                                    <div class="input-group">
                                            <input type="text" required="" readonly="" name="XVEmpCode" class="form-control" id="XVEmpCode" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="XVEmpName">ชื่อภาษาไทย</label>
                                    <input type="text" required="" autofocus="" class="form-control " maxlength="101" name="XVEmpName" value="" id="XVEmpName" placeholder="ชื่อภาษาไทย">
                                </div>
        
                                <div class="form-group col-md-6">
                                    <label for="XVEmpNameOth">ชื่อภาษาอังกฤษ</label>
                                    <input type="text" required="" class="form-control " value="" name="XVEmpNameOth" id="XVEmpNameOth" maxlength="101" placeholder="ชื่อภาษาอังกฤษ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="XVEmpPhone">บัตรประชาชน</label>
                                    <input type="tel" required="" class="form-control " value="" name="XVEmpPhone" id="XVEmpPhone">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="XVEmpCardID">เบอร์โทรศัพท์</label>
                                    <input type="text" pattern="\d*" required="" class="form-control " value="" name="XVEmpCardID" id="XVEmpCardID" maxlength="13" size="13">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="XVEmpLineID">Line ID</label>
                                    <input type="text" required="" class="form-control " value="" name="XVEmpLineID" id="XVEmpLineID">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="XDEmpBirthDate">วันเกิด</label>
                                    <input type="date" required="" class="form-control
                                            " value="" name="XDEmpBirthDate" id="XDEmpBirthDate">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="XDEmpStartDate">วันที่เริ่มเข้าทำงาน</label>
                                    <input type="date" required="" class="form-control " value="" name="XDEmpStartDate" id="XDEmpStartDate">
                                    <div class="alert alert-danger" id="alertTimeLessthanEnd" style="display: none;">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="XVEmpEmail">ที่อบู่</label>
                                    <textarea type="text" required="" class="form-control " value="" name="XVEmpEmail" id="XVEmpEmail"></textarea>                 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="XVEmpFacebook">E-mail</label>
                                    <input type="text" required="" class="form-control " value="" name="XVEmpEmail" id="XVEmpEmail">
                                </div>
                            </div>
                        </div>
                        <div class="row submit-tab">
                            <div class="col-md-6"><a href="{{route('usersList')}}"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a></div>
                                <div class="col-md-6"><button type="submit" class="btn btn-success float-right">เพิ่มข้อมูล</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')


@endsection