@extends('layouts.app')

@section('template_title')
    {{ $item->name ?? 'Show Item' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Item</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $item->name }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $item->type }}
                        </div>
                        <div class="form-group">
                            <strong>Material Type:</strong>
                            {{ $item->material_type }}
                        </div>
                        <div class="form-group">
                            <strong>Icon:</strong>
                            {{ $item->icon }}
                        </div>
                        <div class="form-group">
                            <strong>Weight:</strong>
                            {{ $item->weight }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $item->price }}
                        </div>
                        <div class="form-group">
                            <strong>Slot Bit Type:</strong>
                            {{ $item->slot_bit_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
