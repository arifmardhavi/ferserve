<div x-data="{
    navbars: [{
        href: '{{ route('landing') }}#',
        name: 'Beranda',
    }, {
        href: '{{ route('landing') }}#about',
        name: 'Tentang',
    }, {
        href: '{{ route('landing') }}#order-form',
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
    
        <svg class="svg-inline--fa fa-bars inline md:hidden cursor-pointer" :class="top ? 'text-slate-800' : 'text-white'" @click="modal = true;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path></svg>
    
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