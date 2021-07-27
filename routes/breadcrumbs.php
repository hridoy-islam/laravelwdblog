<?php

use App\Models\Post;
use App\Models\Product;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});
Breadcrumbs::for('singleblog', function (BreadcrumbTrail $trail, $name) {
    $trail->parent('blog')->push($name, route('singlepost', $name));
});

Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('contact', route('contact'));
});

Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('about', route('about'));
});

Breadcrumbs::for('shop', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('shop', route('shop'));
});

Breadcrumbs::for('cart', function (BreadcrumbTrail $trail) {
    $trail->parent('shop')->push('Cart', route('cart'));
});

Breadcrumbs::for('singleproduct', function (BreadcrumbTrail $trail, $name){
    $trail->parent('shop')->push($name, route('singleproduct', $name));
});

Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $name){
    $trail->parent('blog')->push($name, route('category.slug', $name));
});
