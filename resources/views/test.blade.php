<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
    </head>
    <body>
            {{-- // ให้ตั้งคำถามว่าใช่ หรือ ไม่? --}}
            <div id="watch-example">
                <p>
                    Ask a yes/no question:
                    <input v-model="question">
                </p>
                <p>@{{ answer }}</p>
            </div>

            <div id="example">
                <div class="static"
                    v-bind:class="{ active: isActive, 'text-danger': hasError }">
               </div>
            </div>
        
            <div id="app-4">
              <ol>
                <li v-for="todo in todos">
                  @{{ todo.text }}
                </li>
              </ol>
            </div>

            <div id="components-demo">
              <button-counter>fdsfsdf</button-counter>
            </div>
       
            
    </body>
</html>
<script>

var watchExampleVM = new Vue({
    el: '#watch-example',
    data: {
      question: '',
      answer: 'I cannot give you an answer until you ask a question!'
    },
    watch: {

      question: function (newQuestion, oldQuestion) {
        this.answer = 'Waiting for you to stop typing...'
        this.debouncedGetAnswer()
      }
    },
    created: function () {

      this.debouncedGetAnswer = _.debounce(this.getAnswer, 500)
    },
    methods: {
      getAnswer:  function () {
        if (this.question.indexOf('?') === -1) {
          this.answer = 'Questions usually contain a question mark. ;-)'
          return
        }
        this.answer = 'Thinking...'
        var vm = this
        axios.get('https://yesno.wtf/api')
          .then(function (response) {
            vm.answer = _.capitalize(response.data.answer)
          })
          .catch(function (error) {
            vm.answer = 'Error! Could not reach the API. ' + error
          })
      }
    }
  })

var vm = new Vue({
  el: '#example',
    data: {
    isActive: true,
    hasError: false
    }
});

var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' }
    ]
  }
});

var n = new Vue({ 
  el: '#components-demo',
  data: function () {
    return {
      count: 0
    }
  },
  template: '<button @click="count++">You clicked me @{{ count }} times.</button>'
});

</script>