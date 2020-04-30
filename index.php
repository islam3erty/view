<?php


set_time_limit(0);

ob_start();

include("jdf.php");
//Ushbu kod @Clever_Coders kanali orqali tarqatildi 
//Agarda biror joyda bemanba ko'rib qolsam Xafa bo'lish yo'q 
//Xurmat ila @wcpro
//@Clever_Coders kanalida bundanda zo'r php lar bor 
$API_KEY = '1111497043:AAFfeF6vMDCbVpBD6hhX6dXtcsYrMHPVuis';
##---------@wcpro----------##
define('API_KEY', $API_KEY);
function bot($method, $CCA_DATAs = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $CCA_DATAs);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
function sendmessage($Clever_APIChatsSu, $CCA_TEXT_T)
{
    bot('sendMessage', [
        'chat_id' => $Clever_APIChatsSu,
        'text' => $CCA_TEXT_T,
        'parse_mode' => "MarkDown"
    ]);
}
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
function deletemessage($Clever_APIChatsSu, $Clever_APIXabarRaqami)
{
    bot('deletemessage', [
        'chat_id' => $Clever_APIChatsSu,
        'message_id' => $Clever_APIXabarRaqami,
    ]);
}
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
function sendaction($Clever_APIChatsSu, $action)
{
    bot('sendchataction', [
        'chat_id' => $Clever_APIChatsSu,
        'action' => $action
    ]);
}
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
function Forward($KojaShe, $AzKoja, $KodomMSG)
{
    bot('ForwardMessage', [
        'chat_id' => $KojaShe,
        'from_chat_id' => $AzKoja,
        'message_id' => $KodomMSG
    ]);
}
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
function sendphoto($Clever_APIChatsSu, $photo, $action)
{
    bot('sendphoto', [
        'chat_id' => $Clever_APIChatsSu,
        'photo' => $photo,
        'action' => $action
    ]);
}
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
function objectToArrays($object)
{
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
    if (is_object($object)) {
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}

//↓PASTGA↓UMUMAN↓TEGMANG↓BO'LMASA↓KOD↓UMUMAN↓ISHLAMAYDI↓DAJE↓1TA↓XARF↓O'ZGARSA↓XAM↓XURMAT↓ILA↓@wcpro

//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_APIChatsUP = json_decode(file_get_contents('php://input'));
$Clever_APIChatsMS = $Clever_APIChatsUP->message;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$CCA_post = $Clever_APIChatsUP->message->channel_post;
$Clever_APICodes = file_get_contents("data/code.txt");
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_APICodes2 = file_get_contents("data/code2.txt");
$chid = $Clever_APIChatsUP->channel_post->message->message_id;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_APIChatsSu = $Clever_APIChatsMS->chat->id;
$Clever_APIXabarRaqami = $Clever_APIChatsMS->message_id;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$from_id = $Clever_APIChatsMS->from->id;
$c_id = $Clever_APIChatsMS->forward_from_chat->id;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_Coders_forward = $Clever_APIChatsUP->message->forward_from->id;
$Clever_Coders_chat = $Clever_APIChatsUP->message->forward_from_chat;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_Coders_chat_username = $Clever_APIChatsUP->message->forward_from_chat->username;
$Clever_Coders_chat_msg_id = $Clever_APIChatsUP->message->forward_from_message_id;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
@$shoklt = file_get_contents("data/$Clever_APIChatsSu/shoklat.txt");
@$penlist = file_get_contents("data/pen.txt");
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$CCA_TEXT_T = $Clever_APIChatsMS->text;
@mkdir("data/$Clever_APIChatsSu");
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
@$ali = file_get_contents("data/$Clever_APIChatsSu/ali.txt");
@$list = file_get_contents("users.txt");
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°



//ILTIMOS SHU 4TA MANBANI O'ZGARTIRING QOLGANIGA TEGMANG 
//AKS XOLDA KOD ISHLAMAY QOLADI


//BU SIZ UCHUN ENG OSON YO'LI


$ADMIN = 1139073652; //ADMIN Id si 1
$bot = "KinoPM"; //botiz useri @ siz yozing 2
$Clever_CodersChnsl = "KinoPM"; //kanaliz useri @ siz yozing 3
$CCAmyadmin = "Alimardon7755"; //admin useri @ siz yozing 4 TAMOM


//BU SIZ UCHUN ENG OSON YO'LI


//ILTIMOS SHU 4TA MANBANI O'ZGARTIRING QOLGANIGA TEGMANG 
//AKS XOLDA KOD ISHLAMAY QOLADI



//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$channel = file_get_contents("data/channel.txt");
$channe2l = file_get_contents("data/channel2.txt");
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$chatid = $Clever_APIChatsUP->callback_query->message->chat->id;
$CCA_DATA = $Clever_APIChatsUP->callback_query->data;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_APIXabarRaqami2 = $Clever_APIChatsUP->callback_query->message->message_id;
$fromm_id = $Clever_APIChatsUP->inline_query->from->id;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_Coders_USERNAME = $Clever_APIChatsUP->inline_query->from->username;
$inline_query = $Clever_APIChatsUP->inline_query;
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$Clever_Coders_QID = $inline_query->id;
$fatime = date('H:i', strtotime('2 hour'));
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$fadate = date('d-M Y',strtotime('2 hour'));
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@KINOUNIVERSE&user_id=".$from_id);
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
if($Clever_APIChatsMS && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: vvssr"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$Clever_APIChatsSu,
'text'=>"👋┇ Salom bot xush kelibsiz

🌟┇ Botdan foydalanish uchun kanalimizga a'zo boling

📡┇Kanalimiz
@KINOUNIVERSE👈
👆👆👆

📌┇ A'zo bolib /start ni bosin ",
'reply_to_message_id'=>$msid,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "👥A`zo bo`lish", 'url' => "t.me/KINOUNIVERSE"]],]])
]);return false;}

