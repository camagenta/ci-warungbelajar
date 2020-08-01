<?php 
// complete reference 
// https://codeigniter.com/userguide3/libraries/table.html?highlight=table

$template = array(
    'table_open'            => '<table border="1 cellpadding="4" cellspacing="0">',
    'table_close'           => '</table>'
);

$this->table->set_template($template);
$this->table->set_heading(array('No', 'Nama', 'Alamat'));

$this->table->add_row(array('1', 'Anton', 'Sedati'));
$this->table->add_row(array('2', 'Budi', 'Pabean'));
$this->table->add_row(array('3', 'Cika', 'Surabaya'));

echo $this->table->generate();
?>