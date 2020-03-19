@extends('layouts.AdminLTE')
@section('title')
    Customer
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
          <h3 class="card-title">สร้างรายชื่อลูกค้า</h3>
        </div>
        <form method="POST" action="{{url('customer/insertData')}}">
          {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group ">
                <label for="name">ชื่อ*</label>
                <input type="text" id="XVGuestName" name="XVGuestName" class="form-control" value="">
                                <p class="helper-block">
                    
                </p>
            </div>

            <div class="form-group ">
                <label for="price">ชื่อผู้ติดต่อ*</label>
                <input type="text" id="XVNameContact" name="XVNameContact" class="form-control" value="">
                                <p class="helper-block">
                    
                </p>
            </div>

            <div class="form-group ">
                <label for="price">เบอร์โทรศัพท์*</label>
                <input type="text" id="XVGuestTel" name="XVGuestTel" class="form-control" value="">
                                <p class="helper-block">
                    
                </p>
            </div>

            <div class="form-group ">
                <label for="XVGuestAddress">ที่อยู่*</label>
                <textarea id="XVGuestAddress" name="XVGuestAddress" class="form-control "></textarea>
                                <p class="helper-block">
                    
                </p>
            </div>
      </div>
      <div class="card-footer">
        <div class="row">
            <div class="col">
            <a href="{{route('customerIndex')}}" class="btn btn-danger active" role="button" aria-pressed="true">ย้อนกลับ</a>
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

@section('script')
<script>
  $language = 'http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Thai.json'

$(function () {
  $("#example1").DataTable({
    language : {
      url : $language
    },
    pageLength:25,
  });
});
  </script>    
@endsection