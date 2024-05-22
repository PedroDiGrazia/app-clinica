// server.js
import express from 'express';
import bodyParser from 'body-parser';
import connection from './db.js'; // Importar a conexão do banco de dados

const app = express();
const port = 3001;

app.use(bodyParser.json());

// Rota GET para '/cadastro'
app.get('/cadastro', (req, res) => {
    // Retornar a página de cadastro (ou qualquer outra resposta desejada)
    res.send('Página de Cadastro');
});

app.post('/cadastro', (req, res) => {
  const { nome, endereço, celular, senha } = req.body;

  const query = 'INSERT INTO usuarios (nome, endereço, celular, senha) VALUES (?, ?, ?, ?)';
  connection.query(query, [nome, endereço, celular, senha], (error, results) => {
    if (error) {
      console.error('Erro ao inserir dados:', error.stack);
      res.status(500).send('Erro ao cadastrar usuário.');
      return;
    }
    res.status(200).send({ id: results.insertId, ...req.body });
  });
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
