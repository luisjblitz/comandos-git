<?php
echo "Hola Git hub . \n";

echo "Conexión con SSH . \n";
echo "https://docs.github.com/es/authentication/connecting-to-github-with-ssh/checking-for-existing-ssh-keys . \n";
echo " Subir código: Crear un repositorio y de usar el git remote en la terminal, status log

Trabajar con remoto usar: git push -u origin main
Añadir el readme
Modificar en local y subir cambios, usar:
Después que mi local se ha sincronizado con remoto 
hacer un git push (luego de trabajar en local para subir un commit) 
pero primero debe estar sincronizado arriba entonces usar antes que nada:
git fetch | se descarga el historial pero no los cambios
git tree
git pull
se hace un merge de otra manera git config pull.rebase false (ver documentacion)
git pull origin master

Suponiendo que computador nuevo para ingresar al codigo:
Copiar el SSH, ir al escritorio crear una carpeta MyProject ó
git clone y la URL
git clone git@github.com:luisjblitz/hello-git.git

git status
para subir cambios tener el merge luego hacer git push para subir

indicar que quiero hacer cambios si no tengo permisos
con fork copia en mi repositorio 
después del fork bajarse el SSH

Añadir un nuevo Readme entrar al directorio requerido, en este ejmplo es cd hello-git-mouredev
hacemos cambios git status add commit y push
Luego me gustaría que el repositorio original tuviese mis cambios
ir a contribute, open pull request
Il revisor va ir a pulrequest y envía su aprobación
La persona que mantiene el repo debe hacer merge

Sincronización  desde arriba
Ir a la opción de sincronización 
Ver Documentacion markdown para hacer el readme
.\n";
?>