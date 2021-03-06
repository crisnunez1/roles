@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Users') }}
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>{{ __('Name') }}</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td width="10px">
                                    @can('users.show')
                                    <a href="{{ route('users.show', $user->id) }}"
                                        class="btn btn-sm btn-outline-secondary">
                                        {{ __('See') }}
                                    </a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="btn btn-sm btn-outline-secondary">
                                        {{ __('Edit') }}
                                    </a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('users.destroy')
                                        <button onclick="document.getElementById('delete-user-' + {{ $user->id }}).submit()" class="btn btn-sm btn-danger">
                                            {{ __('Delete') }}
                                        </button>
                                        <form id="delete-user-{{ $user->id }}" class="d-none" method="POST" action="{{ route('users.destroy', $user->id) }}">
                                            @csrf @method('DELETE')
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
