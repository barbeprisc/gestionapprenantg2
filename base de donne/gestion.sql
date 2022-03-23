drop table if exists Apprenant;

drop table if exists Tuteur;

/*==============================================================*/
/* Table : Apprenant                                            */
/*==============================================================*/
create table Apprenant
(
   codeApprenant        int not null,
   codeTuteur           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   profession           varchar(254),
   telephone            int,
   adresse              varchar(254),
   sexe                 varchar(254),
   email                varchar(254),
   detail               varchar(254),
   primary key (codeApprenant)
);

/*==============================================================*/
/* Table : Tuteur                                               */
/*==============================================================*/
create table Tuteur
(
   codeTuteur           int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   profession           varchar(254),
   telephone            int,
   adresse              varchar(254),
   sexe                 varchar(254),
   email                varchar(254),
   primary key (codeTuteur),
   key AK_Identifiant_1 (codeTuteur)
);

alter table Apprenant add constraint FK_association1 foreign key (codeTuteur)
      references Tuteur (codeTuteur) on delete restrict on update restrict;
