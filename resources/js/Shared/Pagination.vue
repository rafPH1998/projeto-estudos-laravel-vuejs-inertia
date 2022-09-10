<template>
    <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px">
            <li>
                <Link 
                    v-if="data.prev_page_url !== null" 
                    :href="data.prev_page_url" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg 
                    border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 
                    dark:hover:bg-gray-700 dark:hover:text-white">Anterior
                </Link>
            </li>
            <li>
                <Link
                    v-for="link in cleanLinks" :key="link.label"
                    :href="link.url"
                    :class="{ 'text-blue-600 bg-blue-50': link.active }"

                    class="py-2 px-3 leading-tight text-gray-500 bg-white border 
                    border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 
                    dark:hover:bg-gray-700 dark:hover:text-white">
                    {{ link.label }}
                </Link >
            </li>
            <li>
                <Link 
                    v-if="data.next_page_url !== null" 
                    :href="data.next_page_url" class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white 
                    rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 
                    dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Próximo
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        name: "Pagination",
        props: {
            data: Object,
        },
        components: {
            Link,
        },
        computed: {
            cleanLinks() {
                const cleanLinks = [...this.data.links];
                cleanLinks.shift();
                cleanLinks.pop();
                return cleanLinks;
            }
        }
    };
</script>
