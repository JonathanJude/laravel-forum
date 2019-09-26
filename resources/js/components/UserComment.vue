<template>
  <div class="card" style="margin-top: 30px;">
    <div class="card-header bg-success text-light">
      {{ user }}
      <small>- [{{ date }}]</small>
    </div>
    <div class="card-body">
      <p>{{ comment }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "user-component",
  props: ["user", "date", "comment"],
  data() {
    return {};
  },
  mounted() {
    console.log("component mounted");
  }
};
</script>
