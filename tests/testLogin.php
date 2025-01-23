<?php

require_once './inc/includes.inc.php';
require_once './vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class testLogin extends TestCase
{

    public function testSuccessfulLoginAsAdmin()
    {

        $username = 'admin';
        $password = 'admin';

        $view = new View();
        $view->login($username, $password);

        $this->assertSame($username, $_SESSION['user']);
        $this->assertSame('admin', $_SESSION['role']);
    }

    public function testFaildLoginAsAdmin()
    {
        $_SESSION['user'] = '';
        $_SESSION['role'] = '';

        $username = 'admin'; // 
        $password = '12345689'; // wrong password 

        $view = new View();
        $view->login($username, $password);

        $this->assertSame('', $_SESSION['user']);
        $this->assertSame('', $_SESSION['role']);
    }
}
