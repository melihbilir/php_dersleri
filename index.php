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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
    <a href="/" class="navbar-brand"    >CourseApp</a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Kurslar</a>
            </li>
            
        </ul>
        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <div class="col-4">
                <div class="list-group">
                    <?php for ($i=0; $i <count($kategoriler) ; $i++):                  
                     ?>

                    <a href="#" class="list-group-item list-group-item-action">
                        <?php echo $kategoriler[$i]; ?>

                    </a>

                    <?php endfor;?>

                </div>
            </div>
            <div class="col-9">
            <?php foreach($kurslar as $kurs):   ?>

                <?php if($kurs["onay"]):   ?>
                        
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="img/<?php echo $kurs['resim'];?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            
                            <div class="card-body">
                            <h5 class="card-title">
                                    <?php echo $kurs["baslik"];   ?>

                            </h5>

                            <p><?php echo $kurs["aciklama"];   ?></p>
                                 </div>

                                 
                         </div>
                    </div>
                </div>
                </div>
                <?php endif;?>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    
</body>
</html>