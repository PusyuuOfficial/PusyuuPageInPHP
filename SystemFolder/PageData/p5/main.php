<main class="main">
  <div class="main_yohaku">
    <section class="section" id="p6">
      <h2>お問い合わせ</h2>
      <p>お問い合わせフォームでは、ご感想、やご質問などをプシューに届けることができます。</p>
      <p>※このフォームでは、暗号化が行われません、なので安全な回線を使って送信をよろしくお願いします。予めご了承ください。</p>
      <div class="center">
        <div class="form_yohaku">
          <form class="form" action="http://21emon.wjg.jp:1751/confirm.php" method="post" name="form" onsubmit="return validate()">
            <table class="form-table">
              <tr class="form-1">
                <th class="form-2">
                  <h3>お問い合わせ 内容入力</h3>
                  <p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
                </th>
              </tr>
              <tr class="form-1">
                <th class="form-2"><label>NAME<span>必須</span></label></th>
                <td class="form-3"><input type="text" name="name" placeholder="例）YAMADA TAROU" value=""></td>
              </tr>
              <tr class="form-1">
                <th class="form-2"><label>E-MAILE<span>必須</span></label></th>
                <td class="form-3"><input type="text" name="email" placeholder="例）guest@example.com" value=""></td>
              </tr>
              <tr class="form-1">
                <th class="form-2"><label>SEX<span>必須</span></label></th>
                <td class="form-3"><input type="radio" name="sex" value="男性" checked>男性<input type="radio" name="sex" value="女性">女性</td>
              </tr>
              <tr class="form-1">
                <th class="form-2"><label>SELECT INQUIRY<span>必須</span></th></label>
                  <td class="form-3"><select name="item"><option value="">お問い合わせ項目を選択</option><option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option><option value="ご意見・ご感想">ご意見・ご感想</option></select></td>
              </tr>
              <tr class="form-1">
                <th class="form-2"><label>INQUIRYDETAIL<span>必須</span></th></label>
                  <td class="form-3"><textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea></td>
              </tr>
            </table>
        </div>
      </div>
      <div class="form-button">
        <button class="button button-submission" type="submit">確認画面へ</button>
      </div>
      </form>
    </section>
  </div>
</main>