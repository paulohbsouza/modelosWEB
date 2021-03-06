import React, { useState } from 'react';

import Head from 'next/head';
import Menu from '../components/Menu';
import Rodape from '../components/Rodape';

import { Container, Jumbotron, Button, Form, FormGroup, Label, Input, Alert } from 'reactstrap';

function Orcamento() {

  const [orcamento, setOrcamento] = useState({
    name: '',
    email: '',
    telefone: '',
    whatsApp: '',
    project: ''
  });

  const [respose, setRespose] = useState({
    formSave: false,
    type: '',
    message: ''
  });

  const onChangeInput = e => setOrcamento({ ...orcamento, [e.target.name]: e.target.value });

  const sendOrcamento = async e => {
    e.preventDefault();
    console.log(orcamento);

    setRespose({ formSave: true });

    try {
      const res = await fetch('http://localhost:8080/orcamento', {
        method: 'POST',
        body: JSON.stringify(orcamento),
        headers: { 'Content-Type': 'application/json' }
      });

      const responseEnv = await res.json();

      if (responseEnv.error) {
        setRespose({
          formSave: false,
          type: 'error',
          message: responseEnv.message
        });
      } else {
        setRespose({
          formSave: false,
          type: 'success',
          message: responseEnv.message
        });
      }
    } catch (err) {
      setRespose({
        formSave: false,
        type: 'error',
        message: "Erro: Orçamento não enviado com sucesso!"
      });
    }

  }

  return (
    <div>
      <Head>
        <title>Orçamento - Celke</title>
        <meta name="description" content="Solicitar orçamento para ..." />
      </Head>
      <Menu />

      <Jumbotron fluid className="descr-top">
        <style>
          {`.descr-top{
              background-color: #050c3d;
              color: #00a1fc;
              padding-top: 40px;
              padding-bottom: 40px;
              margin-bottom: 0rem !important;
          }`}
        </style>
        <Container className="text-center">
          <h1 className="display-4">Orçamento</h1>
        </Container>
      </Jumbotron>
      <Jumbotron fluid className="form-orcamento">
        <style>
          {`.form-orcamento{
              padding-top: 80px;
              padding-bottom: 80px;
              background-color: #FFF;
              margin-bottom: 0rem !important;
            }`}
        </style>
        <Container>

          {respose.type === 'error' ? <Alert color="danger">{respose.message}</Alert>: "" }
          {respose.type === 'success' ? <Alert color="success">{respose.message}</Alert>: "" }

          <Form onSubmit={sendOrcamento}>
            <FormGroup>
              <Label for="name">Nome</Label>
              <Input type="text" name="name" id="name" placeholder="Preencha com o nome completo." onChange={onChangeInput} />
            </FormGroup>

            <FormGroup>
              <Label for="email">E-mail</Label>
              <Input type="email" name="email" id="email" placeholder="Preencha com o seu melhor e-mail." onChange={onChangeInput} />
            </FormGroup>

            <FormGroup>
              <Label for="phone">Telefone</Label>
              <Input type="text" name="phone" id="phone" placeholder="(XX) XXXX-XXXX" onChange={onChangeInput} />
            </FormGroup>

            <FormGroup>
              <Label for="whatsapp">WhatsApp</Label>
              <Input type="text" name="whatsapp" id="whatsapp" placeholder="(XX) XXXX-XXXX" onChange={onChangeInput} />
            </FormGroup>

            <FormGroup>
              <Label for="project">Projeto</Label>
              <Input type="textarea" name="project" id="project" placeholder="Fale um pouco do seu projeto." onChange={onChangeInput} />
            </FormGroup>

            {respose.formSave ? <Button type="submit" outline color="danger" disabled>Enviando...</Button>: 
            <Button type="submit" outline color="primary">Solicitar</Button>}
            
          </Form>
        </Container>
      </Jumbotron>

      <Rodape />
    </div>
  )
}

export default Orcamento;