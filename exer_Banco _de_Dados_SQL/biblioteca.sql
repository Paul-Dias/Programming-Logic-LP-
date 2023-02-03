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
			"Certo dia chega um mecanico em uma casa e o priprietário da mesma pede para que ele arrume um item, e após algum tempo ele pergunta: 'Era essa a peça que voce queria?'"
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
			"Aventuras com um suco de laranja",
			"Jailson Mendes",
			1998-05-03,
			100000
		);

	insert into livro values
		(
			"We are number one",
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
			"Stefan Karl",
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




