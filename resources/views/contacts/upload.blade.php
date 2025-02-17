@extends('layouts.admin')

@section('main-content')
<div class="card-body p-0">
{!! Form::open(['route' => 'xml.upload', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    <input type="file" name="xml_file" accept=".xml" required>
    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
</div>
@endsection
