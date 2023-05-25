<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN TABEL</title>
</head>
<body>


    <table border="1">
        <?php $i=1; while($i <= 5) : ?>
            <tr>
                <?php $j=1; while($j <=5) : ?>
                    <td><?= "$i,$j"?></td>
                <?php $j++; endwhile;?>
            </tr>
        <?php $i++; endwhile; ?>
    </table>

    <br>

    <table class="tabel1">
        <?php for($thead=1; $thead <=10; $thead++): ?>
            <th><?= "$thead"?></th>
        <?php endfor; ?>
        <?php for($x=1; $x <= 5; $x++):?>
            <tr>
                <?php for($y=1; $y <= 10; $y++) : ?>
                    <td><?= "$x , $y"?></td>
                <?php endfor;?>
            </tr>
        <?php endfor; ?>
    </table>

    <br>

    <table class="tabel2">
        <?php for($b=1; $b < 10; $b++){ ?>
            <tr>
                <?php for($k=1; $k < 5; $k++){ ?>
                    <td><?= "$b, $k"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <br>

        <table class="tabel-if">
        <?php $kolom=1; while($kolom <=5) : ?>
            <?php if($kolom % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php $baris=1; while($baris <=5) : ?>
                    <td><?= "$kolom,$baris" ?></td>
                <?php $baris++; endwhile; ?>
            </tr>
        <?php $kolom++; endwhile; ?>
        </table>
</body>
</html>