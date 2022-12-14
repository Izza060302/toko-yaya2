@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Customer</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('customer.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>Amin</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>amin@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>No Tlp</td>
                                    <td>Alamat</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>
                                        <form action="#" class="form-inline">
                                            <div class="form-group mr-2">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="aktif">Aktif</option>
                                                    <option value="nonaktif">Non Aktif</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
