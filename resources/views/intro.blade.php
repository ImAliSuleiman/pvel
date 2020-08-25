<!DOCTYPE html>
<html>
  <head>
    <title>Vue Intro</title>
    <!-- <script src="https://unpkg.com/vue"></script> -->

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- production version, optimized for size and speed -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

  </head>
  <body>
    <div id="app">
      <p>@{{ hello }}</p>
      <span v-bind:title="hoverMessage">
        Hover your mouse over me for a few seconds to see my dynamically bound
        title!
      </span>
      <span v-if="seen">Now you see me</span>

      <ol>
        <li v-for="todo in todos">
          @{{ todo.title }}
        </li>
      </ol>

      <p>@{{ message }}</p>
      <button v-on:click="reverseMessage">Reverse Message</button>

      <p>@{{ reaction }}</p>
      <input v-model="reaction" />
      <p>Grocery by Components</p>
      <ol>
        <todo-item
          v-for="grocery in groceryList"
          v-bind:todo="grocery"
          v-bind:key="grocery.id"
        />
      </ol>
    </div>

    <script>
      Vue.component("todo-item", {
        props: ["todo"],
        template: "<li>@{{ todo.text }}</li>"
      });

      var app = new Vue({
        el: "#app",
        data: {
          hello: "Hello Vue!",
          hoverMessage:
            "You loaded this page on " + new Date().toLocaleString(),
          seen: true,
          todos: [
            { title: "Shoot long-expo over Morocco bridge" },
            { title: "Join skateboard group on Friday" },
            { title: "Link up with brothers on Sunday" }
          ],
          message: "Cool, right?",
          reaction: "So cool!",
          groceryList: [
            { id: 0, text: "Vegetables" },
            { id: 1, text: "Cheese" },
            { id: 2, text: "Eggs" },
            { id: 3, text: "Fish" },
            { id: 4, text: "Wheat Flour" }
          ]
        },
        methods: {
          reverseMessage: function () {
            this.message = this.message.split(" ").reverse().join(" ");
          }
        }
      });
    </script>
  </body>
</html>
