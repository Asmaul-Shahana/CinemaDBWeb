create database cinema;

use cinema;

create table movie (
   mid int(10) unsigned not null auto_increment,
   mtitle varchar(255) not null default '',
   myear year(4) not null default '0000',
   primary key (mid)
   ) ENGINE = InnoDB;

create table person (
   pid int(10) unsigned not null auto_increment,
   pname varchar(255) not null default '',
   psex enum('M','F') not null default 'M',
   pdob date not null,
   primary key (pid)
   ) ENGINE = InnoDB;

create table role (
   mid int(10) not null default '0' references movies(mid),
   pid int(10) not null default '0' references persons(pid),
   part enum('A','D') not null default 'A',
   primary key (mid,pid)
   ) ENGINE = InnoDB;

