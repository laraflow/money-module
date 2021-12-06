<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('money.', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Money ', route('money.'));
});

