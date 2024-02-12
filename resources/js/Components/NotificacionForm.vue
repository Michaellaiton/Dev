<template>
    <form @submit.prevent="submitForm">
      <div class="form-group">
        <label>Title</label>
        <input type="text" v-model="formData.title" class="form-control" placeholder="Enter your title here">
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" v-model="formData.description" class="form-control" placeholder="Enter description here">
      </div>
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          title: '',
          description: ''
        }
      };
    },
    methods: {
      submitForm() {
        axios.post('/api/notifications', this.formData)
          .then(response => {
            // Manejar la respuesta si es necesario
            console.log(response.data);
          })
          .catch(error => {
            // Manejar errores si es necesario
            console.error(error);
          });
      }
    }
  }
  </script>
  