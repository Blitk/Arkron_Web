<?php  

ini_set('max_execution_time', 300);

require 'scripts.php';
echo '<style> body{ background-color: #101010; font-size: 25px; color: yellow; margin-top: 5%; margin-left: 5%; margin-right: 5%;} </style>';
$heroi = new Hero();
echo '<div>';
historia($heroi);
echo '</div>';
?>