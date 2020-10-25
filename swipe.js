htmlcard='" class="card"><div class="cardDp"><h2 class="cardName">Name</h2></div><div id="buttonContainer"><i class="far fa-times-circle"></i><i class="far fa-check-circle"></i></div></div>';
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
                    htmlcardid='<div id="'+jsonData[i]["user_id"]+'" class="card"><div class="cardDp"><h2 class="cardName">'+jsonData[i]["user_name"]+'</h2><div class="agelocation">'+jsonData[i]["age"]+','+jsonData[i]["location"]+'</div><div class="bio">'+jsonData[i]["bio"]+'</div></div><div id="buttonContainer"><i onclick="leftswipe(this)" class="far fa-times-circle"></i><i onclick="rightswipe(this)" class="far fa-check-circle"></i></div></div>';
                    document.getElementById("cardsContainer").innerHTML+=htmlcardid;
                    document.getElementById(jsonData[i]["user_id"]).style.zIndex=i;
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
    n.parentNode.parentNode.style.animation="leftback 1s linear 0s 1 normal forwards";
    
    /*for(var i=1;i<5;i++){
        j=document.getElementById(i).style.zIndex;
        k=j+1;
        document.getElementById(i).style.zIndex=k;
    }*/
    n.parentNode.parentNode.style.zIndex="-1";
}
const rightswipe = (n) =>{
    //var data = {
      //  "touser":n.parentNode.parentNode.id
    //};
    //console.log(data)
    toUser = "n.parentNode.parentNode.id";
    fromUser = "ft";
    n.parentNode.parentNode.style.animation="rightback 1s linear 0s 1 normal forwards";
    n.parentNode.parentNode.style.zIndex="-1";
    var xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", function() 
    {
        if(this.readyState === 4) 
        {
            if(this.status==200 || this.status==201)
            {
                //let newData = JSON.parse(this.responseText);
                //console.log(newData);
            }
            else{
                alert("invalid link");
            }
        }
    });
    //console.log(data);
    xhr.open("POST", "like.php" , true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("to_user="+toUser+"&from_user="+fromUser);

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
    for(var i=0;i<7;i++)
    {
        htmlstring='<div class="match" onclick="goToChat()"><img src="chili.jpg" class="matchDp"><h4 class="matchName">name</h4></div>';
        matchContainer.innerHTML += htmlstring;
    }

};
const messagesDisplay = () => {
    document.getElementById("matches").className= 'noclass';
    document.getElementById("messages").className= 'highlight';
    document.getElementById("container").innerHTML= '<div id="messageContainer"></div>';

    for(var i=0;i<7;i++)
    {
        htmlstring='<div class="message" onclick="goToChat()"><img src="chili.jpg" class="messageDp"><h4 class="messageName">na,e</h4></div>';
        messageContainer.innerHTML += htmlstring;
    }

};
const goToChat = () => {
    document.getElementById("chat").innerHTML='<div id="chatBox"><div id="userDetails"><button onclick="goBack()" id="goBackButton"><div class="but">back</div></button><img id="userDp" src="chili.jpg"><h2 id="userName">name</h2></div><div id="chatWindow"><div id="sendDiv"><input id="sendMessage" type="text"><button id="send"><div class="but">send</div></button></div></div></div>';
};
const goBack = () => {
    document.getElementById("chat").innerHTML='<div id="selection"><a onclick="matchesDisplay()" id="matches">matches</a><a onclick="messagesDisplay()" id="messages">messages</a></div><div id=container></div>'
    if(nav<600)
    {
        document.getElementById("selection").innerHTML+='<a onclick="swipemode()">Swipe</a>';
    }
}
