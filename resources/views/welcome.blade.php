<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .red{
                background: red;
            }
            .green{
                background: green;
            }
        </style>
    </head>
    <body>
        {{-- {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    hello
                </div> 

                
            </div>
        </div> --}}
        
        
        
            {{-- <button @click="className='red'">red</button> 
            <button @click="className='green'">green</button>
            
             <h1 :class="className">Title</h1>
             <h1 v-show="show">Title</h1><!-- v-show แสดง หรือ ซ่อน ค่า-->
            
            
             <input type="text" v-model="message" @keydown.enter="addName"> <!-- v-model by ข้อมูล -->
                <button @click="addName">add</button>
            <h1 id="h1"> @{{ message }} </h1>

                <ul>
                <li v-for="name in names">@{{ name }}</li><!-- v-for ลูป-->
                </ul>

                <h1> commputed </h1>
                <ul>
                    <li v-for="number in lessThan6Number">@{{ number }}</li>
                </ul> --}}
                {{-- เมื่อคลิกข้อความจะกลับด้าน --}}
      
        <div id="app1">
            <p>@{{ foo }}</p>
            <!-- this will no longer update `foo`! -->
            <button @click="foo='baz'">Change it</button>
        </div>

    </body>
    <script>
           

        var obj = {
                foo: 'bar',
            }
            Object.freeze(obj)
        new Vue({
            el: '#app1',
            data: obj
            });

    </script>   
</html>

 
