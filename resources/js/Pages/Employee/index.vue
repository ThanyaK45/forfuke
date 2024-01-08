<template>
    <div>
        <h1>Employee</h1>
        <ul>
            <li v-for="employee in emp" :key="employee.emp_no">
                {{ employee.emp_no }} {{ employee.first_name }} {{ employee.last_name }}
            </li>
        </ul>
        <h1>Departments</h1>
        <ul>
            <li v-for="department in dept" :key="department.id">
                {{ department.dept_name }}
            </li>
        </ul>
        <h1>Males Employee</h1>
        <ul>
            <li v-for="maleEmployee in male" :key="maleEmployee.emp_no">
                {{ maleEmployee.first_name }} {{ maleEmployee.last_name }}
            </li>
        </ul>
        <h1>Females Employee</h1>
        <ul>
            <li v-for="femaleEmployee in female" :key="femaleEmployee.emp_no">
                {{ femaleEmployee.first_name }} {{ femaleEmployee.last_name }}
            </li>
        </ul>
    </div>
</template>
<script setup>
   const { emp, dept, male, female } = defineProps(["emp", "dept", "male", "female"]);
</script>