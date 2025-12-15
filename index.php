<?php
ob_start();
error_reporting(0);
date_default_timezone_set("Asia/Tashkent");

define('education_coders','8398800703:AAHhCmdBlLdHvop4KvlehTbmbQLlzmC4jZk');

$admin = "8125289524";
$adminuser = "@sealcontact";
$botname = bot('getme',['bot'])->result->username;

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".education_coders."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{ 
return json_decode($res);
}
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$forward = $message->forward;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$contact = $message->contact;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$fid = $message->chat->id;
$uid = $message->from->id;
$id = $message->from->id;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$user_id = $message->from->id;
$nomer = $message->contact->phone_number;
$reply_text = $message->reply_to_message->text;
$reply = $message->reply_to_message->text;

$rpl = json_encode([
'resize_keyboard'=>false,
'force_reply'=>true,
'selective'=>true,
]);

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$caption = $message->caption;
$username = $message->from->username;
$callback = $update->callback_query->data;
$callid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$callmid = $update->callback_query->message->message_id;
$callfid = $update->callback_query->from->id;
$callname = $update->callback_query->from->first_name;
$from_id = $update->callback_query->from->id;
$cqid = $update->callback_query->id;
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$mid = $message->message_id;
$calluser = $update->callback_query->message->chat->username;
$a=json_decode(file_get_contents("https://api.telegram.org/bot".education_coders."/getchat?chat_id=$ekanallar"));
$kanal=$a->result->username;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$photo_id=$message->photo[1]->file_id;
$time=date('H:i:s',strtotime('0 hour'));
$soat = date("H:i:s",strtotime("0 hour"));
$sana = date('d.m.Y',strtotime("0 hour"));
$stepfid = file_get_contents("step/$fid.step");
$stepcid = file_get_contents("step/$cid.step");
$stepchat_id = file_get_contents("step/$chat_id.step");
$stepadmin = file_get_contents("step/$admin.step");
$stepdata = file_get_contents("data/$cid/$cid.txt");
$ekanallar = file_get_contents("admin/elon.txt");
$mkanallar = file_get_contents("admin/kanal.txt");
$lichka = file_get_contents("shekih.db");
$holat = file_get_contents("holat.txt");
$null = "null";

mkdir("base");
mkdir("admin");

if(is_dir("step")==false){
mkdir("step");
}

if(is_dir("data")==false){
mkdir("data");
}

if(is_dir("data/$cid")==false){
mkdir("data/$cid");
}

if(file_exists("base/$cid.elon.dat")){
file_get_contents("base/$cid.elon.dat");
}else{
file_put_contents("base/$cid.elon.dat",$null);
}

if(file_exists("base/$cid.dat")){
file_get_contents("base/$cid.dat");
}else{
file_put_contents("base/$cid.dat",$null);
}

if(file_exists("base/holat.dat")){
file_get_contents("base/holat.dat");
}else{
file_put_contents("base/holat.dat","on");
}

if($text== "$text"){
bot("sendChatAction",[
  "chat_id"=>$cid,
  "action"=>"typing",
  ]);
}

if(isset($text) and ($type == "private")){
$lichka=file_get_contents("shekih.db");
if(strpos($lichka,"$cid") !==false){
bot('SendMessage',[
'chat_id'=>$cid,
]);
}else{
file_put_contents("shekih.db","$lichka\n$cid");
$lichka=file_get_contents("shekih.db");
$lich=substr_count($lichka,"\n");
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🔰 Yangi Foydalanuvchi.
📊 Umumiy: $lich ta
👨‍💼 Ismi: <a href = 'tg://user?id=$uid'>$name</a>
🆔️ ID raqami: </b><code>$uid</code>",
'parse_mode'=>'html',
]);
}
} 

if($cid == $admin){
}else{
if($holat == "off"){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🛠 Texnik xizmat davom etmoqda.</b><i>

▪️ Bot maʼmuriyati ushbu bot ichida baʼzi texnik ishlarni olib bormoqda.
▪️ Shu sababdan menyu adminlar tomonidan oʻchirilgan va hozirda foydalanuvchilar uchun mavjud emas.
▪️ Barcha funksiyalar tugallangandan keyin tiklanadi.</i><b>

📋 Iltimos, keyinroq qaytib keling, va bot holatini tekshirish uchun /start tugmasini bosing.</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
]);
return false;
}
}

function joinchat($id){
global $mid;
$array = array("inline_keyboard");
$get = file_get_contents("admin/kanal.txt");
$ex = explode("\n",$get);
for($i=0;$i<=count($ex) -1;$i++){
$first_line = $ex[$i];
$first_ex = explode("-",$first_line);
$name = $first_ex[0];
$url = $first_ex[1];
     $ret = bot("getChatMember",[
         "chat_id"=>"@$url",
         "user_id"=>$id,
         ]);
$stat = $ret->result->status;
 if((($stat=="creator" or $stat=="administrator" or $stat=="member"))){
$array['inline_keyboard']["$i"][0]['text'] = "✅ ". $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
 }else{
$array['inline_keyboard']["$i"][0]['text'] = "❌ ". $name;
$array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
$uns = true;
}
}
if($uns == true){
bot('SendMessage',[
        'chat_id'=>$id,
        'text'=>"<b>❌ Kechirasiz <a href='tg://user?id=$cid'>$name</a> siz bizning kanallarimizga obuna boʻlmasangiz botdan foydalana olmaysiz.

🔰 Obuna boʻlib, /start tugmasini bosing.</b>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$mid,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode($array),
]);  
return false;
}else{
return true;
}
}



$main = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📩 E'lon berish"],],
[['text'=>"🗒 Mening e'lonlarim"],['text'=>"🛠 Xizmatlar"],],
[['text'=>"☎️ Murojaat"],['text'=>"📋 Ma'lumotlar"],],
[['text'=>"📊 Statistika"],],
]
]);

$services = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛍 Loyiha buyurtma berish"],],
[['text'=>"◀️ Orqaga"],],
]
]); 

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⚙️ Kanallar"],],
[['text'=>"✉️ Xabar tizimi"],['text'=>"🛠 Rejim tizimi"],],
[['text'=>"◀️ Orqaga"],],
]
]);

$xabar = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📩 Xabar yuborish"],['text'=>"📩 Forward yuborish"],],
[['text'=>"◀️  Orqaga"],],
]
]);

$rejim = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🟢 Botni yoqish"],['text'=>"🔴 Botni o‘chirish"],],
[['text'=>"◀️  Orqaga"],],
]
]);

if($data == "asosiy"){
bot('deleteMessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$callcid,
'text'=>"<b>🖥  Asosiy menyuga qaytdingiz.</b>",
'parse_mode'=>'html',
'reply_markup'=>$main,
]);
}

if($text == "◀️ Orqaga" and joinchat($fid)==true){ 
unlink("step/$cid.step");
bot('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🖥  Asosiy menyuga qaytdingiz.</b>",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>$main,
   ]);
}

$cancel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"],],
]
]);

$page = json_encode([   
'inline_keyboard'=>[   
[['text'=>'⬅️ Oldingi sahifa', 'callback_data' => "next"],     
['text'=>'Keyingi sahifa ➡️', 'callback_data' => "null"],],
[['text'=>'◀️ Orqaga', 'callback_data' => "asosiy"],],
]
]);

$page2 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'⬅️ Oldingi sahifa', 'callback_data' => "next-2"],     
['text'=>'Keyingi sahifa ➡️', 'callback_data' => "main"],],
[['text'=>'◀️ Orqaga', 'callback_data' => "asosiy"],],
]
]);

$page3 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'⬅️ Oldingi sahifa', 'callback_data' => "next-3"],     
['text'=>'Keyingi sahifa ➡️', 'callback_data' => "next"],],
[['text'=>'◀️ Orqaga', 'callback_data' => "asosiy"],],
]
]);

$page4 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'⬅️ Oldingi sahifa', 'callback_data' => "next-4"],     
['text'=>'Keyingi sahifa ➡️', 'callback_data' => "next-2"],],
[['text'=>'◀️ Orqaga', 'callback_data' => "asosiy"],],
]
]);

$page5 = json_encode([   
'inline_keyboard'=>[   
[['text'=>'⬅️ Oldingi sahifa', 'callback_data' => "null"],     
['text'=>'Keyingi sahifa ➡️', 'callback_data' => "next-3"],],
[['text'=>'◀️ Orqaga', 'callback_data' => "asosiy"],],
]
]);

