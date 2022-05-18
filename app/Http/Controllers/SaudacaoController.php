<?php

namespace App\Http\Controllers;

class SaudacaoController extends Controller
{
    /**
     *
     * @param string|null $nome
     * @return void
     */
    public function __invoke(string $nome = null)
    {
        echo "Olá $nome";
    }
}
