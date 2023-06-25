/*****************************************
  *----------------------------------
  |  ThisStyleVersion: 1.3.0      |
  |  © 2021-2023 By Pusyuu        |
  |  LastUpdate: 2023-06-25       |
  |  (^U^)PusyuuJsDesu            |
----------------------------------*
******************************************/

/* Contact
---------------------------------*/

let validate = function() {

	let flag = true;

	removeElementsByClass("error-info");
	removeClass("error-form");

	// お名前の入力をチェック
	if(document.form.name.value == ""){
		errorElement(document.form.name, "お名前が入力されていません。");
		flag = false;
	} else {
		// お名前の形式をチェック
		if(!validateName(document.form.name.value)){
			errorElement(document.form.name, "アルファベットと”-”以外の文字が入っています。");
            		flag = false;
		}
	}

	// メールアドレスの入力をチェック
	if(document.form.email.value !== ""){
		// メールアドレスの形式をチェック
		if(!validateMail(document.form.email.value)){
			errorElement(document.form.email, "メールアドレスが正しくありません。");
			flag = false;
		}
	}


	// お問い合わせ項目の選択をチェック
	if(document.form.item.value == ""){
		errorElement(document.form.item, "お問い合わせ項目が選択されていません。");
		flag = false;
	}

	// お問い合わせ内容の入力をチェック
	if(document.form.content.value == ""){
		errorElement(document.form.content, "お問い合わせ内容が入力されていません。");
		flag = false;
	}

	return flag;
}



let errorElement = function(form, msg) {
	form.className = "error-form";
	let newElement = document.createElement("div");
	newElement.className = "error-info";
	let newText = document.createTextNode(msg);
	newElement.appendChild(newText);
	form.parentNode.insertBefore(newElement, form.nextSibling);
}


let removeElementsByClass = function(className){
	let elements = document.getElementsByClassName(className);
	while (elements.length > 0){ 
		elements[0].parentNode.removeChild(elements[0]);
	}
}

let removeClass = function(className){
	let elements = document.getElementsByClassName(className);
	while (elements.length > 0) {
		elements[0].className = "";
	}
}

let validateMail = function (val){
	if (val.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)==null) {
		return false;
	} else {
		return true;
	}
}


let validateNumber = function (val){
	if (val.match(/[^0-9]+/)) {
		return false;
	} else {
		return true;
	}
}


let validateTel = function (val){
	if (val.match(/^[0-9-]{6,13}$/) == null) {
		return false;
	} else {
		return true;
	}
}


let validateName = function (val){
	if (val.match(/^[a-z,A-Z,-]+$/) == null) {
		return false;
	} else {
		return true;
	}
}

/* PusyuuOfMesseage
---------------------------------*/

const pusyuu = "あ、あ、テステス、テストコメントです。まだまだプログラミング初心者です。応戦よろしくお願いします。";
  console.log(pusyuu);

/* OnClickMusic
---------------------------------*/

window.onload = function() {
    const my_audio = new Audio("../MusicData/hage.mp3");
            //ボタンにクリックイベントを設定
            onclick = function() {
            my_audio.currentTime = 0;  //再生開始位置を先頭に戻す
            my_audio.play();  //サウンドを再生
        }
}

/* LoadingDisplay
---------------------------------*/

window.onload = function() {
  let spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}

/* CreateToolTheFaceMoJi 
---------------------------------*/

function createFace() {
    var lefthand = document.getElementById("lefthand").value;
    var outline = document.getElementById("outline").value;
    var lefteyes = document.getElementById("lefteyes").value;
    var nose = document.getElementById("nose").value;
    var righteyes = document.getElementById("righteyes").value;
    var righthand = document.getElementById("righthand").value;
    var comment = document.getElementById("comment").value;

    var face = lefthand + outline.substring(0, 1) + lefteyes + nose + righteyes + outline.substring(1) + righthand + comment;
    document.getElementById("faceContainer").innerHTML = '<div class="face">' + face + '</div>';
}

/* FremworkForMemoryOfMemo
---------------------------------*/

function load() {
    let MemoData = "";
    if (!localStorage.getItem('MemoData')) {
        MemoData = "メモが登録されていません。履歴の削除により消去されたか、そもそもメモを記録してない可能性があります。";
    } else {
        MemoData = localStorage.getItem('MemoData');
    }
    document.MemoForm.Memo.value = MemoData;
}

function save() {
    let MemoData = document.MemoForm.Memo.value;
    localStorage.setItem('MemoData', MemoData);
}
