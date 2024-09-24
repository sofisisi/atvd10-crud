function funcao_alert(){
    var x;
    var r=confirm("Você quer mesmo excluir o registro?");
    if (r==true) {
    fetch('delete.php')
    }
    else {
    x="Registro não excluido!";
    }
    document.getElementById("demo").innerHTML=x;
}