@extends('layouts.AdminLTE')

@section('title')
    รายชื่อผู้ใช้งาน
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
                 <div class="card-title">รายชื่อผู้ใช้งาน</div>
             </div>
             <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 pad">
                        <div class="btn-toolbar float-right">
                            <a href="{{ route('usersCreate') }}" class="btn btn-success ml-1 active" data-toggle="tooltip" title="เพิ่มข้อมูล"><i class="fas fa-plus-circle"></i> เพิ่มข้อมูลพนักงานใหม่</a>
                        </div>
                    </div>
                    <div class="mt-2 table-responsive">
                        <table class="table table-bordered table-striped text-center" id="example1">
                            <thead class="thead-dark">
                            <tr>
                                <th style="width:20%;" class="text-left">รหัส</th>
                                <th style="width:100%;"class="text-left">ชื่อพนักงาน</th>
                                <th style="width:20%;">แสดงข้อมูล</th>
                                <th style="width:20%;">ลบ</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($query as $q )
                                <tr>
                                    <td class="text-left">{{ "$q->id" }}</td>
                                    <td class="text-left">{{"$q->name"}}</td>
                                    <td><a href="{{url('shape/edit')}}/{{ $q->id }}" class="btn bg-gradient-primary"><i class="fas fa-eye"></i></a></td> 
                                    <td><a href="{{url('shape/delete')}}/{{ $q->id }}" class="btn bg-danger"  type="submit"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
             </div>
         </div>
     </div>
 @endsection

 @section('script')
 {{-- <script>
    $(document).ready(function () {
        $("#System-Admin").toggleClass('show');
        $(".admin").css("background","rgb(255, 126, 41)");
        $('#t1').DataTable( {

            dom: 'Bfrtip',
            buttons: {
            dom: {
            button: {
                tag: 'button',
                className: ''
            }
            },
                buttons: [{
                className: 'btn btn-cancel',
                text: 'เพิ่มข้อมูล',
                action: function ( e, dt, button, config ) {
                window.location = '{{url('user/create')}}';
                }
                }]
            },

            ajax: {
            url: 'user/show/table',
            // dataSrc: ''
            },
            "columnDefs": [
                {
                "targets": [3,4], // your case first column
                "className": "text-center",
                "orderable": false,
                "searchable": false,
                },
            ],
            columns: [
                        {   data: 'XVUsrCode',
                            width: "5%"},
                        {   data: 'XVUsrName',
                            width: "41%"},
                        {   data: 'XVEmpName',
                            width: "40%",
                            name: 'TMstMEmployee.XVEmpName'},
                        {
                            data: 'XVUsrCode',
                            width: "9%",
                            render: function ( data, type, row ) {
                            console.log(row)
                            return '<a href="{{url('user')}}/'+row.XVUsrCode+'"><button type="submit" class="btn "style="background-color: transparent;"><i class="fas fa-eye"></i></button></a>';
                            }
                        },
                        {
                            data: 'XVUsrCode',
                            width: "5%",
                            render: function ( data, type, row ) {
                            console.log(row)
                            return '<form action="{{url('user')}}/'+row.XVUsrCode+'" method="POST">{{csrf_field()}}<input type="hidden" name="_method" value="DELETE"><button type="submit" class="btn" onclick="return confirm(\'คุณแน่ใจที่จะลบข้อมูลนี้แล้วใช่หรือไม่ ?\')" style="background-color: transparent"><i class="fa fa-trash-alt"></i></button></form>';
                            }
                        }
                    ]
        });
        })
</script> --}}

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