<template>
  <div class="heading-wrapper">
    <ul>
      <li v-on:click="showPageId(0)">works</li>
      <li v-on:click="showPageId(1)">service</li>
      <li v-on:click="showPageId(2)">about</li>
      <li v-on:click="showPageId(3)">skill</li>
    </ul>
    <div class="icon">
      <div class="twitter-icon">
        <a href="https://twitter.com/hosimiyaprog" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-twitter"></i>
        </a>
      </div>
      <div class="github-icon">
        <a href="https://github.com/hosimiya7" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    mounted() {
        console.log(this.$store.state.pageId)
    },
    methods: {
        showPageId(num) {
            this.$store.state.pageId = num
        }

    }
}
</script>