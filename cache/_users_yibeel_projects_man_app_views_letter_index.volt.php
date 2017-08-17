
  <?= $this->tag->stylesheetLink('/js/jquery-ui.min.css') ?>

<?= $this->partial('partials/header') ?>
<?= $this->partial('partials/nav') ?>
<?= $this->partial('partials/stars') ?>

<div id='app'>

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
          <?= $this->tag->image(['img/letter/letter_menu_13.png']) ?>
        </li>
        <li class="float_rt" style="padding-top: 8px;">
          <?= $this->tag->image(['img/letter/letter_menu_11.png']) ?>
        </li>
        <li class="float_rt" style="padding-top: 8px;">
          <?= $this->tag->image(['img/letter/letter_menu_09.png']) ?>
        </li>
        <li class="float_rt" style="padding-top: 8px;">
          <?= $this->tag->image(['img/letter/letter_menu_07.png']) ?>
        </li>
      </ul>
    </div>
  </div>

  <?= $this->partial('letter/menu') ?>

  <div id="letter_content" :style="letter_content_background">
    <div id="letter_container" contenteditable="true">
      这里是测试文件
    </div>
  </div>
</div>
<button class="btn1">下一步：设置收信信息</button> 
</div>

  <?= $this->tag->javascriptInclude('js/letter.js') ?>
  <?= $this->tag->javascriptInclude('js/jquery-ui.min.js') ?>

<?= $this->partial('partials/footer') ?>
