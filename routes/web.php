<?php

use Illuminate\Support\Facades\Route;

// =====================
// Halaman Utama (Home)
// =====================
Route::get('/', function () {
    return view('home');
})->name('home');

// =====================
// Halaman Projects
// =====================
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');

// =====================
// Halaman Contact
// =====================
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// =====================
// Form Contact (POST)
// =====================
Route::post('/contact/submit', function () {
    // Tambahkan logika pengiriman form di sini
    return response()->json([
        'success' => true,
        'message' => 'Pesan kamu sudah terkirim! Terima kasih telah menghubungi saya.'
    ]);
})->name('contact.submit');
