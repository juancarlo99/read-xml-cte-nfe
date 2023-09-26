<?php

namespace Xml\Util\Models\Traits;

trait ICMS
{
    public int | null $origem_mercadoria;
    public string | null $tributacao_icms;
    public int | null $modalidade_de_determinacao_da_bc_do_icms;
    public float | null $valor_da_bc_do_icms;
    public float | null $aliquota_do_icms;
    public float | null $valor_do_icms;
    public int | null $modalidade_de_determinacao_da_bc_do_icms_st;
    public float | null $percentual_de_margem_de_valor_adicionado_icms_st;
    public float | null $percentual_da_reducao_de_base_de_calculo_icms_st;
    public float | null $valor_da_bc_do_icms_st;
    public float | null $aliquota_do_icms_st;
    public float | null $valor_do_icms_st;
    public float | null $valor_do_icms_st_retido;
    public float | null $percentual_da_reducao_de_base_de_calculo;
    public int | null $motivo_da_desoneracao_do_icms;
    public float | null $valor_do_icms_desonerado;
    public float | null $valor_icms_da_operacao;
    public float | null $percentual_do_diferimento;
    public float | null $valor_do_icms_diferido;
    public float | null $percentual_da_bc_operacao_propria;
    public string | null $uf_para_quem_e_devido_o_icms_st;
    public float | null $valor_da_bc_do_icms_st_da_uf_de_destino;

    public float | null $aliquota_aplicavel_de_calculo_do_credito;
    public float | null $valor_credito_icms_que_pode_ser_aproveitado;
    public float | null $percentual_do_fundo_de_combate_a_pobreza;
    public float | null $valor_bc_do_fcp;
    public float | null $valor_bc_do_fcp_st;
    public float | null $percentual_fcp_retido_por_st;
    public float | null $valor_do_fcp_retido_por_st;
    public float | null $aliquota_suportada_pelo_consumidor_final;
    public float | null $valor_icms_proprio_do_substituto;
    public float | null $valor_bc_do_fco_retido_anteriormente_por_st;
    public float | null $percentual_fcp_retido_anteriormente_por_st;
    public float | null $valor_fcb_retido_por_st;
    public int | null $gerar_icms_st;
    public float | null $percentual_da_reducao_da_bc_efetiva;

    public float | null $valor_bc_efetiva;
    public float | null $aliquota_icms_efetiva;
    public float | null $valor_icms_efetivo;
    public float | null $desconto_icms_desonerado_total_nota;
    
    public float | null $valor_icms_st_desonerado;

    public int | null $motivo_desoneracao_icms_st;
    public float | null $percentual_difereminto_icms_relatiovo_ao_fcb;
    public float | null $valor_icms_relativo_ao_fcb_diferido;
    public float | null $valor_icms_relativo_ao_fcb_realmente_devido;

    public float | null $quantidade_tributada;
    public float | null $aliquota_ad_rem_do_imposto;
    public float | null $valor_do_icms_proprio;
    public float | null $quantidade_tributada_sugeita_a_retencao;
    public float | null $aliquota_ad_rem_do_imposto_com_retencao;
    public float | null $valor_do_icms_com_retencao;
    public float | null $percentual_de_reducao_valor_aliquota_adren_do_icms;
    public int | null $motivo_reducao_adrem;
    public float | null $quantidade_tributada_diferida;
    public float | null $aliquota_ad_rem_do_imposto_diferida;
    public float | null $valor_do_icms_diferido_multiplicacao;
    public float | null $quantidade_tributada_retida_anteriormente;
    public float | null $aliquota_ad_rem_do_imposto_retida_anteriormente;

