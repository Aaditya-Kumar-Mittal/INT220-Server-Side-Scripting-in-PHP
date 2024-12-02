-- Command to create the students table

CREATE TABLE students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    email VARCHAR(50)
);

-- Command to insert data into the students table

INSERT INTO students (name, age, email) 
VALUES 
    ('Alice Johnson', 20, 'alice.johnson@example.com'),
    ('Bob Smith', 22, 'bob.smith@example.com'),
    ('Charlie Brown', 19, 'charlie.brown@example.com'),
    ('Diana Prince', 21, 'diana.prince@example.com'),
    ('Evan Peters', 23, 'evan.peters@example.com'),
    ('Fiona Gallagher', 20, 'fiona.gallagher@example.com'),
    ('George Adams', 24, 'george.adams@example.com'),
    ('Hannah Lee', 18, 'hannah.lee@example.com'),
    ('Ian Turner', 22, 'ian.turner@example.com'),
    ('Jane Doe', 19, 'jane.doe@example.com');