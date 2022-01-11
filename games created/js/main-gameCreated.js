const return_home = document.getElementsByClassName('return_home')[0];
return_home.addEventListener('click', function(e){
    window.open("../", "_self");
});
const play = document.getElementsByClassName('play');
const val_game = document.getElementById('val-game');
const btn_play = document.getElementById('btn-play');
for (let x = 0; x < play.length; x++) {
    play[x].addEventListener('click', function(e){
        val_game.setAttribute('value', play[x].getAttribute('value'));
        btn_play.click();
    });
    
}