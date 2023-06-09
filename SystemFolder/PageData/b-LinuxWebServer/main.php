  <main class="main">
    <div class="main_wrapper">
      <section class="section">
        <h2>Linuxでウェブサーバーを立てる方法</h2>
        <h3>目次</h3>
        <ol class="marukado_waku">
          <li><a href="#p1">apacheのインストール</a></li>
          <li><a href="#p2">Https化のやり方</a></li>
          <li><a href="#p3">様々なcgiを機能させる方法</a></li>
        </ol>
        <article class="article" id="p1">
          <h3>apacheのインストール</h3>
          <p>apacheのインストールはコマンドで行います。コマンドは（apt-get install apache2） です。インストールが完了したら<a href="http://localhost">ここ</a>開いてみてホームページらしきものが表示されたら成功です。ちなみにhtmlがおいてあるディレクトリーは(/var/www/html/)です。これだとhttp接続で不安な方もいるでしょう、次はhttps化のやり方の紹介です。</p>
        </article>
        <article class="article" id="p2">
          <h3>https化のやり方</h3>
          <p>まずは証明書の取得が必要なので、コマンド（apt-get -y install certbot）を入力し、Let's Encryptのインストーラーをインストールします。このソフトも基本コマンド操作です。まずコマンド欄に（certbot certonly --webroot -w /var/www/html -d www.hoge.com）を実行します。このコマンドの注意点（※1）www.hoge.comの部分はあなたが持っているドメインを入力してください。するとEnter email address 、と、出てきます。初回使用ではメールアドレスを求められます。消して怪しいものではなく、証明書の有効期限が切れそうになった時、お知らせの時にメールが送られます。メールアドレスを入力して次に、利用規約の同意を求められるので、同意できる方はコマンドの指示どおりに同意を押してください。ここまでで以上で説明したコマンドへの記述が合っていればエラーなく行けて、（/etc/letsencrypt/live/www.hoge.com/）のなかに証明書のファイルがあるはずです。次に、証明書が発行されたところでapacheに設定していきます。（※2）設定ファイルはviコマンドあるいは、ファイルマネージャーなどを使いコピーし記述し、管理者権限で上書きしてください。肝心の設定ファイルの場所ですが（/etc/apache2/sites-available/default-ssl.conf）←ここにあります。設定方法、SSLCertificateFileという場所をエディタ内の検索などで探し（/etc/letsencrypt/live/www.hoge.com/cert.pem）にリレクトリー名を変更してください。今度はSSLCertificateKeyFileという場所を探し、リレクトリー名を(/etc/letsencrypt/live/www.hoge.com/privkey.pem）に変更してくだい。次にSSLCertificateChainFileという場所を探し、コメント（＃）を解除して（/etc/letsencrypt/live/www.hoge.com/chain.pem）にリレクトリー名を変更してください。※www.hoge.comは（※1）で言った通りです。次にapache側に変更したファイルを（※2）で紹介した方法などで保存をし、apacheにSSLを有効にするように知らせるために次のコマンドを入力します。（a2ensite default-ssl）と（a2enmod ssl）と（systemctl restart apache2）を入力します。次にちゃんとhttps化されているかを<a href="https://localhost">ここ</a>をクリックしブラウザで証明書を確認して見てください。そこに、あなたのURLが表示されてたら成功です。もしされていなかったら、コンピュータを再起動し、もう一度試してみてください。（私の場合、それで機能しました。）</p>
        </article>
        <article class="article" id="p3">
          <h3>様々なcgiを機能させる方法</h3>
          <p>まずはWEBだと結構有名な、PHP CGIの機能させる方法です。まずはコマンドで（sudo apt-get install php）といれインストールします。次に（※干渉防止のため表示できません。そのため<a href="../../DocData/b-phpinfo.txt">ここ</a>をクリックして閲覧してください。）と書いたテキストファイルをindex.phpなどと名前を入力し、（/usr/lib/cgi-bin/）に入れ（注意、このリンクはindex.phpの場合のみ機能します。<a href="http://localhost/cgi-bin/index.php">ここ</a>）を開いてみてください。正常に動作していれば現在のPHP詳細が表示されます。次はpythonCGIを機能させる方法です。まず（apt -y install python）を入力し、pythonをインストールします。次にCGIの機能を有効かするために（a2enmod cgid）を実行します。次に（/etc/apache2/conf-available/cgi-enabled.conf）に（※干渉防止のため表示できません。そのため<a href="../../DocData/b-cgisettings.txt">ここ</a>をクリックして閲覧してください。）をいれ、CGIを機能させるために（a2enconf cgi-enabled）と（systemctl restart apache2）をコマンドで実行します。これで今回紹介した、CGIが機能するはずです。</p>
        </article>
      </section>
    </div>
  </main>
