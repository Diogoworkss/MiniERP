function validar() {

    var email = document.querySelector('#email').value;
    var senha = document.querySelector('#senha').value;

    window.location.href = "./listagem.php";

    alert('Seu email é '+email);
    alert('E sua senha é '+senha);

}
