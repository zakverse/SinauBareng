@extends('components.layout.app')

@section('content')
<div class="flex min-h-screen bg-[#E5E5E5]">
    @include('components.layout.sidebar_user')

    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-black mb-8">Materi > Cari & Unduh Materi</h1>

        <div class="flex items-center gap-4 mb-8">
            <div class="relative flex-1 max-w-md">
                <input type="text" placeholder="Masukan Kata Kunci" class="w-full pl-5 pr-12 py-3 rounded-xl shadow-sm border-none outline-none">
                <button class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </div>
            
            <span class="font-bold text-gray-700">Filter :</span>
            <select class="bg-white px-4 py-2 rounded-lg shadow-sm border-none text-sm">
                <option>Mata Kuliah</option>
            </select>
            <select class="bg-white px-4 py-2 rounded-lg shadow-sm border-none text-sm">
                <option>Dosen</option>
            </select>
            <select class="bg-white px-4 py-2 rounded-lg shadow-sm border-none text-sm">
                <option>Tahun</option>
            </select>
        </div>

        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
            <table class="w-full text-center border-collapse">
                <thead>
                    <tr class="bg-[#6155F5] text-white">
                        <th class="py-4 px-4 border-r border-white/20">No</th>
                        <th class="py-4 px-4 border-r border-white/20">Materi</th>
                        <th class="py-4 px-4 border-r border-white/20">Matakuliah</th>
                        <th class="py-4 px-4 border-r border-white/20">Dosen</th>
                        <th class="py-4 px-4 border-r border-white/20">Tahun</th>
                        <th class="py-4 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium">
                    <tr class="border-b bg-white">
                        <td class="py-4">1.</td>
                        <td>Scheduling</td>
                        <td>Sistem Operasi</td>
                        <td>Anggi Zafk.</td>
                        <td>2024</td>
                        <td><button class="bg-gray-200 px-4 py-1 rounded-lg text-[10px] font-bold">Unduh</button></td>
                    </tr>
                    <tr class="border-b bg-[#EFEEFF]">
                        <td class="py-4">2.</td>
                        <td>CLO 2</td>
                        <td>Analisis Peranc..</td>
                        <td>Dimas</td>
                        <td>2024</td>
                        <td><button class="bg-gray-200 px-4 py-1 rounded-lg text-[10px] font-bold">Unduh</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button onclick="window.location.href ='/materi'"
            class="mt-10 bg-white px-6 py-2 rounded-lg shadow-sm flex items-center gap-2 font-bold text-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali
        </button>
    </div>
</div>
@endsection