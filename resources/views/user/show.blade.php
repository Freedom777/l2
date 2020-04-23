@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Second Name:</strong>
                            {{ $user->second_name }}
                        </div>

                        @if ($user->contacts->count())
                        <div class="form-group">
                            <strong>Phones:</strong>
                            @foreach ($user->contacts as $phone)
                                <br />{{ $phone['value'] }}
                            @endforeach
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
