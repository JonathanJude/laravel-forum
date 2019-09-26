<template>
  <div class="card" style="margin-top: 30px;">
    <div class="card-header bg-success text-light">#{{ index }} - by {{ user }}</div>
    <div class="card-body">
      <h4>
        <b>
          <a v-bind:href="path">{{ title }}</a>
        </b>
      </h4>
      <span class="text-muted text-small">{{ date }}</span>
      -
      <span class="text-muted text-small">{{comments}} Comments</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "topic-component",
  props: ["index", "path", "user", "title", "date", "comments"],
  data() {
    return {};
  },
  mounted() {
    console.log("component mounted");
  }
};
</script>
