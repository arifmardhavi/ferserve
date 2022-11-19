<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-coklat border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-coklat/70 active:bg-coklat/90 focus:outline-none focus:border-coklat focus:ring focus:ring-yellow-800 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
