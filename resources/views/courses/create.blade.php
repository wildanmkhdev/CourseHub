@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-md">

            <h1 class="text-3xl font-bold mb-6 text-gray-800">
                Tambah Course
            </h1>

            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">

                @csrf

                {{-- Title --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-gray-700">
                        Title
                    </label>

                    <input type="text" name="title" value="{{ old('title') }}" placeholder="Masukkan judul course"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

                    @error('title')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Description --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-gray-700">
                        Description
                    </label>

                    <textarea name="description" rows="5" placeholder="Masukkan deskripsi course"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Thumbnail --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-gray-700">
                        Thumbnail
                    </label>

                    <input type="file" name="thumbnail"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">

                    @error('thumbnail')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Price --}}
                <div>
                    <label class="block mb-2 text-sm font-semibold text-gray-700">
                        Price
                    </label>

                    <input type="number" name="price" value="{{ old('price') }}" placeholder="Masukkan harga course"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">

                    @error('price')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Button --}}
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-200">
                        Simpan Course
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection
