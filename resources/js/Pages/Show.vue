<template>
    <h1 class="text-2x1 font-bold text-gray-700 mb-6 mt-4">{{ user.name }}</h1>
    <Link :href="route('home')">
        <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
            <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
            <span class="relative">Voltar</span>
        </span>
    </Link>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        E-mail
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Cidade
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Estado
                    </th>
                    <th scope="col" class="py-3 px-6">
                        País
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="py-4 px-6">
                        {{ user.name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ user.email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ user.city }}
                    </td>
                    <td class="py-4 px-6">
                        {{ user.state }}
                    </td>
                    <td class="py-4 px-6">
                        {{ user.country }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link
        },
        props: {
            user: Object
        }
    }
</script>