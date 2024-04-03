DROP DATABASE IF EXISTS SalonBellezaWeb;

CREATE DATABASE IF NOT EXISTS SalonBellezaWeb;

USE SalonBellezaWeb;

-- Definir la tabla 'users'
CREATE TABLE
    users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        email_verified_at DATETIME NULL,
        password VARCHAR(255) NULL,
        phone VARCHAR(255) NOT NULL,
        remember_token VARCHAR(100) NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL
    );

-- Definir la tabla 'appointments'
CREATE TABLE
    appointments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        id_user INT,
        FOREIGN KEY (id_user) REFERENCES users (id),
        location VARCHAR(255) NULL,
        appointment_date DATE NOT NULL,
        stylist VARCHAR(255) NULL,
        description TEXT NULL,
        cost DECIMAL(10, 2) NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL
    );

-- Definir la tabla 'services'
CREATE TABLE
    services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT NULL,
        image VARCHAR(255) NOT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL
    );

-- Definir la tabla 'appointments_services'
CREATE TABLE
    appointments_services (
        id_appointment INT,
        FOREIGN KEY (id_appointment) REFERENCES appointments (id),
        id_service INT,
        FOREIGN KEY (id_service) REFERENCES services (id)
    );

-- Definir la tabla 'suppliers'
CREATE TABLE
    suppliers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        number VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL
    );

-- Definir la tabla 'categories'
CREATE TABLE
    categories (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL
    );

-- Definir la tabla 'products'
CREATE TABLE
    products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT NULL,
        stock INT NOT NULL,
        purchase_price DECIMAL(10, 2) NULL,
        selling_price DECIMAL(10, 2) NULL,
        id_category INT,
        FOREIGN KEY (id_category) REFERENCES categories (id),
        id_supplier INT,
        FOREIGN KEY (id_supplier) REFERENCES suppliers (id)
    );

-- Definir la tabla 'accounting'
CREATE TABLE
    accounting (
        id INT AUTO_INCREMENT PRIMARY KEY,
        movement_description VARCHAR(255) NOT NULL,
        amount DECIMAL(10, 2) NOT NULL,
        movement_date DATETIME NOT NULL,
        movement_type VARCHAR(255) NOT NULL,
        transaction_type VARCHAR(255) NULL,
        pending_balance DECIMAL(10, 2) NULL
    );

-- Definir la tabla 'roles'
CREATE TABLE
    roles (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        guard_name VARCHAR(255) NOT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL
    );

-- Definir la tabla 'model_has_roles'
CREATE TABLE
    model_has_roles (
        model_type VARCHAR(255),
        user_id INT NOT NULL,
        role_id INT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users (id),
        FOREIGN KEY (role_id) REFERENCES roles (id),
        PRIMARY KEY (model_type, user_id, role_id)
    );

-- Definir la tabla 'method_action'
CREATE TABLE
    method_actions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        method_name VARCHAR(255) NOT NULL
    );

-- Definir la tabla 'error_logs'
CREATE TABLE
    error_logs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        exception VARCHAR(255) NOT NULL,
        error_message TEXT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL,
        user_id INT,
        FOREIGN KEY (user_id) REFERENCES users (id),
        id_method_action INT,
        FOREIGN KEY (id_method_action) REFERENCES method_actions (id)
    );

-- Definir la tabla 'action_logs'
CREATE TABLE
    action_logs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        exception VARCHAR(255) NOT NULL,
        action_message TEXT NULL,
        created_at DATETIME NULL,
        updated_at DATETIME NULL,
        user_id INT,
        FOREIGN KEY (user_id) REFERENCES users (id),
        id_method_action INT,
        FOREIGN KEY (id_method_action) REFERENCES method_actions (id)
    );

-- Índices para la tabla 'appointments'
CREATE INDEX idx_client_name ON appointments (client_name);

CREATE INDEX idx_appointment_date ON appointments (appointment_date);

CREATE INDEX idx_service ON appointments (service);

-- Índices para la tabla 'inventory'
CREATE INDEX idx_product_name ON inventory (product_name);

CREATE INDEX idx_supplier ON inventory (supplier);

-- Índices para la tabla 'accounting'
CREATE INDEX idx_movement_date ON accounting (movement_date);

CREATE INDEX idx_movement_type ON accounting (movement_type);

-- Índices para la tabla 'users'
CREATE INDEX idx_email ON users (email);

-- Índices para la tabla 'model_has_roles'
CREATE INDEX idx_user_id ON model_has_roles (user_id);

CREATE INDEX idx_role_id ON model_has_roles (role_id);

-- Índices para la tabla 'error_logs'
CREATE INDEX idx_user_id_error_logs ON error_logs (user_id);

-- Índices para la tabla 'action_logs'
CREATE INDEX idx_user_id_action_logs ON action_logs (user_id);