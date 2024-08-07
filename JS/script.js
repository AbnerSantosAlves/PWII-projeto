function limpar(){
    document.getElementsByName('nome').value = ''
    document.getElementsByName('sobrenome').value = ''
    document.getElementsByName('dt_nascimento').value = ''
    document.getElementsByName('cargo').value = ''
    document.getElementsByName('salario').value = ''
    document.getElementsByName('senha').value = ''
}

var form = document.getElementById('form')
form.addEventListener('submit',(event) =>{
    var dt = document.getElementById('Data').value
    var dta = new Date(dt).toISOString()
    var data = new Date().toISOString()
    if(dta > data){
        document.getElementById('span').style.display = 'block'
        document.getElementById('Data').style.border = 'solid 1px red'
        event.preventDefault()
    } else{
        document.getElementById('span').style.display = 'none'
        document.getElementById('Data').style.border = 'solid 1px #413f3f'
    }
})