@extends('layouts.AdminLTE')
@section('title')
    Order
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
</style>
@endsection
@section('content')
<section class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">ตารางข้อมูล</h3>
        </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped text-center">
                      <thead>
                          <tr>
                            <th>เลขที่เอกสาร</th>
                            <th>วันที่เอกสาร</th>
                            <th>วันที่อนุมัติ</th>
                            <th>ผู้อนุมัติ</th>
                            <th>จัดการ</th>
                          </tr>
                      </thead>
                        <tbody>
                          @foreach ($orders as $order )
                          <tr>
                            <td>{{ "$order->XVOrderDocNo" }}</td>
                            <td>{{ "$order->XDOrderDocMDate" }}</td>
                            <td>{{ "$order->XDOrderDateApprove" }}</td>
                            <td>{{ "$order->XVWhoCreate" }}</td>
                            <td><a href= "{{ url("order/$order->XVOrderDocNo/edit") }}"  class="btn bg-gradient-primary"><i class="fas fa-search"></i></a></td> 
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                  </div>
      </div>
    </div>
  </div>
  </div>
</section>

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


{{-- ("/$order->XVOrderDocNo/edit") --}}

