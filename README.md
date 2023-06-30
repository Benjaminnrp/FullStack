# FullStack - TURISMO CORDOBA CAPITAL
Trabajo para la masterclass de Full Stack

La página web realizada, es una página de turismo de la Ciudad de Córdoba Capital. Con una interfaz amplia, comenzando con el inicio donde el usuario puede regsitrarse o iniciar sesión para ingresar (requiere Correo electrónico, usuario y contraseña). 

En la página principal se encuentra la información general de Córdoba Capital, su gastronomía y los eventos y festivales importantes.
Siguiente a esto encontraremos la sección visitar donde estarán recomendaciones de los mejores lugares de la capital.

Un apartado de alojamiento en el que podremos ver los mejores hoteles en la capital para poder hospedarse.

Luego, una galería en la que el usuario podrá subir sus propias fotos como recuerdo privado, o compartiendolas con los demás usuarios.

Al hacer click en usuario, podremos  ingresar a nuestra galería privada, cerrar sesión y eliminar nuestra cuenta.

# Repositorio

En el repositorio se encuentran almacenados los archivos en carpetas.

La primera carpeta que se muestra es "css". En dicha carpeta encontraremos los archivos con extensión .css que sirven para diseñar
y modificar la interfaz de cada sección por ejemplo: login, galeria, alojamiento, etc.

En la carpeta "img" encontraremos las imagenes que se usan en toda la página web.

En la carpeta siguiente encontraremos los archivos "php", utilizados para conectar la base de datos creada en Xampp(MySQL) con la página web para cumplir varias necesidades como, por ejemplo, iniciar sesión.

Luego, un archivo "dia", realizado en el programa "DIA", para crear un diagrama entidad-relación y así facilitar la creación de la base de datos SQL. Cabe recalcar que fue creado en una fase de ánalisis por lo que no estará igual a la página web. 

A continuación del anterior archivo, tendremos todos los archivos de programación "html".

# Guia de instalación

## Xampp

Comenzando con Xampp utilizado para crear la base de datos.
Primero desde cualquier navegador web hay que acceder a la siguiente página: https://www.apachefriends.org/es/index.html

Una vez dentro debemos instalar la versión compatible con nuestro sistema operativo
![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/a13e660a-1552-4b0d-9113-cb0bb421ae1f)

Ya instalado el Archivo deberemos buscarlo en nuestra carpeta de Descargas o en la carpeta elegida

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/9c74e01b-7cd5-41cf-969d-030c8ce41f03)

El programa Xampp, al iniciar su instalador, te advierte que evites instalarlo en el directorio de instalación de Windows

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/0b79dae4-99b9-4ff4-8551-d494a3a69c42)

Xampp te dará la bienvenida al instalador

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/cb65e103-e124-49cd-9ca8-ad37709d2f98)

Al clickear en "next" el instalador preguntará que componentes de Xampp deseas instalar

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/8e4e7577-14b0-4985-9083-9d683d8205ac)

Elegiremos la ruta donde instalar Xampp

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/c64578db-4f77-4d4b-b2a9-ecc6c2cba19b)

Al presionar "next" comenzará la descarga e instalación del programa, que solo tardará unos minutos

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/7e1c4e81-098c-4dda-94f5-489379b8b2c0)

## Visual Studio Code

Visual Studio fue el programa principal donde programamos el código html y css (formato de la página)

Primero debemos entrar a la página oficial: https://code.visualstudio.com

Una vez en la pagina debemos instalarlo en la version compatible con nuestro sistema operativo 

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/ed0ff360-0d8b-4477-8ccd-c5205c533c0f)

Luego de instalarlo debemos buscar el instalador en Descargas o en la carpeta elegida

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/12f785c9-b6e3-4709-b6ae-ec4119e31331)

Entramos en el instalador y aceptamos los acuerdos

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/d19339e2-7254-460b-aaed-18f5c0b59fcd)

Elegimos el directorio que prefiramos

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/15d53c5c-8862-4690-87de-7eb9b1c1ca02)

Clickeamos en "instalar" despues de elegir las tareas adicionales que escojamos

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/f91319f7-497e-42f5-ada7-7447318ea375)

##  Dia

Dia fue utilizado para crear el diagrama entidad-relacion, para facilitarnos la creación de tablas en MySQL.

Para instalarlo deberemos entrar al siguiente enlace: https://sourceforge.net/projects/dia-installer/files/dia-win32-installer/0.97.2/dia-setup-0.97.2-2-unsigned.exe/download
Y este se instalará automaticamente.
Deberemos encontrar el setup en descargas y clickearlo.

Nos pedirá que seleccionemos el Lenguaje del programa

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/0b22b838-a801-4d37-8b56-7826dbcd9f3a)

Después nos dará la bienvenida al instalador y le daremos todo en siguiente.

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/f00251e1-adfd-40c5-9c42-0930a337589b)

Una vez aquí elegiremos el directorio que querramos y le daremos a instalar

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/6a440aaa-b44d-490d-a3d6-ad21f4e9b907)


## Iniciar los servidores de Apache y MySQL

Luego de haber instalado la aplicación Xampp, la iniciamos y presionamos "Start" en las filas de Apache y Mysql. 
![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/a7cdbd5e-e6bb-402b-90c8-ba3edcafe3cb)

![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/27e09751-0f8b-4c8a-8f4b-3c33d344c725)



En nuestro navegador, ingresamos a: http://localhost/phpmyadmin/index.php

Clckeamos en la sección "nueva", creamos una base de datos con el nombre de "turismo" y presionamos "Crear"
![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/a7818460-061e-46cd-98a9-1aeb3266770d)




Nos dirigimos a Importar y seleccionamos el archivo "turismo.sql", que se encuentra en el repositorio de github. Luego, oprimimos el botón "importar" al final de la página.
![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/1b9bdc10-c732-4178-898a-1d6ae597cd54)


![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/347b38e8-b4fb-4f34-957c-1a31062b1a0e)

Descargamos el repositorio de github desde la sección "code" y una vez descargado, descomprimimos el archivo.
![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/a581ef3b-8594-4b7b-a5cc-f983cb14ac80)


Ingresamos a la ubicación del archivo del programa de Xampp. Nos dirigimos a la carpeta llamada "htdocs" y pegamos el archivo descomprimido.
![image](https://github.com/Benjaminnrp/FullStack/assets/118995132/ac371524-0c28-4090-90ec-d9996a80c8f8)


Ingresamos al buscador y pegamos el siguiente enlace para ingresar a la página: (ENLACE)












