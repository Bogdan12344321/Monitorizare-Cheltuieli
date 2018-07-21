function insert(num){
    document.form.textview.value = document.form.textview.value+num;
}

function equal(){
    var rezultat = document.form.textview.value;
    if(rezultat){
        document.form.textview.value = eval(rezultat);
    }else{
        alert('Introduceti numerele...');
    }

}

function curata(){
    document.form.textview.value = "";
}

function back(){
    var rezultat = document.form.textview.value;

    document.form.textview.value = rezultat.substring(0,rezultat.length-1);
}

function display(test) {
    $("#dialog").dialog();
}