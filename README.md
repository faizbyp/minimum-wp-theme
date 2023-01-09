# minimum-wp-theme

# Fitur

1. Template custom page untuk halaman utama
2. Template custom page untuk tiap page baru
3. Template custom page untuk tiap single post baru
4. Template custom page untuk kategori (menampilkan list post di kategori)
5. Custom css dan skrip js
6. Menu (navbar)

# Struktur File

## index.php

Basis template utama yang akan digunakan oleh Wordpress dalam berbagai page turunan. Diisi header dan footer kemudian konten utama di tengahnya.

## front-page.php

Basis template untuk halaman utama (jika web disetting untuk memiliki halaman static di depan). Serupa dengan index.php.

## style.css

Stylesheet untuk mengubah tampilan tema. Biasanya berada di root folder. Deskripsi tema ditulis pada file ini.

## folder css dan js

Berisi Bootstrap dan JQuery untuk keperluan styling dan demo dari fungsi pada functions.php

## header.php

Berisi head html yang diambil dari fungsi get_header() serta membuka tag <body>. Bisa juga berisi navbar atau pun header yang selalu muncul di banyak page.

## footer.php

Berisi body html yang diambil dari fungsi get_footer() serta menutup tag </body>. Bisa juga berisi navbar atau pun header yang selalu muncul di banyak page.

## page.php

Template untuk tiap page lain pada website.

## single.php

Template untuk tiap post pada website.

## archive.php

Template untuk tiap kategori post (arsip) pada website.

## functions.php

Berisi fungsi-fungsi (hook) yang ada pada Wordpress untuk menambahkan fungsional pada tema.

Sumber:

[https://www.youtube.com/watch?v=pFMgAWkrk8o&list=TLPQMDkwMTIwMjMjfrvO7W7rQg](https://www.youtube.com/watch?v=pFMgAWkrk8o&list=TLPQMDkwMTIwMjMjfrvO7W7rQg)
