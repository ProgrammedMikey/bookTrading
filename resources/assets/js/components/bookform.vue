
<template>
    <form method="post" action="/books" @submit.prevent="onSubmit">

        <div class="form-group">
            <label for="title" class="col-md-3 control-label">Title</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Title" v-model="title">
                <br>
            </div>
        </div>
        <br/>

        <div class="form-group">
            <label for="body" class="col-md-3 control-label">Book image</label>

            <div class="col-md-8">
                <input type="text" class="form-control" id="body" name="body" placeholder="Enter Book Image" v-model="body">
                <br>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </form>
</template>

<script>
    import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return {
                title: '',
                body: ''
            };
        },

        methods: {
            onSubmit() {
                axios.post('/books', this.$data)
                        .then(this.onSuccess)
            },

            onSuccess(response){
                alert(response.data.message);

                this.title = '';
                this.body = '';

            }

        }
    }
</script>
