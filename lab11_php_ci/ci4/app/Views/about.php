<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <h1><?= $title; ?></h1>
    <hr>
    <h1><?= $content; ?></h1>

    <br>
<div class="row">
    <img src="profil.jpg" title="Ahmad" alt="Ahmad" class="image" width="150" style="float: left; border: 2px solid black;">
    <br>
    <center>
        <h1>Ahmad Syukron</h1>
    </center>
    
    <center>
        <p>Nama saya Ahmad Syukron, teman saya biasa memanggil saya Ahmad saya juga seorang, mahasiswa Teknik Informatika di <strong>Universitas Pelita Bangsa.</strong>
        <h3>Biodata Mahasiswa</h3>
        <table>
            <p>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>TI.21.A.1</td>
                    <td>&nbsp;</td>
                </tr>
            </p>
            <p>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Ahmad Syukron</td>
                    <td>&nbsp;</td>
                </tr>
            </p>
            <p>
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td>312110056</td>
                    <td>&nbsp;</td>
                </tr>
            </p>
        </table>
        </p>
    </center>
</div>

    

    <?= $this->include('template/footer'); ?>
</body>
</html>