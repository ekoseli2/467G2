// update this expired dependency
import initSqlJs from 'https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.6.2/initSqlJs.js';

// URL to your existing SQLite database file
const databaseFileUrl = '../Product_System.sql';

// Function to fetch the SQL file and initialize the database
const initializeDatabase = async () => {
  try {
    // Fetch the SQL file
    const response = await fetch(databaseFileUrl);
    const sqlCommands = await response.text();

    // Initialize SQL.js
    const SQL = await initSqlJs({ locateFile: file => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.6.2/${file}` });

    // Create a new database
    const db = new SQL.Database();

    // Execute SQL commands from the file
    db.exec(sqlCommands);

    // Store the initialized database in a global variable (optional)
    window.db = db;

    console.log('Database initialized successfully');
  } catch (error) {
    console.error('Error initializing database:', error);
  }
};

// Call the initialization function
initializeDatabase();
