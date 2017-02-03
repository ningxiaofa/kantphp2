<?php

/**
 * @package KantPHP
 * @author  Zhenqiang Zhang <565364226@qq.com>
 * @copyright (c) 2011 KantPHP Studio, All rights reserved.
 * @license http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 */

namespace Kant\Exception;
use Kant\Exception\KantException;

/**
 * InvalidCallException represents an exception caused by calling a method in a wrong way.
 *
 */
class InvalidCallException extends KantException {

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName() {
        return 'Invalid Call';
    }

}
