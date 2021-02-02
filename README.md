# Fitur _Product Compare_ dengan Menggunakan Laravel 7

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Pembuka

_Bismillah_,
Aplikasi web ini adalah prototipe untuk fitur _Product Compare_ dengan menggunakan Laravel 7.

## Prasyarat

Pastikan di perangkat kita telah terinstal [MySQL](https://www.mysql.com/downloads/) atau [MariaDB](https://downloads.mariadb.org/) agar dapat mengakses _database_. Gunakan juga _web server_ seperti [Apache HTTP Server](https://httpd.apache.org/download.cgi) atau [NginX](http://nginx.org/en/download.html).
Opsi lain, kita dapat menginstal [XAMPP](https://www.apachefriends.org/download.html) atau [Laragon](https://laragon.org/download/index.html) (khusus _Windows_) yang hadir dalam paket _bundle_ untuk _web server_ dan DBMS (_Database Management System_).

Selain itu, kita juga memerlukan [Composer](https://getcomposer.org/download/) untuk menginstal _library_ yang dibutuhkan. Disarankan juga untuk menginstall [Git](https://git-scm.com/downloads).

## Persiapan

Buat _database_ kosong dengan nama `product-comparison`

## Pemasangan

Ada dua cara yang bisa dilakukan untuk menyalin aplikasi web ini ke perangkat kita:

1.  Dengan Git

    -   Buka `terminal`, `bash`, `cmd`, atau `git bash`
    -   Pastikan kita berada pada direktori yang kita inginkan untuk menyimpan aplikasi web ini
    -   Jalankan perintah:

        ```bash
        git clone git@github.com:iqbaleff214/product-comparison-laravel-7.git
        ```

    -   Aplikasi web telah terpasang di perangkat

2.  _Download_ ZIP

    -   Kita juga dapat mengunduh _file_ yang berupa zip, dengan menekan tombol Code berwarna hijau kemudian tekan _`Download ZIP`_ atau dapat juga dengan menekan [tautan ini](https://github.com/iqbaleff214/product-comparison-laravel-7/archive/main.zip).
    -   _Extract file_ zip yang telah didownload di _folder_ atau direktori yang diinginkan.

## Konfigurasi

Kita dapat membuka aplikasi web terlebih dahulu menggunakan editor kesayangan kita masing-masing, entah itu [Visual Studio Code](https://code.visualstudio.com/download), [Sublime Text](https://www.sublimetext.com/3), atau bahkan [PhpStorm](https://www.jetbrains.com/phpstorm/download/) yang berbayar.

-   Buka `terminal`, `bash`, `cmd`, atau `git bash` dan pastikan kita telah berada di dalam _folder_ atau direktori aplikasi web ini
-   Salin _file_ `.env.example` dan ganti namanya menjadi `.env`, dengan menggunakan perintah:

    ```bash
    cp .env.example .env
    ```

-   Buka _file_ `.env` tersebut dan lakukan penyesuaian terhadap _DB_DATABASE_, _DB_USERNAME_, dan _DB_PASSWORD_
-   Jalankan perintah:

    ```bash
    composer install
    ```

-   Dengan begitu semua _dependency_ dari aplikasi web kita akan terinstal dengan sendirinya
-   Kemudian jalankan perintah:

    ```bash
    php artisan key:generate
    ```

-   Perintah tersebut digunakan untuk membuat _encryption key_ untuk aplikasi kita.
-   Setelah itu jalankan perintah:

    ```bash
    php artisan migrate --seed
    ```

-   Perintah tersebut digunakan untuk mengisi _database_ kita yang kosong dengan skema yang telah ada di aplikas web ini, Sedangkan parameter `--seed` digunakan untuk mengisi _record_ dengan data acak ke dalam _table_ yang baru saja dimigrasikan.
-   Tahap konfigurasi telah selesai.

## Menjalankan

-   Untuk menjalankan aplikasi web ini, buka `terminal`, `bash`, `cmd`, atau `git bash` kemudian jalankan perintah:

    ```bash
    php artisan serve
    ```

-   Secara _default_, aplikasi web akan berjalan pada [http://localhost:8000](http://localhost:8000) dan dapat diakses melalui _browser_.

## Penutup

_Alhamdulillah_, aplikasi web ini tentunya memiliki banyak kekurangan dan masih bisa ditingkatkan lagi. Harapannya aplikasi web ini dapat menjadi bahan referensi dan dikembangkan menjadi lebih baik kedepannya.
