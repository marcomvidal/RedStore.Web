@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @include('partials.forms.input', [
                            'label' => 'Name',
                            'field' => 'name',
                            'value' => old('name'),
                            'message' => isset($message) ?? $message,
                            'required' => true,
                            'autofocus' => true,
                        ])

                        @include('partials.forms.input', [
                            'label' => 'E-mail Address',
                            'type' => 'email',
                            'field' => 'email',
                            'value' => old('email'),
                            'message' => isset($message) ?? $message,
                            'required' => true
                        ])

                        @include('partials.forms.input', [
                            'label' => 'Password',
                            'type' => 'password',
                            'field' => 'password',
                            'autocomplete' => 'new-password',
                            'message' => isset($message) ?? $message,
                            'required' => true
                        ])

                        @include('partials.forms.input', [
                            'label' => 'Confirm Password',
                            'type' => 'password',
                            'field' => 'password_confirmation',
                            'autocomplete' => 'new-password',
                            'message' => isset($message) ?? $message,
                            'required' => true
                        ])

                        @include('partials.forms.register-button')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
