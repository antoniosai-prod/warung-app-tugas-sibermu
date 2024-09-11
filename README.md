# Project Setup Instructions

## Requirements

- PHP 8.1
- MySQL

## Installation Steps

1. **Run SQL Files**

   - Import the SQL files into your MySQL database in the following order:
     ```bash
     mysql -u your_username -p your_database_name < sql_files/1_init_table.sql
     mysql -u your_username -p your_database_name < sql_files/2_seeding_data.sql
     ```

2. **Configure Database Credentials**

   - Update the database credentials in `library/pdo/connection.php` with your MySQL settings:

     ```php
     // Define configuration
     $credentials = [
         'hostname' => 'localhost',
         'username' => 'root',
         'password' => '',
         'database' => 'warung_app'
     ];
     ```

   - Ensure the values of `hostname`, `username`, `password`, and `database` are set according to your environment.

## Usage

Once the database is set up and the credentials are applied, you can run the project as needed.

## License

This project is licensed under the MIT License.
