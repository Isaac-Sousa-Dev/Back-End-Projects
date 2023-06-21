<?php

namespace Alura\Banco\Modelo\Conta;



// Criando uma classe
abstract class Conta
{
    // definir os dados da conta, somente os dados que são necessários no mundo real.

    // atributos
    private $titular; // atributo da instãncia, utilizasse o $this para acessá-lo
    protected float $saldo;

    // Membros estáticos: são atributos da classe.
    private static $numeroDeContas = 0; // atributo da classe, utilizasse o self::<nome do atributo> para acessá-lo

    /**
     * @var int $tipo 1 == Conta Corrente; 2 == Poupança
     */
    

    public function __construct(Titular $titular) // Método 
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void {

    
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 

        $this->saldo -= $valorSaque;
        
    }

    public function deposita(float $valorADepositar): void {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float {
        return $this->saldo;
    }


    public function recuperaNomeTitular(): string {
        return $this->titular->recuperaNome();

    }

    
    public function recuperaCpfTitular(): string {
        return $this->titular->recuperaCpf();
    }

    

    public static function recuperaNumeroDeContas(): int {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
    
}