/* 1 A */
create database industria;
use industria;

create table producao (
id_producao int not null AUTO_INCREMENT,
quant_peca char (3)int not null,
tipo_de_peca char (20)not null,
maquina_usada_nome char (20)not null,
lucro char (10) int not null,
primary key (id_producao)
);

create table peca (
id_peca int not null AUTO_INCREMENT,
nome_peca char(20)not null,
preco_peca char (7)not null,
serie_peca char (20)not null,
complemento_peca char (50) null,
primary key (id_peca)
);

create table setor (
id_setor int not null AUTO_INCREMENT,
nome_setor char(20)not null,
area_setor char (20)not null,
quant_func_setor char(3)int not null,
primary key (id_setor)
);

create table funcionario (
id_funcionario int not null AUTO_INCREMENT,
nome_funcionario char (30)not null,
endereco_funcionario char (30) not null,
cidade_funcionario char (30) not null,
cep_funcionario char (12)not null,
estado_funcionario char (2)not null,
cpf_funcionario char (12) int not null,
primary key (id_funcionario)
);

create table suplente (
id_suplente int not null AUTO_INCREMENT,
nome_suplente char (30)not null,
endereco_suplente char (30) not null,
cidade_suplente char (30) not null,
cep_suplente char (12)not null,
estado_suplente char (2)not null,
cpf_suplente char (12) int not null,
primary key (id_suplente)
);

alter table setor add foreign key (id_peca) references peca (id_peca);
alter table setor add foreign key (id_funcionario) references funcionario (id_funcionario);
alter table setor add foreign key (id_suplente) references suplente (id_suplente);
alter table funcionario add foreign key (id_setor) references setor (id_setor);
/*------------------------------------------------------------------------------------------------------------------- */
/* 1 B */
create database futebol;
use futebol;

create table times (
id_times int not null AUTO_INCREMENT,
nome_time char (20) not null,
titulos char (50)not null,
idade_time char (4)not null,
primary key (id_times)
);

create table jogadores (
id_jogadores int not null AUTO_INCREMENT,
num_jogador char (3)not null,
posicao_jogador char (20)not null,
nome_jogador char (30)not null,
primary key (id_jogadores)
);

create table reservas (
id_reservas int not null AUTO_INCREMENT,
num_reserva char (3)not null,
posicao_reserva char (20)not null,
nome_reserva char (30)not null,
primary key (id_reservas)
);

create table treinador (
id_treinador int not null AUTO_INCREMENT,
nome_treinador char (40) not null,
idade_treinador char (3)not null,
tempo_na_profissao char (3) null,
primary key (id_times)
);

create table partidas (
id_partidas int no null AUTO_INCREMENT,
duracao char(7) not null,
nome_red_card char (50) null,
result_partidas char (50)not null, /* nome do time ganhador */
placar_partidas char (50)not null,
primary key (id_partidas)
);

create table juiz (
id_juiz int no null AUTO_INCREMENT,
nome_juiz char(45) not null,
idade_juiz char (50) null,
assistente_juiz char (50)not null, 
primary key (id_partidas)
);
nome_juiz char (45)not null,

alter table jogadores add foreign key (id_treinador) references treinador (id_treinador);
alter table jogadores add foreign key (id_times) references times (id_times);
alter table partidas add foreign key (id_juiz) references juiz (id_juiz);
alter table partidas add foreign key (id_jogadores) references jogadores (id_jogadores);
alter table partidas add foreign key (id_reservas) references reservas (id_reservas);

