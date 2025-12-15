<?php
ini_set('error_reporting', 'off');
ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
ob_start();
define("API_KEY","8398800703:AAHhCmdBlLdHvop4KvlehTbmbQLlzmC4jZk");//Bot tokeni
$admin = "8125289524"; //admin id

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim


echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function send($id, $mrk, $text){
return bot('sendMessage',[
"chat_id"=>$id,
"parse_mode"=>$mrk,
"text"=>$text,
]);
}

function del($id, $idi){
return bot('deleteMessage',[
'chat_id'=>$id,
'message_id'=>$idi,
]);
}

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

function addstat($id){
$check = file_get_contents("bek_max/stat/azolar.txt");
$rd = explode("n", $check);
if(!in_array($id, $rd)){
file_put_contents("bek_max/stat/azolar.txt","n".$id,FILE_APPEND);
}
}

function joinchat($id){
     global $mid,$refsum;
 $ret = bot("getChatMember",[
         "chat_id"=>"@TGMBOTSUZ",
         "user_id"=>$id,
         ]);
$stat = $ret->result->status;

$rets = bot("getChatMember",[
         "chat_id"=>"@TGMBOTSUZ",
         "user_id"=>$id,
         ]);
$stats = $rets->result->status;

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

$retus = bot("getChatMember",[
         "chat_id"=>"@TGMBOTSUZ",
         "user_id"=>$id,
         ]);
$status = $retus->result->status;
         if(/*($stat=="creator" or $stat=="administrator" or $stat=="member") and */($stats=="creator" or $stats=="administrator" or $stats=="member") and ($status=="creator" or $status=="administrator" or $status=="member")){
      return true;
         }else{
     bot("sendMessage",[
         "chat_id"=>$id,
         "text"=>"<b>Quyidagi kanallarimizga obuna boʻling. Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"🎯A‘zo bo‘lish [1]","url"=>"https://t.me/TGMBOTSUZ"],],
[["text"=>"🎯A‘zo bo‘lish [2]","url"=>"https://t.me/TGMBOTSUZ"],],
[["text"=>"✅ Tasdiqlash","callback_data"=>"uz"],],
]
]),
]);  
unlink("step/$id.step");
$file =  file_get_contents("bek_max/referalid/$id.refid");
if($file){
$get =  file_get_contents("bek_max/chtrue/$id.ch");
if($get=="true"){
unlink("bek_max/chtrue/$id.ch");
$user = file_get_contents("coin/$file.dat");
$user = $user - $refsum;
file_put_contents("coin/$file.dat", $user);
send($file, markdown, "Sizning [Do'stingiz](tg://user?id=$id) botimizning homiy kanallaridan chiqib ketgani uchun sizning hisobingizdan $refsum rubl ayirildi.");
}
}  
return false;
}
}

function number($id){
$nm = file_get_contents("bek_max/numbers/$id.con");
if(stripos($nm, "998")!==false){
return true;
}else{
file_put_contents("step/$id.step","no_contact");
bot('sendMessage',[
"chat_id"=>$id,
"text"=>"*Iltimos, bizning botimizdan to'liq foydalanish uchun telefon raqamingizni kontakt ko'rinishida yuboring.*",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"resize_keyboard"=>true,
"one_time_keyboard"=>true,
"keyboard"=>[
[["text"=>"📲 Telefon raqamni yuborish","request_contact"=>true],],
]
]),
]);  
return false;
}
}

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
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

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

$update = json_decode(file_get_contents('php://input'));
if(isset($update)){
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$name = str_replace(["[","]","(",")","*","_","`","|"], "", $message->from->first_name);
$tx = $message->text;
$idi = $message->from->id;
$contactid = $message->contact->user_id;
$phnumber = $message->contact->phone_number;
}

if(isset($update->callback_query)){
$call = $update->callback_query;
$data = $call->data;
$mes_idi = $call->message->message_id;
$from_id = $call->from->id;
$chat_id = $call->message->chat->id;
$id = $call->id;
}

if(!is_dir("coin") or !is_dir("step") or !is_dir("bek_max")){
mkdir("coin");
mkdir("step");
mkdir("bek_max");
mkdir("bek_max/soni");
mkdir("bek_max/stat");
mkdir("bek_max/chtrue");
mkdir("bek_max/name");
mkdir("bek_max/numbers");
mkdir("bek_max/referalid");
}

if($idi){
if(!file_exists("bek_max/soni/$idi.soni")){
file_put_contents("bek_max/soni/$idi.soni","0");
}
if(!file_exists("coin/$idi.dat")){
file_put_contents("coin/$idi.dat","0");
}
if(!file_exists("bek_max/stat/refsum.db")){
file_put_contents("bek_max/stat/refsum.db","100");
}
if(!file_exists("bek_max/stat/minsum.db")){
file_put_contents("bek_max/stat/minsum.db","1000");
}
if(!file_exists("bek_max/stat/summa.db")){
file_put_contents("bek_max/stat/summa.db","0");
}
}

if(!file_exists("bek_max/stat/tolovkanal.user")){
file_put_contents("bek_max/stat/tolovkanal.user","kiritilmagan");
}
if(!file_exists("bek_max/stat/admin.user")){
file_put_contents("bek_max/stat/admin.user","kiritilmagan");
}

$step = file_get_contents("step/$idi.step");
$som = file_get_contents("coin/$idi.dat");
$lichka = file_get_contents("bek_max/stat/azolar.txt");
$ban = file_get_contents("bek_max/stat/bans.db");
$refsum = file_get_contents("bek_max/stat/refsum.db");
$minsum = file_get_contents("bek_max/stat/minsum.db");
$tolovkanal = file_get_contents("bek_max/stat/tolovkanal.user");
$zayafka = file_get_contents("bek_max/stat/zayafka.id");
$adminuser = file_get_contents("bek_max/stat/admin.user");

$orqaga = "🔙 Orqaga";
$key3 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>$orqaga]],
]
]);

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Pul ishlash 💸"]],
[['text'=>"Balans 💰"],['text'=>"Pul yechish 💳"]],
[['text'=>"To'lovlar tarixi 🧾"]],
[['text'=>"Qo'llanma 📄"],['text'=>"Statistika 📊"]],
]
]);

if(stripos($ban, "$idi")!==false){
send($idi, markdown, "*Hurmatli foydalanuvchi! Siz botdan bloklandingiz, shuning uchun botni ishlata olmaysiz!*");
exit();
}

if(stripos($tx,"/start")!==false){
$refid = explode(" ",$tx);
$refid = $refid[1];
if(strlen($refid)>0 and $refid>0 and $refid != $idi){
$get = file_get_contents("bek_max/start.txt");
$gets = explode("n",$get);
if(!in_array($idi, $gets)){
file_put_contents("bek_max/referalid/$idi.refid", $refid);
file_put_contents("bek_max/chtrue/$idi.ch","false");
send($refid,html,"✳️<b>Botga</b> <a href='tg://user?id=$idi'>$name</a> <b>sizning havolangiz orqali ulandi, bot shartlari bajarilgandan so'ng sizga pul taqdim etiladi!</b>");
addstat($idi);
file_put_contents("bek_max/start.txt","n".$idi,FILE_APPEND);
}
}
}
	
//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

if(stripos($tx,"/start")!==false){
if(number($idi)=="true" and joinchat($idi)=="true"){
addstat($idi);
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"<b>Menyu</b>",
"parse_mode"=>"html",
"reply_markup"=>$key,
]);
}
exit();
}

if($data=="uz"){
if(joinchat($from_id)=="true"){
addstat($from_id);
bot("deleteMessage",[
"chat_id"=>$from_id,
"message_id"=>$mes_idi,
]);
bot('sendMessage',[
"chat_id"=>$from_id,
"text"=>"<b>Menyu</b>",
"parse_mode"=>"html",
"reply_markup"=>$key,
]);
$referalid = file_get_contents("bek_max/referalid/$from_id.refid");
if($referalid){
if(joinchat($referalid)=="true"){
$is_user = file_get_contents("bek_max/chtrue/$from_id.ch");
$login = file_get_contents("bek_max/numbers/$from_id.con");
if($is_user=="false" and stripos($login,"998")!==false){
$user = file_get_contents("coin/$referalid.dat");
$user = $user + $refsum;
file_put_contents("coin/$referalid.dat", $user);
$r = file_get_contents("bek_max/soni/$referalid.soni");
file_put_contents("bek_max/soni/$referalid.soni", $r + 1);
file_put_contents("bek_max/chtrue/$from_id.ch","true");
send($referalid,markdown,"💸 [Referalingiz](tg://user?id=$from_id) *Kanallarga azo bo'lgani uchun $refsum pul taqdim etildi!* ❗️Eslatma: Siz qo'shgan referal foydalanuvchi, homiy kanallardan chiqib ketsa, berilgan pul qaytarilib olinadi!");
}
}
}
}else{
bot('answerCallbackQuery',[
"callback_query_id"=>$id,
"text"=>"❗️Siz bizning barcha kanallarimizga obuna bo'lmagansiz, shuning uchun siz botdan to'liq foydalana olmaysiz. Qaytib obuna bo'ling!",
"show_alert"=>true
]);
exit();
}
}

if($step=="no_contact" and isset($phnumber)){
$pnumber = str_replace("+","", $phnumber);
if((strlen($pnumber)==12) and (stripos($pnumber,"998")!==false || stripos($pnumber,"9988")!==false || stripos($pnumber,"9983")!==false)){
if($contactid==$idi){
addstat($idi);
file_put_contents("bek_max/numbers/$idi.con", $pnumber);
if(joinchat($idi)=="true"){
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"<b>Menyu</b>",
"parse_mode"=>"html",
"reply_markup"=>$key,
]);
}
}else{
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*Faqat o'zingizning kontaktingizni yuboring:*",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"resize_keyboard"=>true,
"one_time_keyboard"=>true,
"keyboard"=>[
[["text"=>"📱 Telefon raqamni yuborish","request_contact"=>true]],
]]),
]);
}
}else{
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*Kechirasiz! Botdan faqat O'zbekiston fuqarolari foydalanishi mumkun!*",
"parse_mode"=>"markdown",
"reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"remove_keyboard"=>true,
]),
]);
file_put_contents("bek_max/stat/bans.db","n".$idi,FILE_APPEND);
}
}

if($tx=="Pul ishlash 💸"){
if(number($idi)=="true" and joinchat($idi)=="true"){
$mybot = bot('getme', ['bot'])->result->username;
bot('sendPhoto',[
"chat_id"=>$idi,
"photo"=>"https://t.me/TGMBOTSUZ/56",
"caption"=>"<b>✅ «Axcha Pul» konkursi rasmiy boti.</b>

<b>🎈 $name do'stingizdan unikal havola-taklifnoma.</b>

👇 Boshlash uchun bosing:
https://t.me/$mybot?start=$idi",
'disable_web_page_preview'=>true,
"parse_mode"=>"html",
"reply_markup"=>$key,
]);
}
}

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

if($tx=="Balans 💰"){
if(number($idi)=="true" and joinchat($idi)=="true"){
$soni = file_get_contents("bek_max/soni/$idi.soni");
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*💰Hisobingiz:* `$som` so'm
*👥Taklif qilgan do'stlaringiz:* `$soni` odam 
*📱Yechish uchun minimal miqdor:* `$minsum` so'm",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📲 Pulni yechib olish","callback_data"=>"yechish"]],
]
]),
]);
}
}

$ortga = json_encode([
"one_time_keyboard"=>true,
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>"⬅️ Bekor qilish"]],
]
]);

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

if($data=="yechish"){
if(number($from_id)=="true" and joinchat($from_id)=="true"){
$fsom = file_get_contents("coin/$from_id.dat");
if($fsom >= $minsum){
del($from_id, $mes_idi);
bot('sendMessage',[
"chat_id"=>$from_id,
"text"=>"*✅ Sizning hisobingiz: $fsom pul Pulni yechish uchun miqdorni yozing Minimal: $minsum Maksimal: $fsom*",
"parse_mode"=>"markdown",
"reply_markup"=>$ortga,
]);
file_put_contents("step/$from_id.step","miqdor_kiriting");
}else{
bot('answerCallbackQuery',[
"callback_query_id"=>$id,
"text"=>"❗️ Pul yechib olish uchun minimal miqdor: $minsum uzs",
"show_alert"=>true
]);
}
}
exit();
}

