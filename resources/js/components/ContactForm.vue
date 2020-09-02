<template>
    <div class="container">
        <form method="POST" action="/contact/sendmessage">

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea name="message" id="message" class="form form-control" cols="30" rows="10" placeholder="Message" required></textarea>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>


export default {
    data() {
        return {
            loading:false
            
        }
    },
    mounted() {
        
    },
    methods: {
        
    },
    
}
</script>