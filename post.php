<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

define('NotDirect', TRUE);

include_once "functions.php";
include_once "posts.php";



if(!isset($id)){
    $id=1;
}
if(!isset($title)){
    $title="Özel yazı";
}
if(!isset($type)){
    $type="urgent";
}
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


//var_dump($rand_array_post);






