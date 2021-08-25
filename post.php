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

if (!defined('NotDirect')) define('NotDirect', TRUE); // function sayfamızı açabilecek sayfalara NotDirect tanımlıyoruz ki onlar açabilsinler

include_once "functions.php"; // function klasörümüzü bir kez çağarıyoruz
//include_once "posts.php";



if(!isset($id)){ // id yok ise id yi 1 olarak belirtiyoruz
    $id=1;
}
if(!isset($post["title"])){ // title yok ise tittle yi belirtiyoruz
    $title="Özel yazı";
}else{
    $title=$post["title"]; // title var ise tittle yi $post["title"] den çekiyoruz
}
if(!isset($post["type"])){ // type yok ise type yi belirtiyoruz
    $type="normal";
}else {
    $type=$post["type"]; // type var ise type yi $post["type"] den çekiyoruz
}
    switch ($type) { // type için renklendirme işlemini switch ile yapıyoruz
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
    echo "<div style='". $color."'>";//renklenecek divi burda başlatıyoruz
    echo getPostDetails($id,$title)."</div>"; //gelen id ve title burda post detaylarını alacağımız fonksiyona gönderiyoruz



//var_dump($rand_array_post);






