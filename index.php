<?php
/*
Ushbu kod @IbrokhimovUz tomonidan tuzildi va @KingsOfPhp & @Php_Python_Cod kanallarida tarqatildi! 
Mualliflik huquqiga va manbaga tegmang! (Befarosatlarga mumkin)

Developer: @IbrokhimovUz    Channel: @KingsOfPhp & @Php_Python_Cod 
Yaxshilikga buyursin kod 101% ishlaydi
*/
ob_start();
define('API_KEY','8398800703:AAHhCmdBlLdHvop4KvlehTbmbQLlzmC4jZk');
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
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
   // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
$update = json_decode(file_get_contents('php://input'));
$admin = "1623413787";//Admin id raqam
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$botim = "Fotagraf_bot"; // bot user
$tx = $message->text;
$text= $message->text;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
mkdir("Bot");
$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;
$description = $message->chat->description;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ismi = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
$sticker = $message->sticker;
$audio = $message->audio;
$voice = $message->voice;
$video = $message->video;
$caption = $message->caption;
$performer = $message->performer;
$gif = $message->animation;
$doc = $message->document;
$contact = $message->contact;
$game = $message->game;
$location = $message->location;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$selfi1 = $message->video_note;
$lichka = file_get_contents("lichka.db");
$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if(isset($update->callback_query)){
$data = $update->callback_query->data;
$id = $update->callback_query->id;
$from_id = $update->callback_query->from->id;
$mes_idi = $update->callback_query->message->message_id;
}

$rasm =json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[['text'=>"📸 Foto effect"],],
[['text'=>"🎁 Syurpriz"],["text"=>"👕 Futbolkaga ism"],],
[["text"=>"✍🏻 Status yozish"],["text"=>"🟡 Humans logo"],],
[["text"=>"🙋🏻‍♂️ Yigitlar uchun"],["text"=>"🙋🏻‍♀️ Qizlar uchun"],],
[["text"=>"👩‍❤️‍💋‍👨 Juftliklar uchun"],["text"=>"😎 PUBG Logo"],],
[["text"=>"🏠"],],
]
]);

$panel =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"🤲 Namoz O'qish"],["text"=>"📷 Rasm Yasash"],],
[["text"=>"🧠 Psixalogik Test"],["text"=>"🖌 Nik Yasash"],],
[["text"=>"📹 Videolar"],["text"=>"👨‍💻 Dasturchi"],],
]
]);
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
$effect =json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
  [["text"=>"1️⃣"],["text"=>"2️⃣"],["text"=>"3️⃣"],["text"=>"4️⃣"],],
  [["text"=>"5️⃣"],["text"=>"6️⃣"],["text"=>"7️⃣"],["text"=>"8️⃣"],],
  [["text"=>"🏠"],],
  ]
  ]);

$adminpanel = json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[['text'=>"✍️Foydalanuvchilarga Xabar Yuborish"]],
[['text'=>"✍️Foydalanuvchilarga Forward Yuborish"]],
[['text'=>"📊 Statistika"],['text'=>"🏠"]],
]
]);

$back = json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[['text'=>"🏠"]],
   ]
]);

// Kanal id raqamlari
$kanal="-1001271482043"; // -100 dan keyin kanalingiz id raqamini qo'yasiz (bilmaganlar uchun yozdim)
$kanal1="-1001566684819";
$kanal2="-1001439885166";
$kanal3="-1001210623284";

if($tx=="/start" or $tx=="/START" or $tx=="start" and $type=="private"){
$ret = bot("getChatMember",[
    "chat_id"=>"$kanal",
    "user_id"=>$cid,
    ]);
$stat = $ret->result->status;

$rets = bot("getChatMember",[
    "chat_id"=>"$kanal1",
    "user_id"=>$cid,
    ]);
$stats = $rets->result->status;

$retus = bot("getChatMember",[
    "chat_id"=>"$kanal2",
    "user_id"=>$cid,
    ]);
$status = $retus->result->status;
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
$retusim = bot("getChatMember",[
    "chat_id"=>"$kanal3",
    "user_id"=>$cid,
    ]);
$statusim = $retus->result->status;

    if((($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stats=="creator" or $stats=="administrator" or $stats=="member") and ($status=="creator" or $status=="administrator" or $status=="member")  )){
bot("sendMessage",[
    "chat_id"=>$cid,
'text'=>"
<b>
🇺🇿 UZ Yangiliklar @My_Projeckts

Assalomu Alaykum kerakli boʻlimni tanlang ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇷🇺 RUS Новости @My_Projeckts

Здравствуйте, Выберите раздел в соответствии  ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇺🇸 EN News @My_Projeckts

Hello choose the section depending✅
</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);  
}else{
bot('sendmessage',[
'chat_id'=>$cid,
"text"=>"
<b>
Kanallarimizga obuna bo'lib <u>✅ Tasdiqlash</u> tugmasini bosing
</b>",
    "parse_mode"=>"html",
    "reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"💌 Obuna bo'lish","url"=>"https://t.me/Pollooo_gr"],],
[["text"=>"💌 Obuna bo'lish","url"=>"https://t.me/Versaci_muz"],],
[["text"=>"💌 Obuna bo'lish","url"=>"https://t.me/narkoz_muziko"],],
[["text"=>"💌 Obuna bo'lish","url"=>"https://t.me/ManoliStudio"],],
[['text'=>"✅ Tasdiqlash",'callback_data'=>"result"]]
]]),
]);
return false;
}} // Developer: @IbrokhimovUz  
// Channel: @Asror_Ibrohimov
if ($data == "result"){
$ret = bot("getChatMember",[
    "chat_id"=>"$kanal",
    "user_id"=>$clid,
    ]);
$stat = $ret->result->status;

$rets = bot("getChatMember",[
    "chat_id"=>"$kanal1",
    "user_id"=>$clid,
    ]);
$stats = $rets->result->status;

$retus = bot("getChatMember",[
    "chat_id"=>"$kanal2",
    "user_id"=>$clid,
    ]);
$status = $retus->result->status;

$retusim = bot("getChatMember",[
    "chat_id"=>"$kanal3",
    "user_id"=>$clid,
    ]);
$statusim = $retus->result->status;

    if((($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stats=="creator" or $stats=="administrator" or $stats=="member") and ($status=="creator" or $status=="administrator" or $status=="member")  )){
bot("sendMessage",[
    'chat_id'=>$callcid,
    'message_id'=> $callmid,
'text'=>"
<b>
🇺🇿 UZ Yangiliklar @My_Projeckts

Assalomu Alaykum kerakli boʻlimni tanlang ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇷🇺 RUS Новости @My_Projeckts

Здравствуйте, Выберите раздел в соответствии  ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇺🇸 EN News @My_Projeckts

Hello choose the section depending✅
</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);  
}else{
bot ('answerCallbackQuery', [
'callback_query_id'=> $qid,
'text'=>"📛 Barcha kanallarimizga obuna bo'ling!",
'show_alert'=>true,
]);
}} // Developer: @IbrokhimovUz  
// Channel: @Asror_Ibrohimov
if(mb_stripos($tx,"/start")!==false){
$baza=file_get_contents("azo.dat");
if(mb_stripos($baza,$chat_id) !==false){
}else{
$txt="\n$chat_id";
$file=fopen("azo.dat","a");
fwrite($file,$txt);
fclose($file);
}}
if(mb_stripos($tx,"📊 Statistika")!==false){
$baza=file_get_contents("azo.dat");
$all=substr_count($baza,"\n");
$gr=substr_count($baza,"-");
$us=$all-$gr;
$txx = "
┌ 📊 STATISTIKA
├ 👥 Jami obunachilar: $all nafar
├ 👤 Foydalanayotganlar: $us  nafar
└ 🕊 Rasmiy sahifamiz: @ManoliStudio | 🖤";
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
'text'=>$txx,
]);
}
if($tx=="✍️Foydalanuvchilarga Xabar Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabaringizni yozing",
]);
file_put_contents("Bot/$cid.step","xabar");
}

