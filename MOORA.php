<html>
<head>
    <title>SPK Moora</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <p>SOAL</p>
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
        </tr>
        <tr>
            <td>A1</td>
            <td><?php echo $a11=500000 ?></td>
            <td><?php echo $a12=15 ?></td>
            <td><?php echo $a13=0.25 ?></td>
            <td><?php echo $a14=0.5 ?></td>
            <td><?php echo $a15=0.5 ?></td>
        </tr>
        <tr>
            <td>A2</td>
            <td><?php echo $a21=600000 ?></td>
            <td><?php echo $a22=6 ?></td>
            <td><?php echo $a23=0.5 ?></td>
            <td><?php echo $a24=0.5 ?></td>
            <td><?php echo $a25=0.5 ?></td>
        </tr>
        <tr>
            <td>A3</td>
            <td><?php echo $a31=1000000 ?></td>
            <td><?php echo $a32=3 ?></td>
            <td><?php echo $a33=0.75 ?></td>
            <td><?php echo $a34=0.5 ?></td>
            <td><?php echo $a35=0.25 ?></td>
        </tr>
        <tr>
            <td>A4</td>
            <td><?php echo $a41=650000 ?></td>
            <td><?php echo $a42=10 ?></td>
            <td><?php echo $a43=0.5 ?></td>
            <td><?php echo $a44=0.5 ?></td>
            <td><?php echo $a45=0.5 ?></td></tr>
        <tr>
            <td>A5</td>
            <td><?php echo $a51=500000 ?></td>
            <td><?php echo $a52=7 ?></td>
            <td><?php echo $a53=0.25 ?></td>
            <td><?php echo $a54=0.5 ?></td>
            <td><?php echo $a55=0.5 ?></td>
        </tr>
        <tr>
            <td>A6</td>
            <td><?php echo $a61=600000 ?></td>
            <td><?php echo $a62=3 ?></td>
            <td><?php echo $a63=0.5 ?></td>
            <td><?php echo $a64=0.25 ?></td>
            <td><?php echo $a65=0.25 ?></td>
        </tr>
        <tr>
            <td>A7</td>
            <td><?php echo $a71=400000 ?></td>
            <td><?php echo $a72=5 ?></td>
            <td><?php echo $a73=0.25 ?></td>
            <td><?php echo $a74=0.25 ?></td>
            <td><?php echo $a75=0.25 ?></td>
        </tr>
        <tr>
            <td>A8</td>
            <td><?php echo $a81=700000 ?></td>
            <td><?php echo $a82=10 ?></td>
            <td><?php echo $a83=0.5 ?></td>
            <td><?php echo $a84=0.5 ?></td>
            <td><?php echo $a85=0.5 ?></td>
        </tr>
        <tr>
            <td>A9</td>
            <td><?php echo $a91=500000 ?></td>
            <td><?php echo $a92=8 ?></td>
            <td><?php echo $a93=0.25 ?></td>
            <td><?php echo $a94=0.5 ?></td>
            <td><?php echo $a95=0.5 ?></td>
        </tr>
        <tr>
            <td>A0</td>
            <td><?php echo $a01=1200000 ?></td>
            <td><?php echo $a02=10 ?></td>
            <td><?php echo $a03=0.75 ?></td>
            <td><?php echo $a04=0.5 ?></td>
            <td><?php echo $a05=0.5 ?></td>
        </tr>
    </table>
    <table class="table table-bordered">
        <caption>Skor Normalisasi</caption>
        <tr>
            <th></th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
        </tr>
        <tr>
            <td>bobot</td>
            <td><?php echo $bobot1=0.250 ?></td>
            <td><?php echo $bobot2=0.200 ?></td>
            <td><?php echo $bobot3=0.200 ?></td>
            <td><?php echo $bobot4=0.200 ?></td>
            <td><?php echo $bobot5=0.150 ?></td>
        </tr>
        <tr>
            <td>A1</td>
            <td><?php echo $a11x=$a11/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a12x=$a12/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2)) ?></td>
            <td><?php echo $a13x=$a13/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a14x=$a14/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a15x=$a15/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A2</td>
            <td><?php echo $a21x=$a21/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a22x=$a22/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a23x=$a23/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a24x=$a24/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a25x=$a25/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A3</td>
            <td><?php echo $a31x=$a31/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a32x=$a32/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a33x=$a33/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a34x=$a34/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a35x=$a35/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A4</td>
            <td><?php echo $a41x=$a41/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a42x=$a42/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a43x=$a43/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a44x=$a44/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a45x=$a45/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A5</td>
            <td><?php echo $a51x=$a51/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a52x=$a52/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a53x=$a53/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a54x=$a54/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a55x=$a55/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A6</td>
            <td><?php echo $a61x=$a61/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a62x=$a62/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a63x=$a63/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a64x=$a64/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a65x=$a65/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A7</td>
            <td><?php echo $a71x=$a71/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a72x=$a72/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a73x=$a73/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a74x=$a74/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a75x=$a75/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A8</td>
            <td><?php echo $a81x=$a81/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a82x=$a82/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a83x=$a83/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a84x=$a84/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a85x=$a85/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A9</td>
            <td><?php echo $a91x=$a91/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a92x=$a92/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a93x=$a93/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a94x=$a94/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a95x=$a95/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
        <tr>
            <td>A0</td>
            <td><?php echo $a01x=$a01/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2)) ?></td>
            <td><?php echo $a02x=$a02/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))?></td>
            <td><?php echo $a03x=$a03/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))?></td>
            <td><?php echo $a04x=$a04/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))?></td>
            <td><?php echo $a05x=$a05/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))?></td>
        </tr>
    </table>
    <table class="table table-bordered">
        <caption>Skor Normalisasi * bobot</caption>
        <tr>
            <th></th>
            <th>C1</th>
            <th>C2</th>
            <th>C3</th>
            <th>C4</th>
            <th>C5</th>
        </tr>
        <tr>
            <td>bobot</td>
            <td><?php echo $bobot1=0.250 ?></td>
            <td><?php echo $bobot2=0.200 ?></td>
            <td><?php echo $bobot3=0.200 ?></td>
            <td><?php echo $bobot4=0.200 ?></td>
            <td><?php echo $bobot5=0.150 ?></td>
        </tr>
        <tr>
            <td>A1</td>
            <td><?php echo $a11xb=$a11/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a12xb=$a12/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a13xb=$a13/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a14xb=$a14/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a15xb=$a15/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A2</td>
            <td><?php echo $a21xb=$a21/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a22xb=$a22/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a23xb=$a23/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a24xb=$a24/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a25xb=$a25/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A3</td>
            <td><?php echo $a31xb=$a31/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a32xb=$a32/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a33xb=$a33/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a34xb=$a34/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a35xb=$a35/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A4</td>
            <td><?php echo $a41xb=$a41/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a42xb=$a42/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a43xb=$a43/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a44xb=$a44/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a45xb=$a45/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A5</td>
            <td><?php echo $a51xb=$a51/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a52xb=$a52/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a53xb=$a53/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a54xb=$a54/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a55xb=$a55/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A6</td>
            <td><?php echo $a61xb=$a61/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a62xb=$a62/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a63xb=$a63/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a64xb=$a64/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a65xb=$a65/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A7</td>
            <td><?php echo $a71xb=$a71/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a72xb=$a72/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a73xb=$a73/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a74xb=$a74/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a75xb=$a75/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A8</td>
            <td><?php echo $a81xb=$a81/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a82xb=$a82/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a83xb=$a83/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a84xb=$a84/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a85xb=$a85/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A9</td>
            <td><?php echo $a91xb=$a91/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a92xb=$a92/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a93xb=$a93/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a94xb=$a94/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a95xb=$a95/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
        <tr>
            <td>A0</td>
            <td><?php echo $a01xb=$a01/sqrt(pow($a11,2)+pow($a21,2)+pow($a31,2)+pow($a41,2)+pow($a51,2)+pow($a61,2)+pow($a71,2)+pow($a81,2)+pow($a91,2)+pow($a01,2))*$bobot1?></td>
            <td><?php echo $a02xb=$a02/sqrt(pow($a12,2)+pow($a22,2)+pow($a32,2)+pow($a42,2)+pow($a52,2)+pow($a62,2)+pow($a72,2)+pow($a82,2)+pow($a92,2)+pow($a02,2))*$bobot2?></td>
            <td><?php echo $a03xb=$a03/sqrt(pow($a13,2)+pow($a23,2)+pow($a33,2)+pow($a43,2)+pow($a53,2)+pow($a63,2)+pow($a73,2)+pow($a83,2)+pow($a93,2)+pow($a03,2))*$bobot3?></td>
            <td><?php echo $a04xb=$a04/sqrt(pow($a14,2)+pow($a24,2)+pow($a34,2)+pow($a44,2)+pow($a54,2)+pow($a64,2)+pow($a74,2)+pow($a84,2)+pow($a94,2)+pow($a04,2))*$bobot4?></td>
            <td><?php echo $a05xb=$a05/sqrt(pow($a15,2)+pow($a25,2)+pow($a35,2)+pow($a45,2)+pow($a55,2)+pow($a65,2)+pow($a75,2)+pow($a85,2)+pow($a95,2)+pow($a05,2))*$bobot5?></td>
        </tr>
    </table>
    <table class="table table-bordered">
        <caption>Skor AKhir</caption>
        <tr>
            <th>Alternatif</th>
            <th>Max(C2)</th>
            <th>Min(C1+C3+C4+C5)</th>
            <th>Nilai Yi</th>
            <th>Rank</th>
        </tr>
        <tr>
            <td>A1</td>
            <td><?php echo $maxa1=$a12xb ?></td>
            <td><?php echo $mina1=$a11xb+$a13xb+$a14xb+$a15xb ?></td>
            <td><?php echo $yia1=$maxa1-$mina1 ?></td>
            <td>1</td>
        </tr>
        <tr>
            <td>A2</td>
            <td><?php echo $maxa2=$a22xb ?></td>
            <td><?php echo $mina2=$a21xb+$a23xb+$a24xb+$a25xb ?></td>
            <td><?php echo $yia2=$maxa2-$mina2 ?></td>
            <td>8</td>
        </tr>
        <tr>
            <td>A3</td>
            <td><?php echo $maxa3=$a32xb ?></td>
            <td><?php echo $mina3=$a31xb+$a33xb+$a34xb+$a35xb ?></td>
            <td><?php echo $yia3=$maxa3-$mina3 ?></td>
            <td>10</td>
        </tr>
        <tr>
            <td>A4</td>
            <td><?php echo $maxa4=$a42xb ?></td>
            <td><?php echo $mina4=$a41xb+$a43xb+$a44xb+$a45xb ?></td>
            <td><?php echo $yia4=$maxa4-$mina4 ?></td>
            <td>6</td>
        </tr>
        <tr>
            <td>A5</td>
            <td><?php echo $maxa5=$a52xb ?></td>
            <td><?php echo $mina5=$a51xb+$a53xb+$a54xb+$a55xb ?></td>
            <td><?php echo $yia5=$maxa5-$mina5 ?></td>
            <td>4</td>
        </tr>
        <tr>
            <td>A6</td>
            <td><?php echo $maxa6=$a62xb ?></td>
            <td><?php echo $mina6=$a61xb+$a63xb+$a64xb+$a65xb ?></td>
            <td><?php echo $yia6=$maxa6-$mina6 ?></td>
            <td>5</td>
        </tr>
        <tr>
            <td>A7</td>
            <td><?php echo $maxa7=$a72xb ?></td>
            <td><?php echo $mina7=$a71xb+$a73xb+$a74xb+$a75xb ?></td>
            <td><?php echo $yia7=$maxa7-$mina7 ?></td>
            <td>2</td>
        </tr>
        <tr>
            <td>A8</td>
            <td><?php echo $maxa8=$a82xb ?></td>
            <td><?php echo $mina8=$a81xb+$a83xb+$a84xb+$a85xb ?></td>
            <td><?php echo $yia8=$maxa8-$mina8 ?></td>
            <td>7</td>
        </tr>
        <tr>
            <td>A9</td>
            <td><?php echo $maxa9=$a92xb ?></td>
            <td><?php echo $mina9=$a91xb+$a93xb+$a94xb+$a95xb ?></td>
            <td><?php echo $yia9=$maxa9-$mina9 ?></td>
            <td>3</td>
        </tr>
        <tr>
            <td>A0</td>
            <td><?php echo $maxa0=$a02xb ?></td>
            <td><?php echo $mina0=$a01xb+$a03xb+$a04xb+$a05xb ?></td>
            <td><?php echo $yia0=$maxa0-$mina0 ?></td>
            <td>9</td>
        </tr>
    </table>
    <table class="table table-bordered">
        <caption>5 Alternatif Teratas</caption>
        <tr>
            <th>Alternatif</th>
            <th>Nama)</th>
            <th>Ranking</th>
        </tr>
        <tr>
            <td>A1</td>
            <td>Adelan</td>
            <td>1</td>
        </tr>
        <tr>
            <td>A7</td>
            <td>Nuriadi</td>
            <td>2</td>
        </tr>
        <tr>
            <td>A9</td>
            <td>Poniman</td>
            <td>3</td>
        </tr>
        <tr>
            <td>A5</td>
            <td>Mislan</td>
            <td>4</td>
        </tr>
        <tr>
            <td>A6</td>
            <td>Sukirah</td>
            <td>5</td>
        </tr>
    </table>
</div>
</body>
</html>