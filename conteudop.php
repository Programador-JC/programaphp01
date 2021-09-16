<html> 
    <body>
<?php
$tempo =date("d/m/y");
echo "Hello world<br/>";
echo "<h1>Olá mundo</h1>"."agora são".$tempo."<br/><br/>";
/*Agora o uso de arrays*/
$aluno1 = "João";
$aluno2 = "Mario";
$aluno3 = "Daniel";
$aluno4 = "Victor";

$alunos = array(
    1 => "João",
    2 => "Mario",
    3 => "Daniel",
    4 => $aluno4,);
    echo $alunos[1]."<br>";
    echo $alunos[2]."<br>";
/*uso do switch */
$fruta =1;
switch($fruta){
    case 1: $fruta = "Perâ";break;
    case 2 : $fruta = "Laranja"; break;
    case 3: $fruta = "Uva"; break;
    default : $fruta = "Inexistente";
}
echo "A fruta é ".$fruta."/";
/*testando um array simples , linguagem tipada */
$categorias = [];
$categorias[] = 'novo';
$categorias[] = 'medio';
$categorias[] = 'velho';
print_r($categorias);

var_dump(7 == 7);
var_dump(7 <> 7);
var_dump(3 > 2);
var_dump(7 <= 6);
/*uso do laço de repetição for*/
    /*$jogo = array(
     1 => "GTA 1",
     2 => "GTA 2"
     3 => "GTA 3",
     4 => "GTA 4",
     5 => "GTA 5",
    )
for(i=0; $i <= 5; $i++){
    echo $jogo[$i]."/n";
} */
/*uso do while e for*/
$x = 0;
while($x < 3) {
    echo " O valor é: $x /";
    $x++;
}
do {
    echo" O valor é:$x |0+";
    $x++;
} while($x < 3);

for($x = 0; $x < 3; $x++){
    echo "<br/>O valor é :$x";
}
/* revisão cap 7 */
$a =3;
$b = 2;
function tamanho($a ,$b) {
    return strlen($a)- strlen($b);
}

    $pessoas[0] = "Carlos";
    $pessoas[1] = "Juliana";
    $pessoas[2] = "Igor" ;
    $pessoas[3] = "Marcelo";
    usort($pessoas,"tamanho");
    for($i= 0; $i < count($pessoas); $i++);
    echo $pessoas[$i]."concluído com sucesso!";
?>
    </body>
</html>