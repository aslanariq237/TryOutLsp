@extends('dashboard')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Tarif</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Tarif</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('addartikel') }}"><button class="btn btn-primary">Tambahkan Data Artikel</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Kategori</th>
                  <th>Judul Kategori</th>
                  <th>Isi Artikel</th>
                  <th>Gambar Artikel</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kategori_id }}</td>
                    <td>{{ $item->judul_kategori}}</td>
                    <td>{{ $item->isi_artikel}}</td>
                    <td>{{ $item->gambar_artikel}}</td>
                    <td>
                      <a href="{{ route('editartikel', $id = $item->id) }}"><button class="btn btn-warning">Update Button</button></a>
                      <a href="{{ route('deleteartikel', $id = $item->id) }}"><button class="btn btn-danger mt-2">Delete Button</button></a>
                    </td>
                  </tr>
                @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection