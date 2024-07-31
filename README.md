# Acerca del proyecto

* [Laravel]: Versión 10
* [Vue]: Versión 4.5
* [Tailwild]: Versión 1.4

Los instructivos o paso a paso de la instalación y correcto funcionamiento deben ser estrictamente seguidos. En caso de presentar algún bloqueo, se actualizara este documento.

## [Configuración inicial](#configuración-inicial)

0. Clonar repositorio:

git clone https://github.com/AndresDGarcesDev/prueba-tecnica-blh.git

1. Correr el siguiente comando para la instalación de los paquetes node:

npm install --force

2. Hacer la copia del archivo .env:

- cp .env.example .env
- php artisan key:generate

3. Establecer la migración junto a los seeders:

php artisan migrate --seed

## [Levantamiento de servidores](#levantamiento-de-servidores)

4. Levantar el frameword Vue con estilos visuales:

npm run dev

5. Levantar el servidor Laravel:

php artisan serve

## [Información adicional](#información-adicional)

> Por defecto agregue valores y no llenarlos manualmente dentro de la base de datos, como son: Pacientes, Medicos, Citas Médicas, Especialidad, Tipos de documento, Usuarios.
> Para ingresar el sistema se debe usar el rol del administrador con las siguientes credenciales:

Correo: prueba.admin@blh.com
Contraseña: prueba.admin
