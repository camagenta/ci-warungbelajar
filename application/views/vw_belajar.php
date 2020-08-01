<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Heading dengan Helper HTML Codeigniter</title>
</head>
<body>
<?php
	echo heading("Helper HTML - H1",1);
	echo heading("Helper HTML - H2",2);
	echo heading("Helper HTML - H3",3);
	echo heading("Helper HTML - H4",4);
	echo heading("Helper HTML - H5",5);
	echo heading("Helper HTML - H6",6);
  
  $gambar = array(
          'src'   => 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Artesonraju3.jpg',
          'alt'   => 'Artesonraju - Wikipedia',
          'class' => 'post_images',
          'width' => '300',
          'height'=> '300',
          'title' => 'Artesonraju Mountain'
  );
  echo img($gambar);
?>
</body>
</html>