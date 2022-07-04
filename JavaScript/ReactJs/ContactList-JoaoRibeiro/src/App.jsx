import React, {useState} from 'react'

export default function App() {

  // states
  const [contacto, setContacto] = useState({nome: '', telefone: ''})
  const [listaContactos, setListaContactos] = useState([])

  //métodos
  function definirNome(event) {
    setContacto({...contacto, nome: event.target.value})
  }

  function definirTelefone(event) {
    setContacto({...contacto, telefone: event.target.value})
  }

  function adicionarContacto () {
    setListaContactos(e => {
      return[...e, {nome: contacto.nome, telefone: contacto.telefone}]
    })
  }

  return (
    <>
      <h3>Minha lista de contactos</h3>
      <hr />
        <div>
            <input type="text" onChange={definirNome} value={contacto.nome} />
        </div>
        <div>
            <input type="text" onChange={definirTelefone} value={contacto.telefone} />
        </div>
      <hr/>
      <button onClick={adicionarContacto}>Adicionar Contacto</button>
      {/**render da lista de contactos */}
    </>
  );
}

