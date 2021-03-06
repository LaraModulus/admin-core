@extends('admincore::layouts.dashboard')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        @if(count($widgets))
        <div class="row">
            @foreach($widgets as $widget)
                {!! $widget !!}
            @endforeach
        </div>
        @endif

    </div>
@stop