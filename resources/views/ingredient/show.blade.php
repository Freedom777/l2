@extends('layouts.app')

@section('template_title')
    {{ $ingredient->name ?? 'Show Ingredient' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingredient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingredient.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $ingredient->item_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rate:</strong>
                            {{ $ingredient->rate }}
                        </div>
                        <div class="form-group">
                            <strong>Material:</strong>
                            {{ $ingredient->material }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $ingredient->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Recipe Id:</strong>
                            {{ $ingredient->recipe_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