$accept = json_encode([
'inline_keyboard'=>[
[['text'=>"✅ Ha",'callback_data'=>"yes"],],
[['text'=>"❌️ Yo‘q",'callback_data'=>"no"],],
]
]);

if($text == "/start" and joinchat($fid)==true){
unlink("step/$cid.step");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>💎 Salom <a href='tg://user?id=$cid'>$name</a>

🤖 @$botname ga xush kelibsiz.</b>",
'parse_mode'=>'html',
'reply_markup'=>$main,
]);
}

if($text == "📋 Ma'lumotlar" and joinchat($fid)==true){
unlink("step/$cid.step");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"📃 <i>Botdan foydalanish tartibi juda oddiy.</i>

📩 <b>E'lon berish.</b>

<b>📋 Agar sizda Instagram akauntingiz bo'lsa-yu ammo unga haridor qidirayotgan bo'lsangiz, bu aynan siz uchun.</b>

<i>👉 Demak '' 📩 E‘lon berish '' tugmasiga bosasiz, so'ralgan ma‘lumotlaringizni kiritasiz, va qarabsizki tez orada sizning e‘loningiz $ekanallar kanaliga yuboriladi.</i>

<b>🛠 Xizmatlar.</b>

<b>📋 Agar sizga Web sayt yoki Telegram botlar kerak bo'lsa ushbu istagingizni bemalol botimiz orqali qondirishingiz mumkin.</b>

<i>👉 Demak  '' 🛠 Xizmatlar '' buyrug'ini botga yuborasiz kerakli ma'lumotlarni kiritasiz, va bo'ldi tez orada @$adminuser albatta siz bilan bog'lanadi va talabingiz qondiriladi.</i>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨🏻‍💻 Administrator","url"=>"tg://user?id=$admin"],
['text'=>"📩 E'lon kanalimiz","url"=>"https://t.me/$kanal"],],
]
])
]);
}

if($text=="🛍 Loyiha buyurtma berish" and joinchat($fid)==true){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<i>Biz telegram botlarni PHP dasturlash tilida yaratamiz va Web-Saytlarni frontend qismini yaratib bera olamiz.</i>

<b>📝 Loyiha turi, vazifasi, budjetingiz haqida ma'lumot yuboring:</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]],
]])
]);
file_put_contents("step/$cid.step","loyiha_murojat");
}
if($data=="loyiha_boglanish"){
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"<i>Biz telegram botlarni PHP dasturlash tilida yaratamiz va Web-Saytlarni frontend qismini yaratib bera olamiz.</i>

<b>📝 Loyiha turi, vazifasi, budjetingiz haqida ma'lumot yuboring:</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]],
]])
]);
file_put_contents("step/$cid2.step","loyiha_murojat");
}

if($stepcid=="loyiha_murojat"){
if($text=="◀️ Orqaga"){
unlink("step/$cid.step");
}else{
file_put_contents("step/$cid.murojat","$cid");
$murojat=file_get_contents("step/$cid.murojat");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>📨 Yangi loyiha murojaati keldi:</b> $murojat

<b>📑 Murojat matni:</b> $text

<b>⏰ Kelgan vaqti:</b> $soat",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💌 Javob yozish",'callback_data'=>"yozish=$murojat"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Murojaatingiz yuborildi.</b>

<i>Tez orada javob qaytaramiz!</i>",
'parse_mode'=>'html',
'reply_markup'=>$main,
]);
unlink("step/$murojat.step");
}}

if(mb_stripos($data,"yozish=")!==false){
$odam=explode("=",$data)[1];
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"<b>Javob matnini yuboring:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]],
]])
]);
file_put_contents("step/$cid2.step","loyiha_javob");
file_put_contents("step/$cid2.javob","$odam");
}

if($stepcid=="loyiha_javob"){
if($text=="◀️ Orqaga"){
unlink("step/$cid.step");
unlink("step/$cid.javob");
}else{
$murojat=file_get_contents("step/$cid.javob");
bot('sendMessage',[
'chat_id'=>$murojat,
'text'=>"<b>☎️ Administrator:</b>

<i>$text</i>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Murojaat",'callback_data'=>"loyiha_boglanish"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Javob yuborildi</b>",
'parse_mode'=>"html",
'reply_markup'=>$main,
]);
unlink("step/$murojat.murojat");
unlink("step/$cid.step");
unlink("step/$cid.javob");
}}


