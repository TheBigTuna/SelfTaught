//hat, skin tone, torso
var face = ["BlanchedAlmond","Bisque","NavajoWhite","Wheat","Burlywood","Tan","SaddleBrown"]

window.addEventListener("click", function(){
  var skin = face[Math.floor(Math.random()*face.length)]
  var hat = '#'+('00000'+(Math.random()*(1<<24)|0).toString(16)).slice(-6)
  var torso = '#'+('00000'+(Math.random()*(1<<24)|0).toString(16)).slice(-6)
  
  document.getElementById('head').style.background = skin  
  document.getElementById('hat').style.backgroundColor = hat
  document.getElementById('torso').style.backgroundColor = torso
  
})

var words = ["Ouch!","Stop!","Grrrr!","Ugh!","Quit!"]
pokes = 0
document.getElementById('gnome').addEventListener("mouseover", function(){
  pokes++
  document.getElementById('poke').innerHTML = words[Math.floor(Math.random()*words.length)]
  document.getElementById('poke').style.opacity = "1"
  // document.getElementById('gnome').style.pointerEvents = "none"
  
  if(pokes > 9){
    document.getElementById('gnome').style.pointerEvents = "none"
    document.getElementById('poke').innerHTML = "I'm done!"
    document.getElementById('gnome').style.animation = "blastOff 6s ease-in 1s forwards"
    document.getElementById('grass').style.animation = "blastOffGrass 6s ease-in 1s forwards"
    document.getElementsByTagName("body")[0].classList.add('space')
    document.getElementById('blast').style.visibility = "visible"
    document.getElementById('shadow').style.visibility = "hidden"
    document.getElementById('blast').classList.add('blastMe')
    
    document.getElementsByClassName('cloud')[0].style.animation = "floatBy 30s linear infinite, cloudsOff 6s linear forwards"
    document.getElementsByClassName('cloud2')[0].style.animation = "floatBy2 30s linear 10s infinite, cloudsOff 6s linear forwards"
    document.getElementsByClassName('cloud3')[0].style.animation = "floatBy3 30s linear 2s infinite, cloudsOff 6s linear forwards"
    document.getElementsByClassName('cloud4')[0].style.animation = "floatBy4 30s linear 6s infinite, cloudsOff 6s linear forwards"

    
    setTimeout(function(){
    document.getElementById('poke').style.opacity = "0"
    },1000)
    
    setTimeout(function(){
    pokes = 0
    document.getElementById('gnome').style.animation = ""
    document.getElementById('grass').style.animation = ""
    document.getElementById('blast').classList.remove('blastMe')
    document.getElementsByTagName("body")[0].classList.remove('space')
    document.getElementById('blast').style.visibility = "hidden"
    document.getElementById('shadow').style.visibility = "visible"
    document.getElementById('poke').style.opacity = "0"
    document.getElementById('gnome').style.pointerEvents = ""
      
    document.getElementsByClassName('cloud')[0].style.animation = "floatBy 30s linear infinite"
    document.getElementsByClassName('cloud2')[0].style.animation = "floatBy2 30s linear 10s infinite"
    document.getElementsByClassName('cloud3')[0].style.animation = "floatBy3 30s linear 2s infinite"
    document.getElementsByClassName('cloud4')[0].style.animation = "floatBy4 30s linear 6s infinite, cloudsOff 6s linear forwards"
    },10000)
    
  } else if(pokes > 4) {
    setTimeout(function(){
    document.getElementById('poke').style.opacity = "0"
    
  },1000)
  } else {    
    setTimeout(function(){
    document.getElementById('poke').style.opacity = "0"    
  },1000)
  }
  
})