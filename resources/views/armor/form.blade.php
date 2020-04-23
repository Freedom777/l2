<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('body_part') }}
            {{ Form::text('body_part', $armor->body_part, ['class' => 'form-control' . ($errors->has('body_part') ? ' is-invalid' : ''), 'placeholder' => 'Body Part']) }}
            {!! $errors->first('body_part', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crystallizable') }}
            {{ Form::text('crystallizable', $armor->crystallizable, ['class' => 'form-control' . ($errors->has('crystallizable') ? ' is-invalid' : ''), 'placeholder' => 'Crystallizable']) }}
            {!! $errors->first('crystallizable', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crystal_type') }}
            {{ Form::text('crystal_type', $armor->crystal_type, ['class' => 'form-control' . ($errors->has('crystal_type') ? ' is-invalid' : ''), 'placeholder' => 'Crystal Type']) }}
            {!! $errors->first('crystal_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crystal_count') }}
            {{ Form::text('crystal_count', $armor->crystal_count, ['class' => 'form-control' . ($errors->has('crystal_count') ? ' is-invalid' : ''), 'placeholder' => 'Crystal Count']) }}
            {!! $errors->first('crystal_count', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('armor_type') }}
            {{ Form::text('armor_type', $armor->armor_type, ['class' => 'form-control' . ($errors->has('armor_type') ? ' is-invalid' : ''), 'placeholder' => 'Armor Type']) }}
            {!! $errors->first('armor_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('physical_defense') }}
            {{ Form::text('physical_defense', $armor->physical_defense, ['class' => 'form-control' . ($errors->has('physical_defense') ? ' is-invalid' : ''), 'placeholder' => 'Physical Defense']) }}
            {!! $errors->first('physical_defense', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('magical_defense') }}
            {{ Form::text('magical_defense', $armor->magical_defense, ['class' => 'form-control' . ($errors->has('magical_defense') ? ' is-invalid' : ''), 'placeholder' => 'Magical Defense']) }}
            {!! $errors->first('magical_defense', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mp_bonus') }}
            {{ Form::text('mp_bonus', $armor->mp_bonus, ['class' => 'form-control' . ($errors->has('mp_bonus') ? ' is-invalid' : ''), 'placeholder' => 'Mp Bonus']) }}
            {!! $errors->first('mp_bonus', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>