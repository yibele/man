{% extends 'layout/index.volt' %}

{% block content %}
    <div id="app">
        <div class="container1">
            <div class="letter_menu">
                <!-- drop down button -->
                <div class='dropdown is-active'>
                    <ul>
                        <li class="active" aria-haspopup="true" aria-controls="dropdown-menu">信纸 <span
                                    class='fa fa-sort-desc'></span></li>
                        <li>字体 <span class="fa fa-sort-desc"></span></li>
                        <li>字号 <span class="fa fa-sort-desc"></span></li>
                        <li>A <span class="fa fa-sort-desc"></span></li>
                        <li>添加图片 <span class="fa fa-sort-desc"></span></li>
                    </ul>
                    <ul style="margin-left: 360px; line-height: 38px;">
                        <li class="float_rt" style="padding-top: 8px;">
                            {{ image('img/letter/letter_menu_13.png') }}
                        </li>
                        <li class="float_rt" style="padding-top: 8px;">
                            {{ image('img/letter/letter_menu_11.png') }}
                        </li>
                        <li class="float_rt" style="padding-top: 8px;">
                            {{ image('img/letter/letter_menu_09.png') }}
                        </li>
                        <li class="float_rt" style="padding-top: 8px;">
                            {{ image('img/letter/letter_menu_07.png') }}
                        </li>
                    </ul>
                </div>
            </div>

            {{ partial('letter/menu') }}

            <div class="letter_content">
            </div>
            <button class="btn1">下一步：设置收信信息</button>
        </div>
    </div>
{% endblock %}
