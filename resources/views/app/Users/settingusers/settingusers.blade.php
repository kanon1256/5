@extends('layouts.AdminLTE')

@section('title')
    Setting
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
    .modal-content {
        min-width: 900px;
    }
</style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title"> จัดการสิทธิ์</div>
            </div>
            <div class="card-body">
                <div class="row">
                        <div class="col-md-2" style="padding-right: 0px">
                            <input type="text" class="form-control" name="name" id="name" autocomplete="off" placeholder="ชื่อพนักงาน" style="padding-right: 0px" readonly="">
                            <input type="hidden" name="id" id="id">
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-info align-middle" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                      
                    
                </div>
                <table class="mt-2 table table-bordered table-striped text-center" id="example1">
                    <thead class="thead-dark">
                        <th style="width:100%;" class="text-left">เมนู</th>
                        <th style="width:10%;">อ่าน</th>
                        <th style="width:10%;">บันทึก</th>
                        <th style="width:10%;">ลบ</th>
                        <th style="width:10%;">ยกเลิก</th>
                        <th style="width:10%;">ยืนยัน</th>
                        <th style="width:10%;">พิมพ์</th>
                    </thead>
                    <tbody>
                        <tr id="AuthenSet">
                            <td class="text-left">ตั้งค่าสิทธิ์
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="" value="0">
                                <input type="checkbox" name="" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="" value="0">
                                <input type="checkbox" name="" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="" value="0">
                                <input type="checkbox" name="" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="" value="0">
                                <input type="checkbox" name="" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="" value="0">
                                <input type="checkbox" name="" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="" value="0">
                                <input type="checkbox" name="" value="1"></td>
                        </tr>
                        <tr id="Dashboard">
                            <td class="text-left">Dashboard
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="Planing">
                            <td class="text-left">Planing
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="DocProject">
                            <td class="text-left">แผนกเบิก-จ่าย
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="EmpData">
                            <td class="text-left">แผนกฟอก
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="Emp User">
                            <td class="text-left">แผนกรับสินค้า
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="wDashboard">
                            <td class="text-left">แผนก QC
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="wDashboard">
                            <td class="text-left">แผนก Packing
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="wDashboard">
                            <td class="text-left">แผนกบัญชี
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                        <tr id="wDashboard">
                            <td class="text-left">ผู้ใช้งานระบบ
                                <input type="hidden" name="type[wDashboard][XVMnuCode]" value="wDashboard">
                            </td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsRead]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsRead]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsSave]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsSave]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsDelete]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsDelete]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsCancel]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsCancel]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsApprove]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsApprove]" value="1"></td>
                            <td class="text-center">
                                <input type="hidden" name="type[wDashboard][XBUmnIsPrint]" value="0">
                                <input type="checkbox" name="type[wDashboard][XBUmnIsPrint]" value="1"></td>
                        </tr>
                      </tbody>
                </table>
            </div>
            <div class="row submit-tab">
                <div class="col-md-6"><a href="{{route('usersList')}}"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a></div>
                    <div class="col-md-6"><button type="submit" class="btn btn-success float-right">บันทึก</button></div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="list-modal" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">ข้อมูลพนักงาน</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <table class="table table-sm table-hover" style="width:100%;" id="showmodal">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ชื่อพนักงาน</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $("#System-Admin").toggleClass('show');
        $(".rights").css("background","rgb(255, 126, 41)");
        var table= $('#showmodal').DataTable( {
                    "info": false,
                    "pageLength": 12,
                    select:'single',
                    ajax: {
                    url: '{{url('')}}/show',
                    dataSrc: ''
                    },
                    "columnDefs": [
                    {
                        "targets": 0, // your case first column
                        "className": "text-center",
                    },
                    ],
                    columns: [
                                {   data: 'id',
                                    width: "10%"},
                                {   data: 'name',
                                    width: "90%"},
                            ]
            });
            $('#showmodal tbody').on( 'click', 'tr', function () {
                var modal = table.row( this ).data();
                console.log(modal)
                $('#XVUsrCode').val(modal.XVUsrName);
                $('#XVUsrCode_ID').val(modal.XVUsrCode);
                showRights(modal.XVUsrCode)
                $('#list-modal').modal('hide');
            } );
        function showRights(id){
            return $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: '{{url('rights/showrights')}}/' + id,
                success: function (data) {
                             $('input:checkbox').prop('checked',false);
                             $.each(data,function(index,value){
                                // console.log(value.XBUmnIsRead);
                                 if(value.XBUmnIsRead == '1'){
                                    $("input[name='type["+value.XVMnuCode+"][XBUmnIsRead]']").prop('checked', true);

                                 }
                                 if(value.XBUmnIsSave == '1'){
                                    $("input[name='type["+value.XVMnuCode+"][XBUmnIsSave]']").prop('checked', true);

                                 }
                                 if(value.XBUmnIsDelete == '1'){
                                    $("input[name='type["+value.XVMnuCode+"][XBUmnIsDelete]']").prop('checked', true);

                                 }
                                 if(value.XBUmnIsCancel == '1'){
                                    $("input[name='type["+value.XVMnuCode+"][XBUmnIsCancel]']").prop('checked', true);

                                 }
                                 if(value.XBUmnIsApprove == '1'){
                                    $("input[name='type["+value.XVMnuCode+"][XBUmnIsApprove]']").prop('checked', true);

                                 }
                                 if(value.XBUmnIsPrint == '1'){
                                    $("input[name='type["+value.XVMnuCode+"][XBUmnIsPrint]']").prop('checked', true);

                                 }
                                //  value.XVMnuCode
                                 console.log(value);
                             });
                            // console.log(data);
                        },
                        error: function () {
                            console.log(data);
                        }
            });
        };

        $('#form1').on('submit', function () {
                    $("#form1").attr("method", "POST");
                    $("#form1").attr("action", "{{url('rights')}}/" + $('#XVUsrCode_ID').val());
                    $("#method").attr("value", "PUT");
                    $('#XVUsrCode').val()
        });
    })
</script>

@endsection