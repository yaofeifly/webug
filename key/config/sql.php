<?php 

//Ҫ���˵ķǷ��ַ� 
$filter =     "/and|order|select|insert|update|delete|\��|\`|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i";
$postfilter = "/and|order|select|insert|update|delete|\��|\`|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/";

function InjectCheck($StrFiltrate,$filter){ 

 if (preg_match($filter,$StrFiltrate)){ 

	echo "����Ƿ����ַ���\n";

	exit();
} 

} 
//��֤��ʼ   �������������post�Ӵ�Сд�ƹ�

foreach($_GET as $key=>$value){ 

	InjectCheck($value,$filter);
} 

foreach($_POST as $key=>$value){ 

	InjectCheck($value,$postfilter);
} 

foreach($_COOKIE as $key=>$value){ 

	InjectCheck($value,$filter);
} 
foreach($_GET as $key=>$value){ 

	InjectCheck(base64_decode($value),$filter);
} 

foreach($_POST as $key=>$value){ 

	InjectCheck(base64_decode($value),$postfilter);
} 
/*  
Ϊ�˼�С�Ѷ�  cookie������
foreach($_COOKIE as $key=>$value){ 

	InjectCheck(base64_decode(base64_decode($value)),$postfilter);
}

*/
?>