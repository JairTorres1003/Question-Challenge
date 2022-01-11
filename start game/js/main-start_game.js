const return_home = document.getElementsByClassName('return_home')[0];
return_home.addEventListener('click', function(e){
    window.open("../", "_self");
});

//TODO: Seleccion de respuesta --------------------------------------------------------------------------------------------------
const answer_c = document.getElementsByClassName('answer-c');
answer_c[0].addEventListener('click', function(e){
    removeSelect();
    answer_c[0].classList.add('select_answer');
});
answer_c[1].addEventListener('click', function(e){
    removeSelect();
    answer_c[1].classList.add('select_answer');
});
answer_c[2].addEventListener('click', function(e){
    removeSelect();
    answer_c[2].classList.add('select_answer');
});
answer_c[3].addEventListener('click', function(e){
    removeSelect();
    answer_c[3].classList.add('select_answer');
});
function removeSelect() {
    answer_c[0].classList.remove('select_answer');
    answer_c[1].classList.remove('select_answer');
    answer_c[2].classList.remove('select_answer');
    answer_c[3].classList.remove('select_answer');
}
