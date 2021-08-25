<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */
if (!defined('NotDirect')) define('NotDirect', TRUE); // function sayfamızı açabilecek sayfalara NotDirect tanımlıyoruz ki onlar açabilsinler

include_once "functions.php";  // function klasörümüzü bir kez çağarıyoruz
//include_once "post.php";


$randomnumber = getRandomPostCount(5,30); // random bir sayı oluşturuyoruz

$rand_array_posts = getLatestPosts($randomnumber); // random sayımızı getLatestPosts içine gönderiyoruz ve bize post dizisi dönüyor


foreach ($rand_array_posts as $id => $post) {// { ex : $post["title"] => string(7) "Yazı 3" $post["type"]=> string(6) "normal"

    include('post.php');  //post sayfasını bizim yeni id ve postumuzla çağarıyoruz
}