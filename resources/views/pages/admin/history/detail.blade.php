@extends('layouts.admin.main') 
@section('title', 'Admin Detail History Pembelian') 
@section('content') 
    <div class="main-content"> 
        <section class="section"> 
            <div class="section-header"> 
                <h1>Detail History Pembelian</h1> 
                <div class="section-header-breadcrumb"> 
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}"> Dashboard</a></div> 
             <div class="breadcrumb-item active"><a href="{{ route('admin.history') }}"> History Pembelian</a></div> 
                    <div class="breadcrumb-item">Detail History Pembelian</div> 
                </div> 
            </div> 
 
            <a href="{{ route('admin.history') }}" class="btn btn-icon icon-left btn-warning">     
                    Kembali</a> 
 
            <div class="card mt-4"> 
                <div class="card-body"> 
                    <div class="row"> 
                        <div class="col-6"> 
                            <div class="form-group"> 
                                <label for="nama_user">Nama Pengguna</label> 
                                <input id="nama_user" type="text" class="form-control" 
                                    value="{{ $data->nama_user }}" readonly> 
                            </div> 
                        </div> 
                        <div class="col-6"> 
                            <div class="form-group"> 
                                <label for="nama_produk">Nama Produk</label> 
                                <input id="nama_produk" type="text" class="form-control" 
                                    value="{{ $data->nama_produk }}" readonly> 
                            </div> 
                        </div> 
                        <div class="col-6"> 
                            <div class="form-group"> 
                                <label for="total_harga">Total Harga Pembelian</label> 
                                <input id="total_harga" type="text" class="form-control" 
                                    value="{{ $data->total_harga }}" readonly> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </section> 
    </div> @endsection 