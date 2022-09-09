<?php

function vd($arr){
    echo '<pre>';
    var_dump($arr);  
}


$lista = array('1','2','3','4','5');
$lista[] = 6;
$lista['vilao'] = 'Coriga';
$lista[] = 7;


vd($lista);
echo $lista['vilao'];

//$curso = array();
$curso = array();
$curso['InfoInter'] = array('DES'=>'Jeferson','OSA','RC','DDW','CEI');
$curso['medio'] = array('Matematica'=>'Tony Stark','Fisica','Quimica','Biologia','Portugues');
$curso['logistica'] = [];
$curso['administracao']=[];
vd($curso);

foreach($curso['medio']as $valor){
    echo $valor.'<br>';
}
echo '<hr>';
foreach($curso['InfoInter'] as $valor){
    echo $valor.'<br>';
}

$curso['medio'][0] = 'Artes';
unset($curso['medio']['matematica']);
($curso)['medio'][11]= 'informatica';
($curso)['medio'][]= 'finanças';
vd($curso);


