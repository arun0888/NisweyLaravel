<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 150, 'maxlength' => 150]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Enable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enable', 'Enable:') !!}
    <!-- {!! Form::number('enable', null, ['class' => 'form-control', 'required']) !!} -->
    <select class="form-control" id="enable" name="enable">
        @if (isset($contact) && $contact->enable == '')
            <option value="0" selected>Select an option</option>
        @else
            <option value="0">Select an option</option>
        @endif
        <option value="1" {{ ((isset($contact) && $contact->enable) ? 'selected' : '') }}>Active</option>
        <option value="2" {{ ((isset($contact) && $contact->enable == 0) ? 'selected' : '') }}>Inactive</option>
    </select>
</div>