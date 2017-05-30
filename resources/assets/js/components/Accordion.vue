<template>
    <div>
        <h1>Patients</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="patient in patients"
                    :class="{ 'active' : patient === selectedPatient }"
                    @click="showInfo(patient)">
                    <td>{{ patient.first_name }}</td>
                    <td>{{ patient.last_name }}</td>
                </tr>
            </tbody>
        </table>

        <div v-if="selectedPatient">
            <h1>{{ selectedPatient.first_name }} {{ selectedPatient.last_name }}</h1>

            {{ selectedPatient }}
        </div>
        <!-- <button @click="changeTitle">Click Me</button> -->
    </div>
</template>

<style>
    .active {
        background: #B4D455;
    }
</style>

<script>
    import axios from 'axios'

    export default {
        data () {
            return {
                selectedPatient: null,
                patients: [{
                    id: 1,
                    first_name: 'Joseph',
                    last_name: 'Gayod'
                }, {
                    id: 2,
                    first_name: 'Selena',
                    last_name: 'Gomez'
                }]
            }
        },
        methods: {
            showInfo (patient) {
                axios.get('/patients/' + patient.id).then(response => {
                    this.selectedPatient = response.data
                    // console.log(response.data)
                })
                // this.selectedPatient = patient
            },
            changeTitle () {
                this.title = 'Que estas!?'
            }
        }
    }
</script>