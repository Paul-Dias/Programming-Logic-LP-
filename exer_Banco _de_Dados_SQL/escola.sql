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