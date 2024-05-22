// db.js
import mysql from 'mysql2';

const connection = mysql.createPool({
  host: 'localhost',
  port: 3306,
  user: 'root',
  password: 'root',
  database: 'sys',
  waitForConnections: true,
  connectionLimit: 10,
  queueLimit: 0
});

export default connection;
