<html>
<head>
    <title>SPK AHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <?php
    include "header.php"
    ?>
</head>
<body>
<div class="container">
    <p>SOAL</p>
    <p> Alternatif : Atlanta, Birmingham, Charlotte</p>
    <p>Kriteria : Pangsa pasar pelanggan, Tingkat pendapatan, Infrastruktur, Transportasi</p>
    <table class="table table-bordered">
            <tr>
                <th>Kriteria</th>
                <th>Pasar</th>
                <th>pendapatan</th>
                <th>Infrastruktur</th>
                <th>Transportasi</th>
            </tr>
            <tr>
                <td>Pasar</td>
                <td>1</td>
                <td>1/3</td>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr>
                <td>pendapatan</td>
                <td>3</td>
                <td>1</td>
                <td>5</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Infrastruktur</td>
                <td>1/2</td>
                <td>1/5</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Transportasi</td>
                <td>1/4</td>
                <td>1/3</td>
                <td>1/3</td>
                <td>1</td>
            </tr>
    </table>
    <br>
    <div class="row">
    <div class="col_sm_6">
    <table class="table table-bordered">
        <caption>Tabel Pasar</caption>
            <tr>
                <th>Pasar</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <td>Atlanta</td>
                <td>1</td>
                <td>4</td>
                <td>7</td>
            </tr>
            <tr>
                <td>Birmingham</td>
                <td>1/4</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Charlotte</td>
                <td>1/7</td>
                <td>1/2</td>
                <td>1</td>
            </tr>
    </table>
    </div>
    &nbsp;
    <div class="col_sm_6">
    <table class="table table-bordered">
        <caption>Tabel pendapatan</caption>
            <tr>
                <th>pendapatan</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <td>Atlanta</td>
                <td>1</td>
                <td>1/6</td>
                <td>1/4</td>
            </tr>
            <tr>
                <td>Birmingham</td>
                <td>6</td>
                <td>1</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Charlotte</td>
                <td>4</td>
                <td>1/3</td>
                <td>1</td>
            </tr>
    </table>
    </div>
    &nbsp;
    <div class="col_sm_6">
    <table class="table table-bordered">
        <caption>Tabel Infrastruktur</caption>
            <tr>
                <th>insfrastruktur</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <td>Atlanta</td>
                <td>1</td>
                <td>1/3</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Birmingham</td>
                <td>3</td>
                <td>1</td>
                <td>6</td>
            </tr>
            <tr>
                <td>Charlotte</td>
                <td>1/5</td>
                <td>1/6</td>
                <td>1</td>
            </tr>
    </table>
    </div>
    &nbsp;
    <div class="col_sm_6">
    <table class="table table-bordered">
        <caption>Tabel Transportasi</caption>
            <tr>
                <th>Transportasi</th>
                <th>Atlanta</th>
                <th>Birmingham</th>
                <th>Charlotte</th>
            </tr>
            <tr>
                <td>Atlanta</td>
                <td>1</td>
                <td>1/2</td>
                <td>1/7</td>
            </tr>
            <tr>
                <td>Birmingham</td>
                <td>2</td>
                <td>1</td>
                <td>1/2</td>
            </tr>
            <tr>
                <td>Charlotte</td>
                <td>7</td>
                <td>2</td>
                <td>1</td>
            </tr>
    </table>
    </div>
    </div>
    <br>
    <h2>Jawaban</h2>
    <p>Menghitung Bobot Kriteria</p>
    <table class="table table-bordered">
            <tr>
                <th>Kriteria</th>
                <th>Pasar</th>
                <th>pendapatan</th>
                <th>Infrastruktur</th>
                <th>Transportasi</th>
            </tr>
            <tr>
                <td>Pasar</td>
                <td><?php echo $paspas=1?></td>
                <td><?php echo $paspen=(1/3)?></td>
                <td><?php echo $pasins=2?></td>
                <td><?php echo $pastra=4?></td>
            </tr>
            <tr>
                <td>pendapatan</td>
                <td><?php echo $penpas=3?></td>
                <td><?php echo $penpen=1?></td>
                <td><?php echo $penins=5?></td>
                <td><?php echo $pentra=3?></td>
            </tr>
            <tr>
                <td>Infrastruktur</td>
                <td><?php echo $inspas=1/2?></td>
                <td><?php echo $inspen=1/5?></td>
                <td><?php echo $insins=1?></td>
                <td><?php echo $instra=2?></td>
            </tr>
            <tr>
                <td>Transportasi</td>
                <td><?php echo $trapas=1/4?></td>
                <td><?php echo $trapen=1/3?></td>
                <td><?php echo $trains=1/2?></td>
                <td><?php echo $tratra=1?></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><?php echo $jumpas=($paspas+$penpas+$inspas+$trapas)?></td>
                <td><?php echo $jumpen=($paspen+$penpen+$inspen+$trapen)?></td>
                <td><?php echo $jumins=($pasins+$penins+$insins+$trains)?></td>
                <td><?php echo $jumtra=($pastra+$pentra+$instra+$tratra)?></td>
            </tr>
    </table>
    <p>Menghitung PW Kriteria</p>
    <table class="table table-bordered">
            <tr>
                <th>Kriteria</th>
                <th>Pasar</th>
                <th>pendapatan</th>
                <th>Infrastruktur</th>
                <th>Transportasi</th>
                <th>Jumlah</th>
                <th>PW</th>
            </tr>
            <tr>
                <td>Pasar</td>
                <td><?php echo $paspasx=$paspas/$jumpas?></td>
                <td><?php echo $paspenx=$paspen/$jumpen?></td>
                <td><?php echo $pasinsx=$pasins/$jumins?></td>
                <td><?php echo $pastrax=$pastra/$jumtra?></td>
                <td><?php echo $jumpasx=$paspasx+$paspenx+$pasinsx+$pastrax?></td>
                <td><?php echo $pwpas=$jumpasx/4?></td>
            </tr>
            <tr>
                <td>pendapatan</td>
                <td><?php echo $penpasx=$penpas/$jumpas?></td>
                <td><?php echo $penpenx=$penpen/$jumpen?></td>
                <td><?php echo $peninsx=$penins/$jumins?></td>
                <td><?php echo $pentrax=$pentra/$jumtra?></td>
                <td><?php echo $jumpenx=$penpasx+$penpenx+$peninsx+$pentrax?></td>
                <td><?php echo $pwpen=$jumpenx/4?></td>
            </tr>
            <tr>
                <td>Infrastruktur</td>
                <td><?php echo $inspasx=$inspas/$jumpas?></td>
                <td><?php echo $inspenx=$inspen/$jumpen?></td>
                <td><?php echo $insinsx=$insins/$jumins?></td>
                <td><?php echo $instrax=$instra/$jumtra?></td>
                <td><?php echo $juminsx=$inspasx+$inspenx+$insinsx+$instrax?></td>
                <td><?php echo $pwins=$juminsx/4?></td>
            </tr>
            <tr>
                <td>Transportasi</td>
                <td><?php echo $trapasx=$trapas/$jumpas?></td>
                <td><?php echo $trapenx=$trapen/$jumpen?></td>
                <td><?php echo $trainsx=$trains/$jumins?></td>
                <td><?php echo $tratrax=$tratra/$jumtra?></td>
                <td><?php echo $jumtrax=$trapasx+$trapenx+$trainsx+$tratrax?></td>
                <td><?php echo $pwtra=$jumtrax/4?></td>
            </tr>
        </table>
        <p>Menghitung Consistency Ratio</p>
        <table class="table table-bordered">
            <tr>
                <th>Kriteria</th>
                <th>Perkalian Matrik</th>
                <th>Perkalian Matrik Di bagi PW</th>
            </tr>
            <tr>
                <td>Pasar</td>
                <td><?php echo $crpas=($paspas*$pwpas)+($paspen*$pwpen)+($pasins*$pwins)+($pastra*$pwtra) ?></td>
                <td><?php echo $crpasx=$crpas/$pwpas?></td>
            </tr>
            <tr>
                <td>pendapatan</td>
                <td><?php echo $crpen=($penpas*$pwpas)+($penpen*$pwpen)+($penins*$pwins)+($pentra*$pwtra) ?></td>
                <td><?php echo $crpenx=$crpen/$pwpen?></td>
            </tr>
            <tr>
                <td>insfrastruktur</td>
                <td><?php echo $crins=($inspas*$pwpas)+($inspen*$pwpen)+($insins*$pwins)+($instra*$pwtra) ?></td>
                <td><?php echo $crinsx=$crins/$pwins?></td>
            </tr>
            <tr>
                <td>Transportasi</td>
                <td><?php echo $crtra=($trapas*$pwpas)+($trapen*$pwpen)+($trains*$pwins)+($tratra*$pwtra) ?></td>
                <td><?php echo $crtrax=$crtra/$pwtra?></td>
            </tr>
        </table>
        <p>Menghitung LamdaMaks, CI ,CR</p>
        <table class="table -table-bordered">
            <tr>
                <th>LamdaMaks</th>
                <th>CI</th>
                <th>CR</th>
            </tr>
            <tr>
                <td><?php echo $lmaks=($crpasx+$crpenx+$crinsx+$crtrax)/4 ?></td>
                <th><?php echo $ci=($lmaks-4)/(4-1) ?></th>
                <th><?php echo $crkriteria=$ci/0.9 ?></th>
            </tr>
        </table>
    </div>
</body>
</html>