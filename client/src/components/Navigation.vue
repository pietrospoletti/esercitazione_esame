<template>
  <div class="flex max-w-screen-md mx-auto py-5">
    <div
      v-for="link in navLinks"
      :key="link.code"
      :class="{
        'bg-yellow-700': link.code == currentRouteName,
        'bg-gray-300 hover:bg-yellow-500': link.code !== currentRouteName
      }"
      @click="goToLink(link)"
      class="mr-8 cursor-pointer px-3 py-1 rounded-full"
    >
      {{ link.label }}
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      navLinks: [
        {
          label: "BookList",
          code: "books_list"
        },
        {
          label: "New Book",
          code: "books_create"
        },
      ]
    };
  },
  computed: {
    currentRouteName() {
      return this.$route.matched[0].name;
    }
  },
  methods: {
    goToLink(link) {
      this.$router.push({
        name: link.code
      });
    }
  }
};
</script>