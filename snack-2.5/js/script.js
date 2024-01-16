const { createApp } = Vue

  createApp({
    data() {
      return {
        apiUrl: './server.php',
        apiResponse:''
      }
    },
    methods: {
      getValue(){
        axios.get(this.apiUrl, {
          params:{
            input1: '',
            input2: '',
            input3:''
          }
        }).then((response)=>{
          console.log(response.data)
        })
      }
    },
    created(){
      this.getValue()
    }
  }).mount('#app')