<template>
    <div>
        <h2>Add New Employee</h2>
        <form @submit.prevent="addEmployee">
            <div>
                <label>First Name:</label>
                <input type="text" v-model="firstName" required>
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" v-model="lastName" required>
            </div>
            <div>
                <label>Company:</label>
                <select v-model="companyId" required>
                    <option v-for="company in companies" :value="company.id" :key="company.id">{{ company.name }}</option>
                </select>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" v-model="email">
            </div>
            <div>
                <label>Phone:</label>
                <input type="tel" v-model="phone">
            </div>
            <div>
                <button type="submit">Add Employee</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            firstName: '',
            lastName: '',
            companyId: null,
            email: '',
            phone: '',
            companies: [], // An array to store the list of companies for the dropdown
        };
    },
    created() {
        this.fetchCompanies();
    },
    methods: {
        fetchCompanies() {
            axios.get('/api/companies')
                .then(response => {
                    this.companies = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
        addEmployee() {
            const employeeData = {
                first_name: this.firstName,
                last_name: this.lastName,
                company_id: this.companyId,
                email: this.email,
                phone: this.phone,
            };

            axios.post('/api/employees', employeeData)
                .then(response => {
                    // Handle success, e.g., show a success message or redirect to the employees list page
                })
                .catch(error => {
                    console.error(error);
                    // Handle error, e.g., show an error message
                });
        },
    },
};
</script>
