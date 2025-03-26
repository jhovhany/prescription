<template>
  <div>
    <h1>{{ message }}</h1>
    <form @submit.prevent="generatePDF">
      <label for="name">Nombre:</label>
      <input type="text" id="name" v-model="name"><br><br>
      <label for="age">Edad:</label>
      <input type="number" id="age" v-model="age"><br><br>
      <span v-if="errors.length" class="error">
        <strong>Por favor corrige los siguientes errores:</strong>
        <ul>
          <li v-for="error in errors" :key="error">{{ error }}</li>
        </ul>
      </span>
      <input type="submit" value="Generar">
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: 'Generandor de una Receta Médica',
      name: '',
      age: null,
      errors: [],
      currentDate: new Date().toLocaleDateString('es-ES', { day: '2-digit', month: '2-digit', year: 'numeric' })
    };
  },
  methods: {
    validateForm() {
      this.errors = [];
      if (!this.name) {
        this.errors.push("El nombre es obligatorio.");
      }
      if (!this.age) {
        this.errors.push("La edad es obligatoria.");
      }
      return this.errors.length === 0;
    },
    generatePDF() {
      if (this.validateForm()) {
        const data = {
          name: this.name,
          age: this.age,
          currentDate: this.currentDate
        };
        fetch('/generate-pdf', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
        })
        .then(response => response.blob())
        .then(blob => {
          const url = window.URL.createObjectURL(blob);
          const a = document.createElement('a');
          a.style.display = 'none';
          a.href = url;
          a.download = 'receta_medica.pdf';
          document.body.appendChild(a);
          a.click();
          window.URL.revokeObjectURL(url);
        })
        .catch(error => console.error('Error:', error));
      }
    }
  }
};
</script>

<style scoped>
@import './styles.css';
</style>