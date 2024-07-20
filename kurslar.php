<?php
$kategoriler = ["Programlama","Web Geliştirme","Mobil Uygulama","Ofis Uygulamaları"];
$kurslar = [
        [
            "id" => 1,
            "baslik" => "Web Geliştime Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "1.jpg",
            "onay" => true

        ],
        [
            "id" => 2,
            "baslik" => "Python Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "2.jpg",
            "onay" => true

        ],
        [
            "id" => 1,
            "baslik" => "JavaScript Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "3.jpg",
            "onay" => false

        ],
        ];  

        
?>
        <?php include('partials/_header.php') ?>
        <?php include('partials/_navbar.php') ?>


    <div class="container my-3">
        <div class="row">
            <div class="col-4">
            <?php include('partials/_menu.php') ?>

            </div>
            <div class="col-9">
            <?php foreach($kurslar as $kurs):   ?>

                <?php if($kurs["onay"]):   ?>
                    <?php include('partials/_kurs.php') ?>
                <?php endif;?>


            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php include('partials/_footer.php') ?>

