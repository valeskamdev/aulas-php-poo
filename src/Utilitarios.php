<?php

class Utilitarios
{
    // propriedade estática
    public static string $dataAtual;

    // método estático
    public static function obterData()
    {
        // self permite o acesso a propriedades e métodos estáticos
        self::$dataAtual = date("d/m/Y");
    }

    public static function definirAtendimento(int $idade) : string
    {
        return $idade >= 60 ? "Prioridade" : "Normal";
    }
}