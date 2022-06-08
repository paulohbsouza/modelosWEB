const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');

require('./models/home');
const Home = mongoose.model('Home');

require('./models/orcamento');
const Orcamento = mongoose.model('Orcamento');

const app = express();

app.use(express.json());

app.use((req, res, next) => {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Methods", "GET, PUT, POST, DELTE");
  res.header("Access-Control-Allow-Headers", "X-PINGOTHER, Content-Type, Authorization");
  app.use(cors());
  next();
});

mongoose.connect('mongodb://localhost:27017/celke', { useNewUrlParser: true, useUnifiedTopology: true }).then(() => {
  console.log("Conexão com o BD MongoDB realizado com sucesso!");
}).catch((err) => {
  console.log("Erro: Conexão com o BD MongoDB realizado com sucesso!");
})

app.get('/home', async (req, res) => {
  await Home.findOne({}).then((home) => {
    return res.json({
      error: false,
      home
    });
  }).catch((err) => {
    return res.status(400).json({
      error: true,
      message: "Nenhum registro encontrado!"
    })
  });
});

app.post('/home', async (req, res) => {
  const dados = {
    "topTitulo": "Temos a solução que a sua empresa precisa!",
    "topSubtitulo": "Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou informação.",
    "topTextoBtn": "Orçamento",
    "topLinkBtn": "http://localhost:3000/orcamento",

    "serTitulo": "Serviços",
    "serSubtitulo": "Mauris vehicula, augue eu dapibus condimentum, velit orci condimentum risus, vel tristique sapien elit quis dolor.",
    "serUmIcone": "laptop-code",
    "serUmTitulo": "Serviço um",
    "serUmDescric": "Fusce eget nibh volutpat, mollis felis eget, molestie orci. Suspendisse ullamcorper, odio ac molestie sodales, ante nisi mattis quam...",
    "serDoisIcone": "mobile-alt",
    "serDoisTitulo": "Serviço dois",
    "serDoisDescric": "Etiam lacinia, risus vitae ultricies volutpat, sem ex volutpat orci, posuere porttitor mi tellus facilisis elit.",
    "serTresIcone": "network-wired",
    "serTresTitulo": "Serviço três",
    "serTresDescric": "Nullam consectetur, turpis in vestibulum imperdiet, massa nisi laoreet augue, at suscipit lacus orci ac tortor. Maecenas auctor...",
  }

  const homeExiste = await Home.findOne({});
  if (homeExiste) {
    return res.status(400).json({
      error: true,
      message: "Erro: A página home já possui um registro!"
    });
  }

  await Home.create(dados, (err) => {
    if (err) return res.status(400).json({
      error: true,
      message: "Erro: Conteúdo da página home não cadastrada com sucesso!"
    });
  });

  return res.json({
    error: false,
    message: "Conteúdo da página home cadastrado com sucesso!"
  })

});

app.post('/orcamento', async (req, res) => {
  /*
  await sleep(3000);
  
  function sleep(ms){
    return new mongoose.Promise((resolve) => {
      setTimeout(resolve, ms);
    });
  };
  */
  await Orcamento.create(req.body, (err) => {
    if (err) return res.status(400).json({
      error: true,
      message: "Erro: Solicitação de orçamento enviado com sucesso!"
    });
  });

  return res.json({
    error: false,
    message: "Solicitação de orçamento enviado com sucesso!"
  })

});

app.listen(8080, function () {
  console.log("Servidor iniciado na porta 8080: http://localhost:8080")
});
