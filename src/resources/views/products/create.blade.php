@php use App\Presenters\SelectItem; @endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        @include('partials.forms.input', [
                            'field' => 'name',
                            'value' => old('name'),
                            'autocomplete' => 'name',
                            'required' => true,
                            'autofocus' => true,
                            'message' => isset($message) ?? $message
                        ])

                        @include('partials.forms.input', [
                            'label' => 'SKU',
                            'field' => 'sku',
                            'value' => old('sku'),
                            'required' => true,
                            'message' => isset($message) ?? $message
                        ])

                        @include('partials.forms.input', [
                            'field' => 'price',
                            'type' => 'number',
                            'step' => 0.01,
                            'value' => old('price'),
                            'required' => true,
                            'message' => isset($message) ?? $message
                        ])

                        @include('partials.forms.select', [
                            'name' => 'Category',
                            'field' => 'picture',
                            'items' => array_map(fn($c) => new SelectItem($c, $c . '.png'), $categories)
                        ])

                        @include('partials.forms.text-area', [
                            'field' => 'description',
                            'type' => 'number',
                            'value' => old('description'),
                            'required' => true,
                            'message' => isset($message) ?? $message
                        ])

                        @include('partials.forms.register-button')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
