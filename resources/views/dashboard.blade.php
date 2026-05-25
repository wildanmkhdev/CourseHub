<x-app-layout>
    <div class="min-h-screen bg-[#F0F0F0] text-black p-6 md:p-12 font-sans selection:bg-yellow-300">

        <header
            class="border-4 border-black bg-cyan-300 p-6 mb-10 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-3xl md:text-5xl font-black uppercase tracking-tight">Dashboard Admin</h1>
                <p class="text-sm font-bold uppercase mt-1 text-gray-800">Manajemen Konten & Manifes Kelas CourseHub</p>
            </div>
            <a href="{{ route('courses.create') }}"
                class="bg-lime-400 text-black font-black uppercase text-sm tracking-wider px-5 py-3 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all">
                + Buat Kelas Baru
            </a>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
            <div class="border-4 border-black bg-white p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">
                <span class="text-xs font-black uppercase tracking-wider text-gray-500">Total Kelas</span>
                <div class="text-4xl font-black mt-1">{{ $courses->count() }}</div>
            </div>
            <div class="border-4 border-black bg-yellow-300 p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">
                <span class="text-xs font-black uppercase tracking-wider text-gray-700">Status Sistem</span>
                <div class="text-2xl font-black mt-2 uppercase">AKTIF / LIVE</div>
            </div>
            <div class="border-4 border-black bg-white p-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">
                <span class="text-xs font-black uppercase tracking-wider text-gray-500">Log Masuk Sebagai</span>
                <div class="text-lg font-black mt-2 truncate uppercase text-lime-600">{{ Auth::user()->name }}</div>
            </div>
        </div>

        @if (session('success'))
            <div
                class="bg-lime-400 border-4 border-black p-4 mb-8 font-black uppercase text-sm shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                💥 {{ session('success') }}
            </div>
        @endif

        <div class="border-4 border-black bg-white shadow-[10px_10px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
            <div class="bg-black text-white p-4 font-black uppercase tracking-wide text-sm">
                Daftar Inventaris Kelas
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b-4 border-black bg-gray-100 text-xs font-black uppercase tracking-wider">
                            <th class="p-4 w-20">Preview</th>
                            <th class="p-4">Info Kelas</th>
                            <th class="p-4 w-40">Harga</th>
                            <th class="p-4 text-center w-60">Aksi Kontrol</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y-2 divide-black font-medium text-sm">
                        @forelse ($courses as $course)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="p-4">
                                    <div
                                        class="w-16 h-12 border-2 border-black bg-gray-200 overflow-hidden shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                                        @if ($course->thumbnail)
                                            <img src="{{ asset('storage/' . $course->thumbnail) }}" alt=""
                                                class="w-full h-full object-cover grayscale">
                                        @else
                                            <div
                                                class="w-full h-full flex items-center justify-center text-[10px] font-bold bg-gray-300">
                                                N/A</div>
                                        @endif
                                    </div>
                                </td>

                                <td class="p-4">
                                    <span class="font-black text-base uppercase block tracking-tight hover:underline">
                                        <a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a>
                                    </span>
                                    <span
                                        class="text-xs text-gray-600 line-clamp-1 mt-0.5">{{ $course->description }}</span>
                                </td>

                                <td class="p-4">
                                    <span class="bg-yellow-200 px-2 py-0.5 border border-black font-bold text-xs">
                                        Rp {{ number_format($course->price, 0, ',', '.') }}
                                    </span>
                                </td>

                                <td class="p-4">
                                    <div
                                        class="flex items-center justify-center gap-2 text-xs font-black uppercase tracking-wider">
                                        <a href="{{ route('courses.show', $course->id) }}"
                                            class="bg-white border-2 border-black px-3 py-1.5 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] hover:bg-gray-100 transition-all">
                                            Lihat
                                        </a>

                                        <a href="{{ route('courses.edit', $course->id) }}"
                                            class="bg-cyan-300 border-2 border-black px-3 py-1.5 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] hover:bg-cyan-200 transition-all">
                                            Edit
                                        </a>

                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin memusnahkan kelas ini?');"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-400 border-2 border-black px-3 py-1.5 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] hover:bg-red-300 transition-all">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4"
                                    class="p-12 text-center text-gray-500 font-bold uppercase tracking-wider bg-gray-50">
                                    ⚠️ Belum ada kelas terdaftar di basis data.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
