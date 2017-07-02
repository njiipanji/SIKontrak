@extends('layouts.app')

@section('title', 'Form Ubah Data')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Form Ubah Data</strong></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('/') }}/kontrak/{{ $kontrak->id }}/update" method="POST">
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
                                    <input type="text" class="form-control" id="kontrakNomor" name="kontrakNomor" placeholder="Nomor Kontrak" value="@if(!old('kontrakNomor')){{ $kontrak->kontrak_nomor }}@else{{ old('kontrakNomor') }}@endif">
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
                                    <input type="text" class="form-control" id="kontrakNama" name="kontrakNama" placeholder="Nama Perjanjian" value="@if(!old('kontrakNama')){{ $kontrak->kontrak_nama_perjanjian }}@else{{ old('kontrakNama') }}@endif">
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
                                    <input type="text" class="form-control" id="kontrakPihak" name="kontrakPihak" placeholder="Nama Pihak" value="@if(!old('kontrakPihak')){{ $kontrak->kontrak_nama_pihak }}@else{{ old('kontrakPihak') }}@endif">
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
                                        <option disabled>Pilih Tipe</option>
                                        <option value="Barang"  @if(!old('kontrakTipe'))
                                                                    @if($kontrak->kontrak_tipe == 'Barang') {{ 'selected' }}@endif
                                                                @else
                                                                    @if(old('kontrakTipe') == 'Barang') {{ 'selected' }}@endif
                                                                @endif>Barang</option>
                                        <option value="Jasa" @if(!old('kontrakTipe'))
                                                                    @if($kontrak->kontrak_tipe == 'Jasa') {{ 'selected' }}@endif
                                                                @else
                                                                    @if(old('kontrakTipe') == 'Jasa') {{ 'selected' }}@endif
                                                                @endif>Jasa</option>
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
                                    <input type="date" class="form-control" id="kontrakMulai" name="kontrakMulai" placeholder="Tanggal Mulai" value="@if(!old('kontrakMulai')){{ $kontrak->kontrak_mulai }}@else{{ old('kontrakMulai') }}@endif">
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
                                    <input type="date" class="form-control" id="kontrakSelesai" name="kontrakSelesai" placeholder="Tanggal Selesai" value="@if(!old('kontrakSelesai')){{ $kontrak->kontrak_selesai }}@else{{ old('kontrakSelesai') }}@endif">
                                </div>
                                <div class="form-group">
                                    <label for="kontrakDeskripsi">Deskripsi Kontrak</label>
                                    <textarea class="form-control" rows="3" placeholder="Deskripsi Kontrak" id="kontrakDeskripsi" name="kontrakDeskripsi">@if(!old('kontrakDeskripsi')){{ $kontrak->kontrak_deskripsi }}@else{{ old('kontrakDeskripsi') }}@endif</textarea>
                                </div>
                                <h6 style="color: red;"><em>* required</em></h6>
                                <div class="text-center">
                                    <a class="btn btn-danger" href="{{ url('/') }}"><i class="fa fa-close"></i> Batal</a>
                                    <input type="hidden" name="_method" value="PUT">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Ubah</button>
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