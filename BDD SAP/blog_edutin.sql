/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     8/7/2023 18:18:33                            */
/*==============================================================*/


drop index USERS_ARTICLES_FK;

drop index CATEGORIES_ARTICLES_FK;

drop index ARTICLES_PK;

drop table ARTICLES;

drop index CATEGORIES_PK;

drop table CATEGORIES;

drop index ARTICLES_COMMENTS_FK;

drop index USERS_COMMENTS_FK;

drop index COMMENTS_PK;

drop table COMMENTS;

drop index PROFILES_USERS_FK;

drop index PROFILES_PK;

drop table PROFILES;

drop index PROFILES_USERS2_FK;

drop index USERS_PK;

drop table USERS;

/*==============================================================*/
/* Table: ARTICLES                                              */
/*==============================================================*/
create table ARTICLES (
   ID_ARTICLES          INT4                 not null,
   TITLE                VARCHAR(255)         null,
   SLUG                 VARCHAR(255)         null,
   INTRODUCTION         VARCHAR(255)         null,
   IMAGE                VARCHAR(255)         null,
   BODY                 TEXT                 null,
   STATUS               BOOL                 null,
   CREATED_AT           DATE                 null,
   UPDATED_AT           DATE                 null,
   ID_USERS             INT4                 null,
   ID_CATEGORIES        INT4                 null,
   constraint PK_ARTICLES primary key (ID_ARTICLES)
);

/*==============================================================*/
/* Index: ARTICLES_PK                                           */
/*==============================================================*/
create unique index ARTICLES_PK on ARTICLES (
ID_ARTICLES
);

/*==============================================================*/
/* Index: CATEGORIES_ARTICLES_FK                                */
/*==============================================================*/
create  index CATEGORIES_ARTICLES_FK on ARTICLES (
ID_CATEGORIES
);

/*==============================================================*/
/* Index: USERS_ARTICLES_FK                                     */
/*==============================================================*/
create  index USERS_ARTICLES_FK on ARTICLES (
ID_USERS
);

/*==============================================================*/
/* Table: CATEGORIES                                            */
/*==============================================================*/
create table CATEGORIES (
   ID_CATEGORIES        INT4                 not null,
   NAME                 VARCHAR(40)          null,
   SLUG_CATEGORIES      VARCHAR(60)          null,
   IMAGE_CATEGORIES     VARCHAR(255)         null,
   IS_FEAUTURED         BOOL                 null,
   STATUS_CATEGORIES    BOOL                 null,
   CREATED_AT           DATE                 null,
   UPDATED_AT           DATE                 null,
   constraint PK_CATEGORIES primary key (ID_CATEGORIES)
);

/*==============================================================*/
/* Index: CATEGORIES_PK                                         */
/*==============================================================*/
create unique index CATEGORIES_PK on CATEGORIES (
ID_CATEGORIES
);

/*==============================================================*/
/* Table: COMMENTS                                              */
/*==============================================================*/
create table COMMENTS (
   ID_COMMENTS          INT4                 not null,
   VALUE                FLOAT8               null,
   DESCRIPTION          VARCHAR(255)         null,
   CREATED_AT           DATE                 null,
   UPDATED_AT           DATE                 null,
   ID_USERS             INT4                 null,
   ID_ARTICLES          INT4                 null,
   constraint PK_COMMENTS primary key (ID_COMMENTS)
);

/*==============================================================*/
/* Index: COMMENTS_PK                                           */
/*==============================================================*/
create unique index COMMENTS_PK on COMMENTS (
ID_COMMENTS
);

/*==============================================================*/
/* Index: USERS_COMMENTS_FK                                     */
/*==============================================================*/
create  index USERS_COMMENTS_FK on COMMENTS (
ID_USERS
);

/*==============================================================*/
/* Index: ARTICLES_COMMENTS_FK                                  */
/*==============================================================*/
create  index ARTICLES_COMMENTS_FK on COMMENTS (
ID_ARTICLES
);

/*==============================================================*/
/* Table: PROFILES                                              */
/*==============================================================*/
create table PROFILES (
   ID_PROFILES          INT4                 not null,
   PHOTO                VARCHAR(255)         null,
   ID_USERS             INT4                 null,
   constraint PK_PROFILES primary key (ID_PROFILES)
);

/*==============================================================*/
/* Index: PROFILES_PK                                           */
/*==============================================================*/
create unique index PROFILES_PK on PROFILES (
ID_PROFILES
);

/*==============================================================*/
/* Index: PROFILES_USERS_FK                                     */
/*==============================================================*/
create  index PROFILES_USERS_FK on PROFILES (
ID_USERS
);

/*==============================================================*/
/* Table: USERS                                                 */
/*==============================================================*/
create table USERS (
   ID_USERS             INT4                 not null,
   ID_PROFILES          INT4                 null,
   FULL_NAME            VARCHAR(120)         null,
   EMAIL                VARCHAR(255)         null,
   PASSWORD             VARCHAR(255)         null,
   CREATED_AT           DATE                 null,
   UPDATED_AT           DATE                 null,
   constraint PK_USERS primary key (ID_USERS)
);

/*==============================================================*/
/* Index: USERS_PK                                              */
/*==============================================================*/
create unique index USERS_PK on USERS (
ID_USERS
);

/*==============================================================*/
/* Index: PROFILES_USERS2_FK                                    */
/*==============================================================*/
create  index PROFILES_USERS2_FK on USERS (
ID_PROFILES
);

alter table ARTICLES
   add constraint FK_ARTICLES_CATEGORIE_CATEGORI foreign key (ID_CATEGORIES)
      references CATEGORIES (ID_CATEGORIES)
      on delete restrict on update restrict;

alter table ARTICLES
   add constraint FK_ARTICLES_USERS_ART_USERS foreign key (ID_USERS)
      references USERS (ID_USERS)
      on delete restrict on update restrict;

alter table COMMENTS
   add constraint FK_COMMENTS_ARTICLES__ARTICLES foreign key (ID_ARTICLES)
      references ARTICLES (ID_ARTICLES)
      on delete restrict on update restrict;

alter table COMMENTS
   add constraint FK_COMMENTS_USERS_COM_USERS foreign key (ID_USERS)
      references USERS (ID_USERS)
      on delete restrict on update restrict;

alter table PROFILES
   add constraint FK_PROFILES_PROFILES__USERS foreign key (ID_USERS)
      references USERS (ID_USERS)
      on delete restrict on update restrict;

alter table USERS
   add constraint FK_USERS_PROFILES__PROFILES foreign key (ID_PROFILES)
      references PROFILES (ID_PROFILES)
      on delete restrict on update restrict;

