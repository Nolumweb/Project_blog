@extends('admin.users.master')
@section('all')


<div class="chat" id="middle">
<div class="slimscroll">
<div class="chat-header">
<div class="user-details">
<div class="d-lg-none me-2">
<ul class="list-inline mt-2 me-2">
<li class="list-inline-item">
<a class="text-muted px-0 left_side" href="#" data-chat="open">
<i class="fas fa-arrow-left"></i>
</a>
</li>
</ul>
</div>
<figure class="avatar me-2">
<img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle" alt="image">
</figure>
<div class="mt-1">z
<h5>Doris Brown</h5>
<small class="online">
Online
</small>
</div>
</div>
<div class="chat-options">
<ul class="list-inline">
<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
<a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn">
<i class="fas fa-search"></i>
</a>
</li>
<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice call">
<a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#voice_call">
<i class="fas fa-phone-alt voice_chat_phone"></i>
</a>
</li>
<li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video call">
 <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#video_call">
<i class="fas fa-video"></i>
</a>
</li>
<li class="list-inline-item dream_profile_menu" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
<a href="javascript:void(0)" class="btn btn-outline-light">
<i class="fas fa-user"></i>
</a>
</li>
<li class="list-inline-item">
<a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="#" class="dropdown-item dream_profile_menu">Archive <span><i class="fas fa-archive"></i></span></a>
<a href="#" class="dropdown-item">Muted <span class="material-icons">volume_off</span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</li>
</ul>
</div>

<div class="chat-search">
<form>
<span class="fas fa-search form-control-feedback"></span>
<input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
<div class="close-btn-chat"><span class="material-icons">close</span></div>
</form>
</div>

</div>
<div class="chat-body">
<div class="messages">
<div class="chats">
<div class="chat-avatar">
<img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat" alt="image">
</div>
<div class="chat-content">
<div class="message-content">
Hi James! What’s Up?
<div class="chat-time">
<div>
<div class="time"><i class="fas fa-clock"></i> 10:00</div>
</div>
</div>
</div>
<div class="chat-profile-name">
<h6>Doris Brown</h6>
</div>
</div>
<div class="chat-action-btns ms-3">
<div class="chat-action-col">
<a class="#" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
<a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
<a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</div>
</div>
</div>
<div class="chats chats-right">
<div class="chat-content">
<div class="message-content">
Good morning, How are you? What about our next meeting?
<div class="chat-time">
<div>
<div class="time"><i class="fas fa-clock"></i> 10:00</div>
</div>
</div>
</div>
<div class="chat-profile-name text-end">
<h6>Alexandr</h6>
</div>
</div>
<div class="chat-avatar">
<img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat" alt="image">
</div>
<div class="chat-action-btns me-2">
<div class="chat-action-col">
<a class="#" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
<a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
<a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</div>
<div class="chat-read-col">
<span class="material-icons">done_all</span>
</div>
</div>
</div>
<div class="chats">
<div class="chat-avatar">
<img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat" alt="image">
</div>
<div class="chat-content">
<div class="message-content">
& Next meeting tomorrow 10.00AM
<div class="chat-time">
<div>
<div class="time"><i class="fas fa-clock"></i> 10:06</div>
</div>
</div>
</div>
<div class="chat-profile-name">
<h6>Doris Brown</h6>
</div>
</div>
<div class="chat-action-btns ms-3">
<div class="chat-action-col">
 <a class="#" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
<a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
<a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</div>
</div>
</div>
<div class="chat-line">
<span class="chat-date">Today</span>
</div>
<div class="chats chats-right">
<div class="chat-content">
<div class="message-content">
Wow Thats Great
<div class="chat-time">
<div>
<div class="time"><i class="fas fa-clock"></i> 10:02</div>
</div>
</div>
</div>
<div class="chat-profile-name text-end">
<h6>Alexandr</h6>
</div>
</div>
<div class="chat-avatar">
<img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat" alt="image">
</div>
<div class="chat-action-btns me-2">
<div class="chat-action-col">
<a class="#" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
<a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
<a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</div>
<div class="chat-read-col">
<span class="material-icons">done_all</span>
</div>
</div>
</div>
<div class="chats">
<div class="chat-avatar">
<img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat" alt="image">
</div>
<div class="chat-content">
<div class="message-content">
<div class="download-col">
 <ul>
