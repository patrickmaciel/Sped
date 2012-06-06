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

use Sped\Schemas\V200\TNFe\InfNFe,
    Sped\Schemas\V200\Signature;

/**
 * @category   Sped
 * @package    Sped\Schemas\V200
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class TNFe extends \DOMElement {

    public function __construct() {
        parent::__construct('NFe', null, 'http://www.portalfiscal.inf.br/nfe');
    }

    /**
     * 
     * @return \Sped\Schemas\V200\TNFe\InfNFe
     */
    public function getInfNFe() {
        return $this->getElementsByTagName('infNFe')->item(0);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\TNFe\InfNFe $paramInfNFe
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function setInfNFe($paramInfNFe) {
        $infNFe = $this->getInfNFe();
        if ($infNFe == null)
            $this->appendChild($paramInfNFe);
        else
            $this->replaceChild($paramInfNFe, $infNFe);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\TNFe\InfNFe
     */
    public function addInfNFe() {
        return $this->appendChild(new InfNFe());
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature
     */
    public function getSignature() {
        return $this->getElementsByTagName('Signature')->item(0);
    }

    /**
     * 
     * @param \Sped\Schemas\V200\Signature $paramSignature
     * @return \Sped\Schemas\V200\TNFe 
     */
    public function setSignature($paramSignature) {
        $signature = $this->getSignature();
        if ($signature == null)
            $this->appendChild($paramSignature);
        else
            $this->replaceChild($paramSignature, $signature);
        return $this;
    }

    /**
     *
     * @return \Sped\Schemas\V200\Signature
     */
    public function addSignature() {
        return $this->appendChild(new Signature());
    }

}