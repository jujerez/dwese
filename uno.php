<?php
echo "Estoy en el aarchivo uno.php \n";

require 'dos.php';
require 'tres.php';                // Se llamara 2 veces al tres ya que el dos tiene una llamada al tres
echo "Sigo en el uno.php";