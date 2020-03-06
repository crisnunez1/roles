@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Edit User') . " No. " . $user->id }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @method('PUT')

                        @include('users.partials._form', ['btnText' => 'Update'])

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
