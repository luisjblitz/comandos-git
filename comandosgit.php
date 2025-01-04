<?php 
echo " git config --global user.name poner nombre
Establece el nombre que desea esté anexado a sus transacciones
de commit
git config --global user.email poner email
Establece el e-mail que desea esté anexado a sus transacciones de commit. \n";
echo " Usar Git Bash buscarlo en el menu de inicio. \n";
echo "ls para ver . \n" ;
echo " cd |para moverse . \n" ;
echo  "cd .. |para devolverse . \n" ;
echo "pwd | para ver en donde me encuentro . \n" ;
echo "mkdir nombre de la carpeta entre comillas | para crear una carpeta . \n" ;
echo "New-Item nombrefichero.php  -ItemType File| para crear un archivo vacío llamado . \n" ;

echo "git init | inicializa git control de versiones en repositorio . \n" ;
echo "git init |  rama master . \n" ;

echo "git status | estado . \n" ;
echo "git add y el nombre del fichero | preparar fotografía . \n" ;
echo "git commit -m entre comillas escribir un comentario| fotografía de un fichero . \n" ;
echo "git log | verificar fotografía . \n" ;

echo "git checkout nombre del fichero| Despues de modificar un fichero, Para volver, para situarnos en un punto en concreto de una fotografía o un fichero, es decir para movernos entre los commits. \n"; 
echo " también Mueve el puntero de HEAD a un commit previo. \n"; 
echo "git reset |para volver a la ultima fotografia, combinar con checkout nombre fichero. \n"; 

echo "git log --graph | para ver la rama . \n";
echo "git log --graph --pretty=oneline | para ver la rama . \n";
echo "git log --graph --decorate --all --oneline | para ver la rama resumida . \n";

echo "git config --global alias.tree  entre comillas log --graph --decorate --all --oneline|para hacer un alias . \n";

echo "New-Item .gitignore  -ItemType File| para agregar en él los ficheros que no se desea tener en cuenta. .gitignore se debe fotografiar . \n";

echo "git diff| para ver lo que se ha cambiado
desde la última fotografía sin necesidad de hacer una fotografía . \n";

echo "git checkout luego el id de la fotografía | para movernos,  usar git status para verificar verificar, luego el comando para movernos . \n";
echo "eso es para volver exactamente a como se dejó en la fotografía el proyecto . \n";
echo "git checkout HEAD | para situarnos apuntar, indicar la cabeza del proyecto nuevo. \n";


echo "git reset --hard y el id | para ir a ese id y desaparecer las fotografías que le siguen a ese id     . \n";
echo " git reflog  | Historial completo, si se arrepiente del hard reset
justo antes aparece el commit. \n ";
echo " Secuencia:
git reset --hard. \n
git reflog arrepiente de desaparecer . \n
git checkout con el id a recuperar (esta justo antes del reset hard) . \n
git checkout master, git tree, git reset hard con el id a recuperar, log, tree . \n";

echo "git tag clase_1 |etiquetar commits, usar para hacer referencias de puntos importantes, se le pone un nombre identificativo all punto . \n";

echo "  git add . | para añadir todos los ficheros pendientes \n ";

echo "  git tag | muestra los tags que hay . \n ";
echo "  git checkout tags/clase_1 | pone HEAD en el tag. \n ";
echo "git checkout master | para volver al final . \n ";


echo " RAMAS  git branch login | imagina que se va a trabajar en una funcionalidad llmada login, pero no quiero que 
el trabajo del login se mezcle con master  . \n "; 
echo "git switch login | para moverse a la rama, mueve HEAD .  \n";

echo "git switch master | va a la rama master   . \n";
echo "git merge master | fusionar las cambios traerlos de la otra rama . \n";
echo "Con merge se ha creado otro commit lo del master se pasó a login . \n";

/* Conflictos 
en Git*/

echo " Con merge se crea un commit en la rama de Login pero el equipo que trabaja con master no sabe lo que hay en el login .\n";
echo "cuando los dos equipos tocan el mismo fichero 
(le hacen un commit, cada uno se crea un commit en el mismo
fichero) en la misma linea de código
 se presenta un conflicto . \n";
echo " git commit -m entre comillas 
correccion conflicto . \n ";
echo "git add . |añade el fichero
pues aun estabamos en el proceso de merge luego git commit . \n";



echo "git stash | Hacer un commit que no afecta al arbol,
es temporal, cuando se va a cambiar de rama y el código
de trabajo no está funcional . \n";
echo "git stash list | Para ver qué hay en los stash . \n ";
echo "git stash pop | Para retomar y continuar donde iba el stash .\n";
echo "git stash drop |para desaparecer el stash cuando andas por ramas . \n";

/* RERINTEGRACIÓN Llevar login a master*/
echo " git diff login|Después de un cambio de rama a master ver lo de login
preparando un merge,para verificar los cambios de las ramas . \n";

echo "Secuencia: . \n 
 git merge, git commit -m commitear ese merge. \n";


echo "git branch -d login |Para eliminar rama . \n";
echo "git branch |ver ramas . \n";  






?>