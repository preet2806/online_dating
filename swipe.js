//htmlcard='" class="card"><div class="cardDp"><h2 class="cardName">Name</h2></div><form action="like.php" method="GET" id="buttonContainer"><input type="text" value="'++'"><i class="far fa-times-circle"></i><button type="submit"><i class="far fa-check-circle"></i></button></form></div>';
var nav;

window.onload = () =>{
    const xhr = new XMLHttpRequest();
    let jsonData=[];
    xhr.onreadystatechange = function () 
    {
    if (xhr.readyState == 4) 
    {
        if (xhr.status == 200) 
        {
                jsonData=JSON.parse(xhr.responseText) ;
                console.log(jsonData);
                for (var i = 0; i < jsonData.length; i++){
                    console.log(i)
                    htmlcardid='<div id="'+jsonData[i]["user_id"]+'" class="card"><div class="cardDp"><div class="grad"></div><h2 class="cardName">'+jsonData[i]["user_name"]+'</h2><div class="agelocation">'+jsonData[i]["age"]+','+jsonData[i]["location"]+'</div><div class="bio">'+jsonData[i]["bio"]+'</div></div><div id="buttonContainer"><form action="dislike.php" method="post"><input name="touser" type="text" value="'+jsonData[i]["user_id"]+'"><button onclick="leftswipe(this)"><i  class="far fa-times-circle"></i></button type="submit"></form><form action="like.php" method="post"><input name="touser" type="text" value="'+jsonData[i]["user_id"]+'"><button type="submit"><i onclick="rightswipe(this)" class="far fa-check-circle"></i></button></form></div></div>';
                    document.getElementById("cardsContainer").innerHTML+=htmlcardid;
                    document.getElementById(jsonData[i]["user_id"]).style.zIndex=i;
                    document.getElementById(jsonData[i]["user_id"]).firstChild.style.backgroundImage='url("'+jsonData[i]["picture"]+'")';
                } 
        }    
        if(xhr.status == 404)
        {
            console.log('no data');

        }
    }    
    };
    xhr.open('get','userdisplay.php',true);
    xhr.send();
    nav=window.innerWidth;
    /*for(var i=1;i<5;i++){
        console.log(i)
        htmlcardid='<div id="'+i+'" class="card"><div class="cardDp"><h2 class="cardName">'+i+'</h2></div><div id="buttonContainer"><i onclick="leftswipe(this)" class="far fa-times-circle"></i><i onclick="rightswipe(this)" class="far fa-check-circle"></i></div></div>';
        document.getElementById("cardsContainer").innerHTML+=htmlcardid;
        document.getElementById(i).style.zIndex=i;
    }*/
    if(nav<600)
    {
        document.getElementById("selection").innerHTML+='<a onclick="swipemode()">Swipe</a>';
        document.getElementById("switch").innerHTML+='<a id="modeswitch" onclick="matchmode()">< matches</a>';
    }
    console.log(document.getElementById("switch"))
}
const leftswipe = (n) =>{
    console.log(n.parentNode.parentNode)
    n.parentNode.parentNode.parentNode.parentNode.style.animation="leftback 1s linear 0s 1 normal forwards";
    n.parentNode.parentNode.parentNode.parentNode.style.zIndex="-1";
}
const rightswipe = (n) =>{
    n.parentNode.parentNode.parentNode.parentNode.style.animation="rightback 1s linear 0s 1 normal forwards";
    n.parentNode.parentNode.parentNode.parentNode.style.zIndex="-1";
};

const swipemode = () => {
    document.getElementById("sidebar").style.width='0vw';
};
const matchmode = () => {
    document.getElementById("sidebar").style.width='100vw';
};

