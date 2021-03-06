<?php

namespace Sped\Schemas\V200;

/**
 * Tipo Retorno do Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name TRetEnviNFe
 * @package Sped
 */
class TRetEnviNFe extends \Sped\Components\Xml\Element 
{

    const TPAMB = 'tpAmb';

    const VERAPLIC = 'verAplic';

    const CSTAT = 'cStat';

    const XMOTIVO = 'xMotivo';

    const CUF = 'cUF';

    const DHRECBTO = 'dhRecbto';

    const INFREC = 'infRec';

    /**
     * Retorna Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function getTpAmb()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TAmb');
        return $this->getElementsByTagName(self::TPAMB)->item(0);
    }

    /**
     * Adiciona Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @param string $value 
     * @return \Sped\Schemas\V200\TAmb 
     */
    public function addTpAmb($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TAmb(self::TPAMB, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Identificação do Ambiente:<br />
     * 1 - Produção<br />
     * 2 - Homologação
     * @param \Sped\Schemas\V200\TAmb $paramTpAmb 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setTpAmb(\Sped\Schemas\V200\TAmb $paramTpAmb)
    {
        $this->removeElementsByTagName(self::TPAMB);
        $this->appendChild($paramTpAmb, false);
        return $this;
    }

    /**
     * Retorna Versão do Aplicativo que recebeu o Lote.
     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function getVerAplic()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TVerAplic');
        return $this->getElementsByTagName(self::VERAPLIC)->item(0);
    }

    /**
     * Adiciona Versão do Aplicativo que recebeu o Lote.
     * @param string $value 
     * @return \Sped\Schemas\V200\TVerAplic 
     */
    public function addVerAplic($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TVerAplic(self::VERAPLIC, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Versão do Aplicativo que recebeu o Lote.
     * @param \Sped\Schemas\V200\TVerAplic $paramVerAplic 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setVerAplic(\Sped\Schemas\V200\TVerAplic $paramVerAplic)
    {
        $this->removeElementsByTagName(self::VERAPLIC);
        $this->appendChild($paramVerAplic, false);
        return $this;
    }

    /**
     * Retorna Código do status da mensagem enviada.
     * @return \Sped\Schemas\V200\TStat 
     */
    public function getCStat()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TStat');
        return $this->getElementsByTagName(self::CSTAT)->item(0);
    }

    /**
     * Adiciona Código do status da mensagem enviada.
     * @param string $value 
     * @return \Sped\Schemas\V200\TStat 
     */
    public function addCStat($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TStat(self::CSTAT, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Código do status da mensagem enviada.
     * @param \Sped\Schemas\V200\TStat $paramCStat 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setCStat(\Sped\Schemas\V200\TStat $paramCStat)
    {
        $this->removeElementsByTagName(self::CSTAT);
        $this->appendChild($paramCStat, false);
        return $this;
    }

    /**
     * Retorna Descrição literal do status do serviço solicitado.
     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function getXMotivo()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TMotivo');
        return $this->getElementsByTagName(self::XMOTIVO)->item(0);
    }

    /**
     * Adiciona Descrição literal do status do serviço solicitado.
     * @param string $value 
     * @return \Sped\Schemas\V200\TMotivo 
     */
    public function addXMotivo($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TMotivo(self::XMOTIVO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Descrição literal do status do serviço solicitado.
     * @param \Sped\Schemas\V200\TMotivo $paramXMotivo 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setXMotivo(\Sped\Schemas\V200\TMotivo $paramXMotivo)
    {
        $this->removeElementsByTagName(self::XMOTIVO);
        $this->appendChild($paramXMotivo, false);
        return $this;
    }

    /**
     * Retorna código da UF de atendimento
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function getCUF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TCodUfIBGE');
        return $this->getElementsByTagName(self::CUF)->item(0);
    }

    /**
     * Adiciona código da UF de atendimento
     * @param string $value 
     * @return \Sped\Schemas\V200\TCodUfIBGE 
     */
    public function addCUF($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TCodUfIBGE(self::CUF, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define código da UF de atendimento
     * @param \Sped\Schemas\V200\TCodUfIBGE $paramCUF 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setCUF(\Sped\Schemas\V200\TCodUfIBGE $paramCUF)
    {
        $this->removeElementsByTagName(self::CUF);
        $this->appendChild($paramCUF, false);
        return $this;
    }

    /**
     * Retorna Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SS
     * @return \Sped\Components\Xml\Element 
     */
    public function getDhRecbto()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Components\Xml\Element');
        return $this->getElementsByTagName(self::DHRECBTO)->item(0);
    }

    /**
     * Adiciona Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SS
     * @param string $value 
     * @return \Sped\Components\Xml\Element 
     */
    public function addDhRecbto($value = NULL)
    {
        return $this->appendChild(new \Sped\Components\Xml\Element(self::DHRECBTO, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Data e hora do recebimento, no formato AAAA-MM-DDTHH:MM:SS
     * @param \Sped\Components\Xml\Element $paramDhRecbto 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setDhRecbto(\Sped\Components\Xml\Element $paramDhRecbto)
    {
        $this->removeElementsByTagName(self::DHRECBTO);
        $this->appendChild($paramDhRecbto, false);
        return $this;
    }

    /**
     * Retorna Dados do Recibo do Lote
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function getInfRec()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TRetEnviNFe\InfRec');
        return $this->getElementsByTagName(self::INFREC)->item(0);
    }

    /**
     * Adiciona Dados do Recibo do Lote
     * @return \Sped\Schemas\V200\TRetEnviNFe\InfRec 
     */
    public function addInfRec()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TRetEnviNFe\InfRec(self::INFREC, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * Define Dados do Recibo do Lote
     * @param \Sped\Schemas\V200\TRetEnviNFe\InfRec $paramInfRec 
     * @return \Sped\Schemas\V200\TRetEnviNFe 
     */
    public function setInfRec(\Sped\Schemas\V200\TRetEnviNFe\InfRec $paramInfRec)
    {
        $this->removeElementsByTagName(self::INFREC);
        $this->appendChild($paramInfRec, false);
        return $this;
    }

    /**
     * 
     * @return string 
     */
    public function getVersao()
    {
        return $this->getAttribute('versao');
    }

    /**
     * 
     * @param type $value 
     */
    public function setVersao($value)
    {
        $this->setAttribute('versao', $value);
        return $this;
    }

}