
-- Create a table to store doctor information
CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
	degree VARCHAR(50),
    specialty VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    picture VARCHAR(100), -- This column will store the doctor's picture
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Create a table to store hospital information
CREATE TABLE hospitals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(20),
    picture VARCHAR(100), -- This column will store the hospital's picture
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Create a table to store event information
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    location VARCHAR(255),
    date_time DATETIME NOT NULL,
    picture VARCHAR(100), -- This column will store the event's picture
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create an index on the date_time column for better event date queries
CREATE INDEX idx_date_time ON events(date_time);


-- Create a table to store YouTube video information
CREATE TABLE youtube_videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    video_link VARCHAR(255) NOT NULL,
    thumbnail_url VARCHAR(255),
    description TEXT,
    publish_date DATE,
    view_count INT,
    duration TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create a table to store YouTube video information
CREATE TABLE welcome_youtube_videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    video_link VARCHAR(255) NOT NULL,
    thumbnail_url1 VARCHAR(255),
    thumbnail_url2 VARCHAR(255),
    thumbnail_url3 VARCHAR(255),
	thumbnail_link VARCHAR(255) NOT NULL,
    description TEXT,
    start_time TIME,
	status INT, -- 0 or 1
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

