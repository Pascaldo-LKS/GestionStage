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
        $page = isset($_GET['page']) ? $_GET['page'] : 'auth/etudiant-login';
        switch ($page) {

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

            case 'filiere/index':

                $controller = $this->chargerController("FiliereController");
                $controller->index();
                break;

            case 'filiere/create':

                $controller = $this->chargerController("FiliereController");
                $controller->create();
            break;

            case 'filiere/store':

                 $controller = $this->chargerController("FiliereController");
                $controller->store();
            break;

            case 'filiere/edit':

                $controller = $this->chargerController("FiliereController");
                $controller->edit();
                break;

            case 'filiere/update':

                $controller = $this->chargerController("FiliereController");
                $controller->update();
                break;

            case 'filiere/delete':

                $controller = $this->chargerController("FiliereController");
                $controller->delete();
                break;            

            case 'niveau/index':

                $controller = $this->chargerController("NiveauController");
                $controller->index();
                break;

            case 'niveau/create':

                $controller = $this->chargerController("NiveauController");
                $controller->create();
            break;

            case 'niveau/store':

                 $controller = $this->chargerController("NiveauController");
                $controller->store();
            break;

            case 'niveau/edit':

                $controller = $this->chargerController("NiveauController");
                $controller->edit();
                break;

            case 'niveau/update':

                $controller = $this->chargerController("NiveauController");
                $controller->update();
                break;

            case 'niveau/delete':

                $controller = $this->chargerController("NiveauController");
                $controller->delete();
                break;

            case 'annee/index':

                $controller = $this->chargerController("AnneeController");
                $controller->index();
                break;
            
            case 'annee/create':
                $controller = $this->chargerController("AnneeController");
                $controller->create();
                break;

            case 'annee/store':
                $controller = $this->chargerController("AnneeController");
                $controller->store();
                break;
            
            case 'annee/edit':

                $controller = $this->chargerController("AnneeController");
                $controller->edit();
                break;

            case 'annee/update':

                $controller = $this->chargerController("AnneeController");
                $controller->update();
                break;

            case 'annee/delete':

                $controller = $this->chargerController("AnneeController");
                $controller->delete();
                break;

            case 'entreprise/index':

                $controller = $this->chargerController("EntrepriseController");

                $controller->index();

                break;


            case 'entreprise/create':

                $controller = $this->chargerController("EntrepriseController");

                $controller->create();

                break;


            case 'entreprise/store':

                $controller = $this->chargerController("EntrepriseController");

                $controller->store();

                break;


            case 'entreprise/edit':

                $controller = $this->chargerController("EntrepriseController");

                $controller->edit();

                break;


            case 'entreprise/update':

                $controller = $this->chargerController("EntrepriseController");

                $controller->update();

                break;


            case 'entreprise/delete':

                $controller = $this->chargerController("EntrepriseController");

                $controller->delete();

                break;  
                
            case 'encadreur/index':

                $controller = $this->chargerController("EncadreurController");

                $controller->index();

                break;


            case 'encadreur/create':

                $controller = $this->chargerController("EncadreurController");

                $controller->create();

                break;


            case 'encadreur/store':

                $controller = $this->chargerController("EncadreurController");

                $controller->store();

                break;


            case 'encadreur/edit':

                $controller = $this->chargerController("EncadreurController");

                $controller->edit();

                break;


            case 'encadreur/update':

                $controller = $this->chargerController("EncadreurController");

                $controller->update();

                break;


            case 'encadreur/delete':

                $controller = $this->chargerController("EncadreurController");

                $controller->delete();

                break;

            case 'stage/index':

                $controller = $this->chargerController("StageController");

                $controller->index();

                break;


            case 'stage/create':

                $controller = $this->chargerController("StageController");

                $controller->create();

                break;


            case 'stage/store':

                $controller = $this->chargerController("StageController");

                $controller->store();

                break;


            case 'stage/edit':

                $controller = $this->chargerController("StageController");

                $controller->edit();

                break;


            case 'stage/update':

                $controller = $this->chargerController("StageController");

                $controller->update();

                break;


            case 'stage/delete':

                $controller = $this->chargerController("StageController");

                $controller->delete();

                break;

            case 'rapport/index':

                $controller = $this->chargerController("RapportController");

                $controller->index();

                break;


            case 'rapport/create':

                $controller = $this->chargerController("RapportController");

                $controller->create();

                break;


            case 'rapport/store':

                $controller = $this->chargerController("RapportController");

                $controller->store();

                break;


            case 'rapport/edit':

                $controller = $this->chargerController("RapportController");

                $controller->edit();

                break;


            case 'rapport/update':

                $controller = $this->chargerController("RapportController");

                $controller->update();

                break;


            case 'rapport/delete':

                $controller = $this->chargerController("RapportController");

                $controller->delete();

                break;

            case 'utilisateur/index':

                $controller = $this->chargerController("UtilisateurController");

                $controller->index();

                break;


            case 'utilisateur/create':

                $controller = $this->chargerController("UtilisateurController");

                $controller->create();

                break;


            case 'utilisateur/store':

                $controller = $this->chargerController("UtilisateurController");

                $controller->store();

                break;


            case 'utilisateur/edit':

                $controller = $this->chargerController("UtilisateurController");

                $controller->edit();

                break;


            case 'utilisateur/update':

                $controller = $this->chargerController("UtilisateurController");

                $controller->update();

                break;


            case 'utilisateur/delete':

                $controller = $this->chargerController("UtilisateurController");

                $controller->delete();

                break;

            
             case 'rapport/validate':

                $controller = $this->chargerController("RapportController");

                $controller->validate();

                break;


            case 'rapport/refuse':

                $controller = $this->chargerController("RapportController");

                $controller->refuse();

                break;

                            // ==========================
            // AUTHENTIFICATION
            // ==========================

            // Connexion étudiant
            case 'auth/etudiant-login':

                $controller = $this->chargerController("AuthController");

                $controller->loginEtudiant();

                break;


            // Authentification étudiant
            case 'auth/authenticate-etudiant':

                $controller = $this->chargerController("AuthController");

                $controller->authenticateEtudiant();

                break;


            // Connexion administrateur
            case 'auth/admin-login':

                $controller = $this->chargerController("AuthController");

                $controller->loginAdmin();

                break;


            // Authentification administrateur
            case 'auth/authenticate-admin':

                $controller = $this->chargerController("AuthController");

                $controller->authenticateAdmin();

                break;


            // Déconnexion
            case 'auth/logout':

                $controller = $this->chargerController("AuthController");

                $controller->logout();

                break;

                case 'admin/dashboard':

                    
                    $controller = $this->chargerController("AdminController");

                    $controller->dashboard();

                    break;
                    


                // PAGE INEXISTANTE
             default:
                   echo "<h2>404 - Page introuvable</h2>";
                   break;
        }


    }

}