if($text == "/panel" and $cid==$admin or $text == "/admin" and $cid==$admin or $text == "◀️  Orqaga" and $cid==$admin){
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>👨🏻‍💻 Boshqaruv paneliga xush kelibsiz.</b>

<i>Nimani o'zgartiramiz?</i>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}


if($text == "⚙️ Kanallar" and $cid==$admin){
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>⚙️ Kanallarga xush kelibsiz.</b>

<i>Nimani o'zgartiramiz?</i>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📋 Kanallar ro'yhati",'callback_data'=>"kanalroyhat"],],
[['text'=>"📩 E'lonlar kanali",'callback_data'=>"ekanal"],
['text'=>"🗑 Kanalni o'chirish",'callback_data'=>"ekanalochir"],],
[['text'=>"♻️ Majburiy kanali",'callback_data'=>"mkanal"],
['text'=>"🗑 Kanalni o'chirish",'callback_data'=>"mkanalochir"],],
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiy"],],
]
])
]);
}


if($data == "kanalroyhat"){
$ekanallar = file_get_contents("admin/elon.txt");
$mkanallar = file_get_contents("admin/kanal.txt");
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>📋 Kanallar ro'yxati.

📩 E'lonlar kanali: $ekanallar
♻️ Majburiy kanali: $mkanallar</b>",
	'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
}


if($data == "ekanal"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>♻️  E'lon uchun kanlingizni userini yozing:</b><i>

📋 Masalan: @username</i>",
      'parse_mode'=>"html",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
file_put_contents("step/$admin.step","ekanal");
}

if($stepadmin == "ekanal"){
if($text == "◀️  Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("admin/elon.txt",$text);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>✅ Yaxshi e'lon uchun kanal qabul qilindi.</b>",
      'parse_mode'=>"html",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
unlink("step/$admin.step");
}
}


if($data == "mkanal"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>♻️  Majburiy a'zolik uchun kanlingizni userini yozing:</b><i>

📋 Masalan: Yangiliklar-Username</i>",
      'parse_mode'=>"html",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
file_put_contents("step/$admin.step","mkanal");
}

if($stepadmin == "mkanal"){
if($text == "◀️  Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("admin/kanal.txt",$text);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>✅ Yaxshi majburiy a'zolik uchun kanal qabul qilindi.</b>",
      'parse_mode'=>"html",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
unlink("step/$admin.step");
}
}


if($data == "mkanalochir"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🗑 Majburiy a'zolik uchun kanallarni o'chirish muvaffaqiyatli yakunlandi.</b>",
      'parse_mode'=>"html",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
unlink("admin/kanal.txt");
}


if($data == "ekanalochir"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🗑 E'lon uchun kanallarni o'chirish muvaffaqiyatli yakunlandi.</b>",
      'parse_mode'=>"html",
      'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiysozlama"],],
]
])
]);
unlink("admin/elon.txt");
}



if($data == "asosiysozlama"){
bot('deleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>⚙️ Kanallarga xush kelibsiz.</b>

<i>Nimani o'zgartiramiz?</i>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📋 Kanallar ro'yhati",'callback_data'=>"kanalroyhat"],],
[['text'=>"📩 E'lonlar kanali",'callback_data'=>"ekanal"],
['text'=>"🗑 Kanalni o'chirish",'callback_data'=>"ekanalochir"],],
[['text'=>"♻️ Majburiy kanali",'callback_data'=>"mkanal"],
['text'=>"🗑 Kanalni o'chirish",'callback_data'=>"mkanalochir"],],
[['text'=>"◀️ Orqaga",'callback_data'=>"asosiy"],],
]
])
]);
}


if($text == "✉️ Xabar tizimi" and $cid==$admin){
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>✉️ Xabar tizimiga xush kelibsiz.</b>

<i>Nimani yuboramiz?</i>",
'parse_mode'=>'html',
'reply_markup'=>$xabar,
]);
}


