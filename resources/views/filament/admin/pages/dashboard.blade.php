<x-filament::page>
    <x-filament::section>
        <x-slot name="heading">Jumlah Lini Produk</x-slot>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <x-filament::card>
                <div class="text-lg font-bold">Jumlah Menu</div>
                <div class="text-3xl text-primary font-bold">
                    {{ \App\Models\Menu::count() }}
                </div>
            </x-filament::card>

            <x-filament::card>
                <div class="text-lg font-bold">Jumlah Promo</div>
                <div class="text-3xl text-primary font-bold">
                    {{ \App\Models\Promo::count() }}</div>
            </x-filament::card>

            <x-filament::card>
                <div class="text-lg font-bold">Jumlah Kategori</div>
                <div class="text-3xl text-primary font-bold">
                    {{ \App\Models\Category::count() }}
                </div>
            </x-filament::card>
        </div>
    </x-filament::section>
    <x-filament::section>
    <x-slot name="heading">Jumlah Konten Website</x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-filament::card>
            <div class="text-lg font-bold">Jumlah Berita</div>
            <div class="text-3xl text-primary font-bold">
                {{ \App\Models\Berita::count() }}
            </div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-bold">Jumlah Cerita</div>
            <div class="text-3xl text-primary font-bold">
                {{ \App\Models\Cerita::count() }}
            </div>
        </x-filament::card>
    </div>
</x-filament::section>
<x-filament::section>
    <x-slot name="heading">Jumlah Roastery & Merchandise</x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-filament::card>
            <div class="text-lg font-bold">Jumlah Roastery</div>
            <div class="text-3xl text-primary font-bold">
                {{ \App\Models\Roastery::count() }}
            </div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-bold">Jumlah Merchandise</div>
            <div class="text-3xl text-primary font-bold">
                {{ \App\Models\Merchandise::count() }}
            </div>
        </x-filament::card>
    </div>
</x-filament::section>
<x-filament::section>
    <x-slot name="heading">Jumlah Find Us & User</x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-filament::card>
            <div class="text-lg font-bold">Jumlah Lokasi Find Us</div>
            <div class="text-3xl text-primary font-bold">
                {{ \App\Models\FindUs::count() }}
            </div>
        </x-filament::card>

        <x-filament::card>
            <div class="text-lg font-bold">Jumlah Pengguna</div>
            <div class="text-3xl text-primary font-bold">
                {{ \App\Models\User::count() }}
            </div>
        </x-filament::card>
    </div>
</x-filament::section>

</x-filament::page>