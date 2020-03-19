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
          <h3 class="card-title">ลูกค้า</h3>
        </div>
            <div class="card-body">
                <div class="row">
                <div class="col-sm-12 pull-right pad">
                    <div class="btn-toolbar float-right">
                        <a href="{{ url('/customer/create') }}" class="btn btn-success ml-1 active" data-toggle="tooltip" title="เพิ่มข้อมูล"><i class="fas fa-plus-circle"></i> เพิ่มข้อมูล</a>
                    </div>
                </div>
                </div>
                <table id="example1" class="table table-bordered table-striped text-center ">
                    <thead>
                        <tr>
                          <th>รหัสลูกค้า</th>
                          <th>ลูกค้า</th>
                          <th>ผู้ติดต่อ</th>
                          <th>เบอร์โทรศัพท์</th>
                          <th>ที่อยู่</th>
                          <th>จัดการ</th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($qs as $q )
                        <tr>
                          <td>{{ "$q->XIGuestCode" }}</td>
                          <td>{{ "$q->XVGuestName" }}</td>
                          <td>{{ "$q->XVNameContact" }}</td>
                          <td>{{ "$q->XVGuestTel" }}</td>
                          <td>{{ "$q->XVGuestAddress" }}</td>
                          <td>
                            <div class="btn-group">
                            <a href="{{url('customer/edit')}}/{{ $q->XIGuestCode }}" class="btn bg-gradient-primary"><i class="fas fa-search"></i></a>
                            <a href="{{url('customer/delete')}}/{{ $q->XIGuestCode }}" class="btn bg-danger"  type="submit"><i class="fas fa-trash"></i></a>
                          </div>
                          </td> 
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
            </div>     
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
