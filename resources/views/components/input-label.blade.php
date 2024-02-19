@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $value ?? $slot }}
    <span class="text-danger fw-bold">*</span>
</label>
