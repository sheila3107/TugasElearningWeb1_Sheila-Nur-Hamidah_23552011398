#  FoodZone Restaurant & Cafe - Sistem Informasi Landing Page

Selamat datang di repositori **FoodZone**, sebuah project landing page statis yang dibangun menggunakan **Laravel 11** dan **Blade Template Engine**. Project ini dibuat sebagai bagian dari tugas mata kuliah Pemrograman Web.

##  Deskripsi Project
FoodZone adalah sistem informasi sederhana untuk restoran dan kafe yang menampilkan menu andalan secara dinamis. Project ini berfokus pada implementasi struktur layout yang rapi, penggunaan komponen Blade, serta desain yang responsif menggunakan Bootstrap 5.

##  Fitur Utama
- **Blade Templating**: Menggunakan `@extends`, `@section`, dan `@yield` untuk struktur yang modular.
- **Blade Components**: Navigasi (Navbar) dan Footer dipisahkan menggunakan `@include`.
- **Data Dinamis**: Menampilkan daftar menu melalui variabel array dari Route ke View.
- **Desain Responsif**: Tampilan tetap rapi di perangkat mobile maupun desktop berkat Bootstrap 5.
- **Custom Styling**: Gambar menu memiliki ukuran yang seragam (`250px`) dengan efek *hover* yang interaktif.

##  Teknologi yang Digunakan
- **Framework**: [Laravel 11](https://laravel.com)
- **Template Engine**: Blade
- **Frontend**: Bootstrap 5, Google Fonts (Poppins)
- **Language**: PHP 8.2+

##  Struktur Folder Penting
```text
Tugas1sela/
├── public/
│   └── images/          # Tempat menyimpan gambar (steak, burger, espresso, dll)
├── resources/
│   └── views/
│       ├── components/  # Navbar & Footer (@include)
│       ├── layouts/     # Master Template (@extends)
│       └── index.blade.php
└── routes/
    └── web.php          # Tempat pengaturan data menu

## **Footer dan Navbar**
<img width="960" height="449" alt="image" src="https://github.com/user-attachments/assets/255f33eb-06dc-4d69-af0c-baef4c3fe257"/>
<img width="960" height="447" alt="image" src="https://github.com/user-attachments/assets/c2e294ab-91b7-466a-a944-7e150d9e87f2"/>
<img width="960" height="449" alt="image" src="https://github.com/user-attachments/assets/957d1d72-841d-4748-ac98-60691bae17d0"/>
