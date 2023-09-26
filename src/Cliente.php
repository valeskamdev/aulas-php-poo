<?php

class Cliente
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "a definir";

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    /*
     * Visibilidade PROTECTED
     * Esses getters e setters só podem ser acessados pela classe Cliente
     * e suas subclasses (PessoaFisica e PessoaJuridica)
     * */

    /**
     * @return string
     */
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    /**
     * @param  string  $situacao
     */
    protected function setSituacao(string $situacao): void
    {
        $this->situacao = $situacao;
    }


}