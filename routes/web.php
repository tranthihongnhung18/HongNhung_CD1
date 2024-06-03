<?php

use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\frontend\ContactController as LienheController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\ProductController as SanphamController;
use App\Http\Controllers\frontend\RegisterController;


use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.home'); //trang chủ
Route::get('/tat-ca-san-pham', [SanphamController::class, 'index']);
Route::get('/chi-tiet-san-pham/{id}', [SanphamController::class, 'product_detail']);
Route::get('/lien-he', [LienheController::class, 'index']);


Route::prefix('admin')->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name("admin.dashboard.index");

    Route::prefix('product')->group(function () {
        Route::get("/", [ProductController::class, "index"])->name("admin.product.index");
        Route::get("trash", [ProductController::class, "trash"])->name("admin.product.trash");
        Route::get("create", [ProductController::class, "create"])->name("admin.product.create");
        Route::get("store", [ProductController::class, "store"])->name("admin.product.store");

        Route::get("edit/{id}", [ProductController::class, "edit"])->name("admin.product.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.product.show");
        Route::get("update/{id}", [ProductController::class, "update"])->name("admin.product.update");
        Route::get("status/{id}", [ProductController::class, "status"])->name("admin.product.status");
        Route::get("delete/{id}", [ProductController::class, "delete"])->name("admin.product.delete");
        Route::get("restore/{id}", [ProductController::class, "restore"])->name("admin.product.restore");
        Route::get("destroy/{id}", [ProductController::class, "destroy"])->name("admin.product.destroy");
    });
    Route::prefix('category')->group(function () {
        Route::get("/", [CategoryController::class, "index"])->name("admin.category.index");
        Route::get("trash", [CategoryController::class, "trash"])->name("admin.category.trash");
        Route::get("create", [CategoryController::class, "create"])->name("admin.category.create");
        Route::get("store", [CategoryController::class, "store"])->name("admin.category.store");

        Route::get("edit/{id}", [CategoryController::class, "edit"])->name("admin.category.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.category.show");
        Route::get("update/{id}", [CategoryController::class, "update"])->name("admin.category.update");
        Route::get("status/{id}", [CategoryController::class, "status"])->name("admin.category.status");
        Route::get("delete/{id}", [CategoryController::class, "delete"])->name("admin.category.delete");
        Route::get("restore/{id}", [CategoryController::class, "restore"])->name("admin.category.restore");
        Route::get("destroy/{id}", [CategoryController::class, "destroy"])->name("admin.category.destroy");
    });
    Route::prefix('brand')->group(function () {
        Route::get("/", [BrandController::class, "index"])->name("admin.brand.index");
        Route::get("trash", [BrandController::class, "trash"])->name("admin.brand.trash");
        Route::get("create", [BrandController::class, "create"])->name("admin.brand.create");
        Route::get("store", [BrandController::class, "store"])->name("admin.brand.store");

        Route::get("edit/{id}", [BrandController::class, "edit"])->name("admin.brand.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.brand.show");
        Route::get("update/{id}", [BrandController::class, "update"])->name("admin.brand.update");
        Route::get("status/{id}", [BrandController::class, "status"])->name("admin.brand.status");
        Route::get("delete/{id}", [BrandController::class, "delete"])->name("admin.brand.delete");
        Route::get("restore/{id}", [BrandController::class, "restore"])->name("admin.brand.restore");
        Route::get("destroy/{id}", [BrandController::class, "destroy"])->name("admin.brand.destroy");
    });
    Route::prefix('user')->group(function () {
        Route::get("/", [UserController::class, "index"])->name("admin.user.index");
        Route::get("trash", [UserController::class, "trash"])->name("admin.user.trash");
        Route::get("create", [UserController::class, "create"])->name("admin.user.create");
        Route::get("store", [UserController::class, "store"])->name("admin.user.store");

        Route::get("edit/{id}", [UserController::class, "edit"])->name("admin.user.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.user.show");
        Route::get("update/{id}", [UserController::class, "update"])->name("admin.user.update");
        Route::get("status/{id}", [UserController::class, "status"])->name("admin.user.status");
        Route::get("delete/{id}", [UserController::class, "delete"])->name("admin.user.delete");
        Route::get("restore/{id}", [UserController::class, "restore"])->name("admin.user.restore");
        Route::get("destroy/{id}", [UserController::class, "destroy"])->name("admin.user.destroy");
    });
    Route::prefix('post')->group(function () {
        Route::get("/", [PostController::class, "index"])->name("admin.post.index");
        Route::get("trash", [PostController::class, "trash"])->name("admin.post.trash");
        Route::get("create", [PostController::class, "create"])->name("admin.post.create");
        Route::get("store", [PostController::class, "store"])->name("admin.post.store");

        Route::get("edit/{id}", [PostController::class, "edit"])->name("admin.post.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.post.show");
        Route::get("update/{id}", [PostController::class, "update"])->name("admin.post.update");
        Route::get("status/{id}", [PostController::class, "status"])->name("admin.post.status");
        Route::get("delete/{id}", [PostController::class, "delete"])->name("admin.post.delete");
        Route::get("restore/{id}", [PostController::class, "restore"])->name("admin.post.restore");
        Route::get("destroy/{id}", [PostController::class, "destroy"])->name("admin.post.destroy");
    });
    Route::prefix('order')->group(function () {

        Route::get("/", [OrderController::class, "index"])->name("admin.order.index");
        Route::get("trash", [OrderController::class, "trash"])->name("admin.order.trash");
        Route::get("create", [OrderController::class, "create"])->name("admin.order.create");
        Route::get("store", [OrderController::class, "store"])->name("admin.order.store");

        Route::get("edit/{id}", [OrderController::class, "edit"])->name("admin.order.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.order.show");
        Route::get("update/{id}", [OrderController::class, "update"])->name("admin.order.update");
        Route::get("status/{id}", [OrderController::class, "status"])->name("admin.order.status");
        Route::get("delete/{id}", [OrderController::class, "delete"])->name("admin.order.delete");
        Route::get("restore/{id}", [OrderController::class, "restore"])->name("admin.order.restore");
        Route::get("destroy/{id}", [OrderController::class, "destroy"])->name("admin.order.destroy");
    });
    Route::prefix('contact')->group(function () {

        Route::get("/", [ContactController::class, "index"])->name("admin.contact.index");
        Route::get("trash", [ContactController::class, "trash"])->name("admin.contact.trash");
        Route::get("create", [ContactController::class, "create"])->name("admin.contact.create");
        Route::get("store", [ContactController::class, "store"])->name("admin.contact.store");

        Route::get("edit/{id}", [ContactController::class, "edit"])->name("admin.contact.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.contact.show");
        Route::get("update/{id}", [ContactController::class, "update"])->name("admin.contact.update");
        Route::get("status/{id}", [ContactController::class, "status"])->name("admin.contact.status");
        Route::get("delete/{id}", [ContactController::class, "delete"])->name("admin.contact.delete");
        Route::get("restore/{id}", [ContactController::class, "restore"])->name("admin.contact.restore");
        Route::get("destroy/{id}", [ContactController::class, "destroy"])->name("admin.contact.destroy");
    });
    Route::prefix('banner')->group(function () {

        Route::get("/", [BannerController::class, "index"])->name("admin.banner.index");
        Route::get("trash", [BannerController::class, "trash"])->name("admin.banner.trash");
        Route::get("create", [BannerController::class, "create"])->name("admin.banner.create");
        Route::get("store", [BannerController::class, "store"])->name("admin.banner.store");

        Route::get("edit/{id}", [BannerController::class, "edit"])->name("admin.banner.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.banner.show");
        Route::get("update/{id}", [BannerController::class, "update"])->name("admin.banner.update");
        Route::get("status/{id}", [BannerController::class, "status"])->name("admin.banner.status");
        Route::get("delete/{id}", [BannerController::class, "delete"])->name("admin.banner.delete");
        Route::get("restore/{id}", [BannerController::class, "restore"])->name("admin.banner.restore");
        Route::get("destroy/{id}", [BannerController::class, "destroy"])->name("admin.banner.destroy");
    });
    Route::prefix('menu')->group(function () {

        Route::get("/", [MenuController::class, "index"])->name("admin.menu.index");
        Route::get("trash", [MenuController::class, "trash"])->name("admin.menu.trash");
        Route::get("create", [MenuController::class, "create"])->name("admin.menu.create");
        Route::get("store", [MenuController::class, "store"])->name("admin.menu.store");

        Route::get("edit/{id}", [MenuController::class, "edit"])->name("admin.menu.edit");
        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.menu.show");
        Route::get("update/{id}", [MenuController::class, "update"])->name("admin.menu.update");
        Route::get("status/{id}", [MenuController::class, "status"])->name("admin.menu.status");
        Route::get("delete/{id}", [MenuController::class, "delete"])->name("admin.menu.delete");
        Route::get("restore/{id}", [MenuController::class, "restore"])->name("admin.menu.restore");
        Route::get("destroy/{id}", [MenuController::class, "destroy"])->name("admin.menu.destroy");
    });
    Route::prefix('topic')->group(function () {

        Route::get("/", [TopicController::class, "index"])->name("admin.topic.index");
        Route::get("trash", [TopicController::class, "trash"])->name("admin.topic.trash");
        Route::get("create", [TopicController::class, "create"])->name("admin.topic.create");
        Route::get("store", [TopicController::class, "store"])->name("admin.topic.store");

        Route::get("show/{id}", [TopicController::class, "show"])->name("admin.topic.show");
        Route::get("edit/{id}", [TopicController::class, "edit"])->name("admin.topic.edit");
        Route::get("update/{id}", [TopicController::class, "update"])->name("admin.topic.update");
        Route::get("status/{id}", [TopicController::class, "status"])->name("admin.topic.status");
        Route::get("delete/{id}", [TopicController::class, "delete"])->name("admin.topic.delete");
        Route::get("restore/{id}", [TopicController::class, "restore"])->name("admin.topic.restore");
        Route::get("destroy/{id}", [TopicController::class, "destroy"])->name("admin.topic.destroy");
    });
});
