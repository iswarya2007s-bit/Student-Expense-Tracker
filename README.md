CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('income', 'expense') NOT NULL,
    category VARCHAR(100) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    description VARCHAR(255),
    transaction_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO transactions
(type, category, amount, description, transaction_date)
VALUES
('expense', 'Food', 300, 'Lunch', '2026-10-03');
('grocery', 'food', 2000, 'Home', '2026-10-01');