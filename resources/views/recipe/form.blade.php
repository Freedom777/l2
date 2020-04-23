<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('recipe_id') }}
            {{ Form::text('recipe_id', $recipe->recipe_id, ['class' => 'form-control' . ($errors->has('recipe_id') ? ' is-invalid' : ''), 'placeholder' => 'Recipe Id']) }}
            {!! $errors->first('recipe_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('item_id') }}
            {{ Form::text('item_id', $recipe->item_id, ['class' => 'form-control' . ($errors->has('item_id') ? ' is-invalid' : ''), 'placeholder' => 'Item Id']) }}
            {!! $errors->first('item_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('level') }}
            {{ Form::text('level', $recipe->level, ['class' => 'form-control' . ($errors->has('level') ? ' is-invalid' : ''), 'placeholder' => 'Level']) }}
            {!! $errors->first('level', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mp') }}
            {{ Form::text('mp', $recipe->mp, ['class' => 'form-control' . ($errors->has('mp') ? ' is-invalid' : ''), 'placeholder' => 'Mp']) }}
            {!! $errors->first('mp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('output') }}
            {{ Form::text('output', $recipe->output, ['class' => 'form-control' . ($errors->has('output') ? ' is-invalid' : ''), 'placeholder' => 'Output']) }}
            {!! $errors->first('output', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('npc_fee') }}
            {{ Form::text('npc_fee', $recipe->npc_fee, ['class' => 'form-control' . ($errors->has('npc_fee') ? ' is-invalid' : ''), 'placeholder' => 'Npc Fee']) }}
            {!! $errors->first('npc_fee', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>