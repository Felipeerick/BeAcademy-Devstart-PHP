<?php

function Aluno():void
{
  include 'Aluno.php';
};

function Curso():void
{
     include "Curso.php";
};

function Disciplina():void
{
    include "Disciplina.php";
};

function Professor():void
{
    include "Professor.php";
};

Aluno();

Professor();

Disciplina();

Curso();