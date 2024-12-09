<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Logika otentikasi sebelum request diproses
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Logika setelah request diproses
    }
}
