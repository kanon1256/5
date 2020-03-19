@extends('layouts.AdminLTE')
@section('title')
    สร้างแบบทรง
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
    .dataTables_filter,.pagination {
    float: right;
    text-align: right;
    }
    .pad {
      padding-bottom: 2rem;
     }
</style>
@endsection


@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">แบบทรง</h3>
        </div>
        <form method="POST" action="{{route('shapeInsertData')}}">
            {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group ">
                <label for="name">ชื่อแบบทรง*</label>
                <input type="text" id="XVShapeName" name="XVShapeName" class="form-control" maxlength="191" value="" required="" autofocus="">
                                        <p class="helper-block"></p>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                <a href="{{route('shapeIndex')}}" class="btn btn-danger active" role="button" aria-pressed="true">ย้อนกลับ</a>
                </div>
      
                <div class="col text-right">
                    <input class="btn btn-success active" type="submit" value="บันทึก">
                </div>
            </div>
        </div>
        </form>
    </div>
</div>     
      

@endsection