@extends('layout.master')

@section('dashboard')
   Beranda
   <small>Manajemen Gudang</small>
@endsection

@section('breadcrumb')
    
@endsection

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
               

                <p>Gudang</p>
            </div>
            <div class="icon">
                <i class="fa fa-truck"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                
                <p>Barang</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                

                <p>Kategori</p>
            </div>
            <div class="icon">
                <i class="fa fa-tags"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                

                <p>Merek</p>
            </div>
            <div class="icon">
                <i class="fa fa-flag"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <!-- ./col -->
</div>



<div class="row">
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
            <div class="inner">
                

                <p>Stok Masuk</p>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                

                <p>Penyuplai</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                

                <p>Stok Keluar</p>
            </div>
            <div class="icon">
                <i class="fa fa-sign-out"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                

                <p>Pembeli</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-secret"></i>
            </div>
            <a href="#" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="box box-default">
                
                    <div class="box-body">
                   
                        <table id="products" class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th >Lokasi Gudang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                           
                        </table>
                      
                    </div>
                </div>
            </div>         
            </div>
<div class="row">
        <div class="col-lg-6">
            <div class="box box-default">
                
            <div class="box-body">
                  
                        <table id="productins" class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Frekuensi Stok Masuk</th>
                            </tr>
                            </thead>
                           
                        </table>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <div class="box box-default">
                
            <div class="box-body">
                    
                        <table id="productouts" class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Frekuensi Stok Keluar</th>
                            </tr>
                            </thead>
                           
                        </table>
                      
                    </div>
                </div>
            
            </div>
            </div>
            <div class="row">
        <div class="col-lg-6">
            <div class="box box-default">
                
            <div class="box-body">
                   
                        <table id="suppliers" class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th>Nama Penyuplai</th>
                                <th>Frekuensi Suplai</th>
                            </tr>
                            </thead>
                           
                        </table>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <div class="box box-default">
                
            <div class="box-body">
                   
                        <table id="customers" class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th>Nama Pembeli</th>
                                <th>Frekuensi Beli</th>
                            </tr>
                            </thead>
                            
                        </table>
                      
                    </div>
                </div>
            
            </div>
            
<style>
    table tbody:nth-child(n+7) {
    display:none;
    }
</style>      
-->

    
@endsection

@section('top')
@endsection
