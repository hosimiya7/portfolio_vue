<template>
  <div class="heading-wrapper">
    <ul>
      <li v-on:click="showPageId(0)" v-bind:class="{ line: getPageId() === 0}">works</li>
      <li v-on:click="showPageId(1)" v-bind:class="{ line: getPageId() === 1}">service</li>
      <li v-on:click="showPageId(2)" v-bind:class="{ line: getPageId() === 2}">about</li>
      <li v-on:click="showPageId(3)" v-bind:class="{ line: getPageId() === 3}">skill</li>
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
    },
    methods: {
        showPageId(num) {
            this.$store.state.pageId = num
        },
        getPageId(){
          return this.$store.state.pageId
        }

    }
}
</script>