<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleUserController;

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ComparteController;
use App\Http\Controllers\DisponibilidadHorarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfSolicitudController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('root');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::any('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('auth/google', [GoogleUserController::class, 'redirectToGoogle' ]);
Route::get('auth/google/callback', [GoogleUserController::class, 'handleGoogleCallback' ]);

Route::middleware('auth.user')->group( function () {
  Route::get('home', [HomeController::class, 'index'])->name('home.index');
  Route::get('admin/perfil', [HomeController::class, 'perfil'])->name('admin.perfil');
  Route::put('admin/perfil', [HomeController::class, 'perfilUpdate'])->name('admin.perfil');

  Route::resource('usuarios', UsuarioController::class);

  // Route::get('comparte_duoc', [ComparteController::class, 'index'])->name('comparte.index');


});
// Route::get('pdf', [PdfSolicitudController::class,'uno'])->name('pdf.uno');

// use Maatwebsite\Excel\Facades\Excel;

// Route::get('/export-main', function () {
//   return Excel::download(new MainExport, 'sales.xls');
// });
