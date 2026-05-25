<x-app-layout>
    <div class="min-h-screen bg-[#F0F0F0] text-black p-6 md:p-12 font-sans selection:bg-yellow-300">

        <header
            class="border-4 border-black bg-yellow-300 p-6 mb-12 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] uppercase tracking-wider">
            <h1 class="text-4xl md:text-6xl font-black italic">Daftar Course Hub</h1>
            <p class="text-sm md:text-base font-bold mt-2 border-t-2 border-black pt-2">
                Kumpulan kelas premium untuk upgrade skill kamu.
            </p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($courses as $course)
                <div
                    class="border-4 border-black bg-white shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between transition-all hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">

                    <div class="border-b-4 border-black bg-gray-200 relative aspect-video overflow-hidden">
                        @if ($course->thumbnail)
                            <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="{{ $course->title }}"
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-300 font-bold uppercase">
                                No Image
                            </div>
                        @endif

                        <span
                            class="absolute bottom-4 right-4 bg-cyan-300 text-black font-black px-4 py-1 border-2 border-black text-sm uppercase shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                            Rp {{ number_format($course->price, 0, ',', '.') }}
                        </span>
                    </div>

                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h2 class="text-2xl font-black uppercase tracking-tight mb-3 hover:underline decoration-4">
                                <a href="{{ route('courses.show', $course->id) }}">
                                    {{ $course->title }}
                                </a>
                            </h2>

                            <p class="text-gray-700 font-medium text-sm leading-relaxed mb-6 line-clamp-3">
                                {{ $course->description }}
                            </p>
                        </div>

                        <a href="{{ route('courses.show', $course->id) }}"
                            class="inline-block text-center w-full bg-lime-400 text-black font-black uppercase tracking-wider py-3 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-300 active:translate-x-[2px] active:translate-y-[2px] active:shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] transition-all">
                            Ikuti Kelas →
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

        <div class="mt-16 flex justify-center">
            {{ $courses->links() }}
        </div>
    </div>
</x-app-layout>
