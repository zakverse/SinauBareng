@extends('components.layout.app')

@section('content')
<div class="flex min-h-screen bg-[#E5E5E5]">
    @include('components.layout.sidebar_user')

    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-black mb-10">Materi > Unggah Materi</h1>

        <div class="max-w-4xl space-y-6">
            <div class="bg-white p-8 rounded-2xl shadow-sm flex gap-8 items-center border border-gray-100">
                <div class="text-center">
                    <label class="block bg-gray-200 px-10 py-2 rounded-lg font-bold cursor-pointer hover:bg-gray-300">
                        Upload File
                        <input type="file" class="hidden">
                    </label>
                    <span class="text-[10px] text-red-500 font-bold mt-2 block uppercase">pdf/docx/txt maks 5 MB</span>
                </div>
                
                <div class="flex items-center gap-3 border rounded-xl p-3 pr-8 relative">
                    <div class="bg-red-500 text-white p-2 rounded-lg font-bold text-xs">PDF</div>
                    <span class="text-sm font-semibold">APPL_Clo2.pdf</span>
                    <button class="absolute -top-2 -right-2 bg-black text-white rounded-full w-5 h-5 flex items-center justify-center text-[10px]">X</button>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex items-center gap-4">
                    <label class="w-40 font-bold text-sm">Mata Kuliah<span class="text-red-500">*</span> :</label>
                    <input type="text" value="Analisis Perancangan Perangkat Lunak" class="flex-1 bg-white p-3 rounded-lg shadow-sm border-none outline-none font-semibold text-gray-600">
                </div>
                <div class="flex items-center gap-4">
                    <label class="w-40 font-bold text-sm">Judul Materi<span class="text-red-500">*</span> :</label>
                    <input type="text" value="02 Store Management" class="flex-1 bg-white p-3 rounded-lg shadow-sm border-none outline-none font-semibold text-gray-600">
                </div>
                <div class="flex items-start gap-4">
                    <label class="w-40 font-bold text-sm mt-3">Deskripsi <span class="text-xs text-gray-400 font-normal">(opsional)</span> :</label>
                    <textarea class="flex-1 bg-white p-4 rounded-lg shadow-sm border-none outline-none font-semibold text-gray-600 h-32">Materi Analisis Perancangan Perangkat Lunak CLO 2</textarea>
                </div>
            </div>

            <button class="w-full bg-[#6155F5] text-white py-4 rounded-2xl font-bold flex items-center justify-center gap-3 shadow-lg hover:opacity-90">
                Kirim
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            </button>

            {{-- Tombol Kembali --}}
            <button onclick="window.location.href='/materi'"
            class="mt-12 bg-white px-8 py-2 rounded-lg shadow-sm flex items-center gap-3 font-bold text-sm hover:bg-gray-50 transition-all border border-gray-100">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                Kembali
            </button>
        </div>
    </div>
</div>
@endsection