function  daugyba(a, b) {
    return a * b;
}

//If - salyga
//  - true , jeigu ne, tai gaunasi false
//
// jeigu israiska neteisinga, nueinai else
//
// .... else
//case (argumentas) - pasirinkimas
//* - true
//* - true
//* - true
// jeigu nebuna nei vieno true, tada ima is else
//__________
// for (pradžia, masyve DIV pradedame nuo 1)
//      (iki, pasyve DIV iki 3)
//      (žingsnis (body(kune) ivykdomi visi)
// while (salyga) (n>3) (masyvo DIV elementi numeris)
//          (vykdoma iki kol salyga bus itvirtina)
//          as cia mazdaug paaiskinau kaip kas yra


var auto = ['bmw', 'audi', 'honda', 'hyundai'];
var numeris =  null;

for(var i=0; i<auto.length; i++) {
    var masina = auto[i];
    if (masina =='honda') numeris=i;
}

//sintakses

function surastiauto(masina){
    var rezultatas=null;
    var n = auto.length;
    var i = 0;
    while(rezultatas == null && i<n){
        if (auto[i] == masina) rezultatas = i;
        i++;
    }
    return rezultatas;
}

//priskyre = , sulygino ==.

function surasti(arg) {
    var rezultatas;
    switch (arg){
        case 'bmw' : rezultatas = 'vokieciu'; break;
        case 'honda': rezultatas = 'japonu'; break;
        default: rezultatas = 'nezinomas';

    }
    return rezultatas;
}