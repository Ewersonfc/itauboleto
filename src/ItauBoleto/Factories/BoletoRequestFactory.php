<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 18/04/18
 * Time: 11:23
 */

namespace MatheusHack\ItauBoleto\Factories;


use MatheusHack\ItauBoleto\Requests\JurosRequest;
use MatheusHack\ItauBoleto\Requests\MoedaRequest;
use MatheusHack\ItauBoleto\Requests\MultaRequest;
use MatheusHack\ItauBoleto\Requests\BoletoRequest;
use MatheusHack\ItauBoleto\Requests\DebitoRequest;
use MatheusHack\ItauBoleto\Requests\PagadorRequest;
use MatheusHack\ItauBoleto\Requests\GrupoRateioRequest;
use MatheusHack\ItauBoleto\Requests\BeneficiarioRequest;
use MatheusHack\ItauBoleto\Requests\GrupoDescontoRequest;
use MatheusHack\ItauBoleto\Requests\SacadorAvalistaRequest;
use MatheusHack\ItauBoleto\Requests\GrupoEmailPagadorRequest;
use MatheusHack\ItauBoleto\Requests\RecebimentoDivergenteRequest;

class BoletoRequestFactory
{
    public function make(array $boleto)
    {
        $boletoRequest = new BoletoRequest();

        $boletoRequest->tipo_ambiente = data_get($boleto, 'tipo_ambiente', $boletoRequest->tipo_ambiente);
        $boletoRequest->tipo_registro = data_get($boleto, 'tipo_registro', $boletoRequest->tipo_registro);
        $boletoRequest->tipo_cobranca = data_get($boleto, 'tipo_cobranca', $boletoRequest->tipo_cobranca);
        $boletoRequest->tipo_produto = data_get($boleto, 'tipo_produto', $boletoRequest->tipo_produto);
        $boletoRequest->subproduto = data_get($boleto, 'subproduto', $boletoRequest->subproduto);
        $boletoRequest->identificador_titulo_empresa = data_get($boleto, 'identificador_titulo_empresa', $boletoRequest->identificador_titulo_empresa);
        $boletoRequest->uso_banco = data_get($boleto, 'uso_banco', $boletoRequest->uso_banco);
        $boletoRequest->titulo_aceite = data_get($boleto, 'titulo_aceite', $boletoRequest->titulo_aceite);
        $boletoRequest->tipo_carteira_titulo = data_get($boleto, 'tipo_carteira_titulo', $boletoRequest->tipo_carteira_titulo);
        $boletoRequest->nosso_numero = data_get($boleto, 'nosso_numero', $boletoRequest->nosso_numero);
        $boletoRequest->digito_verificador_nosso_numero = data_get($boleto, 'digito_verificador_nosso_numero', $boletoRequest->digito_verificador_nosso_numero);
        $boletoRequest->codigo_barras = data_get($boleto, 'codigo_barras', $boletoRequest->codigo_barras);
        $boletoRequest->data_vencimento = data_get($boleto, 'data_vencimento', $boletoRequest->data_vencimento);
        $boletoRequest->valor_cobrado = data_get($boleto, 'valor_cobrado', $boletoRequest->valor_cobrado);
        $boletoRequest->seu_numero = data_get($boleto, 'seu_numero', $boletoRequest->seu_numero);
        $boletoRequest->especie = data_get($boleto, 'especie', $boletoRequest->especie);
        $boletoRequest->data_emissao = data_get($boleto, 'data_emissao', $boletoRequest->data_emissao);
        $boletoRequest->data_limite_pagamento = data_get($boleto, 'data_limite_pagamento', $boletoRequest->data_limite_pagamento);
        $boletoRequest->tipo_pagamento = data_get($boleto, 'tipo_pagamento', $boletoRequest->tipo_pagamento);
        $boletoRequest->indicador_pagamento_parcial = data_get($boleto, 'indicador_pagamento_parcial', $boletoRequest->indicador_pagamento_parcial);
        $boletoRequest->quantidade_pagamento_parcial = data_get($boleto, 'quantidade_pagamento_parcial', $boletoRequest->quantidade_pagamento_parcial);
        $boletoRequest->quantidade_parcelas = data_get($boleto, 'quantidade_parcelas', $boletoRequest->quantidade_parcelas);
        $boletoRequest->instrucao_cobranca_1 = data_get($boleto, 'instrucao_cobranca_1', $boletoRequest->instrucao_cobranca_1);
        $boletoRequest->quantidade_dias_1 = data_get($boleto, 'quantidade_dias_1', $boletoRequest->quantidade_dias_1);
        $boletoRequest->data_instrucao_1 = data_get($boleto, 'data_instrucao_1', $boletoRequest->data_instrucao_1);
        $boletoRequest->instrucao_cobranca_2 = data_get($boleto, 'instrucao_cobranca_2', $boletoRequest->instrucao_cobranca_2);
        $boletoRequest->quantidade_dias_2 = data_get($boleto, 'quantidade_dias_2', $boletoRequest->quantidade_dias_2);
        $boletoRequest->data_instrucao_2 = data_get($boleto, 'data_instrucao_2', $boletoRequest->data_instrucao_2);
        $boletoRequest->instrucao_cobranca_3 = data_get($boleto, 'instrucao_cobranca_3', $boletoRequest->instrucao_cobranca_3);
        $boletoRequest->quantidade_dias_3 = data_get($boleto, 'quantidade_dias_3', $boletoRequest->quantidade_dias_3);
        $boletoRequest->data_instrucao_3 = data_get($boleto, 'data_instrucao_3', $boletoRequest->data_instrucao_3);
        $boletoRequest->valor_abatimento = data_get($boleto, 'valor_abatimento', $boletoRequest->valor_abatimento);
        $boletoRequest->moeda = $this->setMoeda(data_get($boleto, 'moeda', []));

        if(data_get($boleto, 'beneficiario'))
            $boletoRequest->beneficiario =  $this->setBeneficiario($boleto['beneficiario']);

        if(data_get($boleto, 'debito'))
            $boletoRequest->debito =  $this->setDebito($boleto['debito']);

        if(data_get($boleto, 'pagador'))
            $boletoRequest->pagador = $this->setPagador($boleto['pagador']);

        if(data_get($boleto, 'sacador_avalista'))
            $boletoRequest->sacador_avalista = $this->setSacadorAvalista($boleto['sacador_avalista']);

        if(data_get($boleto, 'juros'))
            $boletoRequest->juros = $this->setJuros($boleto['juros']);

        if(data_get($boleto, 'multa'))
            $boletoRequest->multa = $this->setMulta($boleto['multa']);

        if(data_get($boleto, 'grupo_desconto'))
            $boletoRequest->grupo_desconto = $this->setGrupoDesconto($boleto['grupo_desconto']);

        if(data_get($boleto, 'recebimento_divergente'))
            $boletoRequest->recebimento_divergente = $this->setRecebimentoDivergente($boleto['recebimento_divergente']);

        if(data_get($boleto, 'grupo_rateio'))
            $boletoRequest->grupo_rateio = $this->setGrupoRateio($boleto['grupo_rateio']);

        return $boletoRequest;
    }

