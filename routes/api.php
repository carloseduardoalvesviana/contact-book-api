<?php

use App\Http\Controllers\ContactEmailController;
use App\Http\Controllers\ContactPhoneController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

// Contacts
Route::get('/contacts', [ContactsController::class, 'index']);
Route::post('/contacts', [ContactsController::class, 'store']);
Route::get('/contacts/{id}', [ContactsController::class, 'show']);
Route::get('/contacts/find/{name}', [ContactsController::class, 'findByName']);
Route::put('/contacts/{id}', [ContactsController::class, 'update']);
Route::delete('/contacts/{id}', [ContactsController::class, 'delete']);

// Emails
Route::post('/contacts/{id}/email', [ContactEmailController::class, 'store']);
Route::delete('/contacts/{id}/email/{emailId}', [ContactEmailController::class, 'delete']);

// Phones
Route::post('/contacts/{id}/phone', [ContactPhoneController::class, 'store']);
Route::delete('/contacts/{id}/phone/{phoneId}', [ContactPhoneController::class, 'delete']);
