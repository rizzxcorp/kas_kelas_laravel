CREATE DATABASE sistem_keuangan_kas_kelas;
USE sistem_keuangan_kas_kelas;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Masukkan user dengan password tanpa enkripsi
INSERT INTO users (username, password) 
VALUES 
('admin', 'admin123'),
('user', 'user123');