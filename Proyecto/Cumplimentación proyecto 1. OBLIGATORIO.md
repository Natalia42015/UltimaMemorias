16-11-2021 

ULTIMA  ![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.001.png)

**Cumplimentación proyecto 1** MEMORIAS

IES Leopoldo Queipo | Natalia Otero García 


**Apartado ANTECEDENTES** 

Se trata el proyecto de una página web que presta servicios de mantenimiento de lapidas, panteones y nichos los servicios que presta son oraciones, limpiezas y colocarles flores elegido todo esto al gusto de cliente (es decir tipo de oración según su libro sagrado y cual quiere que se lea y el tipo de flores que quiere que le ponga y la limpieza  dependiendo de qué tipo de enterramiento tenga le pondremos un precio u otro es decir más cara o barata por ejemplo no es lo mismo limpiar una lápida que es más pequeña que un panteón).Este proyecto se pensó para melilla que mucha gente vive afuera y se deja su seres queridos aquí claro no va estar todas las veces viajando todo el rato para cuidar donde enterraron sus seres querido ya no solo por tema económico de viajar todo el rato es el tiempo que hoy en día no suele tener mucho tiempo y encima vino una pandemia que con más razón no podían viajar. 

Para hacer el diseño se implementó en papel y la base de datos se pasó a página web mediante la página principal es index.html se añadió el diseño que se hizo anteriormente con sus respectivo Bootstrap que se adapta a cualquier dispositivo, su funciones de pasar la imagen y las letras con javacript y con php me permite registrarme e iniciar sesión modificar los registros del difunto de usuario y también eliminar el difunto y dar de baja el usuario por último el usuario puede elegir entre nuestros servicios para aplicárselos a difunto que son oraciones, colocar las flores y limpieza y tenemos estilo con css para los container. 

**Apartado REQUISITOS FUNCIONALES** 

- Permite la autentificación
- Permite modificar y darse de baja los datos del usuario (elegible desde un menú desplegable del nombre del usuario) 
- Rellenar, eliminar y modificar los datos del difunto (a través de un botón) 
- Rellenar, eliminar y modificar los datos donde está tipo de enterramiento (elegible desde un desplegable) 
- Contacta con la empresa(pie de página) 
- Cancela el servicio que pidió el usuario (en la página de pedido) 
- Implementación del módulo de pagos. 

**Apartado Prototipo WEB y boceto estructura.** 

Mapa web 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.003.png)

Boceto 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.004.png)

**Apartado Guía de estilos** 

El diseño de la página le puso uno normal y corriente la idea no es que sea lo más  llamativo que no estas vendiendo nada si no dando unos serie de servicios además siendo donde se tiene que prestar dicho servicios es una cosas muy formal opte por un negro y blanco es lo más clásico y formal para una página de esta categoría y en medio enseñando a los cementerios que prestan esos servicios de Melilla. También soporta formato móviles  ya que como he nombrado antes está hecho para las personas que no tiene tiempo pueden conectarse a sin en cualquier momento y donde sea sin depender concretamente de un ordenador (se adapta a cualquier dispositivo gracias a lo estilo Bootstrap en caso de que se habrá en un móvil el encabezado automáticamente le saldrá un botón a la derecha con un submenú para poder acceder fácilmente y queda mucho más visual al iniciar sesión o registrarnos. Para que se aprecia que cementerios hay se le puso una diapositiva en medio div he podido realizar y con un javacript  llamando la clase de ese de ese dividir la transición por segundo y que reinicie.  A bajo un pie de página con etiquetas semánticas y bootstrap que tiene la información del empresario, el logo de la empresa, contacto de la empresa y términos políticos. 

Los estilos con los que están funcionando son los container para el tablón de abajo que dice cómo hacemos los servicios de la empresa y el de medio pero tiene también añadido con la clase myCarousel que pasa una serie de diapositivas y descripciones de las imágenes mediante una función de javacript y por ultimo tiene puesto etiquetas semánticas con estilos de clases de boostrap tipo para el encabezado de barra de navegación es decir  poniendo esto ya cambia al estilo que elegí de encabezado <nav navbar navbar-light navbar-expand-lg navbar- dark></nav>  con etiquetado hacia arriba header y por último el pie de página que le puse el etiquetado fooder y lo dividí los datos con estilo bootstrap col-xs-12 col-md-3 y etiquetado con div este dividí anda metido también en otro div con clase row. 

**Apartado Planificación de tareas** 

Horas invertidas en total: 245 horas a próximamente de programación e investigación Días empleados en total: 51 (pero horas aplicadas de cada día 5) 



|Tarea |Días  |
| - | - |
|Elegir el tema del proyecto. |4 |
|Investigación sobre el tema del proyecto. |7 |
|Tutoriales youtube sobre creación de requisitos funcionales para una página web. |4 |
|Diseño de la base de datos. |1 |
|Diseño de la entidad-relación. |1 |
|Tutorial github. |1 |
|Creación de cuenta en github y creación de proyecto. |1 |
|Creación de logotipo. |1 |
|Creación de banner. |1 |
|Corrección de base de datos. |8 |
|Tutorial sobre tabla intermedia en base de datos. |1 |
|Boceto de la página web. |1 |
|Creación de index.html,login.html y register.html. |2 |
|Creación de bd.php,dashboard.php,registrar.php,eliminar.php,grabar,php, Iniciarsesion.php,logout.phpypedidos.php |18 |
**Diseño de base de datos** 

- **Diseño Entidad Relación de la BBDD** 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.005.png)

- **Modelo relacional BBDD** 

1,n![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.006.png)![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.007.png)

1,n![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.008.png)

1,1![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.008.png)

n,1![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.009.png)

n,1 1,n ![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.010.png)![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.008.png)

1,n![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.008.png)

- **Script de creación BBDD** 

SET SQL\_MODE = "NO\_AUTO\_VALUE\_ON\_ZERO"; START TRANSACTION; 

SET time\_zone = "+00:00"; 

/\*!40101 SET @OLD\_CHARACTER\_SET\_CLIENT=@@CHARACTER\_SET\_CLIENT \*/; /\*!40101 SET @OLD\_CHARACTER\_SET\_RESULTS=@@CHARACTER\_SET\_RESULTS \*/; /\*!40101 SET @OLD\_COLLATION\_CONNECTION=@@COLLATION\_CONNECTION \*/; /\*!40101 SET NAMES utf8mb4 \*/; 

\-- 

-- Base de datos:  ultimas\_memorias  -- 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  clientes  -- 

CREATE TABLE  clientes  ( 

`   `id  int(11) NOT NULL, 

`   `Nombre\_completo  varchar(255) DEFAULT NULL,    email  varchar(255) DEFAULT NULL, 

`   `Nacimiento  datetime DEFAULT NULL, 

`   `Direccion  varchar(255) DEFAULT NULL, 

`   `Telefono  int(11) DEFAULT NULL, 

`   `CP  float DEFAULT NULL, 

`   `clave  varchar(35) NOT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  cliente\_tiene\_difunto  -- 

CREATE TABLE  cliente\_tiene\_difunto  ( 

`   `Idcliente  int(11) NOT NULL, 

`   `Iddifunto  int(11) NOT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  contratos  

\-- 

CREATE TABLE  contratos  ( 

`   `Fecha  datetime NOT NULL DEFAULT current\_timestamp(),    Realizado  varchar(255) DEFAULT NULL, 

`   `Idservicio  int(11) NOT NULL, 

`   `Idcliente  int(11) NOT NULL, 

`   `Iddifunto  int(11) NOT NULL, 

`   `Id\_MDP  int(11) DEFAULT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  difunto  

\-- 

CREATE TABLE  difunto  ( 

`   `id  int(11) NOT NULL, 

`   `Nombre\_completo  varchar(255) DEFAULT NULL,    Ubicacion  varchar(32) DEFAULT NULL, 

`   `tipo\_enterramiento  int(11) DEFAULT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  metodo\_de\_pago  -- 

CREATE TABLE  metodo\_de\_pago  ( 

`   `Id  int(11) NOT NULL, 

`   `Tipo  varchar(255) DEFAULT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- 

-- Volcado de datos para la tabla  metodo\_de\_pago  -- 

INSERT INTO  metodo\_de\_pago  ( Id ,  Tipo ) VALUES (1, 'Paypal'); 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  servicios  -- 

CREATE TABLE  servicios  ( 

`   `id  int(11) NOT NULL, 

`   `Tipo  varchar(255) DEFAULT NULL, 

`   `precio  float DEFAULT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- 

-- Volcado de datos para la tabla  servicios  -- 

INSERT INTO  servicios  ( id ,  Tipo ,  precio ) VALUES (1, 'Arreglo floral 1', 5), 

(2, 'Arreglo floral 2', 6), 

(3, 'Arreglo floral 3', 7), 


(4, 'Limpieza 1', 5), (5, 'Limpieza 2', 6), (6, 'Limpieza 3', 7), (7, 'Rezos Coran', 5), (8, 'Rezos Torah', 5), (9, 'Rezos Biblia', 5); 

\-- -------------------------------------------------------- 

\-- 

-- Estructura de tabla para la tabla  tipos\_de\_enterramientos  

\-- 

CREATE TABLE  tipos\_de\_enterramientos  ( 

`   `id  int(11) NOT NULL, 

`   `Tipo  varchar(255) DEFAULT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 

\-- 

-- Volcado de datos para la tabla  tipos\_de\_enterramientos  -- 

INSERT INTO  tipos\_de\_enterramientos  ( id ,  Tipo ) VALUES (1, 'Enterramiento en tierra'), 

(2, 'Nicho'), 

(3, 'Panteón'); 

\-- 

-- Índices para tablas volcadas -- 

\-- 

-- Indices de la tabla  clientes  -- 

ALTER TABLE  clientes  

`  `ADD PRIMARY KEY ( id ); 

\-- 

-- Indices de la tabla  cliente\_tiene\_difunto  -- 

ALTER TABLE  cliente\_tiene\_difunto  

`  `ADD PRIMARY KEY ( Idcliente , Iddifunto ),   ADD KEY  Iddifunto  ( Iddifunto ); 

\-- 

-- Indices de la tabla  contratos  

\-- 

ALTER TABLE  contratos  

`  `ADD PRIMARY KEY ( Fecha , Idservicio , Idcliente , Iddifunto ),   ADD KEY  Idcliente  ( Idcliente ), 

`  `ADD KEY  Iddifunto  ( Iddifunto ), 

`  `ADD KEY  Idservicio  ( Idservicio ), 

`  `ADD KEY  Id\_MDP  ( Id\_MDP ) USING BTREE; 

-- Indices de la tabla  difunto  

\-- 

ALTER TABLE  difunto  

`  `ADD PRIMARY KEY ( id ), 

`  `ADD KEY  tipo\_enterramiento  ( tipo\_enterramiento ); 

\-- 

-- Indices de la tabla  metodo\_de\_pago  -- 

ALTER TABLE  metodo\_de\_pago  

`  `ADD PRIMARY KEY ( Id ), 

`  `ADD UNIQUE KEY  Id\_2  ( Id ), 

`  `ADD KEY  Id  ( Id ); 

\-- 

-- Indices de la tabla  servicios  -- 

ALTER TABLE  servicios  

`  `ADD PRIMARY KEY ( id ); 

\-- 

-- Indices de la tabla  tipos\_de\_enterramientos  -- 

ALTER TABLE  tipos\_de\_enterramientos  

`  `ADD PRIMARY KEY ( id ); 

-- AUTO\_INCREMENT de las tablas volcadas 

\-- 

\-- 

-- AUTO\_INCREMENT de la tabla  clientes  

\-- 

ALTER TABLE  clientes  

`  `MODIFY  id  int(11) NOT NULL AUTO\_INCREMENT, AUTO\_INCREMENT=12; 

\-- 

-- AUTO\_INCREMENT de la tabla  difunto  

\-- 

ALTER TABLE  difunto  

`  `MODIFY  id  int(11) NOT NULL AUTO\_INCREMENT, AUTO\_INCREMENT=19; 

\-- 

-- AUTO\_INCREMENT de la tabla  metodo\_de\_pago  

\-- 

ALTER TABLE  metodo\_de\_pago  

`  `MODIFY  Id  int(11) NOT NULL AUTO\_INCREMENT, AUTO\_INCREMENT=2; 

\-- 

-- AUTO\_INCREMENT de la tabla  servicios  

\-- 

ALTER TABLE  servicios  

`  `MODIFY  id  int(11) NOT NULL AUTO\_INCREMENT, AUTO\_INCREMENT=10; 


\-- 

-- AUTO\_INCREMENT de la tabla  tipos\_de\_enterramientos  

\-- 

ALTER TABLE  tipos\_de\_enterramientos  

`  `MODIFY  id  int(11) NOT NULL AUTO\_INCREMENT, AUTO\_INCREMENT=4; 

\-- 

-- Restricciones para tablas volcadas -- 

\-- 

-- Filtros para la tabla  cliente\_tiene\_difunto  -- 

ALTER TABLE  cliente\_tiene\_difunto  

`  `ADD CONSTRAINT  cliente\_tiene\_difunto\_ibfk\_1  FOREIGN KEY ( Idcliente ) REFERENCES  clientes  ( id ), 

`  `ADD CONSTRAINT  cliente\_tiene\_difunto\_ibfk\_2  FOREIGN KEY ( Iddifunto ) REFERENCES  difunto  ( id ); 

\-- 

-- Filtros para la tabla  contratos  -- 

ALTER TABLE  contratos  

`  `ADD CONSTRAINT  contratos\_ibfk\_1  FOREIGN KEY ( Id\_MDP ) REFERENCES  metodo\_de\_pago  ( Id ), 

`  `ADD CONSTRAINT  contratos\_ibfk\_2  FOREIGN KEY ( Idcliente ) REFERENCES  clientes  ( id ), 

`  `ADD CONSTRAINT  contratos\_ibfk\_3  FOREIGN KEY ( Iddifunto ) REFERENCES  difunto  ( id ), 

`  `ADD CONSTRAINT  contratos\_ibfk\_4  FOREIGN KEY ( Idservicio ) REFERENCES  servicios  ( id ); 

\-- 

-- Filtros para la tabla  difunto  -- 

ALTER TABLE  difunto  

`  `ADD CONSTRAINT  difunto\_ibfk\_1  FOREIGN KEY ( tipo\_enterramiento ) REFERENCES  tipos\_de\_enterramientos  ( id ); 

COMMIT; 

/\*!40101 SET CHARACTER\_SET\_CLIENT=@OLD\_CHARACTER\_SET\_CLIENT \*/; /\*!40101 SET CHARACTER\_SET\_RESULTS=@OLD\_CHARACTER\_SET\_RESULTS \*/; /\*!40101 SET COLLATION\_CONNECTION=@OLD\_COLLATION\_CONNECTION \*/; 

- **Consultas** 

Explico todo y cada una de las consultas y que hacen en los archivos y se puede ver claramente cual es de donde y todo. 

Funciones php: 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.011.png)

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.012.png)

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.013.png)

Parte1 Eliminar usuario(era muy largo dejo la otra parte debajo) 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.014.png)

Parte2 Eliminar usuario 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.015.png)

Primera parte Grabar(es muy largo el código de consulta entonces dejare la segunda consulta debajo) 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.016.png)

Segunda parte Grabar 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.017.png)

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.018.png)

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.019.png)

Parte1 modificar usuario(es muy grande el código entonces creo la segunda parte debajo en orden) 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.020.png)

Parte2 de modificar\_usuario 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.021.png)

Parte1 registrar (es muy grande el código entonces creo la segunda parte debajo en orden) 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.022.png)

Parte2 registrar 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.023.png)

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.024.png)

Paginas\_php: 

Parte1 editar\_usuario (es muy grande el código entonces creo la segunda parte debajo en 

orden) 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.025.png)

Parte2 editar\_usuario 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.026.png)

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.027.png)

Parte1 dashboard (es muy grande el código entonces creo la segunda parte debajo en orden) 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.028.png)

Parte2 dashboard 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.029.png)

Parte3 dashboard 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.030.png)

Parte3 dashboard 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.031.png)


**Validación de formularios** 

Tenemos cinco formularios en esta página: 

Iniciar sesión-> cuando el usuario le da iniciar con un nombre o contraseña incorrecta le dará un mensaje de error esta parte funciona gracias con esto getParameterByName se encuentra en el archivo pone en un archivo js y llama a un parámetro que da un mensaje de alerta que se halla escrito pero claro hay que poner una función de contador ($count)claro el contador tiene que ser igual uno significa que si existe hará tal función en mi caso que pueda iniciar y va la página de gestión de difunto del usuario y si no vuelve a la página de iniciar sesión y por ultimo si el usuario se le olvida rellenar el campo los campos tiene dentro este etiquetado para que el campo sea obligatorio required. 

Registrarse-> cuando el usuario se quiere registrar por primera vez se lo aceptara y se le olvida algún campo se lo pedirá que ese campo es obligatorio de rellenar y si en caso de que ponga un nombre o un gmail que exista le saltara un mensaje de error que están en uso ponga otro para ello utilice getParameterByName se encuentra en el archivo pone en un archivo js y llama a un parámetro que da un mensaje de alerta que se halla escrito pero claro hay que poner una función de contador ($count)claro el contador tiene que ser igual a o significa que si no exite hará tal función es decir registrarme ir a la página de gestión mientras no exista el mismo correo o nombre si existe nos volverá a manda a la página de registro y si se le olvida al usuario rellenar le saltara un mensaje de que requiere rellenar el campo eso se utiliza required. 

Editar\_usuario->Cuando un usuario quiere editar sus datos Este formulario lo que hace es cuando el usuario quiere cambiar el nombre por correo hay algo en la base de dato que sea igual a esos dos nombres le sale un error de que ya ese mas el nombre estará en uso está hecho con getparameterbyname esto funciona de la siguiente manera básicamente llama a un nombre y un parámetro que está eso la función el javascript y saltará con una LED alerta pero claro el nombre y el parámetro se llama con un contador que está en PHP que si básicamente consiste de la siguiente manera el contador en este caso será cero porque básicamente si no están esos datos no existe pues del usuario para modificarlo pero si esos datos no existen el contador está uno entonces significa que salta la alerta nombrada anteriormente decir que si existen ya esos datos no dejar al usuario que lo escriba y puse también que los campos son requerido se decir con required por si el usuario se olvida o sin querer deja un campo en blanco. 

Editar\_difunto-> básicamente es lo mismo método que se utilizó en modificar usuario pero con la diferencia de que los nombres que piden son el nombre y la ubicación porque no van a ser los mismos obviamente no deben coincidir eso dos ya que se puede llamar con el mismo nombre pero no puede tener la misma ubicación también ya que eso es imposible para ello he utilizado lo mismo que el  para ello se puso el contador == 0 si no existe el mismo se aplica como bueno sin mensaje de error y lo envía a la página principal si no le dará error. Y los campos no deben estar vacíos los campos. 

Registre nuevo difunto-> Este utiliza el mismo sistema de validación y condiciones que editar difunto. 

**Proceso de carga** 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.032.png)

**Jerarquía de directorios** 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.033.png)

**Contenido directorios** 

BD\_SQL-> Contiene lo archivos de SQL (base de datos) y PDF del cumplimiento de obligatorio del documento del proyecto. 

CSS->Contiene los archivos de estilos CSS de Index.HTML 

dp-> contiene todo el paquete boostrap de datepicker sirve para poner calendarios es un estilo bootstrap 

html-> Contiene todos los archivos html y aparte su JavaScript  y el CSS  de los archivos html y se llaman carpetas que llaman ccs2(estilo) js2(JavaScript). 

JS-> Contiene el JavaScript del Index .HTML 

PHP-> Contiene todos los archivos de función PHP y dentro de esa carpeta tiene una carpeta llamada pagina\_PHP en esa carpeta está todas las páginas hechas por extensión PHP y dentro tiene  la carpeta CSS3 y JS3 qué son dos carpetas que contiene el JS3 contiene la los JavaScript de las pagina\_PHP que hay ahí y el CSS3 contiene las los estilos de la carpeta de las paginas\_PHP 

**Apartado Diseño de la interface** 

El encabezado contiene el menú de navegación en la parte derecha y en la parte izquierda tiene un el logo de la empresa con sus respectivas decoraciones y todo el menú navegación tenemos básicamente iniciar sesión y registrarse luego más para abajo tenemos tres container hecho **por bootstrap básicamente empezare a describir el** container el primero de la izquierda contiene todas las descripción te las imágenes que está **en el container a la derecha y el otro** que tenem**os abajo del primero**  básicamente es el botón de registrarse ya abajo tenemos otro container más grande y más extenso está dividido entre dice lo que ofrece la empresa o promete la empresa hacer que es el servici**o más rápido por ejemplo que** lo hace **desde** el móvil sin moverte de casa y por último tenemos el pie de página que nos permitirá contactar con el empresario de diferentes modos con el gmail eso sí está hecho con maíz alto si su extensión apropiada no podrás hacer una CD también se han pensado para los usuarios que no tengan esa extensión poner gema y completo de la empresa también tenemos número de contacto y el logo de la empresa**  

**Estructura gráfica de la interface** 



|Container con bootstrap ![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.034.png)|Container con bootstrap![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.035.png)|
| :- | :- |
||
|Container con bootstrap ![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.036.png)|
|Pie de página ![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.037.png)|
**IMPLEMENTACIÓN** 

**REQUISITO 1: Diseño responsive** 

Ya que mi servicio para las personas que no tiene tiempo es más fácil coger un móvil entonces puse ese diseño con bootraps sin apenas tocar css. 

**Funcionamiento** 

Boostraps poniendo sus enlaces correspondiente ya que ponía en la clases el tipo de estilo que se trataba por ejemplo un encabezado lo que conseguí con eso poner todo en un frases todos sus css sin ponerlos y ya cuando era algo muy específico como el menú despegable ese si lo cree mediante css y a su vez bootraps 

**Ejemplo de código** 

<header>   

`  `<nav class="navbar navbar-light navbar-expand-lg navbar-dark" style="background-color: black;"> 

`      `<img src="img/logo.jpeg" width="77%" class="img"> 

`          `<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs- target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria- expanded="false" aria-label="Toggle navigation"> 

`                `<span class="navbar-toggler-icon"></span> 

`          `</button>  

`      `<div class="collapse navbar-collapse" id="navbarSupportedContent"> 

`        `<ul class="navbar-nav mr-auto"> 

`          `<li class="navbar-nav" style="text-align: right;"> 

`            `<a style="color:white;" class="nav-link" href="HTML/login.html?error=0">Iniciar Sesion</a> 

`            `<a style="color:white;" class="nav-link" href="HTML/register.html?error=0">Registrarse</a> 

