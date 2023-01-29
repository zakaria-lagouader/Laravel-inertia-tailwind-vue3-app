<template>
  <HeaderSection />
  <ContactSection />
  <MapSection />

</template>

<script setup>
  import HeaderSection from "./HeaderSection.vue"
  import ContactSection from "./ContactSection.vue"
  import MapSection from "./MapSection.vue"
</script>

<script>
import Layout from '../Layout/Layout.vue'

export default {
  // Using shorthand syntax...
  layout: Layout,
}
</script>