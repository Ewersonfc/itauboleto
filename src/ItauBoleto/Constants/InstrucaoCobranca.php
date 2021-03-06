<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 18/04/18
 * Time: 16:36
 */

namespace MatheusHack\ItauBoleto\Constants;


/**
 * Class InstrucaoCobranca
 * @package MatheusHack\ItauBoleto\Constants
 */
class InstrucaoCobranca
{
    /**
     *
     */
    const DEVOLVER_APOS_05_DIAS_VENCIMENTO = '02';

    /**
     *
     */
    const DEVOLVER_APOS_30_DIAS_VENCIMENTO = '03';

    /**
     *
     */
    const RECEBER_CONFORME_INSTRUCAO_TITULO = '05';

    /**
     *
     */
    const DEVOLVER_APOS_10_DIAS_VENCIMENTO = '06';

    /**
     *
     */
    const DEVOLVER_APOS_15_DIAS_VENCIMENTO = '07';

    /**
     *
     */
    const DEVOLVER_APOS_20_DIAS_VENCIMENTO = '08';

    /**
     *
     */
    const PROTESTAR = '09';

    /**
     *
     */
    const NAO_PROTESTAR = '10';

    /**
     *
     */
    const DEVOLVER_APOS_25_DIAS_VENCIMENTO = '11';

    /**
     *
     */
    const DEVOLVER_APOS_35_DIAS_VENCIMENTO = '12';

    /**
     *
     */
    const DEVOLVER_APOS_40_DIAS_VENCIMENTO = '13';

    /**
     *
     */
    const DEVOLVER_APOS_45_DIAS_VENCIMENTO = '14';

    /**
     *
     */
    const DEVOLVER_APOS_50_DIAS_VENCIMENTO = '15';

    /**
     *
     */
    const DEVOLVER_APOS_55_DIAS_VENCIMENTO = '16';

    /**
     *
     */
    const DEVOLVER_APOS_60_DIAS_VENCIMENTO = '17';

    /**
     *
     */
    const DEVOLVER_APOS_90_DIAS_VENCIMENTO = '18';

    /**
     *
     */
    const NAO_RECEBER_APOS_5_DIAS_VENCIMENTO = '19';

    /**
     *
     */
    const NAO_RECEBER_APOS_10_DIAS_VENCIMENTO = '20';

    /**
     *
     */
    const NAO_RECEBER_APOS_15_DIAS_VENCIMENTO = '21';

    /**
     *
     */
    const NAO_RECEBER_APOS_20_DIAS_VENCIMENTO = '22';

    /**
     *
     */
    const NAO_RECEBER_APOS_25_DIAS_VENCIMENTO = '23';

    /**
     *
     */
    const NAO_RECEBER_APOS_30_DIAS_VENCIMENTO = '24';

    /**
     *
     */
    const NAO_RECEBER_APOS_35_DIAS_VENCIMENTO = '25';

    /**
     *
     */
    const NAO_RECEBER_APOS_40_DIAS_VENCIMENTO = '26';

    /**
     *
     */
    const NAO_RECEBER_APOS_45_DIAS_VENCIMENTO = '27';

    /**
     *
     */
    const NAO_RECEBER_APOS_50_DIAS_VENCIMENTO = '28';

    /**
     *
     */
    const NAO_RECEBER_APOS_55_DIAS_VENCIMENTO = '29';

    /**
     *
     */
    const IMPORTANCIA_DESCONTO_POR_DIA = '30';

    /**
     *
     */
    const NAO_RECEBER_APOS_60_DIAS_VENCIMENTO = '31';

    /**
     *
     */
    const NAO_RECEBER_APOS_90_DIAS_VENCIMENTO = '32';

    /**
     *
     */
    const CONCEDER_ABATIMENTO = '33';

    /**
     *
     */
    const PROTESTO_URGENTE_CARTORIO = '36';

    /**
     *
     */
    const RECEBER_ATE_ULTIMO_DIA_VENCIMENTO = '37';

    /**
     *
     */
    const CONCEDER_DESCONTO_APOS_VENCIMENTO = '38';

    /**
     *
     */
    const NAO_RECEBER_APOS_VENCIMENTO = '39';

    /**
     *
     */
    const CONCEDER_DESCONTO_NOTA_CREDITO = '40';

    /**
     *
     */
    const PROTESTO_FINS_ALIMENTARES = '42';

    /**
     *
     */
    const SUJEIRO_PROTESTO_NAO_PAGO_VENCIMENTO = '43';

    /**
     *
     */
    const IMPORTANCIA_DIA_ATRASO_A_PARTIR_DE = '44';

    /**
     *
     */
    const TEM_DIA_DA_GRACA = '45';

    /**
     *
     */
    const USO_DO_BANCO = '46';

    /**
     *
     */
    const DISPENSAR_JUROS_COMISSAO_PERMANENCIA = '47';

    /**
     *
     */
    const RECEBER_SOMENTE_PARCELA_ANTERIOR_QUITADA = '51';

    /**
     *
     */
    const EFETUAR_PAGAMENTO_SOMENTE_ATRAVES_BOLETO_E_NA_REDE_BANCARIA = '52';

    /**
     *
     */
    const USO_DO_BANCO_2 = '53';

    /**
     *
     */
    const APOS_VENCIMENTO_PAGAVEL_SOMENTE_EMPRESA = '54';

    /**
     *
     */
    const USO_DO_BANCO_3 = '56';

    /**
     *
     */
    const SOMAR_VALOR_TITULO_COM_MORA_MULTA_CASO_EXISTA = '57';

    /**
     *
     */
    const DEVOLVER_APOS_365_DIAS_VENCIMENTO = '58';

    /**
     *
     */
    const COBRANCA_NEGOCIADA_PAGAVEL_SOMENTE_ESSE_BOLETO_E_NA_REDE_BANCARIA = '59';

    /**
     *
     */
    const TITULO_ENTREGUE_PENHOR_FAVOR_BENEFICIARIO = '61';

    /**
     *
     */
    const TITULO_TRANSFERIDO_FAVOR_BENEFICIARIO = '62';

    /**
     *
     */
    const ENTRADA_NEGATIVACAO_EXPRESSA = '66';

    /**
     *
     */
    const NAO_NEGATIVAR = '67';

    /**
     *
     */
    const USO_DO_BANCO_4 = '70';

    /**
     *
     */
    const USO_DO_BANCO_5 = '71';

    /**
     *
     */
    const USO_DO_BANCO_6 = '72';

    /**
     *
     */
    const USO_DO_BANCO_7 = '73';

    /**
     *
     */
    const USO_DO_BANCO_8 = '74';

    /**
     *
     */
    const USO_DO_BANCO_9 = '75';

    /**
     *
     */
    const VALOR_IDA_ENGLOBA_MULTA_10_PORCENTO_PRO_RATA = '78';

    /**
     *
     */
    const COBRAR_JUROS_APOS_15_DIAS_EMISSAO = '79';

    /**
     *
     */
    const PAGAMENTO_EM_CHEQUE = '80';

    /**
     *
     */
    const PROTESTO_URGENTE_DIAS_CORRIDOS = '81';

    /**
     *
     */
    const PROTESTO_URGENTE_DIAS_UTEIS = '82';

    /**
     *
     */
    const OPERACAO_VENDOR = '83';

    /**
     *
     */
    const APOS_VENCIMENTO_CONSULTAR_AGENCIA_BENEFICIARIO = '84';

    /**
     *
     */
    const ANTES_VENCIMENTO_OU_APOS_15_DIAS_PAGAVEL_SOMENTE_SEDE = '86';

    /**
     *
     */
    const USO_DO_BANCO_10 = '87';

    /**
     *
     */
    const NAO_RECEBER_ANTES_VENCIMENTO = '88';

    /**
     *
     */
    const USO_DO_BANCO_11 = '89';

    /**
     *
     */
    const NO_VENCIMENTO_PAGAVEL_QUALQUER_AGENCIA = '90';

    /**
     *
     */
    const NAO_RECEBER_APOS_DIAS_VENCIMENTO = '91';

    /**
     *
     */
    const DEVOLVER_APOS_DIAS_VENCIMENTO = '92';

    /**
     *
     */
    const MENSAGENS_BOLETO_30_POSICOES = '93';

    /**
     *
     */
    const MENSAGENS_BOLETO_40_POSICOES = '94';

    /**
     *
     */
    const USO_DO_BANCO_12 = '95';

    /**
     *
     */
    const USO_DO_BANCO_13 = '96';

    /**
     *
     */
    const USO_DO_BANCO_14 = '97';

    /**
     *
     */
    const DUPLICATA_FATURA_NUMERO = '98';



}