`          `</li> 

`        `</ul> 

`      `</div> 

`    `</nav> 

</header> 

**REQUISITO 2: Para que se pueda acceder a la pagina web** 

Claro para que el usuario quiera acceder a la pagina para crear nuevos registros de difunto y hacerlos servicios que desee es necesario obligar que se registre el usuario es decir limitamos la a página de inicio y que no pueda hacer nada al menos que se registre o inicié sesión 

**Funcionamiento** 

Para que los datos del difunto que para cada persona es diferente tiene que acceder iniciar sesión o registrarse claro hay puesto en dashboard.php o página principal que no puede acceder sin eso 

**Ejemplo de código**  <?php 

`    `session\_start(); 

`    `$id = $\_SESSION["id"]; 

`    `$usuario = $\_SESSION["usuario"]; 

`    `if ($id == 0 or $usuario == "") { 

`        `header('location:../../HTML/login.html');    } 

?> 

**PRUEBAS** 

Importe una mv DebianLAMP.ova que está preparada que tiene instalado un S.O debían que tiene instalado php, apache, ssh y mysql antes de subir nada he hecho varias pruebas de que el apache funcionaba, mysql(entrando con el usuario y contraseña dada), apache (entrando en la página de prueba que tiene desde mi anfitrión) y el php (entrando desde el anfitrión a su página de prueba) y utilice ssh con mi anfitrión conectándome a mv y por ultimo comprobé si la contraseña para entrar root del mv era correcta 

**Metodología de las pruebas** 

Para probar que mi proyecto es posible que funcione dentro de estos servicios recree dichos despliegue y conexiones para la base de datos y hice una clonación en git hub para poder hacer mediante comando una clonación en mv en debían que se la hice y comprobé que se descargó donde se indicó los archivos nombrados antes comprobé que funcionaba poniendo la dirección IP 192.168.1.73/Codigo que es la ruta en el que se puede conectar a mi proyecto que esta clonado en mi mv y resulto que salio mi pagina y comprobé que hacia cada uno de los requisitos funcionales nombrados(claro mirando si insertaba y todo en mysql) , las validaciones de formularios que se puso en su debido tiempo y por ultimo si el diseño reponsive funcionaba en otros dispositivos como en un móvil copiando la dirección en chrome de mi móvil funciono. 

**DESPLIEGUE** 

Explico lo que falto por definir en este despliegue y lo que vi correcto lo que se define en los comentarios que ya venían lo deje porque ya lo explica perfectamente no hace falta que añada mas 

#!/bin/bash 

\# 

- SCRIPT DE DESPLIEGUE DE PROYECTO # 
- Natalia Otero García 

\# 

- Esto es el  nombre del usuario y contraseña del mysql de mv conectara hay para dejar la base y lo otro es la url de nuestra mv 

USERDB="debianDB" 

PASSDB="debianDB" 

HOST=$(hostname -I) 

WWW="/var/www/html/" 

- Aquí coge el fichero de la base de datos y como se llama la base de datos  DATOS="ultimas\_memorias.sql" 

BBDD="ultimas\_memorias" 

- Se toman los parámetros como USER y PASS de la BBDD if [ $# = 2 ]; 

then 

`   `USERDB=$1 

`   `PASSDB=$2 

fi 

- Copiamos el contenido de la carpeta proyecto a la página html cp -r ../Codigo/ $WWW 
- Creamos esas base de datos y luego restauramos esa base de datos mysqladmin -u $USERDB -p$USERDB create $BBDD mysql -u $USERDB -p$USERDB $BBDD < ../DataBase/$DATOS 
- Mostramos url de carga 

echo "http://$HOST/Codigo/Index.php" 

**Apartado Herramientas. Por lo menos enumeración** 

1. Visual Studio code versión 1.62.2 
1. Xampp versión 3.3.0: 
1. Chrome versión95.0.4638.69

**Apartado Lenguajes. Por lo menos enumeración.** 

1. PHP 
1. Javacript 
1. Html 
1. css 

**PRODUCTO** 

Muestro aquí todas las páginas qué hay en mi página web y describiré brevemente de que archivo pertenece 

**Página de Inicio** 

Este pertenece al archivo index.html 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.038.png)

