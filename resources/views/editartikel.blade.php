@extends('dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">edit Data Artikel</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('artikel') }}">artikel</a></li>
                    <li class="breadcrumb-item active">artikel</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Isi data - data dibawah ini dengan benar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('updateartikel', $id = $data->id)}}" id="quickForm">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <input type="text" name="kategori_id" class="form-control" id="daya" placeholder="Masukkan Daya Listrik">
                </div>
                <div class="form-group">
                  <label for="judul_kategori">Judul Kategori</label>
                  <input type="text" name="judul_kategori" class="form-control" id="harga" placeholder="Masukkan artikel Daya">
                </div>
                <div class="form-group">
                  <label for="isi_artikel">isi_artikel</label>
                  <input type="text" name="isi_artikel" class="form-control" id="harga" placeholder="Masukkan artikel Daya">
                </div>
                <div class="form-group">
                  <label for="harga">Gambar Artikel</label>
                  <input type="text" name="gambar_artikel" class="form-control" id="harga" placeholder="Masukkan artikel Daya">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection