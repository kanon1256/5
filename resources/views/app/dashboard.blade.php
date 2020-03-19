@extends('layouts.AdminLTE')
@section('title')
    Dashboard
@endsection
@section('style')
    <style>
        .container-fluid {
            margin-left: 1rem
            margin-right: 1rem
        }
        .grid-container {
            display: grid;
            grid-column-gap: 15px;
            grid-template-columns: auto auto auto; 
        }
    </style>
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="container">
    <div class="grid-container">
        <div class="col-lg-12">
            <!-- User Card -->
            <div class="small-box bg-info">
            <div class="inner">
                <H4>ออเดอร์วันนี้</H4>
                <h3>155</h3>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- User Card -->
            <div class="small-box bg-green">
            <div class="inner">
                <H4>สินค้าที่ผลิตเสร็จแล้ว</H4>
                <h3>1807</h3>
            </div>
            <div class="icon">
                <i class="fas fa-tshirt"></i>
            </div>
            <a href="#" class="small-box-footer">
                ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
        <div class="col-lg-12">
            <!-- User Card -->
            <div class="small-box bg-green">
            <div class="inner">
                <H4>พนักงาน</H4>
                <h3>15</h3>
            </div>
            <div class="icon">
                <i class="fas fa-user-friends"></i>
            </div>
            <a href="#" class="small-box-footer">
                ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i>
            </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection