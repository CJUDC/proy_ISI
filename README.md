# 💊 Recordatorio de Medicamentos y Citas Médicas

## 🎯 Descripción del Proyecto

**proy_ISI** es una aplicación web diseñada para ayudar a gestionar y recordar **citas médicas** y la **toma de medicamentos**. El sistema permite a los usuarios registrarse, iniciar sesión y administrar sus propios recordatorios, recibiendo notificaciones oportunas para cada evento.

El objetivo principal es mejorar la adherencia a los tratamientos y reducir el ausentismo en citas médicas mediante un sistema de alertas automatizadas.

## 📈 Estado del Proyecto

El proyecto se encuentra en una **fase inicial de desarrollo**, con las funcionalidades básicas ya implementadas. Aún no cuenta con una versión estable de lanzamiento, pero el repositorio ya contiene la estructura principal de la aplicación.

## ✨ Características Principales

*   **Autenticación de Usuarios**: Formularios de registro (`register.php`) e inicio de sesión (`login.php`) que permiten a los usuarios crear y acceder a sus cuentas de forma segura.
*   **Gestión de Citas**: Los usuarios pueden realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre sus citas médicas, incluyendo detalles como asunto, médico, lugar, fecha y hora.
*   **Gestión de Medicamentos**: Similar a las citas, permite agregar, editar y eliminar registros de medicamentos, especificando el nombre, la dosis, fecha y hora de administración.
*   **Sistema de Notificaciones**: El núcleo del sistema es `notificaciones.js`, que realiza peticiones periódicas al servidor cada 5 segundos para verificar eventos pendientes y muestra una alerta al usuario en el momento correspondiente.
*   **Historial y Estadísticas**: Todos los eventos (citados o medicados) que ya han ocurrido se almacenan para su consulta posterior, permitiendo a los usuarios llevar un seguimiento detallado de su historial médico.

## 🖥️ Demostración

Actualmente, el proyecto no cuenta con una demostración en vivo. Se recomienda clonar el repositorio y ejecutar la aplicación en un entorno de servidor local para probar todas sus funcionalidades.

## 🛠️ Tecnologías Utilizadas

*   **Backend**: PHP (65.5% del código).
*   **Frontend**: CSS (14.6%), JavaScript (9.6%), Hack (10.3%).
*   **Base de Datos**: MySQL (requiere configuración local).

## 📁 Estructura del Proyecto

proy_ISI/

├── assets/ # Recursos estáticos (imágenes, CSS, etc.)
├── includes/ # Archivos PHP reutilizables (configuración, funciones)
├── index.php # Punto de entrada principal
├── register.php # Formulario y lógica de registro
├── login.php # Formulario y lógica de inicio de sesión
├── notificaciones.js # Lógica del sistema de notificaciones en tiempo real
├── citaRemValidator.php # Validador de datos para citas
├── crearRemCitas.php # Crear recordatorio de cita
├── editCita.php # Editar cita existente
├── deleteCita.php # Eliminar cita
└── ... (otros archivos de gestión de medicamentos)

## ⚙️ Requisitos y Configuración

### Requisitos Previos
- Servidor web con soporte para PHP (ej. XAMPP, WAMP, MAMP, LAMP).
- MySQL o MariaDB.
- Navegador web moderno.

### Configuración de la Base de Datos
1. Crea una base de datos en tu servidor MySQL (ej. `proy_isi_db`).
2. Importa el esquema de la base de datos (si existe un archivo `.sql` en el repositorio, úsalo; de lo contrario, crea las tablas según la estructura del código).
3. Configura la conexión a la base de datos en el archivo de configuración dentro de `includes/` (ej. `config.php`), actualizando host, usuario, contraseña y nombre de la base de datos.

## 🚀 Instalación

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/CJUDC/proy_ISI.git
Configura tu entorno local: Copia la carpeta del proyecto a la raíz de tu servidor web (ej. htdocs en XAMPP).

Configura la base de datos: Sigue los pasos de la sección anterior.

Accede a la aplicación: Abre tu navegador y ve a http://localhost/proy_ISI/.

👤 Autor
Carlos Jonas Castillo Mendoza (CJUDC) - Perfil de GitHub
