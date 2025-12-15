<?php
ob_start();
error_reporting(0);
date_Default_timezone_set('Asia/Tashkent');

/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/

define("visualcoderuz", '8398800703:AAHhCmdBlLdHvop4KvlehTbmbQLlzmC4jZk');
$admin = "8125289524";
$bot = bot('getme', ['bot'])->result->username;
$botname = bot('getme', ['bot'])->result->first_name;
$user = file_get_contents("tizim/user.txt");
$soat = date('H:i');
$sana = date("d.m.Y");

function joinchat($id)
{
       global $mid;
       $array = array("inline_keyboard");
       $get = file_get_contents("tizim/kanal.txt");
       $ex = explode("\n", $get);
       if ($get == null) {
              return true;
       } else {
              for ($i = 0; $i <= count($ex) - 1; $i++) {
                     $first_line = $ex[$i];
                     $first_ex = explode("-", $first_line);
                     $name = $first_ex[0];
                     $url = $first_ex[1];
                     $ret = bot("getChatMember", [
                            "chat_id" => "@$url",
                            "user_id" => $id,
                     ]);
                     $stat = $ret->result->status;
                     if ((($stat == "creator" or $stat == "administrator" or $stat == "member"))) {
                            $array['inline_keyboard']["$i"][0]['text'] = "✅ " . $name;
                            $array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
                     } else {
                            $array['inline_keyboard']["$i"][0]['text'] = "❌ " . $name;
                            $array['inline_keyboard']["$i"][0]['url'] = "https://t.me/$url";
                            $uns = true;
                     }
              }
              $array['inline_keyboard']["$i"][0]['text'] = "🔄 Tekshirish";
              $array['inline_keyboard']["$i"][0]['callback_data'] = "result";
              if ($uns == true) {
                     bot('sendMessage', [
                            'chat_id' => $id,
                            'text' => "⚠️ <b>Botdan foydalanish uchun, quyidagi kanallarga obuna bo'ling:</b>",
                            'parse_mode' => 'html',
                            'disable_web_page_preview' => true,
                            'reply_markup' => json_encode($array),
                     ]);
                     return false;
              } else {
                     return true;
              }
       }
}

function getAdmin($chat)
{
       $url = "https://api.telegram.org/bot" . visualcoderuz . "/getChatAdministrators?chat_id=@" . $chat;
       $result = file_get_contents($url);
       $result = json_decode($result);
       return $result->ok;
}

function deleteFolder($path)
{
       if (is_dir($path) === true) {
              $files = array_diff(scandir($path), array('.', '..'));
              foreach ($files as $file)
                     deleteFolder(realpath($path) . '/' . $file);
              return rmdir($path);
       } else if (is_file($path) === true)
              return unlink($path);
       return false;
}

function bot($method, $datas = [])
{
       $url = "https://api.telegram.org/bot" . visualcoderuz . "/" . $method;
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
       $res = curl_exec($ch);
       if (curl_error($ch)) {
              var_dump(curl_error($ch));
       } else {
              return json_decode($res);
       }
}

$visualcoderuz = json_decode(file_get_contents('php://input'));
$message = $visualcoderuz->message;
$cid = $message->chat->id;
$name = $message->chat->first_name;
$tx = $message->text;
$step = file_get_contents("step/$cid.step");
$mid = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$uid = $message->from->id;
$name = $message->from->first_name;
$familya = $message->from->last_name;
$bio = $message->from->about;
$username = $message->from->username;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$reply = $message->reply_to_message->text;
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
//inline uchun metodlar
$data = $visualcoderuz->callback_query->data;
$qid = $visualcoderuz->callback_query->id;
$id = $visualcoderuz->inline_query->id;
$query = $visualcoderuz->inline_query->query;
$query_id = $visualcoderuz->inline_query->from->id;
$cid2 = $visualcoderuz->callback_query->message->chat->id;
$mid2 = $visualcoderuz->callback_query->message->message_id;
$callfrid = $visualcoderuz->callback_query->from->id;
$callname = $visualcoderuz->callback_query->from->first_name;
$calluser = $visualcoderuz->callback_query->from->username;
$surname = $visualcoderuz->callback_query->from->last_name;
$about = $visualcoderuz->callback_query->from->about;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";

if (file_get_contents("tugma/key1.txt")) {
} else {
       if (file_put_contents("tugma/key1.txt", "🎟 O'yinlarga pul solish"));
}
if (file_get_contents("tugma/key2.txt")) {
} else {
       if (file_put_contents("tugma/key2.txt", "💵 Pul yig'ish"));
}
if (file_get_contents("tugma/key3.txt")) {
} else {
       if (file_put_contents("tugma/key3.txt", "💳 Mening hisobim"));
}
if (file_get_contents("tugma/key4.txt")) {
} else {
       if (file_put_contents("tugma/key4.txt", '📞 Murojaat'));
}
if (file_get_contents("tugma/key5.txt")) {
} else {
       if (file_put_contents("tugma/key5.txt", "📕 Qo'llanma"));
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if (file_get_contents("tizim/user.txt")) {
} else {
       if (file_put_contents("tizim/user.txt", 'Kiritilmagan'));
}
if (file_get_contents("tizim/promo.txt")) {
} else {
       if (file_put_contents("tizim/promo.txt", 'Kiritilmagan'));
}
if (file_get_contents("tizim/referal.txt")) {
} else {
       if (file_put_contents("tizim/referal.txt", '250'));
}
if (file_get_contents("tizim/valyuta.txt")) {
} else {
       if (file_put_contents("tizim/valyuta.txt", "so'm"));
}

if (file_get_contents("tizim/reklama.txt")) {
} else {
       if (file_put_contents("tizim/reklama.txt", "Yoqilgan"));
}
if (file_get_contents("tizim/qollanma.txt")) {
} else {
       if (file_put_contents("tizim/qollanma.txt", "Kiritilmagan."));
}

$key1 = file_get_contents("tugma/key1.txt");
$key2 = file_get_contents("tugma/key2.txt");
$key3 = file_get_contents("tugma/key3.txt");
$key4 = file_get_contents("tugma/key4.txt");
$key5 = file_get_contents("tugma/key5.txt");

$test = file_get_contents("step/test.txt");
$test1 = file_get_contents("step/test1.txt");
$test2 = file_get_contents("step/test2.txt");

$turi = file_get_contents("tizim/turi.txt");
$addition = file_get_contents("tizim/$test/addition.txt");
$wallet = file_get_contents("tizim/$test/wallet.txt");

$pul = file_get_contents("pul/$cid.txt");
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid.dat");
$odam = file_get_contents("odam/$cid2.dat");
$ban = file_get_contents("ban/$cid.txt");
$baza = file_get_contents("azo.dat");

$kod = file_get_contents("step/kod.txt");
$money = file_get_contents("step/money.txt");
$post = file_get_contents("step/mid.txt");

$valyuta = file_get_contents("tizim/valyuta.txt");
$referal = file_get_contents("tizim/referal.txt");
$saved = file_get_contents("step/visualcoderuz.txt");
$promo = file_get_contents("tizim/promo.txt");
$kanal = file_get_contents("tizim/kanal.txt");
$qollanma = file_get_contents("tizim/qollanma.txt");

$ref1 = file_get_contents("step/$cid2.id");
$ref2 = file_get_contents("step/$cid2.txt");
mkdir("pul");
mkdir("ban");
mkdir("step");
mkdir("tizim");
mkdir("odam");
mkdir("tugma");
mkdir("donat");
mkdir("donat/$cid");
mkdir("donat/PUBGMOBILE");
mkdir("donat/FreeFire");
// pubg
if (file_get_contents("donat/PUBGMOBILE/60uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/60uc.txt", "12000"));
}
if (file_get_contents("donat/PUBGMOBILE/120uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/120uc.txt", "24000"));
}
if (file_get_contents("donat/PUBGMOBILE/180uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/180uc.txt", "35000"));
}
if (file_get_contents("donat/PUBGMOBILE/325uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/325uc.txt", "55000"));
}
if (file_get_contents("donat/PUBGMOBILE/385uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/385uc.txt", "65000"));
}
if (file_get_contents("donat/PUBGMOBILE/660uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/660uc.txt", "105000"));
}
if (file_get_contents("donat/PUBGMOBILE/720uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/720uc.txt", "120000"));
}
if (file_get_contents("donat/PUBGMOBILE/985uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/985uc.txt", "165000"));
}
if (file_get_contents("donat/PUBGMOBILE/1320uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/1320uc.txt", "210000"));
}
if (file_get_contents("donat/PUBGMOBILE/1800uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/1800uc.txt", "255000"));
}
if (file_get_contents("donat/PUBGMOBILE/2125uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/2125uc.txt", "310000"));
}
if (file_get_contents("donat/PUBGMOBILE/2460uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/2460uc.txt", "365000"));
}
if (file_get_contents("donat/PUBGMOBILE/3950uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/3950uc.txt", "505000"));
}
if (file_get_contents("donat/PUBGMOBILE/8100uc.txt")) {
} else {
       if (file_put_contents("donat/PUBGMOBILE/8100uc.txt", "970000"));
}

$uc60 = file_get_contents("donat/PUBGMOBILE/60uc.txt");
$uc120 = file_get_contents("donat/PUBGMOBILE/120uc.txt");
$uc180 = file_get_contents("donat/PUBGMOBILE/180uc.txt");
$uc325 = file_get_contents("donat/PUBGMOBILE/325uc.txt");
$uc385 = file_get_contents("donat/PUBGMOBILE/385uc.txt");
$uc660 = file_get_contents("donat/PUBGMOBILE/660uc.txt");
$uc720 = file_get_contents("donat/PUBGMOBILE/720uc.txt");
$uc985 = file_get_contents("donat/PUBGMOBILE/985uc.txt");
$uc1320 = file_get_contents("donat/PUBGMOBILE/1320uc.txt");
$uc1800 = file_get_contents("donat/PUBGMOBILE/1800uc.txt");
$uc2125 = file_get_contents("donat/PUBGMOBILE/2125uc.txt");
$uc2460 = file_get_contents("donat/PUBGMOBILE/2460uc.txt");
$uc3950 = file_get_contents("donat/PUBGMOBILE/3950uc.txt");
$uc8100 = file_get_contents("donat/PUBGMOBILE/8100uc.txt");

// end pubg

// free fire

if (file_get_contents("donat/FreeFire/100almaz.txt")) {
} else {
       if (file_put_contents("donat/FreeFire/100almaz.txt", "12500"));
}
if (file_get_contents("donat/FreeFire/210almaz.txt")) {
} else {
       if (file_put_contents("donat/FreeFire/210almaz.txt", "25000"));
}
if (file_get_contents("donat/FreeFire/530almaz.txt")) {
} else {
       if (file_put_contents("donat/FreeFire/530almaz.txt", "60000"));
}
if (file_get_contents("donat/FreeFire/1080almaz.txt")) {
} else {
       if (file_put_contents("donat/FreeFire/1080almaz.txt", "120000"));
}
if (file_get_contents("donat/FreeFire/2200almaz.txt")) {
} else {
       if (file_put_contents("donat/FreeFire/2200almaz.txt", "240000"));
}

$almaz100 = file_get_contents("donat/FreeFire/100almaz.txt");
$almaz210 = file_get_contents("donat/FreeFire/210almaz.txt");
$almaz530 = file_get_contents("donat/FreeFire/530almaz.txt");
$almaz1080 = file_get_contents("donat/FreeFire/1080almaz.txt");
$almaz2200 = file_get_contents("donat/FreeFire/2200almaz.txt");

// end free fire

$panel = json_encode([
       'resize_keyboard' => true,
       'keyboard' => [
              [['text' => "⚙ Asosiy sozlamalar"]],
              [['text' => "📊 Statistika"], ['text' => "✉ Xabar yuborish"]],
              [['text' => "🔎 Foydalanuvchini boshqarish"]],
              [['text' => "🎛 Tugmalar"], ['text' => "🎫 Promokod"]],
              [['text' => "◀️ Orqaga"]],
       ]
]);

$asosiy = json_encode([
       'resize_keyboard' => true,
       'keyboard' => [
              [['text' => "*️⃣ Birlamchi sozlamalar"]],
              [['text' => "🎮 Donat sozlamalari"]],
              [['text' => "💳 Hamyonlar"], ['text' => "📢 Kanallar"]],
              [['text' => "🗄 Boshqarish"]],
       ]
]);

$menu = json_encode([
       'resize_keyboard' => true,
       'keyboard' => [
              [['text' => "$key1"]],
              [['text' => "$key2"], ['text' => "$key3"]],
              [['text' => "$key4"], ['text' => "$key5"]],
       ]
]);

$menus = json_encode([
       'resize_keyboard' => true,
       'keyboard' => [
              [['text' => "$key1"]],
              [['text' => "$key2"], ['text' => "$key3"]],
              [['text' => "$key4"], ['text' => "$key5"]],
              [['text' => "🗄 Boshqarish"]],
       ]
]);

$back = json_encode([
       'resize_keyboard' => true,
       'keyboard' => [
              [['text' => "◀️ Orqaga"]],
       ]
]);

$boshqarish = json_encode([
       'resize_keyboard' => true,
       'keyboard' => [
              [['text' => "🗄 Boshqarish"]],
       ]
]);

if ($text) {
       if ($ban == "ban") {
              exit();
       } else {
       }
}

if ($data) {
       $ban = file_get_contents("ban/$cid2.txt");
       if ($ban == "ban") {
              exit();
       } else {
       }
}

if (isset($message)) {
       $baza = file_get_contents("azo.dat");
       if (mb_stripos($baza, $chat_id) !== false) {
       } else {
              $txt = "\n$chat_id";
              $file = fopen("azo.dat", "a");
              fwrite($file, $txt);
              fclose($file);
       }
}

if (isset($message)) {
       $pul = file_get_contents("pul/$cid.txt");
       $mm = $pul + 0;
       file_put_contents("pul/$cid.txt", "$mm");
       $odam = file_get_contents("odam/$cid.dat");
       $kkd = $odam + 0;
       file_put_contents("odam/$cid.dat", "$kkd");
}


if ($text == "/start" and joinchat($cid) == true) {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $admin,
                     'text' => "<b>✋ Salom $nameru! « $botname » ga xush kelibsiz!
🚀 Ushbu bot o’yinlarga tezkor va xavfsiz pul solish  imkonini beradi!
💫 Bizning botimizga obuna bo'ling va do'stlaringiz bilan baham ko'ring.
👇 Davom etish uchun quyidagilardan birini tanlang:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $menus
              ]);
              exit();
       } else {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>✋ Salom $nameru! « $botname » ga xush kelibsiz!
🚀 Ushbu bot o’yinlarga tezkor va xavfsiz pul solish  imkonini beradi!
💫 Bizning botimizga obuna bo'ling va do'stlaringiz bilan baham ko'ring.
👇 Davom etish uchun quyidagilardan birini tanlang:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $menu
              ]);
              exit();
       }
}

if (mb_stripos($text, "VIP") !== false) {
       $refid = str_replace("/start VIP", "", $text);
       if (strlen($refid) > 0 and $refid > 0) {
              if ($refid == $cid) {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>✋ Salom $nameru! « $botname » ga xush kelibsiz!
🚀 Ushbu bot o’yinlarga tezkor va xavfsiz pul solish  imkonini beradi!
💫 Bizning botimizga obuna bo'ling va do'stlaringiz bilan baham ko'ring.
👇 Davom etish uchun quyidagilardan birini tanlang:</b>",
                            'parse_mode' => 'html',
                            'disable_web_page_preview' => true,
                            'reply_markup' => $menyu,
                     ]);
                     exit();
              } else {
                     if (mb_stripos($user_id, "$cid") !== false) {
                            bot('SendMessage', [
                                   'chat_id' => $cid,
                                   'text' => "<b>✋ Salom $nameru! « $botname » ga xush kelibsiz!
🚀 Ushbu bot o’yinlarga tezkor va xavfsiz pul solish  imkonini beradi!
💫 Bizning botimizga obuna bo'ling va do'stlaringiz bilan baham ko'ring.
👇 Davom etish uchun quyidagilardan birini tanlang:</b>",
                                   'parse_mode' => 'html',
                                   'disable_web_page_preview' => true,
                                   'reply_markup' => $menu,
                            ]);
                            exit();
                     } else {
                            file_put_contents("step/$cid.id", $refid);
                            file_put_contents("step/$cid.txt", $refid);
                            $odam = file_get_contents("odam/$refid.dat");
                            $b = $odam + 1;
                            file_put_contents("odam/$refid.dat", "$b");
                            bot('sendMessage', [
                                   'chat_id' => $cid,
                                   'text' => "<b>✋ Salom $nameru! « $botname » ga xush kelibsiz!
🚀 Ushbu bot o’yinlarga tezkor va xavfsiz pul solish  imkonini beradi!
💫 Bizning botimizga obuna bo'ling va do'stlaringiz bilan baham ko'ring.
👇 Davom etish uchun quyidagilardan birini tanlang:</b>",
                                   'parse_mode' => 'html',
                                   'disable_web_page_preview' => true,
                                   'reply_markup' => $menu,
                            ]);
                            bot('SendMessage', [
                                   'chat_id' => $refid,
                                   'text' => "➕ <b>Sizda yangi taklif bor.</b>",
                                   'parse_mode' => 'html',
                                   'disable_web_page_preview' => true,
                            ]);
                            exit();
                     }
              }
       }
}

if ($data == "result") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2
       ]);
       if (joinchat($cid2) == true) {
              if ($ref1 != $ref2) {
                     bot('SendMessage', [
                            'chat_id' => $cid2,
                            'text' => "✅ <b>Obunangiz tasdiqlandi. Bosh menyudasiz.</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $menu,
                     ]);
                     exit();
              } else {
                     $pul = file_get_contents("pul/$ref2.txt");
                     $a = $pul + $referal;
                     file_put_contents("pul/$ref2.txt", "$a");
                     bot('SendMessage', [
                            'chat_id' => $cid2,
                            'text' => "✅ <b>Obunangiz tasdiqlandi. Bosh menyudasiz.</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $menu
                     ]);
                     bot('SendMessage', [
                            'chat_id' => $ref2,
                            'text' => "✅ <b>Hisobingizga $referal $valyuta qo'shildi!</b>",
                            'parse_mode' => 'html',
                     ]);
                     unlink("step/$cid2.txt");
                     unlink("step/$cid2.id");
                     exit();
              }
       }
}

if ($text == "◀️ Orqaga") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $admin,
                     'text' => "<b>🖥 Asosiy menyuga qaytdingiz.</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $menus,
              ]);
              unlink("step/$cid.step");
              unlink("step/visualcoderuz.txt");
              exit();
       } else {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>🖥 Asosiy menyuga qaytdingiz.</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $menu
              ]);
              unlink("step/$cid.step");
              unlink("step/visualcoderuz.txt");
              exit();
       }
}

if ($text == "$key3" and joinchat($cid) == true) {
       bot('SendMessage', [
              'chat_id' => $cid,
              'text' => "🔑<b> Sizning ID raqamingiz:</b> <code>$cid</code>

💵 <b>Umumiy balansingiz:</b> $pul $valyuta
👥 <b>Takliflaringiz soni:</b> $odam ta",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "💳 Pul kiritish", 'callback_data' => "oplata"]],
                     ]
              ])
       ]);
       exit();
}

if ($data == "kabinet") {
       bot('DeleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "🔑<b> Sizning ID raqamingiz:</b> <code>$cid2</code>

💵 <b>Umumiy balansingiz:</b> $pul $valyuta
👥 <b>Takliflaringiz soni:</b> $odam ta",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "💳 Pul kiritish", 'callback_data' => "oplata"]],
                     ]
              ])
       ]);
       exit();
}

$turi = file_get_contents("tizim/turi.txt");
$more = explode("\n", $turi);
$soni = substr_count($turi, "\n");
$keys = [];
for ($for = 1; $for <= $soni; $for++) {
       $title = str_replace("\n", "", $more[$for]);
       $keys[] = ["text" => "$title", "callback_data" => "pay-$title"];
       $keysboard2 = array_chunk($keys, 2);
       $keysboard2[] = [['text' => "◀️ Orqaga", 'callback_data' => "kabinet"]];
       $payment = json_encode([
              'inline_keyboard' => $keysboard2,
       ]);
}

if ($data == "oplata") {
       if ($turi == null) {
              bot('answerCallbackQuery', [
                     'callback_query_id' => $qid,
                     'text' => "To'lov tizimlari topilmadi!",
                     'show_alert' => true,
              ]);
       } else {
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
                     'text' => "<b>Quyidagilardan birini tanlang:</b>",
                     'parse_mode' => "html",
                     'reply_markup' => $payment
              ]);
       }
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($data == "orqa") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Quyidagilardan birini tanlang:</b>",
              'parse_mode' => "html",
              'reply_markup' => $payment
       ]);
}

if (mb_stripos($data, "pay-") !== false) {
       $ex = explode("-", $data);
       $tur = $ex[1];
       $addition = file_get_contents("tizim/$tur/addition.txt");
       $wallet = file_get_contents("tizim/$tur/wallet.txt");
       $us = str_replace("@", "", $user);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>📋 To'lov tizimi:</b> $tur

<i>💳 Hamyon ( yoki karta ):</i> <code>$wallet</code>
<i>📝 Izoh:</i> <code>#$cid2</code>

<b>Qo'shimcha:</b> $addition",
              'parse_mode' => "html",
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "✍ Murojaat", 'url' => "https://t.me/$us"]],
                            [['text' => "◀️ Orqaga", 'callback_data' => "orqa"]],
                     ]
              ])
       ]);
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($text == "$key2") {
       bot('sendMessage', [
              'chat_id' => $cid,
              'text' => "📋 <b>Quyidagilardan birini tanlang:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🔗 Takliflar", 'callback_data' => "taklif"]],
                            [['text' => "🎫 Promokod", 'callback_data' => "promokod"]],
                            [['text' => "💳 Hisob to'ldirish", 'callback_data' => "oplata"]],
                     ]
              ])
       ]);
       exit();
}

if ($data == "ishlash") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('sendMessage', [
              'chat_id' => $cid2,
              'text' => "📋 <b>Quyidagilardan birini tanlang:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🔗 Takliflar", 'callback_data' => "taklif"]],
                            [['text' => "🎫 Promokod", 'callback_data' => "promokod"]],
                            [['text' => "💳 Hisob To'ldirish", 'callback_data' => "oplata"]],
                     ]
              ])
       ]);
       exit();
}

if ($data == "taklif") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "⚡️ <b>Sizning taklif havolalaringiz:</b>

<code>https://t.me/$bot?start=VIP$cid2</code>
<code>tg://resolve?domain=$bot&start=VIP$cid2</code>

<b>1 ta taklif uchun $referal $valyuta beriladi.

Sizning takliflaringiz: $odam ta</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "↗️ Ulashish", 'url' => "https://t.me/share/url?url=https://t.me/$bot?start=VIP$cid2"]],
                            [['text' => "◀️ Orqaga", 'callback_data' => "ishlash"]]
                     ]
              ])
       ]);
}

if ($data == "promokod") {
       if ($promo == "Kiritilmagan") {
              bot('answerCallbackQuery', [
                     'callback_query_id' => $qid,
                     'text' => "Promokod kanali ulanmagan!",
                     'show_alert' => true,
              ]);
       } else {
              bot('deleteMessage', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
              ]);
              bot('SendMessage', [
                     'chat_id' => $cid2,
                     'text' => "<b>Promokodni kiriting:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $back
              ]);
              file_put_contents("step/$cid2.step", 'visualcoderuz');
              exit();
       }
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($step == "visualcoderuz") {
       $kod = file_get_contents("step/kod.txt");
       if ($text == $kod) {
              $money = file_get_contents("step/money.txt");
              $a = $pul + $money;
              file_put_contents("pul/$cid.txt", $a);
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "✅ <b>Promokod to'g'ri kiritildi va hisobingizga $money $valyuta qo'shildi!</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $menu,
              ]);
              bot('deleteMessage', [
                     'chat_id' => $promo,
                     'message_id' => $post,
              ]);
              bot('SendMessage', [
                     'chat_id' => $promo,
                     'text' => "<b>✅ Promokod ishlatildi!</b>

🎫 <i>Promokod:</i> <code>$kod</code>
👤 <i>Foydalanuvchi:</i> <a href='https://t.me/$username'>$name</a>",
                     'disable_web_page_preview' => true,
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "🤖 Botga kirish", 'url' => "https://t.me/$bot"]]
                            ]
                     ])
              ]);
              unlink("step/money.txt");
              unlink("step/kod.txt");
              unlink("step/mid.txt");
              unlink("step/$cid.step");
              exit();
       } else {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>🙁 Qabul qilinmadi</b>
   Qayta urinib ko'ring:",
                     'parse_mode' => 'html',
              ]);
              exit();
       }
}


if ($text == "$key1" and joinchat($cid) == true) {
       bot('SendMessage', [
              'chat_id' => $chat_id,
              'text' => "<b>✅ Bizning xizmatlarimizni tanlaganingizdan xursandmiz!
👇 Quyidagi o’yinlardan birini tanlang:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🔵 PUBGMOBILE", 'callback_data' => "pubg"], ['text' => "🔴 FREE FIRE", 'callback_data' => "fire"]]
                     ]
              ])
       ]);
       exit();
}

if ($data == "servis") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>✅ Bizning xizmatlarimizni tanlaganingizdan xursandmiz!
👇 Quyidagi o’yinlardan birini tanlang:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🔵 PUBGMOBILE", 'callback_data' => "pubg"], ['text' => "🔴 FREE FIRE", 'callback_data' => "fire"]]
                     ]
              ])
       ]);
       exit();
}

if ($data == "pubg") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "⬇️ <b>O'zingizga mos tarifni tanlang va ustiga bosing!:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "60 UC = $uc60 $valyuta", 'callback_data' => "xizm-60uc-PUBGMOBILE-UC"]],
                            [['text' => "120 UC = $uc120 $valyuta", 'callback_data' => "xizm-120uc-PUBGMOBILE-UC"]],
                            [['text' => "180 UC = $uc180 $valyuta", 'callback_data' => "xizm-180uc-PUBGMOBILE-UC"]],
                            [['text' => "325 UC = $uc325 $valyuta", 'callback_data' => "xizm-325uc-PUBGMOBILE-UC"]],
                            [['text' => "385 UC = $uc385 $valyuta", 'callback_data' => "xizm-385uc-PUBGMOBILE-UC"]],
                            [['text' => "660 UC = $uc660 $valyuta", 'callback_data' => "xizm-660uc-PUBGMOBILE-UC"]],
                            [['text' => "720 UC = $uc720 $valyuta", 'callback_data' => "xizm-720uc-PUBGMOBILE-UC"]],
                            [['text' => "985 UC = $uc985 $valyuta", 'callback_data' => "xizm-985uc-PUBGMOBILE-UC"]],
                            [['text' => "1320 UC = $uc1320 $valyuta", 'callback_data' => "xizm-1320uc-PUBGMOBILE-UC"]],
                            [['text' => "1800 UC = $uc1800 $valyuta", 'callback_data' => "xizm-1800uc-PUBGMOBILE-UC"]],
                            [['text' => "2125 UC = $uc2125 $valyuta", 'callback_data' => "xizm-2125uc-PUBGMOBILE-UC"]],
                            [['text' => "2460 UC = $uc2460 $valyuta", 'callback_data' => "xizm-2460uc-PUBGMOBILE-UC"]],
                            [['text' => "3950 UC = $uc3950 $valyuta", 'callback_data' => "xizm-3950uc-PUBGMOBILE-UC"]],
                            [['text' => "8100 UC = $uc8100 $valyuta", 'callback_data' => "xizm-8100uc-PUBGMOBILE-UC"]]
                     ]
              ])
       ]);
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($data == "fire") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "⬇️ <b>O'zingizga mos tarifni tanlang va ustiga bosing!:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "100 💎 = $almaz100 $valyuta", 'callback_data' => "xizm-100almaz-FreeFire-Almaz"]],
                            [['text' => "210 💎 = $almaz210 $valyuta", 'callback_data' => "xizm-210almaz-FreeFire-Almaz"]],
                            [['text' => "530 💎 = $almaz530 $valyuta", 'callback_data' => "xizm-530almaz-FreeFire-Almaz"]],
                            [['text' => "1080 💎 = $almaz1080 $valyuta", 'callback_data' => "xizm-1080almaz-FreeFire-Almaz"]],
                            [['text' => "2200 💎 = $almaz2200 $valyuta", 'callback_data' => "xizm-2200almaz-FreeFire-Almaz"]],
                     ]
              ])
       ]);
}

if (mb_stripos($data, "xizm-") !== false) {
       $xiz = explode("-", $data)[1];
       $ich = explode("-", $data)[2];
       $val = explode("-", $data)[3];
       $donnarx = file_get_contents("donat/$ich/$xiz.txt");
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "📦 <b>Donat tanlandi:</b>

💵 <b>Miqdori:</b> $xiz
💸 <b>Narxi:</b> $donnarx $valyuta

📑 <i>Donat $ich ID'raqamingiz orqali amalga oshiriladi.</i>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "✅ Tanlash", 'callback_data' => "tanla-$xiz-$ich-$val"]],
                            [['text' => "◀️ Orqaga", 'callback_data' => "servis"]],
                     ]
              ])
       ]);
}

if (mb_stripos($data, "tanla-") !== false) {
       $ex = explode("-", $data);
       $xiz = $ex[1];
       $ich = $ex[2];
       $val = $ex[3];
       $pul = file_get_contents("pul/$cid2.txt");
       $narxi = file_get_contents("donat/$ich/$xiz.txt");
       $yetmadi = $narxi - $pul;
       if ($pul >= "$narxi") {
              bot('deleteMessage', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
              ]);
              bot('SendMessage', [
                     'chat_id' => $cid2,
                     'text' => "<b><u>Botga $ich ID raqamingizni yuboring:</u></b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $back,
              ]);
              file_put_contents("step/$cid2.step", "next-$xiz-$ich-$val");
              exit();
       } else {
              bot('SendMessage', [
                     'chat_id' => $cid2,
                     'text' => "<b>🤷🏻‍♂ Hisobingizga $yetmadi so'm yetishmadi!</b>

Hisobingizni to'ldirib qayta urining:",
                     'parse_mode' => 'html',
              ]);
              exit();
       }
}


if (mb_stripos($step, "next-") !== false) {
       $ex = explode("-", $step);
       $xiz = $ex[1];
       $ich = $ex[2];
       $val = $ex[3];
       bot('SendMessage', [
              'chat_id' => $cid,
              'text' => "<b>⚠️ Donatni tasdiqlashdan oldin, quyidagi ma'lumotlarni tekshirib chiqing:

🎮 O'yin turi:</b> <i>$ich $val</i>
💳 <b>Donat miqdori:</b> <i>$xiz</i>
💵 <b>Sizning balansingiz:</b> <i>$pul $valyuta</i>
🆔 <b>$ich ID raqamingiz:</b> <code>$text</code>

❔ Barchasi to'g'ri ekanligiga ishonch hosil qilgach pastdagi « <b>✅ Tasdiqlash</b> » tugmasini bosing.",
              'disable_web_page_preview' => true,
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "✅ Tasdiqlash", 'callback_data' => "tasdiq-$ich-$xiz-$val-$text"]],
                            [['text' => "🚫 Bekor qilish", 'callback_data' => "bekor"]],
                     ]
              ])
       ]);
       unlink("step/$cid.step");
       exit();
}

if ($data == "bekor") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "⏱ <i>Yuklanmoqda...</i>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "⏱ <i>Yuklanmoqda...</i>",
              'parse_mode' => 'html',
       ]);
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>⛔️ Bekor qilindi!</b>",
              'parse_mode' => 'html',
              'reply_markup' => $menu,
       ]);
       exit();
}

if (mb_stripos($data, "tasdiq-") !== false) {
       $ex = explode("-", $data);
       $ich = $ex[1];
       $xiz = $ex[2];
       $val = $ex[3];
       $ids = $ex[4];
       $pul = file_get_contents("pul/$cid2.txt");
       $narxi = file_get_contents("donat/$ich/$xiz.txt");
       $ayir = $pul - $narxi;
       file_put_contents("pul/$cid2.txt", "$ayir");
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "⏱ <i>Yuklanmoqda...</i>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "⏱ <i>Yuklanmoqda...</i>",
              'parse_mode' => 'html',
       ]);
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>✅ Donat bo'yicha so'rovingiz adminga yuborildi.

$ich ID raqamingiz:</b> <code>$ids</code>

<i>ℹ️ Tez orada sizning $ich $val hisobingizga $xiz tushgani haqida xabar beramiz.</i>

⚪️ <b>To'lovlar kananali:</b> <i>$promo</i>",
              'parse_mode' => 'html',
              'reply_markup' => $menu,
       ]);
       bot('SendMessage', [
              'chat_id' => $admin,
              'text' => "<b>✅ Yangi donat xizmati.

👤 Donat egasi:</b> <i><a href='tg://user?id=$cid2'>$cid2</a></i>
🎮 <b>O'yin turi:</b> <i>$ich $val</i>
💳 <b>Donat miqdori:</b> <i>$xiz</i>
🆔 <b>$ich ID raqami:</b> <code>$ids</code>

<i>ℹ️ Donat xizmatini bajargach « <b>✅ Tasdiqlash</b> » tugmasini bosing.</i>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "✅ Tasdiqlash", 'callback_data' => "donaton-$ich-$xiz-$val-$ids-$cid2"]],
                            [['text' => "🚫 Bekor qilish", 'callback_data' => "donatoff-$cid2"]],
                     ]
              ])
       ]);
       exit();
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if (mb_stripos($data, "donaton-") !== false) {
       $ex = explode("-", $data);
       $ich = $ex[1];
       $xiz = $ex[2];
       $val = $ex[3];
       $ids = $ex[4];
       $donatchi = $ex[5];
       bot('SendMessage', [
              'chat_id' => $donatchi,
              'text' => "<b>✅ Donat bo'yicha so'rovingiz qabul qilindi.</b>

<i>ℹ️ $ich $val hisobingizga $xiz tushurib berildi.</i>

⚪️ <b>To'lovlar kanali:</b> <i>$promo</i>.",
              'parse_mode' => 'html',
              'reply_markup' => $menu,
       ]);
       bot('SendMessage', [
              'chat_id' => $promo,
              'text' => "<b>✅ Yangi donat xizmati.

👤 Donat egasi:</b> <i><a href='tg://user?id=$donatchi'>$donatchi</a></i>
🎮 <b>O'yin turi:</b> <i>$ich $val</i>
💳 <b>Donat miqdori:</b> <i>$xiz</i>
🆔 <b>$ich ID raqami:</b> <code>$ids</code>
❕ <b>Xolat:</b> <i>✅ Tastiqlandi</i>.",
              'parse_mode' => 'html',
       ]);
       bot('SendMessage', [
              'chat_id' => $admin,
              'text' => "<b>✅ Donat bo'yicha so'rov qabul qilindi.

👤 Donat egasi:</b> <i><a href='tg://user?id=$donatchi'>$donatchi</a></i>",
              'parse_mode' => 'html',
              'reply_markup' => $menu,
       ]);
}

if ($text == "$key4" and joinchat($cid) == true) {
       bot('SendMessage', [
              'chat_id' => $cid,
              'text' => "<b>Murojaat matnini kiriting:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $back,
       ]);
       file_put_contents("step/$cid.step", 'murojaat');
       exit();
}

if ($step == "murojaat") {
       bot('SendMessage', [
              'chat_id' => $cid,
              'text' => "<b>Murojaat qabul qilindi. Javobni kuting!</b>",
              'parse_mode' => 'html',
              'reply_markup' => $menu,
       ]);
       bot('SendMessage', [
              'chat_id' => $admin,
              'text' => "<a href='https://t.me/$username'>$cid</a> <b>dan yangi xabar:</b> $text",
              'parse_mode' => 'html',
              'disable_web_page_preview' => true,
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "📝 Javob yozish", 'callback_data' => "send-$cid"]],
                     ]
              ])
       ]);
       unlink("step/$cid.step");
       exit();
}

if (mb_stripos($data, "send-") !== false) {
       $ex = explode("-", $data);
       $id = $ex[1];
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('sendMessage', [
              'chat_id' => $admin,
              'text' => "<b>Xabaringizni kiriting:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $back,
       ]);
       file_put_contents("step/$cid2.step", "send-$id");
       exit();
}

if (mb_stripos($step, "send-") !== false) {
       $ex = explode("-", $step);
       $id = $ex[1];
       bot('sendMessage', [
              'chat_id' => $id,
              'text' => $text,
              'parse_mode' => 'html',
       ]);
       bot('sendMessage', [
              'chat_id' => $admin,
              'text' => "✅ <b>Xabaringiz yuborildi!</b>",
              'parse_mode' => 'html',
              'reply_markup' => $menus,
       ]);
       unlink("step/$cid.step");
       exit();
}


if ($text == "$key5" and joinchat($cid) == true) {
       bot('sendMessage', [
              'chat_id' => $cid,
              'text' => "<b>$qollanma</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🧑🏻‍💻 Admin", 'url' => "tg://user?id=$admin"]],
                     ]
              ])
       ]);
       exit();
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
//<------ Admin Panel -------->//

if ($text == "🗄 Boshqarish") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>Admin paneliga xush kelibsiz!</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $panel,
              ]);
              unlink("step/$cid.step");
              unlink("step/visualcoderuz.txt");
              unlink("step/test.txt");
              exit();
       }
}

if ($data == "boshqarish") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
}

if ($data == "foydalanuvchi") {
       $pul = file_get_contents("pul/$saved.txt");
       $odam = file_get_contents("odam/$saved.dat");
       $ban = file_get_contents("ban/$saved.txt");
       if ($ban == null) {
              $bans = "🔔 Banlash";
       }
       if ($ban == "ban") {
              $bans = "🔕 Bandan olish";
       }
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Foydalanuvchi topildi!

ID:</b> <a href='tg://user?id=$saved'>$saved</a>
<b>Balans: $pul $valyuta
Takliflar: $odam ta</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "$bans", 'callback_data' => "ban"]],
                            [['text' => "➕ Pul qo'shish", 'callback_data' => "plus"], ['text' => "➖ Pul ayirish", 'callback_data' => "minus"]]
                     ]
              ])
       ]);
       exit();
}

if ($text == "🔎 Foydalanuvchini boshqarish") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>Kerakli foydalanuvchining ID raqamini kiriting:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $boshqarish
              ]);
              file_put_contents("step/$cid.step", 'iD');
              exit();
       }
}

if ($step == "iD") {
       if ($cid == $admin) {
              if (file_exists("pul/$text.txt")) {
                     file_put_contents("step/visualcoderuz.txt", $text);
                     $pul = file_get_contents("pul/$text.txt");
                     $odam = file_get_contents("odam/$text.dat");
                     $ban = file_get_contents("ban/$text.txt");
                     if ($ban == null) {
                            $bans = "🔔 Banlash";
                     }
                     if ($ban == "ban") {
                            $bans = "🔕 Bandan olish";
                     }
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Qidirilmoqda...</b>",
                            'parse_mode' => 'html',
                     ]);
                     bot('editMessageText', [
                            'chat_id' => $cid,
                            'message_id' => $mid + 1,
                            'text' => "<b>Qidirilmoqda...</b>",
                            'parse_mode' => 'html',
                     ]);
                     bot('editMessageText', [
                            'chat_id' => $cid,
                            'message_id' => $mid + 1,
                            'text' => "<b>Foydalanuvchi topildi!

ID:</b> <a href='tg://user?id=$text'>$text</a>
<b>Balans: $pul $valyuta
Takliflar: $odam ta</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => json_encode([
                                   'inline_keyboard' => [
                                          [['text' => "$bans", 'callback_data' => "ban"]],
                                          [['text' => "➕ Pul qo'shish", 'callback_data' => "plus"], ['text' => "➖ Pul ayirish", 'callback_data' => "minus"]]
                                   ]
                            ])
                     ]);
                     unlink("step/$cid.step");
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Foydalanuvchi topilmadi.</b>

Qayta urinib ko'ring:",
                            'parse_mode' => 'html',
                     ]);
                     exit();
              }
       }
}




//qo'shish
if ($data == "plus") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<a href='tg://user?id=$saved'>$saved</a> <b>ning hisobiga qancha pul qo'shmoqchisiz?</b>",
              'parse_mode' => "html",
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]]
                     ]
              ])
       ]);
       file_put_contents("step/$cid2.step", 'plus');
}

if ($step == "plus") {
       if ($cid == $admin) {
              if (is_numeric($text) == "true") {
                     bot('sendMessage', [
                            'chat_id' => $saved,
                            'text' => "<b>Adminlar tomonidan hisobingiz $text $valyuta to'ldirildi</b>",
                            'parse_mode' => "html",
                            'reply_markup' => $menu,
                     ]);
                     bot('sendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Foydalanuvchi hisobiga $text $valyuta qo'shildi!</b>",
                            'parse_mode' => "html",
                            'reply_markup' => $panel,
                     ]);
                     $pul = file_get_contents("pul/$saved.txt");
                     $miqdor = $pul + $text;
                     file_put_contents("pul/$saved.txt", $miqdor);
                     $oplata = file_get_contents("oplata/$saved.txt");
                     $plus = $oplata + $text;
                     file_put_contents("oplata/$saved.txt", $plus);
                     unlink("step/visualcoderuz.txt");
                     unlink("step/$cid.step");
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Faqat raqamlardan foydalaning!</b>",
                            'parse_mode' => 'html',
                            'protect_content' => true,
                     ]);
                     exit();
              }
       }
}

