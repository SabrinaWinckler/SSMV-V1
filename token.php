<?php 
echo "Token ";
echo md5(md5(time().rand(0,50).rand(0,50)));
echo "<br />";

echo "Horário ";
echo date('H:i:s');
echo "<br /> Acrecentar ";
echo date('H:i:s', 300);

echo "<br /> Final ";
// echo date('Y-m-d');

echo date('H:i:s', strtotime('+5 minute', strtotime(date('H:i:s'))));


echo "<br />";
if(date('H:i:s', strtotime('+5 minute', strtotime(date('H:i:s')))) >= date('H:i:s')){
    echo "Estou no prazo";
} else {
    echo "Não estou no prazo";
}

echo date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))));

if(date('Y-m-d') <= date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))))){
    echo "É valido";
} else {
    echo "Não é valido";
}

?>