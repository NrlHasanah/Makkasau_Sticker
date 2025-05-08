<x-layout>
    <section class="relative bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/bg-home.png') }}');">
        <div class="absolute inset-0 bg-[#0A3D62]/10"></div>
        <div class="relative  mx-auto px-18 py-22 text-white">
            <p class="text-lg text-[#FDCB58] font-semibold mb-2">Selamat Datang</p>
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
                Temukan Plat Kendaraan <br>
                Custom untuk Setiap <br>
                Kebutuhan
            </h1>
            <p class="text-base md:text-lg text-gray-200 max-w-3xl">
                Makkasau Sticker menyediakan jasa pembuatan custom plat kendaraan premium dengan kualitas terbaik.
                Kami memiliki komitmen untuk memberikan layanan terbaik sejak tahun 2013.
            </p>

            <div class="mt-10 md:mt-26 flex flex-wrap gap-4 md:gap-24 justify-center">
                <!-- Tombol -->
                <a href="#" onclick="openModal()"
                    class="bg-[#FDCB58] text-black font-semibold px-6 py-3 rounded-full hover:opacity-90 transition">
                    TENTANG KAMI
                </a>

                <!-- Modal Layer -->
                <div id="tentangModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 z-50">
                    <div class="bg-white rounded-xl p-8 max-w-2xl text-black relative transform scale-95 transition-transform duration-300">
                        <h2 class="text-2xl font-bold mb-4">Tentang Makkasau Sticker</h2>
                        <p class="mb-4">
                            Makkasau Sticker adalah usaha yang berlokasi di Sulawesi Selatan, tepatnya di Pangkajene, Kabupaten Sidrap,
                            yang telah beroperasi sejak tahun 2013 dengan komitmen memberikan layanan terbaik di bidang pembuatan custom plat kendaraan premium dan berbagai produk terkait dengan kualitas terbaik.
                            Dengan pengalaman sekitar 10 tahun, Makkasau Sticker telah mengukuhkan diri sebagai penyedia jasa profesional yang ahli di bidangnya.
                        </p>
                        <p class="mb-4">
                            Layanan yang disediakan Makkasau Sticker meliputi: <br>
                            - Pembuatan plat nomor kendaraan custom dengan bahan akrilik premium <br>
                            - Pembuatan stiker berbagai jenis <br>
                            - Plakat <br>
                            - Nomor rumah dari bahan akrilik <br>
                            - Huruf timbul <br>
                            - Nama tag <br>
                            - Cutting stiker <br>
                            - Cutting laser
                        </p>
                        <p class="mb-4">
                            Makkasau Sticker memiliki keunggulan berupa alat pres plat yang telah dimodifikasi sendiri,
                            yang memungkinkan proses produksi berjalan lebih efisien dan berkualitas tinggi.
                            Selain itu, mereka juga menyediakan jasa pelatihan bagi orang-orang yang ingin belajar tentang proses pembuatan plat nomor dan stiker.
                        </p>
                        <p class="mb-4">
                            Alamat usaha ini berada di Jalan Andi Makkasau, depan SD Negeri 11, Pangkajene, Sidrap, Sulawesi Selatan.
                            Mereka juga aktif memasarkan produk dan layanan melalui media sosial seperti Instagram.
                        </p>
                        <p>
                            Dengan pengalaman lebih dari satu dekade, inovasi dalam alat produksi, serta ragam layanan lengkap
                            mulai dari plat nomor kendaraan hingga cutting laser, Makkasau Sticker menjadi pilihan utama di Sulawesi Selatan.
                        </p>
                        <!-- Tombol Close -->
                        <button onclick="closeModal()"
                            class="absolute top-2 right-2 text-gray-600 hover:text-black text-xl">
                            ✖
                        </button>
                    </div>
                </div>

                <!-- Script -->
                <script>
                    function openModal() {
                        const modal = document.getElementById('tentangModal');
                        modal.classList.remove('pointer-events-none', 'opacity-0');
                        modal.firstElementChild.classList.remove('scale-95');
                    }

                    function closeModal() {
                        const modal = document.getElementById('tentangModal');
                        modal.classList.add('opacity-0');
                        modal.firstElementChild.classList.add('scale-95');
                        setTimeout(() => {
                            modal.classList.add('pointer-events-none');
                        }, 300);
                    }
                </script>

                <a href="https://wa.link/nro7ao" target="_blank"
                    class="border border-white text-white font-semibold px-6 py-3 rounded-full hover:bg-white hover:text-black transition">
                    HUBUNGI KAMI
                </a>
            </div>
        </div>
    </section>

    <section class="bg-[#f8f9fa] py-18">
        <div class="max-w-xl mx-auto text-center px-4">
            <p class="text-[#FDCB58] font-semibold">STATUS PESANAN</p>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#0A3D62]">Lacak Pesanan Anda</h2>
            <div class="w-16 h-1 bg-[#FDCB58] mx-auto mt-2 mb-6 rounded-full"></div>
            <p class="text-gray-600 mb-12">
                Masukkan ID pesanan anda untuk melihat status pemesanan produk custom plat kendaraan
            </p>
            <div class="bg-white shadow-md rounded-xl px-6 py-8">
                <form method="GET" action="{{ route('order.track') }}">
                    <input type="text" name="order_id" placeholder="Masukkan ID Pesanan (contoh: MS-2025xxxxxxx)"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md mb-6 text-sm focus:outline-none focus:ring-2 focus:ring-[#0A3D62]"
                        required />
                    <button type="submit"
                        class="w-full bg-[#0A3D62] text-white font-semibold py-3 rounded-md hover:opacity-90 transition">
                        CEK STATUS PESANAN
                    </button>
                </form>
            </div>
        </div>
    </section>


    <section class="bg-[#f8f9fa] py-20">
        <div class="max-w-7xl mx-auto px-14 text-center">
            <p class="text-[#FDCB58] font-semibold">HASIL KARYA KAMI</p>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#0A3D62]">Galeri Produk</h2>
            <div class="w-16 h-1 bg-[#FDCB58] mx-auto mt-2 mb-6 rounded-xl"></div>
            <p class="text-gray-600 mb-12 max-w-xl mx-auto">
                Temukan koleksi plat kendaraan kustom kami dengan material berkualitas tinggi
            </p>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                @foreach ($featuredProducts as $product)
                <div class="bg-white rounded-xl px-2 py-4 shadow-md">
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                            class="w-full h-48 object-cover rounded-t-xl rounded-b-xl">
                    </div>
                    <div class="px-3">
                        <h3 class="text-[#0A3D62] font-bold text-xl mb-2 text-left">{{ $product->title }}</h3>
                        <p class="text-base text-gray-600 text-left">
                            {{ $product->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-14 text-center">
            <p class="text-[#FDCB58] font-semibold">Layanan</p>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#0A3D62]">Layanan Custom Plat kendaraan</h2>
            <div class="w-16 h-1 bg-[#FDCB58] mx-auto mt-2 mb-6 rounded-full"></div>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
                Makkasau Stiker menawarkan pembuatan custom plat kendaraan berkualitas premium dengan berbagai pilihan
            </p>

            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2  md:grid-cols-3">
                <div class="bg-[#f8f9fa] rounded-xl px-8 py-8 shadow-md text-center">
                    <div class="mb-8">
                        <img src="{{ asset('images/icon-car.png') }}" alt="Plat Mobil" class="mx-auto w-16 h-16">
                    </div>
                    <h3 class="text-[#0A3D62] font-bold text-xl mb-8">Plat Mobil Custom</h3>
                    <p class="text-base text-gray-600">
                        Pembuatan Custom plat nomor mobil dengan berbagai pilihan design, ukuran, dan material premium
                        yang tahan lama.
                    </p>
                </div>
                <div class="bg-[#f8f9fa] rounded-xl px-8 py-8 shadow-md text-center">
                    <div class="mb-8">
                        <img src="{{ asset('images/icon-motor.png') }}" alt="Plat Motor" class="mx-auto w-16 h-16">
                    </div>
                    <h3 class="text-[#0A3D62] font-bold text-xl mb-8">Plat Motor Custom</h3>
                    <p class="text-base text-gray-600">
                        Design dan cetak plat nomor motor custom dengan ukuran standar maupun khusus sesuai kebutuhan
                        anda.
                    </p>
                </div>
                <div class="bg-[#f8f9fa] rounded-xl px-8 py-8 shadow-md text-center">
                    <div class="mb-8">
                        <img src="{{ asset('images/icon-desain.png') }}" alt="Custom Design" class="mx-auto w-16 h-16">
                    </div>
                    <h3 class="text-[#0A3D62] font-bold text-xl mb-8">Custom design</h3>
                    <p class="text-base text-gray-600">
                        Layanan design custom plat kendaraan dengan pilihan font, warna, dan grafis sesuai keinginan
                        pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-[#FDCB58] font-semibold">Informasi</p>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#0A3D62]">Informasi Bisnis</h2>
            <div class="w-16 h-1 bg-[#FDCB58] mx-auto mt-2 mb-6 rounded-full"></div>
            <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
                Temukan kami dan dapatkan layanan terbaik dari Makkasau Stiker
            </p>
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 text-left">
                <div class="bg-[#f8f9fa] p-6 rounded-xl shadow-md w-[70%] max-w-[400px] mx-auto">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-[#FDCB58] p-2 rounded-full ">
                            <img src="{{ asset('images/icon-clock.png') }}" class="w-5 h-5" alt="Jam Icon">
                        </div>
                        <h3 class="text-[#0A3D62] font-bold text-xl">Jam Operasional</h3>
                    </div>
                    <ul class="text-sm text-[#0A3D62] divide-y divide-gray-300">
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Senin</span>
                            <span>09.00 - 17.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Selasa</span>
                            <span>09.00 - 17.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Rabu</span>
                            <span>09.00 - 17.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Kamis</span>
                            <span>09.00 - 17.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Jumat</span>
                            <span>09.00 - 17.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Sabtu</span>
                            <span>09.00 - 17.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span class="font-bold">Minggu</span>
                            <span>09.00 - 17.00</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#f8f9fa] p-6 rounded-xl shadow-md w-[85%] max-w-[400px] mx-auto">
                    <div class="flex justify-center mb-10 relative">
                        <div
                            class="bg-[#FDCB58] p-2 rounded-full absolute left-1/6 -translate-x-1/2 top-1/2 -translate-y-1/2">
                            <img src="{{ asset('images/icon-map.png') }}" class="w-5 h-5" alt="Icon Lokasi">
                        </div>
                        <h3 class="text-[#0A3D62] font-bold text-xl">Lokasi Kami</h3>
                    </div>
                    <p class="text-md font-semibold text-[#0A3D62] mb-4 leading-relaxed">
                        <a href="https://maps.app.goo.gl/6ksbndkAUREoQUpN7"
                        target="_blank" class="text-[#0A3D62] hover:underline">
                            Jl. Andi Makkasau No.20, Pangkajene,<br>
                            Kec. Maritengngae, Kabupaten<br>
                            Sidenreng Rappang, Sulawesi Selatan<br>
                            91611
                        </a>
                    </p>
                    <div className="mt-4 rounded-lg overflow-hidden">
                        <iframe
                            title="Lokasi Makkasau Sticker"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.081188527169!2d119.63138407411426!3d-6.880690993119845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbeffb53d99b7bb%3A0x8f1a713b67499b78!2sJl.%20Andi%20Makkasau%20No.20%2C%20Pangkajene%2C%20Maritengngae%2C%20Kabupaten%20Sidenreng%20Rappang%2C%20Sulawesi%20Selatan!5e0!3m2!1sen!2sid!4v1711520052746!5m2!1sen!"
                            width="100%"
                            height="250"
                            allowFullScreen=""
                            loading="lazy"
                            referrerPolicy="no-referrer-when-downgrade"
                            className="border-0 w-full h-[250px]"
                        ></iframe>
                    </div>
                </div>
                <div class="bg-[#f8f9fa] p-6 rounded-xl shadow-md w-[85%] max-w-[400px] mx-auto">
                    <div class="flex justify-center mb-10 relative">
                        <div
                            class="bg-[#FDCB58] p-2 rounded-full absolute left-1/6 -translate-x-1/2 top-1/2 -translate-y-1/2">
                            <img src="{{ asset('images/icon-phone.png') }}" class="w-5 h-5" alt="Icon Kontak">
                        </div>
                        <h3 class="text-[#0A3D62] font-bold text-xl">Kontak Kami</h3>
                    </div>
                    <ul class="text-sm text-[#0A3D62] space-y-8 ml-4 font-semibold">
                        <li class="flex gap-3 items-center">
                            <div class="w-6 flex justify-center ml-[7%]">
                                <img src="{{ asset('images/icon-hp.png') }}" class="w-18 h-8" alt="HP">
                            </div>
                            <span>+62 8528-2534-171</span>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="w-6 flex justify-center ml-[7%]">
                                <img src="{{ asset('images/icon-wa.png') }}" class="w-18 h-8" alt="WhatsApp">
                            </div>
                            <a href="https://wa.link/nro7ao" target="_blank" class="text-black hover:underline">
                                +62 8528-2534-171
                            </a>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="w-6 flex justify-center ml-[7%]">
                                <img src="{{ asset('images/icon-fb.png') }}" class="w-18 h-8" alt="Facebook">
                            </div>
                            <a href="https://www.facebook.com/share/1H9vDuMYWK/" target="_blank" class="text-black hover:underline">
                                Makkasar Stiker
                            </a>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="w-6 flex justify-center ml-[7%]">
                                <img src="{{ asset('images/icon-ig.png') }}" class="w-18 h-8" alt="Instagram">
                            </div>
                            <a href="https://www.instagram.com/makkasausticker?igsh=MTZvb2kxb2lpN3Jr" target="_blank" class="text-black hover:underline">
                                @makkasarstiker
                            </a>
                        </li>
                        <li class="flex gap-3 items-center">
                            <div class="w-6 flex justify-center ml-[7%]">
                                <img src="{{ asset('images/icon-tiktok.png') }}" class="w-18 h-8" alt="Tiktok">
                            </div>
                            <a href="https://www.tiktok.com/@makkasau.sticker?_t=ZS-8vk13Wdit3X&_r=1" target="_blank" class="text-black hover:underline">
                                @makkasau.sticker
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="bg-[#0A3D62] py-16">
            <div class="text-center text-white">
                <h2 class="font-bold text-5xl mb-6">Siap Untuk Memesan?</h2>
                <p>Hubungi kami sekarang untuk mendapatkan penawaran khusus <br> dan konsultasi gratis tentang custom
                    plat kendaraan anda</p>
            </div>
            <div class="mt-20 text-center space-x-20">
                <a href="/pemesanan" class="font-lg text-black bg-[#FDCB58] px-8 py-2 rounded-full">
                    PESAN SEKARANG
                </a>
            </div>
        </div>
    </section>
</x-layout>