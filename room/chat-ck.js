function Chat(e){file=e;this.init=chatInit;this.update=updateChat;this.send=sendChat;this.getState=getStateOfChat;this.trim=trimstr;this.getUsers=getuserlist}function chatInit(){getStateOfChat()}function wait(){updateChat()}function getStateOfChat(){$.ajax({type:"POST",url:"process.php",data:{"function":"getState",file:file},dataType:"json",success:function(e){state=e.state-5;updateChat()}})}function updateChat(){$.ajax({type:"GET",url:"update.php",data:{state:state,file:file},dataType:"json",cache:!1,success:function(e){if(e.text!=null){for(var t=0;t<e.text.length;t++)$("#chat-area").append($("<p>"+e.text[t]+"</p>"));document.getElementById("chat-area").scrollTop=document.getElementById("chat-area").scrollHeight}instanse=!1;state=e.state;setTimeout("updateChat()",1)}})}function sendChat(e,t){$.ajax({type:"POST",url:"process.php",data:{"function":"send",message:e,nickname:t,file:file},dataType:"json",success:function(e){}})}function trimstr(e,t){return e.substring(0,t)}function getuserlist(e,t){roomid=e;usernameid=t;$.ajax({type:"GET",url:"userlist.php",data:{room:e,username:t,current:numOfUsers},dataType:"json",cache:!1,success:function(e){if(numOfUsers!=e.numOfUsers){numOfUsers=e.numOfUsers;var t="<li class='head'>Suckers Playing</li>";for(var n=0;n<e.userlist.length;n++)t+="<li>"+e.userlist[n]+"</li>";$("#userlist").html($("<ul>"+t+"</ul>"))}setTimeout("getuserlist(roomid, usernameid)",1)}})}var state,mes,file,numOfUsers=0,roomid,usernameid;$.ajaxSetup({cache:!1});