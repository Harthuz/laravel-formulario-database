<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * Os URIs que devem ser excluídos da verificação CSRF.
     *
     * @var array
     */
    protected $except = [
        // Adicione as rotas que deseja excluir da verificação CSRF
    ];
}
