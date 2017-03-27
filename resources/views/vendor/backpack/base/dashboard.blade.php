@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>
                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title"><a href="{{ url(config('backpack.base.route_prefix', 'admin'))."/settings" }}">Site Settings</a></div>
                </div>
                <div class="box-body">
                    <ul>
                        @foreach(Config::get('settings') as $key => $value)
                        <li>
                            @if($key !== 'address')
                            {{ $key }} - {{ $value }}
                            @elseif ($value != null)
                                Address:
                                @foreach(json_decode($value) as $k => $v)
                                    {{ $v->name }}: {{ $v->description }},
                                @endforeach
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ $someVar }}</div>
                </div>
                <div class="box-body">{{ $someVar }}</div>
            </div>
        </div>
    </div>
@endsection
