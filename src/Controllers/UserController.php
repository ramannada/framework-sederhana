<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\User;

class UserController extends AbstractController
{
    public function getAll(Request $request, Response $response, $args)
    {
        $user = new User($this->db);
        $user = $user->getAll();
        $data['user'] = $user;
        return $this->view->render('user/all_user', $data);
    }
    public function halo()
    {
        echo "Halo semua";
    }
}
