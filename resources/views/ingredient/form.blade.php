<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('item_id') }}
            {{ Form::text('item_id', $ingredient->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rate') }}
            {{ Form::text('rate', $ingredient->rate, ['class' => 'form-control' . ($errors->has('rate') ? ' is-invalid' : ''), 'placeholder' => 'Rate']) }}
            {!! $errors->first('rate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('material') }}
            {{ Form::text('material', $ingredient->material, ['class' => 'form-control' . ($errors->has('material') ? ' is-invalid' : ''), 'placeholder' => 'Material']) }}
            {!! $errors->first('material', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $ingredient->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('recipe_id') }}
            {{ Form::text('recipe_id', $ingredient->recipe_id, ['class' => 'form-control' . ($errors->has('recipe_id') ? ' is-invalid' : ''), 'placeholder' => 'Recipe Id']) }}
            {!! $errors->first('recipe_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>