{% extends 'layout/index.volt' %} {% block content %}
<div id='letter' class="container1">
  <div class="letter_menu">
    <!-- drop down button -->
    <div class='dropdown is-active'>
      <ul>
        <li class="active menu-item" aria-haspopup="true" aria-controls="dropdown-menu">信纸 <span class='fa fa-sort-desc'></span></li>
        <li class="menu-item">字体 <span class="fa fa-sort-desc"></span></li>
        <li class="menu-item">字号 <span class="fa fa-sort-desc"></span></li>
        <li class="menu-item">A <span class="fa fa-sort-desc"></span></li>
        <li class="menu-item">添加图片 <span class="fa fa-sort-desc"></span></li> </ul>
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

  <div id="letter_content" :style="letter_content_background">
    <div id="letter_container">
      <div id="letter_neirong" contenteditable="true" name='letter_neirong'>
        亲爱的______ :
      </div>
    </div>
  </div>
</div>
<button class="btn1">下一步：设置收信信息</button> {% endblock %}

{% block javascript %}
  {{ javascript_include('js/colorpicker.js')}}
  {{ javascript_include('js/letter.js') }}
  {{ javascript_include('js/jquery-ui.min.js')}}
  {{ javascript_include('js/jquery.slides.js')}}
{% endblock %}

{% block style %}
  {{ stylesheet_link('/js/jquery-ui.min.css') }}
  {{ stylesheet_link('/css/colorpicker.css')}}
{% endblock %}