/* --------------------------------------------------------------------------------------------------------------------------------------------------- 

2)De acordo com os exercícios acima, desenvolva no papel os comando utilizados em MySQL desde a criação do
 banco de dados passando pela criação das tabelas e seus respectivos atributos.  

comando e |exemplo""| 

create database "futebol";
use "futebol";

create table "times" (
"id_times" int not null AUTO_INCREMENT,
"nome_time" char (20) not null,
primary key "(id_times)"
);
	.
	.	          'outras tabelas '
	.	
alter table "jogadores" add foreign key "(id_treinador)" references "treinador" "(id_treinador)";


4)De acordo com o MySQL qual a sintaxe correta para adicionar um campo qualquer em uma tabela que já está pronta:
R:alter table "tabela a ser alterada" add foreign key "(id da chave estrangeira)" references "local de onde tirou o id" "(id da chave estrangeira novamente)";

5)Muitos dos erros na construção de modelo de dados ocorrem por serem realizados apressados sobre a cardinalidade. Isso se deve por quê?  
R:Justamente pela falta de tempo, um banco de dados deve ser planejado e realizado cuidadosamente por um profissional competente, cardinalidade leva tempo e requer lógica em conta .

6)Defina Modelagem de Dados :
R:A Modelagem de Dados é a criação de um modelo físico que explique a lógica por traz do sistema, 
com ele você é capaz de explicar as características de funcionamento e comportamento de um software.   

7,8,9 :

Modelo lógico :

Assunto(
id_assunto,
nome_assunto,
tipo_assunto,
primary key (id_assunto)
);

livro(
id_livro,
nome_livro,
pags,
primary key (id_livro)
);

autor(
id_autor,
nome_autor, 
primary key (id_autor)
);

emprestimo(
id_emprestimo,
nome_emprestimo,
dataret,
dataprev,
datadev,
multa, 
primary key (id_emprestimo)
);

aluno(
id_aluno,
nome_assunto, 
email_aluno,
telefone_aluno,
primary key (id_aluno)
);
add foreign key id_emprestimo


Modelo conceitual:

Assunto: id_assunto, nome_assunto; 

Livros: id_livro, titulo_livro, autor_livro, datalan, copias; 

Autor: id_autor, nome_autor, idade; 

Emprestimos: id_emprestimo, dataret, dataprev, datadev, multa; 

Alunos: id_aluno, nome_aluno, email, telefone. 

--------------------------------------------------------------------------------------------------------------------------------------------------- */


/* --------------------------------------------------------------------------------------------------------------------------------------------------- */
/*escola   (3) */
create database escola;
	use escola;

	create table aluno
		(
		id_Aluno int not null AUTO_INCREMENT,
		nome_Aluno char(20) not null,
		telefone_Celular_Aluno char(9) not null,
		cidade_Aluno char(10) not null,
		estado_Aluno char(10) not null,
		CEP_Aluno char(9) not null,
		CPF_Aluno char(12) not null,
		primary key (id_Aluno)
		);

	create table professor
		(
		id_Professor int not null AUTO_INCREMENT,
		nome_Professor char(20) not null,
		telefone_Celular_Professor char(9) not null,
		cidade_Professor char(10) not null,
		estado_Professor char(10) not null,
		CEP_Professor char(9) not null,
		CPF_Professor char(12) not null,
		primary key (id_Professor)
		);

	create table grade_De_Aulas
		(
		id_Horario_De_Aulas int not null AUTO_INCREMENT,
		horario_De_Aulas time not null,
		Dia_Da_Aula date not null,
		quantidade_De_Aula int not null,
		primary key (id_Horario_De_Aulas)
		);

	create table coordenacao
		(
		id_Coordenacao int not null AUTO_INCREMENT,
		nome_Coordenacao char(20) not null,
		telefone_Celular_Coordenacao char(9) not null,
		cidade_Coordenacao char(10) not null,
		estado_Coordenacao char(10) not null,
		CEP_Coordenacao char(9) not null,
		CPF_Coordenacao char(12) not null,
		primary key (id_Coordenacao)
		);

	create table aula
		(
		id_Aula int not null,
		Tipo_De_Aula char(10) not null,
		id_Professor int not null AUTO_INCREMENT,
		nome_Professor char(20) not null,
		primary key(id_Aula)
		);

	create table curso
		(
		id_Curso int not null AUTO_INCREMENT,
		nome_Curso char(10) not null,
		carga_Horaria time not null,
		id_Aula int not null,
		Tipo_De_Aula char(10) not null,
		primary key(id_Curso) 
		);

	alter table aula add foreign key (id_Professor) references professor (id_Professor);

	alter table curso add foreign key (id_Aula) references aula (id_Aula);
