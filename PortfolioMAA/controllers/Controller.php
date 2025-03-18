<?php
class Controller {
    public function render($page) {
        $validPages = ['home', 'competences', 'projets', 'contact'];
        $page = in_array($page, $validPages) ? $page : 'home';

        require_once 'views/template.php';
    }
}
?>
