<?php
namespace Sped\Schemas\V200\TNFe\InfNFe\Emit;

/**
 * Código de Regime Tributário. <br />
 * Este campo será obrigatoriamente preenchido com:<br />
 * 1 – Simples Nacional;<br />
 * 2 – Simples Nacional – excesso de sublimite de receita bruta;<br />
 * 3 – Regime Normal. (v2.0).
 * @name CRT
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class CRT extends \Sped\Components\Xml\Element  {
    const NAME = 'CRT';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.portalfiscal.inf.br/nfe');
    }

}