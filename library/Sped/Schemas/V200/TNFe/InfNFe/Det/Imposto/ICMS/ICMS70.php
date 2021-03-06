<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação pelo ICMS <br />
 * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name ICMS70
 * @package Sped
 */
class ICMS70 extends \Sped\Components\Xml\Element 
{

    const ORIG = 'orig';

    const CST = 'CST';

    const MODBC = 'modBC';

    const PREDBC = 'pRedBC';

    const VBC = 'vBC';

    const PICMS = 'pICMS';

    const VICMS = 'vICMS';

    const MODBCST = 'modBCST';

    const PMVAST = 'pMVAST';

    const PREDBCST = 'pRedBCST';

    const VBCST = 'vBCST';

    const PICMSST = 'pICMSST';

    const VICMSST = 'vICMSST';

    /**
     * Retorna origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(self::ORIG)->item(0);
    }

    /**
     * Adiciona origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno 
     * @param string $value 
     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\Torig(self::ORIG, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define origem da mercadoria: 0 - Nacional <br />
     * 1 - Estrangeira - Importação direta <br />
     * 2 - Estrangeira - Adquirida no mercado interno 
     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig)
    {
        $this->removeElementsByTagName(self::ORIG);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**
     * Retorna Tributção pelo ICMS<br />
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\CST 
     */
    public function getCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\CST');
        return $this->getElementsByTagName(self::CST)->item(0);
    }

    /**
     * Adiciona Tributção pelo ICMS<br />
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\CST 
     */
    public function addCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\CST(self::CST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Tributção pelo ICMS<br />
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição tributária 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\CST $paramCST)
    {
        $this->removeElementsByTagName(self::CST);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**
     * Retorna Modalidade de determinação da BC do ICMS:<br />
     * 0 - Margem Valor Agregado (%);<br />
     * 1 - Pauta (valor);<br />
     * 2 - Preço Tabelado Máximo (valor);<br />
     * 3 - Valor da Operação.
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBC 
     */
    public function getModBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBC');
        return $this->getElementsByTagName(self::MODBC)->item(0);
    }

    /**
     * Adiciona Modalidade de determinação da BC do ICMS:<br />
     * 0 - Margem Valor Agregado (%);<br />
     * 1 - Pauta (valor);<br />
     * 2 - Preço Tabelado Máximo (valor);<br />
     * 3 - Valor da Operação.
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBC 
     */
    public function addModBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBC(self::MODBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Modalidade de determinação da BC do ICMS:<br />
     * 0 - Margem Valor Agregado (%);<br />
     * 1 - Pauta (valor);<br />
     * 2 - Preço Tabelado Máximo (valor);<br />
     * 3 - Valor da Operação.
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBC $paramModBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setModBC(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBC $paramModBC)
    {
        $this->removeElementsByTagName(self::MODBC);
        $this->appendChild($paramModBC, false);
        return $this;
    }

    /**
     * Retorna Percentual de redução da BC
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPRedBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PREDBC)->item(0);
    }

    /**
     * Adiciona Percentual de redução da BC
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPRedBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PREDBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Percentual de redução da BC
     * @param \Sped\Schemas\V200\TDec_0302 $paramPRedBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setPRedBC(\Sped\Schemas\V200\TDec_0302 $paramPRedBC)
    {
        $this->removeElementsByTagName(self::PREDBC);
        $this->appendChild($paramPRedBC, false);
        return $this;
    }

    /**
     * Retorna Valor da BC do ICMS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBC()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBC)->item(0);
    }

    /**
     * Adiciona Valor da BC do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBC($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBC 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setVBC(\Sped\Schemas\V200\TDec_1302 $paramVBC)
    {
        $this->removeElementsByTagName(self::VBC);
        $this->appendChild($paramVBC, false);
        return $this;
    }

    /**
     * Retorna Alíquota do ICMS
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMS)->item(0);
    }

    /**
     * Adiciona Alíquota do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do ICMS
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setPICMS(\Sped\Schemas\V200\TDec_0302 $paramPICMS)
    {
        $this->removeElementsByTagName(self::PICMS);
        $this->appendChild($paramPICMS, false);
        return $this;
    }

    /**
     * Retorna Valor do ICMS
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMS)->item(0);
    }

    /**
     * Adiciona Valor do ICMS
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMS, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do ICMS
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS)
    {
        $this->removeElementsByTagName(self::VICMS);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**
     * Retorna Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor).
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST 
     */
    public function getModBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST');
        return $this->getElementsByTagName(self::MODBCST)->item(0);
    }

    /**
     * Adiciona Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor).
     * @param string $value 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST 
     */
    public function addModBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST(self::MODBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Modalidade de determinação da BC do ICMS ST:<br />
     * 0 – Preço tabelado ou máximo  sugerido;<br />
     * 1 - Lista Negativa (valor);<br />
     * 2 - Lista Positiva (valor);<br />
     * 3 - Lista Neutra (valor);<br />
     * 4 - Margem Valor Agregado (%);<br />
     * 5 - Pauta (valor).
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST $paramModBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setModBCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70\ModBCST $paramModBCST)
    {
        $this->removeElementsByTagName(self::MODBCST);
        $this->appendChild($paramModBCST, false);
        return $this;
    }

    /**
     * Retorna Percentual da Margem de Valor Adicionado ICMS ST
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPMVAST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PMVAST)->item(0);
    }

    /**
     * Adiciona Percentual da Margem de Valor Adicionado ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPMVAST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PMVAST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Percentual da Margem de Valor Adicionado ICMS ST
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPMVAST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setPMVAST(\Sped\Schemas\V200\TDec_0302Opc $paramPMVAST)
    {
        $this->removeElementsByTagName(self::PMVAST);
        $this->appendChild($paramPMVAST, false);
        return $this;
    }

    /**
     * Retorna Percentual de redução da BC ICMS ST 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function getPRedBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302Opc');
        return $this->getElementsByTagName(self::PREDBCST)->item(0);
    }

    /**
     * Adiciona Percentual de redução da BC ICMS ST 
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302Opc 
     */
    public function addPRedBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302Opc(self::PREDBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Percentual de redução da BC ICMS ST 
     * @param \Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setPRedBCST(\Sped\Schemas\V200\TDec_0302Opc $paramPRedBCST)
    {
        $this->removeElementsByTagName(self::PREDBCST);
        $this->appendChild($paramPRedBCST, false);
        return $this;
    }

    /**
     * Retorna Valor da BC do ICMS ST
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVBCST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VBCST)->item(0);
    }

    /**
     * Adiciona Valor da BC do ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVBCST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VBCST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor da BC do ICMS ST
     * @param \Sped\Schemas\V200\TDec_1302 $paramVBCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setVBCST(\Sped\Schemas\V200\TDec_1302 $paramVBCST)
    {
        $this->removeElementsByTagName(self::VBCST);
        $this->appendChild($paramVBCST, false);
        return $this;
    }

    /**
     * Retorna Alíquota do ICMS ST
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function getPICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_0302');
        return $this->getElementsByTagName(self::PICMSST)->item(0);
    }

    /**
     * Adiciona Alíquota do ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_0302 
     */
    public function addPICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_0302(self::PICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Alíquota do ICMS ST
     * @param \Sped\Schemas\V200\TDec_0302 $paramPICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setPICMSST(\Sped\Schemas\V200\TDec_0302 $paramPICMSST)
    {
        $this->removeElementsByTagName(self::PICMSST);
        $this->appendChild($paramPICMSST, false);
        return $this;
    }

    /**
     * Retorna Valor do ICMS ST
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMSST()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(self::VICMSST)->item(0);
    }

    /**
     * Adiciona Valor do ICMS ST
     * @param string $value 
     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMSST($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(self::VICMSST, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Valor do ICMS ST
     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMSST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS70 
     */
    public function setVICMSST(\Sped\Schemas\V200\TDec_1302 $paramVICMSST)
    {
        $this->removeElementsByTagName(self::VICMSST);
        $this->appendChild($paramVICMSST, false);
        return $this;
    }

}