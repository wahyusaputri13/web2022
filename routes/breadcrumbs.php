<?php

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Gallery
Breadcrumbs::for('gallery', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Gallery', url('gallery'));
});

// Dashboard > News
Breadcrumbs::for('news', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('News', url('news'));
});

// Dashboard > Menu
Breadcrumbs::for('menu', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Menu', url('menu'));
});

// Dashboard > Role
Breadcrumbs::for('role', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Role', url('role'));
});

// Dashboard > Role > Access Role
Breadcrumbs::for('roleaccess', function ($trail) {
    $trail->parent('role');
    $trail->push('Role Access', url('role'));
});

// Dashboard > Setting
Breadcrumbs::for('settings', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Settings', url('settings'));
});

// Dashboard > Submenu
Breadcrumbs::for('submenu', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Submenu', url('submenu'));
});

// Dashboard > Themes
Breadcrumbs::for('themes', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Themes', url('themes'));
});

// Dashboard > Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Users', url('users'));
});

// // Home > About
// Breadcrumbs::for('about', function ($trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });
