@extends('layouts.AdminLTE')
@section('title')
    แบบสำหรับ
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
          <h3 class="card-title">แบบสำหรับ</h3>
        </div>
            <div class="card-body">
                <div class="row">
                <div class="col-sm-12 pull-right pad">
                    <div class="btn-toolbar float-right">
                        <a href="{{ route('formCreate') }}" class="btn btn-success ml-1 active" data-toggle="tooltip" title="เพิ่มข้อมูล"><i class="fas fa-plus-circle"></i> เพิ่มข้อมูล</a>
                    </div>
                </div>
                </div>
                <table id="example1" class="table table-bordered table-striped text-center ">
                    <thead>
                        <tr>
                          <th style="width: 26px;">รหัส</th>
                          <th style="width: 350px;">ชื่อ</th>
                          <th style="width: 90px;">จัดการ</th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($query as $q )
                        <tr>
                          <td>{{ "$q->XIGenerateCode" }}</td>
                          <td>{{ "$q->XVGenerateName" }}</td>
                          <td>
                            <div class="btn-group">
                            <a href="{{url('form/edit')}}/{{ $q->XIGenerateCode }}" class="btn bg-gradient-primary"><i class="fas fa-search"></i></a>
                            <a href="{{url('form/delete')}}/{{ $q->XIGenerateCode }}" class="btn bg-danger"  type="submit"><i class="fas fa-trash"></i></a>
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