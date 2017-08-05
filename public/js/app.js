const vm = new Vue({
    el: "#app",
    data: {
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
        letter_content_background : {
            background:'url(/img/xinzhi/xinzhi_1.jpg)',
            backgroundSize: 'contain'
        },
        xinzhis : ''
    },
    mounted : function () {
        this.xinzhis = "{{xinzhis}}";
        this.test();
    },
    methods: {
        turn_to: function (event, i) {
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
        chageImg: function (img, i) {
            if (i == 0) {
                this.letter = img;
            } else {
                this.card = img;
            }
        },
        test : function () {
            for(xinzhi in this.xinzhis) {
                console.log(xinzhi);
            }
        },

        turn_back: function (i) {
            if (i == 0) {
                if (this.tag == 1) {
                    let that = this;
                    this.trans_class = 'turn-180-0';
                    this.letter = this.letter_back;
                    setTimeout(this.chageImg, 745, this.letter_front, 0);
                    setTimeout(function () {
                        that.tag = 0
                    }, 1500);
                }
            } else {
                if (this.tag1 == 1) {
                    let that = this;
                    this.trans_class1 = 'turn-180-0';
                    this.card = this.card_back_03;
                    setTimeout(this.chageImg, 745, this.card_front, 1);
                    setTimeout(function () {
                        that.tag1 = 0
                    }, 1500);
                }

            }
        },
    },
    delimiters: ['${', '}']
})


//------------end of vue ------------------//

window.onload = function () {
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
$('.dropdown li').click(function () {
    $(this).addClass('active').siblings().removeClass('active');
    var index = $(this).index();
    for(let i=0;i<4;i++) {
        $('.letter_img_lt').removeClass('menu_active');
    }
    $('.letter_img_lt').addClass(function(j,oldClass) {
        if(j == index){
            return 'menu_active';
        }
    })
});



