drop database if exists loja;
create database loja;
use loja;

CREATE TABLE produto (
  idproduto int(11) NOT NULL AUTO_INCREMENT,
  descricao varchar(45) DEFAULT NULL,
  produto VARCHAR(150)NOT NULL,
  imagem varchar(80) DEFAULT NULL,
  preco float(6,2),
  estrelas int not null,
  marca varchar(25),
  PRIMARY KEY (`idproduto`)
)DEFAULT CHARSET=utf8;

CREATE TABLE  usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(60) NOT NULL,
	nome VARCHAR(45) NOT NULL,
	sobrenome varchar(45),
	senha VARCHAR (45) NOT NULL, 
	idProdutoPreferido INT,
	tipo varchar(5)
) DEFAULT CHARSET=utf8;

CREATE TABLE usuario_produto(
	id INT PRIMARY KEY AUTO_INCREMENT,
	idUsuario INT,
	idProduto INT
) DEFAULT CHARSET=utf8;


ALTER TABLE usuario ADD FOREIGN KEY (idProdutoPreferido)
REFERENCES produto(idproduto);
ALTER TABLE usuario_produto ADD FOREIGN KEY (idProduto)
REFERENCES produto(idproduto);
ALTER TABLE usuario_produto ADD FOREIGN KEY (idUsuario)
REFERENCES usuario(id);

INSERT INTO `produto` VALUES 
  (1,'Teclado Razer mecanico','Teclado da marca Razer com alto desempenho para jogos e tecnologia led nas teclas.','Imagens/produto1.jpg',600.99,3,'razer'),
  (2,'Pendrive Kingston 1TB','Ultimo pendrive do momento com a maior capacidade de armazenamento do mercado, possui entrada 3.0.','Imagens/produto2.jpg',505.99,5,'kingston'),
  (3,'Nvidia GeForce GTX 1080','Placa de video da nvidia com 3gb de memoria dedicada, tenha a melhor renderizaçãoo de imagens.','Imagens/produto3.png',1176.09,4,'nvidia'),
  (4,'intel core i9','Ultimo lançamento da intel com grande capacidade de processamento 4.0Ghz .','Imagens/produto4.jpg',1150.98,2,'intel'),
  (5,'Mouse Razer mamba','Mouse da Razer com leds RGB e alta sensibilidade e baixa taxa de resposta.','Imagens/produto5.jpg',435.98,5,'razer'),
  (6,'Headset HyperX 7.1','Headset da Hyperx com capacidade de 7 pontos de audio podendo ouvir dos 7 cantos.','Imagens/produto6.jpg',278.96,3,'hyperx'),
  (7,'Estabilizador Zord','Maior estabilizador com grande capacidade de tomadas.','Imagens/produto7.jpg',235.08,2,'zord'),
  (8,'Gabinete PCyes! Tiger','Gabinete com grande capacidade com as cores branca e leds azuis.','Imagens/produto8.jpg',285.97,5,'pcyes'),
  (9,'Gabinete RaidMax Cobra','Grande Design com design agressivo e leds verdes.','Imagens/produto9.jpg',321.65,4,'raidmax'),
  (10,'Fone de Ouvido Razer Hammerhead','Com ele pode-se ouvir em 5 pontos diferentes.','Imagens/produtoo10.jpg',278.96,3,'razer'),
  (11,'Notebook Alienware','Melhor Notebook do mercado com intel core i9 gtx 1080 e 16GB de RAM, com tecnologia inovadora.','Imagens/produto11.jpeg',3052.99,5,'alienware'),
  (12,'AMD fx-6300','Processador AMD para custo-beneficio com rapido desempenho e performance nos games, tenha o poder.','Imagens/produto12.jpg',480.99,5,'amd'),
  (13,'Mousepad Razer','Mousepad Razer com leds internos editaveis para musicas.','Imagens/produto13.jpg',145.99,4,'razer'),
  (14,'Headset Corsair 7.1','Headset com 7 pontos de audio e confiança da marca.','Imagens/produto14.jpg',267.96,5,'corsair'),
  (15,'ASUS ROG Strix','Monitor gaming curvo de 27 polegadas 1800R com refresh rate ultra-rápido.','Imagens/produto15.jpg',3500.00,5,'asus');

insert into usuario(email,nome,sobrenome,senha,tipo) values ('root@gmail.com','Paulo','Henrique','123456','root');

