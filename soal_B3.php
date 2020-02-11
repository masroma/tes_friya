<h4>Soal : array looping</h4>
<h4>Jawaban :</h4>
<table border="1px">
    <?php
        $no = 1;
        $dataarray = array(20, 10, 100, 30, 15, 5);
        sort($dataarray);
        foreach ($dataarray as $row)
        { 
    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row;?></td>
    </tr>
    <?php   
        }
    ?>
</table>

<br/><br/>
==================================================================

<h4>Soal : array looping tambahkan angka 120</h4>
<h4>Jawaban :</h4>
<table border="1px">
    <?php
        $no = 1;
        $dataarray = array(20, 10, 100, 30, 15, 5);
        array_unshift( $dataarray, 120);
        sort($dataarray);
        foreach ($dataarray as $row)
        { 
    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row;?></td>
    </tr>
    <?php   
        }
    ?>
</table>

<br/><br/>

==================================================================

<h4>Soal : array looping hilangkan angka 10</h4>
<h4>Jawaban :</h4>
<table border="1px">
    <?php
        $no = 1;
        $dataarray = array(20, 10, 100, 30, 15, 5);
        unset($dataarray[1]);
        array_unshift( $dataarray, 120);
        sort($dataarray);
        foreach ($dataarray as $row)
        { 
    ?>

    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row;?></td>
    </tr>
    <?php   
        }
    ?>
</table>

<br/><br/>
