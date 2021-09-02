<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\MotaadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\MotaadminController@dashboard_1');
Route::get('/index-2', 'App\Http\Controllers\MotaadminController@dashboard_2');
Route::get('/index-3', 'App\Http\Controllers\MotaadminController@dashboard_3');
Route::get('/index-4', 'App\Http\Controllers\MotaadminController@dashboard_4');
Route::post('/latest-sales', 'App\Http\Controllers\MotaadminController@latest_sales');
Route::get('/event', 'App\Http\Controllers\MotaadminController@event');
Route::get('/event-detail', 'App\Http\Controllers\MotaadminController@event_detail');
Route::get('/customers', 'App\Http\Controllers\MotaadminController@customers');
Route::get('/analytics', 'App\Http\Controllers\MotaadminController@analytics');
Route::get('/reviews', 'App\Http\Controllers\MotaadminController@reviews');
Route::get('/app-calender', 'App\Http\Controllers\MotaadminController@app_calender');
Route::get('/app-profile', 'App\Http\Controllers\MotaadminController@app_profile');
Route::get('/post-details', 'App\Http\Controllers\MotaadminController@post_details');
Route::get('/chart-chartist', 'App\Http\Controllers\MotaadminController@chart_chartist');
Route::get('/chart-chartjs', 'App\Http\Controllers\MotaadminController@chart_chartjs');
Route::get('/chart-flot', 'App\Http\Controllers\MotaadminController@chart_flot');
Route::get('/chart-morris', 'App\Http\Controllers\MotaadminController@chart_morris');
Route::get('/chart-peity', 'App\Http\Controllers\MotaadminController@chart_peity');
Route::get('/chart-sparkline', 'App\Http\Controllers\MotaadminController@chart_sparkline');
Route::get('/ecom-checkout', 'App\Http\Controllers\MotaadminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\MotaadminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\MotaadminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\MotaadminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\MotaadminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\MotaadminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\MotaadminController@ecom_product_order');
Route::get('/email-compose', 'App\Http\Controllers\MotaadminController@email_compose');
Route::get('/email-inbox', 'App\Http\Controllers\MotaadminController@email_inbox');
Route::get('/email-read', 'App\Http\Controllers\MotaadminController@email_read');
Route::get('/form-editor-summernote', 'App\Http\Controllers\MotaadminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\MotaadminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\MotaadminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\MotaadminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\MotaadminController@form_wizard');
Route::get('/map-jqvmap', 'App\Http\Controllers\MotaadminController@map_jqvmap');
Route::get('/page-error-400', 'App\Http\Controllers\MotaadminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\MotaadminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\MotaadminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\MotaadminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\MotaadminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\MotaadminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\MotaadminController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\MotaadminController@page_login');
Route::get('/page-register', 'App\Http\Controllers\MotaadminController@page_register');
Route::get('/table-bootstrap-basic', 'App\Http\Controllers\MotaadminController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\MotaadminController@table_datatable_basic');
Route::get('/uc-lightgallery', 'App\Http\Controllers\MotaadminController@uc_lightgallery');
Route::get('/uc-nestable', 'App\Http\Controllers\MotaadminController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\MotaadminController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\MotaadminController@uc_select2');
Route::get('/uc-sweetalert', 'App\Http\Controllers\MotaadminController@uc_sweetalert');
Route::get('/uc-toastr', 'App\Http\Controllers\MotaadminController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\MotaadminController@ui_accordion');
Route::get('/ui-alert', 'App\Http\Controllers\MotaadminController@ui_alert');
Route::get('/ui-badge', 'App\Http\Controllers\MotaadminController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\MotaadminController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\MotaadminController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\MotaadminController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\MotaadminController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\MotaadminController@ui_dropdown');
Route::get('/ui-grid', 'App\Http\Controllers\MotaadminController@ui_grid');
Route::get('/ui-list-group', 'App\Http\Controllers\MotaadminController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\MotaadminController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\MotaadminController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\MotaadminController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\MotaadminController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\MotaadminController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\MotaadminController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\MotaadminController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\MotaadminController@widget_basic');
