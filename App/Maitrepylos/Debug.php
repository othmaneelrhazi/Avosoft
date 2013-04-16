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

    /**
     * A collapse icon, using in the dump_var function to allow collapsing
     * an array or object
     *
     * @access  public
     * @since   1.0.000
     * @static
     * @var     string
     */
    public static $icon_collapse = 'iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAMAAADXT/YiAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo3MjlFRjQ2NkM5QzJFMTExOTA0MzkwRkI0M0ZCODY4RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFNzFDNDQyNEMyQzkxMUUxOTU4MEM4M0UxRDA0MUVGNSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFNzFDNDQyM0MyQzkxMUUxOTU4MEM4M0UxRDA0MUVGNSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3NDlFRjQ2NkM5QzJFMTExOTA0MzkwRkI0M0ZCODY4RCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3MjlFRjQ2NkM5QzJFMTExOTA0MzkwRkI0M0ZCODY4RCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuF4AWkAAAA2UExURU9t2DBStczM/1h16DNmzHiW7iNFrypMvrnD52yJ4ezs7Onp6ejo6P///+Tk5GSG7D9h5SRGq0Q2K74AAAA/SURBVHjaLMhZDsAgDANRY3ZISnP/y1ZWeV+jAeuRSky6cKL4ryDdSggP8UC7r6GvR1YHxjazPQDmVzI/AQYAnFQDdVSJ80EAAAAASUVORK5CYII=';

    /**
     * A collapse icon, using in the dump_var function to allow collapsing
     * an array or object
     *
     * @access  public
     * @since   1.0.000
     * @static
     * @var     string
     */
    public static $icon_expand = 'iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAMAAADXT/YiAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo3MTlFRjQ2NkM5QzJFMTExOTA0MzkwRkI0M0ZCODY4RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFQzZERTJDNEMyQzkxMUUxODRCQzgyRUNDMzZEQkZFQiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFQzZERTJDM0MyQzkxMUUxODRCQzgyRUNDMzZEQkZFQiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3MzlFRjQ2NkM5QzJFMTExOTA0MzkwRkI0M0ZCODY4RCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3MTlFRjQ2NkM5QzJFMTExOTA0MzkwRkI0M0ZCODY4RCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PkmDvWIAAABIUExURU9t2MzM/3iW7ubm59/f5urq85mZzOvr6////9ra38zMzObm5rfB8FZz5myJ4SNFrypMvjBStTNmzOvr+mSG7OXl8T9h5SRGq/OfqCEAAABKSURBVHjaFMlbEoAwCEPRULXF2jdW9r9T4czcyUdA4XWB0IgdNSybxU9amMzHzDlPKKu7Fd1e6+wY195jW0ARYZECxPq5Gn8BBgCr0gQmxpjKAwAAAABJRU5ErkJggg==';


    /**
     * Display a variable's contents using nice HTML formatting and will
     * properly display the value of booleans as true or false
     *
     * @param   mixed $var  The variable to dump
     * @return  string
     *
     * @see     dump_plain()
     *
     * @access  public
     * @since   1.0.000
     * @static
     */
    public static function dump($var, $return = false)
    {
        $html = '<pre style="margin-bottom: 18px;' .
            'background: #f7f7f9;' .
            'border: 1px solid #e1e1e8;' .
            'padding: 8px;' .
            'border-radius: 4px;' .
            '-moz-border-radius: 4px;' .
            '-webkit-border radius: 4px;' .
            'display: block;' .
            'font-size: 12.05px;' .
            'white-space: pre-wrap;' .
            'word-wrap: break-word;' .
            'color: #333;' .
            'text-align: left;' .
            'font-family: Menlo,Monaco,Consolas,\'Courier New\',monospace;">';
        $html .= self::dump_plain($var, true);
        $html .= '</pre>';

        if (!$return) {
            echo $html;
        } else {
            return $html;
        }
    }

    /**
     * Display a variable's contents using nice HTML formatting (Without
     * the <pre> tag) and will properly display the values of variables
     * like booleans and resources. Supports collapsable arrays and objects
     * as well.
     *
     * @param   mixed $var  The variable to dump
     * @return  string
     *
     * @access  public
     * @since   1.0.000
     * @static
     */
    public static function dump_plain($var, $traversedeeper = false)
    {

        // Don't traverse into Closures or Silex / Symfony objects..
        if (is_object($var)) {
            list($root) = explode("\\", get_class($var));
            // echo "[ " .$root . " - " .get_class($var)." ]";
//                if (!$traversedeeper && ( (get_class($var) == "Bolt\\Application") || in_array($root, array('Closure', 'Silex', 'Symfony')) || substr($root, 0, 5) == "Twig_" )) {
//                $html = '<span style="color:#588bff;">object</span>(' . get_class($var) . ') ';
//                // echo "[return]\n";
//                return $html;
//            }
            // echo "[stay]\n";
        }

        $html = '';

        if (is_bool($var)) {
            $html .= '<span style="color:#588bff;">boo</span><span style="color:#999;">(</span><strong>' . (($var) ? 'true' : 'false') . '</strong><span style="color:#999;">)</span>';
        } else if (is_int($var)) {
            $html .= '<span style="color:#588bff;">int</span><span style="color:#999;">(</span><strong>' . $var . '</strong><span style="color:#999;">)</span>';
        } else if (is_float($var)) {
            $html .= '<span style="color:#588bff;">flo</span><span style="color:#999;">(</span><strong>' . $var . '</strong><span style="color:#999;">)</span>';
        } else if (is_string($var)) {
            $html .= '<span style="color:#588bff;">str</span><span style="color:#999;">(</span>' . strlen($var) . '<span style="color:#999;">)</span> <strong>"' . self::htmlentities($var) . '"</strong>';
        } else if (is_null($var)) {
            $html .= '<strong>NULL</strong>';
        } else if (is_resource($var)) {
            $html .= '<span style="color:#588bff;">res</span>("' . get_resource_type($var) . '") <strong>"' . $var . '"</strong>';
        } else if (is_array($var)) {
            $uuid = 'include-php-' . uniqid();

            $html .= '<span style="color:#588bff;">arr</span>(' . count($var) . ')';

            if (!empty($var)) {
                $html .= ' <img id="' . $uuid . '" data-expand="data:image/png;base64,' . self::$icon_expand . '" style="position:relative;left:-5px;top:-1px;cursor:pointer;width:9px!important;height:9px!important;" src="data:image/png;base64,' . self::$icon_collapse . '" /><br /><span id="' . $uuid . '-collapsable">[<br />';

                $indent = 4;
                $longest_key = 0;

                foreach($var as $key => $value) {
                    if (is_string($key)) {
                        $longest_key = max($longest_key, strlen($key) + 2);
                    } else {
                        $longest_key = max($longest_key, strlen($key));
                    }
                }

                foreach($var as $key => $value) {
                    if (is_numeric($key)) {
                        $html .= str_repeat(' ', $indent) . str_pad($key, $longest_key, ' ');
                    } else {
                        $html .= str_repeat(' ', $indent) . str_pad('"' . self::htmlentities($key) . '"', $longest_key, ' ');
                    }

                    $html .= ' => ';

                    $value = explode('<br />', self::dump_plain($value));

                    foreach($value as $line => $val) {
                        if ($line != 0) {
                            $value[$line] = str_repeat(' ', $indent * 2) . $val;
                        }
                    }

                    $html .= implode('<br />', $value) . '<br />';
                }

                $html .= ']</span>';

                $html .= preg_replace('/ +/', ' ', '<script type="text/javascript">(function() {
                    var img = document.getElementById("' . $uuid . '");
                    img.onclick = function() {
                        if ( document.getElementById("' . $uuid . '-collapsable").style.display == "none" ) {
                            document.getElementById("' . $uuid . '-collapsable").style.display = "inline";
                            img.src = img.getAttribute("data-collapse");
                            var previousSibling = document.getElementById("' . $uuid . '-collapsable").previousSibling;

                            while ( previousSibling != null && ( previousSibling.nodeType != 1 || previousSibling.tagName.toLowerCase() != "br" ) ) {
                                previousSibling = previousSibling.previousSibling;
                            }

                            if ( previousSibling != null && previousSibling.tagName.toLowerCase() == "br" ) {
                                previousSibling.style.display = "inline";
                            }
                        } else {
                            document.getElementById("' . $uuid . '-collapsable").style.display = "none";
                            img.setAttribute( "data-collapse", img.getAttribute("src") );
                            img.src = img.getAttribute("data-expand");
                            var previousSibling = document.getElementById("' . $uuid . '-collapsable").previousSibling;

                            while ( previousSibling != null && ( previousSibling.nodeType != 1 || previousSibling.tagName.toLowerCase() != "br" ) ) {
                                previousSibling = previousSibling.previousSibling;
                            }

                            if ( previousSibling != null && previousSibling.tagName.toLowerCase() == "br" ) {
                                previousSibling.style.display = "none";
                            }
                        }
                    };
                    })();
                    </script>');
            }

        } else if (is_object($var)) {
            $uuid = 'include-php-' . uniqid();

            $html .= '<span style="color:#588bff;">object</span>(' . get_class($var) . ') <img id="' . $uuid . '" data-expand="data:image/png;base64,' . self::$icon_expand . '" style="position:relative;left:-5px;top:-1px;cursor:pointer;width:9px!important;height:9px!important;" src="data:image/png;base64,' . self::$icon_collapse . '" /><br /><span id="' . $uuid . '-collapsable">[<br />';

            $original = $var;
            $var = (array)$var;

            $indent = 4;
            $longest_key = 0;

            foreach($var as $key => $value) {
                if (substr($key, 0, 2) == "\0*") {
                    unset($var[$key]);
                    $key = 'protected:' . substr($key, 2);
                    $var[$key] = $value;
                } else if (substr($key, 0, 1) == "\0") {
                    unset($var[$key]);
                    $key = 'private:' . substr($key, 1, strpos(substr($key, 1), "\0")) . ':' . substr($key, strpos(substr($key, 1), "\0") + 1);
                    $var[$key] = $value;
                }

                if (is_string($key)) {
                    $longest_key = max($longest_key, strlen($key) + 2);
                } else {
                    $longest_key = max($longest_key, strlen($key));
                }
            }

            foreach($var as $key => $value) {
                if (is_numeric($key)) {
                    $html .= str_repeat(' ', $indent) . str_pad($key, $longest_key, ' ');
                } else {
                    $html .= str_repeat(' ', $indent) . str_pad('"' . self::htmlentities($key) . '"', $longest_key, ' ');
                }

                $html .= ' => ';

                $value = explode('<br />', self::dump_plain($value));

                foreach($value as $line => $val) {
                    if ($line != 0) {
                        $value[$line] = str_repeat(' ', $indent * 2) . $val;
                    }
                }

                $html .= implode('<br />', $value) . '<br />';
            }

            $html .= ']</span>';

            $html .= preg_replace('/ +/', ' ', '<script type="text/javascript">(function() {
                var img = document.getElementById("' . $uuid . '");
                img.onclick = function() {
                    if ( document.getElementById("' . $uuid . '-collapsable").style.display == "none" ) {
                        document.getElementById("' . $uuid . '-collapsable").style.display = "inline";
                        img.src = img.getAttribute("data-collapse");
                        var previousSibling = document.getElementById("' . $uuid . '-collapsable").previousSibling;

                        while ( previousSibling != null && ( previousSibling.nodeType != 1 || previousSibling.tagName.toLowerCase() != "br" ) ) {
                            previousSibling = previousSibling.previousSibling;
                        }

                        if ( previousSibling != null && previousSibling.tagName.toLowerCase() == "br" ) {
                            previousSibling.style.display = "inline";
                        }
                    } else {
                        document.getElementById("' . $uuid . '-collapsable").style.display = "none";
                        img.setAttribute( "data-collapse", img.getAttribute("src") );
                        img.src = img.getAttribute("data-expand");
                        var previousSibling = document.getElementById("' . $uuid . '-collapsable").previousSibling;

                        while ( previousSibling != null && ( previousSibling.nodeType != 1 || previousSibling.tagName.toLowerCase() != "br" ) ) {
                            previousSibling = previousSibling.previousSibling;
                        }

                        if ( previousSibling != null && previousSibling.tagName.toLowerCase() == "br" ) {
                            previousSibling.style.display = "none";
                        }
                    }
                };
                })();
                </script>');
        }

        return $html;
    }

    /**
     * Convert entities, while preserving already-encoded entities
     *
     * @param   string $string  The text to be converted
     * @return  string
     *
     * @link    http://ca2.php.net/manual/en/function.htmlentities.php#90111
     *
     * @access  public
     * @since   1.0.000
     * @static
     */
    public static function htmlentities($string, $preserve_encoded_entities = false)
    {
        if ($preserve_encoded_entities) {
            $translation_table = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES);
            $translation_table[chr(38)] = '&';
            return preg_replace('/&(?![A-Za-z]{0,4}\w{2,3};|#[0-9]{2,3};)/', '&amp;', strtr($string, $translation_table));
        } else {
            return htmlentities($string, ENT_QUOTES);
        }
    }
}
