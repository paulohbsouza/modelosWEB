import {createRoot} from "react-dom/client";
//import App from './App'
import ToDoList from './ToDoList'

const root = document.querySelector("#root")
createRoot(root).render(<ToDoList />)