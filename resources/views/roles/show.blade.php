@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Role') . " No. " . $role->id }}
                </div>

                <div class="card-body">
                    <p><strong>{{ __('Name') }}</strong> {{ $role->name }}</p>
                    <p><strong>{{ __('Slug') }}</strong> {{ $role->slug }}</p>
                    <p><strong>{{ __('Description') }}</strong> {{ $role->description }}</p>
                    <p><strong>{{ __('Special permission') }}</strong> {{ $role->special ?: 'Default' }}</p>

                    <div>
                        <a href="{{ route('roles.index') }}">{{ __('Return to Roles') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
