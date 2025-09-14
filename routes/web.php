<?php
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::redirect('/','/home');

Route::get('/home',[CustomerController::class, 'showAllCustomers']);