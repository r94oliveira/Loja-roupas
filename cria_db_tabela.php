<?php
require 'db_credentials.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database created successfully<br>";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// Choose database
$sql = "USE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "<br>Database changed";
} else {
    echo "<br>Error creating database: " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE $table (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  produto VARCHAR(100) NOT NULL,
  categoria VARCHAR(100) NOT NULL,
  descricao VARCHAR(600) NOT NULL,  
  preco DECIMAL(6,2) NOT NULL,
  imagem VARCHAR(100) NOT NULL,
  promocao BOOLEAN DEFAULT false
)";


if (mysqli_query($conn, $sql)) {
    echo "<br>Database criado com sucesos";
} else {
    echo "<br>Erro criando database: " . mysqli_error($conn);
}

    $sql = "INSERT INTO 
         $table (produto,preco,categoria,imagem,promocao,descricao)
         VALUES 

         ('Blusa Jeans', '89.90','feminino','img/produto1.jpg','1','Blusa ampla confeccionada em liocel. O modelo, soltinho e confortável, apresenta decote ombro a ombro com laterais elásticas e mangas 3/4. Combine com calça jeans cintura alta para um look moderno e versátil.'),

         ('Pijama Short', '49.90','feminino','img/produto2.jpg','1','Pijama confeccionado em malha, ideal para os dias que pedem conforto. Possui uma camiseta com decote arredondado, mangas curtas e estampa de listras e na parte frontal da peça. Também acompanha um short de cós elástico e barra simples.'),

         ('Pijama Curto Preto', '69.90','masculino','img/produto3.jpg','1','O pijama possui duas peças confeccionadas em malha mescla macia e leve. A camiseta apresenta bolso frontal, decote redondo e manga curta. E o short básico possui elástico na cintura. Confortável, é ideal para boas noites de sono.'),

         ('Pijama Longo Básico', '59.90','masculino','img/produto4.jpg','1','O pijama é composto por uma camiseta e uma calça. A camiseta é confeccionada em malha leve e gola decote careca. A calça possui modelagem solta, cós elástico e barra simples. Básico e leve, é ideal para te acompanhar em noites de sono tranquilas. '), 




         ('Blusão Moletom Cropped', '99.90','feminino','img/produto5.jpg','0','O Blusão Moletom Cropped Riachuelo possui mangas longas e gola redonda. Aposte em looks com pegada street, combinando com tênis e calça jogger. '),

         ('Camisa manga longa', '99.90','masculino','img/produto6.jpg','0','Confeccionada em mescla de algodão, poliamida e elastano, a Camisa Manga Longa apresenta modelagem slim fit, gola e colarinho, mangas longas e abotoamento na parte frontal da peça. Ideal para compor looks clássicos e confortáveis.'),

         ('PARKA ZÍPER COM CAPUZ', '159.90','feminino','img/produto7.jpg','0','Item indispensável na hora de compor looks alternativos, a jaqueta em modelo parka complementa qualquer visual com uma pegada descolada. A Parka Zíper com Capuz Verde Pistache é confeccionada em nylon, o modelo possui modelagem alongada, gola alta com ajuste, fechamento frontal, mangas longas e bolsos embutidos, além de capuz removível por zíper. Ideal para compor um look despojado com muito estilo e conforto.'),

         ('Camiseta Zíper Lateral', '49.90','masculino','img/produto8.jpg','0','A Camiseta Zíper Lateral é confeccionada inteiramente em fibras naturais. Possui mangas curtas, gola arredondada e modelagem regular. Seu detalhe fica por conta do modelo alongado e zíper nas laterais. Combine com bermuda estampada para dar contraste à peça superior, resultando em um look casual e moderno.'), 




         ('Blusa ALÇAS RECORTES', '99.90','feminino','img/produto9.jpg','0','Aposte na sensualidade e elegância da Blusa Riachuelo! Confeccionada em couro sintético, a blusa apresenta recortes, acabamento pespontado e alças finas. Experimente combinar com saia lápis em couro sintético para um visual incrível!'),

         ('Calça Jeans Slim', '99.90','masculino','img/produto10.jpg','0','Adaptável para todos os estilos, a calça em modelo slim se tornou a mais democrática por ser o equilíbrio entre a ousadia da skinny e a tradicional mais reta. Confeccionada em jeans com lavagem estonada e bigodes na região das coxas, esta calça traz o toque despojado que seu look merece. Aposte!'),

         ('Calça jogger moletom', '119.90','feminino','img/produto11.jpg','0','Aposte no estilo da Calça Jogger Moletom Animal Print Marrom Riachuelo! Em modelagem jogger que valoriza a silhueta, a peça é a escolha perfeita para looks incríveis! Confeccionada em moletom, a calça apresenta estampa animal print e barra em punho elástico, super moderna e confortável! Experimente combinar com blusa cropped para um look ousado!'),

         ('camisa Casual Liocel', '119.90','masculino','img/produto12.jpg','0','Propondo uma coleção com peças funcionais e confortáveis, a coleção cápsula Worker Wear da Riachuelo traz o conceito de modelagens amplas, versáteis e em cores neutras. Esta camisa traz um toque de estilo e conceito com sua modelagem ampla e design diferenciado.'),






         ('Camisa Casual Listrada', '119.90','masculino','img/produto13.jpg','0','Camisa Jeans têm diversas variedades, são um verdadeiro coringa no guarda-roupa masculino! A Camisa Casual Listrada Azul Jeans Médio da Riachuelo é um peça coringa que falta no seu look.'),

         ('Camiseta Hello Kitt', '69.90','feminino','img/produto14.jpg','0','Expresse seu mood com a gatinha mais famosa do mundo! A Camiseta Manga Curta Hello Kitty Preto é a escolha certa para looks estilosos e descolados! Confeccionada em algodão, a camiseta apresenta estampa frontal exclusiva Hello Kitty e estampa tie dye. Experimente combinar com jeans de cintura alta para um look fashion!'),

         ('Camiseta Malha Estampa', '59.90','masculino','img/produto15.jpg','0','Confortável e despojada, a Camiseta Malha Estampa Brave Tie Dye da Riachuelo agrega ao look um toque de espontaneidade. Confeccionada em algodão com estampa em silk screen, a camiseta ainda possui um trabalho em Tie Dye. Perfeita para o dia-a-dia, com uma modelagem reta que proporciona uma infinidade de combinações.'),

         ('Vestido Curto Floral', '139.90','feminino','img/produto16.jpg','0','Com um toque romântico e delicado, o Vestido Curto Manga Bufante Floral é a escolha perfeita para ocasiões casuais e especiais! Confeccionado em poliéster, o vestido possui mangas 3/4 bufante e detalhe de lastex no busto, além da linda estampa exclusiva Riachuelo! Experimente combinar com botas de cano curto e bolsa tote para um visual incrível!') 


         ";

    if(!mysqli_query($conn,$sql)){
      die("Problemas para inserir novo produto no BD!<br>".
           mysqli_error($conn));
    }
  
mysqli_close($conn);

?>
