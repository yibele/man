{% extends 'layout/index.volt' %}

{% block content %}

    <div class='container1'>
        <div class='myletter_title'>
            <button>我的慢递</button>
             &nbsp &nbsp| &nbsp &nbsp 
            <button>我的明信片</button>
        </div>
        <div class='myletter_content'>
            <div class='myletter_content_menu'>
                <div class='time'>
                    写信日期: 2017-02-01
                </div>
                <div class='menu'>
                    <button>修改收信人信息</button>
                    <button>继续编辑</button>
                    <button>续单</button>
                    <button>下载信件</button>
                    <button>查看信件</button>
                </div>
            </div>
            <div class='myletter_content_detail'>

                <div class='img'></div>
                <div class='content'>
                    <p>物流单号:</p>
                    <p>当前状态:</p>
                    <p>寄信时间:</p>
                    <p>收信人姓名:</p>
                    <p>收信人电话:</p>
                    <p>收信人地址:</p>
                </div>
                
            </div>
        </div>
    </div>

{% endblock %}