<li>
<div class="image-download-col">
<a href="assets/img/chat-download.jpg" data-fancybox="gallery" class="fancybox">
<img src="assets/img/chat-download.jpg" alt="">
</a>
<div class="download-action d-flex align-items-center">
<div><a href="javascript:void(0)"><i class="fas fa-cloud-download-alt"></i></a></div>
<div><a href="javascript:void(0)"><i class="fas fa-ellipsis-h"></i></a></div>
</div>
</div>
</li>
<li>
<div class="image-download-col">
<a href="assets/img/chat-download.jpg" data-fancybox="gallery" class="fancybox">
<img src="assets/img/chat-download.jpg" alt="">
</a>
<div class="download-action d-flex align-items-center">
<div><a href="javascript:void(0)"><i class="fas fa-cloud-download-alt"></i></a></div>
<div><a href="javascript:void(0)"><i class="fas fa-ellipsis-h"></i></a></div>
</div>
</div>
</li>
<li>
<div class="image-download-col">
<a href="assets/img/chat-download.jpg" data-fancybox="gallery" class="fancybox">
<img src="assets/img/chat-download.jpg" alt="">
</a>
<div class="download-action d-flex align-items-center">
<div><a href="javascript:void(0)"><i class="fas fa-cloud-download-alt"></i></a></div>
<div><a href="javascript:void(0)"><i class="fas fa-ellipsis-h"></i></a></div>
</div>
</div>
</li>
</ul>
</div>
<div class="chat-time">
<div>
<div class="time"><i class="fas fa-clock"></i> 10:00</div>
</div>
</div>
</div>
<div class="chat-profile-name">
<h6>Doris Brown</h6>
</div>
</div>
<div class="chat-action-btns ms-3">
<div class="chat-action-col">
<a class="#" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
<a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
<a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</div>
</div>
</div>
<div class="chats chats-right">
<div class="chat-content">
<div class="message-content">
<div class="file-download d-flex align-items-center">
<div class="file-type d-flex align-items-center justify-content-center me-2">
<i class="far fa-file-archive"></i>
</div>
<div class="file-details">
<span class="file-name">filename.zip</span>
<span class="file-size">10.6MB</span>
</div>
<div class="download-action d-flex align-items-center">
<div><a href="#"><i class="fas fa-cloud-download-alt"></i></a></div>
<div><a href="#"><i class="fas fa-ellipsis-h"></i></a></div>
</div>
</div>
<div class="chat-time">
<div>
<div class="time"><i class="fas fa-clock"></i> 10:02</div>
</div>
</div>
</div>
<div class="chat-profile-name text-end">
<h6>Alexandr</h6>
</div>
</div>
<div class="chat-avatar">
<img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat" alt="image">
</div>
<div class="chat-action-btns me-2">
<div class="chat-action-col">
<a class="#" href="#" data-bs-toggle="dropdown">
<i class="fas fa-ellipsis-h"></i>
</a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item dream_profile_menu">Copy <span><i class="far fa-copy"></i></span></a>
<a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
<a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
<a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
</div>
</div>
<div class="chat-read-col">
<span class="material-icons">done_all</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="chat-footer">
<form>
<div class="smile-col">
<a href="#"><i class="far fa-smile"></i></a>
</div>
<div class="attach-col">
<a href="#"><i class="fas fa-paperclip"></i></a>
</div>
<input type="text" class="form-control chat_form" placeholder="Enter Message.....">
<div class="form-buttons">
<button class="btn send-btn" type="submit">
<span class="material-icons">send</span>
</button>
</div>
<div class="specker-col">
<a href="#"><span class="material-icons">settings_voice</span></a>
</div>
</form>
</div>
</div>


@endsection 

