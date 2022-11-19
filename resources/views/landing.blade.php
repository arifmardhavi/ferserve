<x-guest-layout>
    <x-navbar />

    <main>
        <section class="min-h-screen bg-no-repeat bg-cover p-10 text-white flex" style="background: url({{ asset('storage/images/main.jpg') }}) no-repeat; background-size: cover;">
            <div class="w-2/3 md:w-1/3 mt-36 md:mt-28" data-aos="fade-right">
                <h1 class="text-3xl font-bold mb-4">FERSERVE</h1>
                <h2 class="text-lg font-semibold mb-2">Khas, Aromatik dan Nikmat</h2>
                <p>Rasakan sensasi baru dalam menikmati kopimu lewat fermentasi biji kopi berkualitas dengan mutu terjamin</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 items-center justify-between gap-4 mt-4 text-center">
                    <a href="#about" class="text-kuning underline">Selengkapnya</a>
                    <a href="#order" class="bg-kuning hover:bg-kuning/80 py-2 px-4 text-slate-800 rounded-full">Pesan Sekarang</a>
                </div>
            </div>
        </section>

        <section class="bg-kuning" id="about">
            <img src="{{ asset('storage/images/coffee.png') }}" alt="Kopi" class="w-full absolute -mt-12 md:-mt-24 min-h-[8rem] max-h-72">
            <div class="relative flex justify-between pt-20">
                <span class="pl-10 pr-4 py-4 bg-abu uppercase text-xl font-bold" data-aos="fade-right">
                    Tentang Ferserve
                </span>
                <i class="fas fa-chevron-right text-2xl bg-coklat p-4 rounded-full text-kuning aspect-square mr-10 hidden md:flex items-center justify-center"></i>
            </div>

            <div class="p-10">
                <div class="flex justify-between" data-aos="fade-down">
                    <p class="w-1/2">FERSERVE menyediakan jasa fermentasi kopi secara terkontrol dengan menggunakan fermentasi kit yang diproduksi sendiri.</p>
                </div>
                <div class="flex flex-row-reverse justify-between mt-6" data-aos="fade-up">
                    <p class="w-1/3 text-right">Fermentasi kit terdiri dari bioreaktor dan mikroorganisme spesifik, yaitu yeast dan bakteri asam laktat yang diisolasi dari buah tropis hingga menghasilkan green bean yang telah disortasi.</p>
                </div>
            </div>

            <img src="{{ asset('storage/images/tempeh.png') }}" alt="Tempeh" class="w-full">
        </section>

        <section class="bg-kuning min-h-screen" id="order">
            <img src="{{ asset('storage/images/coffee.png') }}" alt="Kopi" class="w-full absolute -mt-8 md:-mt-20 max-h-72">
            <div class="relative flex justify-between pt-20">
                <span class="pl-10 pr-4 py-4 bg-abu uppercase text-xl font-bold" data-aos="fade-right">
                    PRODUK FERSERVE
                </span>
                <i class="fas fa-chevron-right text-2xl bg-coklat p-4 rounded-full text-kuning aspect-square mr-10 hidden md:flex items-center justify-center"></i>
            </div>

            <div class="p-10 mt-4 text-center" data-aos="zoom-in">
                <h3 class="uppercase text-coklat text-2xl font-semibold drop-shadow-lg">Jasa Fermentasi Kopi</h3>

                <div class="mt-12 mb-8">
                    <span class="bg-coklat text-kuning py-2 px-12 rounded-full text-lg sm:text-2xl md:text-5xl">Rp 30.000,-</span>
                </div>

                <span class="text-coklat uppercase">/ kg Green Bean</span>

                <h4 class="uppercase mt-8 text-lg md:txt-2xl font-bold">Untuk segala jenis kopi</h4>
            </div>
        </section>

        <section class="min-h-screen bg-abu" id="order">
            <div class="p-10" style="background: url({{ asset('storage/images/beans.png') }});" data-aos="fade-down">
                <h2 class="text-xl text-coklat uppercase text-center font-bold tracking-wider underline">Order</h2>
    
                <form action="{{ route('order') }}" method="POST" class="my-4">
                    @csrf
                    <x-jet-validation-errors class="mb-4" />
    
                    <div class="mb-4">
                        <x-jet-label for="name" value="{{ __('Nama') }}" class="text-black font-semibold" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
    
                    <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4 mb-4">
                        <div class="sm:col-span-2 md:col-span-4">
                            <x-jet-label for="address" value="{{ __('Alamat') }}" class="text-black font-semibold" />
                            <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                        </div>
    
                        <div>
                            <x-jet-label for="postal_code" value="{{ __('Kode Pos') }}" class="text-black font-semibold" />
                            <x-jet-input id="postal_code" class="block mt-1 w-full" type="number" name="postal_code" :value="old('postal_code')" required />
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <x-jet-label for="phone" value="{{ __('No. HP') }}" class="text-black font-semibold" />
                        <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                    </div>
    
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <x-jet-label for="weight" value="{{ __('Berat Biji Ceri Kopi (g)') }}" class="text-black font-semibold" />
                            <x-jet-input id="weight" class="block mt-1 w-full" type="number" name="weight" :value="old('weight')" required />
                        </div>
    
                        <div>
                            <x-jet-label for="fruit_id" value="{{ __('Buah') }}" class="text-black font-semibold" />
                            <x-select id="fruit_id" class="block mt-1 w-full" name="fruit_id" required >
                                <x-slot:options>
                                    @foreach ($fruits as $fruit)
                                        <option value="{{ $fruit->id }}" @selected($fruit->id === old('fruit_id'))>{{ $fruit->name }}</option>
                                    @endforeach
                                </x-slot>
                            </x-select>
                        </div>
    
                        <div>
                            <x-jet-label for="origin" value="{{ __('Asal Tanam') }}" class="text-black font-semibold" />
                            <x-jet-input id="origin" class="block mt-1 w-full" type="text" name="origin" :value="old('origin')" required />
                        </div>
                    </div>
    
                    <div class="mb-4">
                        <x-jet-label for="note" value="{{ __('Catatan') }}" class="text-black font-semibold" />
                        <x-textarea id="note" class="block mt-1 w-full" name="note" :value="old('note')" />
                    </div>
    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                        <div>
                            <x-jet-label for="delivery_id" value="{{ __('Pilihan Pengiriman') }}" class="text-black font-semibold" />
                            @foreach ($deliveries as $key => $delivery)
                            <div class="flex items-center gap-4 mb-4">
                                <x-jet-input id="delivery_id{{ $key }}" type="radio" name="delivery_id" :value="$delivery->id" :checked="old('delivery_id') === $delivery->id" required />
                                <label for="delivery_id{{ $key }}">{{ $delivery->method }}</label>
                            </div>
                            @endforeach
                            
                            {{-- <x-select id="delivery" class="block mt-1 w-full" name="delivery" required >
                                <x-slot:options>
                                    @foreach ($deliveries as $delivery)
                                        <option value="{{ $delivery->id }}" @selected($delivery->id === old('delivery'))>{{ $delivery->method }}</option>
                                    @endforeach
                                </x-slot>
                            </x-select> --}}
                        </div>
                        
                        <div>
                            <x-jet-label for="take_id" value="{{ __('Pilihan Pengambilan') }}" class="text-black font-semibold" />
                            @foreach ($takes as $key => $take)
                            <div class="flex items-center gap-4 mb-4">
                                <x-jet-input id="take_id{{ $key }}" type="radio" name="take_id" :value="$take->id" :checked="old('take_id') === $take->id" required />
                                <label for="take_id{{ $key }}">{{ $take->method }}</label>
                            </div>
                            @endforeach
                            {{-- <x-select id="take" class="block mt-1 w-full" name="take" required >
                                <x-slot:options>
                                    @foreach ($takes as $take)
                                        <option value="{{ $take->id }}" @selected($take->id === old('take'))>{{ $take->method }}</option>
                                    @endforeach
                                </x-slot>
                            </x-select> --}}
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <x-jet-button class="rounded-full">Pesan Sekarang</x-jet-button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-coklat text-white p-10 grid grid-cols-1 sm:grid-cols-2 gap-8">
        <div class="flex divide-x-2 divide-white gap-4">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-20">
            <div class="pl-4">
                <h3>Ferserve</h3>
                <p>
                    Jl. blablabla<br>
                    Kota Surabaya 61101
                </p>
            </div>
        </div>

        <div>
            <h4 class="mb-4">Lebih dekat dengan kami melalui:</h4>

            <div class="flex items-center gap-4 text-xl">
                <a href="https://instagram.com/blablabla" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://vt.tiktok.com/blablabla" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://wa.me/+120938231" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </footer>
</x-guest-layout>