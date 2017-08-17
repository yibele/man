<div class="modal" id='kefu'>
  <div class="modal-background" onclick='hideModal()'></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">联系客服</p>
      <button class="delete" onclick='hideModal()'></button>
    </header>
    <section class="modal-card-body">
            <form action="" method='post' class="form-kefu">
            <div class='content-left'>
                <label class="radio"><input type="radio" name="type" value='1' checked>信件问题</label>
                <label class='radio'><input type="radio" name="type" value='2'>意见建议</label>
                <label class='radio'><input type="radio" name="type" value='3'>其他</label>
            </div>
            <div class='modal-content-body'>
            <div class='column'>
                <div class='label'>姓名</div><input class='input form-control ' placeholder='你的称呼' name='name'></input>
            </div>
            <div class='column'>
            <div class='label'>Email或手机</div>
                <input class='form-control input ' placeholder='你的联系方式' name='email'></input>
            </div>
            <div class='column'>
            <div class='label'>内容</div>
                <textarea class='textarea form-control area' name='content' rows='3' cols='20' placeholder='告诉我们你遇到的问题或者意见建议，我会会在收到邮件的24小时之内反馈'></textarea>
            </div>
            </div>
            <div class="column-no-space">
              <button class="btn-cancel" onclick='hideModal();return false;'>取消</button>
              <input type="submit" class='btn-submit' value="确定"></input>
            </div>
            </form>
    </section>
  </div>
</div>

<!--

    <div class="modal"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h5 class="modal-title" id="myModalLabel">联系客服</h>
          </div>
          <div class="modal-body">
            <form action="" class="form-kefu">
            <div class='content-left'>
                <label class="radio"><input type="radio" name="type">信件问题</label>
                <label class='radio'><input type="radio" name="type">意见建议</label>
                <label class='radio'><input type="radio" name="type">其他</label>
            </div>
            <div class="column">
                <label for="name">姓名</label>
                <input type="text" name='name' class="form-control" placeholder="你的称呼">
            </div>
            <div class="column">
                <label for="Email">Email或电话</label>
                <input type="text"  name='Email' class="form-control" placeholder="你的联系方式">
            </div>
            <div class="column">
                <label for='comment'>内容</label>
                <textarea name="comment" cols="30" rows="10" class="form-control" placeholder="告诉我们你遇到的问题或者建议，我们会在收到邮件后的24小时内向你反馈"></textarea>
            </div>
            <div class="column-no-space">
              <button class="btn-cancel" data-dismiss="modal">取消</button>
              <input type="submit" class='btn-submit' value="确定"></input>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    -->
