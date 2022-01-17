@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h2>Halaman Kategori</h2>

@stop

@section('content')

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-10">
  <h2 class="card-header">Kategori <a href="{{ route('kategori.create') }}" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
</h2>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Ket</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                @php $no=1 @endphp
                    @foreach ($kategori as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kategori}}</td>
                            <td>{{$data->ket}}</td>
                            <td>
                                <form class="text-center" action="{{route('kategori.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <a href="{{route('kategori.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
  </div>
</div>

</div>

@stop

@section('css')

@stop

 @section('js')
 
@stop