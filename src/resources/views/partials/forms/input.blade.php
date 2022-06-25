<div class="row mb-3">
    <label for="{{ $field }}" class="col-md-4 col-form-label text-md-end">
        {{ isset($label) ? $label : ucfirst($field) }}
    </label>

    <div class="col-md-6">
        <input id="{{ $field }}"
            type="{{ isset($type) ? $type : 'text' }}"
            class="form-control @error($field) is-invalid @enderror"
            name="{{ $field }}"
            @isset($value) value="{{ $value }}" @endisset
            autocomplete="{{ isset($autocomplete) ? $autocomplete : $field }}"
            @isset($step) step="{{ $step }}" @endisset
            @if (isset($required) && $required) required @endif
            @if (isset($autofocus) && $autofocus) autofocus @endif>

        @error($field)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>