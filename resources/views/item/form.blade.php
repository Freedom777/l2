<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $item->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $item->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('material_type') }}
            {{ Form::text('material_type', $item->material_type, ['class' => 'form-control' . ($errors->has('material_type') ? ' is-invalid' : ''), 'placeholder' => 'Material Type']) }}
            {!! $errors->first('material_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('icon') }}
            {{ Form::text('icon', $item->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}
            {!! $errors->first('icon', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('weight') }}
            {{ Form::text('weight', $item->weight, ['class' => 'form-control' . ($errors->has('weight') ? ' is-invalid' : ''), 'placeholder' => 'Weight']) }}
            {!! $errors->first('weight', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $item->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slot_bit_type') }}
            {{ Form::text('slot_bit_type', $item->slot_bit_type, ['class' => 'form-control' . ($errors->has('slot_bit_type') ? ' is-invalid' : ''), 'placeholder' => 'Slot Bit Type']) }}
            {!! $errors->first('slot_bit_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>