**Página iniciar sesión** 

Este esta en la carpeta html es el archvio login.hmtl entramos cuando le damos inciar sesión 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.039.png)

**Página de registro** 

La página de registros se accede de dando al registrarse esto está en la carpeta html llamado en un archivo register.HTML 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.040.png)

**Página de gestión (tablero)** 

La página se hace  mediante iniciando sesión o registrándose esto se encuentra en la carpeta PHP>pagina\_PHP y se llama el archivo dashboard.php aquí podemos dale al menú que está en nuestro nombre podemos registrar un familiar dándole registro nuevo o podemos configurar nuestra cuenta dándole a configuración, tenemos cerrar sesión y podemos darte bajo a nuestra cuenta que eliminará todo lo que tengamos dentro de nuestra cuenta gestionado y a la cuenta misma. A registrar un nuevo difunto podemos enviarle flores,rezos o limpiar que nos saldrá una ventanita modal qué un estilo de bootstrap y le podemos dar el servicio que queremos y pagar y tambien se puede dar editar que eso lo enseñaré en la siguiente página. Y finalizar servicios es para cuando tengamos un servicio pendiente podemos entrar con contraseña para dar por hecho el servicio en realizado 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.041.png)

**Página de  editar difunto** 

Aquí que este archivo esta en PHP/pagina\_PHP se llama editar\_difunto.php cuando quiero editar un difunto le doy editar difunto veo los datos del difunto y los puedo cambiar y guarda los cambios o encaso que no quiera cambiar los datos vuelo a la pagina dashboard.php 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.042.png)

**Página de configuración de perfil** 

Aquí se entra desde dando nuestro nombre y configuarión para entra editar un usuario que estemos iniciado para poder cambiar nuestro datos y ver los que pusimos si cambiamos algun datos le damos guardar cambios  y si no queremos cambiar nada le damos volver ala pagina principal es decir a dashboard 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.043.png)

**Abre una ventana emergente de un servicio**  

Cuando le damos un botón de servicio de flores, limpieza y oraciones nos saldrá esto eligimos que queremos comprar o pagar y luego nos llevara a una página que está en la siguiente imagen de pedios. 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.044.png)

**Página pedidos** 

Cuando le damos algo de la anterior imagen nos lleva a esta parte para realizar el pago o le podemos dar cancelar o volver a otra vez a dashboard. 

![](Aspose.Words.adfd6ac7-67b8-4cf3-bbca-08e97fcc498f.045.png)

**Apartado Bibliografía. Las que se hayan usado hasta el momento.** 

[https://www.youtube.com/watch?v=Lv7XbZtnQ6A ](https://www.youtube.com/watch?v=Lv7XbZtnQ6A)[https://youtu.be/bO18omSzeR4 ](https://youtu.be/bO18omSzeR4)[https://youtu.be/L_lWQZNhN7w ](https://youtu.be/L_lWQZNhN7w)[https://youtu.be/hWglK8nWh60 ](https://youtu.be/hWglK8nWh60)

[https://youtu.be/GG4mftkQVrs ](https://youtu.be/GG4mftkQVrs)

[https://youtu.be/tFr0Vg1q9Eg ](https://youtu.be/tFr0Vg1q9Eg)[https://getbootstrap.com/docs/5.0/getting-started/introduction/ ](https://getbootstrap.com/docs/5.0/getting-started/introduction/)[https://www.w3schools.com/php/ ](https://www.w3schools.com/php/)[https://www.php.net/manual/es/language.functions.php ](https://www.php.net/manual/es/language.functions.php)[https://getbootstrap.com/ ](https://getbootstrap.com/)
