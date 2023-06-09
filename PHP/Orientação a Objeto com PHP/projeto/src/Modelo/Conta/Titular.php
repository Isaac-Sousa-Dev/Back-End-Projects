<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

// Titular é uma pessoa
class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
        
    }

    

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

}