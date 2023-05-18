<main class="main">
  <div class="main_yohaku">
    <section class="section">
      <article>
        <h2>顔文字制作機</h2>
        <p>ここでは、顔文字をパーツごとに入力するだけで簡単に顔文字を自作することができます。</p>
        <div class="box-6">
          <div id="faceContainer" style=" width: auto; height: 350px; overflow: scroll;"> ここに顔文字が表示されます。 </div>
        </div>
        <a href="#modal-1">顔文字を作るボタン</a>
        <div id="modal-1" class="modal">
          <div class="modal_message-wrapper">
            <a href="#" class="modal_close"></a>
            <div class="modal_message-box" style="display: flex; justify-content: center; flex-direction: column; width: 30vw; height: 65vh;">
              <label for="outline">輪郭</label>
              <select id="outline">
                <option value="()">( )</option>
                <option value="[]">[ ]</option>
                <option value="{}">{}</option>
              </select>
              <label for="lefthand">左手</label>
              <input type="text" id="lefthand" placeholder="左手の記号を入力">
              <label for="lefteyes">左目</label>
              <input type="text" id="lefteyes" placeholder="左目の記号を入力">
              <label for="nose">口</label>
              <input type="text" id="nose" placeholder="口の記号を入力">
              <label for="righteyes">右目</label>
              <input type="text" id="righteyes" placeholder="右目の記号を入力">
              <label for="righthand">右手</label>
              <input type="text" id="righthand" placeholder="右手の記号を入力">
              <label for="comment">コメント</label>
              <input type="text" id="comment" placeholder="コメントを入力">
              <button style="margin: 0 5px; margin-top: 8px;" onclick="createFace()">作成</button>
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
</main>