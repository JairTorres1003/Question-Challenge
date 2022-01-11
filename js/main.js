const btn_created = document.getElementById('btn-created');
const btn_games_created = document.getElementById('btn-games-created');
const btn_leaderboard = document.getElementById('btn-leaderboard');

btn_created.addEventListener('click', function(e){
    window.open("create game", "_self");
});
btn_games_created.addEventListener('click', function(e){
    window.open("games created", "_self");
});
btn_leaderboard.addEventListener('click', function(e){
    window.open("leaderboard", "_self");
});