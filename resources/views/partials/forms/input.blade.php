<div class="mb-4">
    <label for="{{ $id }}" class="block text-gray-700 text-sm font-bold mb-2">{{ __($label) }}</label>
    <input
        id="{{ $id }}"
        type="{{ $type ?? 'text' }}"
        class="form-input mt-1 block w-full @error($id) is-invalid @enderror"
        name="{{ $name ?? $id }}"
        value="{{ old($id) }}"
        @if(isset($required) && $required)required @endif()
        @if(isset($autocomplete))autocomplete="{{ $autocomplete }}"@endif
        autofocus>
    @error($id)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
