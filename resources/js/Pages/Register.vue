<template>
    <layout>
        <div class="mt-10 flex flex-wrap">
            <div class="my-6 pr-0 lg:pr-2">
                <div class="leading-loose mt-2">
                    <h1 class="text-[25px] text-2x1 font-bold text-gray-700 mb-6 mt-4">Cadastrar usuário</h1>
                    <form class="w-full p-10 bg-white rounded shadow-xl" action="" method="POST" @submit.prevent="handleForm">

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" 
                                type="text" name="name" v-model="form.name" 
                                placeholder="Digite seu nome">    
                        <div v-if="errors.name" class="text-red-600 absolute">
                            <p>{{ errors.name}}</p>
                        </div>

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 
                                rounded mt-10" type="email" name="email" 
                                v-model="form.email" placeholder="Digite seu e-mail">
                        <div v-if="errors.email" class="text-red-600 absolute">
                            <p>{{ errors.email}}</p>
                        </div>
                              
                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-10" 
                                type="password" name="password" 
                                v-model="form.password" placeholder="Digite sua senha">
                        <div v-if="errors.password" class="text-red-600 absolute">
                            <p >{{ errors.password}}</p>
                        </div>

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-10" 
                                type="text" name="city" 
                                v-model="form.city" placeholder="Digite a cidade">
                        <div v-if="errors.city" class="text-red-600 absolute">
                            <p >{{ errors.city}}</p>
                        </div>

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-10" 
                                text="text" name="states" 
                                v-model="form.state" placeholder="Digite o estado">
                        <div v-if="errors.state" class="text-red-600 absolute">
                            <p >{{ errors.state}}</p>
                        </div>

                        <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded mt-10" 
                                text="password" name="country" 
                                v-model="form.country" placeholder="Digite o país">
                        <div v-if="errors.country" class="text-red-600 absolute">
                            <p >{{ errors.country}}</p>
                        </div>

                        <div class="mt-10">
                            <input type="submit" 
                                        class="cursor-pointer bg-blue-200 
                                        rounded-full hover:bg-blue-300 relative inline-block 
                                        px-3 py-1 font-semibold text-blue-900 leading-tight" 
                                        value="Cadastrar"
                            >
                        
                            <Link :href="route('home')" 
                                    class="cursor-pointer ml-2 bg-red-200 rounded-full 
                                    hover:bg-red-300 relative inline-block px-3 py-1 
                                    font-semibold text-red-900 leading-tight">
                                Voltar
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../Layout.vue'
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Layout,
            Link
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
                    city: null,
                    state: null,
                    country: null,
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