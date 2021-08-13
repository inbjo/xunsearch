<?php
//自定义分词 获取所有子串
class XSTokenizerSubstring implements XSTokenizer
{
    public function getTokens($value, XSDocument $doc = null)
    {
        $ret = array();
        $len = strlen($value);
        for ($i = 0; $i < $len; $i++) {
            for ($j = $i; $j < $len; $j++) {
                $ret[] = substr($value, $i, $j - $i + 1);
            }
        }
        return $ret;
    }
}
?>
