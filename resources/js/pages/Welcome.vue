<script setup>
    import { ref } from 'vue';

    const props = defineProps({
        names: Array,
        age: Number,
    });

    const units = ref(4);

    const form = ref({
        id: null,
        name: null,
        class: null,
        term: null,
    });

    function addName(){
        const newName = {
            id: form.value.id,
            name: form.value.name,
        };

        props.names.push(newName);
    }

    const lists = ref([
        { class: 1, term: 'third'}
    ]);

    function addDetail(){
        const newDetail = {
            class: form.value.class,
            term: form.value.term,
        };

         lists.value.push(newDetail);
    }


</script>

<template>

    <main class="max-w-lg w-full mx-auto  bg-black text-white flex flex-col items-center justify-center mt-15">
        
        <div>
            <h1>Vue Form</h1>
            <ul>
                <li></li>
            </ul>

            <form  class="space-y-5 flex flex-col" v-on:submit.prevent="addName">


                <input type="text" placeholder="enter first name" v-model="form.id" class="bg-gray-200 text-black border border-gra-300 rounded p-1" />
                <input type="text" placeholder="enter last name" v-model="form.name" class="bg-gray-200 text-black border border-gra-300 rounded p-1" />
                <!-- <input type="text" placeholder="enter gender" v-model="form.gender" class="bg-gray-200 text-black border border-gra-300 rounded p-1" /> -->

                <button type="submit" class="bg-blue-400 text-white px-3 py-1.5 rounded">Submit</button>
            </form>

            <ul>
                <li v-for="name in props.names">{{ name.id }} {{ name.name}}</li>
            </ul>

            <form  class="space-y-5 flex flex-col" v-on:submit.prevent="addDetail">


                <input type="text" placeholder="enter first name" v-model="form.class" class="bg-gray-200 text-black border border-gra-300 rounded p-1" />
                <input type="text" placeholder="enter last name" v-model="form.term" class="bg-gray-200 text-black border border-gra-300 rounded p-1" />

                <button type="submit" class="bg-blue-400 text-white px-3 py-1.5 rounded">Submit</button>
            </form>

            <ul>
                <li v-for="list in lists">{{ list.class }} {{ list.term}}</li>
            </ul>



        </div>
      
    </main>

</template>