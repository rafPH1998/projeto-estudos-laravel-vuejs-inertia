<template>
    <main class="ml-10">
      <header>

        <div class="mt-5">
          <Link href="/" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Home</Link>
        </div>
        
        <div class="mt-5">
          <Link class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" href="/create">Register</Link>
        </div>

      </header>
      <article class="mt-5">
        <slot />
      </article>
    </main>
    
</template>
  
<script>
    import { Link } from '@inertiajs/inertia-vue3'

    export default {
        components: {
            Link,
        }
    }
</script>