<html>
    <head>
        <title> Belajar Upload di Codeigniter - Warung Belajar -</title>
    </head>
    <body>
        <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/upload/proses_multi">
            <div>Berkas   1: </div>
        	<div><input type="file" name="berkas[]"></div>
            <div>Keterangan 1 : </div>
            <div><textarea name="keterangan_berkas[]"></textarea></div>
            <hr/>
            <div>Berkas   2: </div>
        	<div><input type="file" name="berkas[]"></div>
            <div>Keterangan 2 : </div>
            <div><textarea name="keterangan_berkas[]"></textarea></div>
            <hr/>
            <div>Berkas   3: </div>
        	<div><input type="file" name="berkas[]"></div>
            <div>Keterangan 3 : </div>
            <div><textarea name="keterangan_berkas[]"></textarea></div>
            <hr/>
            <div>Berkas   4: </div>
        	<div><input type="file" name="berkas[]"></div>
            <div>Keterangan 4 : </div>
            <div><textarea name="keterangan_berkas[]"></textarea></div>
            <br/>
            <div><input type="submit" value="Simpan"/></div>
        </form>
    </body>
</html>