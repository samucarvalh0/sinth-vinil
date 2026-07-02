<?php

require_once __DIR__ . "/../models/Admin.php";

class AdminController
{

    private Admin $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function login()
    {
        require __DIR__ . "/../admin/loginAdmin.php";
    }

    public function autenticar()
    {
        $admin = $this->admin->login($_POST);

        if ($admin) {

            $_SESSION['admin'] = $admin;

            header("Location: ?page=dashboard");
            exit;
        }

        header("Location: ?page=login");
    }

    public function dashboard()
    {
        Auth::requireAdmin();

        require __DIR__ . "/../admin/dashboard.php";
    }

    public function logout()
    {
        unset($_SESSION['admin']);

        header("Location: ?page=login");
        exit;
    }

}
?>