    private function setBeneficiario($data = [])
    {
        $beneficiario = new BeneficiarioRequest();
        $beneficiario->cpf_cnpj_beneficiario = data_get($data, 'documento_identificacao', $beneficiario->cpf_cnpj_beneficiario);
        $beneficiario->agencia_beneficiario = data_get($data, 'agencia', $beneficiario->agencia_beneficiario);
        $beneficiario->conta_beneficiario = data_get($data, 'conta', $beneficiario->conta_beneficiario);
        $beneficiario->digito_verificador_conta_beneficiario = data_get($data, 'digito_conta', $beneficiario->digito_verificador_conta_beneficiario);

        return $beneficiario;
    }

    private function setDebito($data = [])
    {
        $debito = new DebitoRequest();
        $debito->agencia_debito = data_get($data, 'agencia', $debito->agencia_debito);
        $debito->conta_debito = data_get($data, 'conta', $debito->conta_debito);
        $debito->digito_verificador_conta_debito = data_get($data, 'digito_conta', $debito->digito_verificador_conta_debito);

        return $debito;
    }

    private function setPagador($data = [])
    {
        $pagador = new PagadorRequest();
        $pagador->cpf_cnpj_pagador = data_get($data, 'documento_identificacao', $pagador->cpf_cnpj_pagador);
        $pagador->nome_pagador = data_get($data, 'nome', $pagador->nome_pagador);
        $pagador->logradouro_pagador = data_get($data, 'logradouro', $pagador->logradouro_pagador);
        $pagador->bairro_pagador = data_get($data, 'bairro', $pagador->bairro_pagador);
        $pagador->cidade_pagador = data_get($data, 'cidade', $pagador->cidade_pagador);
        $pagador->uf_pagador = data_get($data, 'uf', $pagador->uf_pagador);
        $pagador->cep_pagador = data_get($data, 'cep', $pagador->cep_pagador);

        if(data_get($data, 'emails'))
            $pagador->grupo_email_pagador = $this->setGrupoEmailPagador($data['emails']);

        return $pagador;
    }

    private function setGrupoEmailPagador($data = [])
    {
        $emails = [];

        foreach ($data as $email){
            $grupoEmailPagador = new GrupoEmailPagadorRequest();
            $grupoEmailPagador->email_pagador = $email;
            $emails[] = $grupoEmailPagador;
        }

        return $emails;

    }

