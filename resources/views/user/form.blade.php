<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('second_name') }}
            {{ Form::text('second_name', $user->second_name, ['class' => 'form-control' . ($errors->has('second_name') ? ' is-invalid' : ''), 'placeholder' => 'Second Name']) }}
            {!! $errors->first('second_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div id="phones-list" class="form-group">
            <label class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
                <div class="phone-list">
                    @if (empty($user['contacts']))
                    <div class="input-group phone-div">
                        <input type="text" name="phones[1]" class="form-control phone-input" placeholder="+9 (999) 999 9999" />
                    </div>
                    @else
                        @foreach($user['contacts'] as $index => $phone)
                            <div data-index="{{ $index + 1 }}}" class="input-group phone-div">
                                <input type="text" name="phones[{{ $index + 1 }}}]" class="form-control phone-input" placeholder="+9 (999) 999 9999" value="{{ $phone['value'] }}" />
                            </div>
                        @endforeach
                    @endif
                </div>
                <button id="add-phone" type="button" class="btn btn-success btn-sm btn-add-phone"><span class="glyphicon glyphicon-plus"></span> Add Phone</button>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
