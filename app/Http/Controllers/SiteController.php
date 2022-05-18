<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    /**
     * mostra a página home
     *
     * @return void
     */
    public function index()
    {
        echo "Conteúdo dinamico Home";
    }

    /**
     * mostra a página sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "Conteúdo dinamico Sobre";
    }

    /**
     * mostra a página contato
     * @return void
     */
    public function contato()
    {
        echo "Conteúdo dinamico Contato";
    }

    /**
     * mostra a página servicos
     *
     * @return void
     */
    public function servicos()
    {
        echo "Conteúdo dinamico Serviços";
    }

    /**
     * mostra a página servico
     * 
     * @param int $id
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome'      => 'Lavagem de roupas',
                'descricao' => 'Descrição muito longa...',
            ],
            2 => [
                'nome'      => 'Lavagem de cobertas',
                'descricao' => 'Descrição muito longa...',
            ],
            3 => [
                'nome'      => 'Lavagem de urso',
                'descricao' => 'Descrição muito longa...',
            ],
        ];

        echo $servicos[$id]['nome'];
        echo "<br/>";
        echo $servicos[$id]['descricao'];
    }

}