if($step=="xabar" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}

if($tx=="✍️Foydalanuvchilarga Forward Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabaringizni Yozing.Men Uni Forward Qilib Hammaga yuboraman!!",
]);
file_put_contents("Bot/$cid.step","forward");
}

if($step=="forward" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($tx=="/admin" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Panelga xush kelibsiz. Marhamat tanlang!",
'reply_markup'=>$adminpanel,
]);
} 

if($tx=="/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>'Marhamat menyulardan birini tanlang',
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}

if($tx=="📸 Foto effect"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Mod_Gamer/370",
'caption'=>"O'zingizga yoqgan effectni tanlang 🥰",
'parse_mode'=>'html',
'reply_markup'=>$effect,
]);
}

if($tx=="🏠"){
   bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"🏠 Bosh Menyuga qaytdingiz. O'zingizga kerakli Menyuni tanlang.",
   'parse_mode'=>'html',
  'reply_markup'=>$panel,
   ]);
}

 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov

if($tx=="📷 Rasm Yasash"){
   bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"📷 Rasm Yasash Bo'limidasiz. O'zingizga kerakli Menyuni tanlang.

👨‍💻 Dasturchi: @Asror_Ibrohimov",
   'parse_mode'=>'html',
  'reply_markup'=>$rasm,
   ]);
}

if($tx=="👨‍💻 Dasturchi"){
   bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"@AsrorDev",
     'parse_mode'=>'html',
      'reply_markup'=>$back,
   ]);
}

if($tx=="🧠 Psixalogik Test"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Bu bo'lim orqali siz o'zingizni tug'ilgan faslingizni belgilagan holda o'z psixologiyangiz qanday ekanini bila olasiz

Qaysi faslda tug'ilgansiz tanlang!👇

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🌄 Bahor","callback_data"=>"bahor"],['text'=>"🏖 Yoz","callback_data"=>"yoz"]],
[['text'=>"🌅 Kuz","callback_data"=>"kuz"],['text'=>"🌨 Qish","callback_data"=>"qish"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov



// Bosh menyuga qaytish uchun

if($data=="back"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"🏠 Bosh Menyuga qaytdingiz. O'zingizga kerakli Menyuni tanlang.",
'parse_mode'=>'html',
'reply_markup' => $panel,
]);
}

// Bahor

if($data=="bahor"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"BAHOR 🌸
Bahor oshuftalari juda quvnoq va hayotga chanqoq insonlardir. Xushchaqchaqligi va hazilkashligi sabab dostlarining hamisha ardogida yuradilar. Hayotiy shiorlari: buncha gozal bu olam, bir qara! Jamoaning joni bolish bilan birga, turli hiyla-nayranglarni uyushtirishga ham usta. Bir joyda otirishlari qiyin, sayohat jonu dili. Tez oshiq bolib qoladilar, ammo ayriliqlarni hech qanday gazabu nafratsiz, engil otkazadilar. Ularni sodiq dost sifatida qabul qilmaslik kerak, chunki munosabatlari vaziyat taqozosiga kora ozgarib turadi. Istalgan daqiqada umuman kozdan goyib bolib, sizni unutib yuborishlari mumkin. Birovga boglanib qolish ular uchun qadriyat emas. Vujudida bir vaqtning ozida ehtiros, xudbinlik, romantika, talabchanlik va begamlik josh urgan bu insonlar vada berishga, ayniqsa, uni bajarmaslikka usta. Lekin ular bilan zeikmaysiz.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

// Yoz

if($data=="yoz"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"YOZ 🌻
Bu faslni yaxshi koradiganlar etakchilik, ilgorlik sifatlariga ega. Ozlari yonib, atrofdagilarni ham yondirib yurishadi. Ular bilan muloqot juda qiziqarli kechadi. Hech qachon tushkunlikka tushmaydilar va hamisha nekbin kayfiyatda yuradilar. Bunday kimsalar har doim yangidan-yangi goyalar oylab topib, amalga oshiradi. Yoz fasli ishtiyoqmandlarining ishdagi osishi ham tez suratda bolib, yuqori martabalarga erishadilar, yaxshi rahbarlik sifatlari bilan ajralib turishadi. Hayotiy shiorlari: qatiyat va mehnat. Ayni paytda etarli darajada murosasoz bolib, zarur orinda yon berishni ham bilishadi. Ularning shaxsiy hayotlari ham havas qilsa arzigulik. Chunki aqlni yoqotar darajada sevish va juftlariga bir umr sodiq qolishni biladilar. Atrofdagilarning kamchiliklariga nisbatan anchayin sabrli va ozlariga nisbatan talabchan bolgan bunday insonlardan yaxshi dost chiqadi. Chunki dostlarini shodlikda ham, gamda ham yolgiz qoldirmaydilar. Birgina kamchiliklari bor: haddan ortiq arazchi bolganlari holda kechimli emas.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

// Kuz

if($data=="kuz"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"KUZ 🍁
Kuzni sevadiganlar tinchlik, yolgizlik va osoyishtalikni xush koradi. Kopchilikni sevmaganlari holda odamlar orasida ozlarini noqulay his etmaydilar ham. Shunchaki jamoaning ular uchun ahamiyati yoq. Hayotiy shiori: meni tinch qoying! Kayfiyatlari juda beqaror: bir qarasangiz, xandon otib yuradi, bir qarasangiz, hech qanday sababsiz xomrayib oladi. Xuddi kuz havosiga oxshab. Begonalarning nekbinligiyu zafarlari kopincha gashlariga tegadi. Biroq kuzni yaxshi koradigan odamlar juda istedodli bolishadi. Tasviriy sanat, sheriyat va nasrda katta muvaffaqiyatlarga erishishlari mumkin. Fikrlashlari ham boshqalardan farq qiladi. Muhabbatda juda vafodor: faqat bir insonni sevib otadilar. Bir bora va butun umrga! Agar muhabbatiga etisha olmasa olguncha azoblanadi va bu azob ularga ilhom manbai bolib qoladi. Ular tabiat va jonzotlar bilan muloqot chogidagina ozlarini topadilar. Biroq muhabbatiga javob berib, sevib ardoqlaydigan insonni uchratsalar, haqiqiy oilaparvarga aylanadi.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

// Qish

if($data=="qish"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"QISH ❄️
Bu faslni sevadiganlar, odatda, oziga ishongan va mustaqil insonlardir. Hayotiy shiorlari: faqat ozingga ishon! Katta davralarni xush korishmaydi. Dostu tanishlari juda oz. Ammo shu ozgina odamlarga qattiq ishonishadi. Ishonmasa, ularni yaqin yolatmagan bolishardi. Juda qatiyatli bu kimsalar oz rejalarini birovga oshkor qilmay, yolgiz amalga oshirish yoki hayot oqimini maqsadlariga boysundirishni biladilar. Qishni yaxshi koradigan insonlar kamgap bolishadi. Sorasangiz, javob beradilar, ammo ozlari hech qachon birinchi bolib gap qotmaydilar. Pul ishlab topishni bilishadi, qulaylik va farovonlikni qadrlashadi. Ozlariga qadrli insonlar uchun kop narsadan voz kechishlari mumkin. Kamchiliklari: xasislik va pismiqlik. Shuningdek, bunday insonlar kechirishni bilmaydi.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov

if($tx=="📹 Videolar"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Bu bo'lim orqali siz o'zingizni ismingizning bosh xarfi uchun videolar topishingiz mumkin.

Marxamat tanlang!👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"A ❤️🔐","callback_data"=>"a"],['text'=>"B ❤️🔐","callback_data"=>"b"],['text'=>"D ❤️🔐","callback_data"=>"d"],['text'=>"E ❤️🔐","callback_data"=>"e"]],
[['text'=>"F ❤️🔐","callback_data"=>"f"],['text'=>"G ❤️🔐","callback_data"=>"g"],['text'=>"H ❤️🔐","callback_data"=>"h"],['text'=>"I ❤️🔐","callback_data"=>"i"]],
[['text'=>"J ❤️🔐","callback_data"=>"j"],['text'=>"K ❤️🔐","callback_data"=>"k"],['text'=>"L ❤️🔐","callback_data"=>"l"],['text'=>"M ❤️🔐","callback_data"=>"m"]],
[['text'=>"N ❤️🔐","callback_data"=>"n"],['text'=>"O ❤️🔐","callback_data"=>"o"],['text'=>"P ❤️🔐","callback_data"=>"p"],['text'=>"Q ❤️🔐","callback_data"=>"q"]],
[['text'=>"R ❤️🔐","callback_data"=>"r"],['text'=>"S ❤️🔐","callback_data"=>"s"],['text'=>"T ❤️🔐","callback_data"=>"t"],['text'=>"U ❤️🔐","callback_data"=>"u"]],
[['text'=>"V ❤️🔐","callback_data"=>"v"],['text'=>"X ❤️🔐","callback_data"=>"x"],['text'=>"Y ❤️🔐","callback_data"=>"y"],['text'=>"Z ❤️🔐","callback_data"=>"z"]],
[['text'=>"SH ❤️🔐","callback_data"=>"sh"],['text'=>"CH ❤️🔐","callback_data"=>"ch"]],
[['text'=>"💞 Love videolar","callback_data"=>"love"],['text'=>"🏡","callback_data"=>"back"]],
]
  ]),
   ]);
}

if($data=="love"){
  bot('editmessagetext',[
     'chat_id'=>$callcid,
     'message_id'=>$callmid,
   'text'=>"Bu bo'lim orqali siz o'zingizni ismingizning bosh xarfi uchun videolar topishingiz mumkin.

Marxamat tanlang!👇",
 'parse_mode'=>'html',
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"A❤️S ","callback_data"=>"as"],['text'=>"Y❤️E","callback_data"=>"ye"],['text'=>"M❤️A","callback_data"=>"ma"],['text'=>"Л❤️Д","callback_data"=>"ld"]],
[['text'=>"A❤️K","callback_data"=>"ak"],['text'=>"O❤️K","callback_data"=>"ok"],['text'=>"Ш❤️Г","callback_data"=>"wg"],['text'=>"A❤️B","callback_data"=>"ab"]],
[['text'=>"A❤️P","callback_data"=>"ap"],['text'=>"C❤️M","callback_data"=>"cm"],['text'=>"X❤️3","callback_data"=>"x3"],['text'=>"A❤️A","callback_data"=>"aaa"]],
[['text'=>"E❤️П","callback_data"=>"ep"],['text'=>"🔙 Orqaga","callback_data"=>"back"]],
]
 ]),
  ]);
}
// Videolar boshlandi

if($data=="a"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/277",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="b"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/278",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
        if($data=="d"){
            bot('sendvideo',[
            'chat_id'=>$callcid,
            'message_id'=>$callmid,
            'video'=>"https://t.me/Mod_Gamer/279",
            'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
            'parse_mode'=>'html',
            'reply_markup' => json_encode([
            'inline_keyboard'=>[
            [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
            ]]),
            ]);
            }

            if($data=="e"){
                bot('sendvideo',[
                'chat_id'=>$callcid,
                'message_id'=>$callmid,
                'video'=>"https://t.me/Mod_Gamer/280",
                'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                'parse_mode'=>'html',
                'reply_markup' => json_encode([
                'inline_keyboard'=>[
                [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                ]]),
                ]);
                }

                if($data=="f"){
                    bot('sendvideo',[
                    'chat_id'=>$callcid,
                    'message_id'=>$callmid,
                    'video'=>"https://t.me/Mod_Gamer/281",
                    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                    'parse_mode'=>'html',
                    'reply_markup' => json_encode([
                    'inline_keyboard'=>[
                    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                    ]]),
                    ]);
                    }

                    if($data=="g"){
                        bot('sendvideo',[
                        'chat_id'=>$callcid,
                        'message_id'=>$callmid,
                        'video'=>"https://t.me/Mod_Gamer/282",
                        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                        'parse_mode'=>'html',
                        'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                        ]]),
                        ]);
                        }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
                    if($data=="h"){
                    bot('sendvideo',[
                            'chat_id'=>$callcid,
                            'message_id'=>$callmid,
                            'video'=>"https://t.me/Mod_Gamer/283",
                            'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                            'parse_mode'=>'html',
                            'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                            [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                            ]]),
                            ]);
                            }

if($data=="i"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/284",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="j"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/285",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="k"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/286",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="l"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/287",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="m"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/288",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="n"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/289",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="o"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/290",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="p"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/291",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="q"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/292",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="r"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/293",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

if($data=="s"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/294",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="t"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/295",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="u"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/296",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="v"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/297",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

if($data=="x"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/298",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="y"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/299",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="z"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/300",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="sh"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/301",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

        if($data=="ch"){
            bot('sendvideo',[
            'chat_id'=>$callcid,
            'message_id'=>$callmid,
            'video'=>"https://t.me/Mod_Gamer/302",
            'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
            'parse_mode'=>'html',
            'reply_markup' => json_encode([
            'inline_keyboard'=>[
            [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
            ]]),
            ]);
            }

             // Love videos
             if($data=="as"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/264",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
       // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov    
          if($data=="ye"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/265",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
          if($data=="ma"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/266",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
          if($data=="ld"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/267",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
          if($data=="ak"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/268",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov 
          if($data=="ok"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/269",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
          if($data=="wg"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/270",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
          if($data=="ab"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/271",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
              if($data=="ap"){
                  bot('sendvideo',[
                  'chat_id'=>$callcid,
                  'message_id'=>$callmid,
                  'video'=>"https://t.me/BotlarimUchun/272",
                  'caption'=>"💞Love video🥰",
                  'parse_mode'=>'html',
                  'reply_markup' => json_encode([
                  'inline_keyboard'=>[
                  [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                  ]]),
                  ]);
                  }
          
          if($data=="cm"){
              bot('sendvideo',[
              'chat_id'=>$callcid,
              'message_id'=>$callmid,
              'video'=>"https://t.me/BotlarimUchun/273",
              'caption'=>"💞Love video🥰",
              'parse_mode'=>'html',
              'reply_markup' => json_encode([
              'inline_keyboard'=>[
              [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
              ]]),
              ]);
              }
          
if($data=="x3"){
bot('sendvideo',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'video'=>"https://t.me/BotlarimUchun/274",
'caption'=>"💞Love video🥰",
'parse_mode'=>'html',
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
]]),
]);
}
    // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov       
if($data=="ep"){
bot('sendvideo',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'video'=>"https://t.me/BotlarimUchun/276",
'caption'=>"💞Love video🥰",
'parse_mode'=>'html',
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
]]),
]);
}

if($data=="aaa"){
bot('sendvideo',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'video'=>"https://t.me/BotlarimUchun/275",
'caption'=>"💞Love video🥰",
'parse_mode'=>'html',
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
]]),
]);
}


if($tx=="🤲 Namoz O'qish"){
  bot('sendPhoto',[
    'chat_id'=>$cid,
    'photo'=>"https://t.me/Mod_Gamer/349",
  'caption'=>"O'zingizga keraklisini tanlang!👇",
     'parse_mode'=>'html',
   'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>"👳🏻‍♂️ Erkaklar uchun","callback_data"=>"erkak"],['text'=>"🧕🏻 Ayollar uchun","callback_data"=>"ayol"]],
             ]
               ]),
                ]);
             }

  if($data=="erkak"){
    bot('sendMessage',[
       'chat_id'=>$callcid,
      'message_id'=>$callmid,
     'text'=>"O'zingizga keraklisini tanlang!👇",
        'parse_mode'=>'html',   
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>"👳🏻‍♂️ Bomdod","callback_data"=>"bomdod"],['text'=>"👳🏻‍♂️ Peshin","callback_data"=>"peshin"],],
       [['text'=>"👳🏻‍♂️ Asr","callback_data"=>"asr"],['text'=>"👳🏻‍♂️ Shom","callback_data"=>"shom"],],
       [['text'=>"👳🏻‍♂️ Xufton","callback_data"=>"xufton"],['text'=>"👳🏻‍♂️ Duolar","callback_data"=>"duo"],],
       [['text'=>"👳🏻‍♂️ Janoza namozi","callback_data"=>"janoza"],['text'=>"🔙 Orqaga","callback_data"=>"orqa"],],
            ]]),
            ]);
            }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
 if($data=="ayol"){
    bot('sendmessage',[
       'chat_id'=>$callcid,
      'message_id'=>$callmid,
     'text'=>"O'zingizga keraklisini tanlang!👇",
        'parse_mode'=>'html',   
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>"🧕🏻 Bomdod","callback_data"=>"bomdod1"],['text'=>"🧕🏻 Peshin","callback_data"=>"peshin1"],],
       [['text'=>"🧕🏻 Asr","callback_data"=>"asr1"],['text'=>"🧕🏻 Shom","callback_data"=>"shom1"],],
       [['text'=>"🧕🏻 Xufton","callback_data"=>"xufton1"],['text'=>"🧕🏻 Duolar","callback_data"=>"duo"],],
      [['text'=>"🔙 Orqaga","callback_data"=>"orqa"],],
            ]]),
            ]);
            }

 if($data=="orqa"){
    bot('sendmessage',[
       'chat_id'=>$callcid,
      'message_id'=>$callmid,
     'text'=>"O'zingizga keraklisini tanlang!👇",
        'parse_mode'=>'html',   
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>"👳🏻‍♂️ Erkaklar uchun","callback_data"=>"erkak"],['text'=>"🧕🏻 Ayollar uchun","callback_data"=>"ayol"]],
             ]
               ]),
                ]);
             }
// erkaklar uchun 

if($data=="bomdod"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/253",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

if($data=="peshin"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/255",
'caption'=>"Peshin namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

if($data=="asr"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/257",
'caption'=>"Asr namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

    if($data=="shom"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/259",
'caption'=>"Shom namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
    if($data=="xufton"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/261",
'caption'=>"Xufton namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

    if($data=="duo"){
  bot('sendMessage',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
'text'=>"NAMOZDAN KEYINGI ZIKRLAR

Namoz salom bilan tugaydi. Salomdan keyingi amallar (tasbehotu duolar) majburiy emas, ammo nihoyatda savoblidir.
Farz namozlaridan keyin quyidagi duoni o‘qish sunnatdir:
Allohumma antas-salam va minkas-salam. Tabarokta ya zaljalali val ikrom.
Mazmuni:
Ey Allohim, Sen barcha ayb-nuqsonlardan poksan. Barcha salomatlik va rahmat Sendandir. Ey azamat va qudrat egasi bo‘lgan Allohim, Sening shoning ulug‘dir.
Umuman, har vaqt namozni tugatgandan so‘ng Oyatal kursi o‘qilsa, tasbehot qilinsa, savobi ulug‘ bo‘ladi.",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'back'],],
    ]]),
    ]);
    }

    if($data=="janoza"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/263",
'caption'=>"Janoza namozining o‘qilish tartibi.",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

// Ayollar uchun 

if($data=="bomdod1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/254",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="peshin1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/256",
'caption'=>"Peshin namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

if($data=="asr1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/258",
'caption'=>"Asr namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

    if($data=="shom1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/260",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

    if($data=="xufton1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/262",
'caption'=>"Xufton namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

// Bollar uchun

if($tx=="🙋🏻‍♂️ Yigitlar uchun"){
   bot('sendPhoto',[
      'chat_id'=>$cid,
      'photo'=>"https://t.me/Mod_Gamer/357",
    'caption'=>"Yigitlar uchun logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇

@CHORNIFON - Kanalidan turli xil fonlar topishingiz mumkin 😉",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"b1"],['text'=>"2️⃣","callback_data"=>"b2"]],
[['text'=>"3️⃣","callback_data"=>"b3"],['text'=>"4️⃣","callback_data"=>"b4"]],
[['text'=>"5️⃣","callback_data"=>"b5"],['text'=>"6️⃣","callback_data"=>"b6"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}

// Qizlar uchun

if($tx=="🙋🏻‍♀️ Qizlar uchun"){
   bot('sendPhoto',[
      'chat_id'=>$cid,
      'photo'=>"https://t.me/Mod_Gamer/360",
    'caption'=>"Qizlar uchun logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇

@CHORNIFON - Kanalidan turli xil fonlar topishingiz mumkin 😉",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"q1"],['text'=>"2️⃣","callback_data"=>"q2"]],
[['text'=>"3️⃣","callback_data"=>"q3"],['text'=>"4️⃣","callback_data"=>"q4"]],
[['text'=>"5️⃣","callback_data"=>"q5"],['text'=>"6️⃣","callback_data"=>"q6"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
// Juftliklar uchun

if($tx=="👩‍❤️‍💋‍👨 Juftliklar uchun"){
   bot('sendPhoto',[
      'chat_id'=>$cid,
      'photo'=>"https://t.me/Mod_Gamer/359",
    'caption'=>"Juftliklar uchun logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇

@CHORNIFON - Kanalidan turli xil fonlar topishingiz mumkin 😉",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"j1"],['text'=>"2️⃣","callback_data"=>"j2"]],
[['text'=>"3️⃣","callback_data"=>"j3"],['text'=>"4️⃣","callback_data"=>"j4"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}

// Pubg logo

if($tx=="😎 PUBG Logo"){
   bot('sendPhoto',[
      'chat_id'=>$cid,
      'photo'=>"https://t.me/Mod_Gamer/358",
    'caption'=>"PUBG logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇

@CHORNIFON - Kanalidan turli xil fonlar topishingiz mumkin 😉",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"p1"],['text'=>"2️⃣","callback_data"=>"p2"]],
[['text'=>"3️⃣","callback_data"=>"p3"],['text'=>"4️⃣","callback_data"=>"p4"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}
// --------------------Bollar uchun boshlandi-------------------- \\
if($data=="b1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy1");
}

if($step2=="boy1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/60.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov

if($data=="b2"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy2");
}

if($step2=="boy2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/61.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="b3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy3");
}

if($step2=="boy3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/26.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="b4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy4");
}

if($step2=="boy4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/27.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="b5"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy5");
}

if($step2=="boy5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/28.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="b6"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy6");
}

if($step2=="boy6"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/62.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov

// --------------------Qizlar uchun boshlandi-------------------- \\
if($data=="q1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz1");
}

if($step2=="qiz1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/67.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="q2"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz2");
}

if($step2=="qiz2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/68.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="q3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz3");
}

if($step2=="qiz3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/69.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="q4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz4");
}

if($step2=="qiz4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/70.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q5"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz5");
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($step2=="qiz5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/71.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q6"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz6");
}

if($step2=="qiz6"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/72.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

// --------------------Juftliklar uchun boshlandi-------------------- \\
if($data=="j1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft1");
}

if($step2=="juft1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/63.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="j2"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft2");
}

if($step2=="juft2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/64.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="j3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft3");
}

if($step2=="juft3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/65.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="j4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft4");
}

if($step2=="juft4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/66.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

// --------------------PUBG Logo boshlandi-------------------- \\
if($data=="p1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg1");
}

if($step2=="pubg1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/56.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="p2"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg2");
}

if($step2=="pubg2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/57.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="p3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg3");
}

if($step2=="pubg3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/58.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="p4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg4");
}

if($step2=="pubg4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/59.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

// Humans logo 

if($text=="🟡 Humans logo"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"📃 Ismingizni kiriting:
  
  ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
  'parse_mode'=>"html",
  'reply_markup'=>$back,
  ]);
  file_put_contents("Bot/2.step","humans");
  }
  
  if($step2=="humans"){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
   'parse_mode'=>"HTML"
   ]);
  bot('sendmessage',[
  'chat_id'=>$cid,
         'text' => "Tayyor 🦋",
         'parse_mode'=>'html', 
  'reply_markup'=>$back,
  ]);
  file_put_contents("Bot/2.ism","$text"); 
  file_put_contents("Bot/2.step","");
  bot('sendphoto',[
  'chat_id'=>$cid,
  'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/28.php?text=$text",
  'caption'=>"
  📃 Buyurtmangiz tayyor bo'ldi 😉
  
  🔥 @$botim - Do'stlaringizni taklif qiling !",
  'parse_mode'=>'html',
  'reply_markup' => json_encode([
                  'inline_keyboard'=>[
    [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
   [['text'=>'🏠','callback_data'=>'back']],
  
  ]
  ])
  ]);
  }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov




// status yozish

if ($text=="✍🏻 Status yozish") {
  bot('sendPhoto',[
  'chat_id'=>$cid,
  'photo'=>"https://t.me/Mod_Gamer/353",
  'caption'=>"<b>Quydagilardan bittasini tanlang👇</b>",
  'parse_mode'=>"HTML",
  'reply_markup'=>json_encode([
  'inline_keyboard'=>[
   [['text'=>"⬅️Orqaga",'callback_data'=>"orqagaqayt"],['text'=>"1/3",'callback_data'=>"taqsimuch"],['text'=>"Oldinga➡️",'callback_data'=>"oldingaut"]],
   [['text'=>"Tanlash✅",'callback_data'=>"verifytanlash"]]
   ]
  ])
  ]);
}

$callcid = $update->callback_query->message->chat->id;
$callmid = $update->callback_query->message->message_id;

if($data=="orqagaqayt"){
   bot('deletemessage',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
]);
    bot('sendPhoto',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'photo'=>"https://t.me/Mod_Gamer/353",
       'caption'=>"<b>Quydagilardan bittasini tanlang👇</b>",
'parse_mode'=>'html',
'reply_markup' => json_encode([
  'inline_keyboard'=>[
   [['text'=>"⬅️Orqaga",'callback_data'=>"orqagaqayt"],['text'=>"1/3",'callback_data'=>"taqsimuch"],['text'=>"Oldinga➡️",'callback_data'=>"oldingaut"]],
   [['text'=>"Tanlash✅",'callback_data'=>"verifytanlash"]]
   ]
  ])
  ]);
}


if($data=="oldingaut"){
   bot('deletemessage',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
]);
bot('sendPhoto',[
'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'photo'=>"https://t.me/Mod_Gamer/354",
       'caption'=>"<b>Quydagilardan bittasini tanlang👇</b>",
'parse_mode'=>'html',
'reply_markup' => json_encode([
  'inline_keyboard'=>[
   [['text'=>"⬅️Orqaga",'callback_data'=>"orqagaqayt"],['text'=>"2/3",'callback_data'=>"taqsimuch"],['text'=>"Oldinga➡️",'callback_data'=>"oldingaut1"]],
   [['text'=>"Tanlash✅",'callback_data'=>"verifytanlash1"]]
   ]
  ])
]);
}

if($data=="orqagaqayt12"){
   bot('deletemessage',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
]);
bot('sendphoto',[
'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'photo'=>"https://t.me/Mod_Gamer/354",
       'caption'=>"<b>Quydagilardan bittasini tanlang👇</b>",
'parse_mode'=>'html',
'reply_markup' => json_encode([
  'inline_keyboard'=>[
   [['text'=>"⬅️Orqaga",'callback_data'=>"orqagaqayt"],['text'=>"2/3",'callback_data'=>"taqsimuch"],['text'=>"Oldinga➡️",'callback_data'=>"oldingaut1"]],
   [['text'=>"Tanlash✅",'callback_data'=>"verifytanlash1"]]
   ]
  ])
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="oldingaut1"){
   bot('deletemessage',[
       'chat_id'=>$callcid,
       'message_id'=>$callmid,
      
]);
   bot('sendphoto',[
    'chat_id'=>$callcid,
       'message_id'=>$callmid,
       'photo'=>"https://t.me/Mod_Gamer/355",
       'caption'=>"<b>Quydagilardan bittasini tanlang👇</b>",
'parse_mode'=>'html',
'reply_markup' => json_encode([
  'inline_keyboard'=>[
   [['text'=>"⬅️Orqaga",'callback_data'=>"orqagaqayt12"],['text'=>"3/3",'callback_data'=>"taqsimuch"],['text'=>"Oldinga➡️",'callback_data'=>"oldingaut1"]],
   [['text'=>"Tanlash✅",'callback_data'=>"verifytanlash3"]]
   ]
   ])
   ]);
}

if($data=="verifytanlash3"){
bot('sendmessage',[
'chat_id'=>$callcid,
       'message_id'=>$callmid,
'text'=>"<b>Status yozish uchun matn kiriting✍️</b>",
'parse_mode'=>"html",
'reply_markup'=> $back,
]);
file_put_contents("Bot/4.step","ism3");
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($step4=="ism3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... ⚡</b>",
'parse_mode'=>"HTML"
]);
file_put_contents("bot/3.ism","$text"); 
file_put_contents("Bot/4.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/55.php?text=$text",
'caption'=>"",
'parse_mode'=>'html',
'reply_markup' =>$back,
]);
}

if($data=="verifytanlash1"){
bot('sendmessage',[
'chat_id'=>$callcid,
       'message_id'=>$callmid,
'text'=>"<b>Status yozish uchun matn kiriting✍️</b>",
'parse_mode'=>"html",
'reply_markup'=> $back,
]);
file_put_contents("Bot/3.step","ism2");
}

if($step3=="ism2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... ⚡</b>",
'parse_mode'=>"HTML"
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/3.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/54.php?text=$text",
'caption'=>"",
'parse_mode'=>'html',
'reply_markup' =>$back,
]);
}

 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov


if($data=="verifytanlash"){
bot('sendmessage',[
'chat_id'=>$callcid,
       'message_id'=>$callmid,
'text'=>"<b>Status yozish uchun matn kiriting✍️</b>",
'parse_mode'=>"html",
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.step","ism1");
}

if($step2=="ism1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... ⚡</b>",
'parse_mode'=>"HTML"
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/53.php?text=$text",
'caption'=>"",
'parse_mode'=>'html',
'reply_markup' =>$back,
]);
}

if($data=="taqsimuch"){
    bot ('answerCallbackQuery', [
        'callback_query_id'=> $qid,
        'text'=>"Botimizdan uzoqlashmang siz uchun eng yaxshilarini ilinamiz. Xurmat bilan Asrorbek Ibrohimov ( @AsrorDev )",
        'show_alert'=>true,
        ]);
}

if($tx=="👕 Futbolkaga ism"){
  bot('sendPhoto',[
    'chat_id'=>$cid,
    'photo'=>"https://t.me/Mod_Gamer/366",
    'caption'=>"Qaysi komandani futbolkasiga ismingizni yozmoqchisiz? Tanlang 😎👇",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"👕 FCB","callback_data"=>"fc"],['text'=>"👕 RMA","callback_data"=>"fc1"]],
        [['text'=>"👕 Arsenal","callback_data"=>"fc2"],['text'=>"👕 Liverpool","callback_data"=>"fc3"]],
      ]
    ]),
  ]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($tx=="🎁 Syurpriz"){
  bot('sendPhoto',[
    'chat_id'=>$cid,
    'photo'=>"https://t.me/Mod_Gamer/365",
    'caption'=>"Bu bo'lim qanday bo'lim ekan? Nima qilsa bo'lar ekan? degan savol qiziqtirayabdimi 😅 
U xolda darxol sinab koring. Bunaqasi xali xech qayerda yo'q 🤫",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"1️⃣ - Stil","callback_data"=>"priz"],['text'=>"2️⃣ - Stil","callback_data"=>"priz1"]],
      ]
    ]),
  ]);
}

// syurpiriz bolimi

if($data=="priz"){
  bot('sendmessage',[
  'chat_id'=>$callcid,
  'message_id'=>$callmid,
  'text'=>"📃 Ismingizni kiriting:
  
  ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
  'parse_mode'=>"html",
  'reply_markup'=>$back,
  ]);
  file_put_contents("Bot/2.step","priz");
  }
  
  if($step2=="priz"){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
   'parse_mode'=>"HTML"
   ]);
  file_put_contents("Bot/2.ism","$text"); 
  file_put_contents("Bot/2.step","");
  bot('sendphoto',[
  'chat_id'=>$cid,
  'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/73.php?text=$text",
  'caption'=>"
  📃 Buyurtmangiz tayyor bo'ldi 😉
  
  🔥 @$botim - Do'stlaringizni taklif qiling !",
  'parse_mode'=>'html',
  'reply_markup' => json_encode([
                  'inline_keyboard'=>[
    [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
   [['text'=>'🏠','callback_data'=>'back']],
  
  ]
  ])
  ]);
  }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
  if($data=="priz1"){
    bot('sendmessage',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'text'=>"📃 Ismingizni kiriting:
    
    ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
    'parse_mode'=>"html",
    'reply_markup'=>$back,
    ]);
    file_put_contents("Bot/2.step","prizz");
    }
    
    if($step2=="prizz"){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
     'parse_mode'=>"HTML"
     ]);
    file_put_contents("Bot/2.ism","$text"); 
    file_put_contents("Bot/2.step","");
    bot('sendphoto',[
    'chat_id'=>$cid,
    'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/76.php?text=$text",
    'caption'=>"
    📃 Buyurtmangiz tayyor bo'ldi 😉
    
    🔥 @$botim - Do'stlaringizni taklif qiling !",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
                    'inline_keyboard'=>[
      [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
     [['text'=>'🏠','callback_data'=>'back']],
    
    ]
    ])
    ]);
    }
  

// Futbolkaga ism bo'limi

if($data=="fc"){
  bot('sendmessage',[
  'chat_id'=>$callcid,
  'message_id'=>$callmid,
  'text'=>"📃 Ismingizni kiriting:
  
  ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
  'parse_mode'=>"html",
  'reply_markup'=>$back,
  ]);
  file_put_contents("Bot/2.step","futbol");
  }
  
  if($step2=="futbol"){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
   'parse_mode'=>"HTML"
   ]);
  file_put_contents("Bot/2.ism","$text"); 
  file_put_contents("Bot/2.step","");
  bot('sendphoto',[
  'chat_id'=>$cid,
  'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/77.php?text=$text",
  'caption'=>"
  📃 Buyurtmangiz tayyor bo'ldi 😉
  
  🔥 @$botim - Do'stlaringizni taklif qiling !",
  'parse_mode'=>'html',
  'reply_markup' => json_encode([
                  'inline_keyboard'=>[
    [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
   [['text'=>'🏠','callback_data'=>'back']],
  
  ]
  ])
  ]);
  }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
  if($data=="fc1"){
    bot('sendmessage',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'text'=>"📃 Ismingizni kiriting:
    
    ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
    'parse_mode'=>"html",
    'reply_markup'=>$back,
    ]);
    file_put_contents("Bot/2.step","futbol1");
    }
    
    if($step2=="futbol1"){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
     'parse_mode'=>"HTML"
     ]);
    file_put_contents("Bot/2.ism","$text"); 
    file_put_contents("Bot/2.step","");
    bot('sendphoto',[
    'chat_id'=>$cid,
    'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/79.php?text=$text",
    'caption'=>"
    📃 Buyurtmangiz tayyor bo'ldi 😉
    
    🔥 @$botim - Do'stlaringizni taklif qiling !",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
                    'inline_keyboard'=>[
      [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
     [['text'=>'🏠','callback_data'=>'back']],
    
    ]
    ])
    ]);
    }

    if($data=="fc2"){
      bot('sendmessage',[
      'chat_id'=>$callcid,
      'message_id'=>$callmid,
      'text'=>"📃 Ismingizni kiriting:
      
      ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
      'parse_mode'=>"html",
      'reply_markup'=>$back,
      ]);
      file_put_contents("Bot/2.step","futbol12");
      }
      
      if($step2=="futbol12"){
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
       'parse_mode'=>"HTML"
       ]);
      file_put_contents("Bot/2.ism","$text"); 
      file_put_contents("Bot/2.step","");
      bot('sendphoto',[
      'chat_id'=>$cid,
      'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/78.php?text=$text",
      'caption'=>"
      📃 Buyurtmangiz tayyor bo'ldi 😉
      
      🔥 @$botim - Do'stlaringizni taklif qiling !",
      'parse_mode'=>'html',
      'reply_markup' => json_encode([
                      'inline_keyboard'=>[
        [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
       [['text'=>'🏠','callback_data'=>'back']],
      
      ]
      ])
      ]);
      }

       // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov

  
      if($data=="fc3"){
        bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"📃 Ismingizni kiriting:
        
        ❗️ Diqqat siz yozgan ism rasmga yoziladi.",
        'parse_mode'=>"html",
        'reply_markup'=>$back,
        ]);
        file_put_contents("Bot/2.step","futbol123");
        }
        
        if($step2=="futbol123"){
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
         'parse_mode'=>"HTML"
         ]);
        file_put_contents("Bot/2.ism","$text"); 
        file_put_contents("Bot/2.step","");
        bot('sendphoto',[
        'chat_id'=>$cid,
        'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/75.php?text=$text",
        'caption'=>"
        📃 Buyurtmangiz tayyor bo'ldi 😉
        
        🔥 @$botim - Do'stlaringizni taklif qiling !",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
                        'inline_keyboard'=>[
          [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
         [['text'=>'🏠','callback_data'=>'back']],
        
        ]
        ])
        ]);
        }
    // Nik yasash bo'limi


$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$tx = $message->text;
$cid = $message->chat->id;
$ism = $message->from->first_name;
$inline = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$reply = $message->reply_to_message->text;  
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
$rpl = json_encode([
    'recize_keyboard'=>false,
    'force_reply'=>true,
    'selective'=>true
     ]);

if($tx=="🖌 Nik Yasash"){
bot("sendMessage",[
         "chat_id"=>$cid,
'text'=>"<b>Assalomu alaykum botimizga xush kelibsiz.

Menyuni tanlang⬇️</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>'🖌 Nik Yasash','callback_data'=>"AsrorDev"],['text'=>'📬 Reklama','url'=>"https://t.me/REKLAMAL4R/20"],], 
 ]
])
]);  
}
if($inline=="AsrorDev"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"✅ Assalomu alaykum xurmatli botimiz a'zosi nick yasomoqchi bo'lgan so'zingizni yuboring.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅ Assalomu alaykum xurmatli botimiz a'zosi nick yasomoqchi bo'lgan so'zingizni yuboring."){
if($text){
 	$AsrorDev = $text;
$AsrorDev = str_replace('q', 'ϙᷭ', $AsrorDev);
   $AsrorDev = str_replace('w', 'ᴡᷱ', $AsrorDev);
   $AsrorDev = str_replace('e', 'ᴇⷷ', $AsrorDev);
   $AsrorDev = str_replace('r', 'ʀᷢ', $AsrorDev);
   $AsrorDev = str_replace('t', 'ᴛͭ', $AsrorDev);
   $AsrorDev = str_replace('y', 'ʏꙷ', $AsrorDev);
   $AsrorDev = str_replace('u', 'ᴜͧ', $AsrorDev);
   $AsrorDev = str_replace('i', 'ɪͥ', $AsrorDev);
   $AsrorDev = str_replace('o', 'ᴏⷪ', $AsrorDev);
   $AsrorDev = str_replace('p', 'ᴘᷮ', $AsrorDev);
   $AsrorDev = str_replace('a', 'ᴀⷽ', $AsrorDev);
   $AsrorDev = str_replace('s', 'sᷤ', $AsrorDev);
   $AsrorDev = str_replace('d', 'ᴅͩ', $AsrorDev);
   $AsrorDev = str_replace('f', 'ғᷫ', $AsrorDev);
   $AsrorDev = str_replace('g', 'ɢᷛ', $AsrorDev);
   $AsrorDev = str_replace('h', 'ʜⷩ', $AsrorDev);
   $AsrorDev = str_replace('j', 'ᴊᷯ', $AsrorDev);
   $AsrorDev = str_replace('k', 'ᴋⷦ', $AsrorDev);
   $AsrorDev = str_replace('l', 'ʟᷞ', $AsrorDev);
   $AsrorDev = str_replace('z', 'ᴢᷦ', $AsrorDev);
   $AsrorDev = str_replace('x', 'xͯ', $AsrorDev);
   $AsrorDev = str_replace('c', 'ᴄⷭ', $AsrorDev);
   $AsrorDev = str_replace('v', 'ᴠͮ', $AsrorDev);
   $AsrorDev = str_replace('b', 'ʙⷡ', $AsrorDev);
   $AsrorDev = str_replace('n', 'ɴᷡ', $AsrorDev);
   $AsrorDev = str_replace('m', 'ᴍᷟ', $AsrorDev);
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"<b>✅ Tayyorlanmoqda...</b>",
 'parse_mode'=>"html"
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'✅ Tayyorlanmoqda...'
 ]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(1);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.*

Nickingiz: `$AsrorDev`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⬅️ Avvalgi", 'callback_data' => "AsrorDev"],['text'=>"1/6", 'callback_data' => "taqsimuch"],['text'=>"Keyingi ➡️", 'callback_data' => "keyingi"]],
[['text'=>"🏠",'callback_data'=>"orqa"]]
    ]
    ]),
 ]);
 }
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($inline=="keyingi"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'text'=>"✅ Ikkinchi turdagi nick yasashga so'zingizni yuboring.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅ Ikkinchi turdagi nick yasashga so'zingizni yuboring."){
if($text){
 	$IbrokhimovUz = $text;
$IbrokhimovUz = str_replace('q', 'ϙ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('w', 'ᴡ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('e', 'ᴇ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('r', 'ʀ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('t', 'ᴛ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('y', 'ʏ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('u', 'ᴜ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('i', 'ɪ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('o', 'ᴏ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('p', 'ᴘ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('a', 'ᴀ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('s', 's', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('d', 'ᴅ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('f', 'ғ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('g', 'ɢ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('h', 'ʜ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('j', 'ᴊ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('k', 'ᴋ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('l', 'ʟ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('z', 'ᴢ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('x', 'x', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('c', 'ᴄ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('v', 'ᴠ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('b', 'ʙ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('n', 'ɴ', $IbrokhimovUz);
   $IbrokhimovUz = str_replace('m', 'ᴍ', $IbrokhimovUz);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.*

Nickingiz: `$IbrokhimovUz`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⬅️ Avvalgi", 'callback_data' => "AsrorDev"],['text'=>"2/6", 'callback_data' => "taqsimuch"],['text'=>"Keyingi ➡️", 'callback_data' => "keyingi1"]],
[['text'=>"🏠",'callback_data'=>"orqa"]]
    ]
    ]),
 ]);
 }
}
if($inline=="keyingi1"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'text'=>"✅ Uchinchi turdagi nick yasashga so'z yuboring.",
 'reply_markup'=>$rpl,
 ]);
 }
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($reply=="✅ Uchinchi turdagi nick yasashga so'z yuboring."){
if($text){
 	$Asrorbek = $text;
$Asrorbek = str_replace('a', 'ⓐ', $text);
$Asrorbek = str_replace('‍A', '‍Ⓐ', $Asrorbek);
$Asrorbek = str_replace('b', 'ⓑ', $Asrorbek);
$Asrorbek = str_replace('c', 'ⓒ', $Asrorbek);
$Asrorbek = str_replace('d', 'ⓓ', $Asrorbek);
$Asrorbek = str_replace('e', 'ⓔ', $Asrorbek);
$Asrorbek = str_replace('f', 'ⓕ', $Asrorbek);
$Asrorbek = str_replace('g', 'ⓖ', $Asrorbek);
$Asrorbek = str_replace('h', 'ⓗ', $Asrorbek);
$Asrorbek = str_replace('i', 'ⓘ', $Asrorbek);
$Asrorbek = str_replace('j', 'ⓙ', $Asrorbek);
$Asrorbek = str_replace('k', 'ⓚ', $Asrorbek);
$Asrorbek = str_replace('l', 'ⓛ', $Asrorbek);
$Asrorbek = str_replace('m', 'ⓜ', $Asrorbek);
$Asrorbek = str_replace('n', 'ⓝ', $Asrorbek);
$Asrorbek = str_replace('o', 'ⓞ', $Asrorbek);
$Asrorbek = str_replace('p', 'ⓟ', $Asrorbek);
$Asrorbek = str_replace('q', 'ⓠ', $Asrorbek);
$Asrorbek = str_replace('r', 'ⓡ', $Asrorbek);
$Asrorbek = str_replace('s', 'ⓢ', $Asrorbek);
$Asrorbek = str_replace('t', 'ⓣ', $Asrorbek);
$Asrorbek = str_replace('u', 'ⓤ', $Asrorbek);
$Asrorbek = str_replace('v', 'ⓥ', $Asrorbek);
$Asrorbek = str_replace('w', 'ⓦ', $Asrorbek);
$Asrorbek = str_replace('x', 'ⓧ', $Asrorbek);
$Asrorbek = str_replace('y', 'ⓨ', $Asrorbek);
$Asrorbek = str_replace('z', 'ⓩ', $Asrorbek);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.*

Nickingiz: `$Asrorbek`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⬅️ Avvalgi", 'callback_data' => "keyingi"],['text'=>"3/6", 'callback_data' => "taqsimuch"],['text'=>"Keyingi ➡️", 'callback_data' => "keyingi2"]],
[['text'=>"🏠",'callback_data'=>"orqa"]]
    ]
    ]),
 ]);
 }
}
if($inline=="keyingi2"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'text'=>"✅ To'rtinchi turdagi nick yasashga so'z yuboring.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅ To'rtinchi turdagi nick yasashga so'z yuboring."){
if($text){
 	$Ibrohimov = $text;
$Ibrohimov = str_replace('a', 'ค', $text);
$Ibrohimov = str_replace('b', 'β', $Ibrohimov);
$Ibrohimov = str_replace('c', 'ር', $Ibrohimov);
$Ibrohimov = str_replace('d', 'ᵈ', $Ibrohimov);
$Ibrohimov = str_replace('e', 'ᵉ', $Ibrohimov);
$Ibrohimov = str_replace('f', 'ᶠ', $Ibrohimov);
$Ibrohimov = str_replace('g', 'ᵍ', $Ibrohimov);
$Ibrohimov = str_replace('h', 'ⷩ', $Ibrohimov);
$Ibrohimov = str_replace('i', 'ᷝ', $Ibrohimov);
$Ibrohimov = str_replace('j', '၂', $Ibrohimov);
$Ibrohimov = str_replace('k', 'Ꮶ', $Ibrohimov);
$Ibrohimov = str_replace('l', 'Ꮮ', $Ibrohimov);
$Ibrohimov = str_replace('m', 'Ꮇ', $Ibrohimov);
$Ibrohimov = str_replace('n', 'Ν', $Ibrohimov);
$Ibrohimov = str_replace('o', 'ợ', $Ibrohimov);
$Ibrohimov = str_replace('p', 'Ꮲ', $Ibrohimov);
$Ibrohimov = str_replace('q', 'Ϙ', $Ibrohimov);
$Ibrohimov = str_replace('r', 'Ꭱ', $Ibrohimov);
$Ibrohimov = str_replace('s', 'Ꮪ', $Ibrohimov);
$Ibrohimov = str_replace('t', 'Ꮖ', $Ibrohimov);
$Ibrohimov = str_replace('u', 'Ꮍ', $Ibrohimov);
$Ibrohimov = str_replace('v', 'Ꮩ', $Ibrohimov);
$Ibrohimov = str_replace('w', 'Ꮃ', $Ibrohimov);
$Ibrohimov = str_replace('x', 'X', $Ibrohimov);
$Ibrohimov = str_replace('y', 'ʏ', $Ibrohimov);
$Ibrohimov = str_replace('z', 'ᴢ', $Ibrohimov);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.*

Nickingiz: `$Ibrohimov`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⬅️ Avvalgi", 'callback_data' => "keyingi1"],['text'=>"4/6", 'callback_data' => "taqsimuch"],['text'=>"Keyingi ➡️", 'callback_data' => "keyingi3"]],
[['text'=>"🏠",'callback_data'=>"orqa"]]
    ]
    ]),
 ]);
 }
} // Developer: @IbrokhimovUz  
// Channel: @Asror_Ibrohimov
if($inline=="keyingi3"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'text'=>"✅ Beshinchi turdagi nick yasashga so'z yuboring.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅ Beshinchi turdagi nick yasashga so'z yuboring."){
if($text){
 	$CHORNIFON = $text;
$CHORNIFON = str_replace('a', '⒜', $text);
$CHORNIFON = str_replace('b', '⒝', $CHORNIFON);
$CHORNIFON = str_replace('c', '⒞', $CHORNIFON);
$CHORNIFON = str_replace('d', '⒟', $CHORNIFON);
$CHORNIFON = str_replace('e', '⒠', $CHORNIFON);
$CHORNIFON = str_replace('f', '⒡', $CHORNIFON);
$CHORNIFON = str_replace('g', '⒢', $CHORNIFON);
$CHORNIFON = str_replace('h', '⒣', $CHORNIFON);
$CHORNIFON = str_replace('i', '⒤', $CHORNIFON);
$CHORNIFON = str_replace('j', '⒥', $CHORNIFON);
$CHORNIFON = str_replace('k', '⒦', $CHORNIFON);
$CHORNIFON = str_replace('l', '⒧', $CHORNIFON);
$CHORNIFON = str_replace('m', '⒨', $CHORNIFON);
$CHORNIFON = str_replace('n', '⒩', $CHORNIFON);
$CHORNIFON = str_replace('o', '⒪', $CHORNIFON);
$CHORNIFON = str_replace('p', '⒫', $CHORNIFON);
$CHORNIFON = str_replace('q', '⒬', $CHORNIFON);
$CHORNIFON = str_replace('r', '⒭', $CHORNIFON);
$CHORNIFON = str_replace('s', '⒮', $CHORNIFON);
$CHORNIFON = str_replace('t', '⒯', $CHORNIFON);
$CHORNIFON = str_replace('u', '⒰', $CHORNIFON);
$CHORNIFON = str_replace('v', '⒱', $CHORNIFON);
$CHORNIFON = str_replace('w', '⒲', $CHORNIFON);
$CHORNIFON = str_replace('x', '⒳', $CHORNIFON);
$CHORNIFON = str_replace('y', '⒴', $CHORNIFON);
$CHORNIFON = str_replace('z', '⒵', $CHORNIFON);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.*

Nickingiz: `$CHORNIFON`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⬅️ Avvalgi", 'callback_data' => "keyingi2"],['text'=>"5/6", 'callback_data' => "taqsimuch"],['text'=>"Keyingi ➡️", 'callback_data' => "keyingi9"]],
[['text'=>"🏠",'callback_data'=>"orqa"]]
    ]
    ]),
 ]);
 }
}
if($inline=="keyingi9"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'text'=>"✅ Oltinchi turdagi nick yasashga so'z yuboring.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅ Oltinchi turdagi nick yasashga so'z yuboring."){
if($text){
 	$PSIXALOGlYA = $text;
$PSIXALOGlYA = str_replace('a', '🅐', $text);
$PSIXALOGlYA = str_replace('‍A', '‍🅐', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('b', '🅑', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('c', '🅒', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('d', '🅓', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('e', '🅔', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('f', '🅕', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('g', '🅖', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('h', '🅗', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('i', '🅘', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('j', '🅙', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('k', '🅚', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('l', '🅛', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('m', '🅜', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('n', '🅝', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('o', '🅞', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('p', '🅟', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('q', '🆀', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('r', '🅡', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('s', '🅢', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('t', '🅣', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('u', '🅤', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('v', '🅥', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('w', '🅦', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('x', '🅧', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('y', '🅨', $PSIXALOGlYA);
$PSIXALOGlYA = str_replace('z', '🅩', $PSIXALOGlYA);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.*

Nickingiz: `$PSIXALOGlYA`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⬅️ Avvalgi", 'callback_data' => "keyingi3"],['text'=>"6/6", 'callback_data' => "taqsimuch"],['text'=>"Keyingi ➡️", 'callback_data' => "keyingi"]],
[['text'=>"🏠",'callback_data'=>"orqa"]]
    ]
    ]),
 ]);
 }
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($data=="orqa"){
    bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"<b>Assalomu alaykum botimizga xush kelibsiz.

Menyuni tanlang⬇️</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}

if($tx=="1️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!

Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}
  // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($tx=="2️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
  
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}

if($tx=="3️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
    
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($tx=="4️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
      
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}

if($tx=="5️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
        
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($tx=="6️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
          
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}

if($tx=="7️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
            
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}
 // Developer: @IbrokhimovUz  
   // Channel: @Asror_Ibrohimov
if($tx=="8️⃣"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Kechirasiz $name !
Ushbu fotolarni buyurtma sifatida tayyorlab beramiz!
Buning uchun @CHORNIFON_GR guruhimizga o'tib kamida 60-70 ta (100 ta atrofida) kantakt qo'shing va 💌 Buyurtma berish tugmasini bosib buyurtma bering!
              
Eslatma! Agar odam qoshmasdan buyurtma bersangiz botimizdan ban olasiz va buyurtmangiz bajarilmaydi!!!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👤 Guruhga odam qoshish","url"=>"https://t.me/chornifon_gr"]],
[['text'=>"💌 Buyurtma berish","url"=>"https://t.me/BuyurtmalarUz_Bot"]],
]]),
]);
}





/* 

Ushbu kod @IbrokhimovUz tomonidan tuzildi va @Kingsofphp va @php_python_cod kanallarida tarqatildi
Manbaga tegmang deb aytaveramiz baribir 5-6 ta befarosat "Coderlar" manbani olib tashlab o'zinikini qo'yib tarqatvoradi 😂🤦‍♂️

Bundan nima foyda ? Xullas insofingiz bo'lsa manbaga va mualliflik huquqiga teginmang ! 

Yaxshilikga buyursin @IbrokhimovUz dan sovg'a 😅🤚

Kanalimga ham obuna bo'lib qo'yilar @Asror_Ibrohimov

*/


// Kodning hamma yeri va apilari 101% ishlaydi !!!

?>
