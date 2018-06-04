<template>
    <div>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
                <h1>TODOs</h1>
            </div>

            <div class="row">
                <h3>
                    {{ project.name }}
                </h3>
                <p>{{ project.description }}</p>
                <p>
                    <button type="button" class="btn btn-success add-task" v-on:click="showTaskDetails($event, {})">Add Task</button>
                </p>

                <ul class="list-group">
                    <li v-for="(todo, index) in todos" v-bind:key="index" class="list-group-item" v-bind:class="[todo.is_active ? 'active' : '']">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-1">
                                    <input type="checkbox" />&nbsp;
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm" v-on:click="showTaskDetails($event, todo)"><span class="glyphicon glyphicon-pencil"></span></a>
                                </div>
                                <div class="col-md-11">
                                    <span class="todo-title">#{{ index + 1 }} - {{ todo.task_title }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="todo-details">
            <a href="javascript:void(0);" v-on:click="hideTaskDetails" class="btn btn-danger btn-sm">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </a>
            <div class="todo-details-content">
                <h3>
                    <input type="text" class="todo-title" v-model="task.task_title">
                </h3>
                <div>
                    <h4>Description</h4>
                    <textarea class="todo-description" rows="5" v-model="task.task_description"></textarea>
                </div>
                <div v-if="show_save_button">
                    <button type="button" class="btn btn-success" v-on:click="addTask">Save</button>
                </div>

                <div>
                    <h4>Comments</h4>
                    <comments-component v-if="selected_task_id" :task_id="selected_task_id" :comments="comments"></comments-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { projects } from '../../data/projects';
    import { todos } from '../../data/todos';
    import { comments } from '../../data/comments';

    export default {
        data() {
            return {
                task_details_visible: false,
                selected_task_id: 0,
                show_save_button: false,
                todos: [],
                project: {},
                task: {
                    id: "",
                    project_id: "",
                    task_title: "",
                    task_description: "",
                    status: false
                },
                comments: []
            }
        },

        created() {
            this.getProjectDetails();
            
            this.getProjectTodos();
        },

        methods: {
            getProjectDetails: function () {
                let vm = this;
                this.project = projects.find(function(element) {
                    return element.id === parseInt(vm.$route.params.project_id);
                });
            },

            getProjectTodos: function () {
                let vm = this;
                let new_todo = [];
                todos.map(function (element) {
                    if (element.project_id === parseInt(vm.$route.params.project_id)) {
                        element.is_active = false;
                        new_todo.push(element);
                    }
                });
                vm.todos = new_todo;
            },

            getTodoComments: function (selected_task_id) {
                if (selected_task_id) {
                    let vm = this;
                    let new_comments = [];
                    comments.map(function (element) {
                        if (element.todo_id === selected_task_id) {
                            new_comments.push(element);
                        }
                    });
                    vm.comments = new_comments;
                }
            },

            showTaskDetails:function (event, todo) {
                if (window.$(event.currentTarget).hasClass("add-task")) {
                    this.show_save_button = true;
                } else {
                    this.show_save_button = false;
                }

                this.task = todo;

                if (this.task_details_visible && this.selected_task_id !== todo.id) {
                    window.$(".todo-details").animate({
                        right: '-100%'
                    }, "slow").animate({
                        right: '0%'
                    }, "slow");
                } else {
                    window.$(".todo-details").animate({
                        right: '0%'
                    }, "slow");
                }
                this.task_details_visible = true;

                this.selected_task_id = todo.id;
                this.changeTaskSelectedStatus();

                if (this.selected_task_id) {
                    this.getTodoComments(this.selected_task_id);
                }
            },

            hideTaskDetails: function () {
                window.$(".todo-details").animate({
                    right: '-100%'
                }, "slow");
                this.task_details_visible = false;

                this.selected_task_id = 0;
                this.changeTaskSelectedStatus();
            },

            addTask: function () {
                this.task.project_id = this.$route.params.project_id;
                this.task.status = false;
                let last_task = this.todos[this.todos.length - 1];
                this.task.id = (last_task) ? last_task.id + 1 : 1;

                this.task_details_visible = true;
                this.selected_task_id = this.task.id;
                this.show_save_button = false;

                this.todos.push(this.task);
                this.changeTaskSelectedStatus();
            },

            changeTaskSelectedStatus: function () {
                for (let i = 0; i < this.todos.length; i++) {
                    if (this.todos[i].id === this.selected_task_id) {
                        this.todos[i].is_active = true;
                    } else {
                        this.todos[i].is_active = false;
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>