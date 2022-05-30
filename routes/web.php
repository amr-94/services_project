<?php

use App\Http\Controllers\SearchController;
use App\Http\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminAddSlideComponent;
use App\Http\Livewire\Admin\AdminContact;
use App\Http\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Admin\AdminEditSlideComponent;
use App\Http\Livewire\Admin\Adminprofile;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\Admin\AdminServiceProvider;
use App\Http\Livewire\Admin\AdminServicesByCategoryComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Admin\Editadminprofile;
use App\Http\Livewire\AdminDashbord;
use App\Http\Livewire\Changelocation;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CustomerDashbord;
use App\Http\Livewire\ProviderDashbord;
use App\Http\Livewire\Home;
use App\Http\Livewire\ServiceByCategoryComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\Services;
use App\Http\Livewire\Sprovider\EditSproviderProfile;
use App\Http\Livewire\Sprovider\Sprovideraddservice;
use App\Http\Livewire\Sprovider\SproviderProfile;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Home::class)->name('Home');
// Route::get('/Service-Categories', ServiecCategories::class)->name('home.service_categories');
Route::get('/Service-Categories', ServiceCategoriesComponent::class, )->name('home.service_categories');
Route::get('/Services', Services::class,)->name('home.services');

route::get('/{category_slug}/services',ServiceByCategoryComponent::class)->name('home.services_by_category');
Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');

Route::get('/autocomolete',[SearchController::class, 'autocomolete'])->name('autocomolete');
Route::post('/search',[SearchController::class, 'searchservice'])->name('searchservice');
// route::get('/admin/all-services', AdminServiceComponent::class)->name('admin.all_services');
Route::get('/contact-us',ContactComponent::class)->name('home.contact_us');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// for Admin
Route::middleware(['auth:sanctum', 'verified', 'AuthAdmin'])->group(function () {
Route::get('/admin/dashbord', AdminDashbord::class )->name('admin.dashbord');
Route::get('/admin/service-categories',AdminServiceCategoryComponent::class )->name('admin.service_categories');
Route::get('/admin/service-category/add',AdminAddServiceCategoryComponent::class)->name('admin.add_category');
route::get('/admin/service-category/edit/{category_id}',AdminEditServiceCategoryComponent::class)->name('admin.edit_service_category');
route::get('/admin/all-services',AdminServiceComponent::class)->name('admin.all_services');
route::get('/admin/{category_slug}/services',AdminServicesByCategoryComponent::class)->name('admin.services_by_catecgory');
route::get('/admin/service/add', AdminAddServiceComponent::class)->name('admin.add_service');
route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');

Route::get('/admin/slider',AdminSliderComponent::class)->name('admin.slider');
Route::get('/admin/slide/edit/{slide_id}',AdminEditSlideComponent::class)->name('admin.edit_slide');
Route::get('/admin/slide/add',AdminAddSlideComponent::class)->name('admin.add_slide');
Route::get('/change-location', Changelocation::class)->name('admin.change_location');
Route::get('/admin/contacts',AdminContact::class)->name('admin.contact_us');
Route::get('/admin/service-provider',AdminServiceProvider::class)->name('admin.service_provider');
route::get('/admin/profile', Adminprofile::class)->name('admin.profile');
route::get('/admin/profile/edit', Editadminprofile::class)->name('admin.edit.profile');


});

// for Provider
Route::middleware(['auth:sanctum', 'verified', 'AuthProvider'])->group(function () {
    Route::get('/provider/dashbord', ProviderDashbord::class)->name('provider.dashbord');
    route::get('/provider/profile',SproviderProfile::class)->name('Sprovider.profile');
    route::get('/sprovider/profile/edit',EditSproviderProfile::class)->name('Sprovider.edit.profile');
    route::get('/sprovider/service/add', Sprovideraddservice::class)->name('sproviser.add_service');

});

// for Customer
Route::middleware(['auth:sanctum', 'verified', ])->group(function () {
    Route::get('/customer/dashbord', CustomerDashbord::class)->name('customer.dashbord');
});

// Route::get('/admin/service/add/{service_slug}',AdminEditServiceCategoryComponent::class )->name('admin.edit_service');
