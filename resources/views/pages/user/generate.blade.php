@php
    $title = "Generate Soal";
@endphp

@extends('components.layout.app')

@section('content')
<div class="flex min-h-screen bg-[#f3f4f6]">
    
    @include('components.layout.sidebar_user')

    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <div class="p-8 h-full flex flex-col">
            <h1 class="text-4xl font-bold text-gray-800 mb-8">Generate Soal</h1>

            <div class="flex-1 bg-white rounded-[32px] shadow-sm p-8 mb-6 border border-gray-100 overflow-y-auto flex items-center justify-center">
                <div class="text-center">
                    <div class="text-gray-300 mb-4">
                        <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0012 18.75c-1.03 0-1.9-.4-2.593-1.003l-.548-.547z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-400 font-medium">Belum ada soal yang digenerate. Mulai dengan ketik perintah di bawah!</p>
                </div>
            </div>

            <div class="flex items-end gap-4 bg-transparent">
                
                <div class="flex gap-3">
                    <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 text-center min-w-[120px]">
                        <label class="cursor-pointer">
                            <span class="block bg-gray-100 text-gray-700 px-3 py-1.5 rounded-xl text-xs font-bold mb-1">Pilih File</span>
                            <span class="text-[9px] text-red-400 font-medium">pdf/docx/txt max 50MB</span>
                            <input type="file" class="hidden">
                        </label>
                    </div>

                    <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 min-w-[140px]">
                        <span class="block text-[10px] font-bold text-gray-500 mb-2 uppercase tracking-wider">Jenis Soal:</span>
                        <div class="text-[11px] space-y-1.5 font-semibold text-gray-700">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" checked class="rounded text-indigo-600 focus:ring-indigo-500"> Pilihan Ganda
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" checked class="rounded text-indigo-600 focus:ring-indigo-500"> Benar / Salah
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" checked class="rounded text-indigo-600 focus:ring-indigo-500"> Isian Singkat
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex items-center bg-white rounded-[28px] border border-gray-200 px-6 py-4 shadow-sm focus-within:border-indigo-300 focus-within:ring-4 focus-within:ring-indigo-50/50 transition-all">
                    <button class="text-gray-400 hover:text-indigo-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </button>
                    <input type="text" placeholder="Buatkan 2 soal mengenai UI/UX" class="flex-1 px-4 outline-none text-gray-700 placeholder-gray-400 font-medium bg-transparent">
                    <button class="text-gray-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                    </button>
                </div>

                <button class="bg-[#FFC107] hover:bg-[#FFB300] text-black font-extrabold px-10 py-5 rounded-[28px] flex items-center gap-3 shadow-lg shadow-yellow-200/50 transition-all active:scale-95">
                    <span>Generate</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </button>

            </div>
        </div>
    </div>
</div>
@endsection