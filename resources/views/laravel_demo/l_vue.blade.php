@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">2018 WEB技术试验场</h1>
            <p class="lead blog-description">vue 实验</p>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <summary>vue绑定数据</summary>
                <div id="app-1">
                    @{{ message }}
                </div>
                <div id="app-2">
                  <span v-bind:title="message">
                    鼠标悬停几秒钟查看此处动态绑定的提示信息！
                  </span>
                </div>
                <div id="app-3">
                    <p v-if="seen">现在你看到我了</p>
                </div>
                <div id="app-4">
                    <ol>
                        <li v-for="todo in todos">
                            @{{ todo.text }}
                        </li>
                    </ol>
                </div>
                <div id="app-5">
                    <p>@{{ message }}</p>
                    <button v-on:click="reverseMessage">逆转消息</button>
                </div>
                <div id="app-6">
                    <p>@{{ message }}</p>
                    <input v-model="message">
                </div>


                <div id="app-7">
                    <ol>
                        <!--
                          现在我们为每个 todo-item 提供 todo 对象
                          todo 对象是变量，即其内容可以是动态的。
                          我们也需要为每个组件提供一个“key”，晚些时候我们会做个解释。
                        -->
                        <todo-item
                                v-for="item in groceryList"
                                v-bind:todo="item"
                                v-bind:key="item.id">
                        </todo-item>
                    </ol>
                </div>

                <hr/>

                <div id="app-router" style="width: 400px; height: 400px; background: #ccc">
                    <h1>Hello Vue Router</h1>
                    <p>
                        <!-- 使用 router-link 组件来导航. -->
                        <!-- 通过传入 `to` 属性指定链接. -->
                        <!-- <router-link> 默认会被渲染成一个 `<a>` 标签 -->
                        <router-link to="/foo">Go to Foo</router-link>
                        <router-link to="/bar">Go to Bar</router-link>
                    </p>
                    <!-- 路由出口 -->
                    <!-- 路由匹配到的组件将渲染在这里 -->
                    <transition name="slide-fade">
                    <router-view></router-view>
                    </transition>
                </div>


            </div>
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                @include('block.doclist')
                @include('block.suggest')
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script>
        var app = new Vue({
            el: '#app-1',
            data: {
                message: 'Hello Vue!'
            }
        })
        var app2 = new Vue({
            el: '#app-2',
            data: {
                message: '页面加载于 ' + new Date().toLocaleString()
            }
        })

        var app3 = new Vue({
            el: '#app-3',
            data: {
                seen: true
            }
        })
        var app4 = new Vue({
            el: '#app-4',
            data: {
                todos: [
                    { text: '学习 JavaScript' },
                    { text: '学习 Vue' },
                    { text: '整个牛项目' }
                ]
            }
        })
        var app5 = new Vue({
            el: '#app-5',
            data: {
                message: 'Hello Vue.js!'
            },
            methods: {
                reverseMessage: function () {
                    this.message = this.message.split('').reverse().join('')
                }
            }
        })
        var app6 = new Vue({
            el: '#app-6',
            data: {
                message: 'Hello Vue!'
            }
        })
        Vue.component('todo-item', {
            props: ['todo'],
            template: '<li>@{{ todo.text }}</li>'
        })
        var app7 = new Vue({
            el: '#app-7',
            data: {
                groceryList: [
                    { id: 0, text: '蔬菜' },
                    { id: 1, text: '奶酪' },
                    { id: 2, text: '随便其他什么人吃的东西' }
                ]
            }
        })
    </script>

    <script>
        // 0. 如果使用模块化机制编程，導入Vue和VueRouter，要调用 Vue.use(VueRouter)

        // 1. 定义（路由）组件。
        // 可以从其他文件 import 进来
        const Foo = { template: '<div>foo</div>' }
        const Bar = { template: '<div>bar</div>' }

        // 2. 定义路由
        // 每个路由应该映射一个组件。 其中"component" 可以是
        // 通过 Vue.extend() 创建的组件构造器，
        // 或者，只是一个组件配置对象。
        // 我们晚点再讨论嵌套路由。
        const routes = [
            { path: '/foo', component: Foo },
            { path: '/bar', component: Bar }
        ]

        // 3. 创建 router 实例，然后传 `routes` 配置
        // 你还可以传别的配置参数, 不过先这么简单着吧。
        const router = new VueRouter({
            routes // （缩写）相当于 routes: routes
        })

        // 4. 创建和挂载根实例。
        // 记得要通过 router 配置参数注入路由，
        // 从而让整个应用都有路由功能
        const app_router = new Vue({
            router
        }).$mount('#app-router')

        // 现在，应用已经启动了！
    </script>
@stop
