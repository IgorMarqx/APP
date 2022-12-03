
function verificarLogin(){
    const email = document.getElementById('email').value
    const senha = document.getElementById('senha').value
    
    if(email == 'admin' && senha == 'admin'){
        window.location.assign('./app.html')
        alert('Redirecionando')
    }else{
        alert("Você não possui login. Por favor registre-se!")
    }
    
}
