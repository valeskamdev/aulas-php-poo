<?php
namespace Tabajara;

/*
 * classe final, não pode ser herdada, ou seja,
 * não pode ser criada uma subclasse a partir dela
 * */
final class MEI extends PessoaJuridica
{
    private string $areaDeAtuacao;

    /**
     * @return string
     */
    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }

    /**
     * @param  string  $areaDeAtuacao
     */
    public function setAreaDeAtuacao(string $areaDeAtuacao): void
    {
        $this->areaDeAtuacao = $areaDeAtuacao;
    }
}