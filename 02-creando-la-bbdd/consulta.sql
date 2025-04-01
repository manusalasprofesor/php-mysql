-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS cursos;

-- Usar la base de datos cursos
USE cursos;

-- Crear la tabla mensajes
CREATE TABLE IF NOT EXISTS mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensaje TEXT NOT NULL
);
