<template>
    <div class="container">
        <!-- <form method="POST" action="/contact/sendmessage">  -->
        <form  @submit="sendMessage">

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input @keyup="buttonText = name" v-model="name" type="text" class="form-control" name="name"  placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input v-model="email" type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea v-model="message" name="message" id="message" class="form form-control" cols="30" rows="10" placeholder="Message" required></textarea>
                </div>
            <button v-if="formSending == false" type="submit" class="btn btn-primary">Submit</button>

            <div @click="buttonText = name" class="btn btn-info">{{buttonText}}</div>
            <div class="btn btn-success" v-if="formSending == true"> Sending Proses</div>
        </form>
    </div>
</template>

<script>


export default {
    data() {
        return {
            loading:false,
            name:null,
            email:null,
            message:null,
            formSending:false,
            buttonText:'Click me to change my text to name text'
            
        }
    },
    mounted() {
        
    },
    methods: {
        sendMessage(e){

            e.preventDefault();
            
            const self = this;
            self.formSending = true;

            Vue.axios.post('/contact/sendmessage/ajax',{
                name : self.name,
                email : self.email,
                message : self.message

            })
            .then(response =>{
                // alert(" thank you !");

                alert(response.data.message);
                self.formSending = false;

                self.name = null;
                self.email = null;
                self.message = null;
            })
            .catch(error =>{
                alert('sorry failed');
                console.log(e);
                self.formSending = false;
            })


        }
        
    },
    
}
</script>