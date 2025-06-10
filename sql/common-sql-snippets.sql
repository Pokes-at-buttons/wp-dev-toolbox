-- Select all rows
SELECT * FROM table_name;

-- Select with WHERE condition
SELECT * FROM users WHERE status = 'active';

-- Select with LIKE
SELECT * FROM users WHERE email LIKE '%@gmail.com';

-- Count rows
SELECT COUNT(*) FROM users WHERE role = 'admin';

-- Insert new row
INSERT INTO users (name, email) VALUES ('Tim', 'tim@example.com');

-- Update existing row
UPDATE users SET status = 'active' WHERE id = 42;

-- Delete a row
DELETE FROM users WHERE id = 42;

-- Order results
SELECT * FROM users ORDER BY created_at DESC;

-- Group and count
SELECT role, COUNT(*) FROM users GROUP BY role;

-- Join two tables
SELECT u.name, r.role_name
FROM users u
JOIN roles r ON u.role_id = r.id;