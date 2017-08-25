 
<?= $this->partial('partials/header') ?>
<?= $this->partial('partials/nav') ?>
<?= $this->partial('partials/stars') ?>
<div id='app'>

    <div id="app">
        <div class="container1">
            <div class="wrap-1">
                <div class="letter">
                    <img v-bind:src = 'letter' id="letter" v-bind:class="trans_class" v-on:mouseenter='turn_to($event,0)' >
                    <button class="btn1" onclick='window.location.href = "/letter/index"'>
                        写信
                    </button>
                </div>
                <div class="chuo">
                    <?= $this->tag->image(['img/index/index_12.png']) ?>
                </div>
                <div class="Postcard">
                <img v-bind:src = 'card' id="card" v-bind:class="trans_class1" v-on:mouseover='turn_to($event,1)' alt="" >
                    <button class="btn1" onclick='window.location.href="#"'>
                        寄明信片
                    </button>
                </div>
            </div>
        </div>
    <div class="kefu" onclick='showModal()'></div>
    <?= $this->partial('index/modal') ?>
    </div>

</div>
 
<?= $this->partial('partials/footer') ?>
