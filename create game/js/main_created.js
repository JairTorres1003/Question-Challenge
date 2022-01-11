const return_home = document.getElementsByClassName('return_home')[0];
return_home.addEventListener('click', function(e){
    window.open("../", "_self");
});

/*validador de lugares vacios*/
const text_QA =  document.getElementsByClassName('text_QA');
const to_accept = document.getElementById('to-accept');

to_accept.addEventListener('click', function(e){
    for (let x = 0; x < text_QA.length; x++) {
        if (text_QA[x].value == "") {
            e.preventDefault();
            break;
        }
    }
});