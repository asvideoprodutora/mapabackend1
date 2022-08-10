<?php 
include './dados/produtos.php';
include './function/real.php';

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
  return 0;
}

foreach($produto as $value) {
  if($value["id"] == $id) {
  ?>    
    <div class="produto">
      <div class="Marmitex">
          <h1 class="h1s"><?=$value['nome']?></h1><br>
          <p id="valor"><?=BRL($value['valor'])?></p><br>   
          <p>Tipo: <?=$value['tipo']?></p><br>
          <p>Peso: <?=$value['peso']?></p><br>
          <p><?=$value['descricao']?></p>
      </div>  
      <div class="marmita-imagem">
          <img src="<?=$value['imagem']?>" style="height:400px; border-radius: 20%;"><br><br><br>            
      </div> 
    </div>
<?php
   }    
  }    
?>