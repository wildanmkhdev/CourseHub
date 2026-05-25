<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — CourseHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F4F4F5] min-h-screen flex items-center justify-center p-4 antialiased">

    <div class="w-full max-w-md border-4 border-black bg-white p-6 sm:p-8 shadow-[8px_8px_0_0_rgba(0,0,0,1)] my-auto">
        
        <div class="border-b-4 border-dashed border-black pb-6 mb-6 text-center">
            <h2 class="text-3xl font-black uppercase tracking-tighter">LOGIN AKUN</h2>
            <p class="text-xs font-bold text-gray-600 mt-1 uppercase">Silakan masuk untuk melanjutkan belajar</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-bold text-xs uppercase text-red-600 bg-red-100 p-3 border-2 border-black shadow-[2px_2px_0_0_rgba(0,0,0,1)]">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div class="space-y-1">
                <label for="email" class="block font-black uppercase text-[11px] tracking-wider text-black">Email</label>
                <input id="email" 
                       class="block w-full border-4 border-black p-3 font-bold text-sm bg-white shadow-[3px_3px_0_0_rgba(0,0,0,1)] focus:translate-x-[1px] focus:translate-y-[1px] focus:shadow-[2px_2px_0_0_rgba(0,0,0,1)] focus:outline-none transition-all" 
                       type="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       placeholder="nama@email.com"
                       required 
                       autofocus />
                @error('email')
                    <span class="block font-bold text-xs text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="space-y-1">
                <label for="password" class="block font-black uppercase text-[11px] tracking-wider text-black">Password</label>
                <input id="password" 
                       class="block w-full border-4 border-black p-3 font-bold text-sm bg-white shadow-[3px_3px_0_0_rgba(0,0,0,1)] focus:translate-x-[1px] focus:translate-y-[1px] focus:shadow-[2px_2px_0_0_rgba(0,0,0,1)] focus:outline-none transition-all" 
                       type="password" 
                       name="password" 
                       placeholder="••••••••"
                       required />
                @error('password')
                    <span class="block font-bold text-xs text-red-600 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between gap-2 font-bold text-xs uppercase pt-1">
                <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                    <input id="remember_me" 
                           type="checkbox" 
                           class="w-4 h-4 border-2 border-black text-black bg-white checked:bg-lime-400 focus:ring-0 rounded-none shadow-[1px_1px_0_0_rgba(0,0,0,1)] accent-black cursor-pointer" 
                           name="remember">
                    <span class="ms-2 tracking-wide text-black">Ingat Saya</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-gray-500 hover:text-black transition-all" href="{{ route('password.request') }}">
                        Lupa Password?
                    </a>
                @endif
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full text-center bg-lime-400 text-black font-black uppercase tracking-wider py-3.5 border-4 border-black shadow-[4px_4px_0_0_rgba(0,0,0,1)] hover:bg-lime-300 active:translate-x-[2px] active:translate-y-[2px] active:shadow-[2px_2px_0_0_rgba(0,0,0,1)] transition-all text-sm">
                    MASUK KELAS →
                </button>
            </div>

            <div class="text-center pt-2 border-t-2 border-dashed border-black font-bold text-xs uppercase text-gray-600">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-black underline font-black hover:bg-yellow-200 px-1 transition-all">
                    Daftar di sini
                </a>
            </div>
        </form>
    </div>

</body>
</html>