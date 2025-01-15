<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkUserRole;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadPdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TicketController::class, 'index'])
    ->name('index');

Route::middleware([
    'auth:sanctum', 'checkUserRole',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('ticket/create/{live}', [TicketController::class, 'create'])
        ->name('ticket.create');
    Route::post('ticket/store/{live}', [TicketController::class, 'store'])
        ->name('ticket.store');
});

Route::get('/{record}/pdf/download', [DownloadPdfController::class, 'download'])->name('ticket.pdf.download');
