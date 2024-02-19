<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark rounded-0']) }}>
    {{ $slot }}
</button>
