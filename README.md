# 🚀 Despliegue de GamePeruleto con Docker

Este proyecto utiliza **Docker** para gestionar el entorno. Incluye un servidor Apache/PHP, una base de datos MySQL y una interfaz web para gestionar la base de datos (phpMyAdmin).

## 📋 Requisitos Previos
* **Docker Desktop** instalado y en ejecución.
* **VS Code** con la extensión [Docker](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker) instalada.

---

## 🛠️ 1. Levantar la Infraestructura (Interfaz VS Code)

1. **Abrir el proyecto:** Abre la carpeta raíz en VS Code.
2. **Arrancar:** Haz clic derecho sobre el archivo `docker-compose.yml` y selecciona **"Compose Up"**.
3. **Verificar:** Espera a que los contenedores aparezcan en verde en la pestaña de Docker de VS Code.

---

## 🗄️ 2. Importar la Base de Datos (vía phpMyAdmin)

Una vez que Docker esté funcionando, sigue estos pasos para cargar las tablas:

1. **Acceder al panel:** Abre tu navegador y entra en: 
   👉 **[http://localhost:8000](http://localhost:8000)**
2. **Login:** Introduce el usuario (`root`) y la contraseña (`test`) en el archivo .yml.
3. **Crear/Seleccionar BD:** Si no existe la base de datos a la izquierda, créala (`GamePeruleto`).
4. **Importar:** * Haz clic en la pestaña **"Importar"** (Import) en el menú superior.
   * Haz clic en **"Seleccionar archivo"** y busca tu archivo `.sql` del proyecto.
   * Baja hasta el final y haz clic en el botón **"Importar"** o **"Continuar"**.
   * *Aparecerá un mensaje en verde confirmando que las tablas se han creado.*

---

## 🌐 3. Acceso a la Aplicación Web

Para ver la lista de videojuegos y probar las funcionalidades:

👉 **[http://localhost:8080](http://localhost:8080)**

---

## ⚠️ Configuración de Conexión (PDO)

**IMPORTANTE:** Para que PHP encuentre la base de datos dentro de la red de Docker, tu archivo de conexión debe usar el nombre del servicio de MySQL:

```php
// En tu Gestor.php o archivo de conexión:
$host = 'db'; // Nombre del servicio en docker-compose.yml
$dbname = 'GamePeruleto';
