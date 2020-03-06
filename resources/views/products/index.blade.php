@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Products') }}

                    @can('products.create')
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">
                        {{ __('Create') }}
                    </a>
                    @endcan
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
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td width="10px">
                                    @can('products.show')
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="btn btn-sm btn-outline-secondary">
                                        {{ __('See') }}
                                    </a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('products.edit')
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-sm btn-outline-secondary">
                                        {{ __('Edit') }}
                                    </a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('products.destroy')
                                        <button onclick="document.getElementById('delete-product-' + {{ $product->id }}').submit()" class="btn btn-sm btn-danger">
                                            {{ __('Delete') }}
                                        </button>
                                        <form id="delete-product-{{ $product->id }}" class="d-none" method="POST" action="{{ route('products.destroy', $product->id) }}">
                                            @csrf @method('DELETE')
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
