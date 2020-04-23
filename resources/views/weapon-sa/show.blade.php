@extends('layouts.app')

@section('template_title')
    {{ $weaponsSa->name ?? 'Show Weapons Sa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Weapons Sa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('weapon-sa.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $weaponsSa->item_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredient Id:</strong>
                            {{ $weaponsSa->ingredient_id }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $weaponsSa->quantity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
