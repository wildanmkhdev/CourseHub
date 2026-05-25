<x-app-layout>
    <div class="min-h-screen bg-[#F0F0F0] py-12 px-4 font-sans text-black">
        <div
            class="max-w-3xl mx-auto bg-white border-4 border-black p-8 md:p-10 shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">

            <div
                class="border-b-4 border-black pb-4 mb-8 bg-cyan-300 -mx-8 -mt-8 md:-mx-10 md:-mt-10 p-6 shadow-[0_4px_0px_0px_rgba(0,0,0,1)] flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-black uppercase tracking-wider">
                        Edit Course
                    </h1>
                    <p class="text-xs font-bold uppercase mt-1 text-gray-800">Modifikasi data kelas: {{ $course->title }}
                    </p>
                </div>
                <a href="{{ route('dashboard') }}"
                    class="bg-white text-black font-black text-xs uppercase px-3 py-2 border-2 border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] hover:bg-gray-100">
                    Batal ✕
                </a>
            </div>

            <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-8">
                @csrf
                @method('PUT')

                {{-- Title --}}
                <div>
                    <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                        Judul Course
                    </label>
                    <input type="text" name="title" value="{{ old('title', $course->title) }}"
                        placeholder="Contoh: MASTERING TAILWIND CSS"
                        class="w-full border-4 border-black bg-white px-4 py-3 font-bold placeholder-gray-400 focus:outline-none focus:bg-lime-50 transition-colors shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">

                    @error('title')
                        <div
                            class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            ⚠️ {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Description --}}
                <div>
                    <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                        Deskripsi
                    </label>
                    <textarea name="description" rows="5" placeholder="Tulis deskripsi kelas secara mendetail di sini..."
                        class="w-full border-4 border-black bg-white px-4 py-3 font-bold placeholder-gray-400 focus:outline-none focus:bg-lime-50 transition-colors shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">{{ old('description', $course->description) }}</textarea>

                    @error('description')
                        <div
                            class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                            ⚠️ {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Grid Thumbnail & Price --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {{-- Thumbnail --}}
                    <div>
                        <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                            Ganti File Thumbnail
                        </label>
                        <input type="file" name="thumbnail"
                            class="w-full border-4 border-black bg-white px-4 py-2 font-bold file:mr-4 file:py-1 file:px-4 file:border-2 file:border-black file:text-xs file:font-black file:uppercase file:bg-yellow-300 file:hover:bg-yellow-200 cursor-pointer shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">

                        <p class="text-[11px] text-gray-600 font-bold mt-1 uppercase">*Biarkan kosong jika tidak ingin
                            mengganti gambar.</p>

                        @error('thumbnail')
                            <div
                                class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                                ⚠️ {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Price --}}
                    <div>
                        <label class="block mb-2 text-sm font-black uppercase tracking-wide">
                            Harga (IDR)
                        </label>
                        <input type="number" name="price" value="{{ old('price', $course->price) }}"
                            placeholder="Contoh: 150000"
                            class="w-full border-4 border-black bg-white px-4 py-3 font-bold placeholder-gray-400 focus:outline-none focus:bg-lime-50 transition-colors shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">

                        @error('price')
                            <div
                                class="bg-red-400 text-black font-bold text-xs uppercase px-3 py-1.5 border-2 border-black mt-2 inline-block shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                                ⚠️ {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="border-t-4 border-dashed border-black pt-4"></div>

                {{-- Action Button --}}
                <div class="flex justify-end">
                    <button type="submit"
                        class="w-full sm:w-auto bg-lime-400 text-black font-black uppercase tracking-wider px-8 py-4 border-4 border-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-300 active:translate-x-[2px] active:translate-y-[2px] active:shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] transition-all text-center">
                        Simpan Perubahan Data ↑
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
