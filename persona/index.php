<?php
require_once ('cliente/usuario.php');
use cliente\Usuario as UsuarioPrincipal;

$usuario = new UsuarioPrincipal();
echo $usuario->saludar('Juan');