/* --------------------------------------------------------------------------------------------------------------------- */
/* biblioteca */

create database biblioteca;
	use biblioteca;

	create table assunto
		(
			id_Assunto int not null AUTO_INCREMENT,
			nome_Assunto char(200) not null,
			primary key (id_Assunto);
		);

	create table livros
		(
			id_Livro int not null AUTO_INCREMENT,
			titulo_Livro char(50) not null,
			autor_Livro char(30) not null,
			dataLan date not null,
			copias int not null,
			primary key (id_Livro)
		);

	create table autor
		(
			id_Autor int not null AUTO_INCREMENT,
			nome_Autor char(30) not null,
			idade int not null,
			primary key(id_Autor)
		);

	create table emprestimos
		(
			id_Emprestimo int not null AUTO_INCREMENT,
			dataRet date not null,
			dataPrev date not null,
			dataDEv date not null,
			multa real not null,
			primary key (id_Emprestimo)
		);

	create table alunos
		(
			id_Aluno int not null AUTO_INCREMENT,
			nome_Aluno char(30) not null,
			email char(60) not null,
			telefone char(9) not null,
			primary key (id_Aluno)
		);
	alter table livro add id_Assunto int not null AUTO_INCREMENT;
	alter table livro add foreign key (id_Assunto) references assunto (id_Assunto);
	alter table livro add id_Autor int not null AUTO_INCREMENT;
	alter table livro add foreign key (id_Autor) references autor (id_Autor);
	alter table emprestimos add id_Aluno int not null AUTO_INCREMENT;
	alter table emprestimos add foreign key (id_Aluno) references alunos (id_Aluno);
	alter table autor add id_Livro int not null AUTO_INCREMENT;
	alter table autor add foreign key (id_Livro) references livro (id_Livro);
	alter table alunos add endereco char(30) not null;
	alter table autor add livros_Publicados int not null;

	insert into assunto values
		(
			"A história de um jovem, quando sua vida mudou completamente so se lembrar que seu pai foi comprar cigarros e nunca voltou, agora ele sai em busca de seu querido pai"
		);

	insert into assunto values
		(
			"Marcos era um menino atrapalhado e isso lhe levou a destruição de um mundo distante."
		);

	insert into assunto values
		(
			"Cansado de seus vizinhos o importunarem, nosso protagonista tenta captura-los para obter algum silencio"
		);

	insert into livro values
		(
			"Em busca de um pai",
			"SAM",
			2001-07-19,
			50000
		);

	insert into livro values
		(
			"Metalicos",
			"Jailson Mendes",
			1998-05-03,
			100000
		);
	insert into livro values
		(
			"Someone",
			"Stefan Karl",
			2005-10-24,
			1200000
		);
	insert into autor values
		(
			"SAM",
			27,
			5
		);

	insert into autor values
		(
			"Jailson Mendes",
			33,
			2
		);

	insert into autor values
		(
			"Samara",
			41,
			7
		);

	insert into emprestimo values
		(
			2002-05-18,
			2002-06-18,
			2002-05-27,
			00.00
		);

	insert into emprestimo values
		(
			2003-08-20,
			2003-09-20,
			2003-09-27,
			10.00
		);

	insert into emprestimo values
		(
			2009-03-30,
			2009-04-30,
			2009-05-30,
			40.00
		);

	insert into autor values
		(
			"Marcos",
			"marcos342@gmail.com",
			"988024767",
			"RUa Haiti 113"
		);

	insert into autor values
		(
			"Max",
			"maxo@ghotmail.com",
			"98039768",
			"Rua Raul Seixas 145"
		);

	insert into autor values
		(
			"Manuel",
			"muelzinDoFOrro@bol.com",
			"951347786",
			"AV. Cassiopeia 1443"
		);

	delete from aluno where nome_Aluno="José Maria";

	update autor set nome_Autor="Paulo Coelho" where id_Autor=3	
