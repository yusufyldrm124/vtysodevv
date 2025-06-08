<?php
function head_ustkisim(){
echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSEY</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
</head>
<body>';
}
function header_menu(){
    echo'

    <section id="menu">
        <div id="logo">universeY</div>

        <nav>
            <a href="index2.html"><i class="fas fa-home ikon"></i> ANASAYFA</a>
            <a href="hakkımızda.php"><i class="fas fa-info ikon"></i>HAKKIMIZDA</a>
            <a href=""><i class="fas fa-graduation-cap ikon"></i>PROJELERİMİZ</a>
            <a href="iletisim.php"><i class="fas fa-map-pin"></i>İLETİŞİM</a>
        </nav>
    </section>';
}

function ana_menü(){
    echo'


    <main>
        <section class="hero">
            <div class="hero-content">
                <h2>GALAKSİLER ARASI YOLCULUK</h2>
                <h2>UZAY ÇAĞI</h2>
                <p>Hedefimiz bu yeni uzay çağinda hiç durmadan büyük projelerimizi tamamlayabilmek.</p>
                <div class="hero-buttons">
                    <a href="#" class="button">Devamını oku...</a>
                    <a href="#" class="button alt">Hizmetlerimizi Keşfedin</a>
                </div>
            </div>
        </section>';
}

function ana_icerik_makale(){
    echo'

        <section class="specialization">
            <h2>FAALİYETLERİMİZ</h2>
            <div class="services">
                <div class="service">
                    <img src="images/milky-way-5422901_640.jpg" alt="foto4" width="400px" height="400px">
                    <h3>ULUSLARASI FAALİYETLER</h3>
                    <p> uzay ve havacılıkla ilgili uluslararası kuruluşlarda Türkiye’yi temsil etmek ve bu kuruluşlarla
                        ilgili faaliyetleri yürütmekle görevlidir.</p>
                </div>
                <div class="service">
                    <img src="images/rocket-launch-67723_640.jpg" alt="foto2" height="400px" width="400px">
                    <h3>UZAY PROGRAMI</h3>
                    <p>Uzay Programı; önümüzdeki 10 yılı kapsayacak şekilde, ülkemizin uzay politikaları alanındaki
                        vizyonu, stratejileri, hedefleri ve projelerini içermektedir.</p>
                </div>
                <div class="service">
                    <img src="images/international-space-station-63128_640.jpg" alt="foto3" height="400px"
                        width="400px">
                    <h3>PROJELER</h3>
                    <p>universeY,Uzay ve havacılık bilimi ve teknolojilerinde dışa bağımlılığı azaltmak, uluslararası
                        alanda rekabet gücünü artırmak, bilimsel ve teknolojik altyapıyı oluşturmak ve her türlü yeni
                        teknolojinin geliştirilmesi amacıyla Ar-Ge ve yüksek teknoloji girişimciliği destek programları
                        hazırlamakla görevlidir.</p>
                </div>
            </div>
        </section>
    </main>';
}
function footer(){
    echo'
    <footer>
        <section>
            <div>
                <h4>universeY</h4>
                <p>universeY, havada ve uzayda bilinmeyeni araştırıyor, insanlık yararına yenilikler üretiyor ve
                    keşifleriyle dünyaya ilham veriyor.<br><br><br>

                    universeY nin Misyonu Hakkında</p>
            </div>
            <div>
                <H4>BAĞLANTILAR</H4>
                FİYATLANDIRMA<br>AYARLAR<br>SİPARİŞLER<br>YARDIM
            </div>
            <div>
                <h4>İLETİŞİM</h4>
                ANKARA, ÇANKAYA 06000, TR<br>
                tr.yusuf.yldrm2002@gmail.com<br>
                + 0 542 215 7095<br>

            </div>
            <p class="clearfix"></p>
        </section>
    </footer>
    </section>

</body>

</html>';
}


