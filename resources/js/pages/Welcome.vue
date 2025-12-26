<script setup>
    import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

    const props = defineProps({
        names: Array,
        age: Number,
    });

    const units = ref(4);

    // const form = ref({
    //     id: null,
    //     name: null
    // })

    const form = useForm({
        name: null,
        email: null,
        password: null
    })

    // function addName() {
    //     const newName = {
    //         id: form.value.id,
    //         name: form.value.name
    //     }

    //     props.names.push(newName); 
    // }

    function store() {
        form.post('/store', {
            onSuccess: () => {
                form.reset();
            },
        });
    }


    

</script>

<template>

    <main class="max-w-lg w-full space-y-8 h-screen mx-auto  bg-black text-white flex flex-col items-center justify-center">
        
        <div>
            <h1>Form</h1>

            <form @submit.prevent="store" class="space-y-2">
                <div class="flex-col flex">
                    <input type="text" v-model="form.name" class="bg-gray-200 text-gray-800 rounded p-2" placeholder="enter name">
                    <span v-if="form.errors.name" class="text-red-400 text-xs"> {{ form.errors.name }}</span>
                </div>

                <div class="flex-col flex">
                    <input type="text" v-model="form.email" class="bg-gray-200 text-gray-800 rounded p-2" placeholder="enter email">
                    <span v-if="form.errors.email" class="text-red-400 text-xs"> {{ form.errors.email }}</span>
                </div>

                <div class="flex-col flex">
                    <input type="text" v-model="form.password" class="bg-gray-200 text-gray-800 rounded p-2" placeholder="enter password">
                    <span v-if="form.errors.password" class="text-red-400 text-xs"> {{ form.errors.password }}</span>
                </div>

                <button type="submit" class="px-3 py-1.5 bg-green-400 text-black">Submit</button>
            </form>
        </div>

        <div>
            <ul>
                <li v-for="name in props.names">{{ name.id }} {{ name.name}}</li>
            </ul>
        </div>
      
    </main>

    
      

</template>