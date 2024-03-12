<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel - Unittesting

Ini adalah program laravel unittesting, program ini bertujuan untuk mengecek data dari sisi backend. Dengan menggunakan test bawaan laravel yaitu 'Feature' atau library eksternal yaitu "PHPUnit".
Keduanya memiliki fungsi dan kerja yang sama.

## Installation
<p>$ cd /var/www/html</p>
<p>$ git clone https://github.com/Dstar18/laravel-unittesting.git</p>

## Create File
<p>create file feature</p>
<p>$ php artisan make:test {namafile}</p>

<p>create file phpunit</p>
<p>$ php artisan make:test {namafile} --unit</p>

## Running Test
<p>running all test</p>
<p>$ php artisan test</p>

<p>running by function test feature</p>
<p>$ vendor/bin/phpunit tests/Feature/{namafile}.php –filter {namafunction}</p>

<p>running by function test phpunit</p>
<p>$ vendor/bin/phpunit tests/Unit/{namafile}.php –filter {namafunction}</p>