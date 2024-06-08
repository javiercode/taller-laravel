# Taller Laravel

## Sección 1: ¿Qué es y cómo se usa PHP?

### ¿Qué es PHP?
PHP (Hypertext Preprocessor) es un lenguaje de programación de código abierto diseñado principalmente para el desarrollo web. Permite la creación de sitios dinámicos e interactivos. PHP se ejecuta en el servidor y genera HTML que es enviado al navegador del cliente.

### ¿Cómo se usa PHP?
- **Inserción de PHP en HTML:** Puedes insertar código PHP dentro de archivos HTML utilizando las etiquetas `<?php ... ?>`.
- **Ejemplo básico:**
  ```php
  <!DOCTYPE html>
  <html>
  <head>
      <title>Ejemplo PHP</title>
  </head>
  <body>
      <?php
          echo "¡Hola, mundo!";
      ?>
  </body>
  </html>
  ```

- **Ejecución en el servidor:** El código PHP se procesa en el servidor antes de enviar el resultado al cliente.

## Sección 2: Tecnologías que usa y se pueden usar con Laravel

### Tecnologías principales
- **PHP:** Laravel está construido sobre PHP.
- **Composer:** Gestor de dependencias para PHP.

### Tecnologías complementarias
- **Bases de Datos:** MySQL, PostgreSQL, SQLite, SQL Server.
- **Frontend:** HTML, CSS, JavaScript, Blade (motor de plantillas de Laravel).
- **Frameworks de JavaScript:** Vue.js, React.js, Alpine.js.
- **Herramientas de Desarrollo:** Artisan (CLI de Laravel), PHPUnit (testing), Laravel Mix (compilación de assets).

## Sección 3: Instalación de Laravel

### Requisitos
- **Composer instalado**
- **PHP >= 8.0**
- **Extensiones PHP:** OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON.

### Pasos de instalación
1. **Instalar Composer:** [Instrucciones de instalación](https://getcomposer.org/download/)
2. **Crear un nuevo proyecto Laravel:**
   ```bash
   composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
   ```
3. **Ingresar al directorio del proyecto:**
   ```bash
   cd nombre-del-proyecto
   ```
4. **Iniciar el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```
   Accede a `http://localhost:8000` para ver la aplicación.

## Sección 4: Estructura del Proyecto de Laravel

### Carpetas principales
- **app/**: Contiene el código de la aplicación (controladores, modelos, servicios).
- **bootstrap/**: Contiene el archivo de arranque y configuración de la aplicación.
- **config/**: Archivos de configuración.
- **database/**: Migraciones, fábricas y seeds.
- **public/**: Punto de entrada para el navegador, contiene el archivo `index.php`.
- **resources/**: Vistas, archivos de idioma, y assets sin compilar.
- **routes/**: Archivos de rutas.
- **storage/**: Logs, cachés, y archivos generados.
- **tests/**: Pruebas unitarias y funcionales.
- **vendor/**: Dependencias del proyecto instaladas vía Composer.

## Sección 5: Configuración Inicial

### Archivo de entorno (.env)
- **Configuraciones clave:**
  ```dotenv
  APP_NAME=Laravel
  APP_ENV=local
  APP_KEY=base64:...
  APP_DEBUG=true
  APP_URL=http://localhost

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nombre_base_de_datos
  DB_USERNAME=usuario
  DB_PASSWORD=contraseña
  ```

### Generar clave de aplicación
```bash
php artisan key:generate
```

## Sección 6: Creación de la Primera Ruta

### Definir una ruta en `routes/web.php`
```php
Route::get('/hola', function () {
    return "¡Hola, mundo!";
});
```
### Probar la ruta
Accede a `http://localhost:8000/hola` para ver el mensaje "¡Hola, mundo!".

## Sección 7: Creación del Primer Controlador

### Crear un controlador
```bash
php artisan make:controller PrimerControlador
```

### Definir método en el controlador
```php
// app/Http/Controllers/PrimerControlador.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function saludo()
    {
        return "¡Hola desde el controlador!";
    }
}
```

### Asignar ruta al controlador
```php
// routes/web.php
use App\Http\Controllers\PrimerControlador;

Route::get('/saludo', [PrimerControlador::class, 'saludo']);
```

### Probar la ruta
Accede a `http://localhost:8000/saludo`.

## Sección 8: Creación de la Primera Entidad con Migración de Tabla

### Crear el modelo y migración
```bash
php artisan make:model Articulo -m
```

### Definir estructura de la tabla
```php
// database/migrations/xxxx_xx_xx_create_articulos_table.php
public function up()
{
    Schema::create('articulos', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->text('contenido');
        $table->timestamps();
    });
}
```

### Ejecutar la migración
```bash
php artisan migrate
```

## Sección 9: Implementación de Autenticación

### Instalar paquete de autenticación
Laravel ofrece un paquete preconstruido para autenticación llamado `laravel/ui`.

```bash
composer require laravel/ui
php artisan ui vue --auth
npm install
npm run dev
```

### Migrar las tablas de autenticación
```bash
php artisan migrate
```

### Probar la autenticación
Accede a `http://localhost:8000/register` y `http://localhost:8000/login` para ver las páginas de registro e inicio de sesión.

---

¡Esto concluye nuestro taller básico de Laravel! Para más información, consulta la [documentación oficial de Laravel](https://laravel.com/docs).
```

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
