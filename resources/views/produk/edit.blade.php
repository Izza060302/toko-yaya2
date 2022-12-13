@extends('master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Kategori</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="nama_kategori">Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="slug_kategori">Slug Produk</label>
                            <input type="text" name="slug_produk" id="slug_produk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection