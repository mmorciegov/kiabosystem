<?php
//Conexão com o banco:  
mysql_connect("localhost","root","");  
mysql_select_db("teste");

// Informações da query. No caso, "SELECT * FROM produtos WHERE EXIBIR=1 ORDER BY RAND()"  
$campos_query = "*";  
$final_query  = "FROM produtos WHERE EXIBIR=1";

// Declaração da pagina inicial  
$pagina = $_GET["pagina"];  
if($pagina == "") {  
    $pagina = "1";  
}  

// Maximo de registros por pagina  
$maximo = 5;  

// Calculando o registro inicial  
$inicio = $pagina - 1;  
$inicio = $maximo * $inicio;  

// Conta os resultados no total da minha query  
$strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";  
$query    = mysql_query($strCount);  
$row      = mysql_fetch_array($query);  
$total    = $row["num_registros"];  

if($total <= 0) {  
    echo "<center>Nenhum registro encontrado.</center>";  
} else {  
    if(!isset($_GET["seed"])) {  
        $seed = rand();   // Caso ainda não exista uma semente, cria a semente via PHP.  
    } else {  
        $seed = addslashes($_GET["seed"]);  // Caso já exista uma semente, utiliza a que foi passada na url. (o addslashes é por questão de segurança)  
    }  
    $strQuery   = "SELECT $campos_query $final_query ORDER BY RAND($seed) LIMIT $inicio,$maximo";    
    $query      = mysql_query($strQuery);  

while($row = mysql_fetch_array($query)) {  
        echo "Produto: ".$row["PRODUTO"]."<BR>";  
    }

// Calculando pagina anterior  
    $menos = $pagina - 1;  

// Calculando pagina posterior  
    $mais = $pagina + 1;

$pgs = ceil($total / $maximo);  
    if($pgs > 1 ) {  
        // Mostragem de pagina  
        if($menos>0) {  
           echo "<a href=\"?pagina=$menos&seed=$seed\" class='texto_paginacao'>anterior</a> ";  
        }  
        // Listando as paginas  
        for($i=1;$i <= $pgs;$i++) {  
            if($i != $pagina) {  
                echo "  <a href=\"?pagina=".($i)."&seed=$seed\" class='texto_paginacao'>$i</a>";  
            } else {  
                echo "  <strong class='texto_paginacao_pgatual'>".$i."</strong>";  
            }  
        }  
        if($mais <= $pgs) {  
           echo "   <a href=\"?pagina=$mais&seed=$seed\" class='texto_paginacao'>próxima</a>";  
        }  
    }  
}  
?>
