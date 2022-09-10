<template>
    <layout>
        <div class="mt-10 flex flex-wrap">
            <div class="my-6 pr-0 lg:pr-2">
                <div class="leading-loose mt-2">
                    <form class="w-full p-10 bg-white rounded shadow-xl" action="" method="POST" @submit.prevent="handleForm">

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-3" type="text" name="name" v-model="form.name" placeholder="Digite seu nome">
                        <div class="w-full">
                            <p class="text-red-600" v-if="errors.name">{{ errors.name}}</p>
                        </div>

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-3" type="email" name="email" v-model="form.email" placeholder="Digite seu e-mail">
                        <div class="w-full">
                            <p class="text-red-600" v-if="errors.email">{{ errors.email}}</p>
                        </div>
                              
                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-3" type="password" name="password" v-model="form.password" placeholder="Digite sua senha" >
                        <div class="w-full">
                            <p class="text-red-600" v-if="errors.password">{{ errors.password}}</p>
                        </div>

                        <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded mt-3" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../Layout.vue'

    export default {
        components: {
            Layout
        },
        props: {
            errors: Object
        },
        data: () => {
            return {
                form: {
                    name: null,
                    email: null,
                    password: null,
                }
            }
        },

        methods: {
            handleForm() {
                this.$inertia.post('/create', this.form);
            }
        }
    }
</script>