function iletisim(){
echo'
 <section id="İLETİŞİM">
        <div class="contanier">
            <h1 id="h1iletisim">İLETİŞİM</h1>
            <form action="index2.php" method="post">
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="ad soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="telefon numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="email adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="konu başlıgı" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" placeholder="mesaj giriniz" rows="10" required
                        class="form-control"></textarea>

                    <input type="submit" value="gönder">
                </div>
                <div id="adres">
                    <h2>ADRES: </h2>
                    <p>mehmet akif ersoy mah.</p>
                    <p>akyıldız caddesi</p>
                    <p>oğuz bey sokak no:15</p>
                    <p>0542 215 70 95</p>
                    <p>Email: tr.yusuf.yldrm2002@gmail.com</p>
                </div>
            </div>
            </form>
            <footer>

                <div id="universeY">UNIVERSEY 2025 tüm hakları saklıdır.</div>

            </footer>
        </div>

    </section>
    <style>
        body {
            background: url(images/pexels-philippedonn-1169754.jpg);
            background-size: cover;
            padding: 50px;
            height: auto;
            text-align: center;

        }

        #h1iletisim {
            color: aliceblue;
        }

        #iletisimopak {
            background: rgba(255, 255, 255, 0.2);
            padding: 30px 20px;
            border-radius: 5px;
            margin-bottom: 50px;
            height: 550px;
        }

        #formgroup {
            width: 700px;
            float: left;
            height: 500px;
            text-align: left;
        }

        #solform {
            width: 50%;
            float: right;

        }

        #sagform {
            width: 50%;
            float: right;

        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            line-height: 1.5;
            color: #495057;
            background-color: white;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid#ced4da;
        }

        textarea {
            font-family: Arial;
        }

        input[type="submit"] {
            cursor: pointer;
            background-color: #445c6e;
            font-size: 18px;
            letter-spacing: 1px;
            padding: 10px 30px;
            color: white;
            border: 2px solid white;
            border-radius: 5px;
            margin-left: 10px;
            margin-top: 10px;
        }

        #adres {
            color: white;
            width: 450px;
            float: right;
            padding: 30px;
            height: 500px;
            text-align: left;

        }

        h2 {
            font-size: 30px;
            color: turquoise;

        }

        #universeY {
            color: white;
        }
    </style>
';

}

function hakkımızda(){
    echo'
    <section id="hakkımızda">

        <h1>Hakkımızda</h1>

        <div id="contanier">
            <div id="sol">
                <h2 id="h2sol">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolore et esse
                    delectus? Ipsum nesciunt, necessitatibus magnam sequi odio sit possimus nobis excepturi officiis
                    omnis repudiandae aperiam harum porro earum?</h2>
            </div>

            <div id="sag">
                <span>L</span>
                <p id="psag">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima suscipit ipsum molestiae,
                    ea illo eaque odit, nisi sapiente explicabo nobis accusantium natus consequuntur fugit at dolor
                    excepturi et adipisci facere.</p>
            </div>

            <img src="images/ocean-6530523.jpg" alt="" class="img-fluid mt100">

            <p id="pson">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quidem eum fugit odit dolores
                ex facere enim repudiandae quibusdam, mollitia velit inventore eos id est earum, commodi eius et.
                Dignissimos.</p>
        </div>
    </section>
    <style>
        body {
            background-size: cover;
            padding: 50px;
            height: auto;
            text-align: center;
        }

        #hakkımızda {
            background-color: #f8f9fa;
            padding: 50px;
            text-align: center;
            text-transform: capitalize;
            font-weight: 600;
        }

        h1 {
            font-size: 55px;
            color: #003666;
            font-weight: 600;
        }

        #contanier {
            width: 1200px;
            height: auto;
            margin: auto;
        }

        #sol {
            float: left;
            border-right: 3px solid #445c6e;
            font-size: 30px;
            width: 400px;
            color: #445c6e;
        }

        #h2sol {
            line-height: 1.6;
            font-size: 22px;
            font-weight: 600;

        }

        #h2sol,
        #sag {
            margin: 0;
            padding: 0;
            margin-top: 20px;
        }

        img {
            height: 350px;
            width: 1200px;
        }

        span {
            font-size: 50px;
            margin-right: 7px;
            line-height: 42px;
            color: #003666;
            font-weight: 600;
            float: left;
        }

        #sag {
            float: right;
            width: 750px;
            color: #999999;
            text-align: center;
            letter-spacing: 1px;
            font-size: 15px;
            line-height: 1.8;
            font-weight: 100;
        }



        .mt100 {

            margin-top: 100px;
        }

        #pson {
            color: #999999;
            letter-spacing: 1px;
            font-size: 15px;
            line-height: 1.8;
        }
    </style>';
}




?>

