@extends('layouts.app')

@section('template_title')
    {{ $weapon->name ?? 'Show Weapon' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Weapon</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('weapon.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Hands:</strong>
                            {{ $weapon->hands }}
                        </div>
                        <div class="form-group">
                            <strong>Soulshot Count:</strong>
                            {{ $weapon->soulshot_count }}
                        </div>
                        <div class="form-group">
                            <strong>Crystal Type:</strong>
                            {{ $weapon->crystal_type }}
                        </div>
                        <div class="form-group">
                            <strong>Crystal Count:</strong>
                            {{ $weapon->crystal_count }}
                        </div>
                        <div class="form-group">
                            <strong>Physical Damage:</strong>
                            {{ $weapon->physical_damage }}
                        </div>
                        <div class="form-group">
                            <strong>Weapon Type:</strong>
                            {{ $weapon->weapon_type }}
                        </div>
                        <div class="form-group">
                            <strong>Magical Damage:</strong>
                            {{ $weapon->magical_damage }}
                        </div>
                        <div class="form-group">
                            <strong>Speed:</strong>
                            {{ $weapon->speed }}
                        </div>
                        <div class="form-group">
                            <strong>Critical:</strong>
                            {{ $weapon->critical }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
