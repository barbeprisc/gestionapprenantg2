drop table if exists apprenant;

drop table if exists tuteur;

/*==============================================================*/
/* Table: Apprenant                                             */
/*==============================================================*/
create table apprenant
(
   codeApp              int not null,
   codeTuteur           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   telephone            int,
   sexe                 varchar(254),
   primary key (codeApp)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table tuteur
(
   codeTuteur           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   telephone            int,
   sexe                 varchar(254),
   profession           varchar(254),
   primary key (codeTuteur)
);

alter table Apprenant add constraint FK_association1 foreign key (codeTuteur)
      references Tuteur (codeTuteur) on delete restrict on update restrict;
