<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

class Contato
{
    private $endereco; //nao pertence
    private $cep; //nao pertence
    private $telefone; //nao pertence
    private $tipoTelefone; //nao pertence
    private $ddd; //nao pertence

    public function __construct(string $endereco, string $cep, string $telefone, string $tipoTelefone, string $ddd)
    {
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->telefone = $telefone;
        $this->tipoTelefone = $tipoTelefone;
        $this->ddd = $ddd;
    }

    public function getTipoTelefone(): string
    {
        return $this->tipoTelefone;
    }

    public function getEnderecoECep(): string
    {
        return "$this->endereco $this->cep";
    }

    public function getTelefoneDdd(): string
    {
        return "($this->ddd) $this->telefone";
    }
}
