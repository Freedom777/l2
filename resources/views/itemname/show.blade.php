@extends('layouts.app')

@section('template_title')
    {{ $itemname->name ?? 'Show Itemname' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Itemname</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('itemname.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $itemname->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $itemname->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
