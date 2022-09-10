<template>
    <layout>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                <li v-for="user in users.data" :key="user.id">
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center justify-between">
                        <p class="text-sm font-medium text-indigo-600 truncate">
                            {{ user.name }}
                        </p>
                        <!-- <div class="ml-2 flex-shrink-0 flex">
                            <p
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                            >
                            Open NOW! 🍺
                            </p>
                        </div> -->
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: solid/location-marker -->
                                <svg
                                    class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                    fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"
                                    />
                                </svg>
                                {{ user.city }}, {{ user.state }}, {{ user.country }}, 
                                </p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                <!-- <p>Quantidade de cervejas: {{ b.beers_count }}</p> -->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="px-6 pb-5 pt-5">
                <pagination :data="users"></pagination>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../Layout.vue'
    import Pagination from '../Shared/Pagination.vue'

    export default {
        components: {
            Layout,
            Pagination
        },
        props: {
            users: Object
        }
    }
</script>