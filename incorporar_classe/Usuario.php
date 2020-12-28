<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $contato;

    public function __construct(
        string $nome,
        string $sobrenome,
        Contato $contato
    ) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->contato = $contato;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getEndereco(): string
    {
        return $this->contato->getEndereco();
    }

    public function getCep(): string
    {
        return $this->contato->getCep();
    }

    public function getEnderecoECep(): string
    {
        return $this->contato->getEnderecoECep();
    }

    public function getTelefoneDdd(): string
    {
        return $this->contato->getTelefoneDdd();
    }
}
