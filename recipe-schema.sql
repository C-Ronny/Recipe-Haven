-- Drop the database if it exists
DROP DATABASE IF EXISTS recipe_sharing;

-- Create the database
CREATE DATABASE IF NOT EXISTS recipe_sharing;

USE recipe_sharing;

-- Create the Users table
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role TINYINT DEFAULT 3, -- 1 for super admin, 2 for admin, 3 for regular user
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the Ingredients table
CREATE TABLE Ingredients (
    ingredient_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    origin VARCHAR(100),
    nutritional_value TEXT,
    allergen_info VARCHAR(255),
    shelf_life VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the Foods table
CREATE TABLE Foods (
    food_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    origin VARCHAR(100),
    type ENUM('breakfast', 'lunch', 'dinner', 'snack', 'dessert') NOT NULL,
    is_healthy BOOLEAN,
    instructions TEXT,
    description TEXT,
    preparation_time INT, -- in minutes
    cooking_time INT, -- in minutes
    serving_size INT,
    calories_per_serving INT,
    image_url VARCHAR(255),
    created_by INT,
    is_approved BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES Users(user_id) ON DELETE SET NULL
);

-- Create the Recipes table
CREATE TABLE Recipes (
    recipe_id INT AUTO_INCREMENT PRIMARY KEY,
    food_id INT,
    ingredient_id INT,
    quantity DECIMAL(10, 2),
    unit VARCHAR(50),
    optional BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (food_id) REFERENCES Foods(food_id) ON DELETE CASCADE,
    FOREIGN KEY (ingredient_id) REFERENCES Ingredients(ingredient_id) ON DELETE CASCADE
);

-- Create the Favorites table
CREATE TABLE Favorites (
    favorite_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    food_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (food_id) REFERENCES Foods(food_id) ON DELETE CASCADE
);

-- Create the Comments table
CREATE TABLE Comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    food_id INT,
    user_id INT,
    content TEXT NOT NULL,
    rating TINYINT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (food_id) REFERENCES Foods(food_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

-- Create the NutritionFacts table
CREATE TABLE NutritionFacts (
    nutrition_id INT AUTO_INCREMENT PRIMARY KEY,
    food_id INT,
    protein DECIMAL(5, 2),
    carbohydrates DECIMAL(5, 2),
    fat DECIMAL(5, 2),
    fiber DECIMAL(5, 2),
    sugar DECIMAL(5, 2),
    sodium DECIMAL(5, 2),
    FOREIGN KEY (food_id) REFERENCES Foods(food_id) ON DELETE CASCADE
);