    public float | null $valor_do_icms_retido_anteriormente;

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->origem_mercadoria = $this->origem_mercadoria;
        $return->tributacao_icms = $this->tributacao_icms;
        $return->modalidade_de_determinacao_da_bc_do_icms = $this->modalidade_de_determinacao_da_bc_do_icms;
        $return->valor_da_bc_do_icms = $this->valor_da_bc_do_icms;
        $return->aliquota_do_icms = $this->aliquota_do_icms;
        $return->valor_do_icms = $this->valor_do_icms;
        $return->modalidade_de_determinacao_da_bc_do_icms_st = $this->modalidade_de_determinacao_da_bc_do_icms_st;
        $return->percentual_de_margem_de_valor_adicionado_icms_st = $this->percentual_de_margem_de_valor_adicionado_icms_st;
        $return->percentual_da_reducao_de_base_de_calculo_icms_st = $this->percentual_da_reducao_de_base_de_calculo_icms_st;
        $return->valor_da_bc_do_icms_st = $this->valor_da_bc_do_icms_st;
        $return->aliquota_do_icms_st = $this->aliquota_do_icms_st;
        $return->valor_do_icms_st = $this->valor_do_icms_st;
        $return->valor_do_icms_st_retido = $this->valor_do_icms_st_retido;
        $return->percentual_da_reducao_de_base_de_calculo = $this->percentual_da_reducao_de_base_de_calculo;
        $return->motivo_da_desoneracao_do_icms = $this->motivo_da_desoneracao_do_icms;
        $return->valor_do_icms_desonerado = $this->valor_do_icms_desonerado;
        $return->valor_icms_da_operacao = $this->valor_icms_da_operacao;
        $return->percentual_do_diferimento = $this->percentual_do_diferimento;
        $return->valor_do_icms_diferido = $this->valor_do_icms_diferido;
        $return->percentual_da_bc_operacao_propria = $this->percentual_da_bc_operacao_propria;
        $return->uf_para_quem_e_devido_o_icms_st = $this->uf_para_quem_e_devido_o_icms_st;
        $return->valor_da_bc_do_icms_st_da_uf_de_destino = $this->valor_da_bc_do_icms_st_da_uf_de_destino;
        $return->aliquota_aplicavel_de_calculo_do_credito = $this->aliquota_aplicavel_de_calculo_do_credito;
        $return->valor_credito_icms_que_pode_ser_aproveitado = $this->valor_credito_icms_que_pode_ser_aproveitado;
        $return->percentual_do_fundo_de_combate_a_pobreza = $this->percentual_do_fundo_de_combate_a_pobreza;
        $return->valor_bc_do_fcp = $this->valor_bc_do_fcp;
        $return->valor_bc_do_fcp_st = $this->valor_bc_do_fcp_st;
        $return->percentual_fcp_retido_por_st = $this->percentual_fcp_retido_por_st;
        $return->valor_do_fcp_retido_por_st = $this->valor_do_fcp_retido_por_st;
        $return->aliquota_suportada_pelo_consumidor_final = $this->aliquota_suportada_pelo_consumidor_final;
        $return->valor_icms_proprio_do_substituto = $this->valor_icms_proprio_do_substituto;
        $return->valor_bc_do_fco_retido_anteriormente_por_st = $this->valor_bc_do_fco_retido_anteriormente_por_st;
        $return->percentual_fcp_retido_anteriormente_por_st = $this->percentual_fcp_retido_anteriormente_por_st;
        $return->valor_fcb_retido_por_st = $this->valor_fcb_retido_por_st;
        $return->gerar_icms_st = $this->gerar_icms_st;
        $return->percentual_da_reducao_da_bc_efetiva = $this->percentual_da_reducao_da_bc_efetiva;
        $return->valor_bc_efetiva = $this->valor_bc_efetiva;
        $return->aliquota_icms_efetiva = $this->aliquota_icms_efetiva;
        $return->valor_icms_efetivo = $this->valor_icms_efetivo;
        $return->desconto_icms_desonerado_total_nota = $this->desconto_icms_desonerado_total_nota;
        $return->valor_icms_st_desonerado = $this->valor_icms_st_desonerado;
        $return->motivo_desoneracao_icms_st = $this->motivo_desoneracao_icms_st;
        $return->percentual_difereminto_icms_relatiovo_ao_fcb = $this->percentual_difereminto_icms_relatiovo_ao_fcb;
        $return->valor_icms_relativo_ao_fcb_diferido = $this->valor_icms_relativo_ao_fcb_diferido;
        $return->valor_icms_relativo_ao_fcb_realmente_devido = $this->valor_icms_relativo_ao_fcb_realmente_devido;
        $return->quantidade_tributada = $this->quantidade_tributada;
        $return->aliquota_ad_rem_do_imposto = $this->aliquota_ad_rem_do_imposto;
        $return->valor_do_icms_proprio = $this->valor_do_icms_proprio;
        $return->quantidade_tributada_sugeita_a_retencao = $this->quantidade_tributada_sugeita_a_retencao;
        $return->aliquota_ad_rem_do_imposto_com_retencao = $this->aliquota_ad_rem_do_imposto_com_retencao;
        $return->valor_do_icms_com_retencao = $this->valor_do_icms_com_retencao;
        $return->percentual_de_reducao_valor_aliquota_adren_do_icms = $this->percentual_de_reducao_valor_aliquota_adren_do_icms;
        $return->motivo_reducao_adrem = $this->motivo_reducao_adrem;
        $return->quantidade_tributada_diferida = $this->quantidade_tributada_diferida;
        $return->aliquota_ad_rem_do_imposto_diferida = $this->aliquota_ad_rem_do_imposto_diferida;
        $return->valor_do_icms_diferido_multiplicacao = $this->valor_do_icms_diferido_multiplicacao;
        $return->quantidade_tributada_retida_anteriormente = $this->quantidade_tributada_retida_anteriormente;
        $return->aliquota_ad_rem_do_imposto_retida_anteriormente = $this->aliquota_ad_rem_do_imposto_retida_anteriormente;
        $return->valor_do_icms_retido_anteriormente = $this->valor_do_icms_retido_anteriormente;
      
        return $return;
    }
}
