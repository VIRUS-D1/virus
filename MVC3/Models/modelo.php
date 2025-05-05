<?php
class Paginas {
    public static function enlacesPaginasModel($enlace) {
        $modulos = ["Yo", "concerts", "hobbies", "social", "galeria", "artistas"];
        if (in_array($enlace, $modulos)) {
            return "Views/modules/" . $enlace . ".php";
        } else {
            return "Views/modules/yo.php";
        }
    }
}
?>