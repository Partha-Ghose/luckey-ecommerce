@extends('admin.master')
@section('title','Pages')
@section('content')

   <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>@yield('title')</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/admin') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>@yield('title')</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Create New</a>
            </div>
        </div>
    </div>

    <create-page></create-page>

    <div class="wrapper wrapper-content">
       <view-page></view-page>
    </div>

@endsection

@push('script')
 <script src="{{ asset('js/pages.js') }}"></script>
 
@endpush