if($text == "🛠 Rejim tizimi" and $cid==$admin){
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>🛠 Rejim tizimiga xush kelibsiz.</b>

<i>Nimani o'zgartiramiz?</i>",
'parse_mode'=>'html',
'reply_markup'=>$rejim,
]);
}

if($text == "🟢 Botni yoqish" and $cid == $admin){
unlink("holat.txt");
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>👮‍♂️ Bot muvaffaqiyatli yoqildi.</b>",
'parse_mode'=>'html',
'reply_markup'=>$rejim,
]);
}

if($text == "🔴 Botni o‘chirish" and $cid == $admin){
file_put_contents("holat.txt",off);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"<b>👮‍♂️ Bot muvaffaqiyatli oʻchirildi.</b>",
'parse_mode'=>'html',
'reply_markup'=>$rejim,
]);
}


if($text == "📩 Xabar yuborish" and $cid==$admin){ 
file_put_contents("data/$cid/$cid.txt","sendpost");
  bot('SendMessage',[
    'chat_id'=>$admin,
    'text'=>"<b>📩 Foydalanuvchilarga xabar yuborish uchun xabar matnini yuboring:</b>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️  Orqaga"],],
]
]),
]);
}
if($stepdata=="sendpost" and $text!="◀️  Orqaga"){
unlink("data/$cid/$cid.txt");
bot('SendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>🔄 Xabar yuborilmoqda...</b>",
  'parse_mode'=>'html',
  ]);
$x=0;
$y=0;
$lich=file_get_contents("shekih.db");
$lichim = substr_count($lich,"\n");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$ok=bot('SendMessage',[
 'chat_id'=>$lichkalar,
 'text'=>"<b>$text</b>",
 'parse_mode'=>'html',
    ])->ok;
if($ok==true){
$y=$y+1;
bot('EditMessageText',[
'chat_id'=>$cid,
'text'=>"<b>🆔️ Post raqami: #$mid

👨‍💼 Foydalanuvchilar: $stat ta
📩 Xabar yuborildi: $y ta
📝 Xabar yuborilmadi: $x ta
📋 Xabar turi: SendMessage

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'message_id'=>$mid+1,
]);
}else{
$x=$x+1;
bot('EditMessageText',[
'chat_id'=>$cid,
'text'=>"<b>🆔️ Post raqami: #$mid

👨‍💼 Foydalanuvchilar: $stat ta
📩 Xabar yuborildi: $y ta
📝 Xabar yuborilmadi: $x ta
📋 Xabar turi: SendMessage

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'message_id'=>$mid+1,
]);
}
}
bot('deletemessage',[
'chat_id'=>$cid,
'message_id'=>$mid+1,
]);
bot('SendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>🆔️ Post raqami: #$mid

👨‍💼 Foydalanuvchilar: $stat ta
📩 Xabar yuborildi: $y ta
📝 Xabar yuborilmadi: $x ta
📋 Xabar turi: SendMessage

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'reply_markup'=>$xabar,
]);
}


if($text == "📩 Forward yuborish" and $cid==$admin){
file_put_contents("data/$cid/$cid.txt","forwardpost");
  bot('SendMessage',[
    'chat_id'=>$admin,
    'text'=>"<b>📩 Foydalanuvchilarga xabar yuborish uchun xabar matnini yuboring:</b>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️  Orqaga"],],
]
]),
]);
}
if($stepdata=="forwardpost" and $text!="◀️  Orqaga"){
unlink("data/$cid/$cid.txt");
bot('SendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>🔄 Xabar yuborilmoqda...</b>",
  'parse_mode'=>'html',
  ]);
$x=0;
$y=0;
$lich=file_get_contents("shekih.db");
$lichim = substr_count($lich,"\n");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$ok=bot('ForwardMessage',[
 'chat_id'=>$lichkalar,
 'from_chat_id'=>$admin,
 'message_id'=>$mid,
    ])->ok;
