@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h2>Halaman Barang</h2>

@stop

@section('content')

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-10">
  <h2 class="card-header">Barang
    <a href="{{ route('barang.index') }}" class="btn btn-default float-right col-sm-2"><span class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
</h2>
  <div class="card-body">
    <div class="col-md-12">
        <form role="form" action="{{ route('barang.update', $barang->id) }}" method="post">
            @csrf
            @method('put')
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input value="{{ $barang->kode_barang }}" class="form-control boxed" placeholder="Kode" required="required" name="kode_barang" type="text" value="{{ $kode }}" id="kode" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input value="{{ $barang->nama }}" type="text" name="nama" class="form-control" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <label>Kategori Barang</label>
                    <select value="{{ $barang->kategori_id }}" name="kategori_id" class="form-control">
                        
                            @foreach($kategori as $data)
                                <option value="{{$data->id}}">{{$data->kategori}}</option>
                            @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Satuan Barang</label>
                    <select value="{{ $barang->satuan_id }}" name="satuan_id" class="form-control">
                        
                            @foreach($satuan as $data)
                                <option value="{{$data->id}}">{{$data->nama_satuan}}</option>
                            @endforeach
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input value="{{ $barang->tanggal }}" type="date" name="tanggal" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input value="{{ $barang->ket }}" type="text" name="ket" class="form-control" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-default" type="reset">Batal</button>
                </div>
            </form>
        </div>
  </div>

@stop

@section('css')

@stop

 @section('js')
 
@stop