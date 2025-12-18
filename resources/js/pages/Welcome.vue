<script setup>
    import { ref } from 'vue';

    const age = ref(20);

    const gender = ref('Male');

</script>

<template>

    <main class="max-w-lg w-full mx-auto h-80 bg-black text-white flex flex-col items-center justify-center mt-15">
        
        <div>
            <h1> {{ gender }}</h1>
            <h1> {{ age }}</h1>

            <img :src="image" alt="">
        </div>
        
        <div>
            <h1>Vue Directives</h1>
            <ul>
                <!-- <li>v-bind</li>
                <li>v-if</li>
                <li>v-else-if</li>
                <li>v-else</li>
                <li>v-show</li> -->
                <li>v-for</li>
                <li>v-on</li>
            </ul>

            <!-- <div>
                <h2 v-if="age == 20"> My name in Mary </h2>
                <h2 v-else-if="age == 0"> My name in John </h2>
                <h2 v-else> My name in James </h2>
            </div>

            <h2 v-show="age == 20"> My name in Wisdom </h2> -->

            <!-- <ul class="mt-3">
                <li v-for="n in names" :key="n.id"> {{ n.name }}</li>
            </ul> -->

        </div>
      
    </main>

</template>