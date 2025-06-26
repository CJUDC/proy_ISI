// Función para obtener los eventos actualizados y mostrar las notificaciones
function obtenerEventos() {
    $.ajax({
        url: 'citaRemValidator.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.length > 0) {
                // Recorrer los eventos y mostrar las notificaciones
                data.forEach(function(evento) {
                    const asunto = evento.Asunto;
                    const doctor = evento.doctor;
                    const user = evento.nombre;
                    const lugar = evento.lugar;
                    const hora = evento.horaEvento;

                    // Mostrar alerta
                    alert(`Hola ${user}! hoy es el dia para asistir a tu cita médica de ${asunto} con el doctor ${doctor} en ${lugar}, a las ${hora}`);

                    // Eliminar el evento de la tabla de recordatorios y agregarlo al historial
                    $.ajax({
                        url: 'eliminarEvento.php',
                        type: 'POST',
                        data: {
                            eventoId: evento.citaid,
                            asunto: evento.Asunto,
                            nombre: evento.nombre,
                            doctor: evento.doctor,
                            lugar: evento.lugar,
                            horaEvento: evento.horaEvento,
                            fechaEvento: evento.fechaEvento
                            
                        },
                        success: function (response) {                           
                            console.log('Evento eliminado y agregado al historial.');
                            console.log(response);
                        },
                        error: function() {
                            console.error('Error al eliminar el evento y agregarlo al historial.');
                        }
                    });



                });
            }
        },
        error: function() {
            console.error('Error al obtener los eventos.');
        }
    });






    $.ajax({
        url: 'medRemValidator.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            if (data.length > 0) {
                // Recorrer los eventos y mostrar las notificaciones
                data.forEach(function(eventom) {
                    const medicamento = eventom.medicamento;
                    const notas = eventom.notas;
                    const users = eventom.nombres;
                    const horaEventos = eventom.horaEventos;

                    // Mostrar alerta
                    alert(`Hola ${users}! son las ${horaEventos}, es tu momento para tomar ${notas} de ${medicamento}`);

                    // Eliminar el evento de la tabla de recordatorios y agregarlo al historial
                    $.ajax({
                        url: 'eliminarEventoMed.php',
                        type: 'POST',
                        data: {
                            medId: eventom.medid,
                            medicamento: eventom.medicamento,                           
                            horaEventos: eventom.horaEventos,
                            fechaEventos: eventom.fechaEventos,
                            notas: eventom.notas
                            
                        },
                        success: function (response) {                           
                            console.log('medicamento eliminado y agregado al historial.');
                            console.log(response);
                        },
                        error: function() {
                            console.error('Error al eliminar el medicamento y agregarlo al historial.');
                        }
                    });



                });
            }
        },
        error: function() {
            console.error('Error al obtener los medicamentos.');
        }
    });


    



}

// Llamar a la función para obtener los eventos al cargar la página
$(document).ready(function() {
    obtenerEventos();

    // Realizar la petición cada cierto intervalo de tiempo (por ejemplo, cada 5 segundos)
    setInterval(obtenerEventos, 5000);
});

