<?php

require_once "Cliente.php";

class PessoaJuridica extends Cliente
{
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;

    public function __construct()
    {
        $this->setSituacao("em análise");
    }

    /**
     * @return int
     */
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    /**
     * @param  int  $anoFundacao
     */
    public function setAnoFundacao(int $anoFundacao): void
    {
        $this->anoFundacao = $anoFundacao;
    }

    /**
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * @param  string  $cnpj
     */
    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return string
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * @param  string  $nomeFantasia
     */
    public function setNomeFantasia(string $nomeFantasia): void
    {
        $this->nomeFantasia = $nomeFantasia;
    }


}