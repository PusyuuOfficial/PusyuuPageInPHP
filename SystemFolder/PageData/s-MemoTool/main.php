<main class="main">
  <div class="main_yohaku">
    <section class="section">
      <article>
        <h2>顔文字制作機</h2>
        <p>ここでは簡易的なメモをすることができます。こんな時に使えるかも：送信フォームがバグっているサイトで直書きするのが怖い時やスマホや手元にメモ機能がない時に一時的にメモをしたりすることができます。</p>
        <p>※ブラウザのキャッシュを削除してしまうと、メモデータが消えてしまうのでご使用の際ご注意はご注意ください。</p>
        <form name="MemoForm">
          <textarea name="Memo" style="width: 80vw; height: 80vh;" placeholder="メモしたい内容を代入"></textarea>
        </form>
        <div>
          <button type="button" value="保存" onclick=save(); >保存</button>
          <button type="button" value="読込" onclick=load(); >読込</button>
        </div>
      </article>
    </section>
  </div>
</main>