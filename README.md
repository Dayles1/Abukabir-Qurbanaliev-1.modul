1. config/database.php da keylarni tog'irlang

2. posts  table yarating
usersdb table ham 
```sql
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usersdb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,   
    email VARCHAR(100) NOT NULL UNIQUE,      
    password VARCHAR(255) NOT NULL           
);
```

3. servernin ishlating
```bash
php -S localhost:8000 -t public
```#   A b u k a b i r - Q u r b a n a l i e v - 1 . m o d u l  
 