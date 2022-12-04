
function verificarLogin(){
    const email = document.getElementById('email').value
    const senha = document.getElementById('senha').value
    
    if(email == 'admin' && senha == 'admin'){
        window.location.assign('./?pg=app')
        alert('Redirecionando')
    }else{
        alert("Credenciais inválidas!")
    }
    
}
