@extends('layouts.app')

@section('title', 'Error')

@section('css')
    <link href="{{ asset('font-awesome/css/font-awesome-animation.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Error</strong></div>
                <div class="panel-body">
                    <div class="row text-center" style="margin-top: 40px;">
                        <div class="col-md-12">
                            <i class="fa fa-warning fa-5x faa-flash animated" style="padding-top: 10px; padding-right: 5px;"></i>
                            <h2 style="margin-bottom: 50px;">404 Not Found</h2>
                            <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-chevron-left" style="padding-right: 5px;"></i>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection