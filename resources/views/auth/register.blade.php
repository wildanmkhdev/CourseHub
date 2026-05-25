<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun — CourseHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F4F4F5] min-h-screen flex items-center justify-center p-4 antialiased">

    <div class="w-full max-w-md border-4 border-black bg-white p-6 sm:p-8 shadow-[8px_8px_0_0_rgba(0,0,0,1)] my-auto">

        <div class="border-b-4 border-dashed border-black pb-6 mb-6 text-center">
            <h2 class="text-3xl font-black uppercase tracking-tighter">DAFTAR AKUN</h2>
            <p class="text-xs font-bold text-gray-600 mt-1 uppercase">Isi data di bawah untuk membuat akun baru</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div class="space-y-1">
                <label for="name" class="block font-black uppercase text-[11px] tracking-wider text-black">Nama
                    Lengkap</label>
                <input id="name"
                    class="block w-full border-4 border-black p-3 font-bold text-sm bg-white shadow-[3px_3px_0_0_rgba(0,0,0,1)] focus:translate-x-[1px] focus:translate-y-[1px] focus:shadow-[2px_2px_0_0_rgba(0,0,0,1)] focus:outline-none transition-all"
                    type="text" name="name" value="{{ old('name') }}" placeholder="Nama Anda" required
                    autofocus />
                @error('name')
                    <span class="block font-bold text-xs text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1">
                <label for="email"
                    class="block font-black uppercase text-[11px] tracking-wider text-black">Email</label>
                <input id="email"
                    class="block w-full border-4 border-black p-3 font-bold text-sm bg-white shadow-[3px_3px_0_0_rgba(0,0,0,1)] focus:translate-x-[1px] focus:translate-y-[1px] focus:shadow-[2px_2px_0_0_rgba(0,0,0,1)] focus:outline-none transition-all"
                    type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required />
                @error('email')
                    <span class="block font-bold text-xs text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1">
                <label for="password"
                    class="block font-black uppercase text-[11px] tracking-wider text-black">Password</label>
                <input id="password"
                    class="block w-full border-4 border-black p-3 font-bold text-sm bg-white shadow-[3px_3px_0_0_rgba(0,0,0,1)] focus:translate-x-[1px] focus:translate-y-[1px] focus:shadow-[2px_2px_0_0_rgba(0,0,0,1)] focus:outline-none transition-all"
                    type="password" name="password" placeholder="••••••••" required autocomplete="new-password" />
                @error('password')
                    <span class="block font-bold text-xs text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1">
                <label for="password_confirmation"
                    class="block font-black uppercase text-[11px] tracking-wider text-black">Konfirmasi Password</label>
                <input id="password_confirmation"
                    class="block w-full border-4 border-black p-3 font-bold text-sm bg-white shadow-[3px_3px_0_0_rgba(0,0,0,1)] focus:translate-x-[1px] focus:translate-y-[1px] focus:shadow-[2px_2px_0_0_rgba(0,0,0,1)] focus:outline-none transition-all"
                    type="password" name="password_confirmation" placeholder="••••••••" required />
                @error('password_confirmation')
                    <span class="block font-bold text-xs text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="pt-2">
                <button type="submit"
                    class="w-full text-center bg-cyan-300 text-black font-black uppercase tracking-wider py-3.5 border-4 border-black shadow-[4px_4px_0_0_rgba(0,0,0,1)] hover:bg-cyan-200 active:translate-x-[2px] active:translate-y-[2px] active:shadow-[2px_2px_0_0_rgba(0,0,0,1)] transition-all text-sm">
                    DAFTAR SEKARANG →
                </button>
            </div>

            <div
                class="text-center pt-2 border-t-2 border-dashed border-black font-bold text-xs uppercase text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}"
                    class="text-black underline font-black hover:bg-yellow-200 px-1 transition-all">
                    Login di sini
                </a>
            </div>
        </form>
    </div>

</body>

</html>
