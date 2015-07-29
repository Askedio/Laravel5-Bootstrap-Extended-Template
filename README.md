# Laravel5-Bootstrap-Extended-Template
An easily extendable Bootstrap 3 Template for Laravel 5.1, based on SB Admin 2
https://github.com/IronSummitMedia/startbootstrap-sb-admin-2

![Example](http://i.imgur.com/B5s7VX8.png)

# How-to Use
* Download zip
* Extract into your laravel project
* Browse to resources/views

## welcome.blade.php
In this view you will see all the options you have to extend the master template.
Include parents in the sections that have them to keep the defaults in the master.

## layouts/master.blade.php
In this file you will see the master layout. Each section provides an includable area, most sections are wrapped in an include to be overridden.
Make changes to this file you want to see on every page

## layouts/partials
In these files you will be able to provide the defaults for those sections.
These will be visible on all pages.
