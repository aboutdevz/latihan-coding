<?php 
include('class/rumus.php');

$bin_text = $_GET['bin_text'];
$baseurl = ' http://localhost/appideas/bin2dec/index.php';

    $_SESSION['alert'] = "";
                $bin_text_array = chunk_split($bin_text,1,'-');
                $bin_text_array = explode("-",$bin_text_array);
                $pop = array_pop($bin_text_array);
                $rumus = new Rumus;
                $hasil = $rumus->bin2dec($bin_text_array);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bin2Dec</title>
</head>
<body>
    <h1>Binary to Decimal Convertion</h1>
    <h4><?=$_SESSION['alert']?></h4>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label>Input Binary</label>
        <input type="number" name="bin_text" id="bin_text">
        <input type="submit" value="submit">
    </form>
    <table border="1px solid black" style="margin-top: 10px;">
        <tr>
            <th>Biner</th>
            <th>Decimal</th>
        </tr>
        <tr>
            <td><?=$bin_text?></td>
            <td><?=$hasil?></td>
        </tr>
    </table>
</body>
</html>