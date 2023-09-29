<?php
namespace Tabajara;

final class PessoaFisica extends Cliente
{
    private int $idade;
    private string $cpf;

    public function __construct()
    {
        $this->setSituacao("normal");
    }

    /**
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * @param  int  $idade
     */
    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param  string  $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}