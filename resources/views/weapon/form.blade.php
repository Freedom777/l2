<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('hands') }}
            {{ Form::text('hands', $weapon->hands, ['class' => 'form-control' . ($errors->has('hands') ? ' is-invalid' : ''), 'placeholder' => 'Hands']) }}
            {!! $errors->first('hands', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('soulshot_count') }}
            {{ Form::text('soulshot_count', $weapon->soulshot_count, ['class' => 'form-control' . ($errors->has('soulshot_count') ? ' is-invalid' : ''), 'placeholder' => 'Soulshot Count']) }}
            {!! $errors->first('soulshot_count', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crystal_type') }}
            {{ Form::text('crystal_type', $weapon->crystal_type, ['class' => 'form-control' . ($errors->has('crystal_type') ? ' is-invalid' : ''), 'placeholder' => 'Crystal Type']) }}
            {!! $errors->first('crystal_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('crystal_count') }}
            {{ Form::text('crystal_count', $weapon->crystal_count, ['class' => 'form-control' . ($errors->has('crystal_count') ? ' is-invalid' : ''), 'placeholder' => 'Crystal Count']) }}
            {!! $errors->first('crystal_count', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('physical_damage') }}
            {{ Form::text('physical_damage', $weapon->physical_damage, ['class' => 'form-control' . ($errors->has('physical_damage') ? ' is-invalid' : ''), 'placeholder' => 'Physical Damage']) }}
            {!! $errors->first('physical_damage', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('weapon_type') }}
            {{ Form::text('weapon_type', $weapon->weapon_type, ['class' => 'form-control' . ($errors->has('weapon_type') ? ' is-invalid' : ''), 'placeholder' => 'Weapon Type']) }}
            {!! $errors->first('weapon_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('magical_damage') }}
            {{ Form::text('magical_damage', $weapon->magical_damage, ['class' => 'form-control' . ($errors->has('magical_damage') ? ' is-invalid' : ''), 'placeholder' => 'Magical Damage']) }}
            {!! $errors->first('magical_damage', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('speed') }}
            {{ Form::text('speed', $weapon->speed, ['class' => 'form-control' . ($errors->has('speed') ? ' is-invalid' : ''), 'placeholder' => 'Speed']) }}
            {!! $errors->first('speed', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('critical') }}
            {{ Form::text('critical', $weapon->critical, ['class' => 'form-control' . ($errors->has('critical') ? ' is-invalid' : ''), 'placeholder' => 'Critical']) }}
            {!! $errors->first('critical', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>