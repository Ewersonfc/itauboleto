# Boleto Itaú
[![Latest Stable Version](https://poser.pugx.org/matheushack/itauboleto/v/stable)](https://packagist.org/packages/matheushack/itauboleto)
[![Latest Unstable Version](https://poser.pugx.org/matheushack/itauboleto/v/unstable)](https://packagist.org/packages/matheushack/itauboleto)
[![Total Downloads](https://poser.pugx.org/matheushack/itauboleto/downloads)](https://packagist.org/packages/matheushack/itauboleto)
[![License](https://poser.pugx.org/matheushack/itauboleto/license)](https://packagist.org/packages/matheushack/itauboleto)
 
Projeto para integração com módulo de cobrança do banco Itaú.

## Instalação
### Composer
```
"matheushack/itauboleto": "^1.0"
```

## Como usar
```php
require '../vendor/autoload.php';

use Carbon\Carbon;
use MatheusHack\ItauBoleto\Itau;
use MatheusHack\ItauBoleto\Constants\Layout;
use MatheusHack\ItauBoleto\Constants\Especie;
use MatheusHack\ItauBoleto\Constants\Retorno;
use MatheusHack\ItauBoleto\Requests\DadosComplementaresRequest;


// Obrigatório - Array com as informações necessárias para registro do boleto
$boleto = [
    'tipo_carteira_titulo' => 109,
    'nosso_numero' => 'XXXXXXX',
    'data_vencimento' => Carbon::now()->addDays(15)->format('Y-m-d'),
    'valor_cobrado' => '100,00',
    'especie' => Especie::DUPLICATA_MERCANTIL,
    'data_emissao' => Carbon::now()->format('Y-m-d'),
    'beneficiario' => [
        'documento_identificacao' => 'XXXXXXXXXXXXXX',
        'agencia' => 'XXXX',
        'conta' => 'XXXXXXX',
        'digito_conta' => 'X'
    ],
    'pagador' => [
        'documento_identificacao' => 'XXXXXXXXXXXXXX',
        'nome'=> 'Teste',
        'logradouro' => 'Rua teste',
        'cidade' => 'São Paulo',
        'uf' => 'SP',
        'cep' => 'XXXXXXXX'
    ]
];

// Opcional - Dados complementares para geração do layout do boleto
$dadosComplementares = new DadosComplementaresRequest();
$dadosComplementares->setInstrucoes([
    "- TEXTO DE INSTRUÇÃO BENEFICIÁRIO 1",
    "- TEXTO DE INSTRUÇÃO BENEFICIÁRIO 2",
    "- TEXTO DE INSTRUÇÃO BENEFICIÁRIO 3",
]);
$dadosComplementares->setDemonstrativo('TEXTO NO CAMPO DEMONSTRATIVO');

try {
    $itau = new Itau([
        'clientId' => 'XXXXXXXXXXXX',
        'clientSecret' => 'XXXXXXXXXXXX',
        'itauKey' => 'XXXXXXXXXXXX',
        'cnpj' => 'XXXXXXXXXXXX',
        'production' => false,
        'print' => Layout::HTML,
        'return' => Retorno::OBJECT
    ]);

    $boletosRegistrados = $itau->registrar($boletos, $dadosComplementares);

    foreach($boletosRegistrados['data'] as $boletoResponse) {
        if ($stream = fopen($boletoResponse['file'], 'r')) {
            if ($printType == Layout::PDF)
                header('Content-type: application/pdf');

            echo stream_get_contents($stream);

            fclose($stream);
        }
    }

}catch(\Exception $e){
    dd($e->getMessage());
}

```
##Exemplos
https://github.com/matheushack/itauboleto/tree/master/examples