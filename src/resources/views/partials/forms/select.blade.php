<div class="row mb-3">
    <label for="{{ $field }}" class="col-md-4 col-form-label text-md-end">
        {{ isset($label) ? $label : ucfirst($field) }}
    </label>

    <div class="col-md-6">
        <select
            id="{{ $field }}"
            name="{{ $field }}"
            class="form-control @error($field) is-invalid @enderror"
            @if (isset($required) && $required) required @endif>

            @foreach ($items as $item)
                <option
                    value="{{ $item->value }}"
                    @if (isset($item->value) && $item->value == $item) selected @endif>
                    {{ $item->label }}
                </option>
            @endforeach
        </select>

        @error($field)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>