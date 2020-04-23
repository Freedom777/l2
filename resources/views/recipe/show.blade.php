@extends('layouts.app')

@section('template_title')
    {{ $recipe->name ?? 'Show Recipe' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Recipe</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recipe.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Recipe Id:</strong>
                            {{ $recipe->recipe_id }}
                        </div>
                        <div class="form-group">
                            <strong>Item Id:</strong>
                            {{ $recipe->item_id }}
                        </div>
                        <div class="form-group">
                            <strong>Level:</strong>
                            {{ $recipe->level }}
                        </div>
                        <div class="form-group">
                            <strong>Mp:</strong>
                            {{ $recipe->mp }}
                        </div>
                        <div class="form-group">
                            <strong>Output:</strong>
                            {{ $recipe->output }}
                        </div>
                        <div class="form-group">
                            <strong>Npc Fee:</strong>
                            {{ $recipe->npc_fee }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
