<template>
  <div class="content-wrapper">
    <work v-if="this.$store.state.pageId === 0"></work>
    <service v-if="this.$store.state.pageId === 1"></service>
    <about v-if="this.$store.state.pageId === 2"></about>
    <skill v-if="this.$store.state.pageId === 3"></skill>
  </div>
</template>

