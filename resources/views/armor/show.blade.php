@extends('layouts.app')

@section('template_title')
    {{ $armor->name ?? 'Show Armor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Armor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('armor.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Body Part:</strong>
                            {{ $armor->body_part }}
                        </div>
                        <div class="form-group">
                            <strong>Crystallizable:</strong>
                            {{ $armor->crystallizable }}
                        </div>
                        <div class="form-group">
                            <strong>Crystal Type:</strong>
                            {{ $armor->crystal_type }}
                        </div>
                        <div class="form-group">
                            <strong>Crystal Count:</strong>
                            {{ $armor->crystal_count }}
                        </div>
                        <div class="form-group">
                            <strong>Armor Type:</strong>
                            {{ $armor->armor_type }}
                        </div>
                        <div class="form-group">
                            <strong>Physical Defense:</strong>
                            {{ $armor->physical_defense }}
                        </div>
                        <div class="form-group">
                            <strong>Magical Defense:</strong>
                            {{ $armor->magical_defense }}
                        </div>
                        <div class="form-group">
                            <strong>Mp Bonus:</strong>
                            {{ $armor->mp_bonus }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
