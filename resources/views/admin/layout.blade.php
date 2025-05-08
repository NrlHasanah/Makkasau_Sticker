<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin | Makkasau Sticker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] min-h-screen" x-data="{ sidebarOpen: false }">
    <div class="md:hidden">
        <div class="fixed inset-0 bg-black bg-opacity-30 z-40" x-show="sidebarOpen" @click="sidebarOpen = false"></div>
        <aside x-cloak
            class="fixed z-50 inset-y-0 left-0 bg-[#0A3D62] w-64 py-6 px-4 transform transition-transform duration-200 ease-in-out"
            :class="{ '-translate-x-full': !sidebarOpen }">
            <div>
                <h1 class="text-2xl font-bold mb-10 text-white"><span class="text-white">Makkasau</span>
                    <span class="text-[#FDCB58]">Sticker</span>
                </h1>
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-2">
                        <div
                            class="bg-yellow-400 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            A</div>
                        <div>
                            <p class="text-sm font-semibold text-white">Admin</p>
                            <p class="text-xs opacity-70 text-white">Administrator</p>
                        </div>
                    </div>
                </div>
                <nav class="space-y-2 text-sm font-medium">
                    <a href="{{ route('admin.orders') }}"
                        class="block px-3 py-2 rounded-md {{ request()->routeIs('admin.orders') ? 'bg-white text-[#0A3D62]' : 'hover:bg-[#FDCB58]/30 text-white' }}">
                        🛒 Manajemen Pesanan
                    </a>
                    <a href="{{ route('admin.products') }}"
                        class="block px-3 py-2 rounded-md {{ request()->routeIs('admin.products') ? 'bg-white text-[#0A3D62]' : 'hover:bg-[#FDCB58]/30 text-white' }}">
                        🖼️ Galeri Produk
                    </a>
                </nav>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-90">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white px-3 py-2 rounded-md text-sm text-left font-semibold hover:bg-red-400 focus:outline-none">
                    𓉘➜ Logout
                </button>
            </form>
            <div class="text-xs text-white/70 mt-10">&copy; 2025 Makkasau Stiker</div>
        </aside>
    </div>
    <div class="flex min-h-screen">
        <aside class="hidden md:flex w-64 bg-[#0A3D62] text-white flex-col justify-between py-6 px-4">
            <div>
                <h1 class="text-2xl font-bold mb-10 text-white"><span class="text-white">Makkasau</span>
                    <span class="text-[#FDCB58]">Sticker</span>
                </h1>
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-2">
                        <div
                            class="bg-yellow-400 text-black w-8 h-8 rounded-full flex items-center justify-center font-bold">
                            A</div>
                        <div>
                            <p class="text-sm font-semibold">Admin</p>
                            <p class="text-xs opacity-70">Administrator</p>
                        </div>
                    </div>
                </div>
                <nav class="space-y-2 text-sm font-medium">
                    <a href="{{ route('admin.orders') }}"
                        class="block px-3 py-2 rounded-md {{ request()->routeIs('admin.orders') ? 'bg-white text-[#0A3D62]' : 'hover:bg-[#FDCB58]/30 text-white' }}">
                        🛒 Manajemen Pesanan
                    </a>
                    <a href="{{ route('admin.products') }}"
                        class="block px-3 py-2 rounded-md {{ request()->routeIs('admin.products') ? 'bg-white text-[#0A3D62]' : 'hover:bg-[#FDCB58]/30 text-white' }}">
                        🖼️ Galeri Produk
                    </a>
                </nav>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="mt-90">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white px-3 py-2 rounded-md text-sm text-left font-semibold hover:bg-red-400 focus:outline-none">
                    𓉘➜  Logout
                </button>
            </form>
            <div class="text-xs text-white/70 mt-5">&copy; 2025 Makkasau Stiker</div>
        </aside>
        <div class="flex-1 flex flex-col">
            <header
                class="bg-[#0A3D62] text-white px-4 py-4 flex flex-wrap md:flex-nowrap items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <button class="md:hidden text-white text-2xl mr-2" @click="sidebarOpen = true">☰</button>
                    <div class="bg-white/20 p-2 rounded text-white">🛒</div>
                    <h2 class="text-lg font-bold">
                        @if (request()->routeIs('admin.products'))
                            Galeri Produk
                        @else
                            Manajemen Pesanan
                        @endif
                    </h2>
                </div>

                <div>
                    @if (request()->routeIs('admin.products'))
                        <form action="{{ route('admin.products') }}" method="GET" class="relative pr-3 w-full sm:w-61">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari Nama Produk"
                                class="pl-5 pr-10 py-2 rounded-full bg-white/20 text-white placeholder-white text-sm w-full focus:outline-none focus:ring focus:ring-white/30" />
                            <button type="submit"
                                class="absolute right-7 top-2 text-white text-sm hover:scale-105 transition">
                                🔍︎
                            </button>
                        </form>
                    @else
                        <form action="{{ route('admin.orders') }}" method="GET" class="relative pr-3 w-full sm:w-61">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari ID atau Nama Pemesan"
                                class="pl-5 pr-10 py-2 rounded-full bg-white/20 text-white placeholder-white text-sm w-full focus:outline-none focus:ring focus:ring-white/30" />
                            <button type="submit" class="absolute right-7 top-2 text-white text-sm hover:scale-105 transition">
                                🔍︎
                            </button>
                        </form>
                    @endif
                </div>
            </header>
            <main class="p-4 md:p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
