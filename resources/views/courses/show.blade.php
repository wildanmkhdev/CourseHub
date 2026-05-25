<x-app-layout>
    <div class="min-h-screen bg-[#F0F0F0] text-black p-6 md:p-12 font-sans selection:bg-yellow-300">

        <div class="mb-8">
            <a href="{{ route('courses.index') }}"
                class="inline-block bg-white text-black font-black uppercase text-xs tracking-wider px-4 py-2 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all">
                ← Kembali ke Daftar
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

            <div class="lg:col-span-2 border-4 border-black bg-white shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">

                <div class="border-b-4 border-black bg-gray-200 aspect-video w-full overflow-hidden relative">
                    @if ($course->thumbnail)
                        <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="{{ $course->title }}"
                            class="w-full h-full object-cover">
                    @else
                        <div
                            class="w-full h-full flex items-center justify-center bg-gray-300 font-black text-xl uppercase tracking-widest">
                            [ No Thumbnail Available ]
                        </div>
                    @endif
                </div>

                <div class="p-6 md:p-8">
                    <span
                        class="bg-yellow-300 text-black font-black text-xs uppercase px-3 py-1 border-2 border-black inline-block mb-4 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                        Course Manifest
                    </span>

                    <h1 class="text-3xl md:text-5xl font-black uppercase tracking-tight mb-6 leading-none">
                        {{ $course->title }}
                    </h1>

                    <div class="border-t-4 border-dashed border-black my-6"></div>

                    <h3 class="text-lg font-black uppercase tracking-wide mb-3">Deskripsi Kelas:</h3>

                    <div class="text-gray-800 font-medium text-base md:text-lg leading-relaxed whitespace-pre-line">
                        {{ $course->description }}
                    </div>
                </div>
            </div>

            <div
                class="lg:sticky lg:top-24 border-4 border-black bg-cyan-300 p-6 md:p-8 shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">

                <p class="text-xs font-black uppercase tracking-widest text-gray-800 mb-1">Investment:</p>

                <div
                    class="text-3xl md:text-4xl font-black bg-white border-3 border-black p-4 inline-block w-full text-center shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] mb-6">
                    Rp {{ number_format($course->price, 0, ',', '.') }}
                </div>

                <div class="space-y-4">
                    <a href="#"
                        class="block text-center w-full bg-lime-400 text-black font-black uppercase tracking-wider py-4 border-4 border-black text-lg shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-300 active:translate-x-[2px] active:translate-y-[2px] active:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all">
                        Beli Kelas Sekarang!
                    </a>

                    <div
                        class="bg-white border-3 border-black p-4 font-bold text-xs uppercase tracking-wide space-y-2.5">
                        <div class="flex justify-between border-b-2 border-black pb-1.5">
                            <span>Akses Kelas</span>
                            <span class="font-black bg-yellow-200 px-1">Selamanya</span>
                        </div>
                        <div class="flex justify-between border-b-2 border-black pb-1.5">
                            <span>Update Materi</span>
                            <span class="font-black bg-yellow-200 px-1">Gratis</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sertifikat</span>
                            <span class="font-black bg-yellow-200 px-1">Tersedia</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
