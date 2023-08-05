<template>
    <div>
        <h2>Add New Company</h2>
        <form @submit.prevent="addCompany" enctype="multipart/form-data">
            <div>
                <label>Name:</label>
                <input type="text" v-model="name" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" v-model="email">
            </div>
            <div>
                <label>Logo:</label>
                <input type="file" accept="image/*" @change="onLogoChange">
            </div>
            <div>
                <label>Website:</label>
                <input type="url" v-model="website">
            </div>
            <div>
                <button type="submit">Add Company</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';


data() {
    return {
        name: '',
        email: '',
        logo: null,
        website: '',
        // Add other fields as needed
    };
},


methods: {
    addCompany() {
        const formData = new FormData();
        formData.append('name', this.name);
        formData.append('email', this.email);
        formData.append('logo', this.logo);
        formData.append('website', this.website);
        // Add other fields as needed

        axios.post('/api/companies', formData)
            .then(response => {
                // Handle success, e.g., show a success message or redirect to the companies list page
            })
            .catch(error => {
                console.error(error);
                // Handle error, e.g., show an error message
            });
    },
},




</script>