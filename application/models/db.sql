/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  04/03/2022 13:30:00                      */
/*==============================================================*/



drop table if exists Categories;

drop table if exists Contacts;

drop table if exists Images;

drop table if exists Posts;

drop table if exists PostAnswers;

drop table if exists Users;


/*==============================================================*/
/* Table : Categories                                           */
/*==============================================================*/
create table Categories
(
   categoryId           int not null auto_increment,
   categorieTitle       varchar(254) not null,
   categorieCreatedAt   datetime,
   primary key (categoryId)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

/*==============================================================*/
/* Table : Contacts                                             */
/*==============================================================*/
create table Contacts
(
   contactId            int not null auto_increment,
   contactName          varchar(254) not null,
   contactEmail         varchar(254) not null,
   contactSujet         varchar(254) not null,
   contactContent       varchar(254) not null,
   contactCreatedAt     datetime,
   primary key (contactId)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


/*==============================================================*/
/* Table : Images                                               */
/*==============================================================*/
create table Images
(
   imageId              int not null auto_increment,
   postId               int not null,
   imageName            varchar(254),
   imageCreatedAt       datetime,
   primary key (imageId)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


/*==============================================================*/
/* Table : Posts                                                */
/*==============================================================*/
create table Posts
(
   postId               int not null auto_increment,
   userId               int not null,
   categoryId           int not null,
   postTitle            varchar(254),
   postDescription      varchar(254),
   postCreatedAt        datetime,
   postPublished        int,
   postPublishedAt      datetime,
   postPublishedBy      varchar(254),
   primary key (postId)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

/*==============================================================*/
/* Table : PostAnswers                                        */
/*==============================================================*/
create table PostAnswers
(
   answerPostId         int not null auto_increment,
   postId               int not null,
   userId               int not null,
   answerSubContent     varchar(254),
   answerStatus         int,
   answerSubpublishedAt datetime,
   primary key (answerPostId)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


/*==============================================================*/
/* Table : Users                                                */
/*==============================================================*/
create table Users
(
   userId               int not null auto_increment,
   userName             varchar(254) not null,
   userPseudo           varchar(254) not null,
   userEmail            varchar(254) not null,
   userPassword         varchar(254) not null,
   userPhone            int,
   userGender           varchar(254) not null,
   userBirthday         datetime,
   userSignUpAt         datetime,
   userStatus           int not null,
   isAdmin              int,
   isUser               int,
   userAvatar           varchar(254),
   userBiographie       varchar(254),
   primary key (userId)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;



alter table Images add constraint FK_association1 foreign key (postId)
      references Posts (postId) on delete cascade on update cascade;

alter table Posts add constraint FK_association2 foreign key (userId)
      references Users (userId) on delete cascade on update cascade;

alter table Posts add constraint FK_association3 foreign key (categoryId)
      references Categories (categoryId) on delete cascade on update cascade;

alter table PostAnswers add constraint FK_association4 foreign key (postId)
      references Posts (postId) on delete cascade on update cascade;

alter table PostAnswers add constraint FK_association5 foreign key (userId)
      references Users (userId) on delete cascade on update cascade;