//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
$ptn = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "1⃣", 'callback_data' => "c1"], ['text' => "2⃣", 'callback_data' => "c2"], ['text' => "3⃣", 'callback_data' => "c3"]
        ],
        [
            ['text' => "4⃣", 'callback_data' => "c4"], ['text' => "5⃣", 'callback_data' => "c5"], ['text' => "6⃣", 'callback_data' => "c6"]
        ],
        [
            ['text' => "7⃣", 'callback_data' => "c7"], ['text' => "8⃣", 'callback_data' => "c8"], ['text' => "9⃣", 'callback_data' => "c9"]
        ],
        [
            ['text' => "Tasdiqlash✅", 'callback_data' => "chk"], ['text' => "0⃣", 'callback_data' => "c0"]
        ],
        [
            ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
        ],
    ]
]);
////_________
if ($CCA_TEXT_T == "/start") {
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
        $user = file_get_contents('users.txt');
        $members = explode("n", $user);
        if (!in_array($from_id, $members)) {
            $add_user = file_get_contents('users.txt');
            $add_user .= $from_id . "n";
            file_put_contents("data/$Clever_APIChatsSu/membrs.txt", "0");
            file_put_contents("data/$Clever_APIChatsSu/shoklat.txt", "10");
            file_put_contents('users.txt', $add_user);
        }
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "no");
        sendAction($Clever_APIChatsSu, 'typing');
        bot('sendmessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "*👋Salom dostim (tashrifingiz uchun rahmat) 
            
Siz ushbu botda kanalingiz postni osongina oshirish uchun ushbu botdan foydalanishingiz mumkin

Botni kanalizga admin qiling bumasa ishlamidi

Ishni boshlash uchun quyidagi variantlardan birini tanlang*",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Ball yig'ish💰", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "Referal📲", 'callback_data' => "b"], ['text' => " Kabinet👤", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "Zakas qilish📝", 'callback_data' => "e"], ['text' => "📤Tanga sovg'a qilish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "Dokon🛍", 'callback_data' => "f"], ['text' => "Yordam🤖", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => " Kuzatuv Buyurtma🔎", 'callback_data' => "h"], ['text' => "Sovg'a kodi🎁", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "💰Kunlik bonus💰", 'callback_data' => "j"]
                    ],
                    
                ]
            ])
        ]);
    } elseif (strpos($penlist, "$from_id")) {
        SendMessage($Clever_APIChatsSu, "Hey, azizim, biz serverni to'sib qo'ydik, yana xabarlar yo'q");
    } elseif (strpos($CCA_TEXT_T, '/start') !== false && $Clever_Coders_chat_username == null) {
        $newid = str_replace("/start ", "", $CCA_TEXT_T);
        if ($from_id == $newid) {
            bot('sendMessage', [
                'chat_id' => $Clever_APIChatsSu,
                'text' => "Sizning havolangizga kira olmaysiz!",
            ]);
        } elseif (strpos($list, "$from_id") !== false) {
            SendMessage($Clever_APIChatsSu, "Siz allaqachon ushbu botga azo bo'lgansiz va a'zolik aloqangiz bilan bot a'zosi bo'la 😑 ");
        } else {
            sendAction($Clever_APIChatsSu, 'typing');
            @$sho = file_get_contents("data/$newid/shoklat.txt");
$ran = rand(5, 20);
            $getsho = $sho + $ran;
            file_put_contents("data/$newid/shoklat.txt", $getsho);
            @$sea = file_get_contents("data/$newid/membrs.txt");
            $getsea = $sea + 1;
            file_put_contents("data/$newid/membrs.txt", $getsea);
            $user = file_get_contents('users.txt');
            $members = explode("n", $user);
            if (!in_array($from_id, $members)) {
                $add_user = file_get_contents('users.txt');
                $add_user .= $from_id . "n";
                file_put_contents("data/$Clever_APIChatsSu/membrs.txt", "0");
                file_put_contents("data/$Clever_APIChatsSu/shoklat.txt", "10");
                file_put_contents('users.txt', $add_user);
            }
            file_put_contents("data/$Clever_APIChatsSu/ali.txt", "No");
            sendmessage($Clever_APIChatsSu, "تبریک دوست عزیز شما با دعوت کاربر $newid عضو این ربات شده اید😃");
            bot('sendmessage', [
                'chat_id' => $Clever_APIChatsSu,
          'text' => "*👋Salom dostim (tashrifingiz uchun rahmat) 
            
Siz ushbu botda kanalingiz postni osongina oshirish uchun ushbu botdan foydalanishingiz mumkin

Botni kanalizga admin qiling bumasa ishlamidi

Ishni boshlash uchun quyidagi variantlardan birini tanlang*",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Ball yig'ish💰", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "Referal📲", 'callback_data' => "b"], ['text' => " Kabinet👤", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "Zakas qilish📝", 'callback_data' => "e"], ['text' => "📤Tanga sovg'a qilish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "Dokon🛍", 'callback_data' => "f"], ['text' => "Yordam🤖", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => " Kuzatuv Buyurtma🔎", 'callback_data' => "h"], ['text' => "Sovg'a kodi🎁", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "💰Kunlik bonus💰", 'callback_data' => "j"]
                    ],
                    ]
                ])
            ]);
            SendMessage($newid, "Tabriklaymiz, hozir sizning maxsus havolangizga bir kishi botga kirdi😇

Sizda 10 bepul tanga bor. ");
        }
    }
    //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
    elseif ($CCA_DATA == "home") {
    unlink("cod/$chatid.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Bosh menyuga qaytingiz",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "no");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "
*Asosiy menyuga qaytardingiz
🔻Quyidagi variantlardan birini tanlang*🔻
",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Ball yig'ish💰", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "Referal📲", 'callback_data' => "b"], ['text' => " Kabinet👤", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "Zakas qilish📝", 'callback_data' => "e"], ['text' => "📤Tanga sovg'a qilish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "Dokon🛍", 'callback_data' => "f"], ['text' => "Yordam🤖", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => " Kuzatuv Buyurtma🔎", 'callback_data' => "h"], ['text' => "Sovg'a kodi🎁", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "💰Kunlik bonus💰", 'callback_data' => "j"]
                    ],
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "a") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Ball yigish bolimidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Ball yig'ish bo'limiga xush kelibsiz


