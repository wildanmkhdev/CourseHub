<nav x-data="{ open: false, dropdownOpen: false, mobiledropdownOpen: false }"
    class="bg-white border-b-4 border-black sticky top-0 z-50 text-black font-sans selection:bg-yellow-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center gap-6">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}"
                        class="bg-lime-400 text-black font-black text-xl uppercase tracking-wider px-3 py-1.5 border-3 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[-1px] hover:translate-y-[-1px] hover:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all">
                        COURSE<span class="bg-black text-lime-400 px-1 ml-1">HUB</span>
                    </a>
                </div>

                <div class="hidden space-x-2 sm:flex items-center font-bold uppercase text-sm">
                    <a href="{{ route('dashboard') }}"
                        class="px-3 py-1.5 border-2 {{ request()->routeIs('dashboard') ? 'bg-yellow-300 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]' : 'border-transparent hover:border-black hover:bg-gray-100' }} transition-all">
                        Dashboard
                    </a>

                    <a href="{{ route('courses.index') }}"
                        class="px-3 py-1.5 border-2 {{ request()->routeIs('courses.index') ? 'bg-cyan-300 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]' : 'border-transparent hover:border-black hover:bg-gray-100' }} transition-all">
                        Daftar Kelas
                    </a>

                    {{-- <a href="{{ route('courses.create') }}"
                        class="px-3 py-1.5 border-2 {{ request()->routeIs('courses.create') ? 'bg-lime-400 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]' : 'border-transparent hover:border-black hover:bg-gray-100' }} transition-all">
                        + Tambah Kelas
                    </a> --}}
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6 relative">
                <div class="relative">
                    <button @click="dropdownOpen = ! dropdownOpen" @click.outside="dropdownOpen = false"
                        class="inline-flex items-center px-4 py-2 border-3 border-black text-sm font-black uppercase tracking-wider bg-yellow-300 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-yellow-200 transition-all focus:outline-none">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-2">
                            <svg class="fill-current h-4 w-4 stroke-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>

                    <div x-show="dropdownOpen" x-transition
                        class="absolute right-0 mt-3 w-48 bg-white border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] font-bold text-sm uppercase tracking-wide">
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2.5 hover:bg-cyan-100 border-b-2 border-black transition-colors">
                            {{ __('Profile') }}
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left block px-4 py-2.5 hover:bg-red-300 transition-colors"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 border-3 border-black bg-white text-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:bg-gray-100 focus:outline-none transition duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden border-t-4 border-black bg-[#F9F9F9]">
        <div class="pt-2 pb-4 space-y-2 px-4 font-black uppercase text-sm tracking-wide">
            <a href="{{ route('dashboard') }}"
                class="block p-3 border-3 border-black bg-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] {{ request()->routeIs('dashboard') ? 'bg-yellow-300' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('courses.index') }}"
                class="block p-3 border-3 border-black bg-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] {{ request()->routeIs('courses.index') ? 'bg-cyan-300' : '' }}">
                Daftar Kelas
            </a>
            <a href="{{ route('courses.create') }}"
                class="block p-3 border-3 border-black bg-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] {{ request()->routeIs('courses.create') ? 'bg-lime-400' : '' }}">
                + Tambah Kelas
            </a>
        </div>

        <div class="pt-4 pb-4 border-t-4 border-black bg-gray-100 px-4">
            <div class="mb-3">
                <div class="font-black uppercase text-base text-black">{{ Auth::user()->name }}</div>
                <div class="font-medium text-xs text-gray-600">{{ Auth::user()->email }}</div>
            </div>

            <div class="space-y-2 font-bold uppercase text-xs">
                <a href="{{ route('profile.edit') }}"
                    class="block p-2.5 border-2 border-black bg-white shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] text-center">
                    {{ __('Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full p-2.5 border-2 border-black bg-red-400 text-black font-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] text-center"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
