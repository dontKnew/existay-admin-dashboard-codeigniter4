<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('home');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get("/", "HomeController::home", ["as"=>"home"]);
$routes->get("apartment/(:alpha)", "HomeController::StateApartment/$1", ["as"=>"apartment"]);

$routes->get("apartment/(:alpha)/(:any)", "CityController::CityApartment/$1/$2", ["as"=>"apartment/city"]);

$routes->get("login", "LoginController::home", ["as"=>"login"]);
$routes->get("about", "AboutController::home", ["as"=>"about"]);
$routes->get("offers", "OfferController::home", ["as"=>"offers"]);

$routes->group("admin", function($routes){
    /*NORMAL ROUTES*/
    $routes->get('login', 'Admin\AdminController::index', ["as"=>"admin/login"]);
    $routes->post('login', 'Admin\AdminController::adminLogin', ["as"=>"admin/login"]);
    $routes->get('logout', 'Admin\AdminController::logout', ["as"=>"admin/logout"]);

    /* AUTHENTICATE ROUTES */
    /*Dashboard*/
    $routes->match(['post','get'],'dashboard', 'Admin\DashboardController::index', ["as"=>"admin/dashboard", "filter"=>"admin"]);

    /*HOME */
    $routes->match(['get','post'],'home', 'Admin\HomeController::index', ["as"=>"admin/home", "filter"=>"admin"]);
    $routes->match(['post'],'home', 'Admin\HomeController::updateHome', ["as"=>"admin/home/update", "filter"=>"admin"]);

    /*STATES*/
    $routes->match(['get','post'],'states', 'Admin\StateController::index', [ "as"=>"admin/state", "filter"=>"admin"]);
    $routes->match(['get','post'], 'states/add', 'Admin\StateController::addPost', [ "as"=>"admin/state/add", "filter"=>"admin"]);

    $routes->get('states/edit/(:num)', 'Admin\StateController::editPost/$1', [ "as"=>"admin/state/edit", "filter"=>"admin"]);
    $routes->post('states/update', 'Admin\StateController::updatePost', [ "as"=>"admin/state/update", "filter"=>"admin"]);
    $routes->get('states/(:num)', 'Admin\StateController::deletePost/$1', [ "as"=>"admin/state/delete", "filter"=>"admin"]);

    /*STATE APARTMENT*/
    $routes->match(['get','post'],'state-apartment', 'Admin\StateApartmentController::index', [ "as"=>"admin/apartment", "filter"=>"admin"]);
    $routes->match(['get','post'], 'state-apartment/add', 'Admin\StateApartmentController::addApartment', [ "as"=>"admin/apartment/add", "filter"=>"admin"]);

    $routes->get('state-apartment/edit/(:num)', 'Admin\StateApartmentController::editApartment/$1', [ "as"=>"admin/apartment/edit", "filter"=>"admin"]);
    $routes->post('state-apartment/update', 'Admin\StateApartmentController::updateApartment', [ "as"=>"admin/apartment/update", "filter"=>"admin"]);
    $routes->get('state-apartment/(:num)', 'Admin\StateApartmentController::deleteApartment/$1', [ "as"=>"admin/apartment/delete", "filter"=>"admin"]);

    /*PHOTO GALLERY*/
    $routes->match(['post','get'],'photo-gallery', 'Admin\PhotoGalleryController::index', [ "as"=>"admin/gallery", "filter"=>"admin"]);
    $routes->match(['get','post'], 'photo-gallery/add', 'Admin\PhotoGalleryController::addGallery', [ "as"=>"admin/gallery/add", "filter"=>"admin"]);

    $routes->get('photo-gallery/edit/(:num)', 'Admin\PhotoGalleryController::editGallery/$1', [ "as"=>"admin/gallery/edit", "filter"=>"admin"]);
    $routes->post('photo-gallery/update', 'Admin\PhotoGalleryController::updateGallery', [ "as"=>"admin/gallery/update", "filter"=>"admin"]);
    $routes->get('photo-gallery/(:num)', 'Admin\PhotoGalleryController::deleteGallery/$1', [ "as"=>"admin/gallery/delete", "filter"=>"admin"]);

    /*CITY SLIDER*/
    $routes->match(['post','get'],'city-slider', 'Admin\CitySliderController::index', [ "as"=>"admin/slider", "filter"=>"admin"]);
    $routes->match(['get','post'], 'city-slider/add', 'Admin\CitySliderController::addSlider', [ "as"=>"admin/slider/add", "filter"=>"admin"]);

    $routes->get('city-slider/edit/(:num)', 'Admin\CitySliderController::editSlider/$1', [ "as"=>"admin/slider/edit", "filter"=>"admin"]);
    $routes->post('city-slider/update', 'Admin\CitySliderController::updateSlider', [ "as"=>"admin/slider/update", "filter"=>"admin"]);
    $routes->get('city-slider/(:num)', 'Admin\CitySliderController::deleteSlider/$1', [ "as"=>"admin/slider/delete", "filter"=>"admin"]);


    /*TESTIMONIAL*/
    $routes->match(['post','get'],'testimonial', 'Admin\TestimonialController::index', [ "as"=>"admin/testimonial", "filter"=>"admin"]);
    $routes->match(['get','post'], 'testimonial/add', 'Admin\TestimonialController::addTestimonial', [ "as"=>"admin/testimonial/add", "filter"=>"admin"]);

    $routes->get('testimonial/edit/(:num)', 'Admin\TestimonialController::editTestimonial/$1', [ "as"=>"admin/testimonial/edit", "filter"=>"admin"]);
    $routes->post('testimonial/update', 'Admin\TestimonialController::updateTestimonial', [ "as"=>"admin/testimonial/update", "filter"=>"admin"]);
    $routes->get('testimonial/(:num)', 'Admin\TestimonialController::deleteTestimonial/$1', [ "as"=>"admin/testimonial/delete", "filter"=>"admin"]);

    /*FAQS*/
    $routes->get('faqs', 'Admin\FaqsController::index', [ "as"=>"admin/faqs", "filter"=>"admin"]);
    $routes->post('faqs', 'Admin\FaqsController::index', [ "as"=>"admin/faqs", "filter"=>"admin"]);
    $routes->match(['get','post'], 'faqs/add', 'Admin\FaqsController::addFaqs', [ "as"=>"admin/faqs/add", "filter"=>"admin"]);

    $routes->get('faqs/edit/(:num)', 'Admin\FaqsController::editFaqs/$1', [ "as"=>"admin/faqs/edit", "filter"=>"admin"]);
    $routes->post('faqs/update', 'Admin\FaqsController::updateFaqs', [ "as"=>"admin/faqs/update", "filter"=>"admin"]);
    $routes->get('faqs/(:num)', 'Admin\FaqsController::deleteFaqs/$1', [ "as"=>"admin/faqs/delete", "filter"=>"admin"]);

    /* ADMIN */
    $routes->get('change-password', 'Admin\AdminController::changePassword', ["as"=>"admin/change-password", "filter"=>"admin", ]);
    $routes->post('change-password', 'Admin\AdminController::changePassword', ["as"=>"admin/change-password", "filter"=>"admin"]);
    $routes->match(['get','post'],'profile', 'Admin\AdminController::adminProfile', ["as"=>"admin/profile", "filter"=>"admin"]);

});


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
