<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Auth routes
Route::prefix('/')->group(function (): void {
    Route::get('/sign-in', fn () => Inertia::render('auth/sign-in'))->name('auth.sign-in');

    Route::get('/sign-in-2', fn () => Inertia::render('auth/sign-in-2'))->name('auth.sign-in');

    Route::get('/sign-up', fn () => Inertia::render('auth/sign-up'))->name('auth.sign-up');

    Route::get('/forgot-password', fn () => Inertia::render('auth/forgot-password'))->name('auth.forgot-password');

    Route::get('/otp', fn () => Inertia::render('auth/otp'))->name('auth.otp');
});

// Authenticated routes
// Dashboard
Route::get('/', fn () => Inertia::render('authenticated/dashboard'))->name('dashboard');

// Users
Route::get('/users', fn () => Inertia::render('authenticated/users'))->name('users.index');

// Tasks
Route::get('/tasks', fn () => Inertia::render('authenticated/tasks'))->name('tasks.index');

// Apps
Route::get('/apps', fn () => Inertia::render('authenticated/apps'))->name('apps.index');

// Chats
Route::get('/chats', fn () => Inertia::render('authenticated/chats'))->name('chats.index');

Route::get('/help-center', fn () => Inertia::render('authenticated/help-center'))->name('help-center');

// Settings
Route::prefix('settings')->name('settings.')->group(function (): void {
    Route::get('/', fn () => Inertia::render('authenticated/settings'))->name('index');

    Route::get('/profile', fn () => Inertia::render('authenticated/settings/profile'))->name('profile');

    Route::get('/account', fn () => Inertia::render('authenticated/settings/account'))->name('account');

    Route::get('/appearance', fn () => Inertia::render('authenticated/settings/appearance'))->name('appearance');

    Route::get('/notifications', fn () => Inertia::render('authenticated/settings/notifications'))->name('notifications');

    Route::get('/display', fn () => Inertia::render('authenticated/settings/display'))->name('display');
    Route::get('/help-center', fn () => Inertia::render('authenticated/settings/display'))->name('display');
});

// Error pages
Route::prefix('errors')->name('error.')->group(function (): void {
    Route::get('forbidden', fn () => Inertia::render('errors/forbidden'))->name('forbidden');

    Route::get('unauthorized', fn () => Inertia::render('errors/unauthorized'))->name('unauthorized');

    Route::get('maintenance-error', fn () => Inertia::render('errors/maintenance'))->name('maintenance');

    Route::get('internal-server-error', fn () => Inertia::render('errors/internal-server'))->name('maintenance');

    // Fallback for 404
    Route::fallback(fn () => Inertia::render('not-found'));
});
