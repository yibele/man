<div class="letter_img_lt menu_active" id="xinzhi">
  <div class='btn_lf slidesjs-previous  slidesjs-navigation'>
  </div>

  {% for x in xinzhis %}
  <div class="letter_img_lt1" id='letter_tums'>
    {% for xinzhi in x %}
      <img src="/img/xinzhi/{{xinzhi['src']}}" class='letter_img_detail' alt="" @click='changeLetterBackground'>
    {% endfor %}
  </div>
  {% endfor %}

  <div class="btn_rt slidesjs-next  slidesjs-navigation">
  </div>
</div>

<div class="letter_img_lt menu_active" id="ziti" >
  <div class='btn_lf slidesjs-previous  slidesjs-navigation'>
  </div>
  {% for f in fonts %}
  <div class="fonts">
    {% for font in f %}
    <div class="fonts_lt">
      <img src="/img/fonts/{{font['imgSrc']}}" alt="{{font['fname']}}" class='font_img' onclick='changeFontFamily(event,"{{font['
        fname']}}","{{font['accesskey']}}","{{font['lineHeight']}}");'>
    </div>
    {% endfor %}
  </div>
  {% endfor %}
    <div class="btn_rt slidesjs-next  slidesjs-navigation">
  </div>
</div>

<div class="letter_img_lt" id="zihao">
  <div id="slider_container">
    <label for="slider" style=' display:inline-block;margin-right : 20px;color:#ccc;font-size : 16px;'>字号</label> -
    <div id="slider"></div> +
    <input type="text" id='amount' readonly style='display:inline-block'>
  </div>
</div>

<div class="letter_img_lt" id="A">

  <div class="btn_lf">
    <span class='fa fa-chevron-left fa-5x'></span>
  </div>

  <div class="" id="colors">
    <div id="letter_all_colors" style="background-image:url(/img/letter/all_colors_03.png)"></div>
    <div id="colorpickerHolder"></div>
    {% for color in letter_colors %}
    <div class="letter_color" style="background-color: {{color['value']}}"></div>
    {% endfor %}
  </div>
  <div class="btn_rt">
    <span class="fa fa-chevron-right fa-5x"></span>
  </div>
</div>
<div class="letter_img_lt" id="tianjia"></div>