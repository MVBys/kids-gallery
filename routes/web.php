<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContestController;

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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/message/{message}', [MainController::class, 'message'])->name('message');
Route::get('/contest/{id}', [ContestController::class, 'index'])->name('contest');
Route::get('/complitedcontest/{contest_id}', [WorkController::class, 'getWorksComplitedContest'])->name('works.complited.contest');
Route::get('/votingcontest/{contest_id}', [WorkController::class, 'getWorkVotingContest'])->name('works.voting.contest');
Route::get('/participate/choose-contest', [ContestController::class, 'chooseContestForParticipate'])->name('contest.for.participate');
Route::get('/participate/form/{contest_id}', [ContestController::class, 'registrationInContest'])->name('form.registration.contest');








Route::post('/nextwork/{work_id}', [WorkController::class, 'getNextVotingWork'])->name('next.voting.work');
Route::post('/regwork/{contest_id}', [WorkController::class, 'regWorkInContest'])->name('reg.work.in.contest');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
