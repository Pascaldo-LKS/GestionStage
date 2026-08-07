<?php

class Router
{

    private function chargerController($nomController)
    {
        require_once __DIR__ . "/../controllers/" . $nomController . ".php";

        return new $nomController();
    }


    public function route()
    {

        $page = isset($_GET['page']) ? $_GET['page'] : 'auth/login';


        switch ($page) {

            case 'auth/login':

                $controller = $this->chargerController("AuthController");

                $controller->login();

                break;

            case 'etudiant/index':

                $controller = $this->chargerController("EtudiantController");

                $controller->index();

                break;


            case 'etudiant/create':

                $controller = $this->chargerController("EtudiantController");

                $controller->create();

                break;


            case 'etudiant/store':

                $controller = $this->chargerController("EtudiantController");

                $controller->store();

                break;


            case 'etudiant/edit':

                $controller = $this->chargerController("EtudiantController");

                $controller->edit();

                break;


            case 'etudiant/update':

                $controller = $this->chargerController("EtudiantController");

                $controller->update();

                break;


            case 'etudiant/delete':

                $controller = $this->chargerController("EtudiantController");

                $controller->delete();

                break;
            // PAGE INEXISTANTE

            default:

                echo "<h2>404 - Page introuvable</h2>";

                break;
        }

    }

}