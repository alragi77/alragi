<?php
/*
ملف بوت الزخرفه بواسطه @O_v_S
قناه @IWKIII
تنشر لا تعدل الحقوق 
*/
ob_start();
$API_KEY = '6259384433:AAEs_pRkK82T7l2SV0GjyqmwBeIziDdb7Mc';  #توكن#
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$hhzzz = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$hhzzz";
$MARKOF8 = file_get_contents($url); 
return json_decode($MARKOF8);
}
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chj = "HHHH9N"; #معرف قناتك بدون @#
$sudo = array(6278331567); #ايديك#
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$user = $message->from->username;
$st = str_replace("@","", $chj);
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chj&user_id=".$from_id);
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$name = $message->from->first_name;
$sajad = file_get_contents("rembo.txt");
$ch = file_get_contents("ch.txt");
$tn = file_get_contents("tnb.txt");
$ban = file_get_contents("ban.txt");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$admin = "1680072145"; #ايديك#
$MARKO = file_get_contents("MARKO.txt");
$MARKO0 = file_get_contents("MARKO0.txt");
$MARKO1= file_get_contents("MARKO1.txt");
$MARKO5 = file_get_contents("MARKO2.txt");
$MARKO6 = file_get_contents("MARKO3.txt");
$MARKO20 = json_decode(file_get_contents('php://input'));
$MARKO18 = $update->message;
$MARKO13 = $MARKO18->chat->id;
$MARKO17 = $MARKO18->text;
$meme = $MARKO20->callback_query->data;
$MARKO12 = $MARKO20->callback_query->message->chat->id;
$MARKO14 =  $MARKO20->callback_query->message->message_id;
$MARKO15 = $MARKO18->from->first_name;
$MARKO16 = $MARKO18->from->username;
$MARKO11 = $MARKO18->from->id;
$MARKO2 = explode("\n",file_get_contents("MARKO4.txt"));
$MARKO3 = count($MARKO2)-1;
if ($MARKO18 && !in_array($MARKO11, $MARKO2)) {
    file_put_contents("MARKO4.txt", $MARKO11."\n",FILE_APPEND);
  }
$MARKO9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MARKO0&user_id=".$MARKO11);
$MARKO10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MARKO1&user_id=".$MARKO11);
if($MARKO18 && (strpos($MARKO9,'"status":"left"') or strpos($MARKO9,'"Bad Request: USER_ID_INVALID"') or strpos($MARKO9,'"status":"kicked"') or strpos($MARKO10,'"status":"left"') or strpos($MARKO10,'"Bad Request: USER_ID_INVALID"') or strpos($MARKO10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MARKO13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$MARKO0.'
'.$MARKO1,
]);return false;}
if($MARKO17 == "/admin" and $MARKO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MARKO13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MARKO"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MARKO0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MARKO"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MARKO2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MARKO4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MARKO"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MARKO5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MARKO6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MARKO7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MARKO"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MARKO9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MARKO10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MARKO"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MARKO11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MARKO12"]],
   ] 
   ])
]);
}
if($meme == "MARKO" ){
bot('EditMessageText',[
'chat_id'=>$MARKO12,
'message_id'=>$MARKO14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MARKO"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MARKO0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MARKO"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MARKO2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MARKO4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MARKO"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MARKO5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MARKO6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MARKO7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MARKO"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MARKO9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MARKO10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MARKO"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MARKO11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MARKO12"]],
   ] 
   ])
]);
unlink("MARKO.txt");
}
if($meme == "MARKO0"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO.txt","MARKO0");
}
if($MARKO17 and $MARKO == "MARKO0" and $MARKO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MARKO13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO0.txt","$MARKO17");
unlink("MARKO.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MARKO'],
['text'=>'• نعم ، ✅','callback_data'=>'MARKO1'],
]    
]])
]);    
}
if($meme == "MARKO1"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
unlink("MARKO.txt");
unlink("MARKO0.txt");
}
if($meme == "MARKO2"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO.txt","MARKO1");
}
if($MARKO17 and $MARKO == "MARKO1" and $MARKO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MARKO13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO1.txt","$MARKO17");
unlink("MARKO.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MARKO'],
['text'=>'• نعم ، ✅','callback_data'=>'MARKO3'],
]    
]])
]);    
}
if($meme == "MARKO3"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
unlink("MARKO.txt");
unlink("MARKO1.txt");
}
if($meme == "MARKO4"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $MARKO0 📢 
- القناة الثانية ،  $MARKO1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
unlink("MARKO.txt");
}
if($meme == "MARKO5"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $MARKO3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO.txt","MARKO2");
}
if($MARKO18 and $MARKO == "MARKO2" and $MARKO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MARKO13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
for($i=0;$i<count($MARKO2); $i++){
bot('forwardMessage', [
'chat_id'=>$MARKO2[$i],
'from_chat_id'=>$MARKO11,
'message_id'=>$MARKO18->message_id
]);
unlink("MARKO.txt");
}
}
if($meme == "MARKO6"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $MARKO3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO.txt","MARKO3");
}
if($MARKO17 and $MARKO == "MARKO3" and $MARKO11 == $admin){
bot("sendmessage",[
"chat_id"=>$MARKO13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
for($i=0;$i<count($MARKO2); $i++){
bot('sendMessage', [
'chat_id'=>$MARKO2[$i],
'text'=>$MARKO17
]);
unlink("MARKO.txt");
}
}
if($meme == "MARKO7"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>"- عدد مشتركين البوت  [ $MARKO3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
unlink("MARKO.txt");
}
if($meme == "MARKO9"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO2.txt","MARKO");
}
if($MARKO17 == "/start" and $MARKO5 == "MARKO" and $MARKO11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$MARKO15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$MARKO16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$MARKO11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $MARKO3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "MARKO10"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
unlink("MARKO.txt");
unlink("MARKO2.txt");
}
if($meme == "MARKO11"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
file_put_contents("MARKO3.txt","MARKO");
}
if($MARKO18 and $MARKO6 == "MARKO" and $MARKO11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MARKO11,
'message_id'=>$MARKO18->message_id
]);
}
if($MARKO18 and $MARKO6 == "MARKO" and $MARKO11 == $admin){
bot('sendMessage',[
'chat_id'=>$MARKO18->reply_to_message->forward_from->id,
    'text'=>$MARKO17,
    ]);
}
if($meme == "MARKO12"){
bot('EditMessageText',[
    'chat_id'=>$MARKO12,
    'message_id'=>$MARKO14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MARKO"]],
]])
]);
unlink("MARKO.txt");
unlink("MARKO3.txt");
} 
$zkrf = file_get_contents("zkrf.txt");
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• اهلا بك  في بوت الزخرفه
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'زخرف الان','callback_data'=>'ii']],
]
])
]);
}
if($data == "ii" ){
file_put_contents("zkrf.txt","zkrf");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'ارسل اسمك الان !',
]);   
}
  if($text != "/start"   and $zkrf == "zkrf"){
  file_put_contents("zkrf.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'يتم زخرفه اسمك الان',
]);
$MARKO = file_get_contents("https://elostorawemarko.ga/zkhrf/zkhrf.php?text=".$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"`$MARKO `
🌻🌼تم زخرفةالاسم  ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'➤ زخرف مجددا','callback_data'=>"ii"]],
]])
]);
}
?>