@props(['label'])

<button {!! $attributes->merge([
    'class' => 'inline-flex justify-center w-full border-none sm:ml-1 sm:w-auto btn',
    'role' => 'button',
    'aria-label' => $label ?? 'Tombol',
]) !!}>
    {{ $slot }}
</button>
