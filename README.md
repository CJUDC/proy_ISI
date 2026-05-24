# 💊 Recordatorio de medicamentos y citas

## 📌 Índice
- [Descripción del Proyecto](#-descripción-del-proyecto)
- [Estado del Proyecto](#-estado-del-proyecto)
- [Características Principales](#-características-principales)
- [Demostración de la Aplicación](#-demostración-de-la-aplicación)
- [Acceso al Proyecto](#-acceso-al-proyecto)
- [Tecnologías Utilizadas](#-tecnologías-utilizadas)
- [Estructura de Archivos](#-estructura-de-archivos)
- [Requisitos de Instalación y Configuración](#-requisitos-de-instalación-y-configuración)
- [Autor y Contribuciones](#-autor-y-contribuciones)

## 📋 Descripción del Proyecto
Este proyecto es una aplicación web diseñada para ayudar a los usuarios a gestionar y recordar sus **citas médicas** y la **toma de medicamentos**. El sistema permite a los usuarios registrarse, iniciar sesión y gestionar sus propios recordatorios, recibiendo notificaciones oportunas para cada evento. La aplicación busca mejorar la adherencia a los tratamientos y reducir el ausentismo en citas médicas mediante un sistema de alertas automatizadas[reference:0].

## 🚀 Estado del Proyecto
El proyecto se encuentra en una **fase inicial de desarrollo**, con las funcionalidades básicas implementadas. Aún no cuenta con una versión estable de lanzamiento, pero el repositorio ya contiene la estructura principal de la aplicación[reference:1].

## ✨ Características Principales
- **Autenticación de Usuarios**: Formularios de registro (`register.php`) e inicio de sesión (`login.php`) que permiten a los usuarios crear y acceder a sus cuentas[reference:2].
- **Gestión de Citas**: Los usuarios pueden crear, visualizar, editar y eliminar citas médicas con detalles como asunto, doctor, lugar, fecha y hora. Los validadores correspondientes (`citaRemValidator.php`, `crearRemCitas.php`, `editCita.php`, `deleteCita.php`) aseguran la integridad de los datos[reference:3][reference:4].
- **Gestión de Medicamentos**: Los usuarios pueden agregar medicamentos, especificando el nombre, la dosis (notas), la fecha y la hora de administración. Las funcionalidades incluyen la creación, edición y eliminación de estos registros[reference:5][reference:6].
- **Sistema de Notificaciones**: El archivo `notificaciones.js` es el núcleo del sistema de alertas. Esta función realiza peticiones periódicas al servidor (cada 5 segundos) para verificar eventos pendientes (citas o medicamentos) y muestra una alerta al usuario en el momento correspondiente. Una vez notificado, el evento se elimina de los recordatorios activos y se archiva en el historial[reference:7].
- **Historial y Estadísticas**: Los eventos que ya han ocurrido se almacenan para su consulta posterior, permitiendo a los usuarios llevar un seguimiento de su historial médico y de medicación.

## 🎥 Demostración de la Aplicación
Actualmente, el proyecto no cuenta con una demostración en vivo. Se recomienda clonar el repositorio y ejecutar la aplicación en un entorno de servidor local para probar sus funcionalidades.

## 🛠️ Acceso al Proyecto
Puedes acceder al código fuente del proyecto a través del siguiente enlace:

[https://github.com/CJUDC/proy_ISI.git](https://github.com/CJUDC/proy_ISI.git)

Para obtener una copia local del proyecto, utiliza el siguiente comando:

```bash
git clone https://github.com/CJUDC/proy_ISI.git
