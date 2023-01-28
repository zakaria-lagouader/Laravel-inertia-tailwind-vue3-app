<template>
    <HeroSection />
    <FeaturesSection />
    <BlogSection />
    <JoinSection />
    <ContactSection />

</template>

<script setup>
    import HeroSection from "./HeroSection.vue"
    import FeaturesSection from "./FeaturesSection.vue"
    import BlogSection from "./BlogSection.vue";
    import JoinSection from "./JoinSection.vue";
    import ContactSection from "./ContactSection.vue";

    // import { computed } from 'vue'
    // import { usePage } from '@inertiajs/vue3'

    // const client = computed(() => usePage().props.client)
    // console.log(client.value);
</script>

<script>
import Layout from '../Layout/Layout.vue'

export default {
  // Using shorthand syntax...
  layout: Layout,
}
</script>