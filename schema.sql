CREATE DATABASE IF NOT EXISTS motor_times;
USE motor_times;

CREATE TABLE IF NOT EXISTS models (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model_code VARCHAR(20) NOT NULL,
    bike_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_model_bike (model_code, bike_name)
);

CREATE TABLE IF NOT EXISTS time_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model_id INT NOT NULL,
    entry_type ENUM('CBU', 'BRAZIL', 'ARGENTINA', 'COLOMBIA', 'THAILAND', 'NEPAL', 'BANGLADESH') NOT NULL,
    ea DECIMAL(10,1) DEFAULT 0.0,
    ms DECIMAL(10,1) DEFAULT 0.0,
    va DECIMAL(10,1) DEFAULT 0.0,
    fb DECIMAL(10,1) DEFAULT 0.0,
    ps DECIMAL(10,1) DEFAULT 0.0,
    total_time DECIMAL(10,1) GENERATED ALWAYS AS (ea + ms + va + fb + ps) STORED,
    entry_date DATE DEFAULT (CURDATE()),
    FOREIGN KEY (model_id) REFERENCES models(id) ON DELETE CASCADE,
    UNIQUE KEY unique_model_entry (model_id, entry_type, entry_date)
);

-- Indexes for better performance
CREATE INDEX idx_entry_type ON time_entries(entry_type);
CREATE INDEX idx_entry_date ON time_entries(entry_date);