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

