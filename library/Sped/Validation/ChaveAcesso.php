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

namespace Sped\Validation;

/**
 * @category   Sped
 * @package    Sped\Validation
 * @copyright  Copyright (c) 2012
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Antonio Spinelli <tonicospinelli85@gmail.com>
 */
class ChaveAcesso extends Modulo11
{

    function __construct()
    {
        $this->numeroDigitos = 1;
        $this->limiteMultiplicador = 9;
    }

    /**
     * Valida se o Chave de Acesso está correta.
     * @param string|int|\Sped\Commons\Documents\ChaveAcesso $value
     * @return boolean 
     */
    public function validate($value)
    {
        if (!$value instanceof \Sped\Commons\Documents\ChaveAcesso)
            $value = new \Sped\Commons\Documents\ChaveAcesso($value);
        return parent::validate($value);
    }

}