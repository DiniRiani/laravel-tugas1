@extends('master')
@section('title', 'Anggota')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Anggota</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Anggota</label>
                                    <input disabled type="text" class="form-control" name="id" id="id" placeholder="Masukkan ID" value="{{$anggota[0]->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="kode_anggota">Kode Anggota</label>
                                    <input disabled value="{{$anggota[0]->kode}}" type="text" class="form-control" name="kode" id="kode_anggota" placeholder="Masukan kode">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input disabled value="{{$anggota[0]->nama}}" type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select disabled class="custom-select" name="jk">
                                        <option selected>{{$anggota[0]->jk}}</option>
                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select" name="jurusan" disabled>
                                        <option selected>{{$anggota[0]->jurusan}}</option>
                                        <option value="RPL">RPL</option>
                                        <option value="DPIB">DPIB</option>
                                        <option value="TP">TP</option>
                                        <option value="TFLM">TFLM</option>
                                        <option value="TEI">TEI</option>
                                        <option value="TITL">TITL</option>
                                        <option value="TKJ">TKJ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input disabled value="{{$anggota[0]->tlp}}" type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea disabled class="form-control" rows="3" name="alamat" placeholder="Masukan alamat">{{$anggota[0]->alamat}}</textarea>
                                </div>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                    @endsection