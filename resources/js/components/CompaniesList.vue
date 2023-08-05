<template>
  <div>
    <h1>Companies List</h1>
    <table>
      <!-- Table headers here -->
      <tbody>
        <tr v-for="company in companies" :key="company.id">
          <td>{{ company.name }}</td>
          <td>{{ company.email }}</td>
          <td>
            <img :src="'/storage/' + company.logo" alt="Company Logo" width="50" height="50">
          </td>
          <td>{{ company.website }}</td>
    
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    companies: Array, // Pass the companies data as a prop
  },
};
</script>

<style>
/* Add your custom CSS styles here */
</style>
