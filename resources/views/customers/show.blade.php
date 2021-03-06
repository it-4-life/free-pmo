@extends('layouts.app')

@section('title', trans('customer.show'))

@section('content')
<h1 class="page-header">
    <div class="pull-right">
        {!! link_to_route('customers.edit', trans('customer.edit'), [$customer->id], ['id' => 'edit-customer-' . $customer->id, 'class' => 'btn btn-warning']) !!}
        {!! link_to_route('customers.index', trans('customer.back_to_index'), [], ['class' => 'btn btn-default']) !!}
    </div>

    {{ $customer->name }} <small>{{ trans('customer.show') }}</small>
</h1>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">{{ trans('customer.show') }}</h3></div>
            <table class="table table-condensed">
                <tbody>
                    <tr><td class="col-xs-3">{{ trans('customer.name') }}</td><td>{{ $customer->name }}</td></tr>
                    <tr><td>{{ trans('contact.email') }}</td><td>{{ $customer->email }}</td></tr>
                    <tr><td>{{ trans('contact.phone') }}</td><td>{{ $customer->phone }}</td></tr>
                    <tr><td>{{ trans('customer.pic') }}</td><td>{{ $customer->pic }}</td></tr>
                    <tr><td>{{ trans('address.address') }}</td><td>{{ $customer->address }}</td></tr>
                    <tr><td>{{ trans('app.status') }}</td><td>{{ $customer->is_active }}</td></tr>
                    <tr><td>{{ trans('app.notes') }}</td><td>{!! nl2br($customer->notes) !!}</td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <a href="#" title="@lang('customer.projects_count')">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3"><i class="fa fa-table fa-4x"></i></div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $customer->projects()->count() }}</div>
                                    <div class="lead">@lang('customer.projects_count')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
