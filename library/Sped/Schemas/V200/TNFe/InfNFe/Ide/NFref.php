<?php

namespace Sped\Schemas\V200\TNFe\InfNFe\Ide;

/**
 * Grupo de infromações da NF referenciada
 * @category Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @name NFref
 * @package Sped
 */
class NFref extends \Sped\Components\Xml\Element 
{

    const REFNFE = 'refNFe';

    const REFNF = 'refNF';

    const REFNFP = 'refNFP';

    const REFCTE = 'refCTe';

    const REFECF = 'refECF';

    /**
     * 
     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function getRefNFe()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TChNFe');
        return $this->getElementsByTagName(self::REFNFE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function addRefNFe($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TChNFe(self::REFNFE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TChNFe $paramRefNFe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefNFe(\Sped\Schemas\V200\TChNFe $paramRefNFe)
    {
        $this->removeElementsByTagName(self::REFNFE);
        $this->appendChild($paramRefNFe, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function getRefNF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF');
        return $this->getElementsByTagName(self::REFNF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF 
     */
    public function addRefNF()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF(self::REFNF, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF $paramRefNF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefNF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNF $paramRefNF)
    {
        $this->removeElementsByTagName(self::REFNF);
        $this->appendChild($paramRefNF, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function getRefNFP()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP');
        return $this->getElementsByTagName(self::REFNFP)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP 
     */
    public function addRefNFP()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP(self::REFNFP, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP $paramRefNFP 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefNFP(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefNFP $paramRefNFP)
    {
        $this->removeElementsByTagName(self::REFNFP);
        $this->appendChild($paramRefNFP, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function getRefCTe()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TChNFe');
        return $this->getElementsByTagName(self::REFCTE)->item(0);
    }

    /**
     * 
     * @param type $value 
     * @return \Sped\Schemas\V200\TChNFe 
     */
    public function addRefCTe($value = NULL)
    {
        return $this->appendChild(new \Sped\Schemas\V200\TChNFe(self::REFCTE, $value, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TChNFe $paramRefCTe 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefCTe(\Sped\Schemas\V200\TChNFe $paramRefCTe)
    {
        $this->removeElementsByTagName(self::REFCTE);
        $this->appendChild($paramRefCTe, false);
        return $this;
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function getRefECF()
    {
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF');
        return $this->getElementsByTagName(self::REFECF)->item(0);
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF 
     */
    public function addRefECF()
    {
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF(self::REFECF, NULL, 'http://www.portalfiscal.inf.br/nfe'), true);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF $paramRefECF 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref 
     */
    public function setRefECF(\Sped\Schemas\V200\TNFe\InfNFe\Ide\NFref\RefECF $paramRefECF)
    {
        $this->removeElementsByTagName(self::REFECF);
        $this->appendChild($paramRefECF, false);
        return $this;
    }

}