//ayirish
if ($data == "minus") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<a href='tg://user?id=$saved'>$saved</a> <b>ning hisobiga qancha pul ayirmoqchisiz?</b>",
              'parse_mode' => "html",
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]]
                     ]
              ])
       ]);
       file_put_contents("step/$cid2.step", 'minus');
}

if ($step == "minus") {
       if ($cid == $admin) {
              if (is_numeric($text) == "true") {
                     bot('sendMessage', [
                            'chat_id' => $saved,
                            'text' => "<b>Adminlar tomonidan hisobingizdan $text $valyuta olib tashlandi</b>",
                            'parse_mode' => "html",
                            'reply_markup' => $menu,
                     ]);
                     bot('sendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Foydalanuvchi hisobidan $text $valyuta olib tashlandi!</b>",
                            'parse_mode' => "html",
                            'reply_markup' => $panel,
                     ]);
                     $pul = file_get_contents("pul/$saved.txt");
                     $miqdor = $pul - $text;
                     file_put_contents("pul/$saved.txt", $miqdor);
                     unlink("step/visualcoderuz.txt");
                     unlink("step/$cid.step");
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Faqat raqamlardan foydalaning!</b>",
                            'parse_mode' => 'html',
                     ]);
                     exit();
              }
       }
}

if ($data == "ban") {
       $ban = file_get_contents("ban/$saved.txt");
       if ($admin != $saved) {
              if ($ban == "ban") {
                     unlink("ban/$saved.txt");
                     bot('editMessageText', [
                            'chat_id' => $cid2,
                            'message_id' => $mid2,
                            'text' => "<b>Foydalanuvchi ($saved) bandan olindi!</b>",
                            'parse_mode' => "html",
                            'reply_markup' => json_encode([
                                   'inline_keyboard' => [
                                          [['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]]
                                   ]
                            ])
                     ]);
              } else {
                     file_put_contents("ban/$saved.txt", 'ban');
                     bot('editMessageText', [
                            'chat_id' => $cid2,
                            'message_id' => $mid2,
                            'text' => "<b>Foydalanuvchi ($saved) banlandi!</b>",
                            'parse_mode' => "html",
                            'reply_markup' => json_encode([
                                   'inline_keyboard' => [
                                          [['text' => "◀️ Orqaga", 'callback_data' => "foydalanuvchi"]]
                                   ]
                            ])
                     ]);
              }
       } else {
              bot('answerCallbackQuery', [
                     'callback_query_id' => $qid,
                     'text' => "Asosiy adminlarni blocklash mumkin emas!",
                     'show_alert' => true,
              ]);
       }
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($text == "✉ Xabar yuborish" and $cid == $admin) {
       bot('SendMessage', [
              'chat_id' => $cid,
              'text' => "<b>Yuboriladigan xabar turini tanlang;</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "Oddiy", 'callback_data' => "send"]],
                            [['text' => "Yopish", 'callback_data' => "boshqarish"]],
                     ]
              ])
       ]);
       exit();
}

if ($data == "send") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "*Xabaringizni kiriting:*",
              'parse_mode' => "markdown",
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", "send");
       exit();
}

if ($step == "send") {
       if ($cid == $admin) {
              $lich = file_get_contents("azo.dat");
              $lichka = explode("\n", $lich);
              foreach ($lichka as $lichkalar) {
                     $okuser = bot("SendMessage", [
                            'chat_id' => $lichkalar,
                            'text' => $text,
                            'parse_mode' => 'html',
                            'disable_web_page_preview' => true,
                     ]);
              }
       }
}
if ($okuser) {
       bot("sendmessage", [
              'chat_id' => $admin,
              'text' => "<b>Xabaringiz yuborildi!</b>",
              'parse_mode' => 'html',
              'reply_markup' => $panel
       ]);
       unlink("step/$cid.step");
       exit();
}

if ($text == "📊 Statistika") {
       if ($cid == $admin) {
              $baza = file_get_contents("azo.dat");
              $obsh = substr_count($baza, "\n");
              $start_time = round(microtime(true) * 1000);
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "",
                     'parse_mode' => 'html',
              ]);
              $end_time = round(microtime(true) * 1000);
              $ping = $end_time - $start_time;
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "💡 <b>PING:</b> <code>$ping</code>
👥 <b>Foydalanuvchilar:</b> $obsh ta",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "Yopish", 'callback_data' => "boshqarish"]]
                            ]
                     ])
              ]);
              exit();
       }
}

if ($text == "🎫 Promokod") {
       if ($cid == $admin) {
              if ($promo != "Kiritilmagan") {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Yangi promokodni kiriting:</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $boshqarish,
                     ]);
                     file_put_contents("step/$cid.step", 'pro');
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "📢 <b>Promokod kanali ulanmagan!</b>",
                            'parse_mode' => 'html',
                     ]);
                     exit();
              }
       }
}

if ($step == "pro") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("step/kod.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Beriladigan pul miqdorini kiriting:</b>",
                            'parse_mode' => 'html',
                     ]);
                     file_put_contents("step/$cid.step", 'Next_Promo');
                     exit();
              }
       }
}

if ($step == "Next_Promo") {
       if ($cid == $admin) {
              if (is_numeric($text) == "true") {
                     file_put_contents("step/money.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "✅ <b>Promokod muvaffaqiyatli yaratildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $panel,
                     ]);
                     $msg = bot('SendMessage', [
                            'chat_id' => $promo,
                            'text' => "💡 <b>Yangi Promokod!</b>

🎫 <i>Promokod:</i> <code>$kod</code>
💵 <i>Promokod qiymati: $text $valyuta</i>",
                            'parse_mode' => 'html',
                            'reply_markup' => json_encode([
                                   'inline_keyboard' => [
                                          [['text' => "🤖 Botga kirish", 'url' => "https://t.me/$bot"]]
                                   ]
                            ])
                     ])->result->message_id;
                     file_put_contents("step/mid.txt", $msg);
                     unlink("step/$cid.step");
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Faqat raqamlardan foydalaning!</b>",
                            'parse_mode' => 'html',
                     ]);
                     exit();
              }
       }
}

if ($text == "🎛 Tugmalar") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>Quyidagilardan birini tanlang:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "$key1", 'callback_data' => "key1"]],
                                   [['text' => "$key2", 'callback_data' => "key2"], ['text' => "$key3", 'callback_data' => "key3"]],
                                   [['text' => "$key4", 'callback_data' => "key4"], ['text' => "$key5", 'callback_data' => "key5"]],
                                   [['text' => "Yopish", 'callback_data' => "boshqarish"]]
                            ]
                     ])
              ]);
              exit();
       }
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($data == "key1") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", 'key1');
       exit();
}

if ($step == "key1") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tugma/key1.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
                            'parse_mode' => 'html',
                            'reply_markup' => $panel,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($data == "key2") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", 'key2');
       exit();
}

if ($step == "key2") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tugma/key2.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
                            'parse_mode' => 'html',
                            'reply_markup' => $panel,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($data == "key3") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", 'key3');
       exit();
}

if ($step == "key3") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tugma/key3.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
                            'parse_mode' => 'html',
                            'reply_markup' => $panel,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($data == "key4") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", 'key4');
       exit();
}

if ($step == "key4") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tugma/key4.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
                            'parse_mode' => 'html',
                            'reply_markup' => $panel,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($data == "key5") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Tugma uchun yangi nom yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", 'key5');
       exit();
}

if ($step == "key5") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tugma/key5.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Qabul qilindi!</b>

<i>Tugma nomi</i> <b>$text</b> <i>ga o'zgartirildi.</i>",
                            'parse_mode' => 'html',
                            'reply_markup' => $panel,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($text == "⚙ Asosiy sozlamalar") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>⚙️ Asosiy sozlamalar bo'limiga xush kelibsiz!</b>

<i>Nimani o'zgartiramiz?</i>",
                     'parse_mode' => 'html',
                     'reply_markup' => $asosiy,
              ]);
              exit();
       }
}

$delturi = file_get_contents("tizim/turi.txt");
$delmore = explode("\n", $delturi);
$delsoni = substr_count($delturi, "\n");
$key = [];
for ($delfor = 1; $delfor <= $delsoni; $delfor++) {
       $title = str_replace("\n", "", $delmore[$delfor]);
       $key[] = ["text" => "$title - ni o'chirish", "callback_data" => "del-$title"];
       $keyboard2 = array_chunk($key, 1);
       $keyboard2[] = [['text' => "➕ Yangi to'lov tizimi qo'shish", 'callback_data' => "new"]];
       $pay = json_encode([
              'inline_keyboard' => $keyboard2,
       ]);
}

if ($text == "💳 Hamyonlar") {
       if ($cid == $admin) {
              if ($turi == null) {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Quyidagilardan birini tanlang:</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => json_encode([
                                   'inline_keyboard' => [
                                          [['text' => "➕ Yangi to'lov tizimi qo'shish", 'callback_data' => "new"]],
                                   ]
                            ])
                     ]);
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Quyidagilardan birini tanlang:</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $pay
                     ]);
                     exit();
              }
       }
}

if ($data == "hamyon") {
       if ($turi == null) {
              bot('deleteMessage', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
              ]);
              bot('SendMessage', [
                     'chat_id' => $cid2,
                     'text' => "<b>Quyidagilardan birini tanlang:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "➕ Yangi to'lov tizimi qo'shish", 'callback_data' => "new"]],
                            ]
                     ])
              ]);
              exit();
       } else {
              bot('deleteMessage', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
              ]);
              bot('SendMessage', [
                     'chat_id' => $cid2,
                     'text' => "<b>Quyidagilardan birini tanlang:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => $pay
              ]);
              exit();
       }
}

if (mb_stripos($data, "del-") !== false) {
       $ex = explode("-", $data);
       $tur = $ex[1];
       $k = str_replace("\n" . $tur . "", "", $turi);
       file_put_contents("tizim/turi.txt", $k);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "$tur - <b>To'lov tizimi olib tashlandi.</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "◀️ Orqaga", 'callback_data' => "hamyon"]],
                     ]
              ])
       ]);
       deleteFolder("tizim/$tur");
}

/*$test = file_get_contents("step/test.txt");
   $k = str_replace("\n".$test."","",$turi);
   file_put_contents("tizim/turi.txt",$k);
deleteFolder("tizim/$test");
unlink("step/test.txt");
exit();*/

if ($data == "new") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('sendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Yangi to'lov tizimi nomini yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish
       ]);
       file_put_contents("step/$cid2.step", 'turi');
       exit();
}



if ($step == "turi") {
       if ($cid == $admin) {
              if (isset($text)) {
                     mkdir("tizim/$text");
                     file_put_contents("tizim/turi.txt", "$turi\n$text");
                     file_put_contents("step/test.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Ushbu to'lov tizimidagi hamyoningiz raqamini yuboring:</b>",
                            'parse_mode' => 'html',
                     ]);
                     file_put_contents("step/$cid.step", 'wallet');
                     exit();
              }
       }
}


if ($step == "wallet") {
       if ($cid == $admin) {
              if (is_numeric($text) == "true") {
                     file_put_contents("tizim/$test/wallet.txt", "$wallet\n$text");
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Ushbu to'lov tizimi orqali hisobni to'ldirish bo'yicha ma'lumotni yuboring:</b>

<i>Misol uchun, Ushbu to'lov tizimi orqali pul yuborish jarayonida izoh kirita olmasligingiz mumkin. Ushbu holatda, biz bilan bog'laning. Havola: @visualcoderuz</i>",
                            'parse_mode' => 'html',
                     ]);
                     file_put_contents("step/$cid.step", 'addition');
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Faqat raqamlardan foydalaning!</b>",
                            'parse_mode' => 'html',
                     ]);
                     exit();
              }
       }
}/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*//*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/

if ($step == "addition") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tizim/$test/addition.txt", "$addition\n$text");
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Yangi to'lov tizimi qo'shildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     unlink("step/test.txt");
                     exit();
              }
       }
}

if ($text == "🎮 Donat sozlamalari") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>🎮 Donat sozlamalari bo'limidasiz.</b>

Bu yerda siz donat narxlarini o'zgartirishingiz mumkin.",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "🔵 PUBGMOBILE", 'callback_data' => "setpubg"], ['text' => "🔴 FreeFire", 'callback_data' => "setfire"]]
                            ]
                     ])
              ]);
              exit();
       }
}

if ($data == "setdonat") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>🎮 Donat sozlamalari bo'limidasiz.</b>

Bu yerda siz donat narxlarini o'zgartirishingiz mumkin.",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🔵 PUBGMOBILE", 'callback_data' => "setpubg"], ['text' => "🔴 FreeFire", 'callback_data' => "setfire"]]
                     ]
              ])
       ]);
       exit();
}

if ($data == "setpubg") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Hozirgi PUBGMOBILE UC narxlari:</b>

<i>1. 60 UC = $uc60 $valyuta
2. 120 UC = $uc120 $valyuta
3. 180 UC = $uc180 $valyuta
4. 325 UC = $uc325 $valyuta
5. 385 UC = $uc385 $valyuta
6. 660 UC = $uc660 $valyuta
7. 720 UC = $uc720 $valyuta
8. 985 UC = $uc985 $valyuta
9. 1320 UC = $uc1320 $valyuta
10. 1800 UC = $uc1800 $valyuta
11. 2125 UC = $uc2125 $valyuta
12. 2460 UC = $uc2460 $valyuta
13. 3950 UC = $uc3950 $valyuta
14. 8100 UC = $uc8100 $valyuta</i>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "1", 'callback_data' => "setdonate-PUBGMOBILE-60uc"], ['text' => "2", 'callback_data' => "setdonate-PUBGMOBILE-120uc"], ['text' => "3", 'callback_data' => "setdonate-PUBGMOBILE-180uc"], ['text' => "4", 'callback_data' => "setdonate-PUBGMOBILE-325uc"], ['text' => "5", 'callback_data' => "setdonate-PUBGMOBILE-385uc"]],
                            [['text' => "6", 'callback_data' => "setdonate-PUBGMOBILE-660uc"], ['text' => "7", 'callback_data' => "setdonate-PUBGMOBILE-720uc"], ['text' => "8", 'callback_data' => "setdonate-PUBGMOBILE-985uc"], ['text' => "9", 'callback_data' => "setdonate-PUBGMOBILE-1320uc"], ['text' => "10", 'callback_data' => "setdonate-PUBGMOBILE-1800uc"]],
                            [['text' => "11", 'callback_data' => "setdonate-PUBGMOBILE-2125uc"], ['text' => "12", 'callback_data' => "setdonate-PUBGMOBILE-2460uc"], ['text' => "13", 'callback_data' => "setdonate-PUBGMOBILE-3950uc"], ['text' => "14", 'callback_data' => "setdonate-PUBGMOBILE-8100uc"]],
                     ]
              ])
       ]);
}

if ($data == "setfire") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Hozirgi FreeFire Almaz narxlari:</b>

<i>1. 100 💎 = $almaz100 $valyuta
2. 210 💎 = $almaz210 $valyuta
3. 530 💎 = $almaz530 $valyuta
4. 1080 💎 = $almaz1080 $valyuta
5. 2200 💎 = $almaz2200 $valyuta</i>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "1", 'callback_data' => "setdonate-FreeFire-100almaz"], ['text' => "2", 'callback_data' => "setdonate-FreeFire-210almaz"], ['text' => "3", 'callback_data' => "setdonate-FreeFire-530almaz"], ['text' => "4", 'callback_data' => "setdonate-FreeFire-1080almaz"], ['text' => "5", 'callback_data' => "setdonate-FreeFire-2200almaz"]],
                     ]
              ])
       ]);
}


if (mb_stripos($data, "setdonate-") !== false) {
       $tur = explode("-", $data)[1];
       $turi = explode("-", $data)[2];
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", "setdonate-$tur-$turi");
       exit();
}

if (mb_stripos($step, "setdonate-") !== false) {
       $tur = explode("-", $step)[1];
       $turi = explode("-", $step)[2];
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("donat/$tur/$turi.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($text == "*️⃣ Birlamchi sozlamalar") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>*️⃣  Birlamchi sozlamalar bo'limidasiz.</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "📋 Hozirgi holatni ko'rish", 'callback_data' => "holat"]],
                                   [['text' => "💶 Valyuta", 'callback_data' => "valyuta"], ['text' => "💸 Taklif narxi", 'callback_data' => "narx"]],
                                   [['text' => "📎 Admin useri", 'callback_data' => "admin"], ['text' => "📕 Qo'llanma", 'callback_data' => "qollanmatxt"]],
                                   [['text' => "Yopish", 'callback_data' => "boshqarish"]]
                            ]
                     ])
              ]);
              exit();
       }
}

if ($data == "birlamchi") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>*️⃣  Birlamchi sozlamalar bo'limidasiz.</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "📋 Hozirgi holatni ko'rish", 'callback_data' => "holat"]],
                            [['text' => "💶 Valyuta", 'callback_data' => "valyuta"], ['text' => "💸 Taklif narxi", 'callback_data' => "narx"]],
                            [['text' => "📎 Admin useri", 'callback_data' => "admin"], ['text' => "📕 Qo'llanma", 'callback_data' => "qollanmatxt"]],
                            [['text' => "Yopish", 'callback_data' => "boshqarish"]]
                     ]
              ])
       ]);
       exit();
}

if ($data == "holat") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Hozirgi birlamchi sozlamalar:</b>

<i>1. Valyuta - $valyuta
2. Taklif narxi - $referal $valyuta
3. Admin useri: $user</i>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "◀️ Orqaga", 'callback_data' => "birlamchi"]],
                     ]
              ])
       ]);
}

if ($data == "qollanmatxt") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "📝 <b>Qo'llanma bo'limi uchun matn yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", 'qollanmatxt');
       exit();
}

if ($step == "qollanmatxt") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tizim/qollanma.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($data == "valyuta") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", 'valyuta');
       exit();
}

if ($step == "valyuta") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tizim/valyuta.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}

if ($data == "narx") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", 'taklif');
       exit();
}

if ($step == "taklif") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tizim/referal.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($data == "admin") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "📝 <b>Yangi qiymatni yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", 'admin');
       exit();
}

if ($step == "admin") {
       if ($cid == $admin) {
              if (isset($text)) {
                     file_put_contents("tizim/user.txt", $text);
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              }
       }
}


if ($text == "📢 Kanallar") {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "<b>Quyidagilardan birini tanlang:</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "🔐 Majburiy obunalar", 'callback_data' => "majburiy"]],
                                   [['text' => "*⃣ Qo'shimcha kanallar", 'callback_data' => "qoshimcha"]],
                                   [['text' => "Yopish", 'callback_data' => "boshqarish"]]
                            ]
                     ])
              ]);
              exit();
       }
}

if ($data == "kanallar") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Quyidagilardan birini tanlang:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🔐 Majburiy obunalar", 'callback_data' => "majburiy"]],
                            [['text' => "*⃣ Qo'shimcha kanallar", 'callback_data' => "qoshimcha"]],
                            [['text' => "Yopish", 'callback_data' => "boshqarish"]]
                     ]
              ])
       ]);
       exit();
}

if ($data == "majburiy") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Majburiy obunalarni sozlash bo'limidasiz:</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "➕ Qo'shish", 'callback_data' => "qoshish"]],
                            [['text' => "📑 Ro'yxat", 'callback_data' => "royxat"], ['text' => "🗑 O'chirish", 'callback_data' => "ochirish"]],
                            [['text' => "◀️ Orqaga", 'callback_data' => "kanallar"]]
                     ]
              ])
       ]);
}

if ($data == "qoshish") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Kanalingiz userini kiriting:

Namuna:</b> SupperCoders-SupperCoderUz
( Kanal nomi-Kanal_useri )",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", "qo'shish");
       exit();
}

if ($step == "qo'shish") {
       if ($cid == $admin) {
              if (isset($text)) {
                     if (mb_stripos($text, "-") !== false) {
                            if ($kanal == null) {
                                   $a = $KanalMin + 1;
                                   file_put_contents("tizim/KanalMin.txt", $a);
                                   file_put_contents("tizim/kanal.txt", $text);
                                   bot('SendMessage', [
                                          'chat_id' => $admin,
                                          'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                                          'parse_mode' => 'html',
                                          'reply_markup' => $asosiy
                                   ]);
                                   unlink("step/$cid.step");
                                   exit();
                            } else {
                                   file_put_contents("tizim/kanal.txt", "$kanal\n$text");
                                   bot('SendMessage', [
                                          'chat_id' => $admin,
                                          'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                                          'parse_mode' => 'html',
                                          'reply_markup' => $asosiy
                                   ]);
                                   unlink("step/$cid.step");
                                   exit();
                            }
                     } else {
                            bot('SendMessage', [
                                   'chat_id' => $cid,
                                   'text' => "<b>Kanalingiz userini kiriting:

Namuna:</b> SupperCoders-SupperCoderUz
( Kanal nomi-Kanal_useri )",
                                   'parse_mode' => 'html',
                            ]);
                            exit();
                     }
              }
       }
}

if ($data == "ochirish") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "⏱ <b>Yuklanmoqda...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "⏱ <b>Yuklanmoqda...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "✅ <b>Kanallar muvaffaqiyatli o'chirildi!</b>",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
                     ]
              ])
       ]);
       unlink("tizim/kanal.txt");
}

if ($data == "royxat") {
       $soni = substr_count($kanal, "-");
       if ($kanal == null) {
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
                     'text' => "⏱ <b>Yuklanmoqda...</b>",
                     'parse_mode' => 'html',
              ]);
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2 + 1,
                     'text' => "⏱ <b>Yuklanmoqda...</b>",
                     'parse_mode' => 'html',
              ]);
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
                     'text' => "📂 <b>Kanallar ro'yxati bo'sh!</b>",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
                            ]
                     ])
              ]);
       } else {
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
                     'text' => "⏱ <b>Yuklanmoqda...</b>",
                     'parse_mode' => 'html',
              ]);
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2 + 1,
                     'text' => "⏱ <b>Yuklanmoqda...</b>",
                     'parse_mode' => 'html',
              ]);
              bot('editMessageText', [
                     'chat_id' => $cid2,
                     'message_id' => $mid2,
                     'text' => "<b>📢 Kanallar ro'yxati:</b>

$kanal

<b>Ulangan kanallar soni:</b> $soni ta",
                     'parse_mode' => 'html',
                     'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                   [['text' => "◀️ Orqaga", 'callback_data' => "majburiy"]],
                            ]
                     ])
              ]);
       }
}

if ($data == "qoshimcha") {
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2 + 1,
              'text' => "<b>Kuting...</b>",
              'parse_mode' => 'html',
       ]);
       bot('editMessageText', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
              'text' => "<b>Quyidagilardan birini tanlang:

Hozirgi holat:
Promokod va to'lovlar uchun uchun kanal:</b> $promo",
              'parse_mode' => 'html',
              'reply_markup' => json_encode([
                     'inline_keyboard' => [
                            [['text' => "🆕 Kiritish", 'callback_data' => "promo"]],
                            [['text' => "◀️ Orqaga", 'callback_data' => "kanallar"]]
                     ]
              ])
       ]);
}
/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/
if ($data == "promo") {
       bot('deleteMessage', [
              'chat_id' => $cid2,
              'message_id' => $mid2,
       ]);
       bot('SendMessage', [
              'chat_id' => $cid2,
              'text' => "<b>Kanalingiz userini yuboring:</b>",
              'parse_mode' => 'html',
              'reply_markup' => $boshqarish,
       ]);
       file_put_contents("step/$cid2.step", 'kanal');
       exit();
}

if ($step == "kanal" and $cid == $admin) {
       if (stripos($text, "@") !== false) {
              $get = bot('getChat', [
                     'chat_id' => $text
              ]);
              $types = $get->result->type;
              $ch_name = $get->result->title;
              $ch_user = $get->result->username;
              if (getAdmin($ch_user) == true) {
                     file_put_contents("tizim/promo.txt", "@$ch_user");
                     bot('SendMessage', [
                            'chat_id' => $admin,
                            'text' => "<b>Muvaffaqiyatli o'zgartirildi!</b>",
                            'parse_mode' => 'html',
                            'reply_markup' => $asosiy,
                     ]);
                     unlink("step/$cid.step");
                     exit();
              } else {
                     bot('SendMessage', [
                            'chat_id' => $cid,
                            'text' => "<b>Bot ushbu kanalda admin emas yoki noto'g'ri kanal manzili yuborildi!</b>",
                            'parse_mode' => 'html',
                     ]);
                     exit();
              }
       } else {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "⚠️ <b>Kanal manzili kiritishda xatolik!</b>

Qayta urinib ko'ring:",
                     'parse_mode' => 'html',
              ]);
              exit();
       }
}

if (isset($message)) {
       if ($cid == $admin) {
              bot('SendMessage', [
                     'chat_id' => $admin,
                     'text' => "🖥",
                     'parse_mode' => 'html',
                     'reply_markup' => $menus,
              ]);
       } else {
              bot('SendMessage', [
                     'chat_id' => $cid,
                     'text' => "🖥",
                     'parse_mode' => 'html',
                     'reply_markup' => $menu,
              ]);
       }
}

/*
Dasturchi: @VisualCoderUz

Manbaga tegilmasin.
*/

?>
