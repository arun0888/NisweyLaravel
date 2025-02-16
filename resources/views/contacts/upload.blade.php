@extends('layouts.admin')

@section('main-content')
<div class="card-body p-0">
{!! Form::open(['route' => 'xml.upload', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    {!! Form::file('xml_file', ['required']) !!}
    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
</div>
@endsection
