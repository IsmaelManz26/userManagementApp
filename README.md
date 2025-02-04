# Proyecto Laravel

Este es un proyecto Laravel que incluye funcionalidades de gestión de usuarios, verificación de correo electrónico, y más.

## Requisitos

- PHP >= 8.2
- Composer
- Node.js y npm

## Instalación

1. Clona el repositorio:

   ```sh
   git clone https://github.com/IsmaelManz26/userManagementApp.git
   cd tu-repositorio

2. Instala las dependencias de PHP:
composer install

3. Instala las dependencias de Node.js:
npm install

Copia el archivo .env.example a .env y configura tus variables de entorno:
cp .env.example .env

Genera la clave de la aplicación:
php artisan key:generate

Configura la base de datos en el archivo .env y luego ejecuta las migraciones:
php artisan migrate

Funcionalidades
Gestión de Usuarios: Crear, editar, y eliminar usuarios.
Verificación de Correo Electrónico: Verifica la dirección de correo electrónico de los usuarios.
Restablecimiento de Contraseña: Permite a los usuarios restablecer su contraseña.
Dashboard: Muestra un panel de control con información relevante.
Estructura del Proyecto
Controllers: Controladores de la aplicación.
Models: Modelos de Eloquent.
views: Vistas de Blade.
web.php: Rutas web de la aplicación.
public: Archivos públicos como CSS, JS, imágenes, etc.
Configuración de Correo
Asegúrate de configurar las variables de entorno para el correo en tu archivo .env:

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@gmail.com
MAIL_PASSWORD=tu-contraseña
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=tu-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

Licencia
Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.

## Capturas de Pantalla

A continuación se muestran algunas capturas de pantalla de la aplicación:

### Página de Inicio de Sesión
![Inicio de Sesión](screenshots/login.png)

### Dashboard
![Dashboard-1](screenshots/dashboard-1.png)
![Dashboard-2](screenshots/dashboard-2.png)

### Gestión de Usuarios
![Gestión de Usuarios](screenshots/user_management.png)

### Perfil
![Perfil](screenshots/profile.png)