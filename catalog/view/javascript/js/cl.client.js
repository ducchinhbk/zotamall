var socket=io.connect("http://sukienhay.com:1208");$(document).ready(function(){if($("#widget-header-user[data-socket]")){var a=$("#widget-header-user").data("socket");a&&socket.emit("user_connect",a)}});socket.on("receive_noti",function(a){count_new_noti=$("#count_new_noti");value=parseInt(count_new_noti.html());isNaN(value)&&(value=0);value++;count_new_noti.html(value)});socket.on("read_noti",function(a){"ok"==a&&$("#count_new_noti").html("")});
socket.on("receive_message_noti",function(a){0<a?$("#count_new_inbox").html(a):$("#count_new_inbox").html("")});socket.on("read_message_noti",function(a){"ok"==a.check&&$("#count_new_inbox").html("")});