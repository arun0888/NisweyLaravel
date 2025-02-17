<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $contact->name }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $contact->phone }}</p>
</div>

<!-- Enable Field -->
<div class="col-sm-12">
    {!! Form::label('enable', 'Enable:') !!}
    <p>{{ ($contact->enable) ? 'Active' : Inactive }}</p>
</div>

