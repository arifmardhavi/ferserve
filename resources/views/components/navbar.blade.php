<div x-data="{
    navbars: [{
        href: '{{ route('landing') }}#',
        name: 'Beranda',
    }, {
        href: '{{ route('landing') }}#about',
        name: 'Tentang',
    }, {
        href: '{{ route('landing') }}#order',
        name: 'Pesan',
    }],
    modal: false,
    top: window.pageYOffset > 150
}">
    <nav class="p-10 fixed top-0 flex items-center justify-between h-12 w-full z-20"
    :class="top && 'bg-kuning'"
    @scroll.window="top = window.pageYOffset > 150">
        <a href="{{ route('landing') }}">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Ferserve" class="h-12">
        </a>
    
        <i class="fas fa-bars text-white inline md:hidden cursor-pointer" x-on:click="modal = true;" :class="top ? 'text-slate-800' : 'text-white'"></i>
    
        <div class="hidden md:flex md:items-center text-white" :class="top ? 'text-slate-800' : 'text-white'">
            <template x-for="navbar in navbars">
                <a :href="navbar.href" class="p-4 text-center hover:text-slate-100" x-text="navbar.name"></a>
            </template>
            <a href="{{ route('login') }}" class="ml-4">
                <x-jet-button>Masuk</x-jet-button>
            </a>
        </div>
    </nav>

    <x-modal modal="modal">
        <div class="grid grid-cols-2">
            <template x-for="navbar in navbars">
                <a :href="navbar.href" class="p-4 text-center hover:text-kuning" x-text="navbar.name" @click="modal = false"></a>
            </template>
            <a href="{{ route('login') }}" class="p-4 text-center">
                <x-jet-button class="w-full justify-center">Masuk</x-jet-button>
            </a>
        </div>
    </x-modal>
</div>