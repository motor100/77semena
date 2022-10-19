@props(['value'])

<label {{ $attributes->merge(['class' => 'block label']) }}>
    {{ $value ?? $slot }}
</label>
