$(function(){

    $('input[type=button]').click(function(){
        var str = $('input[type=text]').val();
        /*Split the string based on its delimitator
        var var2 = str.split("@");
        console.log(var2);
        */
        /*recorta a string (apartir de qual, quantos caracteres)
        console.log(str.substr(1,4));
        */
        var splitstr = str.split("@");

        if(splitstr[1] != 'gmail.com'){
            $('input[type=text]').val('Utilize um e-mail @gmail');
        }else{
            console.log("Esse usuário utiliza um e-mail do google");
        }
    })   
    
});