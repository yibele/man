const vm = new Vue({
  el: "#app",
  data: {
    /**
     * 首页信件转动特效
     */
    trans_class: '',
    trans_class1: '',
    letter: 'img/index/letter.png',
    letter_front: 'img/index/letter.png',
    letter_back: 'img/index/letter_back_03.png',
    letter_back_02: 'img/index/letter_back_02.png',
    card: 'img/index/card.png',
    card_front: 'img/index/card.png',
    card_back: 'img/index/card_back.png',
    card_back_03: 'img/index/card_back_03.png',
    tag1: 0,
    tag: 0,
    count: 0,
    /**
     * 写信页面
     */
    letter_content_background: {
      backgroundImage: 'url(/img/xinzhi/xinzhi_1.jpg)',
      backgroundSize: 'contain'
    },
    pStyle: {

    },
  },
  beforeMount: function() {},
  mounted: function() {
    var config = {
      isCol: 'true',
      // p 标签的属性
      colNum: 8,
      marginTop: 0,
      marginBottom: 0,
      marginLeft: '48px',
      marginRight: '68px',
      fontSize: '20px',
      colWidth: '116px',
      // 容器的属性
      paddingTop: '120',
      paddingBottom: '120',
      paddingLeft: '97',
      paddingRight: '97',
      width: '100%',
      height: '100%'
    }

    this.initContainer(config);

  },
  methods: {
    turn_to: function(event, i) {
      if (i == 0) {
        if (this.tag == 0) {
          this.tag = 1;
          this.trans_class = 'turn-0-180';
          setTimeout(this.chageImg, 750, this.letter_back, i);
          setTimeout(this.chageImg, 1400, this.letter_back_02, i);
          setTimeout(this.turn_back, 4000, i);
        }
      } else {
        if (this.tag1 == 0) {
          this.tag1 = 1;
          this.trans_class1 = 'turn-0-180';
          setTimeout(this.chageImg, 750, this.card_back_03, i);
          setTimeout(this.chageImg, 1490, this.card_back, i);
          setTimeout(this.turn_back, 4000, i);
        }
      }
    },
    chageImg: function(img, i) {
      if (i == 0) {
        this.letter = img;
      } else {
        this.card = img;
      }
    },
    changeLetterBackground: function(e) {
      var xinzhi = e.currentTarget.src;
      var xinzhi_tum = xinzhi.split('/').pop();
      xinzhi_tum = xinzhi_tum.slice(0, -8);
      xinzhi_tum = 'url(/img/xinzhi/' + xinzhi_tum + '.jpg)';
      this.letter_content_background = {
        'backgroundImage': xinzhi_tum,
        'backgroundSize': 'contain'
      };
    },
    turn_back: function(i) {
      if (i == 0) {
        if (this.tag == 1) {
          let that = this;
          this.trans_class = 'turn-180-0';
          this.letter = this.letter_back;
          setTimeout(this.chageImg, 745, this.letter_front, 0);
          setTimeout(function() {
            that.tag = 0
          }, 1500);
        }
      } else {
        if (this.tag1 == 1) {
          let that = this;
          this.trans_class1 = 'turn-180-0';
          this.card = this.card_back_03;
          setTimeout(this.chageImg, 745, this.card_front, 1);
          setTimeout(function() {
            that.tag1 = 0
          }, 1500);
        }
      }
    },
    initContainer: function(config) {
      var letter_container = document.getElementById('letter_container');
      letter_container.style.paddingTop = config.paddingTop + 'px';
      letter_container.style.paddingBottom = config.paddingBottom + 'px';
      letter_container.style.paddingLeft = config.paddingLeft + 'px';
      letter_container.style.paddingRight = config.paddingRight + 'px';
      letter_container.style.width = config.width;
      letter_container.style.height = config.height;
    },

    colors: function(colors) {

    }
  },
  delimiters: ['${', '}']
})


//------------end of vue ------------------//

window.onload = function() {
  var height = $(document.body).height();
  var star = $('.stars').height(height);
  $('.twinkling').height(height);
};

/* 客服modal开关 */
function showModal() {
  $('#kefu').show();
}

function hideModal() {
  $('#kefu').hide();
}

/* 信件编辑部分 */
$('.dropdown li').click(function() {
  $(this).addClass('active').siblings().removeClass('active');
  var index = $(this).index();
  for (let i = 0; i < 4; i++) {
    $('.letter_img_lt').removeClass('menu_active');
  }
  $('.letter_img_lt').addClass(function(j, oldClass) {
    if (j == index) {
      return 'menu_active';
    }
  })
});

$('.letter_img_detail').click(function() {
  var siblings = $(this).siblings();
  $(this).addClass('active');
  siblings.removeClass('active');
})

$(".letter_color").click(function() {
  var color = this.style.backgroundColor;
  var letter_container = document.getElementById('letter_container');
  letter_container.style.color = color;
  var siblings = $(this).siblings();
  $(this).addClass('active');
  for (var i = 0; i < siblings.length; i++) {
    $(siblings[i]).removeClass('active');
  }
})

/** 信件调色板 */

$('#letter_all_colors').ColorPicker({
  onShow : function (colpkr) {
    $(colpkr).fadeIn(500);
    return false;
  },
  onHide : function (colpkr) {
    $(colpkr).fadeOut(500);
    return false;
  },
  onChange : function (hex,hsb){
    $("#letter_container").css('color','#'+hsb);
  }
})