if($ok==true){
$y=$y+1;
bot('EditMessageText',[
'chat_id'=>$cid,
'text'=>"<b>🆔️ Post raqami: #$mid

👨‍💼 Foydalanuvchilar: $stat ta
📩 Xabar yuborildi: $y ta
📝 Xabar yuborilmadi: $x ta
📋 Xabar turi: ForwardMessage

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'message_id'=>$mid+1,
]);
}else{
$x=$x+1;
bot('EditMessageText',[
'chat_id'=>$cid,
'text'=>"<b>🆔️ Post raqami: #$mid

👨‍💼 Foydalanuvchilar: $stat ta
📩 Xabar yuborildi: $y ta
📝 Xabar yuborilmadi: $x ta
📋 Xabar turi: ForwardMessage

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'message_id'=>$mid+1,
]);
}
}
bot('deletemessage',[
'chat_id'=>$cid,
'message_id'=>$mid+1,
]);
bot('SendMessage',[
  'chat_id'=>$admin,
  'text'=>"<b>🆔️ Post raqami: #$mid

👨‍💼 Foydalanuvchilar: $stat ta
📩 Xabar yuborildi: $y ta
📝 Xabar yuborilmadi: $x ta
📋 Xabar turi: ForwardMessage

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'reply_markup'=>$xabar,
]);
}

if($text == "🛠 Xizmatlar"){
    unlink("step/$cid.step");
    bot('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"🛠 <b>Xizmatlar uchun kerakli xizmat turini tanlang:</b>",
          'parse_mode'=>"html",
          'reply_markup'=>$services,
        ]);
    }

if($text == "📩 E'lon berish"){
unlink("step/$cid.step");
file_put_contents("step/$cid.step","username");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"📃 <i>E'lon berish uchun instagram akauntingiz userini kiriting:

Masalan: im.programer</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
   ]);
}


if($stepcid == "username"){
if($text == "◀️ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.user.dat",$text);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","vazifasi");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Yaxshi. User qabul qilindi.</b>

📃 <i>Endi esa instagram akauntingiz haqida biroz ma'lumot yozing:</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}
if($stepcid == "vazifasi"){
if($text == "◀️ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.vazifasi.dat",$text);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","dasturlangan");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Yaxshi. Ma'lumot qabul qilindi.</b>

📃 <i>Endi esa akauntingiz obunachilar sonini kiriting:</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}
if($stepcid == "dasturlangan"){
if($text == "◀️ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.dasturlangan.dat",$text);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","azo");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Yaxshi. Obunachilar soni qabul qilindi.</b>

📃 <i>Endi esa akauntingiz oxvatini kiriting::</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}

if($stepcid == "azo"){
if($text == "◀️ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
file_put_contents("base/$cid.azo.dat",$text);
unlink("step/$cid.step");
file_put_contents("step/$cid.step","narxi");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Yaxshi. Oxvat qabul qilindi.</b>

📃 <i>Endi esa akauntingiz narxini yozing:

Masalan: 100 ming so‘m kelishamiz, yoki kami bor.</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$cancel,
]);
}
}

if($stepcid == "narxi"){
if($text == "◀️ Orqaga"){
}else{
bot('SendMessage',[
'chat_id'=>$admin,
]);
bot('SendMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>✅ Yaxshi narx qabul qilindi.</b>

📃 <i>Endi esa loyihangiz to‘g‘ri ekanini tasdiqlang:</i>",
'parse_mode'=>"html",
]);
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
file_put_contents("base/$cid.narxi.dat",$text);
unlink("step/$cid.step");
$buser = file_get_contents("base/$cid.user.dat");
$bvazifa = file_get_contents("base/$cid.vazifasi.dat");
$bdast = file_get_contents("base/$cid.dasturlangan.dat");
$bnarxi = file_get_contents("base/$cid.narxi.dat");
$bazo = file_get_contents("base/$cid.azo.dat");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>👨‍💼 Foydalanuvchi:</b> $name

<b>🔗 Akaunt havolasi:</b> https://instagram.com/$buser
<b>📋 Akaunt haqida ma'lumot:</b> $bvazifa
<b>👤 Obunachilar soni:</b> $bazo
<b>📝 Akaunt oxvati:</b> $bdast
<b>💰 Akaunt narxi:</b> $bnarxi

<b>☎️ Murojaat uchun:</b> @$username

<i>👮‍♂️ Barcha ma‘lumotlar to‘g‘ri ekanini tasdiqlay olasizmi?</i>",
      'parse_mode'=>"html",
      'reply_markup'=>$accept,
]);
$all = "<b>👨‍💼 Foydalanuvchi:</b> $name

