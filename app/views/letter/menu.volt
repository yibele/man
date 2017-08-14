<div class="letter_img_lt menu_active" id="xinzhi">
  <!-- 信件缩略 -->
  <div class="btn_lf" @click='scrollLeft'>
    <span class="fa fa-chevron-left fa-5x"></span>
  </div>

  <div class="letter_img_lt1" id='letter_tums'>
    {% for xinzhi in xinzhis %}
    <div class="letter_img_detail">
      <img alt="" src="{{xinzhi}}" v-on:click='changeLetterBackground'>
    </div>
    {% endfor %}
  </div>

  <div class="btn_rt" @click = 'scrollRight'>
    <span class="fa fa-chevron-right fa-5x"></span>
  </div>
</div>

<div class="letter_img_lt" id="ziti">

  <div class="btn_lf">
    <span class='fa fa-chevron-left fa-5x'></span>
  </div>

  <div class="btn_rt">
    <span class="fa fa-chevron-right fa-5x"></span>
  </div>

</div>

<div class="letter_img_lt" id="zihao"></div>

<div class="letter_img_lt" id="A"></div>

<div class="letter_img_lt" id="tianjia"></div>