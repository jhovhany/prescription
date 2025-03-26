<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Receta Médica</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            font-size: 16px;
        }
        h1, h2, h3 {
            text-align: center;
        }
        p {
            margin: 0;
            padding: 0;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Receta Médica</h1>
    <h2>Dr. Juan Pérez</h2>
    <img src="logo.png" alt="Logotipo" style="width: 100px;">
    <p>Cédula Profesional: 1234567</p>
    <p>Especialidad: Medicina General</p>
    <p>Dirección: Calle Falsa 123, Ciudad, País</p>
    <p>Contacto: +123456789</p>
    <hr>
    <h3>Datos del Paciente</h3>
    <p>Nombre: {{ name }}</p>
    <p>Edad: {{ age }}</p>
    <p>Fecha de emisión: {{ currentDate }}</p>
    <hr>
    <h3>Indicación del Medicamento</h3>
    <p>Nombre Genérico: __________</p>
    <p>Forma Farmacéutica: __________</p>
    <p>Dosis: __________</p>
    <p>Vía de Administración: __________</p>
    <p>Frecuencia: __________</p>
    <p>Duración del Tratamiento: __________</p>
    <hr>
    <h3>Indicaciones Adicionales</h3>
    <p>Recomendaciones: __________</p>
    <p>Cuidados Especiales: __________</p>
    <hr>
    <h3>Firma y Sello del Médico</h3>
    <p>_________________________</p>
    <p>Firma</p>
    <p>Sello</p>
    <hr>
    <h3>Espacio para Farmacia</h3>
    <p>Medicamento Entregado: __________</p>
    <p>Fecha: __________</p>
    <p>Firma del Farmacéutico: __________</p>
</body>
</html>