<b>🔗 Akaunt havolasi:</b> https://instagram.com/$buser
<b>📋 Akaunt haqida ma'lumot:</b> $bvazifa
<b>👤 Obunachilar soni:</b> $bazo
<b>📝 Akaunt oxvati:</b> $bdast
<b>💰 Akaunt narxi:</b> $bnarxi

<b>☎️ Murojaat uchun:</b> @$username";

$all = "<b>🛍 Loyiha sotiladi.</b>

<b>👨‍💼 Foydalanuvchi:</b> $name

<b>🔗 Akaunt havolasi:</b> https://instagram.com/$buser
<b>📋 Akaunt haqida ma'lumot:</b> $bvazifa
<b>👤 Obunachilar soni:</b> $bazo
<b>📝 Akaunt oxvati:</b> $bdast
<b>💰 Akaunt narxi:</b> $bnarxi

<b>☎️ Murojaat uchun:</b> @$username

<b>📩 E'lonlar kanali:</b> $ekanallar
<b>🛒 E'lonlar botimiz:</b> @$botname";
      $base = file_get_contents("base/$cid.dat");
      $order = "\n $all";
      $handle = fopen($base, 'a+');
      fwrite($handle, $order);
      fclose($handle);
      $rand = rand(1,700);
      file_put_contents("base/randoms.dat",$rand);
      $cloud = file_get_contents("base/randoms.dat");
      file_put_contents("base/$cloud.dat",$all);
      file_put_contents("base/$cid.dat",$all);
      file_put_contents("base/cloud.$cloud.dat",$name);
      file_put_contents("base/cloud-id.$cloud.dat",$cid);
      file_put_contents("base/$cloud.user.dat",$username);
   }
}


if($text == "🗒 Mening e'lonlarim"){
$results = file_get_contents("base/$cid.dat");
if($results=="" or $results=="null"){
 bot('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"<i>👮‍♂️ Sizda hali faol e‘lonlar mavjud emas.</i>",
    'parse_mode'=>"html",
'reply_markup'=>$main,
]);
}else{
$results = file_get_contents("base/$cid.dat");
bot('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"📃 <i>Bergan eng so‘ngi e‘loningiz:</i>

$results",
    'parse_mode'=>"html",
'reply_markup'=>$page,
]);
}
}

if($data=="main"){
$results = file_get_contents("base/$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
'parse_mode'=>"html",
'text'=>"📃 <i>Bergan eng so‘ngi e‘loningiz:</i>

$results",
'reply_markup'=>$page,
]);
}

if($data=="next"){
$results = file_get_contents("base/for-bot.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
'parse_mode'=>"html",
'text'=>"📃 <i>Bergan eng so‘ngi Telegram bot buyurtmangiz:</i>

$results",
'reply_markup'=>$page2,
]);
}

if($data=="next-2"){
$results = file_get_contents("base/for-web.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
'parse_mode'=>"html",
'text'=>"📃 <i>Bergan eng so‘ngi web sayt buyurtmangiz:</i>

$results",
'reply_markup'=>$page3,
]);
}

if($data=="next-3"){
$results = file_get_contents("base/for-sherik.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
'parse_mode'=>"html",
'text'=>"📃 <i>Bergan eng so‘ngi sheriklik buyurtmangiz:</i>

$results",
'reply_markup'=>$page4,
]);
}

if($data=="next-4"){
$results = file_get_contents("base/for-ilova.$ccid.dat");
bot('EditMessageText',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
'parse_mode'=>"html",
'text'=>"📃 <i>Bergan eng so‘ngi mobil ilova buyurtmangiz:</i>

$results",
'reply_markup'=>$page5,
]);
}

if($data=="null"){
bot('AnswerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"❌️ Boshqa sahifa yo‘q.",
'show_alert'=>false,
]);
}

