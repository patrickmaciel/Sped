<?php
namespace Sped\Schemas\V200;

/**
 * 

 * @name TTransformURI
 * @category Sped
 * @package Sped
 * @copyright Copyright (c) 2012 Antonio Spinelli
 * @license http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 */
class TTransformURI extends \Sped\Components\Xml\Element  {
    const NAME = 'TransformURI';

    /**

     * @param string $value 
     */
    public function __construct(string $value = NULL){
        parent::__construct(self::NAME, $value, 'http://www.w3.org/2000/09/xmldsig#');
    }

}