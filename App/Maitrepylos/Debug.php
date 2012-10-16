<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gg
 * Date: 20/09/12
 * Time: 15:05
 * To change this template use File | Settings | File Templates.
 */

namespace Maitrepylos;

class Debug
{

    public static function dump($var, $name = 'var')
    {
        ob_start();
        echo('<pre>'. $name . ' :<br/>');
        var_dump($var);
        echo('</pre>');
        $buffer = ob_get_contents();
        ob_end_clean();

        $backtrace = debug_backtrace();
        $dieMsg  = '<pre><b>var dump by goTools:dump()</b>'. "\n";
        $dieMsg .= isset($backtrace[0]['file']) ?     '» file     : <b>'.
            $backtrace[0]['file'] .'</b>'. "\n" : '';
        $dieMsg .= isset($backtrace[0]['line']) ?     '» line     : <b>'.
            $backtrace[0]['line'] .'</b>'. "\n" : '';
        $dieMsg .= isset($backtrace[1]['class']) ?    '» class    : <b>'.
            $backtrace[1]['class'] .'</b>'. "\n" : '';
        $dieMsg .= isset($backtrace[1]['function']) ? '» function : <b>'.
            $backtrace[1]['function'] .'</b>'. "\n" : '';
        $dieMsg .= '</pre>';


        echo $dieMsg;
        echo $buffer;

    }

}
