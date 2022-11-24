<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-8 bg-white border-b border-gray-200">
                    <x-table class="w-full">
                        <x-slot:thead>
                            <x-tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Berat</th>
                                <th>Buah</th>
                                <th>Kirim</th>
                                <th>Antar</th>
                                <th>Tanggal Pesan</th>
                            </x-tr>
                        </x-slot>
                        <tbody>
                            @forelse ($orders as $order)
                                <x-tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{!! $order->name.'<br>'.$order->phone !!}</td>
                                    <td>{{ $order->address.' Kode pos '.$order->postal_code }}</td>
                                    <td>{{ $order->mass }}</td>
                                    <td>{{ $order->fruit->name }}</td>
                                    <td>{{ $order->delivery->method }}</td>
                                    <td>{{ $order->take->method }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </x-tr>
                            @empty
                                <x-tr>
                                    <td colspan="99">Tidak ada pesanan saat ini</td>
                                </x-tr>
                            @endforelse
                        </tbody>
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>