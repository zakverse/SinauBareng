@extends('components.layout.app')

@section('content')
<div class="flex flex-col h-screen bg-gray-100">
    <div class="p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Generate Soal</h1>

        <div class="bg-white rounded-2xl shadow-sm min-h-[450px] p-6 mb-6 border border-gray-200 overflow-y-auto">
            <div class="flex flex-col items-center justify-center h-full text-gray-400">
                <p>Hasil generate soal akan muncul di sini...</p>
            </div>
        </div>

        <div class="relative">
            <div class="flex flex-wrap items-end gap-4">
                
                <div class="flex gap-4 mb-2">
                    <div class="bg-white p-3 rounded-xl shadow-sm border border-gray-200 text-center">
                        <label class="cursor-pointer">
                            <span class="block bg-gray-200 px-4 py-1 rounded text-sm font-semibold">Pilih File</span>
                            <span class="text-[10px] text-red-500">pdf/docx/txt maks 50 MB</span>
                            <input type="file" class="hidden">
                        </label>
                    </div>

                    <div class="bg-white p-3 rounded-xl shadow-sm border border-gray-200">
                        <span class="block text-[10px] font-bold mb-1">Jenis Soal:</span>
                        <div class="text-[10px] space-y-1">
                            <label class="flex items-center gap-1">
                                <input type="checkbox" checked> Pilihan Ganda
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox" checked> Benar / Salah
                            </label>
                            <label class="flex items-center gap-1">
                                <input type="checkbox"> Isian Singkat
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex items-center bg-white rounded-2xl border border-gray-300 px-4 py-3 shadow-sm">
                    <button class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </button>
                    <input type="text" placeholder="Buatkan 2 soal mengenai UI/UX" class="flex-1 px-4 outline-none text-gray-700 bg-transparent">
                    <button class="text-gray-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                    </button>
                </div>

                <button class="bg-[#FFC107] hover:bg-[#e6af06] text-black font-bold px-8 py-4 rounded-2xl flex items-center gap-2 shadow-md transition-all active:scale-95">
                    Generate
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </button>

            </div>
        </div>
    </div>
</div>
@endsection