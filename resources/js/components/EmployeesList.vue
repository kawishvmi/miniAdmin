<template>
    <div>
        <h2>Employees List</h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- Add other columns as needed -->
                </tr>
            </thead>
            <tbody>
                <tr v-for="employee in employees" :key="employee.id">
                    <td>{{ employee.first_name }}</td>
                    <td>{{ employee.last_name }}</td>
                    <td>{{ employee.company.name }}</td>
                    <td>{{ employee.email }}</td>
                    <td>{{ employee.phone }}</td>
                    <!-- Add other columns as needed -->
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            employees: [],
        };
    },
    created() {
        axios.get('/api/employees')
            .then(response => {
                this.employees = response.data;
            })
            .catch(error => {
                console.error(error);
            });
    },
};
</script>
