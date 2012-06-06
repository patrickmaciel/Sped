<?php

/**
 * Sped
 *
 * Copyright (c) 2012 Sped
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   Sped
 * @package    Sped
 * @copyright  Copyright (c) 2012 Sped (https://github.com/tonicospinelli/Sped)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    ##VERSION##, ##DATE##
 */

namespace Sped\Schemas\V200;

use Sped\Schemas\V200\Reference\DigestMethod,
    Sped\Schemas\V200\Reference\DigestValue,
    Sped\Schemas\V200\Reference\Transforms,
    Sped\Schemas\V200\Reference\Transform;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200\Signature\SignedInfo
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class Reference extends \DOMElement {

    public function __construct() {
        parent::__construct('Reference', null, 'http://www.w3.org/2000/09/xmldsig#');
    }

    public function loadChildren() {
        //<Reference URI="#NFe31060243816719000108550000000010001234567897"> 
        //  <Transforms> 
        //   <Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/> 
        //   <Transform Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/> 
        //  </Transforms> 
        //  <DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
        //  <DigestValue>vFL68WETQ+mvj1aJAMDx+oVi928=</DigestValue> 
        //</Reference>
        $trans = $this->addTransforms();
        $trans->insertTransform()->setAlgorithm('http://www.w3.org/2000/09/xmldsig#enveloped-signature');
        $trans->insertTransform()->setAlgorithm('http://www.w3.org/TR/2001/REC-xml-c14n-20010315');
        $this->addDigestMethod()->setAlgorithm('http://www.w3.org/2000/09/xmldsig#sha1');
        $this->addDigestValue();
    }

    /**
     *
     * @return \Sped\Schemas\V200\Reference\Transform
     */
    public function getTransforms() {
        return $this->getElementsByTagName('Transforms')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Reference\Transforms
     */
    public function addTransforms() {
        return $this->appendChild(new Transforms());
    }

    /**
     *
     * @param \Sped\Schemas\V200\Reference\Transforms $paramTransforms
     * @return \Sped\Schemas\V200\Reference 
     */
    public function setTransforms($paramTransforms) {
        $transforms = $this->getTransforms();
        if ($transforms == null)
            $this->appendChild($paramTransforms);
        else
            $this->replaceChild($paramTransforms, $transforms);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\Reference\DigestMethod
     */
    public function getDigestMethod() {
        return $this->getElementsByTagName('DigestMethod')->item(0);
    }

    /**
     *
     * @return \Sped\Schemas\V200\Reference\DigestMethod
     */
    public function addDigestMethod() {
        return $this->appendChild(new DigestMethod());
    }

    /**
     *
     * @param \Sped\Schemas\V200\Reference\DigestMethod $paramDigestMethod
     * @return \Sped\Schemas\V200\Reference 
     */
    public function setDigestMethod($paramDigestMethod) {
        $digestMethod = $this->getDigestMethod();
        if ($digestMethod == null)
            $this->appendChild($paramDigestMethod);
        else
            $this->replaceChild($paramDigestMethod, $digestMethod);
        return $this;
    }

    /**
     *
     * @return Sped\Schemas\V200\Reference\DigestValue
     */
    public function getDigestValue() {
        return $this->getElementsByTagName('DigestValue')->item(0);
    }

    /**
     *
     * @return Sped\Schemas\V200\Reference\DigestValue
     */
    public function addDigestValue() {
        return $this->appendChild(new DigestValue());
    }

    /**
     *
     * @param Sped\Schemas\V200\Reference\DigestValue $paramDigestValue
     * @return \Sped\Schemas\V200\Reference 
     */
    public function setDigestValue($paramDigestValue) {
        $digestValue = $this->getDigestValue();
        if ($digestValue == null)
            $this->appendChild($paramDigestValue);
        else
            $this->replaceChild($paramDigestValue, $digestValue);
        return $this;
    }

    public function getId() {
        return $this->getAttribute('Id');
    }

    public function setId($paramId) {
        $this->setAttribute('Id', $paramId);
        return $this;
    }

    public function isSetId() {
        return $this->hasAttribute('Id');
    }

    public function removeId() {
        $this->removeAttribute('Id');
    }

    public function getURI() {
        return $this->getAttribute('URI');
    }

    public function setURI($paramURI) {
        $this->setAttribute('URI', $paramURI);
        return $this;
    }

    public function getType() {
        return $this->getAttribute('Type');
    }

    public function setType($paramType) {
        $this->setAttribute('Type', $paramType);
        return $this;
    }

    public function isSetType() {
        return $this->hasAttribute('Type');
    }

    public function removeType() {
        $this->removeAttribute('Type');
    }

}