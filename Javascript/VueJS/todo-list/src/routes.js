import Projects from './components/projects/Projects.vue';
import Todos from './components/todos/Todos.vue'

export default [
    {path: '/', component: Projects, name: "projects"},
    {path: '/:project_id/todos/', component: Todos, name: "todos"}
]