<?php

use App\Models\Evaluation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\TindakLanjutController;
use App\Http\Controllers\TanggapanPimpinanController;
use App\Http\Controllers\TanggapanReviewerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// USER
Route::get('/', function () {
    return view('login');
})->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard.dashboard');
    });
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/profile', function () {
        return view('dashboard.profile');
    });

    // OPERATOR
    Route::get('/operator', [OperatorController::class, 'index']);
    Route::post('/hapus/{evaluation:id}', [OperatorController::class, 'destroy']);
    Route::get('/form-evaluasi', [EvaluationController::class, 'index']);
    Route::post('/form-evaluasi', [EvaluationController::class, 'store']);

    // KPS
    Route::get('/kps', function () {
        if (Auth::user()->role != 'kps') {
            return redirect('/home');
        } else {
            $evaluations = Evaluation::all();
            return view('dashboard.kps', ['evaluations' => $evaluations]);
        }
    });
    Route::get('/tindak-lanjut/{evaluation:id}', [TindakLanjutController::class, 'index']);
    Route::post('/tindak-lanjut/{evaluation:id}', [TindakLanjutController::class, 'update']);

    // PIMPINAN
    Route::get('/pimpinan', function () {
        if (Auth::user()->role != 'pimpinan') {
            return redirect('/home');
        } else {
            $evaluations = Evaluation::all();
            return view('dashboard.pimpinan', ['evaluations' => $evaluations]);
        }
    });
    Route::get('/tanggapan-pimpinan/{evaluation:id}', [TanggapanPimpinanController::class, 'index']);
    Route::post('/tanggapan-pimpinan/{evaluation:id}', [TanggapanPimpinanController::class, 'update']);

    // REVIEWER
    Route::get('/reviewer', function () {
        if (Auth::user()->role != 'reviewer') {
            return redirect('/home');
        } else {
            $evaluations = Evaluation::all();
            return view('dashboard.reviewer', ['evaluations' => $evaluations]);
        }
    });

    Route::get('/edit-evaluasi/{evaluation:id}', [EvaluationController::class, 'edit']);
    Route::post('/edit-evaluasi/{evaluation:id}', [EvaluationController::class, 'update']);

    Route::get('/tanggapan-reviewer/{evaluation:id}', [TanggapanReviewerController::class, 'index']);
    Route::post('/tanggapan-reviewer/{evaluation:id}', [TanggapanReviewerController::class, 'update']);
});
