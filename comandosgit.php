<?php 

echo "instalar git, git -v <br>";
echo "
git config --global user.name poner nombre <br>
git config --global user.email poner email <br>
se debe crear un fichero .gitconfig en la carpeta raíz usuarios <br>";

echo "Usar Git Bash buscarlo en el menu de inicio. <br>";
echo "ls para ver . <br>";
echo "cd | para moverse . <br>";
echo "cd .. | para devolverse . <br>";
echo "pwd | para ver en donde me encuentro . <br>";
echo "mkdir nombre de la carpeta entre comillas | para crear una carpeta . <br>";
echo "New-Item nombrefichero.php -ItemType File | para crear un archivo vacío llamado . <br>";

echo "git init | inicializa git control de versiones en repositorio . <br>";
echo "git init | rama master . <br>";

echo "git status | estado . <br>";
echo "git add y el nombre del fichero | preparar fotografía . <br>";
echo "git commit -m entre comillas escribir un comentario | fotografía de un fichero . <br>";
echo "git log | verificar fotografía . <br>";

echo "git checkout nombre del fichero | Despues de modificar un fichero, para volver, para situarnos en un punto en concreto de una fotografía o un fichero, es decir para movernos entre los commits. <br>"; 
echo "también Mueve el puntero de HEAD a un commit previo. <br>"; 
echo "git reset | para volver a la ultima fotografia, combinar con checkout nombre fichero. <br>"; 

echo "git log --graph | para ver la rama . <br>";
echo "git log --graph --pretty=oneline | para ver la rama . <br>";
echo "git log --graph --decorate --all --oneline | para ver la rama resumida . <br>";

echo "git config --global alias.tree entre comillas log --graph --decorate --all --oneline | para hacer un alias . <br>";

echo "New-Item .gitignore -ItemType File | para agregar en él los ficheros que no se desea tener en cuenta. .gitignore se debe fotografiar . <br>";

echo "git diff | para ver lo que se ha cambiado desde la última fotografía sin necesidad de hacer una fotografía . <br>";

echo "git checkout luego el id de la fotografía | para movernos, usar git status para verificar, luego el comando para movernos . <br>";
echo "eso es para volver exactamente a como se dejó en la fotografía el proyecto . <br>";
echo "git checkout HEAD | para situarnos apuntar, indicar la cabeza del proyecto nuevo. <br>";

echo "git reset --hard y el id | para ir a ese id y desaparecer las fotografías que le siguen a ese id . <br>";
echo "git reflog | Historial completo, si se arrepiente del hard reset justo antes aparece el commit. <br>";
echo "Secuencia: <br>
git reset --hard. <br>
git reflog arrepiente de desaparecer . <br>
git checkout con el id a recuperar (esta justo antes del reset hard) . <br>
git checkout master, git tree, git reset hard con el id a recuperar, log, tree . <br>";

echo "git tag clase_1 | etiquetar commits, usar para hacer referencias de puntos importantes, se le pone un nombre identificativo al punto . <br>";

echo "git add . | para añadir todos los ficheros pendientes <br>";

echo "git tag | muestra los tags que hay . <br>";
echo "git checkout tags/clase_1 | pone HEAD en el tag. <br>";
echo "git checkout master | para volver al final . <br>";

echo "RAMAS git branch login | imagina que se va a trabajar en una funcionalidad llamada login, pero no quiero que el trabajo del login se mezcle con master . <br>"; 
echo "git switch login | para moverse a la rama, mueve HEAD . <br>";

echo "git switch master | va a la rama master . <br>";
echo "git merge master | fusionar los cambios traerlos de la otra rama . <br>";
echo "Con merge se ha creado otro commit, lo del master se pasó a login . <br>";

/* Conflictos en Git */
echo "Con merge se crea un commit en la rama de Login pero el equipo que trabaja con master no sabe lo que hay en el login . <br>";
echo "cuando los dos equipos tocan el mismo fichero (le hacen un commit, cada uno se crea un commit en el mismo fichero) en la misma línea de código se presenta un conflicto . <br>";
echo "git commit -m entre comillas correccion conflicto . <br>";
echo "git add . | añade el fichero pues aún estábamos en el proceso de merge luego git commit . <br>";

echo "git stash | Hacer un commit que no afecta al árbol, es temporal, cuando se va a cambiar de rama y el código de trabajo no está funcional . <br>";
echo "git stash list | Para ver qué hay en los stash . <br>";
echo "git stash pop | Para retomar y continuar donde iba el stash . <br>";
echo "git stash drop | para desaparecer el stash cuando andas por ramas . <br>";

/* REINTEGRACIÓN Llevar login a master */
echo "git diff login | Después de un cambio de rama a master ver lo de login preparando un merge, para verificar los cambios de las ramas . <br>";

echo "Secuencia: <br>
git merge, git commit -m commitear ese merge. <br>";

echo "git branch -d login | Para eliminar rama . <br>";
echo "git branch | ver ramas . <br>";  

?>