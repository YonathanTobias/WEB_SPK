<html>
<head>
    <title>SPK Topsis</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <?php
    include "header.php"
    ?>
</head>
<body>
<div class="container">
    <p>SOAL</p>
    <p> Alternatif : Sepatu 1, Sepatu 2, Sepatu 3</p>
    <p>Kriteria : model (C1), brand (C2), kualitas (C3), dan harga (C4).</p>
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Sepatu 1</th>
            <th>Sepatu 2</th>
            <th>Sepatu 3</th>
            <th>Bobot</th>
        </tr>
        <tr>
            <td>C1</td>
            <td><?php echo $c11=3 ?></td>
            <td><?php echo $c12=4 ?></td>
            <td><?php echo $c12=5 ?></td>
            <td><?php echo $bobot1=30 ?></td>
        </tr>
        <tr>
            <td>C2</td>
            <td><?php echo $c11=5 ?></td>
            <td><?php echo $c12=3 ?></td>
            <td><?php echo $c12=4 ?></td>
            <td><?php echo $bobot2=25 ?></td>
        </tr>
        <tr>
            <td>C3</td>
            <td><?php echo $c11=3 ?></td>
            <td><?php echo $c12=2 ?></td>
            <td><?php echo $c12=5 ?></td>
            <td><?php echo $bobot3=20 ?></td>
        </tr>
        <tr>
            <td>C4</td>
            <td><?php echo $c11=1 ?></td>
            <td><?php echo $c12=3 ?></td>
            <td><?php echo $c12=1 ?></td>
            <td><?php echo $bobot4=25 ?></td>
        </tr>
    </table>
    <p>Skor Normalisasi</p>
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Sepatu 1</th>
            <th>Sepatu 2</th>
            <th>Sepatu 3</th>
        </tr>
        <tr>
            <td>C1</td>
            <td><?php echo $c11x=3/(sqrt((pow(3,2)+pow(4,2)+pow(5,2)))) ?></td>
            <td><?php echo $c12x=4/(sqrt((pow(3,2)+pow(4,2)+pow(5,2)))) ?></td>
            <td><?php echo $c12x=5/(sqrt((pow(3,2)+pow(4,2)+pow(5,2)))) ?></td>
        </tr>
        <tr>
            <td>C2</td>
            <td><?php echo $c21x=5/(sqrt((pow(5,2)+pow(3,2)+pow(4,2)))) ?></td>
            <td><?php echo $c22x=3/(sqrt((pow(5,2)+pow(3,2)+pow(4,2)))) ?></td>
            <td><?php echo $c22x=4/(sqrt((pow(5,2)+pow(3,2)+pow(4,2)))) ?></td>
        </tr>
        <tr>
            <td>C3</td>
            <td><?php echo $c31x=3/(sqrt((pow(3,2)+pow(2,2)+pow(5,2)))) ?></td>
            <td><?php echo $c32x=2/(sqrt((pow(3,2)+pow(2,2)+pow(5,2)))) ?></td>
            <td><?php echo $c32x=5/(sqrt((pow(3,2)+pow(2,2)+pow(5,2)))) ?></td>
        </tr>
        <tr>
            <td>C4</td>
            <td><?php echo $c41x=1/(sqrt((pow(1,2)+pow(3,2)+pow(1,2)))) ?></td>
            <td><?php echo $c42x=3/(sqrt((pow(1,2)+pow(3,2)+pow(1,2)))) ?></td>
            <td><?php echo $c42x=1/(sqrt((pow(1,2)+pow(3,2)+pow(1,2)))) ?></td>
        </tr>
    </table>
    <p>Skor Normalisasi * Bobot</p>
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Sepatu 1</th>
            <th>Sepatu 2</th>
            <th>Sepatu 3</th>
        </tr>
        <tr>
            <td>C1</td>
            <td><?php echo $c11xb=3/(sqrt((pow(3,2)+pow(4,2)+pow(5,2))))*$bobot1 ?></td>
            <td><?php echo $c12xb=4/(sqrt((pow(3,2)+pow(4,2)+pow(5,2))))*$bobot1 ?></td>
            <td><?php echo $c13xb=5/(sqrt((pow(3,2)+pow(4,2)+pow(5,2))))*$bobot1 ?></td>
        </tr>
        <tr>
            <td>C2</td>
            <td><?php echo $c21xb=5/(sqrt((pow(5,2)+pow(3,2)+pow(4,2))))*$bobot2 ?></td>
            <td><?php echo $c22xb=3/(sqrt((pow(5,2)+pow(3,2)+pow(4,2))))*$bobot2 ?></td>
            <td><?php echo $c23xb=4/(sqrt((pow(5,2)+pow(3,2)+pow(4,2))))*$bobot2 ?></td>
        </tr>
        <tr>
            <td>C3</td>
            <td><?php echo $c31xb=3/(sqrt((pow(3,2)+pow(2,2)+pow(5,2))))*$bobot3 ?></td>
            <td><?php echo $c32xb=2/(sqrt((pow(3,2)+pow(2,2)+pow(5,2))))*$bobot3 ?></td>
            <td><?php echo $c33xb=5/(sqrt((pow(3,2)+pow(2,2)+pow(5,2))))*$bobot3 ?></td>
        </tr>
        <tr>
            <td>C4</td>
            <td><?php echo $c41xb=1/(sqrt((pow(1,2)+pow(3,2)+pow(1,2))))*$bobot4 ?></td>
            <td><?php echo $c42xb=3/(sqrt((pow(1,2)+pow(3,2)+pow(1,2))))*$bobot4 ?></td>
            <td><?php echo $c43xb=1/(sqrt((pow(1,2)+pow(3,2)+pow(1,2))))*$bobot4 ?></td>
        </tr>
    </table>
    <div class="row">
        <div class="col_sm_6">
        <table class="table table-bordered">
            <caption>Solusi Ideal Positif</caption>
            <tr>
                <th></th>
                <th>A+</th>
            </tr>
            <tr>
                <td>C1</td>
                <td><?php echo $amax1=max($c11xb,$c12xb,$c13xb) ?></td>
            </tr>
            <tr>
                <td>C2</td>
                <td><?php echo $amax2=max($c21xb,$c22xb,$c23xb) ?></td>
            </tr>
            <tr>
                <td>C3</td>
                <td><?php echo $amax3=max($c31xb,$c32xb,$c33xb) ?></td>
            </tr>
            <tr>
                <td>C4</td>
                <td><?php echo $amax4=min($c41xb,$c42xb,$c43xb) ?></td>
            </tr>
        </table>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col_sm_6">
        <table class="table table-bordered">
        <caption>Solusi Ideal NEGATIF</caption>
            <tr>
                <th></th>
                <th>A-</th>
            </tr>
            <tr>
                <td>C1</td>
                <td><?php echo $amin1=min($c11xb,$c12xb,$c13xb) ?></td>
            </tr>
            <tr>
                <td>C2</td>
                <td><?php echo $amin2=min($c21xb,$c22xb,$c23xb) ?></td>
            </tr>
            <tr>
                <td>C3</td>
                <td><?php echo $amin3=min($c31xb,$c32xb,$c33xb) ?></td>
            </tr>
            <tr>
                <td>C4</td>
                <td><?php echo $amin4=max($c41xb,$c42xb,$c43xb) ?></td>
            </tr>
        </table>
        </div>
        &nbsp;&nbsp;
        <div class="col_sm_6">
        <table class="table table-bordered">
            <caption>Jarak alternatif dengan solusi ideal positif</caption>
            <tr>
                <th> </th>
                <th>d1+</th>
                <th>d2+</th>
                <th>d3+</th>
            </tr>
            <tr>
                <td>hasil</td>
                <td><?php echo $dpos1=sqrt(pow(($amax1-$c11xb),2)+pow(($amax2-$c21xb),2)+pow(($amax3-$c31xb),2)+pow(($amax4-$c41xb),2))?></td>
                <td><?php echo $dpos2=sqrt(pow(($amax1-$c12xb),2)+pow(($amax2-$c22xb),2)+pow(($amax3-$c32xb),2)+pow(($amax4-$c42xb),2))?></td>
                <td><?php echo $dpos3=sqrt(pow(($amax1-$c13xb),2)+pow(($amax2-$c23xb),2)+pow(($amax3-$c33xb),2)+pow(($amax4-$c43xb),2))?></td>
            </tr>
        </table>
        <div class="col_sm_6">
        <table class="table table-bordered">
            <caption>Jarak alternatif dengan solusi ideal negatif</caption>
            <tr>
                <th> </th>
                <th>d1-</th>
                <th>d2-</th>
                <th>d3-</th>
            </tr>
            <tr>
                <td>Hasil</td>
                <td><?php echo $dmin1=sqrt(pow(($c11xb-$amin1),2)+pow(($c21xb-$amin2),2)+pow(($c31xb-$amin3),2)+pow(($c41xb-$amin4),2)) ?></td>
                <td><?php echo $dmin2=sqrt(pow(($c12xb-$amin1),2)+pow(($c22xb-$amin2),2)+pow(($c32xb-$amin3),2)+pow(($c42xb-$amin4),2)) ?></td>
                <td><?php echo $dmin3=sqrt(pow(($c13xb-$amin1),2)+pow(($c23xb-$amin2),2)+pow(($c33xb-$amin3),2)+pow(($c43xb-$amin4),2)) ?></td>
            </tr>
        </table>
    </div>
</div>
</div>
<p>Skor Akhir</p>
<table class="table table-bordered">
    <tr>
        <th></th>
        <th>V1</th>
        <th>V2</th>
        <th>V3</th>
    </tr>
    <tr>
        <td>Hasil</td>
        <td><?php echo $v1=$dmin1/($dpos1+$dmin1) ?></td>
        <td><?php echo $v2=$dmin2/($dpos2+$dmin2) ?></td>
        <td><?php echo $v3=$dmin3/($dpos3+$dmin3) ?></td>
    </tr>
</table>
<h3>Alternatif Yang Terpilih Adalah Sepatu 3</h3>
</div>
</body>
</html>