if($step=="miqdor_kiriting"){
if(number($idi)=="true" and joinchat($idi)=="true"){
if($tx != "/start" and $tx != "⬅️ Bekor qilish"){
if($tx >= $minsum){
if($som >= $tx){
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*💰Miqdor: $tx uzs🔰 Pul yechish uchun Telefon raqamingizni yuboring
⚠️ Telefon raqamingizni to'liq yuboring + belgisini qo'yib bo'lmasa bo'lmaydi (Masalan: +998951234567)*",
"parse_mode"=>"markdown",
"reply_markup"=>$ortga,
]);
file_put_contents("step/$idi.step","raqam~yozing=$tx");
}else{
send($idi,markdown,"*❗️ Pulni yechib olish uchun maksimal miqdor $som uzs*");
}
}else{
send($idi,markdown,"*❗️ Pulni yechib olish uchun minimal miqdor $minsum uzs*");
}
}
}
}

if(stripos($step, "raqam~yozing=")!==false and $som >= $minsum){
if(number($idi)=="true" and joinchat($idi)=="true" and $tx != "/start" and $tx != "⬅️ Bekor qilish"){
if(strlen($tx)==13){
$miqdor = str_replace("raqam~yozing=","",$step);
if($miqdor >= $minsum and $som >= $miqdor){
$puts = $som - $miqdor;
file_put_contents("coin/$idi.dat", $puts);
$jami = file_get_contents("bek_max/stat/summa.db");
$jami = $jami + $miqdor;
file_put_contents("bek_max/stat/summa.db", $jami);
$refe = file_get_contents("bek_max/soni/$idi.soni");
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*✳️Sizning buyurtmangiz qabul qilindi, miqdor $miqdor uzs iltimos kuting, buyurtma 12 soat ichida ko'rib chiqiladin⚠️Agar 48 soat ichida to'lanmasa biz bilan bog'laning.*",
"parse_mode"=>"markdown",
"reply_markup"=>$key,
]);
file_put_contents("bek_max/name/$idi.name", $name);
bot('sendMessage',[
"chat_id"=>5361784097,
"text"=>"💳 Foydalanuvchi Pul yechib olmoqchi! 
Kimdan: <a href='tg://user?id=$idi'>$name</a>
Raqami: <code>$tx</code>
To'lov miqdori: $miqdor uzs'
Taklif qilgan azolari: $refe",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["callback_data"=>"send|$idi|$miqdor|$tx","text"=>"💳 To'lov qabul qilindi"]],
[["callback_data"=>"no|$idi|$miqdor|$tx","text"=>"💳 To'lov bekor qilindi"]],
[["callback_data"=>"ban|$idi","text"=>"🚫 Ban berish"]],
]
])
]);
unlink("step/$idi.step");
}else{
send($idi,markdown,"*💵 Sizning hisobingizda siz yechib olmoqchi bo'lgan pul mavjud emas! Siz faqat $hisob uzs yechib olishingiz mumkun!*");
}
}else{
send($idi, markdown, "*⚠️ Telefon raqamingizni to'liq xolda yuboring. + belgisini qo'yib, bo'lmasa bo'lmaydi (Masalan: +998951234567)*");
}
}
}

if($tx=="⬅️ Bekor qilish" or $tx==$orqaga){
if(number($idi)=="true" and joinchat($idi)=="true"){
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*Menyu*",
"parse_mode"=>"markdown",
"reply_markup"=>$key,
]);
unlink("step/$idi.step");
unlink("bek_max/$idi.step");
}
exit();
}

if(isset($update->callback_query)){
if(stripos($data,"send|")!==false){
del($chat_id, $mes_idi);
$ex = explode("|",$data);
$id = $ex[1];
$miqdor = $ex[2];
$raqam = $ex[3];
$r1 = substr($raqam.".", 0,9);
$raqami = "$r1****";
$chek = file_get_contents("bek_max/stat/chek.soni");
$tchek = $chek + 1;
file_put_contents("bek_max/stat/chek.soni", $tchek);
$name = file_get_contents("bek_max/name/$id.name");
$sana = date("d-m-Y");
$soat = date("H:i"); 
send(5361784097, html, "🆔: $tchekn👤: <a href='tg://user?id=$id'>$name</a>
💰: $miqdor uzs🔢: $raqaminn📆: $sana $soatn✅: Muvaffaqiyatli");
send($id, markdown, "*✳️ Tabriklaymiz sizning pul yechish uchun bergan buyurtmangiz muvaffaqiyatli yakunlandi!nn🔖 To'lov chekini bizning to'lovlar kanalimizdan olishingiz mumkin.📡 To'lovlar kanalimiz:* @Onlineishlang");
unlink("bek_max/name/$id.name");
}
if(stripos($data,"no|")!==false){
del($chat_id, $mes_idi);
$ex = explode("|",$data);
$id = $ex[1];
send($id, html, "Sizning botdan yechib olgan pul bekor qilindi!");
}
if(stripos($data,"ban|")!==false){
del($chat_id, $mes_idi);
$ex = explode("|",$data);
$id = $ex[1];
file_put_contents("bek_max/stat/bans.db","n".$id,FILE_APPEND);
send($id, markdown, "*Hurmatli foydalanuvchi! Siz botdan blocklandingiz, shuning uchun botni ishlata olmaysiz!*");
}
exit();
}

if($tx=="Pul yechish 💳"){
if(number($idi)=="true" and joinchat($idi)=="true"){
$soni = file_get_contents("bek_max/soni/$idi.soni");
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*Pulni yechib olishni istaysizmi?

Unda pastdagi «📱Pulni yechib olish» tugmasini bosing👇
*",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"📲 Pulni yechib olish","callback_data"=>"yechish"]],
]
]),
]);
}
}


if($tx=="To'lovlar tarixi 🧾"){
if(number($idi)=="true" and joinchat($idi)=="true"){
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"*Botimiz haqiqatdan ham to'lab beradi. ✅*

Quyidagi kanal orqali to'lovlar tarixini kuzatib borishingiz mumkin👇
https://t.me/+jdUMikegwEVkZDAy", //dasturchi: @Mukhammadazim
"parse_mode"=>"markdown",
"reply_markyp"=>$key,
]);
}
}

if($tx=="Qo'llanma 📄"){
if(number($idi)=="true" and joinchat($idi)=="true"){
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"❓*Botda qanday qilib pul ishlayman?*
— Botga do'stlaringizni taklif qiling va har bir yangi taklif qilgan do'stlaringiz uchun pullik mukofotlarga ega bo'ling.

❓*Pulni qanday qilib olish mumkin?*
— Botda ishlagan pullaringizni telefon raqamingizga chiqarib olishingiz mumkin. (HUMANS raqamlariga to'lab berilmaydi!)

👥 *Referal qachon aktiv xolatga o'tadi?*
— Siz chaqirgan do'stingiz bizning homiylar kanaliga a'zo bo'lganidan so'ng sizning referalingiz hisoblanadi va sizning balansingizga pul tushadi!

✅ To'lovlar soni cheklanmagan, xohlaganingizcha shartlar bajaring va pul ishlang!

*Bot dasturchisi:* @Mukhammadazim
", 
"parse_mode"=>"markdown",
"reply_markyp"=>json_encode([
"inline_keyboard"=>[
[["text"=>"Dasturchi","callback_data"=>"dasturchi"]],
]
]),
]);
}
}

if($tx=="Statistika 📊"){
if(number($idi)=="true" and joinchat($idi)=="true"){
$odam = substr_count($lichka,"n");
$jami = file_get_contents("bek_max/stat/summa.db");
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"💳 To'lab berilgan jami summa:* $jami so'm*",
"parse_mode"=>"markdown",
"reply_markup"=>$key,
]);
}  
}

if($idi != $admin){
exit();
}else{
$astep = file_get_contents("bek_max/$idi.step");
function admsend($put, $text, $key){
global $idi;
file_put_contents("bek_max/$idi.step", $put);
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>$text,
'parse_mode'=>"markdown",
'reply_markup'=>$key
]);
}

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

//admin paneli 
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👥 Forward Xabar Yuborish"]],
[["text"=>"💳 Hisob tekshirish"],["text"=>"💰 Hisob toʻldirish"]],
[["text"=>"✅ Bandan olish"],["text"=>"🚫 Ban berish"]],
[["text"=>"👥 Referal narxini o'zgartirish"],["text"=>"📤 Minimal rub yechish"]],
[['text'=> $orqaga ]],
]
]);

if($tx=="/panel"){
admsend("no", "Kerakli boʻlimni tanlang:", $panel);
}
if($tx=="👥 Forward Xabar Yuborish"){
admsend("forsend", "Forward yuboring!", $panel);
}
if($tx=="💳 Hisob tekshirish"){
admsend("result", "Foydalanuvchini ID raqamini kiriting:", $panel);
}
if($tx=="💰 Hisob toʻldirish"){
admsend("coins", "Foydalanuvchi hisobini necha rubga toʻldirmoqchisiz:", $panel);
}
if($tx=="✅ Bandan olish"){
admsend("banminus", "ID raqamini kiriting:", $panel);
}
if($tx=="🚫 Ban berish"){
admsend("ban", "ID raqamini kiriting:", $panel);
}
if($tx=="👥 Referal narxini o'zgartirish"){
admsend("referalsum", "Referal narxini kiriting!", $panel2);
}
if($tx=="📤 Minimal rub yechish"){
admsend("minimalsum", "Minimal rub yechish narxini kiriting!", $panel2);
}

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

if($astep and $tx != "👥 Forward Xabar Yuborish" and $tx != "💳 Hisob tekshirish" and $tx != "💰 Hisob toʻldirish" and $tx != "👥 Referal narxini o'zgartirish" and $tx != "✅ Bandan olish" and $tx != "🚫 Ban berish" and $tx != "📤 Minimal rub yechish" and $tx != $orqaga and $tx != "/start"){
//admin paneli 
if($astep=="forsend"){
$ex = explode("n", $lichka);
foreach($ex as $ids){
$okey = bot('forwardMessage',[
        'chat_id'=>$ids,
        'from_chat_id'=>$cid,
        'message_id'=>$mid
        ]);
        }
admsend("no", "Xabaringiz xammaga yuborildi!", $panel);
}
if($astep=="result"){
$sum = file_get_contents("coin/$tx.dat");
$referal = file_get_contents("bek_max/soni/$tx.soni");
$nomer = file_get_contents("bek_max/numbers/$tx.con");
admsend("no", "Foydalanuvchi hisobi: $sum Foydalanuvchi referali: $referalnTelefon raqami: $nomer", $panel);
}
if($astep=="coins"){
admsend("tanga=$tx", "Foydalanuvchi ID raqamini kiriting:", $panel);
}
if(stripos($astep,"tanga=")!==false){
$summa = str_replace("tanga=","", file_get_contents("bek_max/$idi.step"));
$sum =  file_get_contents("coin/$tx.dat");
$jami = $sum + $summa;
file_put_contents("coin/$tx.dat", $jami);
send($tx, html, "💰 Hisobingiz: $summa rubga to'ldirildi!nHozirgi hisobingiz: $jami");
admsend("no", "Foydalanuvchi balansi toʻldirildi!", $panel);
}
if($astep=="banminus"){
admsend("no" ,"[Foydalanuvchi](tg://user?id=$tx) Bandan ozod bo'ldi!", $panel);
$mban = str_replace("n$tx", "", $ban);
file_put_contents("bek_max/stat/bans.db", $mban);
}
if($astep=="ban"){
if(strpos($lichka,"$tx")!==false){
admsend("no", "[Foydalanuvchi](tg://user?id=$tx) Banlandi!", $panel);
file_put_contents("bek_max/stat/bans.db","n".$tx,FILE_APPEND);
}else{
send($idi,html,"Botda bunday foydalanuvchi mavjud emas !");
}
}
if($astep=="referalsum"){
file_put_contents("bek_max/stat/refsum.db", $tx);
admsend("no", "Referal narxi $tx uzs o'zgartirildi!", $panel2);
}
if($astep=="minimalsum"){
file_put_contents("bek_max/stat/minsum.db", $tx);
admsend("no", "Minimal pul yechish narxi $tx uzs o'zgartirildi!", $panel2);
}
}
}

//Diqqat bu kod @Mukhammadazim ga tegishli manbaga tegilmasin!
//Manbani o'zgartirgan ***
//Kanal: @TGMBOTSUZ   Dasturchi: @Mukhammadazim

?>
