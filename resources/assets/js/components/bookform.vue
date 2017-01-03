
<template>
    <form method="post" action="/books" class="col-md-12" @submit.prevent="onSubmit" >

        <div class="form-group">
            <label for="title" class="col-md-12 control-label">Title</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Title" v-model="title" required>
                <br>
            </div>
        </div>
        <br/>

        <div class="form-group">
            <label for="body" class="col-md-12 control-label">Book image</label>

            <div class="col-md-8">
                <input type="text" class="form-control" id="body" name="body" placeholder="Enter Book Image" v-model="body" required>
                <br>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-success">Submit</button>
            <br>
            <br>
        </div>

    </form>
</template>

<script>
    import axios from 'axios';
    export default {

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
