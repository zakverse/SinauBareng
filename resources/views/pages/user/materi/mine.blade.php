@extends('components.layout.app')

@section('content')
<div class="flex min-h-screen bg-[#E5E5E5]">
    {{-- Sidebar User --}}
    @include('components.layout.sidebar_user')

    <div class="flex-1 p-10">
        {{-- Breadcrumb --}}
        <h1 class="text-3xl font-bold text-black mb-8">Materi > Materi Saya</h1>

        <div class="flex items-center gap-4 mb-8">
            <div class="relative flex-1 max-w-md shadow-sm rounded-xl overflow-hidden">
                <input type="text" placeholder="Masukan Kata Kunci" class="w-full pl-5 pr-12 py-3 border-none outline-none font-medium text-sm">
                <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-800">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </div>
            
            <div class="flex items-center gap-2 ml-4">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4.5h18m-18 5h18m-18 5h18m-18 5h18"></path></svg>
                <span class="font-bold text-gray-700 text-sm">Filter :</span>
            </div>

            <select class="bg-white px-4 py-2 rounded-lg shadow-sm border-none text-xs font-bold focus:ring-2 focus:ring-[#6155F5]">
                <option>Mata Kuliah</option>
            </select>
            <select class="bg-white px-4 py-2 rounded-lg shadow-sm border-none text-xs font-bold focus:ring-2 focus:ring-[#6155F5]">
                <option>Dosen</option>
            </select>

            <div class="relative group">
                <button class="bg-white px-4 py-2 rounded-lg shadow-sm text-xs font-bold flex items-center gap-2 min-w-[100px] justify-between">
                    Tahun
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="absolute top-full right-0 mt-1 bg-white shadow-xl rounded-lg p-3 w-32 hidden group-hover:block z-10 border border-gray-100">
                    <div class="space-y-2 text-[10px] font-bold">
                        <div class="flex justify-between items-center text-gray-400">2025 <span class="hidden">✓</span></div>
                        <div class="flex justify-between items-center text-black">2024 <span class="text-gray-400 text-[8px]">✓</span></div>
                        <div class="flex justify-between items-center text-gray-400">2023 <span class="hidden">✓</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <table class="w-full text-center">
                <thead>
                    <tr class="bg-[#6155F5] text-white text-sm">
                        <th class="py-5 px-4 font-bold">No</th>
                        <th class="py-5 px-4 font-bold border-l border-white/20">Materi</th>
                        <th class="py-5 px-4 font-bold border-l border-white/20">Matakuliah</th>
                        <th class="py-5 px-4 font-bold border-l border-white/20">Dosen</th>
                        <th class="py-5 px-4 font-bold border-l border-white/20">Tahun</th>
                        <th class="py-5 px-4 font-bold border-l border-white/20">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-[13px] font-semibold">
                    <tr class="border-b bg-white">
                        <td class="py-4">1.</td>
                        <td>Scheduling</td>
                        <td>Sistem Operasi</td>
                        <td>Anggi Zafk.</td>
                        <td>2024</td>
                        <td>
                            <div class="flex justify-center gap-3 items-center">
                                <button title="Lihat"><x-heroicon-o-eye class="w-5 h-5 text-gray-600 hover:text-blue-500"/></button>
                                <button title="Laporkan"><x-heroicon-o-exclamation-triangle class="w-5 h-5 text-gray-600 hover:text-red-500"/></button>
                                <button title="Favorit"><x-heroicon-s-star class="w-5 h-5 text-gray-800"/></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b bg-[#EFEEFF]">
                        <td class="py-4">2.</td>
                        <td>CLO 2</td>
                        <td>Analisis Peranc..</td>
                        <td>Dimas</td>
                        <td>2024</td>
                        <td>
                            <div class="flex justify-center gap-3 items-center text-gray-700">
                                <i class="far fa-eye cursor-pointer"></i>
                                <i class="fas fa-exclamation-triangle cursor-pointer"></i>
                                <i class="fas fa-star cursor-pointer"></i>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="py-4">3.</td>
                        <td>Security</td>
                        <td>Sistem Basis D..</td>
                        <td>Prabowo</td>
                        <td>2024</td>
                        <td>
                            <div class="flex justify-center gap-3 items-center text-gray-700">
                                <i class="far fa-eye cursor-pointer"></i>
                                <i class="fas fa-exclamation-triangle cursor-pointer"></i>
                                <i class="fas fa-star cursor-pointer"></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Tombol Kembali --}}
        <button onclick="window.location.href='/materi'"
        class="mt-12 bg-white px-8 py-2 rounded-lg shadow-sm flex items-center gap-3 font-bold text-sm hover:bg-gray-50 transition-all border border-gray-100">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </button>
    </div>
</div>
@endsection