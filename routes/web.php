<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Ana Sayfa
Route::get('/homePage', function () {
    return view('homePage');
})->name('home');

// İletişim Sayfası (GET: Formu göster, POST: Formu işle)
Route::get('/iletisim', function () {
    return view('iletisim');
})->name('iletisim');

Route::post('/iletisim', function (Request $request) {
    // Form doğrulama kuralları
    $request->validate([
        'ad' => 'required|min:2',
        'email' => 'required|email',
        'mesaj' => 'required|min:5',
    ]);

    // İstersen burada mesajı kaydedebilirsin

    return back()->with('success', 'Mesajınız başarıyla gönderildi. Teşekkür ederiz!');
});
