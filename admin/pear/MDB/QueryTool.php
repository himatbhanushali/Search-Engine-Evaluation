<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Contains the MDB_QueryTool class
 *
 * PHP versions 4 and 5
 *
 * LICENSE: Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR "AS IS" AND ANY EXPRESS OR IMPLIED
 * WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE FREEBSD PROJECT OR CONTRIBUTORS BE LIABLE FOR ANY
 * DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
 * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
 * THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   Database
 * @package    MDB_QueryTool
 * @author     Lorenzo Alberton <l dot alberton at quipo dot it>
 * @copyright  2003-2006 Lorenzo Alberton
 * @license    http://www.debian.org/misc/bsd.license  BSD License (3 Clause)
 * @version    CVS: $Id: QueryTool.php,v 1.8 2006/01/26 17:10:16 quipo Exp $
 * @link       http://pear.php.net/package/MDB_QueryTool
 */

/**
 * require the MDB_QueryTool_EasyJoin class
 */
require_once 'MDB/QueryTool/EasyJoin.php';

/**
 * MDB_QueryTool class
 *
 * This is a port of DB_QueryTool, originally written by Wolfram Kriesing
 * and Paolo Panto, vision:produktion <wk@visionp.de>
 * It uses the PEAR::MDB database abstraction layer
 *
 * @category   Database
 * @package    MDB_QueryTool
 * @author     Lorenzo Alberton <l dot alberton at quipo dot it>
 * @copyright  2003-2006 Lorenzo Alberton
 * @license    http://www.debian.org/misc/bsd.license  BSD License (3 Clause)
 * @link       http://pear.php.net/package/MDB_QueryTool
 */
class MDB_QueryTool extends MDB_QueryTool_EasyJoin
{
    // {{{ MDB_QueryTool()

    /**
     * call parent constructor
     * @param mixed $dsn DSN string, DSN array or MDB object
     * @param array $options
     */
    function MDB_QueryTool($dsn=false, $options=array())
    {
        parent::__construct($dsn, $options);
    }

    // }}}
}
?>