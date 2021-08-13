<?php
//自定义分词 使用空格分隔字符串后获取所有子串
class XSTokenizerCutsubstring implements XSTokenizer
{
    public function getTokens($value, XSDocument $doc = null)
    {
        $ret = array();
        $valueArr = explode(" ",$value);
        foreach ($valueArr as $item){
            $len = strlen($item);
            for ($i = 0; $i < $len; $i++) {
                for ($j = $i; $j < $len; $j++) {
                    $ret[] = substr($item, $i, $j - $i + 1);
                }
            }
        }
        return $ret;
    }
}
?>
