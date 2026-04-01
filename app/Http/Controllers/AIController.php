<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function generateSoal(Request $request)
{
    $request->validate([
        'file_materi' => 'required|mimes:pdf|max:10240',
        'jenis_soal' => 'required|array'
    ]);

    try {
        $parser = new Parser();
        $pdf = $parser->parseFile($request->file('file_materi')->path());
        
        // Bersihkan teks dari karakter malformed UTF-8
        $rawText = $pdf->getText();
        $fullText = preg_replace('/[^\x20-\x7E\t\n\r]/', '', $rawText); 

        // Pastikan name-nya sama dengan di blade (biasanya perintah_tambahan)
        $perintahUser = $request->input('perintah_tambahan', ''); 
        $jenis = implode(', ', $request->jenis_soal);

        // Buat instruksi yang lebih tegas
        $instruksi = !empty($perintahUser) 
            ? "Jawab pertanyaan user ini: '{$perintahUser}' secara mendalam."
            : "Buatkan 3 soal kuis tipe {$jenis}.";

        $prompt = "Kamu adalah asisten dosen yang pintar. Gunakan MATERI berikut sebagai satu-satunya referensi.\n\n" .
                "TUGAS: {$instruksi}\n\n" .
                "MATERI:\n{$fullText}";

        $apiKey = env('GEMINI_API_KEY');
        
        $response = Http::withHeaders([
            'x-goog-api-key' => $apiKey,
            'Content-Type' => 'application/json'
        ])
        ->timeout(240)
        ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-3-flash-preview:generateContent", [
            'contents' => [['parts' => [['text' => $prompt]]]]
        ]);

        $result = $response->json();
        $soal = $result['candidates'][0]['content']['parts'][0]['text'] ?? 'AI tidak memberikan jawaban.';

        return back()->with('hasil_soal', $soal);

    } catch (\Exception $e) {
        return back()->with('error', 'Error: ' . $e->getMessage());
    }
}
    }
