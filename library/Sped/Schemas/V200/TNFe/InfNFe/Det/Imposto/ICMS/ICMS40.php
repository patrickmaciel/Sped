<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS;

/**
 * Tributação pelo ICMS<br />
 * 40 - Isenta <br />
 * 41 - Não tributada <br />
 * 50 - Suspensão  
 * @name ICMS40
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class ICMS40 extends \Sped\Components\Xml\Element  {
    const NAME = 'ICMS40';
    public function __construct(){
        parent::__construct(self::NAME, null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**

     * @return \Sped\Schemas\V200\Torig 
     */
    public function getOrig(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\Torig');
        return $this->getElementsByTagName(\Sped\Schemas\V200\Torig::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\Torig 
     */
    public function addOrig(){
        return $this->appendChild(new \Sped\Schemas\V200\Torig(), true);
    }

    /**

     * @param \Sped\Schemas\V200\Torig $paramOrig 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setOrig(\Sped\Schemas\V200\Torig $paramOrig){
        $this->removeElementsByTagName(\Sped\Schemas\V200\Torig::NAME);
        $this->appendChild($paramOrig, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST 
     */
    public function getCST(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST 
     */
    public function addCST(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST $paramCST 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setCST(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST $paramCST){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\CST::NAME);
        $this->appendChild($paramCST, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function getVICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TDec_1302');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TDec_1302 
     */
    public function addVICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TDec_1302(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TDec_1302 $paramVICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setVICMS(\Sped\Schemas\V200\TDec_1302 $paramVICMS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TDec_1302::NAME);
        $this->appendChild($paramVICMS, false);
        return $this;
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS 
     */
    public function getMotDesICMS(){
        $this->ownerDocument->registerNodeClass('\DOMElement', '\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS');
        return $this->getElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS::NAME)->item(0);
    }

    /**

     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS 
     */
    public function addMotDesICMS(){
        return $this->appendChild(new \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS(), true);
    }

    /**

     * @param \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS $paramMotDesICMS 
     * @return \Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40 
     */
    public function setMotDesICMS(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS $paramMotDesICMS){
        $this->removeElementsByTagName(\Sped\Schemas\V200\TNFe\InfNFe\Det\Imposto\ICMS\ICMS40\MotDesICMS::NAME);
        $this->appendChild($paramMotDesICMS, false);
        return $this;
    }

}