if($data=="no"){
bot('AnswerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"♻️ Qayta urinib ko'ring.",
'show_alert'=>false,
]);
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$callmid,
]);
bot('SendMessage',[
'chat_id'=>$ccid,
'text'=>"<b>❌️ Bekor qilindi.</b>",
'parse_mode'=>'html',
'reply_markup'=>$main,
]);
$rom = file_get_contents("base/randoms.dat");
$fr = file_get_contents("base/$rom.dat");
$cloud = file_get_contents("base/cloud.$rom.dat");
$clid = file_get_contents("base/cloud-id.$rom.dat");
$felons = file_get_contents("base/$rom.dat");
bot('SendMessage',[
    'chat_id'=>$admin,
    'text'=>"<i>😕 Afsuski $cloud, o‘z e‘lonini keraksiz deb topdi, va bekor qildi.</i>

<i>📃 Foydalanuvchi e‘loni:</i> $felons

<b>📉 Status:</b> <i>Noaniq</i>",
   'parse_mode'=>"html",
   'reply_markup'=>$main,
 ]);
}

if($data == "yes"){
$rom = file_get_contents("base/randoms.dat");
$fr = file_get_contents("base/$rom.dat");
$cloud = file_get_contents("base/cloud.$rom.dat");
$clid = file_get_contents("base/cloud-id.$rom.dat");
$felons = file_get_contents("base/$rom.dat");
bot('EditMessageText',[
    'chat_id'=>$ccid,
    'message_id'=>$callmid,
    'parse_mode'=>"html",
    'text'=>"<i>📩 E'loningiz $ekanallar kanaliga yuborildi.</i>",
]);
sleep(1);
$rom = file_get_contents("base/randoms.dat");
$cloud = file_get_contents("base/cloud.$rom.dat");
$damp = file_get_contents("base/$rom.user.dat");
$felons = file_get_contents("base/$rom.dat");
$dasturchi = str_replace("$dasturchi","","$damp");
bot('SendMessage',[
    'chat_id'=>$ekanallar,
    'text'=>$felons,
    'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"🛍 Sotib olish",'url'=> "https://t.me/$dasturchi"],],
    ]
  ])
 ]);
}

if($text == "📊 Statistika"){
$lichka=file_get_contents("shekih.db");
$lich=substr_count($lichka,"\n");
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"<b>📊 Bot statistikasi:

▪️ Foydalanuvchilar: $lich ta

⏰ Soat: $time
📆 Sana: $sana</b>",
'parse_mode'=>'html',
'reply_markup'=>$main,
]);
}

if($text=="☎️ Murojaat"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>📝 Murojaat matnini yuboring:</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]],
]])
]);
file_put_contents("step/$cid.step","murojat");
}
if($data=="boglanish"){
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"<b>📝 Murojaat matnini yuboring:</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]],
]])
]);
file_put_contents("step/$cid2.step","murojat");
}

if($stepcid=="murojat"){
if($text=="◀️ Orqaga"){
unlink("step/$cid.step");
}else{
file_put_contents("step/$cid.murojat","$cid");
$murojat=file_get_contents("step/$cid.murojat");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"<b>📨 Yangi murojat keldi:</b> $murojat

<b>📑 Murojat matni:</b> $text

<b>⏰ Kelgan vaqti:</b> $soat",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💌 Javob yozish",'callback_data'=>"yozish=$murojat"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>✅ Murojaatingiz yuborildi.</b>

<i>Tez orada javob qaytaramiz!</i>",
'parse_mode'=>'html',
'reply_markup'=>$main,
]);
unlink("step/$murojat.step");
}}

if(mb_stripos($data,"yozish=")!==false){
$odam=explode("=",$data)[1];
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"<b>Javob matnini yuboring:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"◀️ Orqaga"]],
]])
]);
file_put_contents("step/$cid2.step","javob");
file_put_contents("step/$cid2.javob","$odam");
}

if($stepcid=="javob"){
if($text=="◀️ Orqaga"){
unlink("step/$cid.step");
unlink("step/$cid.javob");
}else{
$murojat=file_get_contents("step/$cid.javob");
bot('sendMessage',[
'chat_id'=>$murojat,
'text'=>"<b>☎️ Administrator:</b>

<i>$text</i>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Murojaat",'callback_data'=>"boglanish"]],
]])
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Javob yuborildi</b>",
'parse_mode'=>"html",
'reply_markup'=>$main,
]);
unlink("step/$murojat.murojat");
unlink("step/$cid.step");
unlink("step/$cid.javob");
}}

?>
