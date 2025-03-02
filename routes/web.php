<?php

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::domain('{subdomain}.diary.test')->group(function () {
    Route::get('/', function ($subdomain) {

        try {
            $user = User::where('subdomain', $subdomain)->firstOrFail();
            $notes = Note::where('user_id', $user->id)
                ->whereNotNull('published_at')
                ->latest()
                ->paginate(15);

            return view('public.tenant-welcome', compact('user', 'notes'));
        } catch (Exception $e) {
            throw new NotFoundHttpException("Subdomain '{$subdomain}' not found");
        }
    })->name('tenant-welcome');
});

Route::get('/', function (){

    $notes = Note::whereNotNull('published_at')
        ->latest()
        ->paginate(15);

    return view('welcome', compact('notes'));
});


Route::view('manage-notes', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