Bu erda kanalimizga tashrif buyurib, har bir postning ostidagi `Pul` tugmasini bosish orqali pul topishingiz mumkin.
Kanaldagi faoliyatingiz robot bilan birlashtirilgan bo'lib, sizning hisobingizga robotda darhol kirish pullari yuboriladi.
Ko'rsatilgan reklamalar kanaliga kirish uchun quyidagi  (Kanalga Kirish tugmasi)  bosishingiz mumkin ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "👁‍🗨Kanalga kirish", 'url' => "https://t.me/$Clever_CodersChnsl"]
                    ],
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ]
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "k") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Sovg'a kodi bolimidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Quyidagi klaviatura yordamida pulni oshirish uchun kanalga yuborilgan kodni yuboring
Keyin (Tasdiqlash) tugmasini bosing, ",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c1") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "1");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c2") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "2");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod
",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c3") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "3");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod
",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c4") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "4");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod
",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c5") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "5");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c6") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "6");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c7") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "7");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c8") {
        $fromm_id = $Clever_APIChatsUP->inline_query->from->id;
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "8");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c9") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "9");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "c0") {
        $myfile2 = fopen("cod/$chatid.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "0");
        fclose($myfile2);
        $cod = file_get_contents("cod/$chatid.txt");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kiritilgan kod:
$cod",
            'reply_markup' => $ptn
        ]);
    } elseif ($CCA_DATA == "chk") {
        $fromm_id = $Clever_APIChatsUP->inline_query->from->id;
        $cod = file_get_contents("cod/$chatid.txt");
        $Clever_APICodes2 = file_get_contents("data/code2.txt");
        if ($cod == $Clever_APICodes && $cod != null) {
            @$sho = file_get_contents("data/$chatid/shoklat.txt");
            $getsho = $sho + $Clever_APICodes2;
            file_put_contents("data/$chatid/shoklat.txt", $getsho);
            unlink("cod/$chatid.txt");
            file_put_contents("data/code.txt", "");
            file_put_contents("data/code2.txt", "");
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Sovg'a kodi bilan tabriklaysiz, 
        $Clever_APICodes2 kodidan olingan tangalar soni  ",
                'show_alert' => true
            ]);
            bot('sendMessage', [
                'chat_id' => $channel2,
                'text' => "$codi kodi o'chirib qo'yildi
 
 By: 👇
🆔: $chatid
 
Soat: $fatime

  ",

            ]);
            file_put_contents("data/$chatid/ali.txt", "no");
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "
*Asosiy menyuga qaytardingiz
🔻Quyidagi variantlardan birini tanlang*🔻
",
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "Ball yig'ish💰", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "Referal📲", 'callback_data' => "b"], ['text' => " Kabinet👤", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "Zakas qilish📝", 'callback_data' => "e"], ['text' => "📤Tanga sovg'a qilish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "Dokon🛍", 'callback_data' => "f"], ['text' => "Yordam🤖", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => " Kuzatuv Buyurtma🔎", 'callback_data' => "h"], ['text' => "Sovg'a kodi🎁", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "💰Kunlik bonus💰", 'callback_data' => "j"]
                    ],
                    ]
                ])
            ]);
        } else {
            unlink("cod/$chatid.txt");
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Kiritilgan kod to'g'ri emas yoki allaqachon ishlatilgan🖤",
                'show_alert' => true
            ]);
            file_put_contents("data/$chatid/ali.txt", "no");
            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "
*Asosiy menyuga qaytardingiz
🔻Quyidagi variantlardan birini tanlang*🔻
",
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "Ball yig'ish💰", 'callback_data' => "a"]
                    ],
                    [
                        ['text' => "Referal📲", 'callback_data' => "b"], ['text' => " Kabinet👤", 'callback_data' => "c"]
                    ],
                    [
                        ['text' => "Zakas qilish📝", 'callback_data' => "e"], ['text' => "📤Tanga sovg'a qilish", 'callback_data' => "d"]
                    ],
                    [
                        ['text' => "Dokon🛍", 'callback_data' => "f"], ['text' => "Yordam🤖", 'callback_data' => "g"]
                    ],
                    [
                        ['text' => " Kuzatuv Buyurtma🔎", 'callback_data' => "h"], ['text' => "Sovg'a kodi🎁", 'callback_data' => "k"]
                    ],
                    [
                        ['text' => "💰Kunlik bonus💰", 'callback_data' => "j"]
                    ],
                    ]
                ])
            ]);
        }
    } elseif ($CCA_DATA == "b") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Referal bolimidasiz",
            'show_alert' => false
        ]);
        bot('sendmessage', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Prosmotorni oshiring

Kanalingizda postlarni kam korilishidan charchadingizmi?

Odamlar sizning kanalingiz aktiv ekanligini biladimi?

Kanalingizdagi postlar prosmotrni kotarishni xohlaysizmi? ✫😱

Siz bular uchun tayyormisiz? 😋❤️


prosmotr kuchaytirish uchun botga qo'shiling
Pullaringizni to'plang va kanal prosmotrini oshiring♥ ️

http://telegram.me/$bot?start=$chatid ",
        ]);
        bot('sendmessage', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Salom aziz do'stim, quyidagi bo'limga xush kelibsiz

Siz do'stlaringizni botga taklif qilinga va 
Bepul 10tanga oling

Tepadagi habarni dostingizga yuboring ♥",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "j") {
        date_default_timezone_set('Asia/Dushanbe');
        $date = date('Ymd');
        @$gettime = file_get_contents("data/$chatid/dates.txt");
        if ($gettime == $date) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "💢Siz kunlik tanga olgansiz, ertaga qadar kuting♻️",
                'show_alert' => true
            ]);
        } else {
            file_put_contents("data/$chatid/dates.txt", $date);
            @$sho = file_get_contents("data/$chatid/shoklat.txt");
            $ran = rand(10, 30);
            $getsho = $sho + $ran;
            file_put_contents("data/$chatid/shoklat.txt", $getsho);
            $sho2 = file_get_contents("data/$chatid/shoklat.txt");
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => " Sizga $ran  pul qo'shildi❤️",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "f") {
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Do'konga xush kelibsiz!

Tanga sotib olish uchun 👇Sotib olish👇admin ga murojat qiling ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "💰Sotib olish", 'url' => "https://t.me/$CCAmyadmin"]
                    ],
                    [
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°                        
                    ],
                    [
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°                        
                    ],
                        [
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°                        
                    ],
                    [
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°                        
                    ],
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "c") {
        @$sho = file_get_contents("data/$chatid/shoklat.txt");
        @$sea = file_get_contents("data/$chatid/membrs.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "
        
🆔Raqamingiz: $chatid
   💰Hisobingiz: $sho
    Obunangiz: $sea",
            'show_alert' => true
        ]);
    } elseif ($CCA_DATA == "g") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Yordam bolimidasiz",
            'show_alert' => false
        ]);
        bot('editmessageText', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Variantlardan birini tanlang",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
               [['text' => "📖Qollanma", 'callback_data' => "qol"], ['text' => "Qoida📝", 'callback_data' => "pus"]],
[['text' => "🏚Bosh menyu",'callback_data' => "home"]],
                ]
            ])
        ]);
    }elseif ($CCA_DATA == "qol") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "🔖Yordam bolimidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Siz bu bot orqali kanalingiz postlarini korish sifatini oshirishingiz mumkun

Buning uchun `Ball ishlash💰` ga bosing va bot kanaliga kiring
Bot kanalidagi har bir post tagidagi `💰Ball olish💰` tugmasini bosib ball yiging

Xisobingiz prosmotir yigish ballari hisobiga yetsa postingizni kanalimizga joylay olasiz

Post joylash uchun `Zakas qilish📝` tugmasini bosing va ozingizga keraklisini tanlang va kanalinigizga oyib birorta postni Forword qilib yuborin

Bizda 💰Kunlik bonus💰 ham mavjud har kuni bir marotaba tasodifiy bonis beriladi qancha berishi omadingizga qarab😇

Bizda ozingizni hisobingizni dostingizga sovga qilishingiz ham mumkun buning uchun `📤Tanga sovg'a qilish` ni bosing va dostingiz ID raqamini yuboring  ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Qoida📝", 'callback_data' => "pus"]
                    ],
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ]
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "pus") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "📝Qoida bolimidasiz",
            'show_alert' => false
        ]);
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Bizning talab va shatlrtlarimiz bilan tanishib chiqing

1⃣ Har xil Diniy Siyosiy postlarni tashlash mumkun emas

2⃣ Pornografik videolar, ozbekchilikga to'g'ri kelmaydialgan rasmlar

3⃣ Inson ruxiyatiga zarba beruvchi postlar

4⃣ Millatchilikga aloqodor postlar

‼Tashlash qatiyan taqiqlanadi shunday xol kuzatilsa siz va kanalingiz bloklanadi🚫 ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Qollanma📖", 'callback_data' => "qol"]
                    ],
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ]
                ]
            ])
        ]);
    } 

 elseif ($CCA_DATA == "d") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Tanga sovga bolimi",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "for");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Tangaga o'tkazmoqchi bo'lgan foydalanuvchi 🆔raqamini  yuboring",
        ]);
    } elseif ($ali == "for") {
        if ($from_id == $Clever_Coders_forward) {
            SendMessage($Clever_APIChatsSu, "Xabaringizni buzmang! ️‼️");
        } else {
            if (strpos($list, "$Clever_Coders_forward") !== false) {
                file_put_contents("data/$Clever_APIChatsSu/ali.txt", "fore");
                file_put_contents("data/$Clever_APIChatsSu/for.txt", $Clever_Coders_forward);
                bot('sendMessage', [
                    'chat_id' => $Clever_APIChatsSu,
                    'text' => "$Clever_Coders_forward foydalanuvchiga tangalar sonini yuboring ",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [
                                ['text' => "Bosh menyu🏚🙃", 'callback_data' => "home"]
                            ],
                        ]
                    ])
                ]);
            } else {
                SendMessage($Clever_APIChatsSu, "Foydalanuvchi bot azosi emas");
            }
        }
    } elseif ($ali == "fore") {
        if (preg_match('/^([0-9])/', $CCA_TEXT_T)) {
            if ($shoklt > $CCA_TEXT_T) {
                $fr = file_get_contents("data/$Clever_APIChatsSu/for.txt");
                $fle = file_get_contents("data/$fr/shoklat.txt");
                $fl = file_get_contents("data/$Clever_APIChatsSu/shoklat.txt");
                $s = $CCA_TEXT_T;
                $getsh = $fl - $s;
                file_put_contents("data/$Clever_APIChatsSu/shoklat.txt", $getsh);
                SendMessage($Clever_APIChatsSu, "Sizning tangalaringiz muvaffaqiyatli kerakli foydalanuvchiga topshirildi.");
                $getshe = $fle + $s;
                file_put_contents("data/$fr/shoklat.txt", $getshe);
                SendMessage($fr, "Tabriklaymiz $Clever_APIChatsSu Sizga $CCA_TEXT_T  Tanga xadiya qildi✅");
            } else {
                SendMessage($Clever_APIChatsSu, "Sizda etarli mablag ' yo'q; sizda 1💰tanga qolishi kerak.");
            }
        } else {
            SendMessage($Clever_APIChatsSu, "Kechirasiz faqat raqam yuboring😶");
        }
    } elseif ($CCA_DATA == "e") {
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Xurmatli foydalanuvchi kanalingiz postini korish kerak bolgan raqamni tanlang✅",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
               [['text' => "10👁", 'callback_data' => "seen10"],['text' => "20👁", 'callback_data' => "seen20"]],
                    [['text' => "45👁", 'callback_data' => "seen45"],['text' => "80👁", 'callback_data' => "seen80"]],
                    [['text' => "100👁", 'callback_data' => "seen100"],['text' => "130👁", 'callback_data' => "seen130"]],
              [['text' => "200👁", 'callback_data' => "seen200"],['text' => "240👁", 'callback_data' => "seen240"]],
                 [['text' => "300👁", 'callback_data' => "seen300"],['text' => "500👁", 'callback_data' => "seen500"]],
              [['text' => "700👁", 'callback_data' => "seen700"],['text' => "1000👁", 'callback_data' => "seen1000"]],
                    [
                        ['text' => "Bosh menyu🏚 ", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    }
elseif ($CCA_DATA == "seen10") {
        file_put_contents("data/$chatid/ted.txt", "10");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } 
        elseif ($CCA_DATA == "seen20") {
        file_put_contents("data/$chatid/ted.txt", "20");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen45") {
        file_put_contents("data/$chatid/ted.txt", "45");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen80") {
        file_put_contents("data/$chatid/ted.txt", "80");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen130") {
        file_put_contents("data/$chatid/ted.txt", "130");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen240") {
        file_put_contents("data/$chatid/ted.txt", "240");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢 ",

                'show_alert' => true
            ]);
        }
    }

elseif ($CCA_DATA == "seen100") {
        file_put_contents("data/$chatid/ted.txt", "100");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen200") {
        file_put_contents("data/$chatid/ted.txt", "200");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen500") {
        file_put_contents("data/$chatid/ted.txt", "500");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen700") {
        file_put_contents("data/$chatid/ted.txt", "700");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni kanalingizdan menga forward usulida yuboring✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢 ",

                'show_alert' => true
            ]);
        }
    } elseif ($CCA_DATA == "seen1000") {
        file_put_contents("data/$chatid/ted.txt", "1000");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt > $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        }
    } 

elseif ($CCA_DATA == "seen300") {
        file_put_contents("data/$chatid/ted.txt", "300");
        $aaa = file_get_contents("data/$chatid/ted.txt");
        $shoklt = file_get_contents("data/$chatid/shoklat.txt");
        if ($shoklt < $aaa) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "❗️Ushbu raqamni ro'yxatdan o'tkazish uchun ballingiz etarli emas💢",
                'show_alert' => true
            ]);
        } else {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Bir oz kutib turing",
                'show_alert' => false
            ]);
            file_put_contents("data/$chatid/ali.txt", "seen2");

            bot('editmessagetext', [
                'chat_id' => $chatid,
                'message_id' => $Clever_APIXabarRaqami2,
                'text' => "Reklamangizni ommaviy kanaldan tarqating✅",
            ]);
        }
    } elseif ($ali == "seen2") {
        if ($Clever_Coders_chat_username != null) {
            $msg_id = bot('ForwardMessage', [
                'chat_id' => $channel,
                'from_chat_id' => "@$Clever_Coders_chat_username",
                'message_id' => $Clever_Coders_chat_msg_id
            ])->result->message_id;
            bot('sendMessage', [
                'chat_id' => $channel,
                'text' => "‌👆👆👆🔘👇👇👇",
                'reply_to_message_id' => $msg_id,
                'parse_mode' => "MarkDown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "💰Ball olish💰", 'callback_data' => "ok"]
                        ],
                        [['text' => "🤖Botga kirish", 'url' => "https://t.me/$bot"]],
                    ]
                ])
            ]);

            @$al = file_get_contents("data/$Clever_APIChatsSu/ted.txt");
            @$sho = file_get_contents("data/$Clever_APIChatsSu/shoklat.txt");
            $getsho = $sho - $al;
            file_put_contents("data/$Clever_APIChatsSu/shoklat.txt", $getsho);
            @$don = file_get_contents("data/done.txt");
$ran = rand(1, 3);
            $getdon = $don + $ran;
            file_put_contents("data/done.txt", $getdon);
            file_put_contents("ads/cont/$msg_id.txt", $al);
            file_put_contents("ads/date/$msg_id.txt", $fadate);
            file_put_contents("ads/time/$msg_id.txt", $fatime);
            file_put_contents("ads/admin/$msg_id.txt", $Clever_APIChatsSu);
            file_put_contents("ads/seen/$msg_id.txt", "0");
            file_put_contents("ads/user/$msg_id.txt", "");
            file_put_contents("data/$Clever_APIChatsSu/ali.txt", "no");
            bot('sendMessage', [
                'chat_id' => $Clever_APIChatsSu,
                'text' => "Yaxshi, azizim, reklamaingiz bizning kanalimizga muvaffaqiyatli yuklandi

✔️ reklama shartlari:
  Kuzatuv kodi: $msg_id
  👁🗨 ko'rish raqami: $al
  ⏰ So'rovlarni yuborish vaqtlari: $fatime
 Sana: $fadate

 Kanalimizdagi xabaringizni korish uchun bosing👇

  http://telegram.me/$Clever_CodersChnsl/$msg_id
",
            ]);
        } else {
            sendmessage($Clever_APIChatsSu, "Iltimos, xabarni forword qilib jonating ❗");
        }
    }
    //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
    if ($CCA_DATA == "ok") {
        $Clever_APIXabarRaqami12 = $Clever_APIChatsUP->callback_query->message->reply_to_message->message_id;
        $fromm_id = $Clever_APIChatsUP->callback_query->from->id;
        @$ue = file_get_contents("ads/user/$Clever_APIXabarRaqami12.txt");
        @$se = file_get_contents("ads/seen/$Clever_APIXabarRaqami12.txt");
        if (strpos($ue, "$fromm_id") !== false) {
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "Siz allaqachon bu postni qabul qildingiz.😑❗️",
                'show_alert' => false
            ]);
        } else {
            $user = file_get_contents("ads/user/$Clever_APIXabarRaqami12.txt");
            $members = explode("n", $user);
            if (!in_array($fromm_id, $members)) {
                $add_user = file_get_contents("ads/user/$Clever_APIXabarRaqami12.txt");
                $add_user .= $fromm_id . "n";
                file_put_contents("ads/user/$Clever_APIXabarRaqami12.txt", $add_user);
            }
            $getse = $se + 1;
            file_put_contents("ads/seen/$Clever_APIXabarRaqami12.txt", $getse);
            @$sho = file_get_contents("data/$fromm_id/shoklat.txt");
            $getsho = $sho + 1;
            file_put_contents("data/$fromm_id/shoklat.txt", $getsho);
            bot('answercallbackquery', [
                'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
                'text' => "💰Tabriklaymiz siz 1 tanga oldingiz😃",
                'show_alert' => false
            ]);
        }
        $end = file_get_contents("ads/seen/$Clever_APIXabarRaqami12.txt");
        $ad = file_get_contents("ads/admin/$Clever_APIXabarRaqami12.txt");
        $co = file_get_contents("ads/cont/$Clever_APIXabarRaqami12.txt");
        $te = file_get_contents("ads/time/$Clever_APIXabarRaqami12.txt");
        $de = file_get_contents("ads/date/$Clever_APIXabarRaqami12.txt");
        if ($end == $co) {
            file_put_contents("data/$Clever_APIChatsSu/ali.txt", "no");
            bot('sendMessage', [
                'chat_id' => $ad,
                'text' => "Sizning buyurtmangiz **$Clever_APIXabarRaqami12** yakunlandi

👁 🗨 Siz so'ragan tashriflar soni: $co
So'rov soat: $te
Sana so'rov: $de
So'rov tugashi: $fatme

Siz bilan gururlashamiz",
                'parse_mode' => "MarkDown"
            ]);
            @$don = file_get_contents("data/done.txt");
            $getdon = $don - 1;
            file_put_contents("data/done.txt", $getdon);
            @$enn = file_get_contents("data/enf.txt");
            $getenf = $enn + 1;
            file_put_contents("data/enf.txt", $getenf);
            $de = $Clever_APIXabarRaqami12 + 1;
            deletemessage($channel, $Clever_APIXabarRaqami12);
            deletemessage($channel, $de);
            unlink("ads/seen/$Clever_APIXabarRaqami12.txt");
            unlink("ads/admin/$Clever_APIXabarRaqami12.txt");
            unlink("ads/cont/$Clever_APIXabarRaqami12.txt");
            unlink("ads/time/$Clever_APIXabarRaqami12.txt");
            unlink("ads/user/$Clever_APIXabarRaqami12.txt");
            unlink("ads/date/$Clever_APIXabarRaqami12.txt");
        }
    } elseif ($CCA_DATA == "h") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Biroz kuting",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "mlm");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Keyingi kodni yuboring.😀",
        ]);
    } elseif ($ali == "mlm") {
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "");
        if (file_exists("ads/admin/$CCA_TEXT_T.txt")) {
            $ge = file_get_contents("ads/seen/$CCA_TEXT_T.txt");
            $ad = file_get_contents("ads/admin/$CCA_TEXT_T.txt");
            $co = file_get_contents("ads/cont/$CCA_TEXT_T.txt");
            $te = file_get_contents("ads/time/$CCA_TEXT_T.txt");
            $de = file_get_contents("ads/date/$CCA_TEXT_T.txt");
            bot('sendMessage', [
                'chat_id' => $Clever_APIChatsSu,
                'text' => "$CCA_TEXT_T kuzatish uchun kod quyidagicha
👁🗨 Sizning so'ralgan tashrifingiz: $co
⏰Sorov soati: $te
Sorov sanasi: $de
 Siz hozirga qadar topgan prosmotr soni: $ge
🕰 So'rovni bajarilish vaqti: $fatime

Muvaffaqiyatli bo'ling va sharafli bo'ling! ",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                        ],
                    ]
                ])
            ]);
        } else {
            bot('sendMessage', [
                'chat_id' => $Clever_APIChatsSu,
                'text' => "Sizning amaldagi kod noto'g'ri yoki buyurtma bekor qilindi.",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [
                            ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                        ],
                    ]
                ])
            ]);
        }
    }

////----
if ($chatid == $ADMIN or $Clever_APIChatsSu == $ADMIN) {
    if ($CCA_TEXT_T == "/panel") {
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "no");
        sendAction($Clever_APIChatsSu, 'typing');
        bot('sendmessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "ADMIN bolimi😁",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                            ['text' => "♻️Elonlar ro'yhati♻️", 'callback_data' => "am"]
                    ],
                    [
                        ['text' => "Xabar yuborish📤", 'callback_data' => "send"], ['text' => "Forword xabar📧", 'callback_data' => "fwd"]
                    ],
                    [
                        ['text' => "Ban📛", 'callback_data' => "pen"], ['text' => "Unban🔓", 'callback_data' => "unpen"]
                    ],
                    [
                        ['text' => "Sovg'a kodi🎁", 'callback_data' => "crl"],['text' => "Reklama kanalini o'rnatish🆔", 'callback_data' => "setc"]
                    ],
                       [
                        ['text' => "Tanga sovga qilish💰", 'callback_data' => "buy"],['text' => "Sovg'a kanalini ornatish🔆", 'callback_data' => "setc2"]
                    ]
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "am") {
        $user = file_get_contents("users.txt");
        $member_id = explode("n", $user);
        $member_count = count($member_id) - 1;
        @$don = file_get_contents("data/done.txt");
        @$enf = file_get_contents("data/enf.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Robot a'zolari soni: $member_count
Amaldagi reklamalarning soni: $don
Qilingan reklamalar soni: $enf",

            'show_alert' => true
        ]);
    } elseif ($CCA_DATA == "send") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "send");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Xabaringizni yozing",
        ]);
    } elseif ($ali == "send") {
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "no");
        $fp = fopen("users.txt", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
            sendmessage($ckar, $CCA_TEXT_T);
        }
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Yuborildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "fwd") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "fwd");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Xabaringizni yozing",
        ]);
    } elseif ($ali == 'fwd') {
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "no");
        $forp = fopen("users.txt", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
            Forward($fakar, $Clever_APIChatsSu, $Clever_APIXabarRaqami);
        }
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Yuborildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "pen") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "pen");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kerakli foydalanuchi 🆔 ni kiriting",
        ]);
    } elseif ($ali == 'pen') {
        $myfile2 = fopen("data/pen.txt", 'a') or die("Unable to open file!");
        fwrite($myfile2, "$CCA_TEXT_Tn");
        fclose($myfile2);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => " Foydalanuvchi bloklandi
 $CCA_TEXT_T ",
            'parse_mode' => "MarkDown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } elseif ($CCA_DATA == "unpen") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "unpen");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kerakli foydalanuchi 🆔 ni kiriting",
        ]);
    } elseif ($ali == 'unpen') {
        $newlist = str_replace($CCA_TEXT_T, "", $penlist);
        file_put_contents("data/pen.txt", $newlist);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Foydalanuvchi blokdan olindi
 $CCA_TEXT_T ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } 
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
    elseif ($CCA_DATA == "setc") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "setc");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kanalni kiriting
            Misol uchun: @$Clever_CodersChnsl",
        ]);
    } elseif ($ali == 'setc') {
        file_put_contents("data/channel.txt", $CCA_TEXT_T);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Kanal kiritildi
 
 $CCA_TEXT_T ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } 
     elseif ($CCA_DATA == "setc2") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "setc2");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kanal kiriting
Misol @$Clever_CodersChnsl",
        ]);
    } elseif ($ali == 'setc2') {
        file_put_contents("data/channel2.txt", $CCA_TEXT_T);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "No");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Kanal kiritildi
 
 $CCA_TEXT_T ",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    } 
    elseif ($CCA_DATA == "crl") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "crl");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kodni kiriting
Lotin harfida❗️",
        ]);
    } elseif ($ali == 'crl') {
        file_put_contents("data/code.txt", $CCA_TEXT_T);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "crl2");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Tanga miqdorini kiriting",
            'parse_mode' => "MarkDown"
        ]);
    } elseif ($ali == 'crl2') {
        $Clever_APICodes = file_get_contents("data/code.txt");
        $Clever_APICodes2 = file_get_contents("data/code2.txt");
        file_put_contents("data/code2.txt", $CCA_TEXT_T);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Kod yaratildi",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
               $Clever_APICodes = file_get_contents("data/code.txt");
        $Clever_APICodes2 = file_get_contents("data/code2.txt");
        bot('sendMessage', [
            'chat_id' => @$Clever_CodersChnsl,
            'text' => "PROMOKOD

KOD: $Clever_APICodes
TANGALAR: $Clever_APICodes2
VAQT: $fatme

Faqat bir marta koddan foydalanishingiz mumkin. ",
            ]);
        
        
   //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=° //°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°     
        
        
    }
     elseif ($CCA_DATA == "buy") {
        bot('answercallbackquery', [
            'callback_query_id' => $Clever_APIChatsUP->callback_query->id,
            'text' => "Kuting...",
            'show_alert' => false
        ]);
        file_put_contents("data/$chatid/ali.txt", "buy");
        bot('editmessagetext', [
            'chat_id' => $chatid,
            'message_id' => $Clever_APIXabarRaqami2,
            'text' => "Kerakli 🆔 ni yuboring",
        ]);
    } elseif ($ali == 'buy') {
        file_put_contents("data/buy.txt", $CCA_TEXT_T);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "buy2");
        bot('sendMessage', [
            'chat_id' => $Clever_APIChatsSu,
            'text' => "Tanga soni?",
            'parse_mode' => "MarkDown"
        ]);
    } elseif ($ali == 'buy2') {
    $buy = file_get_contents("data/buy.txt");
          $fle = file_get_contents("data/$buy/shoklat.txt");
               $getshe = $fle + $CCA_TEXT_T;
                file_put_contents("data/$buy/shoklat.txt", $getshe);
        file_put_contents("data/$Clever_APIChatsSu/ali.txt", "");
        bot('sendMessage', [
            'chat_id' => $buy,
            'text' => "Aziz foydalanuvchi
Bot Tomonidan hisobingizga $CCA_TEXT_T tangalar qo'shildi.",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
        bot('sendMessage', [
                    'chat_id' => $Clever_APIChatsSu,
            'text' => "Bajarildi😁",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
                        ['text' => "Bosh menyu🏚", 'callback_data' => "home"]
                    ],
                ]
            ])
        ]);
    }
//°=@wcpro°=°=°@Clever_API=°=°@Clever_Coders=°=°@Clever_API=°=°@Clever_Coders=°=°BIZGA QO'SHIL=°=°
}
?>
