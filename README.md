# UAS PEMROGRAMMAN WEB

## Nama Kelompok

1. Ilhan Manzis (12221938)
2. Muhammad Nur Falak M (12221923)
3. Akbar Zakaria (12221889)
4. Hasan Ibrahim Sansyah (12221921)

Assalamualaikum wr wb. ini adalah project terakhir kami dari mata kuliah Pemrogramman Web. kami membuat website pembayaran spp sekolah dengan menggunakan framework PHP Code Igniter 4 dan database MySql.

berikut link videonya :

##[link video](https://youtu.be/K1WQ34nslok)

## installation

sebelum menjalankan, ikuti langkah berikut ini

1. duplikat file "env" kemudian rename file duplikat menjadi ".env"
   ```
   cp env .env
   ```
2. buka file ".env", isi yang diperlukan
3. jalankan perintah berikut pada terminal

   - membuat database
     ```
     php db:create spp
     ```
   - migration
     ```
     php spark migrate
     ```

4. untuk menjalankan servernya
   ```
   php spark serve
   ```

untuk yang menggunakan xampp, buka file ".env". pada bagian "app.baseURL" ubah menjadi link yang mengarah ke folder project anda yang ada didalam htdocs
contoh "app.baseURL = 'http://localhost/ci/public/' "