    private function setSacadorAvalista($data = [])
    {
        $sacadorAvalista = new SacadorAvalistaRequest();
        $sacadorAvalista->cpf_cnpj_sacador_avalista = data_get($data, 'documento_identificacao', $sacadorAvalista->cpf_cnpj_sacador_avalista);
        $sacadorAvalista->nome_sacador_avalista = data_get($data, 'nome', $sacadorAvalista->nome_sacador_avalista);
        $sacadorAvalista->logradouro_sacador_avalista = data_get($data, 'logradouro', $sacadorAvalista->logradouro_sacador_avalista);
        $sacadorAvalista->bairro_sacador_avalista = data_get($data, 'bairro', $sacadorAvalista->bairro_sacador_avalista);
        $sacadorAvalista->cidade_sacador_avalista = data_get($data, 'cidade', $sacadorAvalista->cidade_sacador_avalista);
        $sacadorAvalista->uf_sacador_avalista = data_get($data, 'uf', $sacadorAvalista->uf_sacador_avalista);
        $sacadorAvalista->cep_sacador_avalista = data_get($data, 'cep', $sacadorAvalista->cep_sacador_avalista);

        return $sacadorAvalista;
    }

    private function setMoeda($data = [])
    {
        $moeda = new MoedaRequest();
        $moeda->codigo_moeda_cnab = data_get($data, 'codigo', $moeda->codigo_moeda_cnab);
        $moeda->quantidade_moeda = data_get($data, 'quantidade', $moeda->quantidade_moeda);

        return $moeda;
    }

    private function setJuros($data = [])
    {
        $juros = new JurosRequest();
        $juros->data_juros = data_get($data, 'data', $juros->data_juros);
        $juros->tipo_juros = data_get($data, 'tipo', $juros->tipo_juros);
        $juros->valor_juros = data_get($data, 'valor', $juros->valor_juros);
        $juros->percentual_juros = data_get($data, 'percentual', $juros->percentual_juros);

        return $juros;
    }

    private function setMulta($data = [])
    {
        $multa = new MultaRequest();
        $multa->data_multa = data_get($data, 'data', $multa->data_multa);
        $multa->tipo_multa = data_get($data, 'tipo', $multa->tipo_multa);
        $multa->valor_multa = data_get($data, 'valor', $multa->valor_multa);
        $multa->percentual_multa = data_get($data, 'percentual', $multa->percentual_multa);

        return $multa;
    }

    private function setGrupoDesconto($data = [])
    {
        $grupoDesconto = new GrupoDescontoRequest();
        $grupoDesconto->data_desconto = data_get($data, 'data', $grupoDesconto->data_desconto);
        $grupoDesconto->tipo_desconto = data_get($data, 'tipo', $grupoDesconto->tipo_desconto);
        $grupoDesconto->valor_desconto = data_get($data, 'valor', $grupoDesconto->valor_desconto);
        $grupoDesconto->percentual_desconto = data_get($data, 'percentual', $grupoDesconto->percentual_desconto);

        return $grupoDesconto;
    }

    private function setRecebimentoDivergente($data = [])
    {
        $recebimentoDivergente = new RecebimentoDivergenteRequest();
        $recebimentoDivergente->tipo_autorizacao_recebimento = data_get($data, 'tipo_autorizacao', $recebimentoDivergente->tipo_autorizacao_recebimento);
        $recebimentoDivergente->tipo_valor_percentual_recebimento = data_get($data, 'tipo_valor_percentual', $recebimentoDivergente->tipo_valor_percentual_recebimento);
        $recebimentoDivergente->valor_minimo_recebimento = data_get($data, 'valor_minimo', $recebimentoDivergente->valor_minimo_recebimento);
        $recebimentoDivergente->percentual_minimo_recebimento = data_get($data, 'percentual_minimo', $recebimentoDivergente->percentual_minimo_recebimento);
        $recebimentoDivergente->valor_maximo_recebimento = data_get($data, 'valor_maximo', $recebimentoDivergente->valor_maximo_recebimento);
        $recebimentoDivergente->percentual_maximo_recebimento = data_get($data, 'percentual_maximo', $recebimentoDivergente->percentual_maximo_recebimento);

        return $recebimentoDivergente;
    }

    private function setGrupoRateio($data = [])
    {
        $grupoRateio = new GrupoRateioRequest();
        $grupoRateio->agencia_grupo_rateio = data_get($data, 'agencia', $grupoRateio->agencia_grupo_rateio);
        $grupoRateio->conta_grupo_rateio = data_get($data, 'conta', $grupoRateio->conta_grupo_rateio);
        $grupoRateio->digito_verificador_conta_grupo_rateio = data_get($data, 'digito_conta', $grupoRateio->digito_verificador_conta_grupo_rateio);
        $grupoRateio->tipo_rateio = data_get($data, 'tipo', $grupoRateio->tipo_rateio);
        $grupoRateio->valor_percentual_rateio = data_get($data, 'valor_percentual', $grupoRateio->valor_percentual_rateio);

        return $grupoRateio;
    }
}