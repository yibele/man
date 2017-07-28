{% block content %}

    <div id="app">
        <div class="container">
            <div class="wrap-1 col-md-8 col-md-offset-1">
                <div class="letter">
                    {{ image('img/index/letter.png','v-on:mouseover':'trans','id' : 'letter','v-bind:class' : 'trans_class') }}
                    <div class="btn1">
                        写信
                    </div>
                </div>
                <div class="chuo">
                    {{ image('img/index/index_12.png') }}
                </div>
                <div class="card">
                    {{ image('img/index/index_09.png') }}
                    <div class="btn1">
                        寄明信片
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

        const vm = new Vue({
            el: "#app",
            data: {
                transX: 0,
                trans_class : '',
                turn_back: 'turn_back',
                turn_to: 'turn_to'
            },
            methods: {
                trans: function () {
                    this.trans_class = 'turn_back';
                },
                trans_back : function () {
                },
                trans_to : function () {

                }
            },
            delimiters: ['${', '}']
        })
    </script>
{% endblock %}

