<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto;

/**
 * Dados do PIS

 * @name PIS
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class PIS extends \Sped\Components\Xml\Element  {
    const NAME = 'PIS';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function getPISAliq(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq 
     */
    public function addPISAliq(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq $paramPISAliq 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISAliq(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq $paramPISAliq){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISAliq::NAME);
        $this->appendChild($paramPISAliq, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function getPISQtde(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde 
     */
    public function addPISQtde(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde $paramPISQtde 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISQtde(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde $paramPISQtde){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISQtde::NAME);
        $this->appendChild($paramPISQtde, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT 
     */
    public function getPISNT(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT 
     */
    public function addPISNT(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT $paramPISNT 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISNT(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT $paramPISNT){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISNT::NAME);
        $this->appendChild($paramPISNT, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr 
     */
    public function getPISOutr(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr 
     */
    public function addPISOutr(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr $paramPISOutr 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS 
     */
    public function setPISOutr(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr $paramPISOutr){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\PIS\PISOutr::NAME);
        $this->appendChild($paramPISOutr, false);
        return $this;
    }

}