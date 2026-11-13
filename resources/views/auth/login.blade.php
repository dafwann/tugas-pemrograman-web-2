@extends('layouts.app')

@section('judul', 'Masuk')

@section('konten')
    <div class="max-w-md mx-auto bg-white rounded-xl shadow p-6">
        <h1 class="text-2xl font-bold mb-6">Masuk</h1>

        <form action="{{ route('login.proses') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" autofocus
                       class="w-full rounded-lg border px-3 py-2 @error('email') border-red-500 @else border-slate-300 @enderror">
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block font-medium mb-1">Kata Sandi</label>
                <input type="password" id="password" name="password"
                       class="w-full rounded-lg border px-3 py-2 @error('password') border-red-500 @else border-slate-300 @enderror">
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <label class="flex items-center gap-2 text-sm">
                <input type="checkbox" name="ingat" value="1"> Ingat saya
            </label>

            <button class="w-full bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">Masuk</button>

            <p class="text-xs text-slate-500 text-center">Akun contoh: admin@example.com / password</p>
        </form>
    </div>
@endsection
