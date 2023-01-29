<template>
  <HeaderSection />
  <TestemonialSection />
  <BodySection />
  <FaqSection />

</template>

<script setup>
  import HeaderSection from "./HeaderSection.vue"
  import FaqSection from "./FaqSection.vue"
  import TestemonialSection from "./TestemonialSection.vue"
  import BodySection from "./BodySection.vue"
</script>

<script>
import Layout from '../Layout/Layout.vue'

export default {
  // Using shorthand syntax...
  layout: Layout,
}
</script>