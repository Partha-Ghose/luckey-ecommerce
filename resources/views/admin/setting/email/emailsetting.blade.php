@extends('admin.master')
@section('title','Email Setting')
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
        
    </div>

    <div class="wrapper wrapper-content white-bg">
       <email-setting></email-setting>
    </div>

@endsection

@push('script')
 <script src="{{ asset('js/email.js') }}"></script>
@endpush