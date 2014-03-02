@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>{{{$user->username}}}</h1>
</div>
<table class="table table-striped">
    <tbody>
        <tr>
             <td>Signed Up</td>
             <td>{{{$user->joined()}}}</td>
        </tr>
    </tbody>
</table>
@stop
