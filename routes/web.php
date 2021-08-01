<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\View\viewController;

//=============View site=================

Route::get('/', [viewController::class, 'index']);

Route::get('/search-faq/{search}', [viewController::class, 'faq_search']);

//=============Admin site=================

Route::get('/home', [FAQController::class, 'index']);

Route::post('/add_faq', [FAQController::class, 'faq_add']);

Route::post('/update_faq', [FAQController::class, 'faq_update']);

Route::get('/manage_faq', [FAQController::class, 'faq_manage']);

Route::get('/edit_faq/{id}', [FAQController::class, 'faq_edit']);

Route::get('/delete_faq/{id}', [FAQController::class, 'faq_delete']);

Route::get('/unpublished_faq/{id}', [FAQController::class, 'unpublished_faq']);

Route::get('/published_faq/{id}', [FAQController::class, 'published_faq']);

Route::get('/priority-set/', [FAQController::class, 'priority_set']);
