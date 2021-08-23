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

define('NotDirect2', TRUE);

include_once "functions.php";
include "post.php";


$randomnumber = getRandomPostCount(5,15);

$rand_array_post = getLatestPosts($randomnumber);


$id = 1;
$color="";
foreach ($rand_array_post as $post){

    switch ($post["type"]) {
        case "urgent":
            $color="background-color: red;";
            break;
        case "warning":
            $color="background-color: yellow;";
            break;
        case "normal":
            $color="background-color: none;";
            break;
    }


    //echo $id." ".$post["title"]." ".$post["type"]."<br>";
    echo "<div style='". $color."'>";
    echo getPostDetails($id,$post["title"])."</div>";

    $id++;

}