const matchesDisplay = () => {
    document.getElementById("matches").className= 'highlight';
    document.getElementById("messages").className= 'noclass';
    document.getElementById("container").innerHTML= '<div id="matchContainer"></div>';
    const xhr = new XMLHttpRequest();
    let jsonData=[];
    xhr.onreadystatechange = function () 
    {
    if (xhr.readyState == 4)
    {
        if (xhr.status == 200) 
        {
            jsonData=JSON.parse(xhr.responseText);
            console.log(jsonData);
            for (var i = 0; i < jsonData.length; i++){
                htmlstring='<div class="match" onclick="goToChat(this)"><div class="matchDp"><img src="'+jsonData[i]["picture"]+'" alt="'+jsonData[i]["match_id"]+'"></div><h4 class="matchName">'+jsonData[i]["user_name"]+'</h4></div>';
                matchContainer.innerHTML += htmlstring;
            } 
        }    
        if(xhr.status == 404)
        {
            console.log('no data');

        }
        }    
    };
    xhr.open('get','matchdisplay.php',true);
    xhr.send();

};
const messagesDisplay = () => {
    document.getElementById("matches").className= 'noclass';
    document.getElementById("messages").className= 'highlight';
    document.getElementById("container").innerHTML= '<div id="messageContainer"></div>';
    const xhr = new XMLHttpRequest();
    let jsonData=[];
    xhr.onreadystatechange = function () 
    {
    if (xhr.readyState == 4)
    {
        if (xhr.status == 200) 
        {
            jsonData=JSON.parse(xhr.responseText);
            console.log(jsonData);
            for (var i = 0; i < jsonData.length; i++){
                htmlstring='<div class="message" onclick="goToChat(this)"><div class="messageDp"><img src="'+jsonData[i]["picture"]+'"  alt="'+jsonData[i]["match_id"]+'"></div><h4 class="messageName">'+jsonData[i]['matchuser']+'</h4></div>';
                messageContainer.innerHTML += htmlstring;
            } 
        }    
        if(xhr.status == 404)
        {
            console.log('no data');

        }
        }    
    };
    xhr.open('get','messagedisplay.php',true);
    xhr.send();
};
const goToChat = (n) => {
    
    var name=n.lastChild.innerHTML;
    var pic=n.firstChild.firstChild;
    var matchid=pic.alt;
    console.log(pic.src);
    document.getElementById("chat").innerHTML='<div id="chatBox"><div id="userDetails"><button onclick="goBack()" id="goBackButton"><div class="but">back</div></button><div id="userDp"><img src="'+pic.src+'"></div><h2 id="userName">'+name+'</h2></div><div id="chatWindow"><div id="userchat"></div><div id="sendDiv"><form id="sendform" action="send.php" method="post"><input id="none2" name="match_id" value="'+matchid+'"><input name="message" id="sendMessage" type="text"><button id="send" type="submit"><div class="but">send</div></button></form></div></div></div>';
    const xhr = new XMLHttpRequest();
    let jsonData=[];
    xhr.onreadystatechange = function () 
    {
    if (xhr.readyState == 4)
    {
        if (xhr.status == 200) 
        {
            jsonData=JSON.parse(xhr.responseText);
            console.log(jsonData);
            var count=0;
            for (var i = 0; i < jsonData.length; i++){
                console.log(jsonData[i]['matchuser']==name)
                if(jsonData[i]['matchuser']==name){
                    htmlmessage='<div class="messagetext" id="'+jsonData[i]["message_id"]+'">'+jsonData[i]["message"]+'</div>';
                    document.getElementById("userchat").innerHTML+=htmlmessage;
                    if(count==0){
                        document.getElementById("sendform").innerHTML+='<input id="none" type="text" name="match_id" value="'+jsonData[i]["match_id"]+'">';
                        //console.log(document.getElementById(jsonData[i]["message_id"]).classList);
                        count++
                    }
                    
                    if(jsonData[i]['from_user']==jsonData[i]['matchuserid']){
                        document.getElementById(jsonData[i]["message_id"]).classList.add("received");
                    }
                    else{
                        document.getElementById(jsonData[i]["message_id"]).classList.add("sent");
                    }
                }          
            } 
        }    
        if(xhr.status == 404)
        {
            console.log('no data');

        }
        }    
    };
    xhr.open('get','messagetextdisplay.php',true);
    xhr.send();
    
};
const goBack = () => {
    document.getElementById("chat").innerHTML='<div id="selection"><a onclick="matchesDisplay()" id="matches">matches</a><a onclick="messagesDisplay()" id="messages">messages</a></div><div id=container></div>'
    if(nav<600)
    {
        document.getElementById("selection").innerHTML+='<a onclick="swipemode()">Swipe</a>';
    }
}
