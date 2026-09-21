CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE proveedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empresa VARCHAR(100) NOT NULL,
    contacto VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    categoria_id INT,
    proveedor_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE SET NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(id) ON DELETE SET NULL
);

INSERT INTO categorias (nombre, descripcion) VALUES 
('Literatura', 'Novelas y narrativa general'),
('Tecnología', 'Libros de programación y ciencia');

INSERT INTO proveedores (empresa, contacto, telefono, email) VALUES 
('Editorial Alfa', 'Carlos López', '555-0192', 'contacto@alfa.com'),
('Distribuidora Beta', 'Ana Gómez', '555-0143', 'ventas@beta.com');

INSERT INTO libros (titulo, autor, precio, stock, categoria_id, proveedor_id) VALUES 
('Cien Años de Soledad', 'Gabriel García Márquez', 25.00, 15, 1, 1),
('Aprende PHP y MySQL', 'Rubén Castillo', 42.50, 8, 2, 2);