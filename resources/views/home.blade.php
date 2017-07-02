@extends('layouts.app')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome-animation.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Dashboard</strong></div>
                <div class="panel-body">
                    @if(Session::has('alert-success'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade in" role="alert" style="padding: 7px 15px;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="right: 3px;">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <i class="fa fa-check faa-shake animated" style="padding-top: 3px; padding-right: 5px;"></i> {{ Session::get('alert-success') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <a class="btn btn-primary" href="/kontrak/tambah">Tambah Data</a>
                    <div class="table-responsive" style="margin-top: -35px;">
                        <table class="display table text-center" id="dataKontrak" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Perjanjian</th>
                                    <th>Nama Pihak</th>
                                    <th>Tipe Kontrak</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Deskripsi</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kontraks as $kontrak)
                                    @php
                                        $todays = time();
                                        $finish = strtotime($kontrak->kontrak_selesai);
                                        $date_diff = $finish - $todays;
                                        $due_date = floor($date_diff / (60 * 60 * 24));
                                    @endphp
                                    <tr>
                                        <td>{{ $kontrak->kontrak_nomor }}</td>
                                        <td>{{ $kontrak->kontrak_nama_perjanjian }}</td>
                                        <td>{{ $kontrak->kontrak_nama_pihak }}</td>
                                        <td>{{ $kontrak->kontrak_tipe }}</td>
                                        <td>{{ $kontrak->kontrak_mulai }}</td>
                                        <td>{{ $kontrak->kontrak_selesai }}</td>
                                        <td>{{ $kontrak->kontrak_deskripsi }}</td>    
                                        @if($due_date >= 180)
                                            <td class="bg-info" style="font-weight: bold">
                                                {{ $due_date }} hari
                                            </td>
                                        @elseif($due_date >= 30)
                                            <td class="bg-warning"  style="font-weight: bold">
                                                {{ $due_date }} hari
                                            </td>
                                        @elseif($due_date >= 5)
                                            <td class="bg-danger"  style="font-weight: bold">
                                                {{ $due_date }} hari
                                            </td>
                                        @elseif($due_date >= 0)
                                            <td class="bg-danger"  style="font-weight: bold" title="Kontrak akan segera berakhir...">
                                                {{ $due_date }} hari <i class="fa fa-warning faa-flash animated"></i>
                                            </td>
                                        @else
                                            <td style="color: red; font-weight: bold;">
                                                Kontrak berakhir !!
                                            </td>
                                        @endif
                                        <td width="100px">
                                            <form action="/kontrak/{{ $kontrak->id }}" method="POST" accept-charset="UTF-8">
                                                {{ csrf_field() }}
                                                @if($due_date >=0)
                                                    <a class="btn btn-success" href="/kontrak/{{ $kontrak->id }}/{{ $kontrak->kontrak_nama_perjanjian }}/edit" title="Ubah data kontrak"><i class="fa fa-pencil"></i></a>
                                                @else
                                                    <a class="btn btn-warning" href="/kontrak/{{ $kontrak->id }}/{{ $kontrak->kontrak_nama_perjanjian }}/update" title="Perbaharui data kontrak"><i class="fa fa-file-text"></i></a>
                                                @endif
                                                <button type="submit" class="btn btn-danger" title="Hapus data kontrak" onclick="return confirm('Anda yakin akan menghapus data kontrak {{ $kontrak->kontrak_nama_perjanjian }}?')"><i class="fa fa-trash-o"></i></button>
                                                <input type="hidden" name="_method" value="DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#dataKontrak').dataTable({
                "lengthChange": false,
                "pageLength": 25,
                "order": [[ 5, "asc"]]
            });
        });
    </script>
@endsection