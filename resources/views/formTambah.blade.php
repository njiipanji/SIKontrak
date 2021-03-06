@extends('layouts.app')

@section('title', 'Form Tambah Data')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Form Tambah Data</strong></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('/kontrak/tambah') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    @if($errors->has('kontrakNomor'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>Nomor kontrak harus diisi !!!</p>
                                        </div>
                                    @endif
                                    <label for="kontrakNomor">Nomor Kontrak <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="kontrakNomor" name="kontrakNomor" placeholder="Nomor Kontrak" value="{{ old('kontrakNomor') }}">
                                </div>
                                <div class="form-group">
                                    @if($errors->has('kontrakNama'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>Nama perjanjian harus diisi !!!</p>
                                        </div>
                                    @endif
                                    <label for="kontrakNama">Nama Perjanjian <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="kontrakNama" name="kontrakNama" placeholder="Nama Perjanjian" value="{{ old('kontrakNama') }}">
                                </div>
                                <div class="form-group">
                                    @if($errors->has('kontrakPihak'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>Nama pihak perjanjian harus diisi !!!</p>
                                        </div>
                                    @endif
                                    <label for="kontrakPihak">Nama Pihak <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="kontrakPihak" name="kontrakPihak" placeholder="Nama Pihak" value="{{ old('kontrakPihak') }}">
                                </div>
                                <div class="form-group">
                                    @if($errors->has('kontrakTipe'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>Tipe kontrak harus dipilih salah satu !!!</p>
                                        </div>
                                    @endif
                                    <label for="kontrakTipe">Tipe Kontrak <span style="color: red;">*</span></label>
                                    <select class="form-control" id="kontrakTipe" name="kontrakTipe">
                                        <option @if(old('kontrakTipe')=='') {{ 'selected' }}@endif disabled>Pilih Tipe</option>
                                        <option value="Barang" @if(old('kontrakTipe')=='Barang') {{ 'selected' }}@endif>Barang</option>
                                        <option value="Jasa" @if(old('kontrakTipe')=='Jasa') {{ 'selected' }}@endif>Jasa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    @if($errors->has('kontrakMulai'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>Tanggal mulainya kontrak harus diatur !!!</p>
                                        </div>
                                    @endif
                                    <label for="kontrakMulai">Tanggal Mulai <span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" id="kontrakMulai" name="kontrakMulai" placeholder="Tanggal Mulai" value="{{ old('kontrakMulai') }}">
                                </div>
                                <div class="form-group">
                                    @if($errors->has('kontrakSelesai'))
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <p>Tanggal selesainya kontrak harus diatur !!!</p>
                                        </div>
                                    @endif
                                    <label for="kontrakSelesai">Tanggal Selesai <span style="color: red;">*</span></label>
                                    <input type="date" class="form-control" id="kontrakSelesai" name="kontrakSelesai" placeholder="Tanggal Selesai" value="{{ old('kontrakSelesai') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kontrakDeskripsi">Deskripsi Kontrak</label>
                                    <textarea class="form-control" rows="3" placeholder="Deskripsi Kontrak" id="kontrakDeskripsi" name="kontrakDeskripsi">{{ old('kontrakDeskripsi') }}</textarea>
                                </div>
                                <h6 style="color: red;"><em>* required</em></h6>
                                <div class="text-center">
                                    <a class="btn btn-danger" href="{{ url('/') }}"><i class="fa fa-close"></i> Batal</a>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection