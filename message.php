<?php 
namespace Telegram_bot{
class message{

public function __construct($up){
$this->self=$up->message;

}


public $message_id;
public $message_thread_id;
public $from;
public $sender_chat;
public $date;
public $chat;
public $forward_from;
public $forward_from_chat;
public $forward_from_message_id;
public $forward_signature;
public $forward_sender_name;
public $forward_date;
public $is_topic_message;
public $is_automatic_forward;
public $reply_to_message;
public $via_bot;
public $edit_date;
public $has_protected_content;
public $channel_chat_created;
public $message_auto_delete_timer_changed;
public $migrate_to_chat_id;
public $migrate_from_chat_id;
public $pinned_message;
public $invoice;
public $successful_payment;
public $connected_website;
public $passport_data;
public $proximity_alert_triggered;
public $forum_topic_closed;
public $video_chat_scheduled;
public $video_chat_started;
public $video_chat_ended;
public $video_chat_participants_invited;
public $web_app_data;
public $reply_markup;
public $forum_topic_reopened;
public $forum_topic_created;
public $media_group_id;
public $author_signature;
public $text;
public $entities;
public $animation ;
public $audio;
public $document;
public $photo;
public $sticker;
public $video;
public $video_note;
public $voice;
public $caption;
public $caption_entities;
public $contact;
public $dice;
public $game;
public $poll;
public $venue;
public $location;
public $new_chat_members;
public $left_chat_member;
public $new_chat_title;
public $new_chat_photo;
public $delete_chat_photo;
public $group_chat_created;
public $supergroup_chat_created;

}}
?>