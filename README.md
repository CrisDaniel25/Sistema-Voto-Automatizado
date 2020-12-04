# Sistema-Voto-Automatizado

# Integrantes que colaboraron:
* Cristopher Figueroa - 2018-6186
* Verlyn Phlinspy - 2018-6492
# Objetivo general:

● Crear un sistema para el voto automatizado de candidatos en una elección utilizando bootstrap para el diseño. 

# Funcionalidades 
# Funcionalidades del elector:

El sistema debe iniciar en la pantalla para que el elector coloque su documento de identidad, si este ya ha votado en estas elecciones debe mostrarle un mensaje que ya ha ejercido su derecho al voto, en caso de que no haya ninguna votación activa 
debe mostrar que no hay ningún proceso electoral en estos momentos, si el ciudadano está inactivo se le debe informar que esta inactivo y finalmente si no ha realizado su voto en una elección activa el sistema debe enviarlo a la pantalla para elegir a los candidatos. 

En la pantalla de elección de candidatos inicialmente debe aparecerle los puesto que están disponible para votar, una vez haga click sobre uno de estos puesto debe enviarlo a una pantalla donde aparecen todos los candidatos y aquí podrá seleccionar uno y votar, no podrá pulsar sobre el botón de votar hasta que haya seleccionado al menos a un candidato. 

Una vez finalizado su voto sobre el candidato de este puesto el sistema debe enviarlo a la pantalla anterior para que seleccione otro puesto y así sucesivamente hasta que haya seleccionado un candidato para cada puesto, una vez ya tenga seleccionado sus candidatos podrá terminar el proceso de votación el cual le enviará un correo con la elección que este realizó. 

En el listado de candidatos debe mostrarse el nombre del mismo, una foto, el partido al que pertenece, el logo del partido al que pertenece y al cargo que está aspirando. 

# Funcionalidades del Administrador:
En la pantalla inicial del sistema donde el elector coloca su documento de identidad, debe existir un menú en la parte superior que permita iniciar session a un administrador, al dar click sobre la opción del administrador debe enviar a una 
pantalla de inicio de sesión donde se pida usuario y contraseña para ingresar al sistema. 

Una vez colocado de manera correcta el usuario y contraseña, debe enviarme un pantalla con un menú que debe contener las siguientes opciones(Candidatos, Partidos, Puesto electivo,Ciudadanos, Elecciones) 

En la opción de Puesto Electivos hay un listado con todos los puesto electivos creado en el sistema(Presidente, Alcalde, etc.), en esta pantalla podemos mantener los puestos electivos (Crear, Editar, Borrar y Listar). 

En la opción de Ciudadanos hay un listado con todos los ciudadanos creado en el sistema, en esta pantalla podemos mantener los ciudadanos (Crear, Editar, Borrar y Listar). 

En la opción de Partidos hay un listado con todos los partidos creado en el sistema, en esta pantalla podemos mantener los partidos (Crear, Editar, Borrar y Listar). 

En la opción de Candidatos hay un listado con todos los candidatos creado en el sistema, en esta pantalla podemos mantener los candidatos (Crear, Editar, Borrar y Listar). Aquí debemos tener en cuenta varias restricciones al momento de crear candidatos y es que para esto debe existir al menos un partido y un puesto electivo creado y activo. 

En la opción de Elecciones, se muestra un listado con las elecciones realizado, en este listado debe existir una opcion que me permita ver los resultados de esa elección( se debe mostrar los puestos que se disputaron, los candidatos para cada puesto, la cantidad de votos que recibieron y el porcentaje que sacaron organizado del más alto el ganador hasta el más bajo). 

En ese listado debe mostrar cual es la elección que está activa y sobre la elección activa solo debe mostrar la opción de finalizar, una vez pulsado sobre finalizar ningún elector podrá seguir votando sobre la misma y se podrá acceder a la opción de resultados para ver los ganadores de los comicios. 

Si no existe ninguna elección activa debe habilitarse una opción para iniciar un nuevo proceso electivo, para el cual solo debe colocar la fecha de realización del mismo y el nombre de la elección, una creada la elección esta se pondrá como activa y el botón para iniciar proceso electivo se deshabilitará o desaparecerá hasta que finalice la elección actual. 


# Consideraciones generales:
● En este sistema de elección el electorado debe poder votar por categorías de candidatos al menos, Ejemplo (Presidente, Alcalde, Senador y Diputado). 

● Dentro de los candidatos debe existir la posibilidad de votar por un candidato genérico que será llamado ninguno. 

● Para poder iniciar una elección se debe tener en el sistema al menos dos candidatos creados y activo. 

● Si existe una adminsitrador logueado en el sistema, si intenta entrar a la pantalla inicial se debe de redirigir a la pantalla de administración y no dejarlo acceder a la pantalla donde el elector realiza su proceso de votación. 

● El sistema debe asegurarse que ningún usuario no autorizado o que no haya iniciado sesión previamente en el sistema pueda acceder a las opciones del administrador, aun este conociera las urls de acceso. 

● Todos los borrados del sistema serán lógicos (esto quiere decir que la entidad contendrá un estado de activo o inactivo, una vez colocado como inactivo no se mostrarán al electorado) 

● Al inactivar un candidato este no aparecerá para que el elector pueda votar por él, si se inactiva un puesto electivo este no aparecerá para que el elector pueda votar por él y todos los candidatos que estaban aspirando para este puesto electivo será inactivado, al inactivar un ciudadano este no podrá votar en la elección y finalmente si se inactiva un partido todos los candidatos de ese partido serán inactivado. 

● No se pueden inactivar o activar candidatos, puesto electivo, ciudadanos y partidos mientras exista un proceso de elección activo. 

● Para el administrador tanto los candidatos como los puesto electivos, ciudadanos y partidos siempre aparecerán en los listado de cada uno de los distintos mantenimientos de manera que puedan reactivarse en algún momento. 

● Para ver los resultados de elecciones pasada no se toma en consideración si actualmente el partido o puesto electivo o candidato está inactivado debe aparecer en los resultados de esa elecciones si estuvo activo durante el proceso de la misma, al igual el voto de los ciudadanos inactivo que votaron en esa elección deben ser contados. 

● No debe existir ningún “Algoritmo” que beneficie a algún candidato o partido político. 4





