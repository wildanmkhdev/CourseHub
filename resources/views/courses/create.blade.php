<x-app-layout>
    <div class="min-h-screen bg-[#F0F0F0] py-12 px-4 font-sans text-black">
        <div
            class="max-w-3xl mx-auto bg-white border-4 border-black p-8 md:p-10 shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">

            <div
                class="border-b-4 border-black pb-4 mb-8 bg-yellow-300 -mx-8 -mt-8 md:-mx-10 md:-mt-10 p-6 shadow-[0_4px_0px_0px_rgba(0,0,0,1)]">
                <h1 class="text-3xl font-black uppercase tracking-wider">
                    Tambah Course Baru
                </h1>

                <p class="text-xs font-bold uppercase mt-1 text-gray-800">
                    Isi manifes kelas untuk dipublikasikan ke hub.
                </p>
            </div>

            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">

                @csrf

                {{-- Title --}}
                <div>
                    <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                        Judul Course
                    </label>

                    <input type="text" name="title" value="{{ old('title') }}"
                        placeholder="Contoh: MASTERING TAILWIND CSS"
                        class="w-full border-4 border-black bg-white px-4 py-3 font-bold placeholder-gray-400 focus:outline-none focus:bg-lime-50 transition-colors shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">

                    @error('title')
                        <div
                            class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block">
                            ⚠️ {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Description --}}
                <div>
                    <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                        Deskripsi
                    </label>

                    <textarea name="description" rows="5" placeholder="Tulis deskripsi kelas..."
                        class="w-full border-4 border-black bg-white px-4 py-3 font-bold placeholder-gray-400 focus:outline-none focus:bg-lime-50 transition-colors shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">{{ old('description') }}</textarea>

                    @error('description')
                        <div
                            class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block">
                            ⚠️ {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Thumbnail & Price --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div>
                        <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                            Thumbnail
                        </label>

                        <input type="file" name="thumbnail"
                            class="w-full border-4 border-black bg-white px-4 py-2 font-bold">

                        @error('thumbnail')
                            <div
                                class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block">
                                ⚠️ {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                            Harga
                        </label>

                        <input type="number" name="price" value="{{ old('price') }}" placeholder="150000"
                            class="w-full border-4 border-black bg-white px-4 py-3 font-bold">

                        @error('price')
                            <div
                                class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block">
                                ⚠️ {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-lime-400 text-black font-black uppercase px-8 py-4 border-4 border-black">
                        Simpan Course
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
