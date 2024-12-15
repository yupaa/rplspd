<style>
    button span {
        color: white;
    }

    li span {
        color: white;
    }
</style>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 dark:bg-gray-800"
    aria-label="Sidebar" style="background-color: #2A3F64; border: none">
    <div class="h-full px-3 pb-4 overflow-y-auto" style="background-color: #2A3F64; border: none">
        <ul class="space-y-2 font-medium">
            <li style="color: white">
                <x-sidebarlink href="/dashboard" :active="request()->is('dashboard')"
                    icon='
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
                    </svg>
                    '>
                    Dashboard
                </x-sidebarlink>
            </li>
            <li style="color: white">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-yellow-300 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-pencatatan" data-collapse-toggle="dropdown-pencatatan">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m4.988 19.012 5.41-5.41m2.366-6.424 4.058 4.058-2.03 5.41L5.3 20 4 18.701l3.355-9.494 5.41-2.029Zm4.626 4.625L12.197 6.61 14.807 4 20 9.194l-2.61 2.61Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Pencatatan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-pencatatan"
                    class="{{ request()->is('catat-rutin', 'catat-umum', 'catat-harian') ? '' : 'hidden' }} py-2 space-y-2">
                    <li>
                        <x-sidebarcomp href="/catat-rutin" :active="request()->is('catat-rutin')">Operasi Rutin</x-sidebarcomp>
                    </li>
                    <li>
                        <x-sidebarcomp href="/catat-umum" :active="request()->is('catat-umum')">Operasi Umum</x-sidebarcomp>
                    </li>
                    <li>
                        <x-sidebarcomp href="/catat-harian" :active="request()->is('catat-harian')">Penindakan Harian</x-sidebarcomp>
                    </li>
                </ul>
            </li>
            <li style="color: white">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-yellow-300 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-pelaporan" data-collapse-toggle="dropdown-pelaporan">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Pelaporan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-pelaporan"
                    class="{{ request()->is('laporan-rutin', 'laporan-umum', 'laporan-harian') ? '' : 'hidden' }} py-2 space-y-2">
                    <li>
                        <x-sidebarcomp href="/laporan-rutin" :active="request()->is('laporan-rutin')">Operasi Rutin</x-sidebarcomp>
                    </li>
                    <li>
                        <x-sidebarcomp href="laporan-umum" :active="request()->is('laporan-umum')">Operasi Umum</x-sidebarcomp>
                    </li>
                    <li>
                        <x-sidebarcomp href="laporan-harian" :active="request()->is('laporan-harian')">Penindakan Harian</x-sidebarcomp>
                    </li>
                </ul>
            </li>
            <li style="color: white">
                <x-sidebarlink href="/klaim-pelanggaran" :active="request()->is('')"
                    icon='
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    '>
                    Klaim Pelanggaran
                </x-sidebarlink>
            </li>
            <li style="color: white">
                <x-sidebarlink href="/riwayat" :active="request()->is('')"
                    icon='
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5"/>
                    </svg>
                    '>
                    Riwayat
                </x-sidebarlink>
            </li>
            <li style="color: white">
                <x-sidebarlink href="/kritik-saran" :active="request()->is('')"
                    icon='
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                    </svg>

                    '>
                    Kritik Saran
                </x-sidebarlink>
            </li>
        </ul>
    </div>
</aside>
