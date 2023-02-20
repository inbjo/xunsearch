<?php
//�Զ���ִ� ʹ�ö��ŷָ��ַ������ȡ�����Ӵ�
class XSTokenizerIpsubstring implements XSTokenizer
{
    public function getTokens($value, XSDocument $doc = null)
    {
        $ret = array();
        $valueArr = explode(",",$value);
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
