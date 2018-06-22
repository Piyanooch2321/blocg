<template>
    <div>
        ---- ลูปจาก item message -----
        <ul>
        <li v-for="item in items" :key="item">
            {{ item.message }}</li>
        </ul>
        
        ---- ลูปจาก item message เรียก key กับ value -----
        <ul>
            <li v-for="(value, key) in object" :key="key" :value="value" >
               {{ key }} : {{ value }}
            </li>
        </ul>
        ---- ลูป number เลขคู่ -----
        <li v-for="n in evenNumbers" :key="n">{{ n }}</li>


        <!-- 222222 -->
        <form v-on:submit.prevent="addNewTodo">
            <label for="new-todo">Add a todo</label>
            <input
            v-model="newTodoText"
            id="new-todo"
            placeholder="E.g. Feed the cat"
            >
            <button>Add</button>
        </form>
        <ul>
            <li
            is="todo-item"
            v-for="(todo, index) in todos"
            v-bind:key="todo.id"
            v-bind:title="todo.title"
            v-on:remove="todos.splice(index, 1)"
            ></li>
        </ul>

        <button v-on:click="counter += 1">counter</button>
        <p>The button above has been clicked {{ counter }} times.</p>
        <button v-on:click="sum += 1">sum</button>
        <p>The button above has been clicked {{ sum }} times.</p>
        <button v-on:click="counter * sum">counter+sum</button>
        <p>The button above has been clicked {{ counter }}*{{ sum }}={{counter * sum}} times.</p>

        <ol>
            <list-item v-for="item in items" v-bind:todo="item" v-bind:key="item.id">
                {{ item.message }}
            </list-item>
        </ol>
        <br>
        <input v-model="newItem" />
        <button v-on:click="addToList">Add Item</button>

        <p-button></p-button>
        <todo-item></todo-item>
    </div> 

       
</template>

<script>

import PButton from './Pbutton.vue'
//import todoitem from './todo.vue'

export default {
    data() {
        return { 
            numbers: [ 1, 2, 3, 4, 5 ],
            items: [
                { message: 'Foo' },
                { message: 'Bar' }
            ],
            object: {
                firstName: 'John',
                lastName: 'Doe',
                age: 30
            },
            newTodoText: '',
            todos: [
            {
                id: 1,
                title: 'Do the dishes',
            },
            {
                id: 2,
                title: 'Take out the trash',
            },
            {
                id: 3,
                title: 'Mow the lawn'
            }
            ],
            nextTodoId: 4,
            counter: 0,
            sum:0
        }
    },

    methods: {
        addNewTodo: function () {
            this.todos.push({
                id: this.nextTodoId++,
                title: this.newTodoText
            })
            this.newTodoText = ''
            },
            addToList: function() {
            this.items.push({
                text: this.newItem
            })
            }
        
    },

    components: {
        'p-button': PButton
    },

    computed: {
        reversedMessage: function () {
        return this.message.split('').reverse().join('')
            },
        evenNumbers: function () {
        return this.numbers.filter(function (number) {
        return number % 2 === 0
            })
        }
    }

}
</script>

<style>
.hello {
    color: blue;
}

</style>

