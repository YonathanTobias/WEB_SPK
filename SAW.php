<html>
<head>
    <title>SPK SAW</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <p>SOAL</p>
    <table class="table table-bordered">
            <tr>
                <th> </th>
                <th>Apartemen 1</th>
                <th>Apartemen 2</th>
                <th>Apartemen 3</th>
                <th>Bobot</th>
                <th>Atribut</th>
            </tr>
            <tr>
                <td>C 1</td>
                <td>2</td>
                <td>4</td>
                <td>3</td>
                <td>30</td>
                <td>Benefit</td>
            </tr>
            <tr>
                <td>C 2</td>
                <td>7000000</td>
                <td>10000000</td>
                <td>8500000</td>
                <td>20</td>
                <td>Cost</td>
            </tr>
            <tr>
                <td>C 3</td>
                <td>2012</td>
                <td>2015</td>
                <td>2010</td>
                <td>20</td>
                <td>Benefit</td>
            </tr>
            <tr>
                <td>C 4</td>
                <td>7</td>
                <td>2</td>
                <td>4</td>
                <td>20</td>
                <td>Cost</td>
            </tr>
            <tr>
                <td>C 5</td>
                <td>3</td>
                <td>3</td>
                <td>4</td>
                <td>10</td>
                <td>Benefit</td>
            </tr>
    </table>
    <p>Jawaban</p>
    <p>Normalisasi</p>
    <table class="table table-bordered">
            <tr>
                <th> </th>
                <th>Apartemen 1</th>
                <th>Apartemen 2</th>
                <th>Apartemen 3</th>
                <th>Bobot</th>
            </tr>
            <tr>
                <td>C 1</td>
                <td><?php echo $C11=(2/4); ?></td>
                <td><?php echo $C12=(4/4); ?></td>
                <td><?php echo $C13=(3/4); ?></td>
                <td><?php echo $bobot1=(30/100); ?></td>
            </tr>
            <tr>
                <td>C 2</td>
                <td><?php echo $C21=(7000000/7000000); ?></td>
                <td><?php echo $C22=(7000000/10000000); ?></td>
                <td><?php echo $C23=(7000000/8500000); ?></td>
                <td><?php echo $bobot2=(20/100); ?></td>
            </tr>
            <tr>
                <td>C 3</td>
                <td><?php echo $C31=(2012/2015); ?></td>
                <td><?php echo $C32=(2015/2015); ?></td>
                <td><?php echo $C33=(2010/2015); ?></td>
                <td><?php echo $bobot3=(20/100); ?></td>
            </tr>
            <tr>
                <td>C 4</td>
                <td><?php echo $C41=(2/7); ?></td>
                <td><?php echo $C42=(2/2); ?></td>
                <td><?php echo $C43=(2/4); ?></td>
                <td><?php echo $bobot4=(20/100); ?></td>
            </tr>
            <tr>
                <td>C 5</td>
                <td><?php echo $C51=(3/4); ?></td>
                <td><?php echo $C52=(3/4); ?></td>
                <td><?php echo $C53=(4/4); ?></td>
                <td><?php echo $bobot5=(10/100); ?></td>
            </tr>
    </table>
    <p>Normalisasi * Bobot</p>
    <table class="table table-bordered">
            <tr>
                <th> </th>
                <th>Apartemen 1</th>
                <th>Apartemen 2</th>
                <th>Apartemen 3</th>
                <th>Bobot</th>
            </tr>
            <tr>
                <td>C 1</td>
                <td><?php echo $H11=($C11*$bobot1); ?></td>
                <td><?php echo $H12=($C12*$bobot1); ?></td>
                <td><?php echo $H13=($C13*$bobot1); ?></td>
                
            </tr>
            <tr>
                <td>C 2</td>
                <td><?php echo $H21=($C21*$bobot2); ?></td>
                <td><?php echo $H22=($C22*$bobot2); ?></td>
                <td><?php echo $H23=($C23*$bobot2); ?></td>
                <td>20</td>
            </tr>
            <tr>
                <td>C 3</td>
                <td><?php echo $H31=($C31*$bobot3); ?></td>
                <td><?php echo $H32=($C32*$bobot3); ?></td>
                <td><?php echo $H33=($C33*$bobot3); ?></td>
                <td>20</td>
            </tr>
            <tr>
                <td>C 4</td>
                <td><?php echo $H41=($C41*$bobot4); ?></td>
                <td><?php echo $H42=($C42*$bobot4); ?></td>
                <td><?php echo $H43=($C43*$bobot4); ?></td>
                <td>20</td>
            </tr>
            <tr>
                <td>C 5</td>
                <td><?php echo $H51=($C51*$bobot5); ?></td>
                <td><?php echo $H52=($C52*$bobot5); ?></td>
                <td><?php echo $H53=($C53*$bobot5); ?></td>
                <td>10</td>
            </tr>
    </table>
    <p>Menghitung Nilai Alternatif</p>
    <table class="table table-bordered">
        <tr>
            <td>V1</td>
            <td><?php echo $H53=($H11+$H21+$H31+$H41+$H51); ?></td>
            <td>3</td>
        </tr>
        <tr>
            <td>V2</td>
            <td><?php echo $H53=($H12+$H22+$H32+$H42+$H52); ?></td>
            <td>1</td>
        </tr>
        <tr>
            <td>V3</td>
            <td><?php echo $H53=($H13+$H23+$H33+$H43+$H53); ?></td>
            <td>2</td>
        </tr>
    </table>
    </div>
    <p>Alternatif Yang Terpilih Adalah Apartemen 2</p>
</body>
</html>