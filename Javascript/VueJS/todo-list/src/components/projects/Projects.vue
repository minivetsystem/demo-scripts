<template>
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1>Projects</h1>
        </div>

        <div class="row">
            <div v-for="(project, index) in projects" v-bind:key="index" class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ project.name }}</h3>
                    </div>
                    <div class="panel-body">
                        {{ project.description }}
                    </div>
                    <div class="panel-footer">
                        <a :href="'#/' + project.id + '/todos'" class="btn btn-success" >View</a>&nbsp;
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div><!-- /.col-sm-4 -->
        </div>
    </div>
</template>

<script>
    import { projects } from '../../data/projects';

    export default {
        data() {
            return {
                projects: projects
            }
        }
    }
</script>

<style>

</style>