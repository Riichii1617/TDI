-- Script para crear la base de datos
drop database if exists TeacherMatch;
create database TeacherMatch;

use TeacherMatch;
drop table if exists Alumnos;
create table Alumnos(
  idAlumno int not null auto_increment primary key,
    usuario varchar(60) not null,
    contrasena varchar(60) not null,
    email varchar(120) not null,
    nombre varchar(120) not null,
    apellidoP varchar(120) not null,
    apellidoM varchar(120) not null,
    carrera varchar(60) not null,
    porcentaje int not null
);

drop table if exists administrador;
create table administrador(
  idAdministrador int not null auto_increment primary key,
    usuario varchar(60) not null,
    contrasena varchar(60) not null
);

drop table if exists materia;
create table materia(
  idMateria int not null auto_increment primary key,
    nombre varchar(60) not null
);

drop table if exists profesor;
create table profesor(
  idProfesor int not null auto_increment primary key,
    nombre varchar(120) not null,
    apellidoP varchar(120) not null,
    apellidoM varchar(120) not null
);

drop table if exists curso;
create table curso(
    idCurso int not null auto_increment primary key,
    id_Profesor int not null,
    id_Materia int not null,
    id_Resena int not null,
  foreign key(id_Profesor) references profesor(idProfesor) on delete cascade on update cascade,
    foreign key(id_Materia) references materia(idMateria) on delete cascade on update cascade,
    foreign key(id_Resena) references resena(idResena) on delete cascade on update cascade    
);

drop table if exists resena;
create table resena(
  idResena int not null auto_increment primary key,
    claridad int not null,
    ayuda int not null,
    facilidad int not null,
    id_Alumno int not null
);