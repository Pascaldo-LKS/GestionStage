<?php

require_once __DIR__ . '/../config/Auth.php';

class AdminController
{
    public function dashboard()
    {
        requireAdmin();

        require_once __DIR__ . '/../views/admin/dashboard.php';
    }
}
?>
